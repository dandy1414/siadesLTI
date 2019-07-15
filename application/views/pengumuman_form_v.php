<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<script>
var ckeditor = CKEDITOR.replace('isi',{
	height: '600px'
});

CKEDITOR.disableAutoInline = true;
CKEDITOR.inline('editable');
</script>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Pengumuman'); ?>">Data Pengumuman</a></div>
                <div class="panel-body">

                    <form method="post" action="<?php echo site_url('Pengumuman/insert'); ?>" 
                          enctype="multipart/form-data"> 

                        <div class="form-group"> 
                            <label for="usr">Judul:</label>
                            <input type="text" class="form-control" name="in_judul" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr">Gambar:</label>
                            <input type="file" class="form-control" name="in_gambar" required="">
                        </div>

                        <div>
							<label for="usr">Isi</label>
							<textarea class="ckeditor" id="isi" name="isi" style="height:800px;"></textarea>
						</div>

                        <button style ="margin-bottom:25px" class="btn btn-success" 
                                type="submit">Simpan</button>
                    </form>
                </div>       
            </div>
        </div>  
    </div>    
</div>
<?php $this->load->view('footer'); ?>