<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Program Desa</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Programdesa/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              
                        <?php if($this->session->flashdata()) : ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
						<?php endif; ?>
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Lokasi/Pendukuhan</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $programdesa = $this->Programdesa_m->select_db();
                                $no = 1;
                                $total = 0;
                                foreach ($programdesa as $row) {
                                    ?> 
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->lokasi; ?></td>
                                        <td><?php echo $row->pekerjaan ?></td>
                                        <td><?php echo $row->keterangan
                                //$total=$total + $row->jumlah
                                    ?></td>

                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Programdesa/delete/' . $row->id_program); ?>"                                        onclick="return confirm('Apakah anda yakin akan menghapus?')">                              
                                                Hapus </a>

                                            <a class="btn btn-info" href="<?php
                                               echo site_url('Programdesa/select_by/' . $row->id_program);
                                               ?>">Edit</a>
                                        </td>
                                    </tr>	
                                <?php } ?>

                            </tbody>

                        </table>
                    </div>
                </div>
                <?php $this->load->view('footer'); ?>