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

		$this->load->view('user_login');

		/*$data['page']='welcome_message';
		$this->load->view('view_page',$data);*/
	}

   public function admin_login(){
   $username = $this->input->post('username');
   $password = $this->input->post('password');
   $this->load->model('Login_Model');
   $valid_login = $this->Login_Model->login_valid($username,$password);
   if($valid_login[0]['int_group_id']==1)
   {
		$this->session->set_userdata('user',$valid_login);
		$data['load_page']='welcome_message';
		$this->load->view('admin/view_page',$data);	
   }
   else if($valid_login[0]['int_group_id']==2)
   {   $this->session->set_userdata('user',$valid_login);
	   $data['load_page']='welcome_message';
	   $this->load->view('client/view_page',$data);
   }
   else
   {
	   $this->load->view('user_login');
   }

   }
}
