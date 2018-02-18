<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		
        foreach ($arr as $value) {
			echo"ключ ". key($arr). "<br>";
            next($arr);
        }
		
		echo "<br>";
		reset($arr);
		
		foreach ($arr as $value) {
			echo"элемент ". current($arr). "<br>";
            next($arr);
        }
        ?>
    </body>
</html>