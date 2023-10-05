<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="contenedor">
    <form action="" method="get" enctype="multipart/form-data">
            <img src="./img/calculadora.png" alt="Imagen de calculadora">
            <h2>Calculadora:</h2>

            <label for="num1">Valor 1:</label>
            <input type="text" name="num1" size="5">
            <label for="num2">Valor 2:</label>
            <input type="text" name="num2" size="5"><br><br>
            <label for="operacion">Operación:</label>
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">División</option>
            </select><br><br>
            <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET['operacion'])) {
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operacion = $_GET['operacion'];
        switch ($operacion) {
            case "suma":
                echo "<p>El resultado de la suma entre $num1 y $num2 es: ".$num1+$num2."</p>";
                break;
            case "resta":
                echo "<p>El resultado de la resta entre $num1 y $num2 es: ".$num1-$num2."</p>";
                break;
            case "multiplicacion":
                echo "<p>El resultado de la multiplicacion entre $num1 y $num2 es: ".$num1*$num2."</p>";
                break;
            case "division":
                echo "<p>El resultado de la division entre $num1 y $num2 es: ".$num1/$num2."</p>";
                break;
        }
    }
    ?>
    </div>
</body>

</html>
