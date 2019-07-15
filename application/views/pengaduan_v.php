<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Aduan</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Aduan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $pengaduan = $this->Pengaduan_m->select_pengaduan();
                                $no = 1;
                                foreach ($pengaduan as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>

                                        <td><?php echo $row->username; ?></td>
                                        <td><?php echo $row->keluhan; ?></td>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Pengaduan/delete/' . $row->id_pengaduan); ?>"
                                               onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
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