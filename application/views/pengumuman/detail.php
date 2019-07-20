<section>
   <br>
   <br>
   <br>
    <div class="container pt-5 mb-5">
        <?php foreach ($pengumuman as $row) : ?>
        <h2 align="center"><?= $row->judul; ?></h2>
        <br>
        <img style="display: block; margin-left: auto; margin-right: auto;" class="displayed imggambar" src="<?= base_url(); ?>assets/upload_pengumuman/<?php echo $row->gambar; ?>">
        <p class="card-text" align="center" style="font-style: italic;"><small class="text-muted"><?= $row->tanggal; ?></small></p>
    <div class="container pt-3">
        <p align="justify"><?= $row->isi; ?></p> 
        <?php endforeach; ?>
</div>
</section>