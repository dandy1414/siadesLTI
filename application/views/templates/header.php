<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $judul; ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Logistic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
	</script>
	
	<!-- js file -->
	<script src="<?php echo base_url('/assets/frontend/js/jquery.js')?>"></script>
	<script src="<?php echo base_url('/assets/frontend/js/bootstrap.min.js')?>"></script>
	
	
	<!-- css files -->
	<link href="<?php echo base_url()?>/assets/frontend/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo base_url()?>/assets/frontend/css/bootstrap.min.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="<?php echo base_url()?>/assets/frontend/css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="<?php echo base_url()?>/assets/frontend/css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<link href="<?php echo base_url()?>/assets/frontend/css/material-icons.css" rel="stylesheet">
    <!-- //css files -->
	
	<!-- //google fonts -->
	<link href="<?php echo base_url()?>/assets/frontend/css/font.css" rel="stylesheet">
	
</head>  
<header>
		<!-- nav -->
	<div class="container-fluid" style="background-color: #0000ff">
		<nav class="pt-2">
			<div id="logo">
				<h1> <a href="<?= base_url(); ?>"><i class="material-icons">account_balance</i> Sistem Informasi Administrasi Desa</a></h1>
			</div>
			<label for="drop" class="toggle">Menu</label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-md-2 ml-auto">
				<li class="mr-lg-4 mr-2 active"><a href="<?= base_url(); ?>">Home</a></li>
				<li class="mr-lg-4 mr-2"><a href="<?= base_url(); ?>profil" >Profil Desa</a></li>
				<li class="mr-lg-4 mr-2"><a href="<?= base_url(); ?>pengaduanf">Pengaduan</a></li>
				<li class="mr-lg-4 mr-2"><a href="#">Download App</a></li>
				<?php
				if($this->session->userdata('status') == "login"){ ?>
					<li class="mr-lg-4 mr-2"><a href="<?= base_url(); ?>Logout/user" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</a></li>
				<?php } else { ?>
					<li class="mr-lg-4 mr-2"><a href="<?= base_url(); ?>Akunadmin/Login">Admin</a></li>
					<li class="mr-lg-4 mr-2"><a href="<?= base_url(); ?>User">Login</a></li>
				<?php } ?>
				
			</ul>
		</nav>
	</div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
<body>
    