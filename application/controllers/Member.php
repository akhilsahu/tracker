<?php
class Member extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_Model');
		$this->load->model('Login_Model');
        $this->user=$this->session->userdata('user');
    }

    public function add_member(){
	$data['load_page']='add_member';
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
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
					//print_r($this->user[0]['int_user_id']);exit;
					$executed=$this->Member_Model->insert_member_data($this->user[0]['int_user_id']);
					if($executed)
					{
						redirect('/Member/list_member');
					}

               }
                else
                {
					//echo 'hi';
                    $data['load_page']='add_member';
	                $this->load->view('Client/view_page',$data);
                }

}

	function update_member(){
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
					
                	$executed =  $this->Member_Model->update_member_data($this->user[0]['int_user_id']);
                	if($executed){
                		 redirect('/Member/list_member');
                	}

               }
                else
                {
                    $data['load_page']='edit_member';
	                 $this->load->view('client/view_page',$data);
                }

}

function list_member(){
	$data['member_list'] = $this->Member_Model->member_list($this->user[0]['int_user_id']);
    $data['load_page']='view_members';

	$this->load->view('client/view_page',$data);

}

function edit_member($edit_id){
	
	$data['edit_member'] = $this->Member_Model->get_Member($edit_id);
	 $data['load_page']='edit_member';
	$this->load->view('Client/view_page',$data);
}

function delete_member($edit_id){
	$data=$this->Member_Model->delete_member($edit_id,$this->user[0]['int_user_id']);
	
	//redirect('/Member/list_member');
}

function logout(){
 $this->session->sess_destroy();
 redirect('/Welcome','refresh');
              
	 
}
function assign()
{
    $data['load_page']='assign';
    $this->load->view('Client/view_page',$data);
}
}

?>