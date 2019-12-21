<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method==GET){
    require "../view/admin/productadd.html";
}else{
//    连接数据库
    require "../lib/connect.php";
    $name=$_POST['cname'];
    $csort=$_POST['csort'];

    $insert="insert into category(cname,csort) values ('$name','$csort')";
    $res=$mysqli->query($insert);
    if($mysqli->affected_rows>0){
        echo json_encode([
            "code"=>200,
            "msg"=>"插入成功"
        ]);
    }else{
        echo json_encode([
            "code"=>400,
            "msg"=>"插入失败".$mysqli->error
        ]);
    }
}
?>
