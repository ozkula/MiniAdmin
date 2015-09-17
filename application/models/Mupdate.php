<?php 
/**
* 
*/
class mUpdate extends CI_Model
{
	function edit_post(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'category_id' => $this->input->post('category'),
			'user_id' => $this->input->post('user_id')
			);
		$this->db->where('idpost', $this->input->post('post_id'));
		$this->db->update('ma_post', $data);
	}
	function edit_articles(){
		$datenow = date('Y-m-d');
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => $datenow,
			'user_id' => $this->input->post('user_id')
			);
		$this->db->where('idarticles', $this->input->post('articles_id'));
		$this->db->update('ma_articles', $data);
	}
	function edit_metakey(){
		$data = array(
			'val1' => $this->input->post('keyword'),
			'val2' => $this->input->post('description')
			);
		$this->db->where('idsetting', $this->input->post('idmeta'));
		$this->db->update('ma_setting', $data);	
	}
	function edit_title_description(){
		$data = array(
			'val1' => $this->input->post('titleweb'),
			'val2' => $this->input->post('descriptionweb')
			);
		$this->db->where('idsetting', $this->input->post('idtitledesc'));
		$this->db->update('ma_setting', $data);	
	}
}
?>
