<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Account'); ?>">Data User</a></div>
					<div class="panel-body">
					<h1>Form edit data user</h1>
					<?php
                    foreach ($user as $row) {
                    ?>
					<form method="post" action="<?php echo site_url('Account/edit'); ?>" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo $row->id_user; ?>">
						<div class="form-group">
							<label for="usr">Username:</label><input type="text" class="form-control" name="in_username" value="<?php echo $row->username; ?>"
								required="">
						</div>

						<div class="form-group">
							<label for="usr">Password:</label><input type="password" class="form-control" name="in_password"
								required="">
						</div>

						<div class="form-group">
							<label for="usr">Alamat:</label><input type="text" class="form-control" name="in_alamat" value="<?php echo $row->alamat; ?>"
								required="">
						</div>

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
