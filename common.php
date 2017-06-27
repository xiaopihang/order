<?php
/**
 * File: common.php
 * Author: xiaopihang
 * Date: 2017/06/26
 */

// the php file extension
define('EXT', '.php');

spl_autoload_register(function($class) {
    if (stripos($class, 'CI') !== false)
    {
        return false;
    }

    foreach (['libraries'] as $folder)
    {
        $class_path = APPPATH . $folder . DIRECTORY_SEPARATOR . $class . EXT;
        if (is_file($class_path))
        {
            include "$class_path";
            return;
        }
    }
});