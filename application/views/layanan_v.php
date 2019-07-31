<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Layanan</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Layanan/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>
                        <?php if($this->session->flashdata()) : ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
						<?php endif; ?>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th scope="col">Nama Layanan</th>
                                    <th scope="col">Isi layanan :</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Form</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col"></th></tr>
                            </thead>  

                            <tbody>
                                <?php
                                $layanan = $this->Layanan_m->select_db();
                                $no = 1;
                                foreach ($layanan as $row) {
                                    ?> 

                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->nama_layanan; ?></td> 
                                        <td><?php echo $row->isi_layanan; ?></td> 
                                        <td>
                                            <img src="<?php echo base_url(); ?>assets/upload/<?php echo $row->gambar; ?>" style="width:80px">
                                        </td>
                                        <td><?php echo $row->file; ?></td>
                                        
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Layanan/delete/' . $row->id_layanan); ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                                <a class="btn btn-info" href="<?php echo site_url('Layanan/select_by/' . $row->id_layanan); ?>">Edit</a>
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