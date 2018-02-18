<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$x = "x";
		$a = "x";
		$i = 1;
		
		while($i < 21){
			echo "$x<br>";
			$x = $x.$a;
			$i++;
		}
		?>
    </body>
</html>