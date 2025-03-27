<?php
// http://110.42.234.173/dz/wenan/dz.php
// 文件路径
$filePath = 'dz.txt';

// 检查文件是否存在
if (file_exists($filePath)) {
    // 读取文件内容
    $fileContent = file_get_contents($filePath);

    // 按空行拆分内容
    $paragraphs = preg_split('/\R{2,}/', $fileContent, -1, PREG_SPLIT_NO_EMPTY);
    $json = '[';
    foreach ($paragraphs as $k=>$v){
        $json  .= '{';
        $json  .=  '"title":"';
        $json  .=  urlencode($v).'",';
        $json  .=  '"note":"';
        $json  .=  ($k+1).'"},';
        

    }
      // 去掉最后一个逗号
    $json = rtrim($json, ',');
    $json .= ']';
    header('Content-Type: application/json');
    echo $json;
} else {
    echo "文件 $filePath 不存在。";
}
?>