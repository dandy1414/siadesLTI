<body>
	<div class="container pt-5">
		<div id="logreg-forms">
			<form class="form-signin" method="post" action="<?php echo site_url('User/proses_login');?>"">
				<h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
				<p style="text-align:center"> OR </p>
				<input type="text" name="in_username" class="form-control" placeholder="Username" required=""
					autofocus="">
				<input type="password" name="in_password" class="form-control" placeholder="Password" required="">

				<button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign
					in</button>
				<a href="#" id="forgot_pswd">Forgot password?</a>
				<hr>
				<!-- <p>Don't have an account!</p>  -->
				<button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
					Sign up New Account</button>
			</form>

			<form action="/reset/password/" class="form-reset">
				<button class="btn btn-primary btn-block" type="submit">Reset Password</button>
				<a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
			</form>
			<br>

		</div>
	</div>

</body>
