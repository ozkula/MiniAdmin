<?php 
/**
* 
*/
class Main extends CI_controller
{
	function index(){		
		$session_data = $this->session->userdata('login');
		$data['user_login'] = $session_data;
		$data['username'] = $session_data[0]['username'];
		$data['status'] = $session_data[0]['status'];
		$this->load->view('main',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}
}
?>
