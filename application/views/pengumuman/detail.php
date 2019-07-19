<section>
    <br>
    <br>
<div class="container pt-5 mb-5">
<?php foreach ($pengumuman as $row) : ?>

<h2 align="center"><?= $row->judul; ?></h2>
<p align="center"><?= $row->isi; ?></p>
<img style="display: block; margin-left: auto; margin-right: auto;" src="<?= base_url(); ?>assets/upload_pengumuman/<?php echo $row->gambar; ?>">
<?php endforeach; ?>
</div>
</section>