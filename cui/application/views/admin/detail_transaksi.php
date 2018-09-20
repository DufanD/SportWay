<div class="x_panel">
	<div class="x_title">
		<h2>Detail Transaksi</h2>
		<div class="clearfix"></div>
	</div>
	<?php $user = $data->row(); ?>
	<div class="row">
		<div class="col-md-2 col-sm-4" style="text-align: right;">
			Nama Pemesan : 
		</div>
		<div class="col-md-10 col-sm-8">
			<?= $user->nama_pelanggan; ?>
		</div>
		<div class="col-md-2 col-sm-4" style="text-align: right;">
			Tanggal Pembelian : 
		</div>
		<div class="col-md-10 col-sm-8">
			<?= date('d M Y', strtotime($user->tanggal_pembelian)); ?>
		</div>
		<div class="col-md-2 col-sm-4" style="text-align: right;">
			Alamat : 
		</div>
		<div class="col-md-10 col-sm-8">
			<?= $user->tujuan. ', '.$user->kota; ?>
		</div>
		<div class="col-md-2 col-sm-4" style="text-align: right;">
			Kurir / Service : 
		</div>
		<div class="col-md-10 col-sm-8">
			<?= strtoupper($user->kurir). ', '.$user->service; ?>
		</div>
	</div>
	<br>
	<div class="x_content">
		<div class="row">
			<div class="col-md-10 col-sm-6">
				<table class="table table-striped">
					<tr>
						<th style="text-align: center;">#</th>
						<th style="text-align: center;">Nama Produk</th>
						<th style="text-align: center;">Jumlah</th>
						<th style="text-align: center;">Biaya</th>
					</tr>
					<?php
					$ongkir = $user->total_pembelian;
					$i=1; 
					foreach ($data->result() as $key) { 
						$ongkir -= $key->biaya;
					?>
					<tr>
						<td style="text-align: center;"><?= $i++; ?></td>
						<td style="text-align: center;"><?= $key->nama_produk; ?></td>
						<td style="text-align: center;"><?= $key->jumlah; ?></td>
						<td style="text-align: right;">Rp. <?= number_format($key->biaya, 0, ',', '.'); ?></td>
					</tr>
					<?php } ?>
					<tr>
			        	<td colspan="3" style="text-align: center;">Ongkos Kirim</td>
			        	<td style="text-align: right;"><?php echo "Rp. ".number_format($ongkir, 0, ',', '.'); ?></td>
			        </tr>
			        <tr>
			        	<td colspan="3" style="text-align: center;">Total Biaya</td>
			        	<td style="text-align: right;"><?php echo "Rp. ".number_format($user->total_pembelian, 0, ',', '.'); ?></td>
			        </tr>
				</table>
				<a href="#" class="btn btn-default" onclick="window.history.go(-1)">Kembali</a>
			</div>
		</div>
	</div>
</div>