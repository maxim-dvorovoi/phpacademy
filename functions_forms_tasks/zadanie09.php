<?php
function revertString($a) {
    $a = str_split($a);
    $revertArray = array_reverse($a);
	$reverString = implode("",$revertArray);
    if ($reverString) {
        echo $reverString;
    } else {
        echo 'слов нет';
    }
}

if ($_GET) {
    $Text = $_GET['text1'];
    revertString($Text);
}

?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
	
		<form>
			<textarea name="text1"></textarea>
			<button type="submit">GO</button>
		</form>
		
    </body>
</html>