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
            
                        <?php echo form_open_multipart('profesi/save'); ?>
                        <label for="">id</label>
                        <input type="text" name="nama" placeholder="masukan nama profesi" class="form-control">
                        <label for="">Profesi</label>
                        <input type="text" name="nama" placeholder="masukan nama profesi" class="form-control">
                       

                       

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <?php echo form_close() ?>
                </div>
    
    </body>
</html>