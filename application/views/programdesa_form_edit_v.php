<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Programdesa'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body"></div>
                <div class="container">
                    <div class="container">
                                <?php
                                foreach ($programdesa as $row) {
                                    ?>  
                                <form method="post" action="<?php echo site_url('Programdesa/edit'); ?>"
                                      enctype="multipart/form-data">

                                    <input type="hidden" name="id" value="<?php echo $row->id_program; ?>">
                                    <div class="form-group">
                                        <label for="usr">Lokasi:</label>   
                                        <input type="text" class="form-control" 
                                               name="in_lokasi" required="" value="<?php echo $row->lokasi; ?>">
                                    </div>  

                                    <div class="form-group">
                                        <label for="usr">Pekerjaan:</label>   
                                        <input type="text" class="form-control" 
                                               name="in_pekerjaan" required="" value="<?php echo $row->pekerjaan; ?>">
                                    </div>  

                                    <div class="form-group">
                                        <label for="usr">Keterangan:</label>   
                                        <input type="text" class="form-control" 
                                               name="in_keterangan" required="" value="<?php echo $row->keterangan; ?>">
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
