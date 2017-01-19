<?php
 class Login_Model extends CI_Model{

  public function login_valid($username,$password){
  	$this->db->select('int_user_id,txt_user_name,int_group_id');
  	$q=$this->db->where(['txt_user_name'=>$username,'txt_password'=>$password])
  	            ->get('tab_users');
  	            if($q->num_rows()){
  	            	return $abc=$q->result_array();
					//print_r($abc);exit;
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
  	
  	$q=$this->db->query("SELECT P.txt_plan_name, C.* from tab_clients as C inner join tab_plans as P on C.txt_plan_of_client=P.int_plan_id where C.int_is_deleted=0");
  	//print_r($q);exit;
            return $data =$q->result_array();
         //  print_r($data);exit;
  }

  public function insert_client_data($int_user_id){
  	$data = array(
                   'txt_client_name' => $this->input->post('client_name'),
                   'txt_plan_of_client' => $this->input->post('plan_of_client'),
				   'txt_mobile' => $this->input->post('client_phone'),
				   'txt_client_type' => $this->input->post('txt_type'),
				   'txt_no_of_member' => $this->input->post('no_of_member'),
				   'txt_client_email' => $this->input->post('txt_client_email'),
                    'txt_added_by' => $int_user_id,
                    'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
					$query1=$this->db->insert("tab_clients",$data);
                                       
					//echo $query1?"12":"13";exit;
					
		$seed = str_split('abcdefghijklmnopqrstuvwxyz'
		                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		                 .'0123456789!@#$%^&*'); 
		shuffle($seed); 
		$rand = '';
		foreach (array_rand($seed, 8) as $k)
		{
		 $rand .= $seed[$k];
		}
		$seed1 = str_split('0123456789'); 
		shuffle($seed1); 
		$username = '';
		foreach (array_rand($seed1, 4) as $k)
		{
		 $username .= $seed1[$k];
		}
		
        $data1 = array(
                   'txt_user_name' => substr($this->input->post('client_name'),0,4)."_".$username,
            // autogenerate password will be inserted in database as well as send to mail
                   'txt_password' =>$rand, /*$this->input->post('plan_of_client')*/
            
                   'int_group_id' => '3',
            'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));
			$this->db->insert("tab_users",$data1);
	
                        
                         /******Email Sending Code start*****/
                                         
         $to = "txt_client_email";
         $subject = "Congratulation..!!";
         $message="Hello".txt_user_name;
         $message.="Welocme to Saaya";
         $message .= "Your User name is".$username;
         $message .= "Your Password is".$rand;
         
         $header = "From:thethirdthought1990@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      

                                      
                                        /******Email Sending Code start*****/
        
                }
        
        
  

  public function update_client_data($int_user_id){
  	$data = array(  
                   'txt_client_name' => $this->input->post('txt_client_name'),
				   'txt_mobile' => $this->input->post('client_phone'),
				   'txt_client_email' => $this->input->post('txt_client_email'),
                   'txt_plan_of_client' => $this->input->post('plan_of_client'),
                   'txt_client_type' => $this->input->post('txt_type'),
                    'txt_no_of_member' => $this->input->post('no_of_member'),
                    'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));

  	$this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_client_id',$this->input->post('user_id'));
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
      $sql="update tab_clients SET int_is_deleted=1 where int_client_id=$id and txt_added_by=$int_user_id";
      $query=$this->db->query($sql);
      //echo $query?"sucess":"fail";exit;
    /*$this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_client_id',$id);
  	$this->db->update("tab_clients");*/ 
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