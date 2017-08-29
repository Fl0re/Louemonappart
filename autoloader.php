<?php
 function loadMyClass($class){
    if(class_exists($class)===false){
        $string= "model/".$class.'.php';
        if(file_exists($string)===true){
            require_once $string;
        }
        
        $string= "service/".$class.'.php';
        if(file_exists($string)===true){
            require_once $string;
        }
    }
}
spl_autoload_register("loadMyClass");

?>