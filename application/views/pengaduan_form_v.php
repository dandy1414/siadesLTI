<!DOCTYPE html>
<html>       
    <head>
        <meta charset="UTF-8">   
        <title>InputPengaduan</title>
        <link rel="stylesheet" 
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>       
    </head>

    <body >
        <div class="container">
            <p><a class="btn btn-info" href="<?php echo site_url('Pengaduan'); ?>">Data Pengaduan</a></p>
            <form method="post" action="<?php echo site_url('Pengaduan/insert');?>">
                <div class="form-group"> 
                    <label for="usr">Username:</label>
                    <input type="text" class="form-control" name="in_username">
                </div>   

                <div class="form-group">
                    <label for="comment">Keluhan:</label>
                    <textarea class="form-control" rows="5" name="in_keluhan"></textarea>
                </div>
                
                <button class="btn btn  -success" type="submit">Simpan</button>
            </form>
        </div>       
    </body>
</html>


