<?php

spl_autoload_register(function($className){
    $classFile = 'app/classes/'.$className.'.php';
    if(file_exists($classFile)){
        include_once $classFile;
        return true;
    }
    return false;
});

Router::init();
