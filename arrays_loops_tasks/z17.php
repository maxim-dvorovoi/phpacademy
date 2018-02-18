<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [
			"январь",
			"март",
			"апрель",
			"май",
			"июнь",
			"июль",
			"август",
			"сентябрь",
			"октябрь",
			"ноябрь",
			"декабрь"
		];
		
		$month = "февраль";
		$i = 0;
		
		foreach($arr as $value){
			echo "$arr[$i] <br>";
			$i++;
			if ($i == 1) {
				echo "<strong>$month </strong><br>";
			}
		}
		?>
    </body>
</html>