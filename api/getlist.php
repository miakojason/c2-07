<?php include_once "./db.php";
$rows = $News->all($_POST);
foreach ($rows as $row) {
?>
    <div  onclick="getnews('<?= $row['id']; ?>')"><?= $row['title']; ?></div>
<?php
}
?>