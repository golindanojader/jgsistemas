

 <?php

defined('BASEPATH') OR exit('No direct script access allowed');
  
$this->load->view('templates/head');

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->

  <?php $this->load->view('templates/navBar');?>
  <!-- /.navbar -->

  <?php $this->load->view('templates/leftBar');?>

  <div class="content-wrapper">

  
  <br>
    <section class="content">
      <div class="container-fluid">
        <div class="row">

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nuevo Producto ó Servicio</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
             <div class="form-inline mb-2">
             <a class="btn btn-secondary btn-lg active btn-sm" href="<?=BASE_URL().'createProduct'?>"><i class="fa fa-plus"></i></a> 
                
 
              
                <table id="example1" class="table table-bordered table-striped mt-2">
                  <thead>
                  <tr>
                    <th>Código</th>
                    <th>Descripcón</th>
                    <th>Precio venta</th>
                    <th>Stock Actual</th>
                    <th>Stock reserva</th>
                    <th>Categoría</th>
                    <th>Editar</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php 
                  
                  foreach ($products as $row => $item) {

                    $row = $row + 1;

                    echo'
                    <tr>
                    <td>'.$item["code_1"].'</td>
                    <td>'.$item["description"].'</td>
                    <td>'.$item["sale_price"].'</td>
                    <td>'.$item["actual_stock"].'</td>
                    <td>'.$item["reserved_stock"].'</td>
                    <td>'.$item["category"].'</td>
                    <td><a href="#edit'.$row.'" data-toggle="modal"><button class="btn btni-info btn-sm"><i class="fa fa-edit"></i></button></a>
                    
                    
                    
                    
                  
                    <div class="modal fade" id="edit'.$row.'" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>

                          <div class="modal-body bg-danger">

                            <form>

                              <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form form-control" id="recipient-name">
                              </div>

                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form form-control" style="width:500%" id="message-text"></textarea>
                              </div>

                            </form>
                            
                            

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>



                    </td>
                    </tr>
                    
                    
                    
                    ';
                  
                  }
                  ?>
       
                 
            
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            </div>
            </section>
            </div>





            
  <?php


      
$this->load->view('templates/footer');

?>

<!-- footer!!!!!!!!!!!!!!!!!!! -->



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php


  
$this->load->view('templates/scripts');

?>


