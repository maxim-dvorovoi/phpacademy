<?php

require_once "C:/Users/PC/phpstormProjects/php04.11/vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Тест</h1>');
$mpdf->Output();