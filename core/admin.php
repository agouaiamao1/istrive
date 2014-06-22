<?php
/*
*运行框架
*/
defined('STRIVE') or exit('Access Invalid');
if (!@include(BASE_CORE_PATH.'/config/config.ini.php')) exit('config.ini.php isn\'t exists!');
if (file_exists(BASE_CORE_PATH.'/config/config.ini.php'))
{
	include(BASE_CORE_PATH.'/config/config.ini.php');
}
global $config;
$_GET['act'] = preg_match('/^[\w]$/i',$_GET['act']) ? $_GET['act'] : 'index';
        $path_info = !empty($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : $_SERVER['REDIRECT_REDIRECT_PATH_INFO'];
        $path_info = trim($path_info,'/');
        echo "<pre>";print_r($_SERVER);exit();
?>