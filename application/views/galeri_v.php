<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Galeri</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Galeri/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $galeri = $this->Galeri_m->select_db();
                                $no = 1;
                                foreach ($galeri as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td>
                                            <img src="<?php echo base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" style="width:80px">
                                        </td>
                                        <td><?php echo $row->keterangan; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Galeri/delete/' . $row->id_galeri); ?>"
                                               onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                            <a class="btn btn-info" href="<?php echo site_url('Galeri/select_by/' . $row->id_galeri); ?>">Edit</a>
                                        </td>
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

