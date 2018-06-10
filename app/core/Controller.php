<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author adityas
 */


class Controller {

    protected $view;

    /**
     * 
     * @param type $viewName
     * @param type $viewData
     */
    public function view($viewName, $viewData = '') {
        require_once CORE . 'View.php';
        $this->view = new View($viewName, $viewData);
        return $this->view;
    }

}
