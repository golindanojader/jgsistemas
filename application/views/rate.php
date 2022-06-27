

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

  <input type="hiden" class="url" value="<?=BASE_URL?>">
  <div class="content-wrapper">

  
  <br>
    <section class="content">
      <div class="container-fluid">
     

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tasas de cambio</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

                <div class="form-row">

                <div class="form-group col-2"> 
                <label for="">BCV:</label>
                <input class="form-control form-control-sm bcv" type="text" name="" value="<?=$rate["bcv"]?>">
                </div>
                    
                <div class="form-group col-2"> 
                <label for="">Paralelo:</label>
                <input class=" form-control form-control-sm parallel" type="text" name="" value="<?=$rate["parallel"]?>">
                </div>

                <div class="form-group col-2"> 
                <label for="">Otra tasa 1:</label>
                <input class="form-control form-control-sm other_1" type="text" name="" value="<?=$rate["other_1"]?>">
                </div>

                <div class="form-group col-2"> 
                <label for="">Otra tasa 2:</label>
                <input class="form-control form-control-sm other_2" type="text" name="" value="<?=$rate["other_2"]?>">
                </div>


                <div class="form-group col-2"> 
                <label for="">Otra tasa 3:</label>
                <input class="form-control form-control-sm other_2" type="text" name="" value="<?=$rate["other_3"]?>">
                </div>


                </div>

                <form id="modifyRate">
                  
             
         
                <div class="form-group col-6"> 
                <label for="">Banco Central de Venezuela (BCV)</label>
                <input   type="text" class="form-control  form-control-sm"  id="bcv"  name="bcv"  placeholder>
                </div>

                <div class="form-group col-6"> 
                <label for="">Paralelo</label>
                <input   type="text" class="form-control  form-control-sm"  id="parallel"  name="parallel"  placeholder >
                </div>

            

      
                <div class="form-group col-6"> 
                <label for="">Otra tasa de cambio 1</label>
                <input  type="text" class="form-control form-control-sm "  id="other_1"   name="other_1" placeholder="" >
                </div>

               
                <div class="form-group col-6"> 
                <label for="">Otra tasa de cambio 2</label>
                <input type="text" class="form-control form-control-sm"    id="other_2"   name="other_2" placeholder=""> 
                </div>
                

                <div class="form-group  col-6"> 
                <label for="">Otra tasa de cambio 3</label>
                <input type="text" class="form-control form-control-sm"    id="other_3"   name="other_3" placeholder=""> 
                </div>
               

              

                 <label id="messageRate" for=""></label>

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


<?php


  
$this->load->view('templates/scripts');

?>


