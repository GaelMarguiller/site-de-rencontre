<?php
/**
 * Created by PhpStorm.
 * User: Wrex
 * Date: 15/03/2016
 * Time: 10:16
 */
spl_autoload_register(function ($class_name) {
    var_dump($class_name);

    $splited = explode("\\", $class_name);
    $class_file = "../" . implode("/", $splited).".php";
    

    if (!file_exists($class_file)) {
        throw new Exception("Cannot find " . $class_file);
    }

    require_once ($class_file);
});