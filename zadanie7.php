<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
		
    </head>
    <body>
        <?php
		$age = 21;
		if ($age>17 & $age < 60){
			echo 'Вам еще работать и работать';
		} elseif ($age > 59) {
		    echo 'Вам пора на пенсию';
		} elseif ($age>=0 & $age<=17) {
			echo 'Вам еще рано работать';
		}
			
        ?>
    </body>
</html>