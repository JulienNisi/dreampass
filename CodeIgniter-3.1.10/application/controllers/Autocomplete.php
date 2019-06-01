<?php

class Autocomplete extends CI_Controller {

	public function index() {
		/*$this->load->model("News_model");
		$result = array();
		$result = $this->News_model->get_info();

		echo $result[0]->email;
		//print_r($result);*/

		// voilà comment tu transmets de la data sur une vue depuis le controllermmerci
		// tkt
		// t'as déjà une bdd de connectée?
		$this->load->view("search");
	}
	public function fetch() {
		$this->load->model("News_model");
		echo $this->News_model->fetch_data($this->uri->segment(3));
	}


   }


?>
