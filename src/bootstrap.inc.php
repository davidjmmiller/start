<?php
$path_src = "../src/routes/";

// Loading config
require "../src/config/general.conf.php";

// Loading libs
require "../src/lib/database.lib.php";

$current_path = trim(isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO']:'');
if (substr($current_path,0,1) == '/') $current_path = substr($current_path,1);
if (substr($current_path,-1,1) == '/') $current_path = substr($current_path,0,-1);

$filename = $path_src.$current_path.'.route.php';
if ($current_path == ''){
    require $path_src.'default.route.php';    
}
else if (file_exists($filename)){
    require $filename;
}
else {
    require $path_src.'404.route.php';
}

function l($name,$path){
    echo '<a href="'.$path.'">'.$name.'</a>';
}