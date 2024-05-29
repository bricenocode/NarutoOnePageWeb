<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=6");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<img src="https://itachiuchiha.net/wp-content/uploads/2021/07/Itachi.png" alt=""
                        class="imagenItachi" alt="imagen pepona Itachi" title="<?php echo $personaje['nombre']."".$personaje['apellido']?>">
                    <p><?php echo $personaje['descripcion']?></p>
                    <div class="flexbox">
                        <div class="flex-item"><img src="../assets/img/yang.png" alt="" class="icon-element"
                                title="YANG">
                        </div>
                        <div class="flex-item"><img src="../assets/img/yin.png" alt="" class="icon-element"
                                title="YING">
                        </div>
                        <div class="flex-item"><img src="../assets/img/AGUA.png" alt="" class="icon-element"
                                title="AGUA">
                        </div>
                        <div class="flex-item"><img src="../assets/img/FUEGO.png" alt="" class="icon-element"
                                title="FUEGO"></div>
                        <div class="flex-item"><img src="../assets/img/VIENTO.png" alt="" class="icon-element"
                                title="VIENTO"></div>
                    </div>