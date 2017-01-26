<?php
 class Change_Password_Model extends CI_Model{

  public function select_password($old,$id){
      $query=$this->db->query("SELECT *
                                 FROM tab_users 
                                 WHERE txt_password = '$old' AND int_user_id='$id'");
        return $query->row_array(); 	
    }
    public function update_password($new,$int_user_id){
     $data = array('txt_password' => $new);
                   $this->db->where('int_user_id',$int_user_id);
		   return $this->db->update("tab_users",$data);   
    }
}?>
