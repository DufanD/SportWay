<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | Transaksi | Find Your Sport Journey</title>
<link rel="shortcut icon" href="<?= base_url()."assets/"; ?>images/logo/logo.png">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Sport-Way | Find Your Sport Journey" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?= base_url()."assets/"?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?= base_url()."assets/"?>css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?= base_url()."assets/"?>js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?= base_url()."assets/"?>js/move-top.js"></script>
<script type="text/javascript" src="<?= base_url()."assets/"?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?= base_url()."assets/"?>css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- start-rate-->
<script src="<?= base_url()."assets/"?>js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?= base_url()."assets/"?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->

</head>
<body>
<!-- Ini header -->
<?php echo $header; ?>
<!-- Penutup header -->
    <style>
        table {
            border-collapse: collapse;   
            width : 100%;
        }
        tr.sansserif {
            font-family : Arial, Helvetica, sans-serif;
            text-align: center;
           	font-size: 14px;  
        }
        th,td {
            padding : 8 px;
            padding-left:5%;
            padding-top:12px;
            padding-bottom: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        #customers th {
            background-color: #4CAF50;
            color : white; 
        }    
    </style>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3> Data Transaksi</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>Transaksi</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="check-out">	 
	<div class="container">	 
 		<div class="spec ">
			<h3>Data Transaksi Anda</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>        
	    <table id="customers">
        	<tr class="sansserif">
	         	<th class="t-head" style="text-align: center;">#</th>
	         	<th class="t-head" style="text-align: center;">Id Transaksi</th>
	            <th class="t-head" style="text-align: center;">Tanggal Pesan</th> 
	            <th class="t-head" style="text-align: center;">Batas Bayar</th>
	            <th class="t-head" style="text-align: center;">Total Biaya</th>
	            <th class="t-head" style="text-align: center;">Status</th>
	            <th class="t-head" style="text-align: center;">Opsi</th> 
        	</tr>
        	<?php 
        		$today = (abs(strtotime(date("Y-m-d"))));
        		$i = 1;

        		foreach ($get->result() as $key) {
        	?>	
	        <tr class="sansserif">
	         	<td class="t-data" style="text-align: center;"><?= $i++; ?></td>
	         	<td class="t-data" style="text-align: center;"><?= $key->id_pembelian; ?></td>
			    <td class="t-data" style="text-align: center;"><?= date("d M Y", strtotime($key->tanggal_pembelian)); ?></td>
			    <td class="t-data" style="text-align: center;"><?= date("d M Y", strtotime($key->bts_pembelian)); ?></td>
			    <td class="t-data" style="text-align: center;">Rp. <?= number_format($key->total_pembelian, 0, ',', '.'); ?></td>
			    <td class="t-data" style="text-align: center;">
			    	<?php
			    	$batas = (abs(strtotime($key->bts_pembelian)));

			    	if($today > $batas && $key->status == 'belum'){
			    		echo 'Kedaluarsa';
			    	} else {
			    		echo ucfirst($key->status);
			    	} 
			    	?>
			    </td>
			    <td class="t-data" style="text-align: center;">  
	            	<a href="<?= base_url(); ?>transaksi/detail_trans/<?= $key->id_pembelian; ?>" class="btn btn-info"><i class="glyphicon glyphicon-zoom-in"></i></a>

	            	<?php
	            	if($key->status != 'proses') { ?>
						<a href="<?= base_url(); ?>transaksi/delete_trans/<?= $key->id_pembelian; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
	            	<?php }	?>
	            </td>  
	        </tr>
        	<?php }	?>

	    </table>
	    <br><br>
    	<div class="row" align="right">
			<button type="button" onclick="window.history.go(-1)" class="btn btn-default">Back</button>
		</div>
	</div>
</div>
			
<!-- footer  -->
<?php echo $footer; ?>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="<?= base_url()."assets/"?>js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?= base_url()."assets/"?>js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

</body>
</html>