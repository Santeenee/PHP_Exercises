<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es1 SommaProdotto</title>
</head>
<body>
    <!--
        ESERCIZIO 1
        Realizzare un form che permetta di inserire 2 numeri interi e 
        inviarli al Server per calcolare la somma e il prodotto.
    -->    
    
    <form action="actionPHP/es1.php" method="GET">

        <label for="num1">Inserisci il primo numero:</label>
        <input type="text" name="num1" value="4">
        <br>
        <label for="num2">Inserisci il secondo numero:</label>
        <input type="text" name="num2" value="2">
        
        <br><br>
        <input type="submit" name="invia" value="INVIA DATI">  
    </form>
    
</body>
</html>