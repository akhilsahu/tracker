<?php
class Api_model extends CI_Model
{
    public function Api_model()
    {
        parent::__construct();
        ///echo "model";exit;
    }
    public function login()
    {
        $response=array();
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="Select * from tab_members where txt_email='$email' AND txt_member_password='$password'";
        //echo $sql;die;
        $query=$this->db->query($sql);
        $result=$query->row_array();
       /// print_r($result['txt_memeber_key']);die;
       // echo $result['txt_member_key'];die;
        if($result>0)
        {
            $response['key']=$result['txt_member_key'];
            
        }
        else {
            $response['key']="Invalid Login..!!";
 }
 echo json_encode($response);
    }
}