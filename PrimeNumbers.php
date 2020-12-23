<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="preconnect" href="https://fonts.gstatic.com">    <!-- imported fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
            font-size: 130%;
        }
        
        /* styling the table */        
        table, tr, td, th{
            text-align: center;
            border: solid black 1px;
            padding: 7px;
            margin: 0;
            background-color: rgb(160,160,160);
        }
        table{ border-radius: 6px; }

        /* NON prime numbers standard background-color */
        td{
            background-color: rgb(130,130,130); /*grigio scuro*/
        }

        /* Prime numbers background-color */
        th{
            background-color: white;
        }
        
        /*background-color dei multipli di 2, 3, 5 e 7 */
        #multiplo2 {
            background-color: #588c7e;
        }
        #multiplo3 {
            background-color: #f2e394;
        }
        #multiplo5 {
            background-color: #f2ae72;
        }
        #multiplo7 {
            background-color: #d96459;
        }
        
        /* border-color of 2, 3, 5 and 7 */
        #n2{
            border: solid #588c7e 3px;
        }
        #n3{
            border: solid #f2e394 3px;
        }
        #n5{
            border: solid #f2ae72 3px;
        }
        #n7{
            border: solid #d96459 3px;
        }
    </style>
    <title>Sieve of Eratosthenes</title>
</head>
<body>
<?php
    $array = [];
    $firstArray = [];      //it will become useful later... (to make the table)

    //copying $array into $firstArray
    for ($i=0; $i < 100; $i++) {

        $array[$i] = $i+1;
        $firstArray[] = $array[$i];     
    }

    //1 isn't a prime number
    unset($array[0]);   

    for ($i=1; $i < 100; $i++) { 

        if( !($array[$i] == 2 || $array[$i] == 3 || $array[$i] == 5 || $array[$i] == 7) ) { //if NOT

            if($array[$i]%2==0 || $array[$i]%3==0 || $array[$i]%5==0 || $array[$i]%7==0 ) {
                
                unset($array[$i]);  //unset is used to remove (unset) a variable, in this case we are removing a specific var inside the array
            }
        }
    }

    echo "<h2>Prime numbers calculated with the Sieve of Eratosthenes:</h2>";
    echo "<p>Prime numbers have a white background color 
          <br>Other numbers have a colored background</p>";
    echo "<p>2,3,5 and 7 are surrounded by the same color as the background-color of their own multiples</p>";
    
    //******************* TABLE *******************//

    echo "<table>";
    $k = 0;
    for ($i=0; $i < 10; $i++) { 
        echo "<tr>";

        for ($j=0; $j < 10; $j++) { 

            //NON PRIME NUMBERS
            if ( !isset($array[$k]) ) {     

                if ($k != 0 || $k != 1) {  
                    
                    //adding some background-colors...                  
                    if        ($firstArray[$k] % 7 == 0) {                        
                        ?> <td id="multiplo7"> <?php echo "{$firstArray[$k]}" ?> </td> <?php

                    } else if ($firstArray[$k] % 5 == 0) {
                        ?> <td id="multiplo5"> <?php echo "{$firstArray[$k]}" ?> </td> <?php

                    } else if ($firstArray[$k] % 3 == 0) {
                        ?> <td id="multiplo3"> <?php echo "{$firstArray[$k]}" ?> </td> <?php

                    } else if ($firstArray[$k] % 2 == 0) {
                        ?> <td id="multiplo2"> <?php echo "{$firstArray[$k]}" ?> </td> <?php
                        
                    } else {
                        echo "<td>{$firstArray[$k]}</td>";   
                    }
    
                } else {
                    echo "<td>{$firstArray[$k]}</td>";   
                }
            //PRIME NUMBERS    
            } else {

                
                //adding some border-colors...
                switch ($array[$k]) {
                    case 2:
                        ?> <th id="n2"> <?php echo "{$array[$k]}" ?> </th> <?php
                    break;
                    case 3:
                        ?> <th id="n3"> <?php echo "{$array[$k]}" ?> </th> <?php
                    break;
                    case 5:
                        ?> <th id="n5"> <?php echo "{$array[$k]}" ?> </th> <?php
                    break;
                    case 7:
                        ?> <th id="n7"> <?php echo "{$array[$k]}" ?> </th> <?php
                    break;
                    default:
                        echo "<th>{$array[$k]}</th>";
                    break;
                }
            }
            $k++;
        }
        echo "</tr>";   //chiudo riga della tabella
    }
    echo "</table>";    //chiudo tabella

?>
</body>
</html>