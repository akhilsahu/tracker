<?php
class Profile extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
       // $this->load->model('Member_Model');
		$this->load->model('Profile_Model');
        $this->user=$this->session->userdata('user');
			//print_r($this->user);exit;
    }

    public function edit_profile(){
		$data['pro'] = $this->Profile_Model->get_all_client($this->user[0]['int_user_id']);
		if($data['pro']['int_client_id']!="")
		{
			$data['detail'] = $this->Profile_Model->get_all_client_detail($data['pro']['int_client_id']);
		//print_r($this->user[0]['int_user_id']);exit;
		$data['load_page']='profile';
		$this->load->view('client/view_page',$data);
		}		
}

 function update_client_detail(){
		
	$this->load->library('form_validation');

   //$this->form_validation->set_rules('client_name', 'Client Name', 'required');
    //$this->form_validation->set_rules('plan_of_client', 'Plan Of Client', 'required');
   // $this->form_validation->set_rules('txt_client_email', 'Client Email', 'required');
	//$this->form_validation->set_rules('client_phone', 'Client Phone', 'required');
	//$this->form_validation->set_rules('txt_gender', 'Client Gender', 'required');
	$this->form_validation->set_rules('txt_address', 'Client Addess', 'required');
    $this->form_validation->set_rules('txt_gender', 'Number Of Member', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
					
							$this->Profile_Model->update_client_detail($this->user[0]['int_user_id']);	
							echo 'del';
					//die();
                	
					//redirect('/Client/list_clients','refersh');

               }
                else
                {
                    echo 'not updated';
                }

}
   

}

?>