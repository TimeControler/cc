<?php
$type=$_GET['type'];
require '../lib/connect.php';
switch ($type){
    case 'querys':
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;

        $sel="select * from address";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from address order by asort ASC limit $offset,$limit";
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
        $aid=$_GET["aid"];
        $sel="select * from address where aid='$aid'";
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
        $aid=$_POST['aid'];
        $store = $_POST['store'];
        $addr = $_POST['addr'];
        $tel = $_POST['tel'];
        $time1 = $_POST['time1'];
        $time2 = $_POST['time2'];
        $asort = $_POST['asort'];

        $update="update address set store='$store',addr='$addr',tel='$tel',time1='$time1',time2='$time2',asort='$asort' where aid='$aid'";
        $res=$mysqli->query($update);
        if($res){
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
        break;
    case "deletes":
        $aid=$_GET['aid'];

        $del="delete from address where aid='$aid'";
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