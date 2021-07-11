<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php $this->load->view('template/header'); ?>
    <body>
    <div class="container-fluid">
                <?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
            
                        <?php echo form_open_multipart('Wisata/save'); ?>
                        <label for="">id</label>
                        <input type="text" name="id" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Nama Wisata</label>
                        <input type="text" name="nama" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Jenis Wisata</label>
                        <input type="text" name="jenis_wisata_id" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Rating</label>
                        <input type="number" name="bintang" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Kontak</label>
                        <input type="text" name="kontak" placeholder="masukan nama Wisata" class="form-control">

                        <label for="">Alamat</label>
                        <input type="text" name="alamat" placeholder="masukan nama Wisata" class="form-control">
                       
                        <label for="">Jenis Kuliner</label>
                        <input type="text" name="jenis_kuliner_id" placeholder="masukan email pasien" class="form-control">                       
                       


                       
                       
                       
                       
                        
                        
                       

                       

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <?php echo form_close() ?>
                </div>
    
    </body>
</html>