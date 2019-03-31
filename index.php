<?php



echo "我是入口文件";
define("APP_PATH",realpath("./"));

require APP_PATH."/Core/Loader.php"; //

spl_autoload_register("\Core\Loader"."::loadClass");

call_user_func("\Core\Run::init","test");