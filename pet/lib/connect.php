<?php
$mysqli=new mysqli('localhost','root','root','shuju');
if($mysqli->connect_error){
    echo json_encode([
        "code"=>400,
        "msg"=>"链接失败".$mysqli->connect_error
    ]);
}
$mysqli->query('set names utf8')
?>