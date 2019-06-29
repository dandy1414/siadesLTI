<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Penduduk</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Penduduk/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jumlah</th>
                                    <th></th>
                                    <th scope="col">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $penduduk = $this->Penduduk_m->select_db();
                                $no = 1;
                                $total = 0;
                                foreach ($penduduk as $row) {
                                    ?> 
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->gender; ?></td>
                                        <td><?php echo $row->jumlah;
                                $total = $total + $row->jumlah
                                    ?></td>
                                        <td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Penduduk/delete/' . $row->gender); ?>"  
                                               onclick="return confirm('Apakah anda yakin akan menghapus?')"> Hapus </a>

                                            <a class="btn btn-info" href="<?php echo site_url('Penduduk/select_by/' . $row->gender); ?>">Edit</a>
                                        </td>
                                        </td>
                                    </tr>	
                                <?php } ?>
                                <tr> 
                                    <td>Total</td>
                                    <td></td>
                                    <td>
                                        <?php echo $total ?>
                                    </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>