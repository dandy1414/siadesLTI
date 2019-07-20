<div class="container" style="padding-top:10%; margin-bottom:10%">
	<form action="<?php echo site_url('User/proses_login');?>" class="form-signin"
		style="margin-left:30%; margin-right:30%;" method="post">
		<center>
			<h1 class="h3 mb-5 font-weight-normal">Silahkan Login</h1>
		</center>
		<label for="inputEmail" class="sr-only">Username</label>
		<input type="text" name="in_username" class="form-control" placeholder="Username" required="" autofocus="">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" name="in_password" class="form-control" placeholder="Password" required="">
		<div class="checkbox mb-3">
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		<p>Apabila anda belum mempunyai akun, silahkan hubungi perangkat desa.</p>
		<?php if($this->session->flashdata()) : ?>
		<div class="alert alert-danger mt-2" role="alert">
			<center><?php echo $this->session->flashdata('flash'); ?></center>
		</div>
		<?php endif; ?>
	</form>

</div>
