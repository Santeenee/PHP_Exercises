<?php
    
    $str = $_GET['str'];
    $strDaStampare = $str;
    $count = 0;

    $str = strtolower($str);   //rimuovo le maiuscole
    
    //la riga 10 qua sotto sostituisce tutto cio che è fatto da riga 11 a 29
    //$arrChar = str_split(preg_replace('/\s+/u','',$str)); //take string as a parameter, it transforms that into a char array without spaces (\s)
    $arrChar = str_split($str);

    echo "<h3>stringa senza maiuscole:</h3>";
    print_r($arrChar);

    for ($i=0; $i < (sizeof($arrChar)); $i++) { 
        if ($arrChar[$i] == " ") {  //rimuovo gli spazi
            unset($arrChar[$i]);
            $arrChar = array_values($arrChar);
        }
    }

    //non comprendo perché dovrei fare l'unset due volte...
    for ($i=0; $i < (sizeof($arrChar)); $i++) { 
        if ($arrChar[$i] == " ") {  //rimuovo gli spazi
            unset($arrChar[$i]); 
            $arrChar = array_values($arrChar);
        }
    }

    echo "<h3>stringa senza spazi:</h3>";
    print_r($arrChar);  

    $length = sizeof($arrChar);
    $j = $length - 1;

    if ($length % 2 == 0) {     //controllo se è palindroma
        for ($i=0; $i < $length/2; $i++) {  //se pari ciclo fino a (length/2)
        
            if ($arrChar[$i] == $arrChar[$j]) {
                $count++;
            }
            $j--;
        }
    } else {
        for ($i=0; $i < $length/2 - 1; $i++) { //se dispari ciclo fino a (length/2 - 1)
        
            if ($arrChar[$i] == $arrChar[$j]) {
                $count++;
            }
            $j--;
        }
    }

    echo "<h1>Risultato</h1>";

    if ($count == floor($length/2)) {
        echo "<p>[$strDaStampare] è palindroma</p>";
    } else {
        echo "<p>[$strDaStampare] NON è palindroma</p>";
    }
?>
