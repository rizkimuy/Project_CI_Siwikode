<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">

<a href="<?= base_url()?>index.php/profesi/add" class="btn btn-primary">add</a>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Data Profesi</h1>

<table class="table table-dark">
<thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                                foreach($profesi->result() as $profesi){
                                    echo '
                                    <tr>
                                        <td>'.$profesi->id.'</td>
                                        <td>'.$profesi->nama.'</td>
                                      
                                        
                                        
                                        <td>
                                        <a href="'.base_url().'index.php/profesi/view/'.$profesi->id.'">View</a>
                                        <a href="'.base_url().'index.php/profesi/edit/'.$profesi->id.'">Edit</a>
                                        <a  onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/profesi/delete/'.$profesi->id.'">Delete</a>
                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container" style="text-align: center;">
        <div class="copyright">
          &copy; Developed By <strong><span>MTMH GANG</span></strong>. 
          All Rights Reserved 2021
        </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


</div>
</div>
</div>
</div>


</body>
</html>
