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
		
        foreach ($arr as $value) {
			echo $arr[$i];
			$i++;
        }
		
		echo "<br>";
		
		for ($i = 0; $i < count($arr); $i++){
			echo $arr[$i];
		}
		
		echo "<br>";
		$i = 0;
		
		while ($i < count($arr)){
			echo $arr[$i];
			$i++;
		}
        ?>
    </body>
</html>