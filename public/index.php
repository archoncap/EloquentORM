<?php
define("APP_PATH",  realpath(dirname(__DIR__))); /* 指向public的上一级 */
$app  = new Yaf_Application(APP_PATH . "/conf/application.ini");
$app->bootstrap()->run();
?>
