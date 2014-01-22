<?php

function IncludePathSetting($dispatcher){
   
        $path = '/USBDISK/server/UniServer/www/kadai';
        
        $dispatcher->setSystemRoot($path);
    }
    set_include_path(get_include_path() . PATH_SEPARATOR . $path); 

?>