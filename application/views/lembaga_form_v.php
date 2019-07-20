<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<script>
var ckeditor = CKEDITOR.replace('isi',{
	height: '600px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Lembaga'); ?>">Data Lembaga</a>
				</div>
				<div class="panel-body">

					<form method="post" action="<?php echo site_url('Lembaga/insert'); ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="usr">Nama Lembaga:</label>
							<input type="text" class="form-control" name="in_nama_lembaga" required="">

						</div>
						<div>
							<label for="usr">Detail lembaga</label>
							<textarea class="ckeditor" id="isi" name="isi" style="height:800px;"></textarea>
						</div>
						<div>
							<button style="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer'); ?> 