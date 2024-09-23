<?php
include 'conection.php';

$aldeas = [
    1 => "assets/img/konoha.jpg",
    5 => "assets/img/aldeaArena.webp",
    4 => "assets/img/aldeaNiebla.webp",
    2 => "assets/img/aldeaNubes.jpg",
    3 => "assets/img/aldeaRocas.webp"
];

echo '<div class="flexbox--aldea">';

foreach ($aldeas as $id => $image) {
    $query_aldeas = $pdo->prepare("SELECT nombre, contenido FROM aldea WHERE id_aldea = :id");
    $query_aldeas->execute([':id' => $id]);
    $aldea = $query_aldeas->fetch(PDO::FETCH_ASSOC);

    if ($aldea) {
        echo '
        <div class="carta">
            <div class="cara frontal">
                <div class="imagen-posterior">
                    <img src="' . htmlspecialchars($image) . '" alt="">
                </div>
            </div>
            <div class="cara trasera">
                <h2>' . htmlspecialchars($aldea['nombre']) . '</h2>
                <p>' . htmlspecialchars($aldea['contenido']) . '</p>
            </div>
        </div>';
    }
}

echo '</div>';
?>
