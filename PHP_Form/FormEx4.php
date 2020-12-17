<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es4 Palindrome</title>
    <style>
        input{
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--
        ESERCIZIO 4
        Scrivere un programma con una funzione che verifichi 
        se una stringa immessa sia palindroma o no
    -->  
    
    <form action="actionPHP/es4.php" method="GET">

        <label for="str">Inserisci una frase, anche comprendente spazi e maiuscole, vediamo se è palindroma:</label>
        <br>
        <input type="text" name="str" value="Ero a dirottar Trattori Da ore">
        
        <br><br>
        <input type="submit" name="invia" value="INVIA DATI (premi INVIO)">  
    </form>
    
</body>
</html>