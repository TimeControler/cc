<?php
require "../lib/connect.php";
    $data = $_POST['data'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $tel = $_POST['tel'];
    $note = $_POST['note'];
    $sid=$_POST['sid'];

    $insert = "insert into online(sid,data,name,sex,tel,note) values ('$sid','$data','$name','$sex','$tel','$note')";
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
