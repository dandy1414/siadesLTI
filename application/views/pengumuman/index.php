<section>
  <div class="container pt-5">
    <br>
    <br>
    <br>
    <h1 align="center">Pengumuman</h1>
    <?php
    $pengumuman = $this->Pengumuman_m->select_db();
    foreach ($pengumuman as $row) : ?>
  <div class="card mt-5">
    <img src="<?= base_url(); ?>assets/upload_pengumuman/<?php echo $row->gambar; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <a href="<?php echo site_url('Pengumumanf/detailPengumuman/' . $row->id_pengumuman); ?>"><h5 class="card-title"><?= $row->judul; ?></a></h5>
      <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?= $row->isi; ?></p>
      <p class="card-text"><small class="text-muted"><?= $row->tanggal; ?> WIB</small></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>
</section>