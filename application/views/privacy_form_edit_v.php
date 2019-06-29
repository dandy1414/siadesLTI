<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Privacy'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body"></div>
                <div class="container">
                    <div class="container">
                        <?php
                        foreach ($privacy as $row) {
                            ?>

                            <form method="post" action="<?php echo site_url('Privacy/edit'); ?>"
                                  enctype="multipart/form-data">

                                <input type="hidden" name="id" value="<?php echo $row->id_privacy; ?>">

                                <div class="form-group">
                                    <label for="comment">Isi:</label>
                                    <textarea class="form-control" rows="5" name="in_isi" required="">
                                        <?php echo $row->isi; ?></textarea>
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