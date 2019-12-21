<?php
require '../lib/connect.php';
$query="select * from nav order by nsort desc";
$sel=$mysqli->query($query)->fetch_all(MYSQLI_ASSOC);
require '../view/index/header.html';