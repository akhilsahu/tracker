<?php
class Plan extends CI_Controller{

	public $user;
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Plan_Model');
        $this->user=$this->session->userdata('user');
    }

    public function add_plan(){
        $data['load_page']='add_plan';
       $this->load->view('admin/view_page',$data);
	
}

function insert_plan(){
   
	$this->load->library('form_validation');

    $this->form_validation->set_rules('txt_plan_name', 'Plan Name', 'required');
    $this->form_validation->set_rules('txt_plan_desc', 'Plan Descritpion', 'required');
    $this->form_validation->set_rules('dbl_cost', 'Cost', 'required');
    /*$this->form_validation->set_rules('txt_logo', 'Logo', 'required');*/
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");   

    if ($this->form_validation->run() == TRUE)
        {
            $this->Plan_Model->insert_plan_data($this->user[0]['int_user_id']);
            redirect('/Plan/add_plan');
       }
        else
        { 
             $data['load_page']='add_plan';
             $this->load->view('admin/view_page',$data);
        }

}

function update_plan(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('txt_plan_name', 'Plan Name', 'required');
    $this->form_validation->set_rules('txt_plan_desc', 'Plan Descritpion', 'required');
    $this->form_validation->set_rules('dbl_cost', 'Cost', 'required');
    /*$this->form_validation->set_rules('txt_logo', 'Logo', 'required');*/
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");   

    if ($this->form_validation->run() == TRUE)
        {
            $executed = $this->Plan_Model->update_plan($this->user[0]['int_user_id']);
            if($executed){
                         redirect('/Plan/view_plan');
                    }
       }
        else
        { 
             $data['load_page']='add_plan';
             $this->load->view('admin/view_page',$data);
        }
	

}

function view_plan(){

	$data['plan_list'] = $this->Plan_Model->plan_list();
    $data['load_page']='view_plan';

    $this->load->view('admin/view_page',$data);

}

function edit_plan($edit_id){
    $data['edit_plans'] = $this->Plan_Model->get_plan($edit_id,$this->user[0]['int_user_id']);
    $data['load_page']='edit_plan';

    $this->load->view('admin/view_page',$data);
}

	


function delete_plan($edit_id){
$this->Plan_Model->delete_plan($edit_id,$this->user[0]['int_user_id']);
     redirect('/Plan/view_plan');
             
	 
}
}

?>