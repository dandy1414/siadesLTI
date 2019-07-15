<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Lembaga'); ?>">Data Lembaga</a></div>-->
                <div class="panel-body">
                <h1>Form ubah data lembaga</h1>
                        <?php
                        foreach ($lembaga as $row) {
                            ?>   

                            <form method="post" action="<?php echo site_url('Lembaga/edit'); ?>">  
                                <input type="hidden" name="id" value="<?php echo $row->id_lembaga; ?>">

                                <div class="form-group">
                                    <label for="usr">Nama Lembaga:</label>   

                                    <input type="text" class="form-control" 
                                           name="in_nama_lembaga" required="" value="<?php echo $row->nama_lembaga; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="comment">Detail Lembaga:</label>
                                    <textarea class="form-control" rows="5" name="in_detail_lembaga" required="">
                                        <?php echo $row->detail_lembaga; ?>
                                    </textarea>
                                </div>  


                                <button class="btn btn-success" type="submit">Simpan</button> 

                            </form>
                        <?php } ?>
                    </div>      
                </div>
            </div>
        </div>  
    </div>
</div>
<?php $this->load->view('footer'); ?>  