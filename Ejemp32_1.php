<?php
    //entrada de datos
    if(isset($_GET['nombre']) && isset($_GET['edad'])){
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        echo "Hola $nombre, que tengas un buen dia.</p>";
        echo "Tu edad es, $edad.</p>";
    }
?>
