<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $arr = [2,5,9,15,0,4];
		$i = 0;
		
        foreach ($arr as $value) {
			if($arr[$i] >3 & $arr[$i]<10){
				echo $arr[$i]. "<br>";
			}
			$i++;
        }

        ?>
    </body>
</html>