<?php
function getFirstUp($a) {
    if ($a == false) {
        echo 'слов нет';
    }
    
    $a = explode('. ', $a);
	for($i=0; $i<count($a) ;$i++){
		$a[$i] = ucfirst($a[$i]);
	}
	
	for($i=count($a)-1; $i>=0;$i--){
		echo $a[$i] . ". ";
	}

}

if ($_GET) {
    $Text1 = $_GET['text1'];
	echo $Text1 . '<br><br>';
    getFirstUp($Text1);
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