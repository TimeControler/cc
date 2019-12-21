<?php
$type=$_GET['type'];
require '../lib/connect.php';
switch ($type){
    case 'querys':
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;

        $sel="select * from team";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from team order by tid ASC limit $offset,$limit";
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
        $tid=$_GET["tid"];
        $sel="select * from team where tid='$tid'";
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
        $tid=$_POST['tid'];
        $tname=$_POST['tname'];
        $position=$_POST['position'];
        $head_img=$_POST['head_img'];

        $update="update team set tname='$tname',position='$position',head_img='$head_img' where tid='$tid'";
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
        $tid=$_GET['tid'];

        $del="delete from team where tid='$tid'";
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
