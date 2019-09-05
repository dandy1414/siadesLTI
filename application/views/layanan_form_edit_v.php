<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Layanan'); ?>">Data
						Layanan</a></div>
				<div class="panel-body">
					<h1>Form ubah data layanan</h1>
					<?php
                        foreach ($layanan as $row) {
                            ?>
					<form method="post" action="<?php echo site_url('Layanan/edit'); ?>" enctype="multipart/form-data">

						<input type="hidden" name="id_layanan" value="<?php echo $row->id_layanan; ?>">
						<div class="form-group">
							<label for="comment">Nama Layanan:</label>
							<input type="text" class="form-control" name="nama_layanan" required=""
								value="<?php echo $row->nama_layanan; ?>">
						</div>
						<div class="form-group">
							<label for="comment">Isi Layanan:</label>
							<input type="text" class="form-control" name="isi_layanan" required=""
								value="<?php echo $row->isi_layanan; ?>">
						</div>
						<div clas="form_group">
							<label for="usr">Gambar:</label>
							<input type="file" class="form-control" name="gambar">
						</div>
						<div class="form-group">
							<img src="<?php echo base_url();?>assets/upload/<?php echo $row->gambar; ?>"
								style="width: 80px">
						</div>
						<input type="hidden" name="nm_foto" value="<?php echo $row->gambar; ?>">
						<div class="form-group">
							<label for="usr">File:</label>
							<input type="file" class="form-control" name="file">
						</div>
                        <input type="hidden" name="nm_file" value="<?php echo $row->file; ?>">
						<button class="btn btn-success" type="submit">Simpan</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php $this->load->view('footer'); ?>
