<?
session_start();
//error_reporting(0);
//error_reporting(E_ALL^E_NOTICE^E_WARNING);
require_once './core/res.php';
require_once './core/controller.php';
require_once './core/dbhelper.php';
require_once './config.php';


if($config->isMysql){
    $dbHelper=new DbHelper($config->mysql_server_name,$config->mysql_username,$config->mysql_password,$config->mysql_database);    
}

if(isset($_REQUEST['plus'])){
    $plus=$_REQUEST['plus'];
    if($plus==='shell'){
        require_once './plus/adminer.php';
        //echo var_dump($_REQUEST);
    }
    exit;
}

if(isset($_REQUEST['controller'])){
    $controller=$_REQUEST['controller'];
}else{
    $controller="index";
}



if(isset($_REQUEST['function'])){
    $function=$_REQUEST['function'];
}else{
    $function="def";
}



$controller_file="./controller/$controller.php";
if(file_exists($controller_file)){
    require_once $controller_file;

    $controller=new $controller($dbHelper);

    if(is_callable(array($controller,$function))){
        $controller->$function($_REQUEST,$res);
    }else{
        $controller->get($_REQUEST,$res,$function);
    }
    
    
}else{
    require_once "./core/404.php";
}
?>