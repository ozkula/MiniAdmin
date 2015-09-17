<?php 
/**
* 
*/
class Setting extends CI_controller
{
	function index(){
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];

		$data['metakey'] = $this->Mrun->get_metakey();
		$data['titldesc'] = $this->Mrun->get_titledesc();
		$this->load->view('setting/setting',$data);
	}
	function save_metakey(){
		$this->Mupdate->edit_metakey();
		redirect('setting','refresh');
	}
	function save_titledesc(){
		$this->Mupdate->edit_title_description();
		redirect('setting','refresh');
	}
	
}
?>
