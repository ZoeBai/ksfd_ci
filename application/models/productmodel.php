<?php

class Productmodel extends CI_Model {
	function showall(){
		$query = $this->db->query("select * from product");
		return $query;		
	}

	function add(){
		$id=$this->input->get('id',True);
		$cn_name=$this->input->get('cn_name',True);
		$kr_name=$this->input->get('kr_name',True);
		$fullprice=$this->input->get('fullprice',True);

		$A=$this->input->get('A',True);
		$B=$this->input->get('B',True);
		$C=$this->input->get('C',True);
		$D=$this->input->get('D',True);

		$logo=$this->input->get('logo',True);
		$detail=$this->input->get('detail',True);
		$intro=$this->input->get('intro',True);
		$point_jf=$this->input->get('point_jf',True);
		$stock=$this->input->get('stock',True);

		$data = array(
               'id' =>  $id,
               'cn_name' =>  $cn_name,
               'kr_name' => $kr_name,
               'fullprice' => $fullprice,
               'A' => $A ,
               'B' => $B ,
               'C' => $C ,
               'D' => $D ,
               'logo' => $logo ,
               'detail' => $detail ,
               'intro' => $intro ,
               'point_jf' => $point_jf ,
               'stock' => $stock 
            );

		$this->db->insert('product', $data);
	}

	function del($id){
		;
	}
}

?>