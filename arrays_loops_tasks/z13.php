<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		
		for($i=1; $i<11; $i++){
			for($j=1; $j<11; $j++){
				$arr[$i][$j] = $i * $j;
				echo $i . "*" . $j . " = " . $arr[$i][$j] . "<br>";
			}
			echo "<br>";
		}
		
        ?>
    </body>
</html>