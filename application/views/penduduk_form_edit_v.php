<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
              <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Penduduk'); ?>">Data Pendidikan</a></div>-->
                <div class="panel-body"></div>
                <div class="container">
                    <div class="container">
                        <?php
                        foreach ($penduduk as $row) {
                            ?> 

                            <form method="post" action="<?php echo site_url('Penduduk/edit'); ?>"> 
                                <input type="hidden" name="id" value="<?php echo $row->gender; ?>">      

                                <div class="form-group">
                                    <label for="usr">Jumlah:</label>

                                    <input type="number" class="form-control" 
                                           name="in_jumlah" required="" value="<?php echo $row->jumlah; ?>">
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