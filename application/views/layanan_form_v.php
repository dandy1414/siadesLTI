<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>
        
<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Layanan'); ?>">Data Layanan</a></div>
        <div class="panel-body">
           
             <form method="post" action="<?php echo site_url('Layanan/insert');?>"
                  enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="usr">Nama Layanan:</label>
                      <input type="text" class="form-control" name="nama_layanan" required="" >
                  </div>
                  <div class="form-group">
                    <label for="usr">Isi Layanan</label>
                    <input type="text" class="form-control" name="isi_layanan" required="">
                    
                </div>
                 <div class="form-group">
                    <label for="usr">Gambar:</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <label for="usr">File:</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <button style ="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
              </form>
          </div>       
      </div>
    </div>
  </div>    
</div>
     <?php $this->load->view('footer');?>
