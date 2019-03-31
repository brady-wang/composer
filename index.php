<?php



define("BASE_PATH",realpath("./"));
define("APP_PATH",BASE_PATH."App/");

require BASE_PATH."/Core/Loader.php"; //

spl_autoload_register("\Core\Loader"."::loadClass");


require BASE_PATH."/vendor/autoload.php";
call_user_func("\Core\Run::init");