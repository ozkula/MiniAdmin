<?php 
/**
* 
*/
class mDelete extends CI_Model
{
	function delete_post($id){
		$query = "DELETE FROM ma_post WHERE idpost = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	function delete_articles($id){
		$query = "DELETE FROM ma_articles WHERE idarticles = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	function delete_page($id){
		$query = "DELETE FROM ma_page WHERE idpage = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
	function delete_category($id){
		$query = "DELETE FROM ma_category WHERE idcategory = ?";
		$parameter = array($id);
		return $result = $this->db->query($query,$parameter);
	}
}
?>
