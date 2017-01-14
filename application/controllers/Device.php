<?php
class Member extends CI_Controller{

	//public $abc;
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_Model');
		$this->load->model('Login_Model');
        $this->user=$this->session->userdata('user');
		
		//print_r($this->user);exit;
    }

    public function add_member(){
	//echo "call the client";
    //$data['plan_of_client_val'] = $this->Login_Model->plan_of_client();
    //$data['client_type_val'] = $this->Login_Model->client_type();
        
	$data['load_page']='add_member';
	//print_r($this->user);exit;
	$this->load->view('client/view_page',$data);
}

function insert_member(){

	$this->load->library('form_validation');

    $this->form_validation->set_rules('member_name', 'Member Name', 'required');
    $this->form_validation->set_rules('txt_designation', 'Designation', 'required');
    $this->form_validation->set_rules('txt_gender', 'Gender', 'required');
	$this->form_validation->set_rules('member_relation', 'Relation', 'required');
	$this->form_validation->set_rules('txt_email', 'Email', 'required');
	$this->form_validation->set_rules('txt_phone', 'Mobile No.', 'required');
    $this->form_validation->set_rules('txt_pan', 'PAN No.', 'required');
    //$this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
					$this->Member_Model->insert_member_data($this->user[0]['int_user_id']);

               }
                else
                {
					echo 'hi';
                   // $data['load_page']='add_member';
	                 //$this->load->view('Client/view_page',$data);
                }

}

	function update_client(){
	$this->load->library('form_validation');
    $this->form_validation->set_rules('client_name', 'Client Name', 'required');
    $this->form_validation->set_rules('plan_of_client', 'Plan Of Client', 'required');
    $this->form_validation->set_rules('client_type', 'Client Type', 'required');
    $this->form_validation->set_rules('no_of_member', 'Number Of Member', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
                	$executed =  $this->Login_Model->update_client_data($this->user[0]['int_user_id']);
                	if($executed){
                		 redirect('/Client/list_clients');
                	}

               }
                else
                {
                    $data['load_page']='add_plan';
	                 $this->load->view('admin/view_page',$data);
                }

}

function list_clients(){
	$data['client_list'] = $this->Login_Model->client_list();
    $data['load_page']='view_client';

	$this->load->view('admin/view_page',$data);

}

function edit_client($edit_id){

	$data['edit_clients'] = $this->Login_Model->get_client($edit_id,$this->user[0]['int_user_id']);
	
	 $data['load_page']='edit_client';
	  $data['plan_of_client_val'] = $this->Login_Model->plan_of_client();
    $data['client_type_val'] = $this->Login_Model->client_type();
	$this->load->view('admin/view_page',$data);
}

function delete_client($edit_id){

	$this->Login_Model->delete_client($edit_id,$this->user[0]['int_user_id']);
	 redirect('/Client/list_clients');
               
	 
}

function logout(){
 $this->session->sess_destroy();
 redirect('/Welcome','refresh');
              
	 
}
}

?>