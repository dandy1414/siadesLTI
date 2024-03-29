<section>
	<div class="container pt-5 mb-5">
		<br>
		<br>
		<br>
		<h1 align="center">Berita</h1>
		<div class="row mt-5">
			<div class="col-xs-2">
				<form class="form-inline" action="" method="post">
					<input class="form-control ml-4" placeholder="Cari Berita.." name="keyword">
			</div>
			<div class="col-xs-2">
				<button type="submit" class="btn btn-primary ml-2">Cari</button>
			</div>
			</form>
		</div>

		<?php if(!empty($pesan) && empty($cari_berita) ) { ?>
		<div class="alert alert-danger mt-2 ml-2" role="alert"><?php echo $pesan ?>
		</div>
		<?php } ?>
		
		<?php if(empty($cari_berita)) { ?>
		<div class="container pt-3">
			<div class="accordion" id="accordionExample">
				<?php
			$kategori = $this->Kategori_m->select_db();
			foreach($kategori as $key => $row) : ?>
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse"
								data-target="#<?= $row->kategori;?>" aria-expanded="true" aria-controls="collapseOne">
								<?= $row->kategori;?>
							</button>
						</h2>
					</div>

					<div id="<?= $row->kategori;?>" class="collapse <?php ($key == 0) ? "show" : null ?>"
						aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">

							<?php
							$berita = $this->Berita_m->select_berita_where($row->kategori);
      						foreach ($berita as $row) : ?>
							<div class="card mt-5">
								<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
									class="card-img-top" alt="...">
								<div class="card-body">
									<a href="<?php echo site_url('Beritaf/detailBerita/' . $row->id_berita); ?>">
										<h5 class="card-title"><?= $row->judul; ?>
									</a></h5>
									<p class="card-text"
										style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">
										<?= $row->isi; ?>
									</p>
									<p class="card-text"><small class="text-muted"><?= $row->tanggal; ?> WIB</small></p>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<?php } else { ?>
		<?php
		foreach($cari_berita as $row) : ?> 
		<div class="card mt-5">
			<img src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>"
				class="card-img-top" alt="...">
					<div class="card-body">
						<a href="<?php echo site_url('Beritaf/detailBerita/' . $row->id_berita); ?>">
							<h5 class="card-title"><?= $row->judul; ?>
						</a></h5>
							<p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?= $row->isi; ?></p>
							<p class="card-text"><small class="text-muted"><?= $row->tanggal; ?> WIB</small></p>
					</div>
		</div>
		<?php endforeach; ?>
		<?php } ?>
	</div>
</section>
