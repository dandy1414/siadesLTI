<section>
	<div class="container pt-5">
		<div class="gallery py-5" id="gallery">
			<div class="container py-md-3">
				<h2 class="heading text-center mb-md-5 mb-4">Galeri</h2>
				<div class="news-grids gal text-center">
					<div class="row">
						<?php 
			$galeri = $this->Galeri_m->select_db();
			$no = 1;
			foreach( $galeri as $row ) : ?>
						<div class="col-md-3 gal-img">
							<a href="#gal<?= $no++;?>"><img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
									alt="projects image" class="img-fluid"></a>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
    $galeri = $this->Galeri_m->select_db();
    $no = 1;
    foreach( $galeri as $row) : ?>
		<div id="gal<?= $no++; ?>" class="popup-effect">
			<div class="popup">
				<h5><?= $row->keterangan ; ?></h5>
				<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt="Popup Image"
					class="img-fluid pt-3" />
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>
