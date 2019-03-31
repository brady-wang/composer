<?php
namespace Core;

class Loader
{
	public static function loadClass($class)
	{
		$class = str_replace("\\",'/',$class);
		$file = APP_PATH."/".$class.".php";
		if(is_file($file)){
			include $file;
			return true;
		} else{
			return false;
		}

	}
}