<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es3 AssociativeArrays</title>
</head>
<body>
    <?php 
        //Scrivere un programma che, definito un array associativo
        //contenente cognome, nome, numero maglia dei calciatori della
        //propria squadra, li visualizzi in ordine di numero di maglia.

        $CALCIATORI = [
            ["cognome" => "Rossi",   "nome"=>"Luca",    "nMaglia"=>"1"],
            ["cognome" => "Bianchi", "nome"=>"Mario",   "nMaglia"=>"9"],
            ["cognome" => "Verdi",   "nome"=>"Roberta", "nMaglia"=>"11"],
            ["cognome" => "aa",      "nome"=>"Giovanni","nMaglia"=>"12"],
            ["cognome" => "bb",      "nome"=>"Domenico","nMaglia"=>"33"],
            ["cognome" => "cc",      "nome"=>"Laura",   "nMaglia"=>"14"],
            ["cognome" => "dd",      "nome"=>"Gianni",  "nMaglia"=>"99"]        
        ];

        asort($CALCIATORI);

        echo "Calciatori visualizzati in ordine di numero di maglia:<br>";

        for ($i = 0; $i < count($CALCIATORI); $i++) { 

            foreach ($CALCIATORI[$i] as $key => $value) {
                if($key == 'nome') {
                    echo "$value"; 
                }
                
                if($key == 'nMaglia') {
                    echo " $value";                    
                }                
            }
            echo "<br>";
        }

    ?>
</body>
</html>