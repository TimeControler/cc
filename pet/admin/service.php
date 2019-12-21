<?php
$type=$_GET['type'];
require "../lib/connect.php";
switch ($type){
    case 'querys':
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;

        $sel="select * from service";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from service order by sort desc limit $offset,$limit";
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
    case "querysone":
        $sid=$_GET['sid'];
        $sel="select * from service where sid='$sid'";
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
        $sid=$_POST['sid'];
        $sname = $_POST['sname'];
        $sthumb = $_POST['sthumb'];
        $sort = $_POST['sort'];
        $content = $_POST['content'];
        $update="update service set sname='$sname',sthumb='$sthumb',sort='$sort',content='$content' where sid='$sid'";
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
        $sid=$_GET['sid'];
        $del="delete from service where sid='$sid'";
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
