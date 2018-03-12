<?php
function getCountFruits($string,$arr) {

    $string = explode(' ', $string);
	$apple = 'яблоко';
	$cherries = 'черешня';
	$cherry = 'вишня';
	$pear = 'груша';
	
	for($i=0; $i<count($string) ;$i++){
		if ($string[$i] == $apple){
			$arr['яблоко'] = $arr['яблоко'] + 1;
		} 
		elseif ($string[$i] == $cherries){
			$arr['черешня'] = $arr['черешня'] + 1;
		} 
		elseif ($string[$i] == $cherry){
			$arr['вишня'] = $arr['вишня'] + 1;
		} 
		elseif ($string[$i] == $pear){
			$arr['груша'] = $arr['груша'] + 1;
		}
	}
	
	echo "<br>";
	foreach($arr as $key => $value){
		echo $key . " = " . $value . "<br>";
	} 
	

}

$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
$arr = ['яблоко' => 0, 'черешня' => 0, 'вишня' => 0, 'груша' =>0];

echo $string;
echo '<br>';
getCountFruits($string,$arr);


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