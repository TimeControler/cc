<?php
$id=$_POST['nid'];
require '../lib/connect.php';

$del="delete from nav where nid='$id'";
$res=$mysqli->query($del);
if($res){
    echo json_encode([
       "code"=>200,
       "msg"=>"删除成功"
    ]);
}else{
    echo json_encode([
        "code"=>400,
        "msg"=>"删除失败"
    ]);
}

?>
