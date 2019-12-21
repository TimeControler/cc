<?php

$file=$_FILES['file'];


//设置upload目录
$uploadPath="../upload";
if(!is_dir($uploadPath)){
    mkdir($uploadPath);
}

//设置日期目录
$datashijian=$uploadPath."/".date(Ymd);
if(!is_dir($datashijian)){
    mkdir($datashijian);
}

$imgName=time().mt_rand(0,9999);
$ext=explode('/',$file['type'])[1];
$res=move_uploaded_file($file['tmp_name'],$datashijian.'/'.$imgName.'.'.$ext);
if($res){
    echo json_encode([
       'code'=>200,
       'msg'=>"上传成功",
        'data'=>'/upload/'.date(Ymd).'/'.$imgName.'.'.$ext
    ]);
}else{
    echo json_encode([
       'code'=>400,
       'msg'=>"上传失败"
    ]);
}







