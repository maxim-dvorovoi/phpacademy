<?php
error_reporting(E_ALL);

function explodeNum($str) {
	$str = explode(" ", $str);
	$numeric = [];
	
	foreach ($str as $value) {
		if (is_numeric($value)) {
			array_push($numeric, $value);
		}
	}
	
	return $numeric;
}


$str = 'All GPS satellites broadcast at the same 2 frequencies, 1.57542 GHz - L1 signal, and 1.2276 GHz - L2 signal';

echo("Первый способ<br>");
print_r(explodeNum($str));


?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
	
    </body>
</html>