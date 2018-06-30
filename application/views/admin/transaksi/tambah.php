<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Transaksi</h1>
	</div>
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
	<div class="form-group">
		<label for="">Nomor</label>
		<input type="text" name="nomor" value="<?php echo $nomor ?>" readonly class="form-control" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Jenis Laundry</label>
		<select name="jenis" class="form-control" style="width:250px;">
			<?php foreach ($jenis as $value): ?>
				<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Nama Karyawan</label>
		<input type="text" value="<?php echo $this->session->userdata('logged_in')['nama']; ?>" readonly class="form-control" style="width:250px;">
	</div>
	
	<input type="submit" class="btn btn-primary" value="Tambah">
	<?php echo form_close(); ?>
	

</main>
<?php $this->load->view('admin/footer') ?>