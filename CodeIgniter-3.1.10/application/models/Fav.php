<?php 

class Fav extends CI_Model {

    public function add_fav($email, $pseudo_utilisateur) {
        $data = array(
            "email" => $email,
            "utilisateur" => $pseudo_utilisateur
        );
        $this->db->insert('fav', $data);
    }

    public function delete_fav($email, $pseudo_utilisateur) {
        $this->db->where('email', $email AND 'utilisateur', $pseudo_utilisateur);
        $this->db->delete('fav');
    }

    public function count_fav($email) {
        $query = $this->db->select('email, utilisateur')
                    ->from('fav')
                    ->where('email', $email)
                    ->get()
                    ->result();
        return $query;
    }
}

?>