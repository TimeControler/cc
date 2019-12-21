<?php
require '../lib/connect.php';
$sel="select * from category";
$res=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
require "../view/admin/goodsselect.html";