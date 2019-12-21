<?php

require '../lib/connect.php';
$aboutus=$mysqli->query("select * from aboutus")->fetch_assoc();

require "header.php";
require "../view/index/index.html";
require "footer.php";