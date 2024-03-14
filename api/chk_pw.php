<?php include_once "./db.php";
$res=$User->count($_POST);
if($res>0){
    echo 1;
    $_SESSION['user']=$_POST['acc'];
}else{
    echo 0;
}