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

		while ($i < 101){
			$arr[$i] = $i;
			if($arr[$i]%2 == 0 & $arr[$i] != 0) {
				echo $arr[$i] . "<br>";
			}
			$i++;
		}
        ?>
    </body>
</html>