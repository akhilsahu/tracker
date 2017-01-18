<?php
 class Member_Model extends CI_Model{

 /* public function plan_of_client(){
  	
  	$q = $this->db->query("select int_plan_id ,txt_plan_name from tab_plans");
  	return $data = $q->result_array();         
  }
*/
  public function member_list($id){
  	
  	$q=$this->db->query("SELECT *
                         FROM tab_members 
                         WHERE txt_added_by = '$id' and int_is_deleted!=1");
  	return $data =$q->result_array();
              
  	           
  }
  public function get_Member($id){
        $query=$this->db->query("SELECT *
                                 FROM tab_members 
                                 WHERE int_member_id = '$id'");
        return $query->row_array();
    }	

  public function insert_member_data($int_user_id){
	  //echo "hi";exit;
          $seed = str_split('abcdefghijklmnopqrstuvwxyz'
		                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		                 .'0123456789!@#$%^&*'); 
		shuffle($seed); 
		$password = '';
		foreach (array_rand($seed, 8) as $k)
		{
		 $password .= $seed[$k];
		}
                $seed1 = str_split('0123456789'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'); 
		shuffle($seed1); 
		$key = '';
		foreach (array_rand($seed1, 16) as $k)
		{
		 $key .= $seed1[$k];
		}
	 // print_r($int_user_id);exit;
  	$data = array(
                   'txt_name' => $this->input->post('member_name'),
                   'txt_designation' => $this->input->post('txt_designation'),
		   'txt_gender' => $this->input->post('txt_gender'),
                   'txt_relation' => $this->input->post('member_relation'),
                   'txt_email' => $this->input->post('txt_email'),
		   'txt_phone' => $this->input->post('txt_phone'),
                   'txt_added_by' => $int_user_id,
                   'txt_member_password'=>$password,
                   'txt_member_key'=>$key,
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
					$this->db->where('txt_added_by',$this->input->post('id_added'));
					return $this->db->update("tab_members",$data);     
  }

  
  
  public function delete_member($id,$added_by){
	   $query=$this->db->query("Update tab_members SET int_is_deleted=1 WHERE int_member_id = $id and txt_added_by=$added_by");
        return  $query;
	/*$data = array('int_is_deleted' => '1);
  	$this->db->where('int_member_id',$id);
	$this->db->where('txt_added_by',$added_by);
  	return $this->db->update("tab_members",$data);*/
    }

  /*  public function record($user)
    {
       
        $id=$user[0]['int_user_id'];
       // echo $id;exit;
        $query=$this->db->query("select * from tab_users where int_user_id=$id");
        return $query->row_array();
//        return $query;
    }
	 public function client_type(){
  	
  	$q=$this->db->query("select * from tab_user_group");
  	return $data =$q->result_array();
              
  	           
  }
*/ 
	
}


?>
