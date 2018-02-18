<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [2,4,5,19,13,0,10];
		$e = 0;
		$i = 0;
		foreach($arr as $value){
			if($arr[$i] == 2 or $arr[$i] == 3 or $arr[$i] == 4){
				$e = $arr[$i];
				echo "ЕСТЬ! ";
				break;
			}
			$i++;
		}
		
		if ($e == 0){
			echo "НЕТ";
		}
		
		?>
    </body>
</html>