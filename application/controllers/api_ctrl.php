<?php

class Api_ctrl extends CI_Controller
{
    public    function Api_ctrl()
    {
        parent::__construct();
        
    }
public function login_api()
{
    $this->load->model('api_model');
    $this->api_model->login();
}







}

