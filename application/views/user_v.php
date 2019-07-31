<!-- <?php //$this->load->view('header'); ?>
<?php //$this->load->view('sidebar'); ?>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h3>Data User</h3>
				</div>
				<div class="panel-body">
					<div class="responsive-table">
						<p><a class="btn btn-success" href="<?php echo site_url('Account/form'); ?>"><i class="fa fa-plus"></i>Tambah</a></p>
						<table id="datatables-example" class="table table-striped table-bordered" width="100%"
							cellspacing="0">
							<thead>
								<tr>
									<th scope="col">Nomor</th>
									<th scope="col">Username</th>
									<th scope="col">Alamat</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>

							<tbody>
								<?php
                                $no = 1;
                                foreach ($user as $row) {
                                    ?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $row->username; ?></td>
									<td><?php echo $row->alamat; ?></td>
									<td><?php echo $row->jenis_kelamin; ?></td>
									<td>
										<a class="btn btn-danger" href="<?php
                                            echo site_url('Account/delete/' . $row->id_user);
                                            ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus
										</a>

										<a class="btn btn-info" href="<?php
                                               echo site_url('Account/select_by/' . $row->id_user);
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
<?php //$this->load->view('footer'); ?> -->

<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data User</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
                        <p><a class="btn btn-success" href="<?php echo site_url('Account/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>
						<?php if($this->session->flashdata()) : ?>
							<div class="alert alert-success" role="alert">
								<?php echo $this->session->flashdata('sukses'); ?>
							</div>
						<?php endif; ?>              
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
									<th scope="col">Nomor</th>
									<th scope="col">Username</th>
									<th scope="col">Alamat</th>
									<th scope="col">Jenis Kelamin</th>
									<th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
                                $no = 1;
                                foreach ($user as $row) {
                                    ?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $row->username; ?></td>
									<td><?php echo $row->alamat; ?></td>
									<td><?php echo $row->jenis_kelamin; ?></td>
									<td>
										<a class="btn btn-danger" href="<?php
                                            echo site_url('Account/delete/' . $row->id_user);
                                            ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus
										</a>

										<a class="btn btn-info" href="<?php
                                               echo site_url('Account/select_by/' . $row->id_user);
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
