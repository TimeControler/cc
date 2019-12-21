<?php
$method=$_SERVER['REQUEST_METHOD'];
if($method===GET){
    require "../view/admin/login.html";
}else{
    $mysqli=new mysqli('localhost','root','root','shuju');
    if($mysqli->connect_error){
        echo json_encode([
           "code"=>400,
           "msg"=>"连接失败".$mysqli->connect_error
        ]);
    }
    $username=$_POST['username'];
    $psd=$_POST['password'];
    $mysqli->query('set name utf8');


    $sel="select * from manager where username='$username'";
    $res=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
    if(count($res)){
        if($res[0]['password']==($psd)){
            session_start();
            $_SESSION['id']=$res[0]['id'];
            $_SESSION['username']=$username;
            echo json_encode([
               "code"=>200,
               "msg"=>"登录成功"
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"该用户名与密码不匹配"
            ]);
        }
    }else{
        echo json_encode([
           "code"=>400,
           "msg"=>"该用户名不存在"
        ]);
    }
}


?>
