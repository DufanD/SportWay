<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>Best Seller</h3>
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
				<nav class="nav-sidebar">
					<ul class="nav tabs ">
					  <li class="active"><a href="#tab1" data-toggle="tab">Basket</a></li>
					  <li class=""><a href="#tab2" data-toggle="tab">Badminton</a></li> 
					  <li class=""><a href="#tab3" data-toggle="tab">Futsal & Sepakbola</a></li>  
					  <li class=""><a href="#tab4" data-toggle="tab">Renang</a></li>
					</ul>
				</nav>
				<div class=" tab-content tab-content-t ">
					<div class="tab-pane active text-style" id="tab1">
						<div class=" con-w3l">
							<?php
							$i=0; 
							foreach ($kontents_top as $kontent) { 
							if($i < 4 && ($kontent['jenis_produk'] == 'Basket')) {
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
							<?php $i++; } } ?>
							<div class="clearfix"></div>
						 </div>
					</div>

					<div class="tab-pane  text-style" id="tab2">
						<div class=" con-w3l">
							<?php
							$i=0; 
							foreach ($kontents_top as $kontent) { 
							if($i < 4 && ($kontent['jenis_produk'] == 'Badminton')) {
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
							<?php $i++; } } ?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane  text-style" id="tab3">
						<div class=" con-w3l">
							<?php
							$i=0; 
							foreach ($kontents_top as $kontent) { 
							if($i < 4 && ($kontent['jenis_produk'] == 'Futsal')) {
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
							<?php $i++; } } ?>
							<div class="clearfix"></div>
						 </div>		  
					</div>
					<div class="tab-pane text-style" id="tab4">
							<div class=" con-w3l">
							<?php
							$i=0; 
							foreach ($kontents_top as $kontent) { 
							if($i < 4 && ($kontent['jenis_produk'] == 'Renang')) {
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
							<?php $i++; } } ?>
							<div class="clearfix"></div>
						 </div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>