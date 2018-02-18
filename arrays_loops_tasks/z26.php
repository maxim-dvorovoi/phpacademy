<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [];
		echo "Массив элементов непарных индексов: ";
		$pr = 1;

		for($i = 0; $i < 5; $i++){
			$arr[$i] = rand(1,100);
			if($i % 2 == 0 & $i != 0){
				$pr = $pr * $arr[$i];
			} elseif ($i != 0) {
				echo"$arr[$i] ";
			}
		}
		
		echo "<br>Производная элементов парных индексов: $pr<br>";

		?>
    </body>
</html>