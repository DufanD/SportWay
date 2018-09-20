<div class="x_panel">
	<div class="x_title">
		<h2>Detail Produk</h2>
		<div class="clearfix"></div>
	</div>

	<div class="x_content">
		<div class="row">
			<div class="col-md-5 col-sm-6">
				<img src="<?= base_url(); ?>foto_produk/<?= $gambar; ?>" style="width:100%">
			</div>
			<div class="col-md-6 col-sm-6">
				<table class="table table-striped">
					<tr>
						<td width="100px">Nama Produk</td>
						<td>: <?= $nama_produk ?></td>
					</tr>
					<tr>
						<td width="100px">Berat Produk</td>
						<td>: <?= $berat_produk ?> gram</td>
					</tr>
					<tr>
						<td width="100px">Harga Produk</td>
						<td>: <?= 'Rp. '.number_format($harga_produk,0,',','.'); ?></td>
					</tr>
					<tr>
						<td width="100px">Jenis Produk</td>
						<td>: <?= $jenis_produk ?></td>
					</tr>
					<tr>
						<td width="100px">Deskripsi</td>
						<td>: <?= nl2br($deskripsi_produk) ?></td>
					</tr>
				</table>
				<a href="<?= base_url(); ?>item/update_item/<?= $id_produk; ?>" class="btn btn-warning">Edit</a>
				<a href="<?= base_url(); ?>item/delete_item/<?= $id_produk; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
				<a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
			</div>
		</div>
	</div>
</div>