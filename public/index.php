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

/**
 * 
 */
function myAutoloader3() {
    $modules = [APP, CORE, CONTROLLER, DATA];
    for ($i = 0; $i < count($modules); $i++) {
        $files = scandir($modules[$i]);
        for ($j = 0; $j < count($files); $j++) {
            $info = (new SplFileInfo($files[$j]))->getExtension();
            if ($info === 'php') {
                require $modules[$i] . $files[$j];
            }
        }
    }
}
myAutoloader3();

//run application..
new Application;
