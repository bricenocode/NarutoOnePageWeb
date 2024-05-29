<?php
include 'conection.php';

$jutsus = [
    1 => "https://i1.sndcdn.com/artworks-ObJ16eu38XL6tDim-3zMhNg-t500x500.jpg",
    10 => "https://i1.sndcdn.com/artworks-zQEuxqzTOgIPBFmG-5Kl5GQ-t500x500.jpg",
    5 => "https://i1.sndcdn.com/artworks-000317232861-bi4d4w-t500x500.jpg",
    9 => "https://i1.sndcdn.com/artworks-PqGAftwb2JQmLKTz-ShwEoA-t500x500.jpg",
    4 => "https://i1.sndcdn.com/artworks-000430837671-s0nshi-t500x500.jpg",
    3 => "https://i1.sndcdn.com/artworks-000149305576-lybniz-t500x500.jpg",
    8 => "https://i1.sndcdn.com/artworks-000230584409-v7wor9-t500x500.jpg",
    2 => "../assets/img/sakura_Transformacion.webp",
    6 => "https://i1.sndcdn.com/artworks-j8v9S9csogtJmJhi-2u3wlg-t500x500.jpg",
    7 => "https://qph.cf2.quoracdn.net/main-qimg-dac9b2f3eb1fefe97d061ad7c16e556c-lq"
];

foreach ($jutsus as $id => $image) {
    $query_jutsu = $pdo->prepare("SELECT nombre, contenido FROM jutsus WHERE id_jutsu = :id");
    $query_jutsu->execute([':id' => $id]);
    $jutsu = $query_jutsu->fetch(PDO::FETCH_ASSOC);

    if ($jutsu) {
        echo '
        <div class="contenedor">
            <div class="imagen">
                <img src="' . htmlspecialchars($image) . '" alt="" class="imagen1">
            </div>
            <div class="contenido">
                <h2>' . htmlspecialchars($jutsu['nombre']) . '</h2>
                <p>' . htmlspecialchars($jutsu['contenido']) . '</p>
            </div>
        </div>';
    }
}
?>