<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Item</h1>

	</div>
	<h4>Edit Data</h4>
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $item->nama ?>" style="width:250px;">
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="number" name="harga" class="form-control" step='500' min="500" value="<?php echo $item->harga ?>" style="width:150px;">
	</div>
	<input type="submit" class="btn btn-success" value="Edit">
	<?php echo form_close(); ?>

</main>
<?php $this->load->view('admin/footer') ?>