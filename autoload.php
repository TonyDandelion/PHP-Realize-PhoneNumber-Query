<?php 
	/**配置文件*/
	class autoload{
		public static function load($className){
			$fileName = str_replace('\\', '/', $className);  //将api.php中的app\QueryPhone::query('13878119316');换成app/QueryPhone::query('13878119316');
			$fileName = sprintf('../%s.php',str_replace('\\', '/', $className));//将str_replace('\\', '/', $className)填充到%s的位置,注意不得丢失../这是相对路径的标志
			if(is_file($fileName)){
				require_once $fileName;
			}
		}
	}
	spl_autoload_register(['autoload','load']);//是autoload不是autoload.php,将load方法注册到autoload类里面。

 ?>