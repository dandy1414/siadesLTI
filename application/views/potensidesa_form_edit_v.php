<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Potensidesa'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body"></div>
                <div class="container">
                    <div class="container">
                        <?php
                        foreach ($potensidesa as $row) {
                            ?> 

                            <form method="post" action="<?php echo site_url('Potensidesa/edit'); ?>" 
                                  enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $row->id_potensi; ?>">
                                <div class="form-group">
                                    <label for="usr">Gambar:</label>
                                    <input type="file" class="form-control" 
                                           name="in_gambar" required="">
                                </div>
                                
                                <div class="form-group">
                                    <img src="<?php echo base_url();
                        ?>assets/upload/<?php echo $row->gambar; ?> "
                                         style="width: 80px">

                                </div>
                                <input type="hidden" name="nm_foto" value="<?php echo $row->gambar; ?>">

                                <div class="form-group">
                                    <label for="usr">Nama Desa:</label>
                                    <input type="text" class="form-control" 
                                           name="in_nama_desa" required="" value="<?php echo $row->nama_desa; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Keterangan:</label>
                                    <input type="text" class="form-control" 
                                           name="in_keterangan" required="" value="<?php echo $row->keterangan; ?>">
                                </div>
                                <input type="hidden" name="nm_foto" value="<?php echo $row->gambar; ?>">
                                <button class="btn btn-success" 
                                        type="submit">Simpan
                                </button>

                            </form>
<?php } ?>
                    </div>  
                </div>
            </div>
        </div>
    </div>    
</div>
<?php $this->load->view('footer'); ?>  