<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">
<h3>DETAIL Wisata</h3>
<div class="col-6">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="bg-primary text-white">ID :</td>
                                            <td><?= $Wisata->id?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Nama :</td>
                                            <td><?= $Wisata->nama?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Deskripsi :</td>
                                            <td><?= $Wisata->deskripsi?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Rating :</td>
                                            <td><?= $Wisata->bintang?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Kontak :</td>
                                            <td><?=  $Wisata->kontak?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Alamat :</td>
                                            <td><?=  $Wisata->alamat?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Jenis Wisata :</td>
                                            <td><?= $Wisata->jenis_wisata_id?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
</div>
    
</body>
</html>