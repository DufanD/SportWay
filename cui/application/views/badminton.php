<!DOCTYPE html>
<html>
<head>
<title>Sport-Way | Badminton | Find Your Sport Journey</title>
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

                <!-- Carousel
    ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                     <img class="first-slide" src="<?php echo base_url()."assets/"?>images/promo/capture2.PNG" alt="First slide">
                   
                    </div>
                    <div class="item">
                     <img class="second-slide " src="<?php echo base_url()."assets/"?>images/promo/capture3.PNG" alt="Second slide">
                     
                    </div>
                    <div class="item">
                      <img class="third-slide " src="<?php echo base_url()."assets/"?>images/promo/capture5.PNG" alt="Third slide">
                      
                    </div>
                  </div>
                
                </div>
                <!-- /.carousel -->

                <!--content-->
                <div class="product">
                    <div class="container">
                        <div class="spec ">
                            <h3>Products Badminton</h3>
                            <div class="ser-t">
                                <b></b>
                                <span><i></i></span>
                                <b class="line"></b>
                            </div>
                        </div>
                        <div class=" con-w3l agileinf">
                            <!--Barang dalam satu tabel-->
                            <?php
                            if(!empty($kontents_top)){
                            foreach ($kontents_top as $kontent) { 
                            ?>
                            <div class="col-md-3 m-wthree" style="height: 400px">
                                <div class="col-m">                             
                                    <a href="#" data-toggle="modal" data-target="#myModal<?php echo $kontent['id_produk']; ?>" class="offer-img">
                                        <img src="<?php echo base_url()."foto_produk/"?><?php echo $kontent['foto_produk']; ?>" class="img-responsive" alt="">
                                    </a>
                                    <div class="mid-1">
                                        <div class="women">
                                            <h6><a href="#" data-toggle="modal" data-target="#myModal<?php echo $kontent['id_produk']; ?>"><?php echo $kontent['nama_produk']; ?></a></h6>                          
                                        </div>
                                        <div class="mid-2">
                                            <p><em class="item_price">Rp. <?php echo number_format($kontent['harga_produk'],2,",","."); ?></em></p>
                                              <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add">
                                           <a href="<?= base_url(); ?>cart/add/<?= $kontent['id_produk']; ?>"><button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= $kontent['id_produk']; ?>" data-name="<?= $kontent['nama_produk']; ?>" data-summary="summary <?= $kontent['id_produk']; ?>" data-price="<?= number_format($kontent['harga_produk'],2,",","."); ?>" data-quantity="1" data-image="<?= base_url() ?>foto_produk/<?= $kontent['foto_produk']; ?>">Add to Cart</button></a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <?php } } else { echo $content_top; } ?>

                            <div class="clearfix"></div>
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
                        $().UItoTop({
                            easingType: 'easeOutQuart'
                        });
                    });

                </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
                <!-- //smooth scrolling -->
                <!-- for bootstrap working -->
                <script src="<?= base_url()."assets/"?>js/bootstrap.js"></script>
                <!-- //for bootstrap working -->
                <script type='text/javascript' src="<?= base_url()."assets/"?>js/jquery.mycart.js"></script>
                <script type="text/javascript">
                    $(function() {

                        var goToCartIcon = function($addTocartBtn) {
                            var $cartIcon = $(".my-cart-icon");
                            var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({
                                "position": "fixed",
                                "z-index": "999"
                            });
                            $addTocartBtn.prepend($image);
                            var position = $cartIcon.position();
                            $image.animate({
                                top: position.top,
                                left: position.left
                            }, 500, "linear", function() {
                                $image.remove();
                            });
                        }

                        $('.my-cart-btn').myCart({
                            classCartIcon: 'my-cart-icon',
                            classCartBadge: 'my-cart-badge',
                            affixCartIcon: true,
                            checkoutCart: function(products) {
                                $.each(products, function() {
                                    console.log(this);
                                });
                            },
                            clickOnAddToCart: function($addTocart) {
                                goToCartIcon($addTocart);
                            },
                            getDiscountPrice: function(products) {
                                var total = 0;
                                $.each(products, function() {
                                    total += this.quantity * this.price;
                                });
                                return total * 1;
                            }
                        });

                    });

                </script>


    <!-- product modal -->
    <?php echo $product_modal; ?>
    <!-- end of product modal -->
</body>

</html>
