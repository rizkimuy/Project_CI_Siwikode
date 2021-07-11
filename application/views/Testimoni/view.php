<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">
<h3>DETAIL Testimoni</h3>
<div class="col-6">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="bg-primary text-white">ID :</td>
                                            <td><?= $Testimoni->id?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Nama :</td>
                                            <td><?= $Testimoni->nama?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Email :</td>
                                            <td><?= $Testimoni->email?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Wisata :</td>
                                            <td><?= $Testimoni->wisata_id?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Profesi :</td>
                                            <td><?= $Testimoni->profesi_id?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Rating :</td>
                                            <td><?= $Testimoni->rating?></td>
                                        </tr>
                                        <tr>
                                            <td class="bg-primary text-white">Komentar :</td>
                                            <td><?= $Testimoni->komentar?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
</div>
    
</body>
</html>