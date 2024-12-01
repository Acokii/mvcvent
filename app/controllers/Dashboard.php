<?php

class Dashboard extends Controller{
    public function index(){
        $this->view('header');
        $this->view('dashboard/index');
        $this->view('footer');
    }
}