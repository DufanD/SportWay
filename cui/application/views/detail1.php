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
        table.table2, table.table1{
            border-collapse: collapse;
            width : 100%;   
        }
        #customers th {
            background-color: #4CAF50;
            color : white;
        }
 	    tr.sansserif {
            font-family : Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 14px;  
        }
        th.akhir,td {
            padding : 8 px;
            padding-left:5%;
            padding-top:1%;
            padding-bottom: 1%;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th.awal {
             padding : 8 px;
            padding-left:5%;
            padding-top:1%;
            padding-bottom: 1%;
            text-align: left;
            
        }
    </style>
<!--banner-->
<div class="banner-top">
	<div class="container">
		<h3> Detail Transaksi</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>Transaksi<label>/</label>Detail Transaksi</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="check-out">	 
	<div class="container">	 
 		<div class="spec ">
			<h3>Detail Transaksi</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<?php $data = $get->row(); ?>
	    <table class="table1">
	    	<tr class="sansserif">
	            <th class="awal">Id Pesanan &emsp;&emsp;&emsp;: <?= $data->id_pembelian; ?></th>
	        </tr>
	        <tr class="sansserif">
	            <th class ="awal">Tujuan &emsp;&emsp;&emsp;&emsp;&emsp;: <?= $data->tujuan; ?>, <?= $data->kota; ?></th>
	        </tr>
	        <tr class="sansserif">
	            <th class="awal">Kurir / Layanan &emsp;: <?= strtoupper($data->kurir); ?> / <?= $data->service; ?></th>    
	        </tr>
	        <tr class="sansserif">
	            <th class="awal">Kirim ke no. rekening : 02957541152 a.n. SportWay</th>
	        </tr>           
	    </table>
	    <br><br>
	    <table class="table2" id="customers">
	    	<tr class="sansserif">
	    		<th width ="1%" class="akhir">#</th>
	        	<th width ="55%" class="akhir">Nama Barang</th>
	            <th width ="15%" class="akhir">Jumlah Pesan</th> 
	            <th width ="15%" class="akhir">Biaya</th>
	        </tr>
	        <?php 
        		$i = 1;
        		$total_biaya = 0;

        		foreach ($get->result() as $key) {
        			$total_biaya += $key->biaya;
        	?> 
	        <tr>
	        	<td width ="1%"><?= $i++; ?></td>
	        	<td width ="55%"><?= $key->nama_produk; ?></td>
	        	<td width ="15%"><?= $key->jumlah; ?></td>
	        	<td width ="15%" style="text-align: right;">Rp. <?= number_format($key->biaya, 0, ',', '.'); ?></td>
	        </tr>
	        <?php }	?>
	        <tr>
	        	<td colspan="3" style="text-align: center;">Ongkos Kirim</td>
	        	<td style="text-align: right;"><?php echo "Rp. ".number_format($data->total_pembelian - $total_biaya, 0, ',', '.'); ?></td>
	        </tr>
	        <tr>
	        	<td colspan="3" style="text-align: center;">Total Biaya</td>
	        	<td style="text-align: right;"><?php echo "Rp. ".number_format($data->total_pembelian, 0, ',', '.'); ?></td>
	        </tr>
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