<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        p {
            font-weight: 900;
        }
    </style>
    <title>Ex5 Login</title>
</head>
<body>
    
<?php
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $f = 0; //flag

    $arr = [
        ["email" => "ciccio@mail.com",
         "password" => "123stella"],

        ["email" => "pippo@mail.com",
        "password" => "mammolo"], 

        ["email" => "puccio@mail.com",
        "password" => "mattarella"],

        ["email" => "topolino@mail.com",
        "password" => "Benone77"]
    ];

    for ($i=0; $i < sizeof($arr); $i++) { 
        
        if ($arr[$i]["email"] == $email) {
            if($arr[$i]["password"] == $pass){
                echo "<p>";
                echo "<br><br>Accesso avvenuto con successo!";
                echo "<br><br>Ciao [$email], siamo felici di vederti!<br>";
                echo "</p>";
                $f = 1;
                break;
            } else {
                $f = 1;
                echo "<p>Password sbagliata, riprova!</p>";                
                break;
            }
        } else if ($arr[$i]["password"] == $pass) {
            echo "<p>Password esistente ma mail sbagliata!</p>";
            $f = 1;
            break;
        }
    }

    if ($f == 0) {
        echo "<p>Email e password non esistenti, riprova!</p>";
    }

    echo "<br>";
    print_r($arr);
    echo "<br><br>";
?>

<a href="../FormEx5.php">TORNA ALLA HOME</a>
</body>
</html>