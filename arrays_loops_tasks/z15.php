<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
		$arr = [4,2,5,19,13,0,10];
		$i = 0;
		foreach($arr as $value){
			$count = $i+1;
			$i++;
		}
		echo $count;
		?>
    </body>
</html>