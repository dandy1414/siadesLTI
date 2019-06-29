<?php $this->load->view('header');?>
<?php $this->load->view('sidebar');?>

<div id="content">
  <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <!--<div class="panel-heading"><a class="btn btn-info" href="<?php echo site_url('Balita'); ?>">Data Pendidikan</a></div>-->
        <div class="panel-body"></div>
        <div class="container">
            <div class="container">
            <?php
           
                foreach ($balita as $row){
              
            ?>
            <form method="post" action="<?php echo site_url('Balita/edit');?>">
                <input type ="hidden" name="gender" value="<?php echo $row->gender;?>">
                       <div class="form-group">
                           <label for="usr">Gender:</label>
                           <input type="text" class="form-control" 
                                  name="gender" value="<?php echo $row->gender;?>"> 
                        </div>
                       <div class="form-group">
                           <label for="comment">Jumlah:</label>
                           <input type="number" class="form-control" 
                                  name="jumlah" required="" value="<?php echo $row->jumlah;?>"> 
                        </div> 
                       <button class="btn btn-success" type="submit">Simpan</button>
            </form>
            <?php 
                }
            ?>
 
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <?php $this->load->view('footer');?> 