<?php 
/**
* 
*/
class Login extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$data['error'] = 'Administrator Login';
		$this->load->view('login',$data);
	}
	function check_login(){
		$post = $this->input->post();
		$username = $post['username'];
		$password = $post['password'];
		$login = $this->Mrun->check_login($username, $password);

		if (!$login) {
			$data['error'] = "Login Error Username or Password";
			$this->load->view('login',$data);
		} else {
			session_start();
			$this->session->set_userdata('login',$login);
			redirect('dashboard');
		}

	}
}
?>
