<?php

class Forum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('file');
	//	$this->titre_default = "DREAMPASS";

	}
	public function edit() {
		$this->load->helper('file');
		$this->load->library('form_validation');
		$this->load->model("News_model");
		$result = array();
		$result = $this->News_model->get_info($_SESSION['name']);
		$data = array(
			'nom' => $result[0]->nom,
			'prenom' => $result[0]->prenom,
			'cheveux' => $result[0]->cheveux,
			'taille' => $result[0]->taille,
			'poids' => $result[0]->poids,
			'yeux' => $result[0]->yeux,
			'bio' => $result[0]->bio
		);
		$this->load->view('setting', $data);

		$this->form_validation->set_rules('nom', 'Votre nom', 'trim|required');
		/*$this->form_validation->set_rules('prenom', 'Votre prénom',   'trim');
		$this->form_validation->set_rules('cheveux', 'Vos cheveux',   'trim');
		$this->form_validation->set_rules('taille', 'Votre taille',   'trim');
		$this->form_validation->set_rules('poids', 'Votre poids',   'trim');
		$this->form_validation->set_rules('yeux', 'Vos yeux',   'trim')set;*/

		if ($this->form_validation->run() == TRUE) {
			$data = array(
				"nom" => $_POST['nom'],
				"prenom" => $_POST['prenom'],
				"cheveux" => $_POST['cheveux'],
				"taille" => $_POST['taille'],
				"poids" => $_POST['poids'],
				"yeux" => $_POST['yeux'],
				"bio" => $_POST['test']
			);
			$this->db->where('email',$_SESSION['name']);
			$this->db->update('utilisateurs', $data);
			redirect("index.php/Forum/edit", "refresh");
		}
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!($this->upload->do_upload('userfile')))
		{
				$this->load->view('load');
		} else {
				$file_data = $this->upload->data();
				$data['img'] = base_url().'img/'.$file_data['file_name'];
				$url = array(
					"photo" => $data['img']
				);
				$this->db->where('email',$_SESSION['name']);
				$this->db->update('utilisateurs', $url);
				redirect("index.php/Forum/profile", "refresh");
		}

		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!($this->upload->do_upload('photofile')))
		{
				$this->load->view('load');
		} else {
				$file_data = $this->upload->data();
				$data['img'] = base_url().'img/'.$file_data['file_name'];
				$url = array(
					"id_mail" => $_SESSION["name"],
					"url_photo" => $data['img']
				);
				$this->db->insert('photos', $url);
				redirect("index.php/Forum/profile", "refresh");
		}
	}
	public function home()
	{
		/*print_r($_SESSION);
		if(!isset($_SESSION['online'])); {
			$_SESSION['online'] = false;
		}*/
		//die();
		$this->load->view('home');

	}

	public function logout() {
		unset($_SESSION['online']);
		redirect("index.php/Forum/home", "refresh");
	}
	public function profile() {
		if (!($_SESSION['online']))
			redirect("index.php/Forum/home", "refresh");
		$this->load->model("News_model");
		$result = array();
		$result = $this->News_model->get_info($_SESSION['name']);
		$test = array();
		$test = $this->News_model->get_photos($_SESSION['name']);
		$data = array(
			'nom' => $result[0]->nom,
			'prenom' => $result[0]->prenom,
			'cheveux' => $result[0]->cheveux,
			'taille' => $result[0]->taille,
			'poids' => $result[0]->poids,
			'yeux' => $result[0]->yeux,
			'bio' => $result[0]->bio,
			'photo' => $result[0]->photo,
			'test' => $test,
			'bug' => $_SESSION['name']
		);
		$this->load->view('profile', $data);
		$_SESSION['name'] = $_SESSION['name'];


	}
	public function login() {
		$this->form_validation->set_rules('email', 'Votre mail',   'trim|required|valid_email');
		$this->form_validation->set_rules('psw',    'psw',         'trim|required|min_length[5]|max_length[52]|alpha_dash');

		if ($this->form_validation->run() == TRUE) {
			$email = $_POST['email'];
			$pass = $_POST['psw'];

			$query = $this->db->select('pass, email, pseudo')
							->from('utilisateurs')
							->where('email', $email)
							->get()
							->result();
			$pseudo = $query[0]->pseudo;
			if ($query[0]->pass == $pass) {
				$_SESSION['name'] = $email;
				$_SESSION['online'] = TRUE;
				$_SESSION['test'] = $pseudo;
				redirect("http://localhost/CodeIgniter-3.1.10/index.php/Forum/home", "refresh");
			}
		}

		else {
			$_SESSION['online'] = FALSE;
			$this->load->view('login');
		}

	}
	public function register() {
		$this->form_validation->set_rules('pseudo', 'Votre pseudo',   'trim|required|min_length[3]|max_length[52]|alpha_dash');
		$this->form_validation->set_rules('email', 'Votre mail',   'trim|required|valid_email');
		$this->form_validation->set_rules('psw',    'psw',        'trim|required|min_length[5]|max_length[52]|alpha_dash');
		$this->form_validation->set_rules('psw-repeat', 'Mot de passe', 'required|matches[psw]|alpha_dash');

		if ($this->form_validation->run() == TRUE) {
			//if (  model por voir la basse de donnée )
			$email = $this->input->post('email');
			$mdp = $this->input->post('psw');
			$pseudo = $this->input->post('pseudo');
			$this->load->model("Users");
			$this->Users->reg_users($pseudo, $mdp, $email);
			redirect("index.php/Forum/login", "refresh");
		}
		else
		{
			$this->load->view('test');
		}
	}

	public function do_upload() {
		$this->load->helper('file');
		$config['upload_path']          = './img/';
		$config['allowed_types']        = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!($this->upload->do_upload('userfile')))
		{
				$this->load->view('load');
		} else {
				$file_data = $this->upload->data();
				$data['img'] = base_url().'img/'.$file_data['file_name'];
				echo $data['img'];
				$this->load->view("connexion_good");
		}
	}

	public function agence() {
		$this->load->view("connexion_good");
	}
	public function fetch() {
		$this->load->model("News_model");
		echo $this->News_model->fetch_data($this->uri->segment(3));
	}
	public function index() {
		$this->output->enable_profiler(true);
		/*$this->load->model("News_model");
		$result = array();
		$result = $this->News_model->get_info();

		echo $result[0]->email;
		//print_r($result);*/

		// voilà comment tu transmets de la data sur une vue depuis le controllermmerci
		// tkt
		// t'as déjà une bdd de connectée?
	}
}




/*
sessioon [ user_info] = array (


	"nom" =
)
*/ 
?>

