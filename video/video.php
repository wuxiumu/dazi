<?php
// 97gaoqian.com/dz/video/video.php

if(isset($_GET['type'])){
    echo allvideo();exit;
}
$arr = [];
for ($i = 0; $i < 3; $i++) {
     $arr[] = [
        "title"=>"原视频".($i+1),
        "description"=>"这是原片",
        "fileName"=>"video".($i+1).".MOV",
        "videoUrl"=>"https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/322/0".($i+1).".MOV"
    ];
    $arr[] = [
        "title"=>"示例视频a".($i+1),
        "description"=>"正常编辑",
        "fileName"=>"video".($i+1)."a.mp4",
        "videoUrl"=>"https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/322/0".($i+1)."a.mp4"
    ];
    $arr[] = [
        "title"=>"示例视频b".($i+1),
        "description"=>" b是镜像",
        "fileName"=>"video".($i+1)."b.mp4",
        "videoUrl"=>"https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/322/0".($i+1)."b.mp4"
    ];
}
echo json_encode($arr,true);


function allvideo(){
    //https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/%E5%8E%9F%E8%A7%86%E9%A2%91/3-22/IMG_8393.MOV
    //https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/%E5%8E%9F%E8%A7%86%E9%A2%91/3-22/IMG_8425.MOV
    
    for ($i = 0; $i < 33; $i++) {
        $num = 8393 + $i;
        $arr[] = [
            "title"=>"原视频".($i+1),
            "description"=>"这是原片",
            "fileName"=>"video".($i+1).".MOV",
            "videoUrl"=>"https://yuanshen5.oss-cn-beijing.aliyuncs.com/cp/%E5%8E%9F%E8%A7%86%E9%A2%91/3-22/IMG_".($num).".MOV"
        ];
    }
    return json_encode($arr,true);
}