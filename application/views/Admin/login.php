
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>material/images/logo.jpg">

    <title>login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>material/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>material/css/login/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>material/css/login/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>material/css/login/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <?php 
    if(validation_errors()==!'')
            {
                    echo'<div class="form-group col-md-12"><div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>                
                    </button>'.validation_errors().'</div></div>';
            }

     ?>

  <body>

    <div class="container" >

      <div class="form-signin" style="border:0px solid red;margin-top:10%;">
        <div class="row">
          <div class="col-md-12">
            <center><img src="<?php echo base_url();?>material/images/logo.jpg" height="200"  style="margin-top:-20%;border:0px solid red"></center>
          </div>
        </div>
         <?php echo form_open('Login/user_login_verification') ?> 
         </br> </br>

        <div class="row">
          <div class="col-md-12">
            <b>Username *</b>
            <input type="text" id="username" class="form-control"  name="username">
          </div>
        </div>
          </br>
        <div class="row">
          <div class="col-md-12">
               <b>Password * </b>
               <input type="password" id="password" class="form-control"  name="password">
               
          </div>
        </div>    
        <button class="btn btn-lg btn-primary btn-block" type="submit"><b>Sign in</b></button>
      </div>
    </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>material/css/login//ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<script>
    $(document).ready(function() {
      function disableBack() { window.history.forward() }
      window.onload = disableBack();
      window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>