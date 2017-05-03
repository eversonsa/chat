<?php

require 'enviroment.php';
define("BASE_URL", "http://chat.dev");
global $config;
$config = array();
if(ENVIROMENT == "development"){
    $config['dbname'] = 'chat';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else {
    $config['dbname'] = 'chat';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

