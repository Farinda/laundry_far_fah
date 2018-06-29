<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Pegawai</h1>

	</div>
	<?php 
	echo '<h1>Sukses Simpan Data</h1><br>';
	echo anchor('Pegawai/create', 'Masukan Data Lagi').'<br>';
	echo anchor('Pegawai/', 'List data');
	?>

</main>
<?php $this->load->view('admin/footer') ?>