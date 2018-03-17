<?php 
session_start();
// Подключаем код для сохранения информации о странице в сессии
$_SESSION['pages'] .= $_SERVER['PHP_SELF']. "|";
?>
<!DOCTYPE html>
 
<html>
<head>
        <title>Страница 1</title>
</head>
<body>
 
<h1>Страница 1</h1>
 
<ul>
    <li><a href="2.php">Страница 2</a></li>
    <li><a href="3.php">Страница 3</a></li>
	<li><a href="index.php">Посещеные сайты</a></li>
</ul>

 
</body>
</html>