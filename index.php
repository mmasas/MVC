<?php


// Defines
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('APP_DIR', ROOT_DIR .'application/');


// Includes
require(APP_DIR  .'config/config.php');
require(ROOT_DIR .'system/model.php');
require(ROOT_DIR .'system/view.php');
require(ROOT_DIR .'system/controller.php');
require(ROOT_DIR .'system/mvc.php');

// Define base URL
global $config;
define('BASE_URL', $config['base_url']);

mvc();

?>
