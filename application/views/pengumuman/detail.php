<section>
<div class="container pt-5">
<?php foreach ($pengumuman as $row) : ?>

<h2><?= $row->judul; ?></h2>
<p><?= $row->isi; ?></p></div>
<img src="<?= base_url(); ?>assets/upload_pengumuman/<?php echo $row->gambar; ?>">
<?php endforeach; ?>
</section>