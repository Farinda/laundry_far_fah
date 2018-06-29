<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Pegawai</h1>

	</div>
	<h4>List Data</h4>
	<a href="<?php echo base_url('Pegawai/create') ?>" class="btn btn-primary">Tambah</a>

					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>No HP</th>
								<th>Username</th>
								<th>Password</th>
								<th>Level</th>
								<th>Foto</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($pegawai_data as $value): ?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $value->nama ?></td>
									<td><?php echo $value->alamat ?></td>
									<td><?php echo $value->nohp ?></td>
									<td><?php echo $value->username ?></td>
									<td>********</td>
									<td><?php echo $value->level ?></td>
									<td><img src="<?php echo base_url('assets/img/'.$value->foto) ?>" alt="" width="100px"></td>
									<td>
										<a href="<?php echo base_url('Pegawai/update/'.$value->id) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Pegawai/delete/'.$value->id) ?>" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
								<?php $nomor++; ?>
							<?php endforeach ?>
						</tbody>
					</table>
	
</main>
<?php $this->load->view('admin/footer') ?>