<section>
	<div class="container pt-5">
		<br>
		<br>
		<br>
		<h3 align="center">Data Desa</h3>
		<br>
		<br>
    <h5>Jumlah</h5>
		<table class="table table-striped">
			<tbody>
				<?php
    $program = $this->Penduduk_m->select_db(); 
    foreach($program as $row) : ?>
				<tr>
					<td><?php echo $row->gender; ?></td>
					<td><?php echo $row->jumlah; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h5>Kepala Keluarga</h5>
		<table class="table table-striped">
			<tbody>
				<?php
    $program = $this->Keluarga_m->select_db(); 
    foreach($program as $row) : ?>
				<tr>
					<td><?php echo $row->status; ?></td>
					<td><?php echo $row->jumlah; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h5>Balita</h5>
		<table class="table table-striped">
			<tbody>
				<?php
    $program = $this->Balita_m->select_db(); 
    foreach($program as $row) : ?>
				<tr>
					<td><?php echo $row->gender; ?></td>
					<td><?php echo $row->jumlah; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h5>Lansia</h5>
		<table class="table table-striped">
			<tbody>
				<?php
    $program = $this->Lansia_m->select_db(); 
    foreach($program as $row) : ?>
				<tr>
					<td><?php echo $row->gender; ?></td>
					<td><?php echo $row->jumlah; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<h5>Pendidikan</h5>
		<table class="table table-striped">
			<tbody>
				<?php
    $program = $this->Pendidikan_m->select_db(); 
    foreach($program as $row) : ?>
				<tr>
					<td><?php echo $row->status; ?></td>
					<td><?php echo $row->jumlah; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</section>
