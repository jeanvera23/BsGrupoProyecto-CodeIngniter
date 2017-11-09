<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta charset="utf-8">      <!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="extra/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="extra/bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="extra/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="extra/css/login-styles.css">
  <script src="extra/js/jquery-1.11.3.min.js"></script>
  <script src="extra/bootstrap/js/bootstrap.min.js"></script>
  <script src="extra/js/validator.min.js"></script>

</head>
  <body>
  <div class="container">
	        <div class="card card-container">
				<a href="<?php echo base_url('registrar'); ?>" >Registro de usuario</a>

	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            
				<div class="panel-heading">
            </div>
            <?php
          $success_msg= $this->session->flashdata('success_msg');
          $error_msg= $this->session->flashdata('error_msg');

              if($success_msg){
                ?>
                <div class="alert alert-success">
                  <?php echo $success_msg; ?>
                </div>
              <?php
              }
              if($error_msg){
                ?>
                <div class="alert alert-danger">
                  <?php echo $error_msg; ?>
                </div>
                <?php
              }
              ?>

            <div class="panel-body">
                <form role="form" method="post" action="<?php echo base_url('autorizar/login_user'); ?>">
                    <fieldset>
                        <div class="form-group"  >
                            <input class="form-control" placeholder="Direccion de Email" name="user_email" type="email" autofocus required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="user_password" type="password" value="" required>
                        </div>


                            <input class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="login" name="login" >

                    </fieldset>
                </form>
            </div>
	        </div><!-- /card-container -->
    	</div><!-- /container -->

    


  </body>
</html>
