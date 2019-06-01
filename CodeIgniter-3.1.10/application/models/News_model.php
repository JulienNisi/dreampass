<?php

class News_model extends CI_Model
{
	public function get_info($email) {
		$query = $this->db->select('nom, prenom, cheveux, taille, poids, yeux, bio, photo')
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
}

?>
