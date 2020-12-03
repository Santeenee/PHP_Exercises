<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td {
            text-align: center;
            border: solid black 1px;
            padding: 3px;
            background-color: lightseagreen;
        }

        td {
            background-color: white;
        }
    </style>
    <title>VerificaACasa</title>
</head>

<body>

    <?php

    $megaStringa =
        "#EventID|Time|Latitude|Longitude|Depth|Author|Catalog|Contributor|ContributorID|MagType|Magnitude|MagAuthor|EventLocationName
        25729891|2020-11-26T23:50:51.200000|42.6617|13.2842|8.1|SURVEY-INGV||||ML|2.0|--|4 km N Amatrice (RI)
        25729861|2020-11-26T23:48:28.710000|43.4488|12.3657|8.6|SURVEY-INGV||||ML|0.7|--|6 km W Pietralunga (PG)
        25729831|2020-11-26T23:47:09.950000|42.5057|13.2432|16.2|SURVEY-INGV||||ML|1.3|--|2 km S Montereale (AQ)
        25729791|2020-11-26T23:19:19.490000|42.8165|11.8377|5.9|SURVEY-INGV||||ML|1.0|--|7 km N Proceno (VT)
        25729761|2020-11-26T23:04:51.710000|42.7552|13.196|10.2|SURVEY-INGV||||ML|0.8|--|8 km NW Accumoli (RI)
        25729721|2020-11-26T22:28:24.320000|41.6362|15.73|12.0|SURVEY-INGV||||Md|0.9|--|8 km S San Giovanni Rotondo (FG)
        25729711|2020-11-26T22:26:20.250000|39.103|16.4582|6.7|SURVEY-INGV||||ML|0.6|--|4 km E Bianchi (CS)
        25729631|2020-11-26T22:09:54.220000|43.3988|12.5173|6.1|SURVEY-INGV||||ML|0.6|--|7 km NW Gubbio (PG)
        25729611|2020-11-26T22:03:48.430000|39.1093|16.4602|4.0|SURVEY-INGV||||ML|0.6|--|4 km E Bianchi (CS)
        25729521|2020-11-26T21:06:27.710000|38.0908|15.0955|9.6|SURVEY-INGV||||ML|0.9|--|3 km SW Furnari (ME)
        25729461|2020-11-26T20:57:10.440000|43.453|12.3697|8.9|SURVEY-INGV||||ML|0.9|--|6 km W Pietralunga (PG)
        25729441|2020-11-26T20:00:58.650000|38.0967|15.0922|7.5|SURVEY-INGV||||ML|1.3|--|2 km SE Falcone (ME)
        25729391|2020-11-26T19:51:31.070000|42.7718|13.117|11.0|SURVEY-INGV||||ML|1.1|--|3 km SE Norcia (PG)
        25729351|2020-11-26T19:25:23.030000|43.0447|13.1112|14.0|SURVEY-INGV||||ML|0.8|--|2 km E Fiordimonte (MC)
        25729321|2020-11-26T19:14:22.280000|43.2043|12.8113|19.1|SURVEY-INGV||||ML|0.7|--|4 km SE Gualdo Tadino (PG)
        25729301|2020-11-26T18:58:28.550000|46.7347|10.2865|13.8|SURVEY-INGV||||ML|1.2|--|V3 Val Venosta (ITALIA, SVIZZERA, AUSTRIA)
        25729261|2020-11-26T18:49:06.020000|42.372|13.2557|10.4|SURVEY-INGV||||ML|1.7|--|Scoppito (AQ)
        25729221|2020-11-26T18:43:06.250000|46.7078|10.2585|9.9|SURVEY-INGV||||ML|1.9|--|V3 Val Venosta (ITALIA, SVIZZERA, AUSTRIA)
        25729161|2020-11-26T18:25:31.320000|38.0913|15.0903|9.5|SURVEY-INGV||||ML|1.1|--|3 km S Falcone (ME)
        25729091|2020-11-26T18:03:23.360000|43.1578|13.4892|27.2|SURVEY-INGV||||ML|1.3|--|1 km NE Massa Fermana (FM)
        25728821|2020-11-26T16:22:57.700000|43.1897|12.8473|16.1|SURVEY-INGV||||ML|1.1|--|7 km SE Gualdo Tadino (PG)
        25728781|2020-11-26T16:11:57.440000|42.7553|13.1122|11.1|SURVEY-INGV||||ML|0.7|--|4 km SE Norcia (PG)
        25728411|2020-11-26T14:01:56.550000|43.641|12.2402|9.8|SURVEY-INGV||||ML|1.3|--|5 km W Borgo Pace (PU)
        25728261|2020-11-26T13:35:21.370000|43.6113|12.3782|12.3|SURVEY-INGV||||ML|1.3|--|5 km SE Mercatello sul Metauro (PU)
        25728201|2020-11-26T13:26:49.460000|45.8703|6.9938|9.6|SURVEY-INGV||||ML|1.2|--|V3 Monte Bianco (ITALIA, FRANCIA, SVIZZERA)
        25728161|2020-11-26T13:24:35.490000|43.6297|12.2453|10.2|SURVEY-INGV||||ML|1.0|--|5 km SW Borgo Pace (PU)
        25728061|2020-11-26T13:11:48.650000|44.0412|7.6338|10.0|SURVEY-INGV||||ML|1.3|--|Confine Italia-Francia (FRANCIA)
        25728001|2020-11-26T13:03:44.500000|44.6907|9.4078|9.7|SURVEY-INGV||||ML|2.0|--|3 km SE Corte Brugnatella (PC)
        25727981|2020-11-26T12:48:52.930000|42.9967|12.8743|4.5|SURVEY-INGV||||ML|0.6|--|10 km W Monte Cavallo (MC)";

    $arr = [];
    $terremoti = [];
    $terremotiAssociativo = [];

    //***********************FUNCTIONS***********************

    function ExplodeString($megaStringa, &$arr){

        $arr = explode("\n", $megaStringa);

        //print_r($arr);
    }

    function ExplodeString2($arr, &$terremoti) {

        for ($i = 0; $i < sizeof($arr); $i++) {

            $tempString = $arr[$i];

            $terremoti[] = explode("|", $tempString);
        }
        //print_r($terremoti);
    }

    function CreateAssociativeArray($terremoti, &$terremotiAssociativo) {
        
        for ($i = 0; $i < sizeof($terremoti); $i++) {

            for ($j = 0; $j < sizeof($terremoti[$i]); $j++) {

                $terremotiAssociativo[$i][$terremoti[0][$j]] = $terremoti[$i][$j];
            }
        }
        //print_r($terremotiAssociativo);
        
        /* tabella brutta
        //********TABELLAn1********
        echo "<table>";
        for ($k = 0; $k < sizeof($terremotiAssociativo); $k++) {
            echo "<tr>";
            foreach ($terremotiAssociativo[$k] as $key => $value) {
                if ($k == 0) {
                    echo "<th>$value</th>";
                } else {
                    echo "<td>$value</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        */
    
    }

    function TabellaSort(&$terremotiAssociativo)
    {
        $flag = true;       //**** BUBBLE RSORT ****
        $temp = 0;

        while ($flag) {     //se è avvenuto almeno uno scambio (swap) allora entro nel loop
            $flag = false;
            
            for ($i = 0; $i < count($terremotiAssociativo) - 1; $i++) {

                if ($terremotiAssociativo[$i]["Magnitude"] < $terremotiAssociativo[$i + 1]["Magnitude"]) {
                    
                    //swap
                    $temp = $terremotiAssociativo[$i];                    
                    $terremotiAssociativo[$i] = $terremotiAssociativo[$i + 1];
                    $terremotiAssociativo[$i + 1] = $temp;

                    $flag = true; //at least 1 swap occurred
                }                
            }
        }

        echo "<h2>Tabella ordinata per magnitudo:</h2>";

        echo "<table>";
        for ($k = 0; $k < count($terremotiAssociativo); $k++) { //creo riga della tabella
            echo "<tr>";

            foreach ($terremotiAssociativo[$k] as $key => $value) {

                //if NOT ...
                if (!($key == '#EventID' || $key == 'Author' || $key == 'Catalog' || $key == 'Contributor' || $key == 'ContributorID' || $key == 'MagType' || $key == 'MagAuthor')) {

                    if ($k == 0) {
                        echo "<th>$value</th>"; //th  Stampo le key come Table Header(th)

                    } else {
                        echo "<td>$value</td>"; //td  Stampo tutti gli altri valori come Table Data(td)
                    }
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    //*******************calling functions******************    

    ExplodeString($megaStringa, $arr);

    ExplodeString2($arr, $terremoti);

    CreateAssociativeArray($terremoti, $terremotiAssociativo);

    TabellaSort($terremotiAssociativo);
    
    ?>
</body>

</html>