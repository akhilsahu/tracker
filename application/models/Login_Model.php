<?php
 class Login_Model extends CI_Model{

  public function login_valid($username,$password){
  	$this->db->select('int_user_id,txt_user_name,int_group_id');
  	$q=$this->db->where(['txt_user_name'=>$username,'txt_password'=>$password])
  	            ->get('tab_users');
  	            if($q->num_rows()){
  	            	return $q->result_array();
  	            }else{
  	            	return FALSE;
  	            }
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

  public function insert_client_data($int_user_id){
  	$data = array(
                   'txt_client_name' => $this->input->post('client_name'),
                   'txt_plan_of_client' => $this->input->post('plan_of_client'),
				   'txt_client_email' => $this->input->post('txt_client_email'),
				   'txt_client_phone' => $this->input->post('client_phone'),
				   'txt_client_gender' => $this->input->post('txt_gender'),
				   'txt_client_address' => $this->input->post('txt_client_address'),
				   'txt_password' => '11111',
				   'int_no_of_members' => $this->input->post('no_of_member'),
                    'txt_added_by' => $int_user_id,
                    'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
  	$this->db->insert("tab_clients",$data);
	
        $data1 = array(
                   'txt_user_name' => $this->input->post('client_name'),
            // autogenerate password will be inserted in database as well as send to mail
                   'txt_password' =>'111111' /*$this->input->post('plan_of_client')*/,
            'txt_user_email' => $this->input->post('txt_client_email'),
			
                   'int_group_id' => '3',
            
					
                   
                    'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
  	
  	
  	$this->db->insert("tab_users",$data1);
        
  	            
  	           
  }

  public function update_client_data($int_user_id){
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
    }
 }


?>