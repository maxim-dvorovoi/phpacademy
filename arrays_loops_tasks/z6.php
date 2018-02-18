<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
		$en = [];
		$ru = [];
		$i = 0;
		
        foreach ($arr as $value) {
			$en[$i] = key($arr);
            $ru[$i] = current($arr);
			next($arr);
			$i++;
        }
		
		$i = 0;
		
		foreach ($en as $value) {
			echo $en[$i]. "<br>" ;
			$i++;
        }
		
		$i = 0;
		echo "<br>";
		
		foreach ($ru as $value) {
			echo $ru[$i]. "<br>" ;
			$i++;
        }
        ?>
    </body>
</html>