<?php

class Usermodel extends CI_Model {
	var $id;
	var $password;
	var $name;
	var $level;
	var $address;
	var $note;
	var $money;
	
	function login_auth($pid,$ppassword)
	{
		$this->id=$pid;
		$this->password=$ppassword;
		$query=$this->db->query("SELECT password from user where id=?",array($this->id));
		if($query->num_rows()>0){
			if(($query->row()->password)==$this->password)
				return true;
		}
		return false;
	}

	function getname($id){
		$query=$this->db->query("SELECT name from user where id=?",array($id));
		return $query->row()->name;
	}

	function adduser($id,$name,$address,$note,$password)
	{
		$data = array(
               'id' => $id ,
               'name' => $name ,
               'address' => $address,
               'note' => $note ,
               'password' => $password
            );

		$this->db->insert('user', $data); 
	}
}

?>