<?php
    require_once("operaciones.php");

    if(isset($_GET["numero1"])&&isset($_GET["numero2"])&&isset($_GET["operacion"])){
         //si se cumple esta condicion, es pq llego la info correctamente
         $numero1= intval($_GET["numero1"]);//transformamos de string(o de cualquier otro tipo) a int y lo guardamos en una variable
         $numero2= intval($_GET["numero2"]);
         $operacion= $_GET["operacion"];
        switch ($operacion) {
            case 'sumar':
                $resultado=sumar($numero1, $numero2);
                $simbolo="+";
                break;
            case 'restar':
                $resultado=restar($numero1, $numero2);
                $simbolo="-";
                break;
            case 'multiplicar':
                $resultado=multiplicar($numero1, $numero2);
                $simbolo="*";
                break;
            case 'dividir':
                $resultado=dividir($numero1, $numero2);
                $simbolo="/";
                break;
            default:
                $resultado= "operacion invalida xd";
                break;
        }
        echo "$numero1 $simbolo $numero2=$resultado";
    }else{
        echo "Faltan parametros pa";
        var_dump($_GET);
    }

?>