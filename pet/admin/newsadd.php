<?php
$method=$_SERVER['REQUEST_METHOD'];
require "../lib/connect.php";
if($method==GET){
    require "../view/admin/newsadd.html";
}else {
    $ntitle = $_POST['ntitle'];
    $content = $_POST['content'];
    $nsort = $_POST['nsort'];
    $createTime=date('Y-m-d H:i:s');
    $updateTime=date('Y-m-d H:i:s');

    $insert = "insert into news(ntitle,content,nsort,create_time,update_time) values ('$ntitle','$content','$nsort','$createTime','$updateTime')";
    $res = $mysqli->query($insert);
    if ($res) {
        echo json_encode([
            "code" => 200,
            "msg" => "插入成功"
        ]);
    } else {
        echo json_encode([
            "code" => 400,
            "msg" => "插入失败".$mysqli->error
        ]);
    }
}
?>