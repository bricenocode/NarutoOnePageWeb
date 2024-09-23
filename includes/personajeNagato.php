<?php
include 'conection.php';

$query_description = $pdo->query("SELECT nombre, apellido, descripcion FROM personaje WHERE id_personaje=7");
$personaje = $query_description->fetch(PDO::FETCH_ASSOC);
?>

<img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/84dc13b7-a2e7-4b45-83ec-311e72e82900/ddddtwr-ef11f78c-4300-4571-85d6-5596df746a5c.png/v1/fill/w_706,h_613/edo_nagato_render_3__naruto_mobile__by_maxiuchiha22_ddddtwr-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NjEzIiwicGF0aCI6IlwvZlwvODRkYzEzYjctYTJlNy00YjQ1LTgzZWMtMzExZTcyZTgyOTAwXC9kZGRkdHdyLWVmMTFmNzhjLTQzMDAtNDU3MS04NWQ2LTU1OTZkZjc0NmE1Yy5wbmciLCJ3aWR0aCI6Ijw9NzA2In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.nAGkgeH1DV2STdI4l6Wx8HJyeTNSqI57m6zyaRM6rtM"
                        alt="" class="imagenNagato" alt="imagen pepona nagato" title="<?php echo $personaje['nombre']." ".$personaje['nombre']?>">
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
                    </div>