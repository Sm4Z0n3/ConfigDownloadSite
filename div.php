<?php
$dir = "cfg"; 
$files = scandir($dir); 
$data = array();
foreach ($files as $file) { 
    if($file != "." && $file != ".."){
        $size = filesize("cfg/" . $file); 
        $mtime = filemtime("cfg/" . $file); 
        $date = date("Y-m-d H:i", $mtime);
        array_push($data, array("name" => $file, "size" => $size, "time" => $date));
    }
}
$json = json_encode($data);
$array = json_decode($json, true);
foreach ($array as $item) {
    $size = $item["size"]/1024/1024;
    $div = "<div class = 'cfg-div'>
    <a class='cfg-click' href = 'cfg/'>
    <h1 class = 'cfg-title'>" . $item["name"] . "</h1>
    <p class = 'cfg-text'>" . $item["time"] . "</p>
    <p class = 'cfg-text'>" . $size. "Mib</p>
    </a>
    </div>";
    echo $div;
}

?>
