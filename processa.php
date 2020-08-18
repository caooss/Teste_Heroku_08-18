<?php
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $imc=0;

    $imc=$peso/($altura*$altura);

    echo 'IMC = '.$imc.'';
?>
