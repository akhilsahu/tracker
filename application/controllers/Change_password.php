<?php
class Change_password extends CI_Controller{

	public function __construct()
        {
            parent::__construct();
             $this->user=$this->session->userdata('user');
            $this->load->model('Change_Password_Model');
        }

    function change(){
    $this->load->library('form_validation');
    $old=$this->input->post('old_pass');
    $new=$this->input->post('new_pass');
    $confirm=$this->input->post('confirm_pass');
    $this->form_validation->set_rules('old_pass', 'Old Password', 'required');
    $this->form_validation->set_rules('new_pass', 'New Password', 'required');
    $this->form_validation->set_rules('confirm_pass', 'Old Password Number', 'required');
    if ($this->form_validation->run() == TRUE)
    {
        
        $abc=$this->user;
        
        $executed=$this->Change_Password_Model->select_password($old,$abc[0]['int_user_id']);
                    if($executed)
                    {
                        $executed_updation=$this->Change_Password_Model->update_password($new,$abc[0]['int_user_id']);
                        if($executed_updation)
                        {
                           echo 'old password is successfully updated'; 
                        }
                        else
                        {
                            echo 'old password is not updated successfully';
                        }
                    }
                    else
                    {
                        echo 'old password is incorrect';
                    }
                }
                else
                {
                     echo 'validation fail';
                }
    }
}

?>