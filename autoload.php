<?php 
spl_autoload_register('myAutoLoader');



function myAutoLoader($className){
    $path = "class/";
    $extensions = ".class.php";
    $fullpath = $path . $className . $extensions;

    include_once $fullpath;
}


?>