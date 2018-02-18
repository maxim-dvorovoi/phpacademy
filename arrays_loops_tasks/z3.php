<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $array = [26,17,136,12,79,15];
        $i=0;
		$result = 0;
		echo "Массив<br>";
        foreach ($array as $value) {
			echo "элемент $i -> $array[$i]<br>";
            $result = pow($array[$i],2)+$result;
            $i++;
        }
		echo "Сума элементов массива: $result";
        ?>
    </body>
</html>