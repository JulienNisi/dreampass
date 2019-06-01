<?php

class Users extends CI_Model {
	public function reg_users($pseudo, $pass, $email) {
		$this->load->helper('date');
		$data = array(
			'pseudo' => $pseudo,
			'email' => $email,
			'pass' => $pass
		);
		$this->db->insert('utilisateurs', $data);
	}

	public function all_pictures($uid) {
		$this->db->select("url_photo");
		$this->db->from("");
		$this->db->where("uID", $uid);


		/*
		Select url photo from photos 
		inner join utilisateurs utilisateurs.id = photos.uid
		where uid = $uid
		*/

	}
}

?>
