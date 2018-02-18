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
		
		$i = 0;
		
		foreach($arr as $value){
			if ($i == 5 or $i == 6) {
				echo "<strong>$arr[$i] </strong><br>";
			}else {
				echo "$arr[$i] <br>";
			}
			$i++;		
		}
		?>
    </body>
</html>