
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SportWay Administrator</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url()."admin_assets/"?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."admin_assets/"?>fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."admin_assets/"?>css/animate.min.css" rel="stylesheet">
  <!-- Data Tables -->
  <link href="<?php echo base_url()."admin_assets/"?>css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()."admin_assets/"?>css/responsive.bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url()."admin_assets/"?>css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url()."admin_assets/"?>css/icheck/flat/green.css" rel="stylesheet">
  <link href="<?php echo base_url()."admin_assets/"?>css/floatexamples.css" rel="stylesheet" />

  <script src="<?php echo base_url()."admin_assets/"?>js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">
      <?php echo $nav; ?>
      

      <!-- page content -->
      <div class="right_col" role="main">

        <br />
        <?php echo $content; ?>
        

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">SportWay-Admin</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->

      </div>
      <!-- /page content -->
    </div>


  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="<?php echo base_url()."admin_assets/"?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."admin_assets/"?>js/nicescroll/jquery.nicescroll.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="<?php echo base_url()."admin_assets/"?>js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- Data Tables js -->
  <script src="<?php echo base_url()."admin_assets/"?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()."admin_assets/"?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url()."admin_assets/"?>js/dataTables.responsive.min.js"></script>
  <!-- icheck -->
  <script src="<?php echo base_url()."admin_assets/"?>js/icheck/icheck.min.js"></script>
  <!-- chart js -->
  <script src="<?php echo base_url()."admin_assets/"?>js/chartjs/chart.min.js"></script>
  <!-- sparkline -->
  <script src="<?php echo base_url()."admin_assets/"?>js/sparkline/jquery.sparkline.min.js"></script>

  <script src="<?php echo base_url()."admin_assets/"?>js/custom.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#datatable').DataTable();
    });
    $('.alert-message').alert().delay(3000).slideUp('slow');
  </script>
</body>

</html>
