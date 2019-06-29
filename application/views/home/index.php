<section>
<div class="container">
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="width:100%;">
  <?php 
  $galeri = $this->Galeri_m->tampilCarousel();
  $no = 0;
  foreach ($galeri as $row) : 
  if ( $no == 0 ) { ?>
	<div class="carousel-item active">
	<a href="<?=base_url();?>galerif">
		<img class="d-block w-100 dandy"
		src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
		alt="First slide" >
	</a>
	<div class="carousel-caption d-none d-md-block">
	  <h3 style="color: #ffffff;"><?= $row->keterangan ; ?></h3>
	</div>
</div>
  <?php } else { ?>
	<div class="carousel-item">
	<a href="<?=base_url();?>galerif">
		<img class="d-block w-100 dandy"
		src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
		alt="First slide">
	</a>
	<div class="carousel-caption d-none d-md-block">
	  <h3 style="color: #ffffff;"><?= $row->keterangan ; ?></h3>
	</div>
</div>
  <?php }  ?>
  <?php $no++; endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>
<!-- Carousel -->

<!-- Tombol Menu -->
<div class="clearfix"></div>
	<div class="container pt-5">
		<div class="choose text-center d-lg-flex">
				<div class="choose-icon"><a href="<?=base_url();?>layananf">
				<i class="material-icons">storage</i>
					<div class=" choose-grid">
						<h3 class="mt-4"> LAYANAN</h3>
						</a>
					</div>
				</div>
				<div class="choose-icon"><a href="<?=base_url();?>beritaf">
				<span aria-hidden="true"><i class="material-icons">rss_feed</i></span>
					<div class="choose-grid">
						<h3 class="mt-4">BERITA</h3>
						</a>
					</div>
				</div>
				<div class="choose-icon"><a href="<?=base_url();?>pengumumanf">
					<span aria-hidden="true"><i class="material-icons">announcement</i></span>
					<div class="choose-grid">
						<h3 class="mt-4">PENGUMUMAN</h3>
						</a>
					</div>
				</div>
				<div class="choose-icon"><a href="<?=base_url();?>galerif">
					<span aria-hidden="true"><i class="material-icons">photo_library</i></span>
					<div class="choose-grid">
						<h3 class="mt-4">GALERI</h3>
						</a>
					</div>
				</div>
				<div class="choose-icon mr-0"><a href="<?=base_url();?>potensif">
					<span aria-hidden="true"><i class="material-icons">map</i></span>
					<div class="choose-grid">
						<h3 class="mt-4">POTENSI DESA</h3>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>

	<div class="container pt-5">
		<div class="choose text-center d-lg-flex">
			<div class="choose-icon"><a href="<?=base_url();?>programf">
				<span aria-hidden="true"><i class="material-icons">library_books</i></span>
				<div class=" choose-grid">
					<h3 class="mt-4">PROGRAM DESA</h3>
					</a>
				</div>
			</div>
			<div class="choose-icon"><a href="<?=base_url();?>profil">
			<span aria-hidden="true"><i class="material-icons">perm_identity</i></span>
				<div class="choose-grid">
					<h3 class="mt-4">PROFIL DESA</h3>
					</a>
				</div>
			</div>
			<div class="choose-icon"><a href="<?=base_url();?>lembagaf">
			<span aria-hidden="true"><i class="material-icons">supervisor_account</i></span>
				<div class="choose-grid">
					<h3 class="mt-4">LEMBAGA</h3>
					</a>
				</div>
			</div>
			<div class="choose-icon"><a href="<?=base_url();?>datadesaf">
			<span aria-hidden="true"><i class="material-icons">perm_data_setting</i></span>
				<div class="choose-grid">
					<h3 class="mt-4">DATA DESA</h3>
					</a>
				</div>
			</div>
			<div class="choose-icon mr-0"><a href="<?=base_url();?>privacyf">
			<span aria-hidden="true"><i class="material-icons">settings	</i></span>
				<div class="choose-grid">
					<h3 class="mt-4">PRIVACY POLICY</h3>
				</a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- Tombol Menu -->

<br>

<!--/Blog-Posts-->

<section class="banner-bottom-w3layouts py-5" id="blog">
<h2 align="center">Berita Terkini</h2>
	<div class="container">
		<div class="inner-sec-w3ls py-lg-5 py-md-3">
			<!--/services-grids-->
			<div class="row blog-sec">
			<?php
			$berita = $this->Berita_m->tampilBeritaHome();
			foreach ($berita as $row) : ?>
				<div class="col-lg-4 col-md-6 about-in blog-grid-info text-left">
					<div class="card img">
						<div class="card-body img">
							<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt=""  style="height: 170px;" class="img-fluid">
							<div class="blog-des mt-3">
								<h5 class="card-title mt-4"><?= $row->judul; ?></h5>
								<p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?= $row->isi; ?></p>
								<a href="<?php echo site_url('Beritaf/detailBerita/' . $row->id_berita); ?>"> Selengkapnya </a>
								<p class="card-text" style="font-style: italic;"><small class="text-muted"><?= $row->tanggal; ?>WIB</small></p>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
<!--//Blog-Posts-->