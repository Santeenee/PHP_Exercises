<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,td{
            border:1px solid;
            padding: 5px;
            
        }        
    </style>
    <title>Pythagorean Multiplication Table</title>
</head>
<body>
    <?php 
        echo 'Pythagorean Multiplication Table:<br><br>';

        echo "<table>";
        for ($i=1; $i <= 10; $i++) { 
            echo "<tr>";
            for ($j=1; $j <= 10; $j++) { 
                echo "<td>";

                    $res = $i * $j;
                    echo $res;

                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>