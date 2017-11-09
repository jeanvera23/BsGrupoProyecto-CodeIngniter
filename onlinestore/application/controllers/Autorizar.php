<?php

class Autorizar extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}
public function index(){
    $this->load->view("login.php");
  }
  public function user_logout(){
    $this->session->sess_destroy();
    redirect('autorizar', 'refresh');
  }
function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );
    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
    //$this->load->view('user_profile.php');
      if($data)
      {
        $this->session->set_userdata('id',$data['id']);
        $this->session->set_userdata('user_email',$data['email']);
        $this->session->set_userdata('user_nombre',$data['nombre']);
        $this->session->set_userdata('user_apellidos',$data['apellidos']);
        $this->session->set_userdata('user_cumpleanios',$data['cumpleanios']);
        $this->session->set_userdata('user_telefono',$data['telefono']);
        $this->session->set_userdata('tipo_usuario',$data['tipo_usuario']);
        
        if($data['tipo_usuario'] == "Administrador"){
          //$this->load->view('admin_profile.php');
          redirect('administrador', 'refresh');
        }else{
          //$this->load->view('user_profile.php');
          redirect('indice', 'refresh');
        }
      }
      else{
        /*$this->session->set_flashdata('error_msg', 'Error al conectar.');
        $this->load->view("login.php");*/
        redirect('autorizar', 'refresh');
      }
    }
}

?>
