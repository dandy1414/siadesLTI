<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Pendidikan</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Pendidikan/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>

                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Status</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $pendidikan = $this->Pendidikan_m->select_db();
                                $no = 1;
                                foreach ($pendidikan as $row) {
                                    ?>  
                                    <tr> 
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->status; ?></td>
                                        <td><?php echo $row->jumlah; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Pendidikan/delete/' . $row->id_pendidikan); ?>"
                                               onclick="return confirm('Apakah anda yakin akan menghapus?')"> 
                                                Hapus </a>

                                            <a class="btn btn-info" href="<?php
                                echo site_url('Pendidikan/select_by/' . $row->id_pendidikan);
                                    ?>">Edit</a>
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