<!DOCTYPE html>
<html>       
    <head>
        <meta charset="UTF-8">   
        <title></title>
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    </head>
    
    <body>
       <div class="container">
           <p><a class="btn btn-success" href="<?php echo site_url('Pengaduan/form'); ?>">Tambah</a></p>
           
           <div class="table-responsive"><table class="table table-striped">
                   
              <thead>
                  <tr>    
                      <th scope="col">Nomor</th>
                      <th   scope="col">Username</th>
                      <th scope="col">Keluhan</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col"></th>
                  </tr>
              </thead>   
              
             <tbody>
                 <?php
                 $pengaduan = $this->Pengaduan_m->select_db();
                 $no = 1;foreach ($pengaduan as $row) {
                ?>   
                 
                 <tr>
                     <th scope="row"><?php echo $no++; ?></th>
                     <td><?php echo $row->username; ?></td>
                     <td><?php echo $row->keluhan; ?></td>
                     <td><?php echo $row->tanggal; ?></td>
                     <td>
                         <a class="btn btn-danger" href="<?php echo 
                         site_url('Pengaduan/delete/'.$row->id_pengaduan); ?>"                                       
                         onclick="return confirm('Apakah anda yakin akan menghapus?')"> 
                             Hapus </a>  
                         
                         
                         <a class="btn btn-info" href="<?php 
                         echo site_url('Pengaduan/select_by/'.$row->id_pengaduan); ?>">Edit</a>
                     </td>
                 </tr>
               <?php } ?>
             </tbody>  
             </table>
           </div>
       </div>       
    </body>
</html>



