<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Account'); ?>">Data User</a></div>
				<div class="panel-body">

					<form method="post" action="<?php echo site_url('Account/insert'); ?>" enctype="multipart/form-data">
						<div class="form-group">
							<label for="usr">Username:</label><input type="text" class="form-control" name="in_username"
								required="">
						</div>

						<div class="form-group">
							<label for="usr">Password:</label><input type="password" class="form-control" name="in_password"
								required="">
						</div>

						<div class="form-group">
							<label for="usr">Alamat:</label><input type="text" class="form-control" name="in_alamat"
								required="">
						</div>

						<div class="form-group">
							<label for="usr">Jenis Kelamin</label>
							<div class="radio">
								<label><input type="radio" name="in_jenis_kelamin" value="Laki-laki">Laki-laki</label>
                                <label><input type="radio" name="in_jenis_kelamin" value="Perempuan">Perempuan</label>
							</div>
						</div>

						<button style="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('footer'); ?>