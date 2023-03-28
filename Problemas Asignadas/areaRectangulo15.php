<?php
    //escribe un programa que calcule el area de un rectangulo, se debe de introducir por teclado
    if(isset($_POST['base'])){
        $Base = $_POST['base'];
        $Altura = $_POST['altura'];
        $Area = $Base*$Altura;
        echo "El area del rectangulo es: ".$Area;
    }    
?>