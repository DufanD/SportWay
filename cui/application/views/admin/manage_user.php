<div class="x_panel">
	<div class="x_title">
		<h2>Managemen User</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_content">
		<table class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
			<thead>
				<tr>
					<th width="7%">#</th>
					<th>Username</th>
					<th>Email</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				foreach ($data->result() as $user) {
				?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $user->nama_pelanggan; ?></td>
					<td><?= $user->email_pelanggan; ?></td>
					<td><?= $user->telepon_pelanggan; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>