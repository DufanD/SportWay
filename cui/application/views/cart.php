<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | Cart | Find Your Sport Journey</title>
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
<?php echo $header; ?>
<!-- end of header -->

   <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3>Cart</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>Cart</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- Tabel Cart -->
<div class="check-out">	 
	<div class="container">	 
 		<div class="spec ">
			<h3>Cart</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
		<table class="table">
		  	<tr>
		  		<th class="t-head" style="text-align: center;">#</th>
				<th class="t-head head-it " style="text-align: center;">Products</th>
				<th class="t-head" style="text-align: center;">Weight (gr)</th>
				<th class="t-head" style="text-align: center;">Price</th>
				<th class="t-head" style="text-align: center;">Qty</th>
				<th class="t-head" style="text-align: center;">Subtotal</th>
				<th class="t-head" style="text-align: center;">Option</th>
		  	</tr>
		  	<?php 
		  	$i = 1;
		  	foreach ($this->cart->contents() as $key) {
		  	?>
		  	<tr class="cross" style="text-align: center;">
		  		<td class="t-data"><?php echo $i++; ?></td>
				<td class="ring-in t-data">
					<a class="at-in">
						<img src="<?= base_url(); ?>foto_produk/<?= $key['foto']; ?>" width="100px" height="100px" class="img-responsive" alt="" >
					</a>
					<div class="sed">
						<h5><?php echo $key['name']; ?></h5>
					</div>
					<div class="clearfix"> </div>
				</td>
				<td class="t-data"><?php echo number_format($key['weight'],0,",","."); ?></td>
				<td class="t-data"><?php echo 'Rp. '.number_format($key['price'],0,",","."); ?></td>
				<td class="t-data" ><?= $key['qty']; ?></td>
				<td class="t-data"><?php echo 'Rp. '.number_format($key['price']*$key['qty'],0,",","."); ?></td>
				<td class="t-data t-w3l">
					<a href="#" data-toggle="modal" data-target="#mod<?= $key['rowid']; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
					<a href="<?= base_url(); ?>cart/delete/<?= $key['rowid']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<div class="modal fade" id="mod<?= $key['rowid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<form action="<?= base_url(); ?>cart/update/<?= $key['rowid']; ?>" method="POST">
							<div class="modal-body modal-spa">	
								<label for="qty<?= $key['rowid']; ?>">Jumlah Pesanan : </label>
								<input type="number" style="text-align: center;" name="qty" value="<?= $key['qty']; ?>" id="qty<?= $key['rowid']; ?>">
							</div>
							<div class="modal-footer">
								<button type="submit" name="submit" value="Submit" class="btn btn-primary">Update Pesanan</button>
							</div>
						</form>	
					</div>
				</div>
			</div>
			<?php } ?>
			<tr>
				<td style="text-align: center;" class="t-data" colspan="5">Total</td>
				<td class="t-data" colspan="2"><?= 'Rp. '.number_format($this->cart->total(),0,",","."); ?></td>
			</tr>
		</table>
		<div class="row" align="right">
			<button type="button" onclick="window.history.go(-1)" class="btn btn-default">Back</button>
			<a href="
			<?php 
				if($this->session->userdata('username'))
					echo base_url()."checkout";
				else
					echo base_url()."auth/login";
			?>" class="btn btn-primary"><i class="fa fa-bank"></i> Checkout</a>
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