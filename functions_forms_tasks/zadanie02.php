<?php
if ($_GET) {
    $firstText = $_GET['text1'];
    getCommonWords($firstText);
}
function getCommonWords($a) {
    $a = explode(' ', $a);
    var_dump($a);
	echo '<br>';
	
	
	
	for ($i = 0; $i < count($a); $i++){
		for ($j = 0; $j < count($a)-1; $j++){
			if (mb_strlen($a[$j]) < mb_strlen($a[$j+1])){
				$c = $a[$j];
				$a[$j] = $a[$j+1];
				$a[$j+1] = $c;
			}
		}
	}
	
    if ($a) {
        for ($i=0; $i<3; $i++) {
		echo $a[$i] . ' ';
		}
    } else {
        echo 'слов нет';
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
			<button type="submit">GO</button>
		</form>
		
    </body>
</html>