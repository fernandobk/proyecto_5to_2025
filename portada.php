<?php
    session_start();

    $nombre_completo = $_SESSION['nombre_completo'];

    echo "<h1>Bienvenido $nombre_completo</h1>";

?>
