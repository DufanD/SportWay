<img src="<?php echo base_url()."assets/"?>images/download.png" class="img-head" alt="">
<div class="header">
		<div class="container">
			
			<div class="logo">
				<h1 ><a href="<?= base_url(); ?>web"><b>  <br>  <br>  <br>  <br>  </b>Sport-Way<span>The Best Sport Fittings</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="<?= base_url(); ?>cart" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<?php 
							if($this->cart->total()>0){
								echo 'Rp. '.number_format($this->cart->total(),2,",",".");
							} else {
								echo 'Cart';
							}
						?>
					</a></li>
					<li><a href="<?php 
						if($this->session->userdata('username'))
							echo base_url()."index.php/auth/logout";
						else
							echo base_url()."index.php/auth/login";
					 ?>" ><i class="fa fa-user" aria-hidden="true"></i>
						<?php 
						if($this->session->userdata('username'))
							echo "Logout";
						else
							echo "Login";
						?>
					</a></li>
					<li><a href="<?php echo base_url()."index.php/auth/register"; ?>" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="<?= base_url(); ?>link/about" ><i class="fa fa-file-text-o" aria-hidden="true"></i>Order History</a></li>
					<li><a href="<?php 
						if($this->session->userdata('username'))
							echo base_url()."checkout";
						else
							echo base_url()."auth/login";
					 ?>" ><i class="fa fa-dollar" aria-hidden="true"></i>CheckOut</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="http://www.facebook.com" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="http://www.twitter.com" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="http://www.pinterest.com" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="http://www.dribbble.com" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		
				<!--navbar top-->
				<?php echo $navbar_top; ?>
				<!--end of navbar top-->
					
		</div>		
</div>