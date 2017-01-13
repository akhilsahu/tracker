<?php
 class Member_Model extends CI_Model{

  public function Member_Model(){
  	
  }

  public function plan_of_client(){
  	
  	$q = $this->db->query("select int_plan_id ,txt_plan_name from tab_plans");
  	return $data = $q->result_array();
   
  	           
  	           
  }

  public function client_type(){
  	
  	$q=$this->db->query("select * from tab_user_group");
  	return $data =$q->result_array();
              
  	           
  }

  public function client_list(){
  	
  	$q=$this->db->query("select * from tab_clients");
  	return $data =$q->result_array();
              
  	           
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
					$this->db->insert("tab_members",$data);
	}
  

 /* public function update_client_data($int_user_id){
  	$data = array(  
                   'txt_client_name' => $this->input->post('client_name'),
                   'txt_plan_of_client' => $this->input->post('plan_of_client'),
                   'txt_client_type' => $this->input->post('client_type'),
                    'int_no_of_members' => $this->input->post('no_of_member'),
                    'txt_added_by' => $int_user_id,
                    'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));

  	$this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_client_id',$this->input->post('update_id'));
  	return $this->db->update("tab_clients",$data);
  	// echo $this->db->last_query();
  	

  	           
  	           
  }

  public function get_client($id,$int_user_id){
        $query=$this->db->query("SELECT *
                                 FROM tab_clients 
                                 WHERE int_client_id = $id and txt_added_by=$int_user_id");
        return $query->row_array();
    }
  
  public function delete_client($id,$int_user_id){
    $this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_client_id',$id);
  	$this->db->delete("tab_clients");
    }

    public function record($user)
    {
       
        $id=$user[0]['int_user_id'];
       // echo $id;exit;
        $query=$this->db->query("select * from tab_users where int_user_id=$id");
        return $query->row_array();
//        return $query;
    }*/ 
	
}


?>