<?php
    
    $n = $_GET['num'];
    echo "<h2>Risultato</h2>";
    
    for ($i=0; $i <= 10; $i++) { 
        $multiplo = $n * $i;
        echo "$multiplo ";
    }
    
?>