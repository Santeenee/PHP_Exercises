<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es4 AssociativeArrays</title>
</head>
<body>
    <?php
        $VOTIALUNNI = [
            ["cognome" => "Rossi",   "nome"=>"Luca",    "voto"=>"5"],
            ["cognome" => "Bianchi", "nome"=>"Mario",   "voto"=>"9"],
            ["cognome" => "Verdi",   "nome"=>"Roberta", "voto"=>"3"],
            ["cognome" => "aa",      "nome"=>"Giovanni","voto"=>"4"],
            ["cognome" => "bb",      "nome"=>"Domenico","voto"=>"7"],
            ["cognome" => "cc",      "nome"=>"Laura",   "voto"=>"6"],
            ["cognome" => "dd",      "nome"=>"Gianni",  "voto"=>"2"]        
        ];

        echo "Alunni con media insufficiente:<br><br>";

        for ($i = 0; $i < count($VOTIALUNNI); $i++) { 

            foreach ($VOTIALUNNI[$i] as $key => $value) {
                if ($key == 'voto' && $value < 6) {
                    echo $VOTIALUNNI[$i]['cognome'] . ' ' . $VOTIALUNNI[$i]['nome'];
                    echo ' ha preso ' . $value . '<br>';
                }                         
            }            
        }

    ?>
</body>
</html>