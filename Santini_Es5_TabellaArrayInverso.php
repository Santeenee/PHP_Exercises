<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es5 TabellaArrayInverso</title>
</head>
<body>
    <?php 
        #Creare array di interi e stamparlo in ordine inverso in una tabella con sfondo giallo
        $array = [3,21,34,9,55];
		$length = count($array);

        echo '<table border=1 style="background-color: yellow;"><tr>';

        for ($i = $length-1; $i >= 0; $i--) { 
            
            echo "<td>$array[$i]</td>";
        }
        echo "</tr></table>";

    ?>
</body>
</html>