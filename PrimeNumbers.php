<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, tr, td, th{
            text-align: center;
            border: solid black 1px;
            padding: 7px;
            background-color: lightseagreen;
        }
        td{
            background-color: lightgray;
        }
        th{
            background-color: white;
        }
    </style>
    <title>Sieve of Eratosthenes</title>
</head>
<body>
    <?php
        $array = [];
        $firstArray = [];      //it will become useful later... (to make a table)

        for ($i=0; $i < 100; $i++) {

            $array[$i] = $i+1;
            $firstArray[] = $array[$i];     //copying $array into $firstArray
        }

        unset($array[0]);   //1 isn't a prime number

        for ($i=1; $i < 100; $i++) { 

            if( !($array[$i] == 2 || $array[$i] == 3 || $array[$i] == 5 || $array[$i] == 7)) { //if NOT

                if($array[$i]%2==0 || $array[$i]%3==0 || $array[$i]%5==0 || $array[$i]%7==0 ) {
                    
                    unset($array[$i]);  //unset is used to remove (unset) a variable, in this case we are removing a specific var inside the array
                }
            }
        }

        echo "<br><h2>Prime numbers calculated with the Sieve of Eratosthenes:</h2>";
       
        //******************* TABLE *******************//

        echo "<table>";
        $k = 0;
        for ($i=0; $i < 10; $i++) { 
            echo "<tr>";

            for ($j=0; $j < 10; $j++) { 

                //$temp = $j + $i;
                if ( !isset($array[$k]) ) {
                    
                    echo "<td>{$firstArray[$k]}</td>";   //NON prime numbers

                } else {

                    echo "<th>{$array[$k]}</th>";        //prime numbers
                }
                $k++;
            }
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>