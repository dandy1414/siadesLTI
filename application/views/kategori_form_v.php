<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Kategori'); ?>">Data Kategori</a></div>
                <div class="panel-body"></div>
                <div class="container">

                    
                    <form method="post" action="<?php echo site_url('Kategori/insert'); ?>"
                          enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="usr">Kategori:</label>
                            <input type="text" class="form-control" name="kategori" required="">
                        </div>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('header'); ?>