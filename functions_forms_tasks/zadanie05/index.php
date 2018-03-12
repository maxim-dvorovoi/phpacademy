<?php
function search($word, $files){
	
	for($i=0; $i<count($files);$i++){
		if ($files[$i] == $word){
			echo $files[$i] . '<br>';
		}
	}
}

function directory($dir, $word) {
	$files = scandir($dir);
	search($word, $files);
}

$dir = '/xampp/htdocs/php/zadanie02_28/zadanie04/';
$word = 'text.txt';
directory($dir,$word);
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset = "utf-8">
        <title>Domashka</title>
    </head>
    <body>
	
		
    </body>
</html>