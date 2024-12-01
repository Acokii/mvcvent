<?php

class About extends Controller{
    public function index($nama = '(___)', $pekerjaan = '(___)'){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('about/index', $data);

    }
}