<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Santini Es2 Sort</title>
</head>
<body>
	<?php
		//Create a int Array, then write a sorting algorithm to order it
		$array = [3,21,34,9,55,0,3,6,99,456,6,2,5,76];
		$length = count($array);

		//BubbleSort with "for" loop
		for ($i = 0; $i < $length; $i++) {
			
			for ($j=0; $j < $length - 1; $j++) { 
				
				if ($array[$j] > $array[$j+1]) {
					//swap
					$temp = $array[$j];
					$array[$j] = $array[$j+1];
					$array[$j+1] = $temp;
				}
			}
		}

		echo 'Sorted ';
		print_r($array);	//sorted array	
	?>
</body>
</html>