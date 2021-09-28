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

        //arreglo indexado
        $nombres=['franco', 'agus', 'aaron', 'asda'];

        //push a indexado
        array_push($nombres, 'mili');
        // o tambien se puede usar $nombres[]='mili'; y se agrega al final igualmente

        //forma de ver el arreglo, parecido al console.log
        var_dump($nombres);
        //o tambien print_r($nombres);

        //arreglo asosiativo
        $edades = [
            'franco'=> 23,
            'agus'=>25,
            'aaron'=>19,
            'asda'=>30
        ]

        // push asosiativo $edades['mili'] = 25;


    ?>

</body>
</html>