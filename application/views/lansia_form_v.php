<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Lansia'); ?>">Data Lansia</a></div>
                <div class="panel-body">


                    <form method="post" action="<?php echo site_url('Lansia/insert'); ?>">

                        <div class="form-group">
                            <label for="usr">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="Perempuan">
                                    Perempuan
                                </option>
                                <option value="Laki-laki">
                                    Laki-laki
                                </option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="usr">Jumlah:</label>
                            <input type="number" class="form-control" name="jumlah" required="">
                        </div>

                        <button style ="margin-bottom:25px" class="btn btn-success" type="submit">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>