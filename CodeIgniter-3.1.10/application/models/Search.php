<?php


class Search extends CI_Model {
	public function search_query($query) {
		$this->db->select("id, nom, prenom");
		$this->db->from("utilisateurs");
		$this->db->where('nom LIKE "%'.$query.'%" OR prenom LIKE "%'.$query.'%"');
		//$this->db->where('nom LIKE "'.$query);

		$result = $this->db->get();

		return json_encode($result->result());
	}

}
?>
