<div class="container" style="padding-top:10%; margin-bottom:10%">
    <form action="<?php echo site_url('User/proses_login');?>" class="form-signin" style="margin-left:30%; margin-right:30%;">
      <center><h1 class="h3 mb-5 font-weight-normal">Silahkan Login</h1></center>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" name="in_username" class="form-control" placeholder="Username" required=""
					autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="in_password" class="form-control" placeholder="Password" required="">
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
    </form>
	</div>


	<!-- <div class="container pt-5">
		<div id="logreg-forms">
			<form class="form-signin" method="post" action="<?php echo site_url('User/proses_login');?>"">
				<h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
				<p style="text-align:center"> OR </p>
				<input type="text" name="in_username" class="form-control" placeholder="Username" required=""
					autofocus="">
				<input type="password" name="in_password" class="form-control" placeholder="Password" required="">
			</form>

			<form action="/reset/password/" class="form-reset">
				<a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
			</form>
			<br>

		</div>
	</div> -->
