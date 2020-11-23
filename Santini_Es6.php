<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es6</title>
</head>
<body>
    <?php 
        #Scrivere un programma che riempia in modo casuale un array sequenziale
        #di 20 numeri interi compresi tra 1 e 100 e
        #separi i dispari dai pari in altri due array
        $random = 0;
        $array = [];
        $ArrayPari = [];
        $ArrayDispari = [];

        for ($i=0; $i < 20; $i++) { 
            $random = rand(1,100);   #between 1 and 100 included

            $array[$i] = $random;    #filling the array with random values
        }

        print_r($array);

        for ($i=0; $i < 20; $i++) { 

            if ($array[$i] % 2 == 0) {  #Is it even?

                $ArrayPari[$i] = $array[$i];

            } else {

                $ArrayDispari[$i] = $array[$i];
            }
        }

        $ArrayPari = array_values($ArrayPari);  #rearrange the indexes
        $ArrayDispari = array_values($ArrayDispari);

        echo "<br><br>Array di numeri pari:<br>";
        print_r($ArrayPari);

        echo "<br>Array di numeri dispari:<br>";
        print_r($ArrayDispari);
    ?>
</body>
</html>