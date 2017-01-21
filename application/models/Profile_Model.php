<?php
 class Profile_Model extends CI_Model{

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
  
    public function update_client_detail($int_user_id){
		
  	  $target_dir = "upload/client/";
	  $target_file = $target_dir . basename($_FILES["txt_logo"]["name"]);
	  	  $uploadOk = 1;
	  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  //print_r($imageFileType);exit;

	  if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
	  move_uploaded_file($_FILES["txt_logo"]["tmp_name"], $target_file);
	  //$data['txt_client_logo']=$target_file;	
	  //print_r($data['txt_client_logo']);exit;
	  }
	  if($this->input->post('clie_id')!=''){
				   $data = array(
				   'txt_client_address' => $this->input->post('txt_address'),
				   'txt_gender' => $this->input->post('txt_gender'),
				   'txt_client_logo'=>$target_file);
				   $this->db->where('int_client_id',$int_user_id);
    return $this->db->update("tab_client_details",$data);
	}
	else
	{$data = array(
				   'txt_client_address' => $this->input->post('txt_address'),
				   'txt_gender' => $this->input->post('txt_gender'),
				   'int_client_id' => $this->input->post('cli_id'),
				   'txt_client_logo'=>$target_file);
    return $this->db->insert("tab_client_details",$data);}
  }
 /* public function insert_client_detail($int_user_id){
	  
		//print_r($_FILES);exit;
  	$target_dir = "upload/client/";
	  $target_file = $target_dir . basename($_FILES["txt_logo"]["name"]);
	  $uploadOk = 1;
	  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	  if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
	 	move_uploaded_file($_FILES["txt_logo"]["tmp_name"], $target_file);
		$data['txt_client_logo']=$target_file;	 	
	}
	 
  }*/

     public function get_all_client($id){
        $query=$this->db->query("SELECT * FROM tab_clients WHERE int_user_id=$id");
        return $query->row_array();
    }
	
	 public function get_all_client_detail($id){
        $query=$this->db->query("SELECT * FROM tab_client_details WHERE int_client_id=$id");
        return $query->row_array();
    }
}


?>