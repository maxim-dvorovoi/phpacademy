<?php
session_start();
// Подключаем код для сохранения информации о странице в сессии
$_SESSION['pages'] .= $_SERVER['PHP_SELF']. "|";
?>
<!DOCTYPE html>
 
<html>
<head>
        <title>Страница 2</title>
</head>
<body>
 
<h1>Страница 2</h1>

<ul>
    <li><a href="1.php">Страница 1</a></li>
    <li><a href="3.php">Страница 3</a></li>
	<li><a href="index.php">Посещеные сайты</a></li>
</ul>
 
</body>
</html>