<div class="x_panel">
	<div class="x_title">
		<h2>Managemen Pembelian</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
			<thead>
				<tr>
					<th width="8%">#</th>
					<th width="20%">Id Pembelian</th>
					<th width="30%">Nama Pemesan</th>
					<th width="15%">Tanggal Pesan</th>
					<th width="15%">Batas Bayar</th>
					<th width="10%">Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$today = (abs(strtotime(date('Y-m-d'))));
				$i = 1;
				foreach ($data->result() as $key) {
					$batas = (abs(strtotime($key->bts_pembelian)));
				?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $key->id_pembelian; ?></td>
					<td><?= $key->nama_pelanggan; ?></td>
					<td><?= date('d M Y', strtotime($key->tanggal_pembelian)); ?></td>
					<td><?= date('d M Y', strtotime($key->bts_pembelian)); ?></td>
					<td>
						<?php if($batas < $today && $key->status == 'belum') { ?>
						<a href="<?= base_url(); ?>transadm/delete_trans/<?= $key->id_pembelian; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
						<?php } else { ?>
						<a href="<?= base_url(); ?>transadm/konfirmasi/<?= $key->id_pembelian; ?>" class="btn btn-success" <?php if($key->status == 'proses') { echo 'disabled'; } ?> ><i class="fa fa-check"></i></a>
						<?php } ?>
						<a href="<?= base_url(); ?>transadm/detail_trans/<?= $key->id_pembelian; ?>" class="btn btn-primary"><i class="fa fa-search-plus"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>