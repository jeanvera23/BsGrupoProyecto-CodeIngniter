<?php
class User_model extends CI_model{



public function register_user($user,$tipo_usuario){
  $this->db->insert('usuarios', $user);
  echo "<script>console.log('a');</script>";
  $data = $this->get_id($user['email']);
  $user_relacion=array(
    'usuarios_id'=>$data['id'],
    'usuarios_tipos_id'=>$tipo_usuario
  );
  echo "<script>console.log('b');</script>";
  $this->db->insert('relacion_usuarios_tipos', $user_relacion);
}

public function login_user($email,$pass){
  
  $this->db->select('*');
  $this->db->from('usuarios');
  $this->db->where('email',$email);
  $this->db->where('password',$pass);
  $this->db->join('relacion_usuarios_tipos', 'usuarios.id = relacion_usuarios_tipos.usuarios_id');
  $this->db->join('usuarios_tipos', 'usuarios_tipos.id = relacion_usuarios_tipos.usuarios_tipos_id');
  if($query=$this->db->get())
  {
    // echo $email.'" "'.$pass;
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function get_id($email){

  echo "<script>console.log('get_id');</script>";
  $this->db->select('*');
  $this->db->from('usuarios');
  $this->db->where('email',$email);
  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }

}
public function email_check($email){
  $this->db->select('*');
  $this->db->from('usuarios');
  $this->db->where('email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
}


?>
