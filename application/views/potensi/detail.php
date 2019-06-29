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
  $id = $this->uri->segment('3');      
  $potensi = $this->Potensidesa_m->tampilCarousel($id);
  $no = 0;
  foreach ($potensi as $row) : 
  if ( $no == 0 ) { ?>
				<div class="carousel-item active">
						<img class="d-block w-100 dandy" src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
							alt="First slide">
					</a>
					<div class="carousel-caption d-none d-md-block">
						<h2 style="color: #ffffff;"><?= $row->nama_desa ; ?></h2>
					</div>
				</div>
				<?php } else { ?>
				<div class="carousel-item">
						<img class="d-block w-100 dandy" src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
							alt="First slide">
					</a>
					<div class="carousel-caption d-none d-md-block">
						<h2 style="color: #ffffff;"><?= $row->nama_desa ; ?></h2>
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
  <div class="container">
    <p><?= $row->keterangan; ?></p>
  </div>
</section>
