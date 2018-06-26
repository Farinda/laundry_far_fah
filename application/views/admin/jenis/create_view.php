<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Jenis</h1>

	</div>
	<h4>Tambah Data</h4>
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Ratio</label>
		<input type="number" name="ratio" class="form-control" step='0.1' min="0.1" value="0.1" style="width:150px;">
	</div>
	<input type="submit" class="btn btn-primary" value="Tambah">
	<?php echo form_close(); ?>

</main>
<?php $this->load->view('admin/footer') ?>