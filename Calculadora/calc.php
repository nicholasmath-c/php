<?php
    include("./index.html");
    if($_POST){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $operacao = $_POST["operacao"];

        switch($operacao){
            case "Soma": echo $n1+$n2; break;
            case "Subtração": echo $n1-$n2; break;
            case "Multiplicação": echo $n1*$n2; break;
            case "Divisão": echo $n1/$n2; break;
        }
    }
?>
