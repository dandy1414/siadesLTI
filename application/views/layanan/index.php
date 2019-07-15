<section>
	<div class="container pt-5">
		<br>
		<br>
		<br>
		<h1 align="center">Layanan</h1>
		<div class="row mt-5 pl-3">
			<div class="col-xs-2">
				<form class="form-inline" action="" method="post">
					<input class="form-control" placeholder="Cari Layanan.." name="keyword">
			</div>
			<div class="col-xs-2">
				<button type="submit" class="btn btn-primary ml-2">Cari</button>
			</div>
			</form>
		</div>

		<?php  if (empty($layanan)) { ?>
		<div class="alert alert-danger" role="alert">Maaf, layanan yang anda cari tidak ditemukan
		</div>
		<?php } ?>

		<div class="container pt-3">
			<div class="accordion">
				<?php
			foreach($layanan as $row) : ?>
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<a href="<?= site_url('Layananf/detailLayanan/' . $row->id_layanan); ?>" class="btn btn-link"><?= $row->nama_layanan; ?></a>
						</h5>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
</section>
