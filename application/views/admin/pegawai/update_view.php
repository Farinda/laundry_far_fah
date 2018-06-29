<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Pegawai</h1>

	</div>
	<h4>Update Data</h4>
	<?php if (isset($error)) {
		echo $error;
	} ?>
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart(''); ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pegawai->nama ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Alamat</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $pegawai->alamat ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">No HP</label>
		<input type="text" name="nohp" class="form-control" value="<?php echo $pegawai->nohp ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Username</label>
		<input type="text" name="username" class="form-control" value="<?php echo $pegawai->username ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" value="<?php echo $pegawai->password ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">level</label>
		<select name="level" class="form-control">
			<option value="admin">Admin</option>
			<option value="operator">Operator</option>
			<option value="pencuci">Pencuci</option>
			<option value="penyetrika">Penyetrika</option>
		</select>
	</div>
	<div class="form-group">
		<label for="">Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<input type="submit" class="btn btn-success" value="Update">
	<?php echo form_close(); ?>

</main>
<?php $this->load->view('admin/footer') ?>