<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es4 SommaPosizPari</title>
</head>
<body>
    <?php
        #Crea un array, somma tutti i numeri al suo interno che hanno indice pari
        #indice $i = 0 è considerato pari

        $array = [3,2,0,9,4,7,5];
        $length = count($array);
        $sum = 0 ;
        
        for ($i=0; $i < $length; $i++) { 
            if($i % 2 == 0) {
                $sum += $array[$i];
            }
        }

        print_r($array);
        echo "<br>La somma di tutti i numeri con indice pari vale: $sum";
    ?>
</body>
</html>