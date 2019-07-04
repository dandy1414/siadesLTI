<section>
	<div class="container pt-5">
		<br>
		<br>
		<br>
		<h1 align="center">Berita</h1>
		<div class="row mt-5">
			<div class="col-md-2">
				<form class="form-inline" action="" method="post">
					<input class="form-control" placeholder="Cari Berita.." name="keyword">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-primary ml-5">Cari</button>
			</div>
			</form>
		</div>

		<?php  if (empty($berita)) { ?>
		<div class="alert alert-danger pt-5" role="alert">Maaf, berita yang anda cari tidak ditemukan
		</div>
		<?php } ?>
		

		
		<div class="container pt-5">
		<?php
		$kategori =$this->Kategori_m->select_db();
		$no = 1;
		foreach($kategori as $row) : ?>
		<div class="accordion" id="accordionasu">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseasu"
							aria-expanded="true" aria-controls="collapseOne">
							<?= $row->kategori; ?>
						</button>
					</h2>
				</div>

				<?php 
				$no = 1;
				$berita = $this->Berita_m->tampilBeritaAgama();
				foreach($berita as $row) : ?>
				<div id="collapseasu" class="collapse" aria-labelledby="headingOne"
					data-parent="#accordionasu">
					<div class="card-body">
						<?= $row->judul; ?>
					</div>
				</div>
		<?php endforeach; ?>
			</div>
		</div>
		<?php endforeach; ?>

		<!-- <?php
      	foreach ($berita as $row) : ?>
		<div class="card mt-5">
			<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<a href="<?php echo site_url('Beritaf/detailBerita/' . $row->id_berita); ?>">
					<h5 class="card-title"><?= $row->judul; ?>
				</a></h5>
				<p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
					<?= $row->isi; ?>
				</p>
				<p class="card-text"><small class="text-muted"><?= $row->tanggal; ?> WIB</small></p>
			</div>
		</div>
		<?php endforeach; ?> -->
	</div>
</section>