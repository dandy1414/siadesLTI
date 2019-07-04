<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Keluarga'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body">
                        <?php
                        foreach ($keluarga as $row) {
                            ?>
                            <form method="post" action="<?php echo site_url('Keluarga/edit'); ?>"
                                  enctype="multipart/form-data">

                                <input type ="hidden" name="id_keluarga" value="<?php echo $row->id_keluarga; ?>">

                                <div class="form-group">
                                    <label for="comment">Status:</label>
                                    <input type="text" class="form-control" 
                                           name="status" required="" value="<?php echo $row->status; ?>"> 
                                </div> 
                                <div class="form-group">
                                    <label for="comment">Jumlah:</label>
                                    <input type="number" class="form-control" 
                                           name="jumlah" required="" value="<?php echo $row->jumlah; ?>"> 
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