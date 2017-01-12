<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    //$user=array();

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');

		$this->load->view('admin/user_login');

		/*$data['page']='welcome_message';
		$this->load->view('page',$data);*/
	}

	public function admin_login(){
   $username = $this->input->post('username');
   $password = $this->input->post('password');
  
   $this->load->model('Login_Model');
   $valid_login = $this->Login_Model->login_valid($username,$password);
   if($valid_login){
   	$this->session->set_userdata('user',$valid_login);
          // echo $this->user;exit;
	   $data['load_page']='welcome_message';
   	
		$this->load->view('admin/view_page',$data);
   }else{
   	//echo "usernmae & password wrong ";
    $this->load->view('admin/user_login');
   }

	}
        public function profile()
    {
           $user= $this->session->userdata('user');
           // print_r($user);exit;
        $this->load->model('login_model');
        $record["load_page"]='profile';
       $record['user']= $this->login_model->record($user);
       $this->load->view('admin/view_page',$record);
    }
}
