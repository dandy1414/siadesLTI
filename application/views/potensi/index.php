<section>
    <div class="container pt-5">
    <div class="gallery py-5" id="gallery">
	<div class="container py-md-3">
		<h2 class="heading text-center mb-md-5 mb-4">Potensi Desa</h2>
		<div class="news-grids gal text-center">
			<div class="row">
			<?php 
			$potensi = $this->Potensidesa_m->select_db();
			foreach( $potensi as $row ) : ?>
				<div class="col-md-3 gal-img">
					<a href="<?php echo site_url('Potensif/detailPotensi/' . $row->id_potensi); ?>"><img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt="projects image" class="img-fluid" style="height: 150px"></a>
					<h5 align="center"><?= $row->keterangan; ?></h5>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>