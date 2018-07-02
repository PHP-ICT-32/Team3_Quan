<?php
include_once '../configs/configs.php';
function __autoload($class){
    $file= strtolower(str_replace('_',DS,$class).EXT);
    if(file_exists('..'.DS.'application'.DS.$file)){
        include_once '..'.DS.'application'.DS.$file;
    }else if(file_exists('..'.DS.$file)){
        include_once '..'.DS.$file;    
    }else{
        echo "File ".$file." not exists!";
    }
}
new Libs_Bootstrap();
