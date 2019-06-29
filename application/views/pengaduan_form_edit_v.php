<!DOCTYPE html>
<html>       
    <head>
        <meta charset="UTF-8">   
        <title>Input Galeri</title>
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    </head>    
    
       <body>
           <div class="container">
               <?php
               foreach ($pengaduan as $row) {
?> 
               <form method="post" action="<?php echo site_url('Pengaduan/edit');?>">
                  <input type="hidden" name="id" value="<?php echo $row->id_pengaduan; ?>">
                  
        
                   <div 
                       class="form-group">
                       <label for="comment">Keluhan:</label>
                       <textarea class="form-control" rows="5" name="in_keluhan"><?php 
                       echo $row->keluhan; ?>
                       </textarea>
                   </div>
                  
                  <button class="btn btn-success" type="submit">Simpan</button>
                  
                    </form>
                        <?php } ?>
           </div>
           
              </body>
</html>
