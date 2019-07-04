<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Kategori'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body">
                        <?php
                        foreach ($kategori as $row) {
                            ?>
                            <form method="post" action="<?php echo site_url('Kategori/edit'); ?>"
                                  enctype="multipart/form-data">

                                <input type ="hidden" name="id_kategori" value="<?php echo $row->id_kategori; ?>">

                                <div class="form-group">
                                    <label for="comment">Kategori:</label>
                                    <input type="text" class="form-control" 
                                           name="kategori" required="" value="<?php echo $row->kategori; ?>"> 
                                </div> 
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
<?php $this->load->view('footer'); ?>