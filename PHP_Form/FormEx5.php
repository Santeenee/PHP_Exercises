<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es5 </title>
    <style>
        input{
            margin: 10px;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--
        ESERCIZIO 5
        consegna masa longa
    -->  
    
    <!-- LOGIN FORM -->

    <form action="actionPHP/login.php" method="POST">

        <label for="email">Inserisci la tua email:</label>
        <br>
        <input type="email" name="email" placeholder="nome@mail.com" required>
        
        <br><br>

        <label for="password">Inserisci la tua password:</label>
        <br>
        <input type="password" name="password" placeholder="password" required>
        <br><br>
        <input type="submit" name="invia" value="INVIA DATI">  
    </form>
    
</body>
</html>