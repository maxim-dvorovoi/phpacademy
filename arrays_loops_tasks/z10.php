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
		$j = 11;

		while ($i < 23){
			$arr[$i] = $j++;
			echo $arr[$i] . "<br>";
			$i++;
		}
        ?>
    </body>
</html>