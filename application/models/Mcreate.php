<?php 
/**
* 
*/
class mCreate extends CI_Model
{
	function add_post(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'category_id' => $this->input->post('category'),
			'user_id' => $this->input->post('user_id')
			);
		$this->db->insert('ma_post',$data);
	}	
	function add_articles(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'user_id' => $this->input->post('user_id')
			);
		$this->db->insert('ma_articles',$data);
	}	
	function add_page(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'user_id' => $this->input->post('user_id')
			);
		$this->db->insert('ma_page',$data);
	}	
	function add_category(){
		$data = array(
			'category_name' => $this->input->post('category_name')
			);
		$this->db->insert('ma_category',$data);
	}
}
?>
