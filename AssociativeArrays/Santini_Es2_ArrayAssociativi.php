<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Santini_Es1_ArrayAssociativi</title>
</head>
<body>
    <?php
        $ALUNNI = [
            ["cognome" => "Rossi",   "nome"=>"Luca",    "classe"=>"5B"],
            ["cognome" => "Bianchi", "nome"=>"Mario",   "classe"=>"4B"],
            ["cognome" => "Verdi",   "nome"=>"Roberta", "classe"=>"3A"],
            ["cognome" => "aa",      "nome"=>"Giovanni","classe"=>"1C"],
            ["cognome" => "bb",      "nome"=>"Domenico","classe"=>"5INB"],
            ["cognome" => "cc",      "nome"=>"Laura",   "classe"=>"5INB"],
            ["cognome" => "dd",      "nome"=>"Gianni",  "classe"=>"5INB"]        
        ];

        echo $ALUNNI[2]['classe'];
        
    ?>
</body>
</html>