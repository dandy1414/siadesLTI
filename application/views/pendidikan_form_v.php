<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Pendidikan'); ?>">Data Pendidikan</a></div>
                <div class="panel-body"></div>
                <div class="container">


                    <form method="post" action="<?php echo site_url('Pendidikan/insert'); ?>"> 
                        <div class="form-group">
                            <label class="control-label" for="usr">Status:</label>
                            <input type="text" class="form-control" name="in_status" required="">
                        </div>

                        <div class="form-group">
                            <label for="usr">Jumlah:</label>
                            <input type="number" class="form-control" name="in_jumlah" required="">
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
