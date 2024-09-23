<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=5");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/84dc13b7-a2e7-4b45-83ec-311e72e82900/de9jg8e-45f11b15-d4f8-49fd-9445-f4bfd36d9198.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzg0ZGMxM2I3LWEyZTctNGI0NS04M2VjLTMxMWU3MmU4MjkwMFwvZGU5amc4ZS00NWYxMWIxNS1kNGY4LTQ5ZmQtOTQ0NS1mNGJmZDM2ZDkxOTgucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.EBiF1mqK6XbdbR5moDz-mX2vUD4ZlowaMomyTq4B_TQ"
                        alt="" class="imagenObito" alt="imagen pepona obito" title="<?php echo $personaje['nombre']." ".$personaje['apellido']?>">
                    <p><?php echo $personaje['descripcion']?></p>
                    <div class="flexbox">
                        <div class="flex-item"><img src="assets/img/AGUA.png" alt="" class="icon-element"
                                title="AGUA">
                        </div>
                        <div class="flex-item"><img src="assets/img/RAYO.png" alt="" class="icon-element"
                                title="RAYO">
                        </div>
                        <div class="flex-item"><img src="assets/img/FUEGO.png" alt="" class="icon-element"
                                title="FUEGO"></div>
                        <div class="flex-item"><img src="assets/img/TIERRA.png" alt="" class="icon-element"
                                title="TIERRA"></div>
                        <div class="flex-item"><img src="assets/img/VIENTO.png" alt="" class="icon-element"
                                title="VIENTO"></div>
                        <div class="flex-item"><img src="assets/img/yang.png" alt="" class="icon-element"
                                title="YANG">
                        </div>
                        <div class="flex-item"><img src="assets/img/yin.png" alt="" class="icon-element"
                                title="YING">
                        </div>
                        <div class="flex-item"><img src="assets/img/madera.png" alt="" class="icon-element"
                                title="MADERA"></div>
                        <div class="flex-item"><img src="assets/img/ying-yang.png" alt="" class="icon-element"
                                title="YING-YANG"></div>
                    </div>