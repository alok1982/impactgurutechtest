<?php
class Users_model extends CI_Model
{
    public function user_login($email,$password)
    {
        $sql = "SELECT * FROM user_registration 
                WHERE email='$email' AND password='$password' LIMIT 1 ";
        $result = $this->db->query($sql)->row();        
        return $result; 
    }

    public function get_user($id)
    {
        $sql = "SELECT * FROM user_registration WHERE id='$id' LIMIT 1 ";
        $result = $this->db->query($sql)->row();        
        return $result; 
    }  
}