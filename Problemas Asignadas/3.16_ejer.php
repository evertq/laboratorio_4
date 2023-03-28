<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area del triangulo</title>
</head>
<body>
    <h1>Area del triangulo</h1>
    <form method="POST">
        <label>Base:</label>
        <input type="number" name="base" step="0.0001" required>
        <br>
        <label>Altura:</label>
        <input type="number" name="altura" step="0.0001" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Area">
    </form>
    <?php
    //escribe un programa que calcule el area de un triangulo, se debe de introducir por teclado
    function calcularAreaTriangulo($base,$altura) {
        $area = ($base*$altura)/2;
        return $area;
    }
    
    if(isset($_POST['calcular'])){
        $Base = $_POST['base'];
        $Altura = $_POST['altura'];
        $Areatriangulo = calcularAreaTriangulo($Base,$Altura);
        echo "El area del triangulo es: ".$Areatriangulo;
    }    
    ?>
</body>
</html>