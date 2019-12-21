<?php

require '../lib/connect.php';
$nid=$_GET['nid'];
//当前
$know=$mysqli->query("select * from news where nid=$nid")->fetch_assoc();

//上一篇
$pre=$mysqli->query("select * from news where nid<$nid order by nid desc")->fetch_all(MYSQLI_ASSOC);

if($pre){
    $preID=$pre[0]['nid'];
    $preTitle=$pre[0]['ntitle'];
}
//下一篇
$next=$mysqli->query("select * from news where nid>$nid order by nid asc")->fetch_all(MYSQLI_ASSOC);
if($next){
    $nextID=$next[0]['nid'];
    $nextTitle=$next[0]['ntitle'];
}
require 'header.php';
require '../view/index/Knowledgement_neirong.html';
require 'footer.php';