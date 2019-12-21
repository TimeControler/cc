<?php
$type=$_GET['type'];
require '../lib/connect.php';
switch ($type){
    case 'querys':
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;
        $sel="select * from banner";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from banner order by bsort ASC limit $offset,$limit";
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
        $bid=$_GET["bid"];
        $sel="select * from banner where bid='$bid'";
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
        $bid=$_POST['bid'];
        $bthumb = $_POST['bthumb'];
        $bsort = $_POST['bsort'];
        $update="update banner set bthumb='$bthumb',bsort='$bsort' where bid='$bid'";
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
        $bid=$_GET['bid'];

        $del="delete from banner where bid='$bid'";
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