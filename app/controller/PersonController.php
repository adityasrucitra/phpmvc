<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of personController
 *
 * @author adityas
 */
require_once CORE . 'Controller.php';

class personController extends Controller {

    public function index() {
        echo 'i am in ' . __CLASS__ . ' and method is : ' . __METHOD__;
    }

    public function test() {
        echo 'i am in ' . __CLASS__ . ' and method is : ' . __METHOD__;
    }

}
