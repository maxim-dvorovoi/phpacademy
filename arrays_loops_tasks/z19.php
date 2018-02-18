<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [
			"понедельник",
			"вторник",
			"среда",
			"четверг",
			"пятница",
			"субота",
			"воскресенье"
		];
		
		$day = 2;
		$i = 0;
		
		foreach($arr as $value){
			if ($day == $i+1){
				$day = $arr[$i];
				echo "<i>$day</i> <br>";
			}else{
				echo "$arr[$i] <br>";
			}
			$i++;		
		}
		?>
    </body>
</html>