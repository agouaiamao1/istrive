<?php
/*
*初始化文件
*/
define('STRIVE','jiao');
define('BASE_PATH', str_replace('\\','/', dirname(__FILE__)));
if(!@include(dirname(__FILE__).'/global.php')) exit ('global.php isn\'t exit!!');
if(!@include(BASE_CORE_PATH.'/admin.php')) exit('admin.php isn\' exists!!');

?>