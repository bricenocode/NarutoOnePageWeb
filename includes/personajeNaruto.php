<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=1");
$naruto = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<p><?php echo $naruto['descripcion']; ?></p>
<img src="https://i.pinimg.com/originals/d3/46/91/d346917deed14e8075f531c9d8c46ab7.png" alt="" class="imagenNaruto"
    alt="imagen pepona" title="<?php echo $naruto['nombre']." ".$naruto['apellido']; ?>">
<div class="flexbox">
    <div class="flex-item"><img src="assets/img/INCENDIO.png" alt="" class="icon-element" title="INCENDIO"></div>
    <div class="flex-item"><img src="assets/img/VIENTO.png" alt="viento" class="icon-element" title="VIENTO"></div>
    <div class="flex-item"><img src="assets/img/yang.png" alt="" class="icon-element" title="YANG">
    </div>
    <div class="flex-item"><img src="assets/img/TIERRA.png" alt="" class="icon-element" title="TIERRA"></div>
    <div class="flex-item"><img src="assets/img/AGUA.png" alt="" class="icon-element" title="AGUA">
    </div>
    <div class="flex-item"><img src="assets/img/FUEGO.png" alt="" class="icon-element" title="FUEGO"></div>
</div>