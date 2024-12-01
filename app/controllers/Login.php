<?php

class Login extends Controller{
    public function index(){
        $this->view('header');
        $this->view('login/index');
        $this->view('footer');
    }

}