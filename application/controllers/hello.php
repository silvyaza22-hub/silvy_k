<?php

class hello extends CI_Controller {

    public function index()
{
    $data['nama'] = "Codeigneter 3 + php 5.6";
    $this->load->view('hello_view' ,$data);
}
    public function namasaya()
{
    $data['nama'] = "mahesa";
    $this->load->view('hello_view' ,$data);
}
}
