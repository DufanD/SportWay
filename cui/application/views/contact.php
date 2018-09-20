<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | Contact | Find Your Sport Journey</title>
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
<!-- header -->
<?php echo $header; ?>
<!-- End of header -->

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Contact</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="<?= base_url()."assets/"; ?>images/cont.jpg" class="img-responsive" alt="">
				<iframe
 					 width="600"
 					 height="450"
  					 frameborder="0" style="border:0"
  					 src="https://www.google.com/maps/embed/v1/place?key=AIzaSyASjoJ66zL0rWw8aZASEwWEWHKcBC-Gxbo&q=Politeknik+Elektronika+Negeri+Surabaya,Surabaya" allowfullscreen>
				</iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Contact Information</h4>
				<p> Memiliki masalah dengan pendaftaran,pemesanan,atau pengiriman ? Anda dapat menghubungi kami, datang ke store kami atau mengirimkan pesan kepada kami :</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> Politeknik Elektronika Negeri Surabaya, Surabaya.</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">contact@sportway.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+123 2222 222</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post">
									<input type="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
									<input type="submit" value="Submit" >
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Politeknik Elektronika Negeri Surabaya, Surabaya.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Gebang Wetan, Surabaya.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Diponegoro, Bandung.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Mh. Thamrin City, Jakarta.</li>
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : +123 456 7890</li>
										<li>Office No : +123 222 2222</li>
										<li>Home No : +123 456 7890</li>
										<li>Fax No : +123 456 7890</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<?php echo $footer; ?>
<!-- //footer-->

<!-- tabs -->
<script src="<?= base_url()."assets/"?>js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
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