<?php
    include("./index.html");
    if($_POST){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $operacao = $_POST["operacao"];
        $resultado;

        switch($operacao){
            case "Soma": $resultado=$n1+$n2; break;
            case "Subtração": $resultado=$n1-$n2; break;
            case "Multiplicação": $resultado=$n1*$n2; break;
            case "Divisão": $resultado=$n1/$n2; break;
        }

        echo $resultado;
    }
?>
