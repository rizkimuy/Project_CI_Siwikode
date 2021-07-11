<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EDIT Wisata</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <?php $this->load->view('template/header'); ?>
    <body>
    <div class="container-fluid">
           
                <?php echo form_open_multipart('Wisata/update'); ?>
                    
				<input type="hidden" name="id" id="id" value="<?php echo $Wisata->id; ?>"/>
				
                        <label for="">Nama Wisata</label>
                        <input type="text" name="nama" placeholder="masukan nama Wisata" value="<?= $Wisata->nama?>" class="form-control">

                        
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" placeholder="masukan nama Wisata" value="<?= $Wisata->deskripsi?>" class="form-control">
                            
                        <label for="">Rating</label>
                        <input type="number" name="bintang" placeholder="masukan nama Wisata" value="<?= $Wisata->bintang?>" class="form-control">

                        <label for="">Kontak</label>
                        <input type="text" name="kontak" placeholder="masukan nama Wisata" value="<?= $Wisata->kontak?>" class="form-control">

                        <label for="">Alamat</label>
                        <input type="text" name="Alamat" placeholder="masukan nama Wisata" value="<?= $Wisata->alamat?>" class="form-control">
                       
                        <label for="">Jenis Wisata</label>
                        <input type="text" name="jenis_kuliner_id" placeholder="masukan nama Wisata" value="<?= $Wisata->jenis_wisata_id?>" class="form-control">










				
                    
                        
                        
                        
           
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    
                        <?php echo form_close(); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
    </body>
</html>