<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
		
        foreach ($arr as $value) {
			echo key($arr)." - зарплата ". current($arr). " долларов <br>";
            next($arr);
        }
        ?>
    </body>
</html>