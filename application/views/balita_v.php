<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h3>Data Balita</h3>
				</div>
				<div class="panel-body">
					<div class="responsive-table">
						<!-- <p><a class="btn btn-success" href="<?php echo site_url('Balita/form');?>"><i
									class="fa fa-plus"></i>
								Tambah</a></p> -->
						<?php if($this->session->flashdata()) : ?>
						<div class="alert alert-success" role="alert">
							<?php echo $this->session->flashdata('sukses'); ?>
						</div>
						<?php endif; ?>
						<table id="datatables-example" class="table table-striped table-bordered" width="100%"
							cellspacing="0">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Gender</th>
									<th scope="col">Jumlah</th>
									<th scope="col">Aksi</th>
									<th scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<?php
                            $balita = $this->Balita_m->select_db();
                            $no = 1;
                            $total = 0;
                            foreach ($balita as $row){
                               
                        ?>
								<tr>
									<th scope="row"><?php echo $no++; ?></th>
									<td><?php echo $row->gender; ?></td>
									<td><?php echo $row->jumlah; 
                            $total=$total + $row->jumlah?></td>
									<td>
										<a class="btn btn-info"
											href="<?php echo site_url('Balita/select_by/'.$row->gender);?>">Edit</a>
									</td>
								</tr>

								<?php } ?>
								<tr>
									<td>Total</td>
									<td></td>
									<td>
										<?php echo $total?>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer');?>
