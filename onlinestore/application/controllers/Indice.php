<?php

class Indice extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}
public function index(){
    $this->load->view("user_profile.php");
  }

}

?>
