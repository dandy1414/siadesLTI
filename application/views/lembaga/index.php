<section>
	<div class="container pt-5">
		<br>
		<br>
		<br>
		<h1 align="center">Lembaga</h1>
		<div class="row mt-5">
			<div class="col-xs-2">
				<form class="form-inline ml-4" action="" method="post">
					<input class="form-control" placeholder="Cari Lembaga.." name="keyword">
			</div>
			<div class="col-xs-2">
				<button type="submit" class="btn btn-primary ml-2">Cari</button>
			</div>
			</form>
		</div>

		<?php  if (empty($lembaga)) { ?>
		<div class="alert alert-danger" role="alert">Maaf, lembaga yang anda cari tidak ditemukan
		</div>
		<?php } ?>

		<div class="container pt-3">
			<div class="accordion">
				<?php
			foreach($lembaga as $row) : ?>
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<a href="<?= site_url('Lembagaf/detailLembaga/' . $row->id_lembaga); ?>"
								class="btn btn-link"><?= $row->nama_lembaga; ?></a>
						</h5>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
</section>
