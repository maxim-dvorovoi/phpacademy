<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$x = 442158755745;
		$c = 5;
		$j = 0;
		$xs = (string)$x;
		
		echo "Число $x <br> ";
		
		for($i = 0; $i < strlen((string)$x); $i++){
			if($c == (int)((string)$xs{$i})){
				$j++;
			}
		}
		
		echo "<br>" . "(количество $c):  $j";
		
		?>
    </body>
</html>