<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SportWay Admin Login</title>
	  <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url(); ?>admin_assets/fonts/css/font-awesome.css" rel="stylesheet" /> 
    <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style type="text/css" media="screen">
     body {
      background: #004049;
     }
     .header {
      font-size: 40px;
      color: white;
     }
     .header .fa {
      border: 2px solid #fcfcfc;
      border-radius: 50%;
      padding: 5px;
     }
     .container {
      padding-top: 2%;
     }
     .form-control {
      padding: 20px 10px;
      font-size: 20px;
     }
     .btn {
      padding: 5px 20px;
      font-size: 16px;
      border-radius: 5px;
     }
   </style>

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
              <br />
              <span class="header">
                <center><i class="fa fa-shopping-cart"></i></center>
                <h2>SportWay Admin : Login</h2>
                <h4>( Login yourself to get access )</h4>
              </span>
              <br>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                        <strong> Enter Details To Login </strong>  
                      </div>
                      <div class="panel-body">
                        <?php
                         if ($this->session->flashdata('alert'))
                         {
                            echo '<div class="alert alert-danger alert-message">';
                            echo $this->session->flashdata('alert');
                            echo '</div>';
                         } 
                         ?>
                          <form role="form" method="POST">
                            <br />
                               <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                  <input type="text" class="form-control" name="user" placeholder="Username" />
                                </div>
                                <div class="form-group input-group">
                                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                  <input type="password" class="form-control" name="pass" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                  <label class="checkbox-inline">
                                      <input type="checkbox" /> Remember me
                                  </label>
                                  <span class="pull-right">
                                      <a href="#" >Forget password ? </a> 
                                  </span>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Login</button>
                            </form>
                      </div>
                  </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url(); ?>admin_assets/js/jquery.min.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url(); ?>admin_assets/js/bootstrap.min.js"></script>      
    <script type="text/javascript">
      $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>
</body>
</html>