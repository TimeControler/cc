<?php
$method=$_SERVER['REQUEST_METHOD'];
// 业务逻辑
require "../lib/connect.php";
if($method=='GET'){
    $result=$mysqli->query('select * from aboutus where id=1');
    if($result){
        $data=$result->fetch_assoc();
        echo json_encode([
            'code'=>200,
            'msg'=>'查询成功',
            'content'=>$data['content']
        ]);
    }else{
        echo json_encode([
            'code'=>400,
            'msg'=>'查询失败'.$mysqli->error,
        ]);
    }
}else{
    $content=$_POST['content'];
    $result=$mysqli->query("update aboutus set content='$content' where id=1 ");
    if($result){
        echo json_encode([
            'code'=>200,
            'msg'=>'修改成功',
        ]);
    }else{
        echo json_encode([
            'code'=>400,
            'msg'=>'修改失败'.$mysqli->error,
        ]);
    }
}


