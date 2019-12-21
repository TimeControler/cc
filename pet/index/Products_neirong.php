<?php
$gid=$_GET['gid'];
require '../lib/connect.php';
$details=$mysqli->query("select * from goods where gid=$gid")->fetch_assoc();
$res=rtrim($details[gbanner],",");
$gbanner=explode(",",$res);

require 'header.php';
require '../view/index/Products_neirong.html';
require 'footer.php';