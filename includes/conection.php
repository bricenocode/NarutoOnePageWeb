<?php
declare(strict_types=1);

/*
 * Local configuration is read from environment variables or a private .env file.
 * Never commit real credentials. Copy .env.example to .env for a local database.
 */
function loadLocalEnv(string $path): void
{
    if (!is_readable($path)) {
        return;
    }

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }
        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $value = trim($value, "\"'");
        if ($key !== '' && getenv($key) === false) {
            putenv($key . '=' . $value);
        }
    }
}

loadLocalEnv(dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env');

$host = getenv('NARUTO_DB_HOST') ?: '127.0.0.1';
$port = getenv('NARUTO_DB_PORT') ?: '3306';
$username = getenv('NARUTO_DB_USER') ?: '';
$password = getenv('NARUTO_DB_PASSWORD') ?: '';
$dbname = getenv('NARUTO_DB_NAME') ?: 'onepagenaruto';
$pdo = null;

if ($username !== '') {
    try {
        $pdo = new PDO(
            "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8mb4",
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    } catch (PDOException $exception) {
        error_log('Naruto One Page database unavailable: ' . $exception->getMessage());
    }
}

/** Small read-only fallback so the presentation remains usable without MySQL. */
final class NarutoFallbackStatement
{
    private array $row;
    public function __construct(private $resolver, array $row = []) { $this->row = $row; }
    public function execute(array $params = []): bool { $this->row = ($this->resolver)($params); return true; }
    public function fetch(int $mode = PDO::FETCH_ASSOC): array|false { return $this->row ?: false; }
}

final class NarutoFallbackPDO
{
    private array $characters = [
        1 => ['nombre' => 'Naruto', 'apellido' => 'Uzumaki', 'descripcion' => 'Naruto Uzumaki es un joven ninja de Konoha, conocido por su espíritu indomable y su determinación. Sueña con convertirse en Hokage y proteger a sus seres queridos.'],
        2 => ['nombre' => 'Sasuke', 'apellido' => 'Uchiha', 'descripcion' => 'Sasuke Uchiha recorre un viaje de venganza, poder y redención mientras intenta comprender el legado de su clan y su conexión con Naruto.'],
        3 => ['nombre' => 'Kakashi', 'apellido' => 'Hatake', 'descripcion' => 'Kakashi Hatake es el líder del Equipo 7, un shinobi talentoso que guía a Naruto, Sasuke y Sakura con experiencia y humor reservado.'],
        4 => ['nombre' => 'Sakura', 'apellido' => 'Haruno', 'descripcion' => 'Sakura Haruno se convierte en una kunoichi médica excepcional, demostrando una fuerza física y emocional decisiva para proteger a su equipo.'],
        5 => ['nombre' => 'Obito', 'apellido' => 'Uchiha', 'descripcion' => 'Obito Uchiha queda marcado por la pérdida y la guerra, y su historia explora la redención, la manipulación y el poder de recuperar la esperanza.'],
        6 => ['nombre' => 'Itachi', 'apellido' => 'Uchiha', 'descripcion' => 'Itachi Uchiha sacrifica su reputación para proteger a Konoha y a su hermano, convirtiéndose en uno de los personajes más complejos de la saga.'],
        7 => ['nombre' => 'Nagato', 'apellido' => '', 'descripcion' => 'Nagato, conocido como Pain, busca una paz absoluta tras sufrir la guerra. Su enfrentamiento con Naruto plantea preguntas sobre justicia, dolor y perdón.'],
        8 => ['nombre' => 'Jiraiya', 'apellido' => '', 'descripcion' => 'Jiraiya, uno de los Legendarios Sannin, entrena a Naruto y deja un legado de valentía, sabiduría y esperanza para la siguiente generación.'],
    ];
    private array $villages = [1 => ['nombre' => 'Aldea Oculta de la Hoja', 'contenido' => 'Konoha es el hogar de Naruto y una de las Cinco Grandes Aldeas Shinobi.'], 2 => ['nombre' => 'Aldea Oculta de las Nubes', 'contenido' => 'Kumogakure se encuentra en el País del Rayo y sus ninjas dominan el rayo y el kenjutsu.'], 3 => ['nombre' => 'Aldea Oculta entre las Rocas', 'contenido' => 'Iwagakure pertenece al País de la Tierra y sus shinobi dominan técnicas de naturaleza Tierra.'], 4 => ['nombre' => 'Aldea Oculta de la Niebla', 'contenido' => 'Kirigakure es una aldea del País del Agua, famosa por sus técnicas de Elemento Agua.'], 5 => ['nombre' => 'Aldea Oculta de la Arena', 'contenido' => 'Sunagakure se encuentra en el País del Viento y protege sus tradiciones en un entorno desértico.']];
    private array $jutsus = [1 => ['nombre' => 'Rasengan', 'contenido' => 'Una esfera de chakra giratorio concentrado en la palma.'], 2 => ['nombre' => 'Fuerza de un centenar', 'contenido' => 'Una técnica de control de chakra que libera una fuerza extraordinaria.'], 3 => ['nombre' => 'Chidori', 'contenido' => 'Una descarga de chakra rayo concentrada para el combate cercano.'], 4 => ['nombre' => 'Amaterasu', 'contenido' => 'Llamas negras que arden hasta consumir su objetivo.'], 5 => ['nombre' => 'Modo Sabio', 'contenido' => 'El equilibrio entre energía natural y chakra amplifica las capacidades del ninja.'], 6 => ['nombre' => 'Jutsu de invocación', 'contenido' => 'Permite traer aliados al campo de batalla mediante un pacto.'], 7 => ['nombre' => 'Shinra Tensei', 'contenido' => 'Una fuerza de repulsión capaz de alterar el terreno.'], 8 => ['nombre' => 'Kamui', 'contenido' => 'Una técnica espacio-temporal que conecta dimensiones.'], 9 => ['nombre' => 'Jutsu médico', 'contenido' => 'Control preciso del chakra para sanar heridas.'], 10 => ['nombre' => 'Rasenshuriken', 'contenido' => 'Una evolución del Rasengan con naturaleza de viento.']];

    public function query(string $sql): NarutoFallbackStatement
    {
        preg_match('/id_personaje\s*=\s*(\d+)/i', $sql, $match);
        if ($match) return new NarutoFallbackStatement(static fn () => [], $this->characters[(int) $match[1]] ?? []);
        preg_match('/id_aldea\s*=\s*(\d+)/i', $sql, $match);
        if ($match) return new NarutoFallbackStatement(static fn () => [], $this->villages[(int) $match[1]] ?? []);
        return new NarutoFallbackStatement(static fn () => []);
    }

    public function prepare(string $sql): NarutoFallbackStatement
    {
        if (stripos($sql, 'id_aldea') !== false) {
            return new NarutoFallbackStatement(fn (array $params) => $this->villages[(int) ($params[':id'] ?? 0)] ?? []);
        }
        if (stripos($sql, 'id_jutsu') !== false) {
            return new NarutoFallbackStatement(fn (array $params) => $this->jutsus[(int) ($params[':id'] ?? 0)] ?? []);
        }
        return new NarutoFallbackStatement(static fn () => []);
    }
}

if ($pdo === null) {
    $pdo = new NarutoFallbackPDO();
}
?>
