<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author adityas
 */
require_once CORE . 'Controller.php';

class homeController extends Controller {

    /**
     * 
     * @param type $id
     * @param type $name
     */
    public function index($id = '', $name = '') {
        $this->view(
                'home' . DS . 'index', [
            'name' => $name,
            'id' => $id
                ]
        );
        $this->view->render();
    }

    /**
     * 
     */
    public function aboutUs() {
        $this->view('home' . DS . 'aboutUs', []);
        $this->view->render();
    }

}
