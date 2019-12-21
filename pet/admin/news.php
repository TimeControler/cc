<?php
$type=$_GET['type'];
require "../lib/connect.php";
switch ($type){
    case "querys":
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offect=($page-1)*$limit;
        $sel="select * from news";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from news order by nsort desc limit $offect,$limit";
        $res=$mysqli->query($select);
        $data=$res->fetch_all(MYSQLI_ASSOC);
        if($res){
            echo json_encode([
                "code"=>0,
                "msg"=>"获取数据成功",
                "count"=>count($data1),
                "data"=>$data
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"获取数据失败",
            ]);
        }
        break;
    case "querysone":
        $nid=$_GET['nid'];
        $sel="select * from news where nid='$nid'";
        $res=$mysqli->query($sel);
        $data=$res->fetch_assoc();
        if($res){
            echo json_encode([
                'code'=>200,
                'msg'=>"查询成功",
                'data'=>$data
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>"查询失败".$mysqli->error
            ]);
        }
        break;
    case "updates":
        $nid=$_POST['nid'];
        $ntitle = $_POST['ntitle'];
        $nsort = $_POST['nsort'];
        $content = $_POST['content'];
        $update_time = date('Y-m-d H:i:s');
        $update="update news set ntitle='$ntitle',nsort='$nsort',update_time='$update_time',content='$content' where nid='$nid'";
        $res=$mysqli->query($update);
        if($res){
            echo json_encode([
                'code'=>200,
                'msg'=>"修改成功"
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>"修改失败".$mysqli->error
            ]);
        }
        break;
    case "deletes":
        $nid=$_GET['nid'];
        $del="delete from news where nid='$nid'";
        $res=$mysqli->query($del);
        if($res){
            echo json_encode([
                'code'=>200,
                'msg'=>"删除成功"
            ]);
        }else{
            echo json_encode([
                'code'=>400,
                'msg'=>"删除失败"
            ]);
        }
}
?>
