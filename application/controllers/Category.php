<?php 
/**
* 
*/
class Category extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		$data['show_category'] = $this->Mrun->Show_Category_data();
		$this->load->view('category',$data);
	}
	function add_new(){
		$this->Mcreate->add_category();
		redirect('category','refresh');
	}
	function delete(){
		$idpost = $this->uri->segment(3);
		$this->Mdelete->delete_category($idpost);
		redirect('category','refresh');
	}
}
?>
