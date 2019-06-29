<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Privacy </h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Privacy/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $privacy = $this->Privacy_m->select_db();
                                $no = 1;
                                foreach ($privacy as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>

                                        <td><?php echo $row->isi; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Privacy/delete/' . $row->id_privacy); ?>"
                                               onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                            <a class="btn btn-info" href="<?php echo site_url('Privacy/select_by/' . $row->id_privacy); ?>">Edit</a>
                                        </td>
                                        <td></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer'); ?>