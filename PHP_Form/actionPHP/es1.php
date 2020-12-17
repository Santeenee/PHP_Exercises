<?php
    
    $n1 = $_GET['num1'];
    $n2 = $_GET['num2'];

    $somma = $n1 + $n2;
    $prodotto = $n1 * $n2;

    echo "<h2>Risultati</h2>";
    
    echo "$n1 + $n2 = $somma <br>";
    echo "$n1 * $n2 = $prodotto";
?>