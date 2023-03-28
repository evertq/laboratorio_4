<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volumen de un Cono</title>
</head>
<body>
    <h1>volumen de un Cono</h1>
    <form method="POST">
        <label>Radio:</label>
        <input type="number" name="radio" step="0.0001" required>
        <br>
        <label>Altura:</label>
        <input type="number" name="altura" step="0.0001" required>
        <br>
        <input type="submit" name="calcular" value="Calcular Volumen">
    </form>
    <?php 
    function volumenDeCono($radio, $altura) {
        return (M_PI * pow($radio, 2) * $altura) / 3;;
    }
    
    if(isset($_POST['calcular'])){
        $Radio = $_POST['radio'];
        $Altura = $_POST['altura'];
        $Volumen = volumenDeCono($Radio,$Altura);
        echo "El Volumen del Cono es: ".$Volumen;
    }    
?>
</body>
</html>

