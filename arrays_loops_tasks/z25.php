<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [];
		echo "Массив: ";

		for($i = 0; $i < 5; $i++){
			$arr[$i] = rand(1,100);
			echo"$arr[$i] ";	
		}
		
		echo "<br> Максимальное значение : " . max($arr);
		echo "<br> Минимальное значение : " . min($arr);
		
		for($i = 0; $i < 5; $i++){
			if($arr[$i] == max($arr)){
				$index1 = $i;
				$el1 = $arr[$i];
			} elseif ($arr[$i] == min($arr)){
				$index2 = $i;
				$el2 = $arr[$i];
			}
				
		}
		echo "<br>";
		echo "Измененный массив : ";
		$arr[$index2] = $el1;
		$arr[$index1] = $el2;
		
		for($i = 0; $i < 5; $i++){
			echo"$arr[$i] ";	
		}
		
		?>
    </body>
</html>