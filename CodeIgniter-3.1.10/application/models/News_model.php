<?php

class News_model extends CI_Model
{
	public function get_info($email) {
		$query = $this->db->select('nom, prenom, cheveux, taille, poids, yeux, bio, photo, pseudo, tdp, tdt, tdh, tatouage, piercing')
					 ->from('utilisateurs')
					 ->where('email' ,$email)
                     ->get()
                     ->result();
		return $query;
	}
	public function get_photos($email) {
		$query = $this->db->select('url_photo')
					->from('photos')
					->where('id_mail', $email)
					->get()
					->result();
		return $query;

	}

	public function delete_picture($url_picture) {
			$this->db->where('url_photo', $url_picture);
			$this->db->delete('photos');
			//$this->db->delete('url_photo');
	}

	public function fetch_data($query) {
		$this->db->like("pseudo", $query);
		$query = $this->db->get('utilisateurs');
		if ($query->num_rows() > 0) {
			foreach ($query->result_array() as $row) {
				$output[] = array(
					'name'  => $row["pseudo"],
					'photo' => $row["photo"]
				);
			}
			echo json_encode($output);
		}
	}
	
	public function check_psw($email) {
		$query = $this->db->select('pass')
					->from('utilisateurs')
					->where('email', $email)
					->get()
					->result();
		return $query;
	}

	public function change_psw($email, $NPSW) {
		$this->db->where('email', $_SESSION['name']);
		$this->db->update('utilisateurs', $NPSW);
	}

	public function search_profil($pseudo) {
		$query = $this->db->select('nom, prenom, cheveux, taille, poids, yeux, bio, photo, pseudo, email')
					->from('utilisateurs')
					->where('pseudo' ,$pseudo)
					->get()
					->result();
		return $query;
	}

}

?>
