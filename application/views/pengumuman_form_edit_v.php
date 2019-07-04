<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Pengumuman'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body">
                        <?php
                        foreach ($pengumuman as $row) {
                            ?>

                            <form method="post" action="<?php echo site_url('Pengumuman/edit'); ?>"
                                  enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $row->id_pengumuman; ?>">

                                <div class="form-group">
                                    <label for="usr">Judul:</label>  
                                    <input type="text" class="form-control" 
                                           name="in_judul" required="" value="<?php echo $row->judul; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="comment">Isi:</label>
                                    <textarea class="form-control" rows="5" name="in_isi" required="">
    <?php echo $row->isi; ?></textarea>
                                </div>  

                                <div class="form-group">
                                    <label for="usr">Gambar:</label>
                                    <input type="file" class="form-control" 
                                           name="in_gambar">
                                </div>

                                <div class="form-group">
                                    <img src="<?php echo base_url();
    ?>assets/upload_pengumuman/<?php echo $row->gambar;
    ?>" style="width: 80px">
                                </div>
                                <input type="hidden" 
                                       name="nm_foto" value="<?php echo $row->gambar; ?>"> 

                                <div class="form-group">
                                    <label for="comment">Tanggal:</label>  
                                    <input type="text" class="form-control" 
                                           name="in_tanggal" value="<?php echo $row->tanggal; ?>">
                                </div>
                                <button class="btn btn-success" 
                                        type="submit">Simpan</button>   
                            </form>

<?php } ?>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?> 