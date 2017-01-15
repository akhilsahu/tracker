<?php
 class Plan_Model extends CI_Model{

 public function insert_plan_data($int_user_id){
    // print_r($_FILES) ;die;
 	$data = array(
                   'txt_plan_name' => $this->input->post('txt_plan_name'),
                   'txt_plan_desc' => $this->input->post('txt_plan_desc'),
                   'dbl_cost' => $this->input->post('dbl_cost'),
                   'txt_added_by' => $int_user_id,
                   'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));

 	$target_dir = "upload/plan/";
	$target_file = $target_dir . basename($_FILES["txt_logo"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
	 	move_uploaded_file($_FILES["txt_logo"]["tmp_name"], $target_file);
		$data['txt_logo']=$target_file;	 	
	}
  	$this->db->insert("tab_plans",$data);
  	           
  }

  public function update_plan($int_user_id){
  	$data = array(
                   'txt_plan_name' => $this->input->post('txt_plan_name'),
                   'txt_plan_desc' => $this->input->post('txt_plan_desc'),
                   'dbl_cost' => $this->input->post('dbl_cost'),
                   'txt_added_by' => $int_user_id,
                   'dt_date' => date('Y-m-d',strtotime($this->input->post('date'))));

 	$target_dir = "uploads/plans/";
	$target_file = $target_dir . basename($_FILES["txt_logo"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ) {
	 	move_uploaded_file($_FILES["txt_logo"]["tmp_name"], $target_file);
		$data['txt_logo']=$target_file;	 	
	}

  	$this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_plan_id',$this->input->post('update_id'));
  	return $this->db->update("tab_plans",$data);
  echo $this->db->last_query();
  	}

  public function get_plan($id,$int_user_id){
        $query=$this->db->query("SELECT *
                                 FROM tab_plans 
                                 WHERE int_plan_id = $id and txt_added_by=$int_user_id");
        return $query->row_array();
    }


  public function plan_list(){
  	
  	$q=$this->db->query("select * from tab_plans");
  	return $data =$q->result_array();
 	           
  }

  public function delete_plan($id,$int_user_id){
    $this->db->where('txt_added_by',$int_user_id);
  	$this->db->where('int_plan_id',$id);
  	$this->db->delete("tab_plans");
    }

}
?>