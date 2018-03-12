<?php
function sizeText($lenghtText) {
   $file = file_get_contents('text.txt');
   $arr = explode(' ',$file);
   for ($i = 0; $i < count($arr); $i++) {
        if (mb_strlen($arr[$i]) >= $lenghtText){
            unset($arr[$i]);
        }
       
   }
   print_r ($arr);
   file_put_contents('text.txt',implode(' ', $arr));
   
}

if ($_GET) {
    $lenghtText = $_GET['lenght'];
	if (is_numeric($lenghtText)){
		sizeText($lenghtText);
	} else {
		echo "ВЫ ввели не число";
	} 
    
}
?>
<!DOCTYPE html>
<html>
    <head>
	    <meta charset = "utf-8">
        <title>Domashka</title>
    </head>
    <body>
	
		<form>
			<textarea name="lenght" placeholder = "напишите число"></textarea>
			<button type="submit">GO</button>
		</form>
		
    </body>
</html>