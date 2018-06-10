<?php

//require ROOT . 'app/controller/homeController.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aplication
 *
 * @author adityas
 */
class Application {

    protected $controller = 'homeController';
    protected $method = 'index';
    protected $params = [];

    /**
     * 
     */
    public function __construct() {
        $this->prepareUrl();
        if (file_exists(CONTROLLER . ucfirst($this->controller) . '.php')) {
            require_once CONTROLLER . ucfirst($this->controller) . '.php';
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->method)) {
                call_user_func_array([$this->controller, $this->method], $this->params);
            }
        }
    }

    /**
     * 
     */
    public function prepareUrl() {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)) {
            $url = explode('/', $request);
            $this->controller = isset($url[0]) ? $url[0] . 'Controller' : 'homeController';
            $this->method = isset($url[1]) ? $url[1] : 'index';
            unset($url[0], $url[1]);
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }

}
