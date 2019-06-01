<?php
	$this->load->model("News_model");
	$test = array();
	$test = $this->News_model->get_photos($_SESSION['name']);
	foreach($test as $_SESSION["name"] => $value) {
		print $value->url_photo;
		echo "<br>";
	}

?>
