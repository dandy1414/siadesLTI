<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Privacy'); ?>">Privacy</a></div>
                <div class="panel-body">


                    <form method="post" action="<?php echo site_url('Privacy/insert'); ?>" 
                          enctype="multipart/form-data"> 

                        <div class="form-group">
                            <label for="comment">Isi:</label>
                            <textarea class="form-control" rows="5" name="in_isi" required=""></textarea>
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