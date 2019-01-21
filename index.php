<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculadora</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <form method="post" action="handle.php">
            <input type="radio" name="operacion" value="suma" checked>SUMA<br>
            <input type="radio" name="operacion" value="resta">RESTA<br>
            <input type="radio" name="operacion" value="multiplicacion">MULTIPLICAR<br>
            <input type="radio" name="operacion" value="division">DIVIDIR<br>
            Numero1: <br>
            <input type="text" name="num1"><br>
            Numero2: <br>
            <input type="text" name="num2"><br>
            <input type="submit" name="enviar" id="enviar" value="Realizar operacion">
        </form>
    </body>
</html>