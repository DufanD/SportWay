<div class="x_panel">
	<div class="x_title">
		<h2>Managemen Produk</h2>
		<div style="float:right">
			<a href="<?= base_url(); ?>item/add_item" class="btn btn-primary">Tambah Produk</a>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
			<thead>
				<tr>
					<th>#</th>
					<th>Nama Produk</th>
					<th>Harga</th>
					<th>Jenis</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($data->result() as $items) {
				?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $items->nama_produk; ?></td>
					<td><?= 'Rp. '.number_format($items->harga_produk,0,',','.'); ?></td>
					<td><?= $items->jenis_produk; ?></td>
					<td>
						<a href="<?= base_url(); ?>item/detail/<?= $items->id_produk; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
						<a href="<?= base_url(); ?>item/update_item/<?= $items->id_produk; ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
						<a href="<?= base_url(); ?>item/delete_item/<?= $items->id_produk; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fa fa-remove"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>