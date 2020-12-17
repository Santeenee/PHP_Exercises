<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santini Es2 Tabellina</title>
</head>
<body>
    <!--
        ESERCIZIO 2
        Scrivere una pagina in grado di stampare la tabellina di un numero
        passato come parametro dal form.
    -->    
    
    <form action="actionPHP/es2.php" method="GET">

        <label for="num">Inserisci un numero intero positivo:</label>
        <input type="text" name="num" value="3">
        
        <br><br>
        <input type="submit" name="invia" value="INVIA DATI">  
    </form>
    
</body>
</html>