<?php $this->load->view('admin/header') ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h1">Transaksi</h1>
	</div>
	<div class="row">
		<div class="col-md-4">
			<h4>Tambah Item</h4>
			<?php echo validation_errors(); ?>
			<?php echo form_open(''); ?>
			<div class="form-group">
				<label for="">Nama Item</label>
				<select name="fk_item" class="form-control">
					<?php foreach ($item as $value): ?>
						<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
					<?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Jumlah</label>
				<input type="number" name="jumlah" class="form-control" step='1' min="1" value="1" style="width:150px;">
			</div>
			<input type="submit" class="btn btn-primary" value="Tambah">
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-8">
			<h4>Tambah Item</h4>
			<table class="table table-hover table-inverse">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Jumlah</th>
						<th>Satuan</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($detail as $value): ?>
						<tr>
							<td><?php echo $value->nama ?></td>
							<td><?php echo $value->jumlah ?></td>
							<td><?php echo $value->harga ?></td>
							<td><?php echo $value->harga*$value->jumlah ?></td>
							<td>
								<a href="<?php echo base_url('Transaksi/detail_delete/'.$transaksi->id.'/'.$value->id) ?>" class="btn btn-sm btn-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>

			</table>
			<a href="<?php echo base_url('Transaksi/set_status/'.$transaksi->id.'/1'); ?>" class="btn btn-success mt-3">Selesai</a>
		</div>
	</div>
	

</main>
<?php $this->load->view('admin/footer') ?>