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
            
                        <?php echo form_open_multipart('Testimoni/save'); ?>
                        <label for="">id</label>
                        <input type="text" name="id" placeholder="masukan nama Testimoni" class="form-control">
                        <label for="">nama</label>
                        <input type="text" name="nama" placeholder="masukan nama Testimoni" class="form-control">
                        <label for="">Email</label>
                        <input type="text" name="email" placeholder="masukan email pasien" class="form-control">
                        <label for="">Wisata ID</label>
                        <input type="text" name="wisata_id" placeholder="masukan nama Testimoni" class="form-control">
                        <label for="">Profesi ID</label>
                        <input type="text" name="profesi_id" placeholder="masukan nama Testimoni" class="form-control">
                        <label for="">Rating</label>
                        <input type="text" name="rating" placeholder="masukan nama Testimoni" class="form-control">
                        <label for="">Komentar</label>
                        <input type="text" name="komentar" placeholder="masukan nama Testimoni" class="form-control">
                       

                       

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <?php echo form_close() ?>
                </div>
    
    </body>
</html>