<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Lembaga'); ?>">Data Lembaga</a></div>
                <div class="panel-body"></div>
                <div class="container">



                    <form method="post" action="<?php echo site_url('Lembaga/insert'); ?>"> 
                        <div class="form-group">
                            <label for="usr">Nama Lembaga:</label>
                            <input type="text" class="form-control" name="in_nama_lembaga" required="">
                        </div> 
                        
                        <div class="form-group">
                            <label for="comment">Detail Lembaga:</label>
                            <textarea class="form-control" rows="5" name="in_detail_lembaga" required=""></textarea>
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