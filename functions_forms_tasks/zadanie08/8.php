<?php
function requestPost($key) {
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    
    return null;
}

function isValuesValid($title) {
    return $textFieldsValid = !empty($title);
}

function createComment($title) {
    return [
        'title' => $title,
    ];
}

function loadComments() {
    if (!file_exists('text_comentary.txt')) {
        return [];
    }
    $comments = file_get_contents('text_comentary.txt');
    
    return unserialize($comments);
}

function saveComment(array $comment) {
    $comments = loadComments();
    $comments[] = $comment;
    $comments = serialize($comments);
    file_put_contents('text_comentary.txt', $comments);
}

function validationFucks($title, $fucks){
	$titleArr = explode(" ", $title);
	
	for($i = 0; $i < count($titleArr); $i++){
		for($j = 0; $j < count($fucks); $j++){
			if($titleArr[$i] == $fucks[$j]){
				$title = "Некорректный комментарий";
				return $title;
			}
		}
	}
	
	return $title;
}

$fucks = ['fuck', 'suck', 'bitch', 'сука', 'блять', 'хуй'];

$title = requestPost('title');
$title = validationFucks($title, $fucks);

if ($_POST) {
    $validation = isValuesValid($title);
    if ($validation) {
        $comment = createComment($title);
		saveComment($comment);       
    }
}

$comments = loadComments();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
	<strong>Ваши коменты! :</strong>
 	<?php for ($i=0;$i<count($comments);$i++):?>
    <table>
        <tr>
            <td><?= $i . " => " . $comments[$i]['title']   ?></td>
        </tr>
	</table >
    <?php endfor; ?>
    <form method="post">
        <p><textarea name="title"></textarea>
        <button type="submit" name="submit">Отправить</button><p>
    </form>
</body>
</html>