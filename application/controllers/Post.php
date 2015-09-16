<?php 
/**
* 
*/
class Post extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['user_id'] = $session_data[0]['iduser'];
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		$data['show_category'] = $this->Mrun->Show_Category_data();
		$data['show_post_data'] = $this->Mrun->Show_Post_data();
		$this->load->view('post',$data);
	}
	function add_new(){
		$this->Mcreate->add_post();
		redirect('post','refresh');
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['user_id'] = $session_data[0]['iduser'];
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		// This for web
		$idpost = $this->uri->segment(3); // change number to your number <-see uri segment CI
		$data['show_category'] = $this->Mrun->Show_Category_data();
		$data['show_post_data'] = $this->Mrun->Show_Post_data_byId($idpost);
		$this->load->view('edit_post',$data);
	}
	function edit_true(){
		$this->Mupdate->edit_post();
		redirect('post','refresh');
	}
	function delete(){
		$idpost = $this->uri->segment(3);
		$this->Mdelete->delete_post($idpost);
		redirect('post','refresh');
	}
}
?>
