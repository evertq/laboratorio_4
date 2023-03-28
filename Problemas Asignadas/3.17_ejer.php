

<?php
    $numeros = [1,2,3,4];
    $suma = array_sum($numeros);
    $total_numeros = count($numeros);
    $media = $suma/$total_numeros;
    $media = array_sum($numeros)/count($numeros);
    echo "la media es: $media";
?>