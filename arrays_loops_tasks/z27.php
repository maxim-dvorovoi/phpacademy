<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$colors = ['red','yellow','blue','gray','maroon','brown','green'];
		$row = 3;
		$cols = 3;
		
		echo "<table>";
		
		for($i = 1; $i <= $row; $i++){
			echo "  <br> <tr>";
			for($j=1; $j <= $cols; $j++){
				$nomer = rand(0,10);
				echo "<td style='background-color: " . $colors[rand(0, 6)] . " ' > $nomer </td>";				
			}
			echo "</tr >";
		}
		echo "</table>";

		?>
    </body>
</html>