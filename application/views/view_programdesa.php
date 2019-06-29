<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="content">
    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading"><h3>Data Program Desa</h3></div>
                <div class="panel-body">
                    <div class="responsive-table">
<!--                        <p><a class="btn btn-success" href="<?php echo site_url('Programdesaview/form'); ?>"><i class="fa fa-plus"></i> Tambah</a></p>              -->
                        <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>    
                                    <th scope="col">Nomor</th>
                                    <th   scope="col">Lokasi/Pendukuhan</th>
                                    <th scope="col">Pekerjaan</th>
                                    <th scope="col">Keterangan</th>

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
                                        <td><?php
                                            echo $row->keterangan
                                            //$total=$total + $row->jumlah
                                            ?></td>


                                    </tr>	
<?php } ?>

                            </tbody>

                        </table>
                    </div>
                </div>
<?php $this->load->view('footer'); ?>