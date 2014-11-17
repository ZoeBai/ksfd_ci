<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function mainboard()
	{
		$this->load->database();
		$id=$this->input->get('username',True);
		$password=$this->input->get('password',True);
		$this->load->model('Usermodel');

		if($this->Usermodel->login_auth($id,$password)){
			$name=$this->Usermodel->getname();
			$data= array('id' => $id,'name'=> $name );
			$this->load->view('mainboard',$data);
		}
		else{
			echo "<h1>ERR!</h1>";
			echo "<script language='javascript' type='text/javascript'>";  
			echo "window.location.href='".base_url('index.php/super_admin')."'";  
			echo "</script>";
		}
	}

	public function signup(){
		$this->load->view('signup');
	}

	public function new_user_submit(){
		$this->load->database();
		$id=$this->input->get('id',True);
		$name=$this->input->get('name',True);
		$address=$this->input->get('address',True);
		$note=$this->input->get('note',True);
		$password=$this->input->get('password',True);

		$this->load->model('Usermodel');

		if($this->Usermodel->adduser($id,$name,$address,$note,$password)){
			//sucessful
			$data= array('id' => $id,'name'=> $name );
			$this->load->view('mainboard',$data);
		}
		else{
			echo "<h1>ERR!</h1>";
			echo "<script language='javascript' type='text/javascript'>";  
			echo "window.location.href='".base_url('index.php/super_admin')."'";  
			echo "</script>";
		}
	}

	public function view_product(){
		;
		$this->load->view('product');
	}
}
