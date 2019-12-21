<?php
$method=$_SERVER['REQUEST_METHOD'];
require "../lib/connect.php";
if($method==GET){
    require "../view/admin/addressadd.html";
}else {
    $store = $_POST['store'];
    $addr = $_POST['addr'];
    $tel = $_POST['tel'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $asort = $_POST['asort'];
    $insert = "insert into address(store,addr,tel,time1,time2,asort) values ('$store','$addr','$tel','$time1','$time2','$asort')";
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