<section>
	<br>
	<br>
	<br>
	<div class="container pt-5">
		<h1 align="center">Detail Lembaga Desa</h1>
		<?php foreach($lembaga as $row) : ?>
		<br>
		<br>
		<br>
		<h2><?= $row->nama_lembaga; ?></h2>
		<br>
		<p><?= $row->detail_lembaga; ?></p>
		<?php endforeach; ?>
	</div>

</section>
