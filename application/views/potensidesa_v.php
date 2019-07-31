<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Potensi Desa</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Potensidesa/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <?php if($this->session->flashdata()) : ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
						<?php endif; ?>
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Gambar</th>
                                    <th scope="col">Nama Desa</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Keterangan</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $potensidesa = $this->Potensidesa_m->select_db();
                                $no = 1;

                                foreach ($potensidesa as $row) {
                                    ?> 
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><img src="<?php echo base_url('assets/upload/' . $row->gambar); ?>" 
                                                 style="width: 80px"> </td>
                                        <td><?php echo $row->nama_desa; ?></td>
                                        <td><?php echo $row->keterangan; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Potensidesa/delete/' . $row->id_potensi); ?>"                                        onclick="return confirm('Apakah anda yakin akan menghapus?')">                              
                                                Hapus </a> 

                                            <a class="btn btn-info" href="<?php
                                echo site_url('Potensidesa/select_by/' . $row->id_potensi);
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