<?php
function loopUniqueNumber($a,$b){
	for($i=0;$i<count($a);$i++){
		$c[$i] = 0;
			for($j=0; $j<count($b); $j++){
				if ($a[$i] == $b[$j]){
					$c[$i] = $c[$i] + 1;
				}
			}
		echo $a[$i] . ' = ' . $c[$i] . '<br>';
	}
}

function getUniqueString($a) {
    if ($a == false) {
        echo 'слов нет';
    }
    
    $a = explode(' ', $a);
    $a = array_change_key_case($a, CASE_LOWER);
    $b = $a;
    $a = array_unique($a);
	$a = array_values($a);
	$m = 0;
	
	loopUniqueNumber($a,$b);
}

if ($_GET) {
    $Text1 = $_GET['text1'];
	echo $Text1 . '<br><br>';
    getUniqueString($Text1);
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