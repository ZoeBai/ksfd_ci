<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Super_admin extends CI_Controller {
	private function ISEXIST($var)
	{
		if($var==null||$var=="") return false;
		else return true;
	}

	public function index()
	{
		$this->load->library('session');
		$id = $this->session->userdata('id');
		$password = $this->session->userdata('password');
		if($this->ISEXIST($id)){
			$this->mainboard();
		}
		else $this->load->view('login');
	}

	public function mainboard()
	{
		$this->load->database();
		$this->load->library('session');

		$id=$this->session->userdata('id');
		$password=$this->session->userdata('password');

		$this->load->model('Usermodel');

		if($this->Usermodel->login_auth($id,$password)){
			$name=$this->Usermodel->getname($id);
			$data= array('id' => $id,'name'=> $name );
			$this->load->view('mainboard',$data);
		}
		else{
			$this->logout();
		}
	}

	public function login(){
		$this->load->library('session');
		$id=$this->input->get('username',True);
		$password=$this->input->get('password',True);
		$this->session->set_userdata('id', $id);
		$this->session->set_userdata('password', $password);
		$this->mainboard();
	}

	public function signup(){
		$this->load->view('signup');
	}

	public function logout(){
		$this->load->library('session');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('password');
		$this->load->view('login');
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
		$this->load->database();
		$this->load->model('Productmodel');
		$data["query"]=$this->Productmodel->showall();
		$this->load->view('product',$data);
	}

	public function manage_page(){
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Usermodel');
		$id = $this->session->userdata('id');
		$name=$this->Usermodel->getname($id);
		$data = array('id' => $id, 'name' => $name);
		$this->load->view('manage_add',$data);
	}

	public function manage_page_del(){
		$this->load->database();
		$this->load->library('session');
		$this->load->model('Usermodel');
		$id = $this->session->userdata('id');
		$name=$this->Usermodel->getname($id);
		$data = array('id' => $id, 'name' => $name);
		$this->load->view('manage_del',$data);
	}

	public function add_product(){
		$this->load->database();
		$this->load->model('Productmodel');
		$this->load->library('session');
		$this->load->model('Usermodel');

		$this->Productmodel->add();
		echo "<script language='javascript' type='text/javascript'>";  
		echo "alert('添加完成！');";  
		echo "</script>";
		
		$id = $this->session->userdata('id');
		$name=$this->Usermodel->getname($id);
		$data = array('id' => $id, 'name' => $name);
		$this->load->view('manage_add',$data);
	}

	public function del_product(){
		$this->load->database();
		$this->load->model('Productmodel');
		$this->load->library('session');
		$this->load->model('Usermodel');

		$pid=$this->input->get('id',True);

		$this->Productmodel->del($pid);
		echo "<script language='javascript' type='text/javascript'>";  
		echo "alert('删除完成！');";  
		echo "</script>";

		$id = $this->session->userdata('id');
		$name=$this->Usermodel->getname($id);
		$data = array('id' => $id, 'name' => $name);
		$this->load->view('manage_del',$data);
	}

}
