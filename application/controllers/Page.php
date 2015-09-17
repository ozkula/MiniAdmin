<?php 
/**
* 
*/
class Page extends CI_controller
{
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['user_id'] = $session_data[0]['iduser'];
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		$data['show_category'] = $this->Mrun->Show_Category_data();
		$data['show_page_data'] = $this->Mrun->Show_page_data();
		$this->load->view('page/page',$data);
	}
	function add_new(){
		$this->Mcreate->add_page();
		redirect('page','refresh');
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
		$data['show_page_data'] = $this->Mrun->Show_page_data_byId($idpost);
		$this->load->view('page/edit_page',$data);
	}
	function edit_true(){
		$this->Mupdate->edit_page();
		redirect('page','refresh');
	}
	function delete(){
		$idpost = $this->uri->segment(3);
		$this->Mdelete->delete_page($idpost);
		redirect('page','refresh');
	}
}
?>
