<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Berita'); ?>">Data Pendidikan</a></div>-->
        <div class="panel-body"></div>
        <div class="container">
            <div class="container">
            <?php
            foreach ($berita as $row) {
                ?>
                <form method="post" action="<?php echo site_url('Berita/edit'); ?>"
                      enctype="multipart/form-data">
                    
                    <input type ="hidden" name="id_berita" value="<?php echo $row->id_berita; ?>">
                    
                    <div class="form-group">
                        <label for="comment">Judul:</label>
                        <input type="text" class="form-control" 
                               name="judul" required="" value="<?php echo $row->judul; ?>"> 
                    </div> 
                    <div class="form-group">
                    <label for="usr">Kategori:</label>
                    <select name="kategori" class="form-control">
                        <option value="Agama">
                            Agama
                        </option>
                         <option value="Budaya">
                            Budaya
                        </option>
                         <option value="Ekonomi">
                            Ekonomi
                        </option>
                         <option value="Politik">
                            Politik
                        </option>
                         <option value="Sosial">
                            Sosial
                        </option>
                    </select>
                  
                </div>
                    <div class="form-group">
                        <label for="comment">Isi:</label>
                        <input type="text" class="form-control" 
                               name="isi" required="" value="<?php echo $row->isi; ?>"> 
                    </div> 
                     <div clas="form_group">
                        <label for="usr">Gambar:</label>
                        <input type="file" required="" class="form-control" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="comment">Tanggal:</label>
                        <input type="text" class="form-control" 
                               name="tanggal" required="" value="<?php echo $row->tanggal; ?>"> 
                    </div> 
                   
                    <div class="form-group">
                        <img src="<?php echo base_url();
                        
                        ?>assets/upload/<?php echo $row->gambar; ?>"
                             style="width: 80px">
                    </div>

                    <input type="hidden" name="nm_foto" value="<?php echo $row->gambar; ?>">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
    <?php
}
?>

        </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php $this->load->view('footer');?>  