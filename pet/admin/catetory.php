<?php
require "../lib/connect.php";
$type=$_GET[type];
switch ($type){
    case "querys":
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offset=($page-1)*$limit;
        $sel="select * from category";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select * from category order by csort ASC limit $offset,$limit";
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
    case "deletes":
        $cid=$_GET['cid'];

        $del="delete from category where cid='$cid'";
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
    case "updates":
        $cid=$_POST['cid'];
        $cname=$_POST['cname'];
        $csort=$_POST['csort'];

        $update="update category set cname='$cname',csort='$csort' where cid='$cid'";
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
    case "querysone":
        $cid=$_GET["cid"];
        $sel="select * from category where cid='$cid'";
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
    case 'sorts':
        $cid = $_GET['cid'];
        $val = $_GET['val'];
        $update = $mysqli->query("update category set csort='$val' where cid='$cid'");
        if($update){
            echo json_encode([
                "code"=>200,
                "msg"=>"修改成功",
            ]);
        }else{
            echo json_encode([
                "code"=>400,
                "msg"=>"修改失败".$mysqli->error
            ]);
        }
        break;
}
?>
