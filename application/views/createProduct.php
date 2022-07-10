

 <?php

defined('BASEPATH') OR exit('No direct script access allowed');
  
$this->load->view('templates/head');

?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<input class="url" type="hidden" name="" value="<?=BASE_URL?>">


  <!-- Navbar -->

  <?php $this->load->view('templates/navBar');?>
  <!-- /.navbar -->

  <?php $this->load->view('templates/leftBar');?>

  <div class="content-wrapper">

  
  <br>
    <section class="content">
      <div class="container-fluid">
     

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nuevo Producto ó Servicio</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

              <div class="form-inline mb-2">

                       
             <button id= "" data-toggle="modal" data-target="#category" class="btn btn-secondary btn-lg active btn-sm ml-1" ><i class="fa fa-list"></i></button> 



            <!-- modal marca -->
             <!-- <button id= "" data-toggle="modal" data-target="#brand" class="btn btn-secondary btn-lg active btn-sm ml-1" ><i class="fa fa-award"></i></button>  -->
            
            
            <!-- modal proveedor -->
            <button id= "" data-toggle="modal" data-target="#supplier" class="btn btn-secondary btn-lg active btn-sm ml-1 d-none" ><i class="fa fa-address-book"></i></button> 
            


             </div>
              
<form id="createNewProduct">
  
             <div class="form-row">
                <div class="form-group col-6"> 
                <label for="">Código 1</label>
                <input   type="text" class="form-control  form-control-sm"  id="codigo_1"  name="New_code_1"  placeholder="#########" required>
                </div>

                <div class="form-group col-6"> 
                <label for="">Código 2</label>
                <input   type="text" class="form-control  form-control-sm"  id="codigo_2"  name="New_code_2"  placeholder="#########" >
                </div>

                </div>

      
                <div class="form-group"> 
                <label for="">Descripción</label>
                <input  type="text" class="form-control form-control-sm "  id="new_descripcion"   name="new_descripcion" placeholder="" >
                </div>

                <div class="form-row">
                <div class="form-group col-6"> 
                <label for="">Categoría</label>
                <select class="form-control form-control-sm" name="new_idCategory" id="" required>
                    <?php 
                  
                        foreach ($categories as $key => $row) {

                        echo '<option name="new_idCategory"  value="'.$row["id"].'">'.$row["category"].'</option> ';
                        
                        }
                    ?>

                  </select>
        
                </div>
                

                <div class="form-group  col-6"> 
                <label for="">Marca</label>
                <input type="text" class="form-control form-control-sm"    id="marca"   name="new_brand" placeholder=""> 
                </div>
                </div>

                
                <div class="form-row">
                <div class="form-group col-2"> 
                <label for="">Precio Costo</label>
                <input type="text" class="form-control form-control-sm"    id="precio_costo"        name="new_cost_price" placeholder="" required>
                </div>


                <div class="form-group col-2"> 
                <label for="">Precio Venta</label>
                <input  type="text" class="form-control form-control-sm"    id="precio_venta"        name="new_sale_price" placeholder="" required>
                </div>
              


                <!-- <div class="form-group col-2"> 
                <label for="">Margen</label>
                <input  type="text" class="form-control form-control-sm margin"    id=""        name="" placeholder="">
                </div> -->
              

                </div>


                <div class="form-row">

                <div class="form-group col-6"> 
                <label for="">Unidad de medida</label>

                <select   id="und_medida" name="new_measure" class="form-control form-control-sm ">

                  <option  id="und_medida" name="new_measure" value="Und">Und</option>
                  <option id="und_medida" name="new_measure"  value="Paquete">Paquete</option>
                  <option  id="und_medida" name="new_measure" value="Kg">Kg</option>
                  <option  id="und_medida" name="new_measure" value="Lt">Lt</option>
                  <option id="und_medida" name="new_measure"  value="Bulto">Bulto</option>
                  <option id="und_medida" name="new_measure"  value="Caja">Caja</option>
                  <option id="und_medida" name="new_measure"  value="Pieza">Pieza</option>
                  
                </select>
               
                </div>

                <div class="form-group col-6"> 
                <label for="">Peso</label>
                <input type="text" class="form-control form-control-sm"  id="peso"    name="new_weight" placeholder="">
                </div>


                </div>

                <div class="form-row">
                <div class="form-group col-6"> 
                <label for="">Stock Actual</label>
                <input type="text" class="form-control form-control-sm"    id="existencia"    name="new_actual_stock" placeholder="">
                </div>

                <div class="form-group col-6"> 
                <label for="">Stock Reservado</label>
                <input type="text" class="form-control form-control-sm"    id="stock_reservado"    name="new_stock_reserved" placeholder="">
                </div>
                </div>

                
                <div class="form-group"> 
                <label for="">Fecha Venc.</label>
                <input type="date"  class="form-control form-control-sm"   id="fecha_venc"    name="new_expiration" placeholder="">
                </div>
              

                <div class="form-group"> 
                <label for="">Observaciones</label>
                <textarea  class="form-control" name="new_observation" id="observacion" cols="30" rows="2"></textarea>
                </div>

      <!-- <div class="form-group"> 
      <label for="">Imágen</label>

      <input type="file" value="">
      </div> -->

      
      
      <!-- <input style="width: 70px;" type="number" class="form-control form-control-sm mr-2"  id="iva"           name="iva" placeholder="% Iva" value="16"> -->

                    <label id="message" for=""></label>

             <input type="submit" class="btn btn-success  form-control-sm mr-2 btn-sm" value="Guardar">
             </form>
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



            <!-- modal categorias -->
            <div class="modal fade" id="category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Categoría de productos ó servicios</h5>
                    <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               

            <form id="createCategorie">

                <div class="modal-body">
                  
             

      
                      <div class="form-group">

                      <label for="" class="col-form-label">Categoría:</label>
                      <input class="form form-control form-control-sm" type="hidden"   id="CategoryId"    name="CategoryId"     placeholder="" >
                      <input class="form form-control form-control-sm" type="text"   id="categorieName" name="categorieName"  placeholder="" required> 
                     

                      </div>
        


                <div id="categoryMessage"></div> 
                 
                <button type="button" class="btn btn-secondary btn-sm clearCategory" >Cancelar</button>
                <button type="submit" class="btn btn-primary btn-sm">Guardar</button>

                </form>

                <hr>

                <div id="categoriesList">
                <table id="categoryTd" class="table table-bordered  mt-2">
                  <thead>
                  <tr>
                  <th>ID</th>
                  <th>Mis categorías</th>
                  <th>Editar</th>
                  <th>Excluir</th>
                  
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                  foreach ($categories as $key => $row) {
                   echo '  
                  <tr>
                  <td><input type="text" class="form-control form-control-sm"  value="'.$row["id"].'" disabled></td>
                  <td><input type="text" class="form-control form-control-sm category"  value="'.$row["category"].'" disabled></td>
                  
                  <td><button type="button" class="btn btn-sm btn-primary btn-block categorySelected" idCategory="'.$row["id"].'" category="'.$row["category"].'"><i class="fa fa-edit"></i></button></td>
                  
                  
                  <td><button type="button" class="btn btn-sm btn-danger  btn-block deleteCategorie" idCategory="'.$row["id"].'" category="'.$row["category"].'"><i class="fa fa-trash"></i></button></td>
                    
                    </tr>';
                  }
                  ?>

                  </tfoot>
                </table>
                </div>
                
              </div> 

                <div class="modal-footer">
                    
                </div>

          

                
                </div>
                
                </div>
            </div>
            </div>

            <!-- Modal de marca -->
            <!-- <div class="modal fade" id="brand" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva marca</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

              
                <div class="form-group">
                    <label for="" class="col-form-label">Marca:</label>
                    <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>

                
                </div>

           
                
                </div>
            </div>
            </div> -->








            <!-- Modal de proveedores -->
            <div class="modal fade " id="supplier" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo proveedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <form>
          <div class="form-group">
            <label for="" class="col-form-label">Código:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
          </div>

          <div class="form-group">
            <label for="" class="col-form-label">Nombre:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
          </div>
  

          <div class="form-group">
            <label for="" class="col-form-label">Dirección:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
          </div>
  

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Teléfono 1:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
                    
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Teléfono 2:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
                    
          </div>

          
          <div class="form-group">
            <label for="" class="col-form-label">Correo:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
                    
          </div>


          <div class="form-group">
            <label for="" class="col-form-label">Dirección:</label>
            <input class="form form-control form-sm" type="text" name="" value="" placeholder="">
                    
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descripción:</label>
            <textarea class="form-control" rows="2" cols="2"></textarea>
                    
          </div>
  
  


        </form>
                   
   
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
                </div>
            </div>
            </div>


<?php


  
$this->load->view('templates/scripts');

?>

