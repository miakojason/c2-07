<?php include_once "./db.php";
$row = $News->find($_POST);
?>
<pre onclick="getnews('<?= $row['id']; ?>')"><?= $row['text']; ?></pre>