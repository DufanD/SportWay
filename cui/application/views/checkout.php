<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | Checkout | Find Your Sport Journey</title>
<link rel="shortcut icon" href="<?= base_url()."assets/"; ?>images/logo/logo.png">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Sport-Way | Find Your Sport Journey" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url()."assets/"?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()."assets/"?>css/materialize.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url()."assets/"?>css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="<?php echo base_url()."assets/"?>js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url()."assets/"?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	<?php if($this->uri->segment(1) == 'checkout' || $this->uri->segment(1) == 'Checkout') { ?>
		$('#prov').change(function() {
			var prov = $('#prov').val();
			var province = prov.split(',');

			$.ajax({
				type: 'POST',
				url: '<?= base_url(); ?>checkout/city',
				data: { prov: province[0] },
				success: function(obj) {
					$('#kota').html(obj);
				}
			});
		});

		$('#kota').change(function() {
			var kota = $('#kota').val();
			var dest = kota.split(',');
			var kurir = $('#kurir').val();

			$.ajax({
				type: 'POST',
				url: '<?= base_url(); ?>checkout/getCost',
				data: { dest: dest[0], kurir: kurir },
				success: function(obj) {
					$('#layanan').html(obj);
				}
			});
		});

		$('#kurir').change(function() {
			var kota = $('#kota').val();
			var dest = kota.split(',');
			var kurir = $('#kurir').val();

			$.ajax({
				type: 'POST',
				url: '<?= base_url(); ?>checkout/getCost',
				data: { dest: dest[0], kurir: kurir },
				success: function(obj) {
					$('#layanan').html(obj);
				}
			});
		});

		$('#layanan').change(function() {
			var layanan = $('#layanan').val();
			
			$.ajax({
				type: 'POST',
				url: '<?= base_url(); ?>checkout/cost',
				data: { layanan: layanan },
				success: function(obj) {
					var hasil = obj.split(",");

					$('#ongkir').val(hasil[0]);
					$('#total').val(hasil[1]);
				}
			});
		});
	<?php } ?>
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="<?php echo base_url()."assets/"?>css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!-- start-rate-->
<script src="<?php echo base_url()."assets/"?>js/jstarbox.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()."assets/"?>css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
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
<!-- header -->
<!-- <?php //echo $header; ?> -->
<!-- end of header -->

   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Checkout</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>Checkout</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="check-out">	 
	<div class="container">	 
 		<div class="spec ">
			<h3>Checkout</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<div class="row">
			<div class="col m10 s12 offset-m1">
				<form action="" method="POST">
				<div class="col m10 s12">
					<?= validation_errors('<p style="color:red">','</p>'); ?>
					<div class="row">
						<div class="col m8 s12">
							<label>Pilih Provinsi</label>
							<select class="browser-default" name="prov" id="prov">
								<option value="" disabled selected>--Provinsi--</option>
								<?php $this->load->view('prov'); ?>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col m8 s12">
							<label>Pilih Kota/Kabupaten</label>
							<select class="browser-default" name="kota" id="kota">
								<option value="" disabled selected>--Kota/Kabupaten--</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="input-field col m8 s12">
							<input type="text" id="alamat" class="validate" name="alamat" value="">
							<label for="alamat">Alamat</label>
						</div>
						<div class="input-field col m4 s12">
							<input type="text" id="kd_pos" class="validate" name="kd_pos" value="">
							<label for="kd_pos">Kode Pos</label>
						</div>
					</div>

					<div class="row">
						<div class="col m8 s12">
							<label>Pilih Kurir</label>
							<select class="browser-default" name="kurir" id="kurir">
								<option value="pos">POS</option>
								<option value="jne">JNE</option>
								<option value="tiki">TIKI</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col m8 s12">
							<label>Pilih Layanan</label>
							<select class="browser-default" name="layanan" id="layanan">
								<option value="" disabled selected>--Layanan--</option>
							</select>
						</div>
						<div class="col m4 s12">
							<label>Ongkos Kirim</label>
							<input type="number" name="ongkir" id="ongkir" value="0">
						</div>
					</div>

					<div class="row">
						<div class="col m4 s12 offset-m8">
							<label for="total">Total Biaya</label>
							<input type="number" name="total" id="total" value="<?= $this->cart->total(); ?>" >
						</div>
					</div>

					<div class="row right">
						<button type="button" onclick="window.history.go(-1)" class="btn red waves-effect waves-light">Back</button>
						<button type="submit" name="chek" value="Submit" class="btn blue waves-effect waves-light">Submit<i class="fa fa-paper-plane"></i></button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

			
<!--footer-->
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
		<script src="<?php echo base_url()."assets/"?>js/bootstrap.js"></script>
		<script src="<?php echo base_url()."assets/"?>js/materialize.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="<?php echo base_url()."assets/"?>js/jquery.mycart.js"></script>
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