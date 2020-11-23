<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es3 PariDispari</title>
</head>
<body>
    <?php
        #Fill an array with random values, then count how many even and odd numbers are in it
        $random = 0;
        $array = [];
        $CountPari = 0;
        $CountDispari = 0;

        for ($i=0; $i < 20; $i++) { 
            $random = rand(1,10);   #between 1 and 10 included

            $array[$i] = $random;   #filling the array with random values between 1 and 10
        }

        print_r($array); 

        for ($i=0; $i < 20; $i++) { 

            if ($array[$i] % 2 == 0) {  #Is it even?

                $CountPari++;

            }         
        }

        $CountDispari = 20 - $CountPari;

        echo "<br>Ci sono $CountPari numeri pari e $CountDispari numeri dispari";
    ?>
</body>
</html>