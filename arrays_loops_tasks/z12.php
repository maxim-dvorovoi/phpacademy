<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $n = 1000;		
		$i=0;
		
		while ($i < 10){	
			if($n>50){
				$num = $n;
				$n = $n / 2;
				$i++;
			}else{
				break;
			}
		}
		echo $i=$i-1 . "<br>" ;
		echo $num;
        ?>
    </body>
</html>