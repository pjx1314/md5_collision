<?php
function read_file($path) {
    if (!is_file($path)) {
        throw new Exception("无效的文件路径");
    }
    $fh = fopen($path, "rb");
    if (!$fh) {
        throw new Exception("无法打开文件");
    }
    $data = fread($fh, filesize($path));
    fclose($fh);
    if ($data === false) {
        throw new Exception("无法读取文件");
    }
    return $data;
}
try {
    // 运行外部程序生成两个文件
    system("fastcoll_v1.0.0.5.exe -p init.txt -o 1.txt 2.txt");

    // 读取第一个文件的内容并输出哈希值和 URL 编码的结果
    $file1_data = read_file("1.txt");
    echo "文件1的哈希值: " . md5($file1_data) . "\n";
    echo "文件1的 URL 编码: " . urlencode($file1_data) . "\n";
    echo "文件1 URL 编码的哈希值: " . md5(urlencode($file1_data)) . "\n";

    // 读取第二个文件的内容并输出哈希值和 URL 编码的结果
    $file2_data = read_file("2.txt");
    echo "文件2的哈希值: " . md5($file2_data) . "\n";
    echo "文件2的 URL 编码: " . urlencode($file2_data) . "\n";
    echo "文件2 URL 编码的哈希值: " . md5(urlencode($file2_data)) . "\n";
} catch (Exception $e) {
    die("错误: " . $e->getMessage());
}