<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $array = [1,20,15,17,24,35];
        $i=0;
		$result = 0;
		echo "Массив<br>";
        foreach ($array as $value) {
			echo "элемент $i -> $array[$i]<br>";
            $result = $array[$i]+$result;
            $i++;
        }
		echo "Сума элементов массива: $result";
        ?>
    </body>
</html>