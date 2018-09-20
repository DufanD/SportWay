			<script src="<?php echo base_url()."assets/"?>js/jquery.zoomtoo.js"></script>
			<script>
				$(function() {
					$("#picture-frame").zoomToo({
						magnify: 1
					});
				});
			</script>
			<?php foreach ($produk_modals as $produk){ ?>
			<div class="modal fade" id="myModal<?php echo $produk['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
									<div id="picture-frame" style="position: relative; overflow: hidden; cursor: crosshair;">
										<div class="item">
											<img src="<?php echo base_url()."foto_produk/"?><?php echo $produk['foto_produk']; ?>" class="img-responsive" alt="">
										</div>
									</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $produk['nama_produk']; ?></h3>
									<p class="in-para"> Ada banyak variasi dari <?php echo $produk['nama_produk']; ?>.</p>
									<div class="price_single">
									  <span class="reducedfrom ">Rp. <?php echo number_format($produk['harga_produk'],2,",","."); ?></span>
									
									 <div class="clearfix"></div>
									</div>
									<h4 class="quick">Quick Overview:</h4>
									<p class="quick_desc"> <?php echo nl2br($produk['deskripsi_produk']); ?></p>
									 <div class="add-to">
										   <a href="<?= base_url(); ?>cart/add/<?= $produk['id_produk']; ?>"><button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?= $produk['id_produk']; ?>" data-name="<?= $produk['nama_produk']; ?>" data-summary="summary <?= $produk['id_produk']; ?>" data-price="<?= number_format($produk['harga_produk'],2,",","."); ?>" data-quantity="1" data-image="<?= base_url() ?>foto_produk/<?= $produk['foto_produk']; ?>">Add to Cart</button></a>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		<!-- product -->
				