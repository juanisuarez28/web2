<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if((!empty($_POST['nombre']))&&(!empty($_POST['apellido']))&&(!empty($_POST['nombre']))){
            $apellido=$_POST['apellido'];
            $nombre=$_POST['nombre'];
            $edad=$_POST['edad'];
            echo '<ul>';
            echo "<li>$apellido</li>";
            echo "<li>$nombre</li>";
            echo "<li>$edad</li>";
        }
    ?>

    <form method="POST" action="ejercicio2.php">
        <label>Nombre:<input type="text" name="nombre"></label>
        <label>Apellido:<input type="text" name="apellido"></label>
        <label>Edad<input type="number" name="edad"></label>

        <input type="submit">

    </form>

</body>
</html>

