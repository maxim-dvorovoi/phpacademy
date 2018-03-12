<?php
function directory($a) {
	$files = scandir($a);  
	print_r ($files);
	echo "<br>";
}
$dir = '/xampp/htdocs/php/zadanie02_28/zadanie04/';
directory($dir);
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset = "utf-8">
        <title>Domashka</title>
    </head>
    <body>
	
		<form>
			<textarea name="lenght"></textarea>
			<button type="submit">GO</button>
		</form>
		
    </body>
</html>