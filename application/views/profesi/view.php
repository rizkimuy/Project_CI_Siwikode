<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesi</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">
<h3>DETAIL PROFESI</h3>
<div class="col-6">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="bg-primary text-white">ID :</td>
                                            <td><?= $profesi->id?></td>
                                        </tr>
                                        
                                        <tr>
                                            <td class="bg-primary text-white">Profesi :</td>
                                            <td><?= $profesi->nama?></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
</div>
    
</body>
</html>