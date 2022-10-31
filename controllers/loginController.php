<?php 

class LoginController extends controller {
    
    public function index() {
        $data = array();

        $this->loadView('login', $data);
    }
}