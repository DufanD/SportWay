<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | About | Find Your Sport Journey</title>
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
		<h3 >About</h3>
		<h4><a href="<?= base_url(); ?>web">Home</a><label>/</label>About</h4>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- faqs -->
<div class="about-w3 ">
	<!--about-->
	<div class="container">
		<div  class="about">
			<div class="spec ">
				<h3>About</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="col-md-4 about-right">
				<img class="img-responsive" src="<?= base_url()."assets/"; ?>images/gb.jpg" alt="">
			</div>
			<div class="col-md-4 about-left">
				<p>SportWay merupakan toko perlengkapan olahraga terlengkap dan terbesar di Indonesia. SportWay menyediakan berbagai perlengkapan olahraga mulai dari basket, futsal, badminton dan renang. SportWay menyajikan perlengkapan olahraga original dengan menggandeng brand internasional dan local.  </p>
			</div>
			<div class="col-md-4 about-right">
				<img class="img-responsive" src="<?= base_url()."assets/"; ?>images/gb1.jpg" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//about-->
	
	<!--work-experience-->
	<div  class="work">
		<div class="container">
			<div class="spec spec-w3ls">
				<h3>Our Journey</h3>
					<div class="ser-t">
						<b></b>
						<span><i></i></span>
						<b class="line"></b>
					</div>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> May 2012</h5>
						<p>Suatu hari dibulan mei, saya dan teman-teman berkumpul. kami bercerita kesana kemari hingga temu suatu permasalahan sulitnya mencari perlengkapan olahraga original. Dari situ tercetuslah ide untuk mendirikan store olahraga. </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5> November 2012</h5>
						<p>pada bulan ini kami menindaklanjuti ide kami dengan mulai memilih brand yang bekerja sama dengan kami. ada beberapa brand ternama internasional dan lokal. Brand tersebut antara lain Adidas, Nike, Mizuno, Puma dan Specs. </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2012</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> June 2013</h5>
						<p>SPada Juni 2013 setelah melewati serangkaian persiapan dengan mulai kerjasama dengan para brand olahraga ternama, mencari tempat untuk toko/gudang dan persiapan lainnya. SportWay store resmi dibuka sebagai toko olahraga yang menyediakan peralatan olahraga seperti jersey, sepatu, dan bola original. </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5>December 2013</h5>
						<p>Pada Desember 2013 kami melebarkan sayap dengan menyediakan perlengkapan olahraga badminton dan renang.Karena sebelumnya kami hanya menyediakan perlengkapan untuk sepakbola, futsal dan basket. Kami masih menyediakan kebutuhan perlengkapan dasar berolahraga. </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2013</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> April 2014</h5>
						<p>Pada bulan ini kami memfokuskan untuk menambah peralatan penunjang olahraga lainnya. Disini kami menyediakan kebutuhan sekunder untuk menunjang olahraga. Mulai dari atribut pemain, alat latihan dan perlengkapan bertanding.</p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5> August 2014</h5>
						<p>Pada bulan ini dimana menjadi moment dimana kami melebarkan sayap dengan membuka store dikota lain. Kota tujuan untuk membuka store baru adalah solo. Kami memilih solo karena animo masyarakat dalam berolahraga besar sekali.</p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2014</span>
			</div>
			<div class="work-info"> 
				<div class="col-md-6 work-left"> 
					<div class=" work-w3 "> 
						<h5> February 2015</h5>
						<p>Seiring berjalannya waktu trend belanja online semakin besar. Oleh sebab itu kami memutuskan untuk membangun website untuk mempermudah pelanggan dalam berbelanja apabila berhalangan datang ke store secara langsung. website kami bernama SportWay.com. </p>
					</div>
					<label></label>
				</div>
				<div class="col-md-6 work-right"> 
					<div class=" work-w31"> 
						<h5> July 2015</h5>
						<p>Pada bulan ini berfokus untuk menyiapkan rencana menambah perlengkapan cabang olahraga lain. Selain itu kami juga berencana untuk membuka cabang store baru dikota lain. </p>
					</div>
					<label></label>
				</div>
				<div class="clearfix"> </div>
				<span> 2015</span>
				<span class="last"> 2016</span>
			</div>
		</div>
	</div>
	<!--//work-experience-->
	<!--advantages--> 
	<div class="container">
		<div class="advantages">
			<div class="col-md-6 advantages-left ">
				<h3>Our Advantages</h3>
				<div class="advn-one">
					<div class="ad-mian">
						<div class="ad-left">
							<p>1</p>
						</div>
						<div class="ad-right">
							<h4><a href="#">Brand Ternama</a></h4>
							<p>SportWay bekerja sama dengan brand ternama di Indonesia untuk menyediakan produk-produk perlengkapan olahraga. Brand tersebut antara lain Nike, Adidas, Puma, Mizuno dan Specs. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="ad-mian">
						<div class="ad-left">
							<p>2</p>
						</div>
						<div class="ad-right">
							<h4><a href="#">Produk Original</a></h4>
							<p>SportWay dijamin menyediakan produk original dan terjamin kualitasnya. Hal ini bisa dibuktikan dengan beberapa brand olahraga ternama di Indonesia. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="ad-mian">
						<div class="ad-left">
							<p>3</p>
						</div>
						<div class="ad-right">
							<h4><a href="#">Pelayanan Memuaskan</a></h4>
							<p>SportWay sangat mengutamakan kenyamanan dan kepuasan pelanggan.Dalam melayani seluruh karyawan mengutamakan 3S (Senyum, Sapa, Salam), selain itu bisa di buktikan dengan testimoni pelanggan. </p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 advantages-left about-agi">
				<h3>Our Product</h3>
				<div class="advn-two">
					<h4><a href="#"> SportWay menawarkan produk dari beberapa cabang olahraga</a></h4>
					<p></p>
					<ul>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Basket</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Badminton</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Sepakbola dan futsal</a></li>
						<li><a href="#"> <i class="fa fa-angle-right" aria-hidden="true"></i>Renang</a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!--advantages--> 
</div>
<!-- // Terms of use -->

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