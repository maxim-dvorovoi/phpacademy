<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [1,2,3,4,5,6,7,8,9];
		$i = 0;
		foreach($arr as $value){
			echo $arr[$i];
			if (($i+1)%3==0){
				echo "<br>";
			} else {
				echo ", ";
			}
			$i++;
		}
		?>
    </body>
</html>