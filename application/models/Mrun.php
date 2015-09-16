<?php 
/**
* 
*/
class Mrun extends CI_Model
{
	function check_login($username, $password){
		$query = "SELECT * FROM ma_user WHERE username = ? AND password = ?";
		$parameter = array($username,$password);
        $result = $this->db->query($query,$parameter);
        return $result->result_array();
    }
    // Post
	function Show_Post_data(){
		$query = "SELECT * FROM ma_post as post
					LEFT JOIN ma_category as category ON category.idcategory = post.category_id 
					LEFT JOIN ma_user as user ON user.iduser = post.user_id
					ORDER BY idpost DESC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function Show_Post_data_byId($id){
		$query = "SELECT * FROM ma_post as post
					LEFT JOIN ma_category as category ON category.idcategory = post.category_id 
					LEFT JOIN ma_user as user ON user.iduser = post.user_id
					WHERE idpost = ?";
		$parameter = array($id);					
		$result = $this->db->query($query,$parameter);
		return $result->result_array();
	}
	// Articles
	function Show_articles_data(){
		$query = "SELECT * FROM ma_articles as articles
					LEFT JOIN ma_user as user ON user.iduser = articles.user_id
					ORDER BY idarticles DESC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function Show_articles_data_byId($id){
		$query = "SELECT * FROM ma_articles as articles
					LEFT JOIN ma_user as user ON user.iduser = articles.user_id
					WHERE idarticles = ?";
		$parameter = array($id);					
		$result = $this->db->query($query,$parameter);
		return $result->result_array();
	}
	function Show_Category_data(){
		$query = "SELECT * FROM ma_category ORDER BY idcategory DESC";
		$result = $this->db->query($query);
		return $result->result_array();	
	}
	
}
?>
