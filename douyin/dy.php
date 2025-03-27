<?php
//     header('Content-Type: application/json');

// 查看 / 编辑

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $douyin_id = $_POST["douyinid"];
    $fans = $_POST["fans"];
    $address = $_POST["address"];
    $copywriting = $_POST["copywriting"];
 
    file_put_contents('./dz.txt',$copywriting);
    
    unset($_POST["copywriting"]);
    file_put_contents('./dy.json',json_encode($_POST,true));

    // 这里可以添加更多的数据处理逻辑，例如存储到数据库
    echo "提交成功！";
    
    header("Location: ./dy.html");
}
?>