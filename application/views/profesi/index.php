<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trip My Hobby!</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">

<a href="<?= base_url()?>index.php/profesi/add" class="btn btn-success">add</a>


<!-- Page Heading -->
<h3 class="h3 mb-4 text-gray-800">My Trip My Hobby!</h3>
<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Data Profesi</h1>

<table class="table table-secondary">
<thead>
                            <tr>
                                <th>ID</th>
                                <th>Profesi</th>
                                
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
<hr style="background-color: black; width: 1550px; height: 10px;" >
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
