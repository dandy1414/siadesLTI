<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Pegumuman</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Pengumuman/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>    

                            <tbody>
                                <?php
                                $pengumuman = $this->Pengumuman_m->select_db();
                                $no = 1;
                                foreach ($pengumuman as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->judul; ?></td>
                                        <td><?php echo $row->isi; ?></td>
                                        <td>
                                            <img src="<?php echo base_url();
                                    ?>assets/upload_pengumuman/<?php echo $row->gambar;
                                    ?>" style="width: 80px"> 
                                        </td>

                                        <td><?php echo $row->tanggal; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php
                                            echo site_url('Pengumuman/delete/' . $row->id_pengumuman);
                                            ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>

                                            <a class="btn btn-info" href="<?php
                                               echo site_url('Pengumuman/select_by/' . $row->id_pengumuman);
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