<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
        <title>Domashka</title>
    </head>
    <body>
        <?php
        $array = ["html","css","php","js","jq"];
        $i=0;
        foreach ($array as $value) {
            echo "$array[$i] <br>";
            $i++;
        }
        ?>
    </body>
</html>