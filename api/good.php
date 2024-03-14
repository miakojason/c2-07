<?php include_once "./db.php";
$_POST['acc'] = $_SESSION['user'];
$news=$News->find($_POST['news']);
if ($Log->count($_POST) > 0) {
    $Log->del($_POST);
    $news['good']--;
    $News->save($news);
} else {
    $Log->save($_POST);
    $news['good']++;
    $News->save($news);
}
