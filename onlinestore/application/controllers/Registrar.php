<?php

class Registrar extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("register.php");
}

public function register_user(){

    $user=array(
        
      'nombre'=>$this->input->post('user_name'),
      'email'=>$this->input->post('user_email'),
      'password'=>md5($this->input->post('user_password')),
      'apellidos'=>$this->input->post('user_apellidos'),
      'cumpleanios'=>$this->input->post('user_age'),
      'telefono'=>$this->input->post('user_mobile')
        );
    print_r($user);

    $email_check=$this->user_model->email_check($user['email']);

    if($email_check){
        $this->user_model->register_user($user,$this->input->post('tipo_usuario'));
        $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
        redirect('autorizar');
    }
    else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect('registrar');
    }

}


}

?>
