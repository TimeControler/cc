<?php
require '../lib/connect.php';

$limit=$_GET['limit'];
$page=$_GET['page'];
$offset=($page-1)*$limit;

$sel="select * from online";
$data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
//var_dump($data1);
$select="select * from online order by oid ASC limit $offset,$limit";
$res=$mysqli->query($select);
$data=$res->fetch_all(MYSQLI_ASSOC);
if($res){
    echo json_encode([
        "code"=>0,
        "msg"=>"查询成功",
        "count"=>count($data1),
        "data"=>$data
    ]);
}else{
    echo json_encode([
        "code"=>400,
        "msg"=>"查询失败"
    ]);
}
