<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$x = 133;
		$i = 0;
		$sum = 0;
		$xs = (string)$x;
		
		while ($i < 3) {
			
			$sum = $sum + (int)((string)$xs{$i});
			$i++;
		}
		
		echo $sum;
		?>
    </body>
</html>