<?php
 class Member_Model extends CI_Model{

  public function plan_of_client(){
  	
  	$q = $this->db->query("select int_plan_id ,txt_plan_name from tab_plans");
  	return $data = $q->result_array();
   
  	           
  	           
  }

  public function client_type(){
  	
  	$q=$this->db->query("select * from tab_user_group");
  	return $data =$q->result_array();
              
  	           
  }

  public function member_list(){
  	
  	$q=$this->db->query("select * from tab_members");
  	return $data =$q->result_array();
              
  	           
  }
  public function get_Member($id){
        $query=$this->db->query("SELECT *
                                 FROM tab_members 
                                 WHERE int_member_id = '$id'");
        return $query->row_array();
    }	

  public function insert_member_data($int_user_id){
  	$data = array(
                   'txt_name' => $this->input->post('member_name'),
                   'int_client_id' => $this->input->post('id'),
				   'txt_designation' => $this->input->post('txt_designation'),
				   'txt_gender' => $this->input->post('txt_gender'),
				   'txt_relation' => $this->input->post('member_relation'),
                   'txt_email' => $this->input->post('txt_email'),
				   'txt_phone' => $this->input->post('txt_phone'),
					'txt_pan_no' => $this->input->post('txt_pan'));
                    //'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
					return $this->db->insert("tab_members",$data);
	}
  

  public function update_member_data($int_user_id){
	//  print_r($this->input->post('id_client'));exit;
  	$data = array(  
	
					'txt_name' => $this->input->post('member_name'),
                  // 'int_client_id' => $this->input->post('id'),
				   'txt_designation' => $this->input->post('txt_designation'),
				   'txt_gender' => $this->input->post('txt_gender'),
				   'txt_relation' => $this->input->post('member_relation'),
                   'txt_email' => $this->input->post('txt_email'),
				   'txt_phone' => $this->input->post('txt_phone'),
					'txt_pan_no' => $this->input->post('txt_pan'));
					$this->db->where('int_member_id',$this->input->post('id'));
					$this->db->where('int_client_id',$this->input->post('id_client'));
					return $this->db->update("tab_members",$data);
                   
  }

  
  
  public function delete_member($id){
  	$this->db->where('int_member_id',$id);
  	$this->db->delete("tab_members");
    }

  /*  public function record($user)
    {
       
        $id=$user[0]['int_user_id'];
       // echo $id;exit;
        $query=$this->db->query("select * from tab_users where int_user_id=$id");
        return $query->row_array();
//        return $query;
    }*/ 
	
}


?>