<?php
/*$user_id=$this->session->userdata('id');
if(!$user_id){

  redirect('user/login_view');
}*/

 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Normal User</title>
    <meta charset="utf-8">      <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
    <h4 class="text-center">Bienvenido Usuario:</h4>
      <table class="table table-bordered table-striped">

          <tr>
            <td>Nombre</td>
            <td><?php echo $this->session->userdata('user_nombre'); ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $this->session->userdata('user_email');  ?></td>
          </tr>
          <tr>
            <td>Cumpleaños</td>
            <td><?php echo $this->session->userdata('user_cumpleanios');  ?></td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td><?php echo $this->session->userdata('user_telefono');  ?></td>
          </tr>
          <tr>
            <td>Tipo Usuario</td>
            <td><?php echo $this->session->userdata('tipo_usuario');  ?></td>
          </tr>
      </table>


    </div>
  </div>
<a href="<?php echo base_url('autorizar/user_logout');?>" >  <button type="button" class="btn btn-primary ">Salir</button></a>
</div>
  </body>
</html>
