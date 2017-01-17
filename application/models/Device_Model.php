<?php
 class Device_Model extends CI_Model{

  public function device_list($id){
  	
  	$q=$this->db->query("select *
						 FROM tab_device 
						 WHERE txt_added_by = '$id' and int_is_deleted!=1");
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
				   'txt_device_owner' => $this->input->post('txt_owner'),
				   'txt_added_by' => $int_user_id,
				   'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
				    return $this->db->insert("tab_device",$data);
                    
					}
  
	public function delete_device($id){
     $query=$this->db->query("Update tab_device SET int_is_deleted=1 WHERE int_device_id = $id ");
        return  $query;
    }
	
	 public function get_device($id,$added_by){
       $query=$this->db->query("SELECT *
                                 FROM tab_device 
                                 WHERE int_device_id = '$id' AND txt_added_by='$added_by'");
        return $query->row_array();
}
	
	public function update_device_data($int_user_id){
  	$data = array(  
                   'txt_imei' => $this->input->post('txt_imei'),
                   'txt_manufacturer_name' => $this->input->post('txt_manufacturer_name'),
                   'txt_device_owner' => $this->input->post('txt_device_owner'),
                   'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
					$this->db->where('int_device_id',$this->input->post('int_id'));
					$this->db->where('txt_added_by',$int_user_id);
					return $this->db->update("tab_device",$data);          
  }

 
 /*  public function plan_of_client(){
  	
  	$q = $this->db->query("select int_plan_id ,txt_plan_name from tab_plans");
  	return $data = $q->result_array();
   
  	           
  	           
  }

  public function client_type(){
  	
  	$q=$this->db->query("select * from tab_user_group");
  	return $data =$q->result_array();
              
  	           
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