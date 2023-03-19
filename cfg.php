<?php

    $dir = "cfg"; 
    $files = scandir($dir); 
    //定义一个空数组来存储数据
    $data = array();
    foreach ($files as $file) { 
        if($file != "." && $file != ".."){
            $size = filesize("cfg/" . $file); //调用filesize()函数
            $mtime = filemtime("cfg/" . $file); 
            $date = date("Y-m-d H:i", $mtime);
            //将文件名、大小、日期作为一个子数组添加到$data数组中
            array_push($data, array("name" => $file, "size" => $size, "time" => $date));
        }
    }
    $json = json_encode($data);
    //输出json字符串
    echo $json;

?>
