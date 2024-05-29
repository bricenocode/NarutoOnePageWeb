<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=2");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<img src="https://i.pinimg.com/originals/5b/91/42/5b9142c911364df6967253caf666ed7e.png" alt=""
                        class="imagenSasuke" alt="imagen pepona" title="<?php echo $personaje['nombre']." ".$personaje['apellido']; ?>">
                    <p><?php echo $personaje['descripcion']; ?></p>
                    <div class="flexbox">
                        <div class="flex-item"><img src="../assets/img/yang.png" alt="" class="icon-element"
                                title="YANG">
                        </div>
                        <div class="flex-item"><img src="../assets/img/RAYO.png" alt="" class="icon-element"
                                title="RAYO">
                        </div>
                        <div class="flex-item"><img src="../assets/img/FUEGO.png" alt="" class="icon-element"
                                title="FUEGO"></div>
                    </div>