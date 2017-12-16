<?php
$path_src = "../src/routes/";

// Loading config
require "../src/config/general.conf.php";

// Loading libs
require "../src/lib/database.lib.php";
require "../src/lib/util.lib.php";

// Starting session
session_start();

if (isset($_GET['lang'])){
    switch ($_GET['lang']){
        case "es":
            $_SESSION['current_lang'] = 'es';
            break;
        case "en":
            $_SESSION['current_lang'] = 'en';
            break;
        default:
            $_SESSION['current_lang'] = 'en';
            break;
    }
}

if (isset($_SESSION['current_lang'])){
    $current_lang = $_SESSION['current_lang'];
}
else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang){
        case "es":
            $current_lang = 'es';
            break;
        case "en":
            $current_lang = 'en';
            break;
        default:
            $current_lang = 'en';
            break;
    }
}

$current_path = trim(isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO']:'');
if (substr($current_path,0,1) == '/') $current_path = substr($current_path,1);
if (substr($current_path,-1,1) == '/') $current_path = substr($current_path,0,-1);

// Identify the current browser language


ob_start();
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
$page = ob_get_contents();
ob_end_clean();

if ($layout == 'general'){
    require '../src/layouts/general.inc.php'; 
}
else if ($layout == ''){
    
}
else {
    require '../src/layouts/'.$layout.'.inc.php';
}

function l($name,$path){
    echo '<a href="'.$path.'">'.$name.'</a>';
}