<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php
    $type = $_GET["p"];
$json = file_get_contents('setting.json');
$array = json_decode($json, true);
extract($array);
    if($type == "h" || $type == null){
        echo "主页-". $SiteName;
    }else{
        if($type == "l"){
            echo "登录-". $SiteName;
        }else{
            echo $SiteName;
        }
    }
    ?></title>
    <link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/input.css" asp-append-version="true" />
    <link rel="stylesheet" href="/css/ul.css" asp-append-version="true" />
    <link rel="stylesheet" href="/css/app.css" asp-append-version="true" />
    <script src="/js/app.js"></script>
    <script src="/js/Script.min.js"></script>
    <script src="/js/sweetalert.js"></script>
    <style>
    @font-face {
        font-family: 'ty-font';
        src: url('/font/kslyt.ttf');
    }
    * {
        font-family:<?php
            echo $font;
            ?>;
      }
    </style>
</head>
<body style="background-image: url('<?php echo $background_src?>');    background-size: cover;
    background-repeat: no-repeat;
    background-attachment:fixed;">
    <?php
    if($Bar == "true"){
        echo '<button class="openbtn" onclick="openNav()" style="position: fixed;top: 0;left: 1%;transform: translateX(-50%);">☰</button>
        <header>
    
                    <div id="mySidebar" class="sidebar">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <a href="?p=h">Home</a>
                        <a href="?p=l">Login</a>
                        <a href="?p=c">Clients</a>
                        <a href="?p=c1">Contact</a>
                    </div>
        </header>';
    }
    ?>
    <br>
    <div id="app" class="container" >
            <?php
            if($type == "h" || $type == null)
            {
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
                    <a class='cfg-click' name='".$item["name"]."' onclick='dl_st(this)'>
                    <h1 class = 'cfg-title'>" . $item["name"] . "</h1>
                    <p class = 'cfg-text'>" . $item["time"] . "</p>
                    <p class = 'cfg-text'>" . $size. "Mib</p>
                    </a>
                    </div>";
                    echo $div;
                }
            }else{
                if($type == "l" )
                {
                    readfile("html/login.ctml");
                }else{
                    if($type == "c" )
                    {
                    
                    }else{
                    
                    }
                }
            }
            ?>
    </div>


    <footer class="border-top footer text-muted" style="margin-top: 40%;  ">
        <div class="container">
            <h4 style="margin-top:20px;">&copy; 2023 - <?php echo $MyName?> - <a href="http://blog.smazone.club">Blog</h4></a><br><br><br><br><br>
        </div>
    </footer>

    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main_l.js"></script>
</body>
</html>