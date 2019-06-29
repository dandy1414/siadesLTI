<section>
   <br>
   <br>
   <br>
    <div class="container pt-5">
        <?php foreach ($berita as $row) : ?>
        <h2 align="center"><?= $row->judul; ?></h2>
    </div>
    <div class="container pt-3">
        <img class="displayed imggambar" src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>">
        <p class="card-text" align="center" style="font-style: italic;"><small class="text-muted"><?= $row->tanggal; ?></small></p>
    </div>
    <div class="container pt-3">
        <p align="justify"><?= $row->isi; ?></p> 
    </div>
        <?php endforeach; ?>
</section>

