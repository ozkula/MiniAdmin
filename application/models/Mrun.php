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
	function Show_Post_data(){
		$query = "SELECT * FROM ma_post as post
					LEFT JOIN ma_category as category ON category.category_id = post.idcategory 
					LEFT JOIN ma_user as user ON user.user_id = post.iduser
					ORDER BY post_id DESC";
		$result = $this->db->query($query);
		return $result->result_array();
	}
	function Show_Post_data_byId($id){
		$query = "SELECT * FROM ma_post as post
					LEFT JOIN ma_category as category ON category.category_id = post.idcategory 
					LEFT JOIN ma_user as user ON user.user_id = post.iduser
					WHERE post_id = ?";
		$parameter = array($id);					
		$result = $this->db->query($query,$parameter);
		return $result->result_array();
	}
	function Show_Category_data(){
		$query = "SELECT * FROM ma_category ORDER BY category_id DESC";
		$result = $this->db->query($query);
		return $result->result_array();	
	}
	
}
?>
