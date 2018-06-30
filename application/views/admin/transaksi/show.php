<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Transaksi</h1>
	</div>
	<h4>List Data</h4>
	<a href="<?php echo base_url('Transaksi/tambah') ?>" class="btn btn-primary">Tambah</a>
					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor</th>
								<th>Nama</th>
								<th>Pegawai</th>
								<th>Jenis Laundry</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($transaksi as $value): ?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $value->nomor ?></td>
									<td><?php echo $value->nama ?></td>
									<td><?php echo $value->nama_pegawai ?></td>
									<td><?php echo $value->nama_jenis ?></td>
									<td><?php echo $value->status ?></td>
									<td>
										<a href="<?php echo base_url('Transaksi/detail/'.$value->id) ?>" class="btn btn-sm btn-info">Detail</a>
									</td>
								</tr>
								<?php $nomor++; ?>
							<?php endforeach ?>
						</tbody>
					</table>
	
</main>
<?php $this->load->view('admin/footer') ?>