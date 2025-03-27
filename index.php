<?php
// 获取当前目录
$currentDirectory = __DIR__;

// 使用 scandir 函数获取当前目录下的所有文件和目录
$items = scandir($currentDirectory);

// 用于存储目录的数组
$directories = [];

// 遍历获取到的所有文件和目录
foreach ($items as $item) {
    // 排除当前目录（.）和上级目录（..）
    if ($item != '.' && $item != '..') {
        // 拼接完整路径
        $fullPath = $currentDirectory . '/' . $item;
        // 检查是否为目录
        if (is_dir($fullPath)) {
            $directories[] = $item;
        }
    }
}

// 输出所有目录
$html = '';
foreach ($directories as $directory) {
    
    $html .= '<h1><a href="./'.$directory.'">'.$directory.'</a></h1>';
}
echo $html;
?>    