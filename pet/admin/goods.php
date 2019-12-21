<?php
$type=$_GET['type'];
require "../lib/connect.php";
switch ($type){
    case "querys":
//        $cid=$_GET['cid'];
        $limit=$_GET['limit'];
        $page=$_GET['page'];
        $offect=($page-1)*$limit;
        $sel="select * from goods";
        $data1=$mysqli->query($sel)->fetch_all(MYSQLI_ASSOC);
        $select="select goods.*,category.cname from goods,category where goods.cid=category.cid limit $offect,$limit";
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
        $gid=$_GET['gid'];
        $sel="select * from goods where gid='$gid'";
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
        $gid=$_POST['gid'];
        $cid=$_POST['cid'];
        $gname = $_POST['gname'];
        $gthumb = $_POST['gthumb'];
        $gbanner = $_POST['gbanner'];
        $market_price = $_POST['market_price'];
        $shop_price = $_POST['shop_price'];
        $stock = $_POST['stock'];
        $content = $_POST['content'];
        $update_time = date('Y-m-d H:i:s');
        $update="update goods set gname='$gname',cid='$cid',gthumb='$gthumb',gbanner='$gbanner',market_price='$market_price',shop_price='$shop_price',stock='$stock',update_time='$update_time',content='$content' where gid='$gid'";
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
        $gid=$_GET['gid'];
        $del="delete from goods where gid='$gid'";
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
