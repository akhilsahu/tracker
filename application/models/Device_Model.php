<?php
 class Device_Model extends CI_Model{

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

  public function device_list(){
  	
  	$q=$this->db->query("select * from tab_device");
  	return $data =$q->result_array();
              
  	           
  }

  public function insert_device_data($int_user_id){
	  $seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789'); 
					shuffle($seed); 
					$rand = '';
					foreach (array_rand($seed, 16) as $k)
					{
					 $rand .= $seed[$k];
					}
					
	 $seed1 = str_split('SAAYA'.'0123456789'); 
					shuffle($seed1); 
					$rand1 = '';
					foreach (array_rand($seed1, 8) as $k1)
					{
					 $rand1 .= $seed1[$k1];
					}
  	$data = array(
                   'txt_imei' => $this->input->post('txt_imei'),
                   'txt_key' => $rand,
				   'txt_manufacturer_name' => $this->input->post('txt_manufacturer'),
				   'txt_token' => $rand1,
				   'txt_device_owner' => $this->input->post('txt_owner'));
				
				    return $this->db->insert("tab_device",$data);
                    //'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
					}
  
	public function delete_device($id){
    //$this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_device_id',$id);
  	$this->db->delete("tab_device");
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