<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method==GET){
    require "../view/admin/teamadd.html";
}else {
    require "../lib/connect.php";
    $tname = $_POST['tname'];
    $position = $_POST['position'];
    $head_img = $_POST['head_img'];
    $insert = "insert into team(tname,position,head_img) values ('$tname','$position','$head_img')";
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
