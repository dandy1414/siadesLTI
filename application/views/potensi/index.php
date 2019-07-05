<section>
	<div class="container pt-5">
		<div class="gallery py-5" id="gallery">
			<div class="container py-md-3">
				<h2 class="heading text-center mb-md-5 mb-4">Potensi Desa</h2>
				<div class="news-grids gal text-center">
					<div class="row">
						<?php 
			$potensi = $this->Potensidesa_m->select_db();
			$no = 1;
			foreach( $potensi as $row ) : ?>
						<div class="col-md-3 gal-img">
							<a href="#gal<?= $no++;?>"><img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
									alt="projects image" class="img-fluid" style="height: 150px"></a>
									<h3><?= $row->nama_desa;?></h3>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
    $potensi = $this->Potensidesa_m->select_db();
    $no = 1;
    foreach( $potensi as $row) : ?>
		<div id="gal<?= $no++; ?>" class="popup-effect">
			<div class="popup">
				<h3><?= $row->nama_desa;?></h3>
				
				<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt="Popup Image"
					class="img-fluid pt-3" />
					<p align="justify"><?= $row->keterangan ; ?></p>
				<a class="close" href="#gallery">&times;</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>

<!-- <section>
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
</section> -->