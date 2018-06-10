<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__) . DS);
define('APP', ROOT . 'app' . DS);
define('VIEW', ROOT . 'app' . DS . 'view' . DS);
define('MODEL', ROOT . 'app' . DS . 'model' . DS);
define('CORE', ROOT . 'app' . DS . 'core' . DS);
define('DATA', ROOT . 'app' . DS . 'data' . DS);
define('CONTROLLER', ROOT . 'app' . DS . 'controller' . DS);

$modules = [ROOT, APP, CORE, CONTROLLER, DATA];

set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modules));

spl_autoload_register('spl_autoload');

//var_dump(get_include_path());

require_once CORE . 'Application.php';
new Application;
