<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=4");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>
<img src="https://i.pinimg.com/originals/cb/47/a2/cb47a2d3c62f3d40ec7239fbf2a7891c.png" alt=""
                        class="imagenSakura" alt="imagen pepona" title="<?php echo $personaje['nombre']." ".$personaje['apellido']; ?>">
                    <p><?php echo $personaje['descripcion']?></p>