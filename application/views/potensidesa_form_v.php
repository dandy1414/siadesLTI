<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Potensidesa'); ?>">Data Potensi Desa</a></div>
                <div class="panel-body">

                    <form method="post" action="<?php echo site_url('Potensidesa/insert'); ?>" enctype="multipart/form-data"> 
                        <div class="form-group">
                            <label for="usr">Gambar:</label><input type="file" class="form-control" name="in_gambar" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr">Nama Desa:</label><input type="text" class="form-control" name="in_nama_desa" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr">Keterangan:</label><input type="text" class="form-control" name="in_keterangan" required="">
                        </div>

                        <button style ="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button></form>
                </div>
            </div>
        </div>
    </div>
</div>    
<?php $this->load->view('footer'); ?>