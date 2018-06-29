<?php $this->load->view('admin/header') ?>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Data Jenis</h1>

	</div>
	<h4>List Data</h4>
	<div id="jsGrid"></div>
	
</main>
<?php $this->load->view('admin/footer') ?>
<script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>