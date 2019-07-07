<section>
    <br>
    <br>
    <div class="container pt-5">
        <?php foreach ($layanan as $row) : ?>
        <h1 align="center"><?= $row->nama_layanan; ?></h1>

    </div>
    <div class="container pt-5">
        <img width="500px" height="500px" style="display: block; margin-left: auto; margin-right: auto;" src="<?= base_url(); ?>assets/upload/<?php echo $row->gambar; ?>">
        <p align="center"><?= $row->isi_layanan; ?></p>
        <br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><a class="btn btn-info" <?php if (!empty($row->file))
   { ?> href="<?= base_url('assets/document/' . $row->file); ?>" <?php } else { ?>
                    onclick="alert('Maaf, form belum tersedia')" ; <?php } ?>>Download Form</a>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>
