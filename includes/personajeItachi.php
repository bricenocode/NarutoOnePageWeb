<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=6");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

    <img src="https://imgs.search.brave.com/nNcEcgZPdx4qB70HMiRC43pnQfdaees3rTQJJyW6OrQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cG5ncGxheS5jb20v/d3AtY29udGVudC91/cGxvYWRzLzEyL0l0/YWNoaS1VY2hpaGEt/VHJhbnNwYXJlbnQt/RnJlZS1QTkcucG5n" alt=""
                        class="imagenItachi" alt="imagen pepona Itachi" title="<?php echo $personaje['nombre']."".$personaje['apellido']?>">
                    <p><?php echo $personaje['descripcion']?></p>
                    <div class="flexbox">
                        <div class="flex-item"><img src="assets/img/yang.png" alt="" class="icon-element"
                                title="YANG">
                        </div>
                        <div class="flex-item"><img src="assets/img/yin.png" alt="" class="icon-element"
                                title="YING">
                        </div>
                        <div class="flex-item"><img src="assets/img/AGUA.png" alt="" class="icon-element"
                                title="AGUA">
                        </div>
                        <div class="flex-item"><img src="assets/img/FUEGO.png" alt="" class="icon-element"
                                title="FUEGO"></div>
                        <div class="flex-item"><img src="assets/img/VIENTO.png" alt="" class="icon-element"
                                title="VIENTO"></div>
                    </div>