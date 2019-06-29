<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Desa</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
<!--                        <p><a class="btn btn-success" href="<?php echo site_url('Penduduk/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              -->
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>   
                                    <th>JUMLAH PENDUDUK</th>
<!--                                    <th scope="col">Nomor</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Jumlah</th>
                                    <th></th>-->
<!--                                    <th scope="col">Aksi</th>-->


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
<!--                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Penduduk/delete/' . $row->gender); ?>"  
                                               onclick="return confirm('Apakah anda yakin akan menghapus?')"> Hapus </a>

                                            <a class="btn btn-info" href="<?php echo site_url('Penduduk/select_by/' . $row->gender); ?>">Edit</a>
                                        </td>-->
                                        </td>
                                    </tr>	
                                <?php } ?>
                                <tr> 
                                    <td>Total</td>
                                    <td></td>
                                    <td>
                                        <?php echo $total ?>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <th>KEPALA KELUARGA</th>
                                </tr>
                                <?php
                                $keluarga = $this->Keluarga_m->select_db();
                                $no = 1;
                                $total = 0;
                                foreach ($keluarga as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->status; ?></td>
                                        <td><?php echo $row->jumlah;
                                $total = $total + $row->jumlah
                                ?></td>
<!--                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Keluarga/delete/' . $row->id_keluarga); ?>"
                                               onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                            <a class="btn btn-info" href="<?php echo site_url('Keluarga/select_by/' . $row->id_keluarga); ?>">Edit</a>
                                        </td>-->
                                        <td></td>
                                    </tr>

                                    
                                <?php } ?>
                                <tr> 
                                    <td>Total</td>
                                    <td></td>
                                    <td>
                                        <?php echo $total ?>
                                    </td></tr>
                                
                                <tr>
                                    <th>BALITA</th>
                                </tr>
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
<!--                            <td>
                                
                                <a class="btn btn-danger" href="<?php echo site_url('Balita/delete/'.$row->gender);?>"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                <a class="btn btn-info" href="<?php echo site_url('Balita/select_by/'.$row->gender);?>">Edit</a>
                            </td>-->
                            <td></td>
                        </tr>
                        
                        <?php } ?>
                         <tr> 
                                    <td>Total</td>
                                    <td></td>
                                <td>
                                    <?php echo $total?>
                                </td></tr>
                         
                         <tr>
                             <th>LANSIA</th>
                         </tr>
                         <?php
                                $lansia = $this->Lansia_m->select_db();
                                $no = 1;
                                $total = 0;
                                foreach ($lansia as $row) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->gender; ?></td>
                                        <td><?php echo $row->jumlah;
                                $total = $total + $row->jumlah
                                ?></td>
<!--                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Lansia/delete/' . $row->gender); ?>"
                                               onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                                            <a class="btn btn-info" href="<?php echo site_url('Lansia/select_by/' . $row->gender); ?>">Edit</a>
                                        </td>-->
                                        <td></td>
                                    </tr>

                                <?php } ?>
                                <tr> 
                                    <td>Total</td>
                                    <td></td>
                                    <td>
                                        <?php echo $total ?>
                                    </td></tr>
                                 <tr>
                             <th>PENDIDIKAN</th>
                         </tr>
                         <?php
                                $pendidikan = $this->Pendidikan_m->select_db();
                                $no = 1;
                                foreach ($pendidikan as $row) {
                                    ?>  
                                    <tr> 
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->status; ?></td>
                                        <td><?php echo $row->jumlah; ?></td>
<!--                                        <td>
                                            <a class="btn btn-danger" href="<?php echo site_url('Pendidikan/delete/' . $row->id_pendidikan); ?>"
                                               onclick="return confirm('Apakah anda yakin akan menghapus?')"> 
                                                Hapus </a>

                                            <a class="btn btn-info" href="<?php
                                echo site_url('Pendidikan/select_by/' . $row->id_pendidikan);
                                    ?>">Edit</a>
                                        </td>-->
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