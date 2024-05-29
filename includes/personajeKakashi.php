<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=3");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<img src="https://i.pinimg.com/originals/8b/bf/c3/8bbfc35c176cf377d2f350db6a9af56d.png"
                        class="imagenKakashi" alt="imagen kakashi" title="<?php echo $personaje['nombre']." ".$personaje['apellido']; ?>">
                    <p><?php echo $personaje['descripcion']?></p>
                    <div class="flexbox">
                        <div class="flex-item"><img src="../assets/img/AGUA.png" alt="" class="icon-element"
                                title="AGUA">
                        </div>
                        <div class="flex-item"><img src="../assets/img/RAYO.png" alt="" class="icon-element"
                                title="RAYO">
                        </div>
                        <div class="flex-item"><img src="../assets/img/FUEGO.png" alt="" class="icon-element"
                                title="FUEGO"></div>
                        <div class="flex-item"><img src="../assets/img/TIERRA.png" alt="" class="icon-element"
                                title="TIERRA"></div>
                        <div class="flex-item"><img src="../assets/img/VIENTO.png" alt="" class="icon-element"
                                title="VIENTO"></div>
                    </div>