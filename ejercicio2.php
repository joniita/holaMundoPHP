<?php
    //recibo informacion del formulario HTML con metodo POST
    if ($_POST) {

        $name = $_POST['txtName'];
        echo $name;
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola!</h1>

    <form action="ejercicio2.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="txtName" id="name">

        <input type="submit" value="enviar">
    </form>
</body>
</html>