<?php

define('ALLOWS_TYPE',[
    'image/png'=>'png',
    'image/jpeg'=>'jpg'
]);

function save_name($data){
    return file_put_contents('name_image.txt',serialize($data));
}

function get_name(){
    return unserialize(file_get_contents('name_image.txt'));
}

if (file_exists('name_image.txt')){
    $result=get_name();
}

$form_was_send=false;
if (isset($_POST['submit'])){
    $form_was_send=true;
    if(is_dir('gallery')==false){
        if(mkdir('gallery')==false){
            throw new Error('Didnt create folder;');
        };
    }

    foreach ($_FILES["photo"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $allow_type=ALLOWS_TYPE[$_FILES['photo']['type'][$key]];
            if(!isset($allow_type)){
                throw new Error('PLEASE IMAGE;');
            }
            $tmp_name = $_FILES["photo"]["tmp_name"][$key];
            $name = $_FILES["photo"]["name"][$key].time();
			$folder = "./gallery/";
            move_uploaded_file($_FILES["photo"]["tmp_name"][$key], $folder.$name);
        }else{
            echo 'PLEASE select file;';
        }
        $result[]=$name;
    }
     save_name($result);
    
}
include '6.html';