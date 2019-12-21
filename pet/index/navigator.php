<?php
require '../lib/connect.php';
$page_id=$_GET['page_id'];
$sel="select * from nav where nid='$page_id'";
$nav=$mysqli->query($sel)->fetch_assoc();
$tmp=$nav['tmp'];
$query="select * from service";
$res=$mysqli->query($query)->fetch_all(MYSQLI_ASSOC);
$is=file_exists('../view/index/'.$tmp.'.html');
if($is){
    require "header.php";
    require "../view/index/".$tmp.".html";
    require "footer.php";
}else{
    require "../view/index/404.html";
}
