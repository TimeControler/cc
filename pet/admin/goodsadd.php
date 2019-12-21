<?php
$method=$_SERVER['REQUEST_METHOD'];
require "../lib/connect.php";
if($method==GET){
    $sel="select * from category";
    $res=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
    require "../view/admin/goodsadd.html";
}else {
    $gname = $_POST['gname'];
    $gthumb = $_POST['gthumb'];
    $gbanner = $_POST['gbanner'];
    $market_price = $_POST['market_price'];
    $shop_price = $_POST['shop_price'];
    $stock = $_POST['stock'];
    $content = $_POST['content'];
    $cid=$_POST['cid'];
    $create_time = date('Y-m-d H:i:s');
    $update_time = date('Y-m-d H:i:s');
    $status=$_POST['status'];



    $insert = "insert into goods(gname,gthumb,gbanner,market_price,shop_price,stock,content,create_time,update_time,status,cid) values ('$gname','$gthumb','$gbanner','$market_price','$shop_price','$stock','$content','$create_time','$update_time','$status','$cid')";
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
