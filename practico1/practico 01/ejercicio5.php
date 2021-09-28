<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcula tu IMC:</h1>
    <form method="POST" action="ejercicio5.php">

        <label>Peso:<input type="text" name="peso"></label>
        <label>Altura:<input type="text" name="altura"></label>

        <input type="submit">

    </form>
    <?php
         if((!empty($_POST['peso']))&&(!empty($_POST['altura']))){
            $peso=$_POST['peso'];
            $altura=$_POST['altura'];
            $imc=$peso/(($altura)*2);
            if($imc<18.5){
                echo 'Tienes bajo peso.';
            }
            elseif(($imc>18.5)&&($imc<24.99)){
                echo 'Tienes peso regular.';
            }
            elseif($imc >= 25){
                echo 'Tienes sobrepeso.';
            }
            elseif($imc >= 30){
                echo 'Tienes obesidad.';
            }
         }
    ?>


</body>
</html>