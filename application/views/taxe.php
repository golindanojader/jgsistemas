

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

  <input type="hidden" class="url" value="<?=BASE_URL?>">
  
  <br>
    <section class="content">
      <div class="container-fluid">
     

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Impuestos</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">

              <div class="form-row">

                  <div class="form-group col-2"> 
                  <label for="">IVA:</label>
                  <input class="form-control form-control-sm bcv" type="text" name="" value="<?=$tax["tax_1"]?>" disabled>
                  </div>
                      
                  <div class="form-group col-2"> 
                  <label for="">Otro impuesto 2:</label>
                  <input class=" form-control form-control-sm parallel" type="text" name="" value="<?=$tax["tax_2"]?>" disabled> 
                  </div>

                  <div class="form-group col-2"> 
                  <label for="">Otro impuesto 3:</label>
                  <input class="form-control form-control-sm other_1" type="text" name="" value="<?=$tax["tax_3"]?>" disabled>
                  </div>

                  <div class="form-group col-2"> 
                  <label for="">Otro impuesto 4:</label>
                  <input class="form-control form-control-sm other_2" type="text" name="" value="<?=$tax["tax_4"]?>" disabled>
                  </div>


                  <div class="form-group col-2"> 
                  <label for="">Otro impuesto 5:</label>
                  <input class="form-control form-control-sm other_2" type="text" name="" value="<?=$tax["tax_5"]?>" disabled>
                  </div>


                  </div>

              <form id="modifyTax">
              
                <div class="form-group col-6"> 
                <label for="">IVA</label>
                <input   type="text" class="form-control  form-control-sm"  id=""  name="tax_1"  placeholder>
                </div>

                <div class="form-group col-6"> 
                <label for="">Otro impuesto 1</label>
                <input   type="text" class="form-control  form-control-sm"  id=""  name="tax_2"  placeholder >
                </div>

          
                <div class="form-group col-6"> 
                <label for="">Otro impuesto 2</label>
                <input  type="text" class="form-control form-control-sm "  id=""   name="tax_3" placeholder="" >
                </div>

               
                <div class="form-group col-6"> 
                <label for="">Otro impuesto 3</label>
                <input type="text" class="form-control form-control-sm"    id=""   name="tax_4" placeholder=""> 
                </div>
                

                <div class="form-group  col-6"> 
                <label for="">Otro impuesto 4</label>
                <input type="text" class="form-control form-control-sm"    id=""   name="tax_5" placeholder=""> 
                </div>
               

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


<?php


  
$this->load->view('templates/scripts');

?>


