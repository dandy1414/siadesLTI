<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Admin Lauwba</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
			<div class="container-login100" style="background-image: url('<?php echo base_url();?>login/images/bg-01.jpg');">
				<div class="container">
					<div class="mt-3 mb-3" style="margin:0px;display:flex;justify-content:center;width:100%">
						<h2 style="color:white">Regiter Account Lauwbas </h2>
					</div>
					<div style="width:100%;display:flex;justify-content:center;">
						<div>
							<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo site_url('Akunadmin/insert');?>" method="post">
								<div class="wrap-input100 validate-input" data-validate = "Enter username">
									<input class="input100" type="text" name="in_username" placeholder="Username">
									<span class="focus-input100" data-placeholder="&#xe82a;"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<input class="input100" type="password" name="in_password" placeholder="Password">
									<span class="focus-input100" data-placeholder="&#xe80f;"></span>
								</div>

								<div class="container-login100-form-btn m-t-32">
                                <a href="<?php echo base_url();?>Akunadmin/login" class="login100-form-btn mr-3">Kembali</a>
                                    <button type="submit" class="login100-form-btn">
										Register
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/jquery/jquery-3.2.1.min.js"/></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>login/js/main.js"></script>
       
</body>
</html>