<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method==GET){
    require "../view/admin/navinsert.html";
}else{
//    连接数据库
    require "../lib/connect.php";
    $name=$_POST['name'];
    $nsort=$_POST['nsort'];
    $tmp=$_POST['tmp'];
    $nthumb=$_POST['nthumb'];

    $insert="insert into nav(name,nsort,tmp,nthumb) values ('$name','$nsort','$tmp','$nthumb')";
    $res=$mysqli->query($insert);
    if($mysqli->affected_rows>0){
        echo json_encode([
           "code"=>200,
           "msg"=>"插入成功"
        ]);
    }else{
        echo json_encode([
            "code"=>400,
            "msg"=>"插入失败"
        ]);
    }
}
?>