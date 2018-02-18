<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $arr = [];
		$i = 0;

		while ($i < 100){
			$arr[$i] = $i+1;
			echo $arr[$i] . "<br>";
			$i++;
		}
        ?>
    </body>
</html>