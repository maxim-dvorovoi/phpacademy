<?php
session_start();

$pages = explode("|", $_SESSION["pages"]);
if(is_array($pages))
        array_pop($pages);
        echo "<ol>";
        foreach($pages as $page){
                echo "<li>$page</li>";
        }
        echo "</ol>";
?>