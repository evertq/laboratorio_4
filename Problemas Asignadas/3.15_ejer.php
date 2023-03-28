<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area del rectangulo</title>
</head>
<body>
    <form action="areaRectangulo15.php" method="post">
        <table>
            <tr>
                <td>
                    <label>Base:</label>
                </td>
                <td>
                    <input type="Number" step="0.00001" name="base" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Altura:</label>
                </td>
                <td>
                    <input type="Number" step="0.00001" name="altura" required>
                </td>
                <td>
                    <select name="select"required>
                        <option value="cm">centimetros</option>
                        <option value="mt">metros</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="submit" value="Calcular area del Rectangulo">
    </form>
</body>
</html>