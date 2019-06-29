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
					<a href="#gal<?= $no++;?>"><img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt="projects image" class="img-fluid"></a>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<!-- gallery popups -->
<!-- popup-->

<?php 
$galeri = $this->Galeri_m->select_db();
$no = 1;
foreach( $galeri as $row) : ?>
<div id="gal<?= $no++; ?>" class="popup-effect">
	<div class="popup">
    <h5><?= $row->keterangan ; ?></h5>
		<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" alt="Popup Image" class="img-fluid pt-5" />
		<a class="close" href="#gallery">&times;</a>
	</div>
</div>
<?php endforeach; ?>

    <!-- <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="https://www.google.com/maps/place/Curug+Merak/@-7.1748004,110.0785523,13z/data=!4m8!1m2!2m1!1swisata!3m4!1s0x2e7070405673dbbd:0x57e5d288de81bfa5!8m2!3d-7.1748004!4d110.1135712">
        <img src="https://indonesia.tripcanvas.co/id/wp-content/uploads/sites/2/2019/02/malang-wisata-refresh-feature.jpg" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/nature.jpg">
        <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="/w3images/fjords.jpg">
        <img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div> -->
    </div>
</section>