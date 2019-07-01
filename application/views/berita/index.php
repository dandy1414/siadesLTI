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
		<div class="alert alert-danger" role="alert">Maaf, berita yang anda cari tidak ditemukan
		</div>
		<?php } ?>
		

		
		<div class="container">
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
		
				<div id="collapseasu" class="collapse" aria-labelledby="headingOne"
					data-parent="#accordionasu">
					<div class="card-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
						3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
						laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
						coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
						anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
						occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
						of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</section>