<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of View
 *
 * @author adityas
 */
class View {

    protected $viewFile;
    protected $viewData;

    /**
     * 
     * @param type $viewFile
     * @param type $viewData
     */
    function __construct($viewFile, $viewData) {
        $this->viewFile = $viewFile;
        $this->viewData = $viewData;
    }

    /**
     * 
     */
    public function render() {
        if (file_exists(VIEW . $this->viewFile . '.phtml')) {
            include VIEW . $this->viewFile . '.phtml';
        }
    }

    /**
     * 
     * @return type
     */
    public function getAction() {
        return explode('/', $this->viewFile)[1];
    }

}
