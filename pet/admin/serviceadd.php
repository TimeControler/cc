<?php
$method=$_SERVER['REQUEST_METHOD'];
require "../lib/connect.php";
if($method==GET){
    require "../view/admin/serviceadd.html";
}else {
    $sname = $_POST['sname'];
    $sthumb = $_POST['sthumb'];
    $sort = $_POST['sort'];
    $content = $_POST['content'];



    $insert = "insert into service(sname,sthumb,sort,content) values ('$sname','$sthumb','$sort','$content')";
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
