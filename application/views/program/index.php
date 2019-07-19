<section>
    <div class="container pt-5 mb-5">
    <br>
    <br>
    <br>
    <h2 align="center">Program Desa</h2>           
  <table class="table table-striped mt-5">
    <thead>
      <tr>
        <th>No</th>
        <th>Lokasi/Padukuhan</th>
        <th>Pekerjaan</th>
        <th>Keterangan</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $program = $this->Programdesa_m->select_db();
    $no = 1; 
 foreach($program as $row) : ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->lokasi; ?></td>
        <td><?php echo $row->pekerjaan; ?></td>
        <td><?php echo $row->keterangan; ?></td>
      </tr>
<?php endforeach; ?>
    </tbody>
  </table>
</div>
    </div>
</section>