<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Santini_Es1_ArrayAssociativi</title>
</head>
<body>
    <?php
        $DOCENTI = ["mario" => "inglese", "gianni"=>"matematica", "lorenzo"=>"informatica"];

        echo "Stampo l'array ordinato (per chiave)<br>";

        ksort($DOCENTI);
        foreach ($DOCENTI as $key => $value) {
            echo $key . '=>' . $value . ' ';
        }
        unset($key, $value);

        echo "<br><br>Stampo l'array ordinato (per valore)<br>";

        asort($DOCENTI);
        foreach ($DOCENTI as $key => $value) {
            echo $key . '=>' . $value . ' ';
        }

    ?>
</body>
</html>