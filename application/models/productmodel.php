<?php

class Productmodel extends CI_Model {
	function showall(){
		$query = $this->db->query("select * from product");
		return $query;		
	}
}

?>