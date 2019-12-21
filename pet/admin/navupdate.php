<?php
require "../lib/connect.php";


$name=$_POST['name'];
$id=$_POST['nid'];
$val=$_POST['val'];
$update="update nav set $name='$val' where nid='$id'";
$res=$mysqli->query($update);
if($res){
    echo json_encode([
        "code"=>200,
        "msg"=>"修改成功"
    ]);
}else{
    echo json_encode([
       "code"=>400,
       "msg"=>"修改失败"
    ]);
}

?>