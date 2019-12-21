<?php
$type=$_GET['type'];
require '../lib/connect.php';
switch ($type){
    case 'querys':
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;

        $sel="select * from manager";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from manager order by id ASC limit $offset,$limit";
        $res=$mysqli->query($select);
        $data=$res->fetch_all(MYSQLI_ASSOC);
        if($res){
            echo json_encode([
                "code"=>0,
                "msg"=>"查询成功",
                "count"=>count($data1),
                "data"=>$data
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"查询失败"
            ]);
        }
        break;
    case 'querysone':
        $id=$_GET["id"];
        $sel="select * from manager where id='$id'";
        $res=$mysqli->query($sel);
        $data=$res->fetch_assoc();
        if($res){
            echo json_encode([
                "code"=>200,
                "msg"=>"查询成功",
                "data"=>$data
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"查询失败"
            ]);
        }
        break;
    case "updates":
        $id=$_POST['id'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $head_img=$_POST['head_img'];

        $update="update manager set username='$username',password='$password',head_img='$head_img' where id='$id'";
        $res=$mysqli->query($update);
        if($res){
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
        break;
    case "deletes":
        $id=$_GET['id'];

        $del="delete from manager where id='$id'";
        $res=$mysqli->query($del);
        if($res){
            echo json_encode([
                "code"=>200,
                "msg"=>"删除成功"
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"删除失败"
            ]);
        }
        break;
}


?>
