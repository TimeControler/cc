<?php
require '../lib/connect.php';
$sel="select * from address";
$addr=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
require '../view/index/footer.html';