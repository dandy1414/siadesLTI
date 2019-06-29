<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Berita'); ?>">Data Berita</a></div>
        <div class="panel-body"></div>
        <div class="container">
           
            <form method="post" action="<?php echo site_url('Berita/insert');?>"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Judul:</label>
                    <input type="text" class="form-control" name="judul" required="">
                    
                </div>
                
               
                <div class="form-group">
                    <label for="usr">Isi</label>
                    <input type="text" class="form-control" name="isi" required="">
                    
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
                    <label for="usr">Gambar:</label>
                    <input type="file" class="form-control" name="gambar" required="">
                </div>
                <button style ="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
            </form>
            
        </div>
      </div>
    </div>
  </div>    
</div>
   <?php $this->load->view('footer');?>