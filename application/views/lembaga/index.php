<section>
	<div class="container pt-5">
    <br>
		<br>
		<br>
		<h1 align="center">Lembaga</h1>
		<div class="row mt-5">
			<div class="col-md-2">
				<form class="form-inline" action="" method="post">
					<input class="form-control" placeholder="Cari Lembaga.." name="keyword">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-primary ml-5">Cari</button>
			</div>
			  </form>
		  </div>
      <div class="list-group pt-3 pb-3">
		<?php
    foreach ($lembaga as $row) : ?>
		    <a href="<?php echo site_url('Lembagaf/detailLembaga/' . $row->id_lembaga); ?>"
			  class="list-group-item list-group-item-action"><?= $row->nama_lembaga; ?></a>
		<?php endforeach; ?>
	    </div>
	</div>

	<?php  if (empty($lembaga)) { ?>
	<div class="alert alert-danger" role="alert">Maaf, lembaga yang anda cari tidak ditemukan
	</div>
	<?php } ?>
</section>
