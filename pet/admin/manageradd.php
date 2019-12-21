<?php
$method=$_SERVER['REQUEST_METHOD'];
require "../lib/connect.php";
if($method==GET){
    require "../view/admin/manageradd.html";
}else {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $head_img = $_POST['head_img'];

    $insert = "insert into manager(username,password,head_img) values ('$username','$password','$head_img')";
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