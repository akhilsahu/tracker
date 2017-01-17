<?php
class Device extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        //$this->load->model('Member_Model');
		//$this->load->model('Login_Model');
		$this->load->model('Device_Model');
        $this->user=$this->session->userdata('user');
		
		//print_r($this->user);exit;
    }

    public function add_device(){
	$data['load_page']='add_device';
	$this->load->view('client/view_page',$data);
}

    function insert_device(){
	$this->load->library('form_validation');
    $this->form_validation->set_rules('txt_imei', 'IMEI Number', 'required');
    $this->form_validation->set_rules('txt_manufacturer', 'Manufacturer Name', 'required');
	$this->form_validation->set_rules('txt_owner', 'Device Owner Name', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
					$executed=$this->Device_Model->insert_device_data($this->user[0]['int_user_id']);
					if($executed)
					{
						redirect('/Device/list_device');
					}
               }
                else
                {
					   $data['load_page']='add_device';
					   $this->load->view('Client/view_page',$data);
                }
}

	function update_device(){
	$this->load->library('form_validation');
    $this->form_validation->set_rules('txt_imei', 'IMEI Number', 'required');
    $this->form_validation->set_rules('txt_manufacturer_name', 'Manufacturer Name', 'required');
	$this->form_validation->set_rules('txt_device_owner', 'Device Owner Name', 'required');
    $this->form_validation->set_rules('dt_date', 'Date', 'required');
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
   
    if ($this->form_validation->run() == TRUE)
                {
                	$executed =  $this->Device_Model->update_device_data($this->user[0]['int_user_id']);
                	if($executed){
						//echo 'hi';exit;
                		 redirect('/Device/list_device');
                	}
               }
                else
                {
                    $data['load_page']='edit_device';
	                 $this->load->view('client/view_page',$data);
                }
}

	function list_device(){
	$data['device_list'] = $this->Device_Model->device_list($this->user[0]['int_user_id']);
    $data['load_page']='view_device';
	$this->load->view('client/view_page',$data);

}

	function edit_device($edit_id){
	$data['edit_device'] = $this->Device_Model->get_device($edit_id,$this->user[0]['int_user_id']);
	$data['load_page']='edit_device';
	$this->load->view('client/view_page',$data);
}

	function delete_device($edit_id){

	$this->Device_Model->delete_device($edit_id);
	 redirect('/Device/list_device');	 
}

	 function logout(){
	 $this->session->sess_destroy();
	 redirect('/Welcome','refresh'); 
}

}

?>