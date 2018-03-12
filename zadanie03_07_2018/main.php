<?php
define('FILE_JPG', 'image/jpeg');
define('FILE_PNG', 'image/png');
define('FILE_TXT', 'text/plain');
define('FILE_DOC', 'application/msword');
define('FILE_DOCX', 'application/msword');
define('EXT_PNG', '.png');
define('EXT_JPG', '.jpg');
define('EXT_TXT', '.txt');
define('EXT_DOC', '.doc');
define('EXT_DOCX', '.docx');

function requestFiles($key) {
    if (isset($_FILES[$key])) {
        return $_FILES[$key];
    }
    
    return null;
}

function getFilename(array $file,$typeEtc) {
    $uniqid = uniqid();
    
    switch ($file['type']) {
        case FILE_JPG: 
            return $uniqid . EXT_JPG;
        case FILE_PNG: 
            return $uniqid . EXT_PNG;
		case FILE_TXT: 
            return $uniqid . EXT_TXT;
		case FILE_DOC: 
            return $uniqid . EXT_DOC;
		case FILE_DOCX: 
            return $uniqid . EXT_DOCX;
        default: 
            return $uniqid . '.' . $typeEtc;
    }
}

function isValuesValid($file) {
    if (empty($file) || !is_array($file)) {
        return false;
    }
    
    if (!isset($file['error'])) {
        return false;
    }
	
	if (($file['size']) > 2000000){
		return false;
	}
    
    $typeValid = true;

    return !$file['error'] && $typeValid;
}

function getTypeFormatEtc($file) {
	$etcArr = explode('/',$file['type']);
	return $etcArr[count($etcArr)-1];
}

function getTypeFormatFile($filename) {
	$getFormat = explode(".",$filename);
	$formatFile = $getFormat[count($getFormat)-1];
	return substr_replace($formatFile, '.', 0, 0);
}

function directory($a) {
	$files = scandir($a);  
	print_r ($files);
	echo "<br>";
}
	

$doc = '/xampp/htdocs/php/zadanie03_07_2018/doc/';
$etc = '/xampp/htdocs/php/zadanie03_07_2018/etc/';
$img = '/xampp/htdocs/php/zadanie03_07_2018/img/';
$file = requestFiles('document');
$imgDirection = "./img/";


if ($_POST) {
    
    $validation = isValuesValid($file);
    if ($validation) {

		$typeEtc = getTypeFormatEtc($file);
        $filename = getFilename($file,$typeEtc);
		$typeFile = getTypeFormatFile($filename);
		
        $message = 'Загружено';
		
		if($typeFile == EXT_PNG){
			$folder = "./img/";
		} elseif ($typeFile == EXT_JPG) {
			$folder = "./img/";
		} elseif ($typeFile == EXT_DOC) {
			$folder = "./doc/";
		} elseif ($typeFile == EXT_DOCX) {
			$folder = "./doc/";
		} elseif ($typeFile == EXT_TXT) {
			$folder = "./doc/";
		} else {
			$folder = "./etc/";
		}
        move_uploaded_file($_FILES['document']['tmp_name'], $folder.$filename);
        
        echo $message;
    }
}
$filesFolderImg = scandir($img);


include 'index.html';