<?php 
/**
* 
*/
class Articles extends CI_controller
{
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['user_id'] = $session_data[0]['iduser'];
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		$data['show_post_data'] = $this->Mrun->Show_Articles_data();
		$this->load->view('articles/articles',$data);
	}
	function add_new(){
		$this->Mcreate->add_articles();
		redirect('articles','refresh');
	}
	function edit(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['user_id'] = $session_data[0]['iduser'];
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		// This for web
		$idpost = $this->uri->segment(3); // change number to your number <-see uri segment CI
		$data['show_post_data'] = $this->Mrun->Show_articles_data_byId($idpost);
		$this->load->view('articles/edit_articles',$data);
	}
	function edit_true(){
		$this->Mupdate->edit_articles();
		redirect('articles','refresh');
	}
	function delete(){
		$idpost = $this->uri->segment(3);
		$this->Mdelete->delete_articles($idpost);
		redirect('articles','refresh');
	}
}
?>
