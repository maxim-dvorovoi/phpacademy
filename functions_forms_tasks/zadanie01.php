<?php
if ($_GET) {
    $firstText = $_GET['text1'];
    $secondText = $_GET['text2'];
    getCommonWords($firstText, $secondText);
}
function getCommonWords($a, $b) {
    $a = explode(' ', $a);
    $b = explode(' ', $b);
    $res = array_intersect($a, $b);
    if ($res) {
        print_r($res);
    } else {
        echo 'одинаковых слов нет';
    }
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
			<textarea name="text2"></textarea>
			<button type="submit">GO</button>
		</form>
		
    </body>
</html>