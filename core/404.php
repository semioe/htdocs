<?php
$file_path = "./template/404.html";
if(file_exists($file_path)){
    $str = file_get_contents($file_path);//将整个文件内容读入到一个字符串中
    echo $str;
}else{
    echo '404';
}
?>