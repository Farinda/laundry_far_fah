<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Item</h1>

	</div>
	<h4>List Data</h4>
	<a href="<?php echo base_url('Item/create') ?>" class="btn btn-primary">Tambah</a>

					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Tanggal</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($item_data as $value): ?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $value->nama ?></td>
									<td><?php echo $value->harga ?></td>
									<td><?php echo date('Y-m-d',strtotime($value->tanggal)); ?></td>
									<td>
										<a href="<?php echo base_url('Item/update/'.$value->id) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Item/delete/'.$value->id) ?>" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
								<?php $nomor++; ?>
							<?php endforeach ?>
						</tbody>
					</table>
	
</main>
<?php $this->load->view('admin/footer') ?>