<?php

require_once "vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Тест</h1>');
$mpdf->Output();
