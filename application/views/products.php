

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
    
  <input class="url" type="hidden" name="" value="<?=BASE_URL?>">
  
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
              <a class="btn btn-secondary btn-lg active btn-sm" href="<?=BASE_URL().'createProduct'?>"><i class="fa fa-plus"></i></a> 
             <div class="form-inline mb-2 mt-2">
         
              
              
                <table id="products" class="table table-bordered table-striped">
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
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div class="modal-body">
                               <form class ="modifyProduct" method="POST">
                               <div class ="container">
                                <div class="form-row">
                                      <div class="form-group">
                                      <label for="recipient-name" class="col-form-label">Código 1:</label>
                                      <input type="text" class="form form-control form-control-sm code_1"   style="width:100%" value='.$item["code_1"].' id="" disabled>

                                      <input type="hidden" class="form form-control form-control-sm code_1"   style="width:250%" value='.$item["code_1"].' id="" name="code_1" >
                                    </div>
  
                                    <div class="form-group ml-2">
                                    <label for="recipient-name" class="col-form-label">Código 2:</label>
                                    <input type="text" class="form form-control form-control-sm" style="width:250%"  value="'.$item["code_2"].'" id="" name="code_2">
                                  </div>
                                </div>

                                <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Descripción:</label>
                                <input type="text" class="form form-control form-control-sm" style="width:250%"  value="'.$item["description"].'" id="" name="description">
                              </div>

                              <div class="form-row">
                              <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Categoría:</label>
                              <select class="form form-control form-control-sm" name="category_id" style="width:100%">
                                <option value="'.$item["category_id"].'">'.$item["category"].'</option>';

                                foreach ($category as $key => $catItem) {

                                  echo '<option value="'.$catItem["id"].'">'.$catItem["category"].'</option>';

                                }

                        echo 
                        
                        '
                        </select>
                        </div>
                          
                            <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Marca:</label>
                            <input type="text" class="form form-control form-control-sm ml-2" style="width:250%"  value="'.$item["brand"].'" id="" name="brand">
                          </div>
                          </div>
                    
                        <div class="form-row">
                              <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Precio Compra:</label>
                              <input type="text" class="form form-control form-control-sm" style="width:100%" value="'.$item["cost_price"].'" id="" name="cost_price" >
                            </div>

                            <div class="form-group ">
                            <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                            <input type="text" class="form form-control form-control-sm ml-2" style="width:100%" value="'.$item["sale_price"].'" id="" name="sale_price">
                          </div>
                        </div>


                          
                        <div class="form-row">
                          <div class="form-group">
                          <label for="recipient-name" class="col-form-label">Und medida:</label>
                          <input type="text" class="form form-control form-control-sm" style="width:100%" value="'.$item["measure"].'" id="" name="measure">
                        </div>
            

                        
                        <div class="form-group mr-5">
                        <label for="recipient-name" class="col-form-label">Peso:</label>
                        <input type="text" class="form form-control form-control-sm ml-2" style="width:100%" value="'.$item["weight"].'" id="" name="weight" >
                      </div>
                      </div>
                


                  <div class="form-row">
                      <div class="form-group ">
                      <label for="recipient-name" class="col-form-label">Stock actual:</label>
                      <input type="text" class="form form-control form-control-sm" style="width:100%" value="'.$item["actual_stock"].'" id="" name="actual_stock">
                      </div>
                  

                    <div class="form-group ml-2">
                    <label for="recipient-name" class="col-form-label">Stock de reserva:</label>
                    <input type="text" class="form form-control form-control-sm" style="width:100%" value="'.$item["reserved_stock"].'" id="" name="reserved_stock" >
                    </div>
                  </div>

                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Fecha de vencimiento:</label>
                  <input type="text" class="form form-control form-control-sm" style="width:90%" value="'.$item["expiration"].'" id="" name="expiration" >
                  </div>

            <div class="form-group  mt-2">
              <label for="" class="">Observación:</label>
              <textarea  class="form form-control form-control-sm"  id="" cols="100" rows="2" name="observation" >'.$item["observation"].'</textarea>
            </div>
        

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <input type="button" class="btn btn-danger deleteProduct" productId ="'.$item["id"].'" value ="Borrar producto">
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                            </form>
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


