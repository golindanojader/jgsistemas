<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Inventory_Model extends CI_Model{

    public function __construct(){

        parent::__construct();
        $this->load->library('session');  
    }


	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
	public function createCategorie(){

        if ($this->input->post('CategoryId')=="") {    
        
                $this->db->set('category', $this->input->post('categorieName'));

                $dataModel =  $this->db->insert('category'); 

                return $dataModel;

    }else{

        // editar categoria
        $CategoryId = $this->input->post('CategoryId');

        $data = array('category' => $this->input->post('categorieName'));

		$this->db->where('id', $CategoryId );
		$this->db->update('category', $data);

        return "ok";
    }

    }

    // ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
    public function deleteCategory(){
    
        $data = array('status' => 0);
  
        $this->db->where('id', $this->input->post('id') );
		$this->db->update('category', $data);

        return "ok";

    }


    // ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
    public function viewCategory(){

        $this->db->select('id');
        $this->db->select('category');
        $this->db->from('category');
        $this->db->where('status', 1);
        $query = $this->db->get();
        // return $query->result_array();
        return $query->result_array();
    }



// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
    public function viewRate(){

        $this->db->select('bcv');
        $this->db->select('parallel');
        $this->db->select('other_1');
        $this->db->select('other_2');
        $this->db->select('other_3');
        $this->db->from('rate');
        // $this->db->where('status', 1);
        $query = $this->db->get();
        // return $query->result_array();
        return $query->row_array();
    }



    public function modifyRate(){
        $this->db->set('bcv',       $this->input->post('bcv'));
        $this->db->set('parallel',  $this->input->post('parallel'));
        $this->db->set('other_1',   $this->input->post('other_1'));
        $this->db->set('other_2',   $this->input->post('other_2'));
        $this->db->set('other_3',   $this->input->post('other_3'));
		 $this->db->where('id', 1 );
		$this->db->update('rate');

        return "ok";


    }

    // ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
    public function viewTax(){

        $this->db->select('tax_1');
        $this->db->select('tax_2');
        $this->db->select('tax_3');
        $this->db->select('tax_4');
        $this->db->select('tax_5');
        $this->db->from('tax');
        // $this->db->where('status', 1);
        $query = $this->db->get();
        // return $query->result_array();
        return $query->row_array();
    }


    
    public function modifyTax(){



        $this->db->set('tax_1',       $this->input->post('tax_1'));
        $this->db->set('tax_2',  $this->input->post('tax_2'));
        $this->db->set('tax_3',   $this->input->post('tax_3'));
        $this->db->set('tax_4',   $this->input->post('tax_4'));
        $this->db->set('tax_5',   $this->input->post('tax_5'));
		 $this->db->where('id', 1 );
		$this->db->update('tax');

        return "ok";


    }


    public function createNewProduct(){

        // validar que el producto no exista
        $this->db->select('code_1');
        $this->db->from('product');
        $this->db->where('code_1', $this->input->post('New_code_1'));
        $query = $this->db->get();
        $validation = $query->result_array();
        
        if($validation){

            return "false";

            }else{

                        
                    # code...
                    $this->db->set('code_1',      $this->input->post('New_code_1'));
                    $this->db->set('code_2',      $this->input->post('New_code_2'));
                    $this->db->set('description', $this->input->post('new_descripcion'));
                    $this->db->set('category_id', $this->input->post('new_idCategory'));
                    $this->db->set('brand',       $this->input->post('new_brand'));
                    $this->db->set('cost_price', $this->input->post('new_cost_price'));
                    $this->db->set('sale_price', $this->input->post('new_sale_price'));
                    $this->db->set('measure', $this->input->post('new_measure'));
                    $this->db->set('weight', $this->input->post('new_weight'));
                    $this->db->set('expiration', $this->input->post('new_expiration'));
                    $this->db->set('observation', $this->input->post('new_observation'));
                    $this->db->set('actual_stock', $this->input->post('new_actual_stock'));
                    $this->db->set('reserved_stock', $this->input->post('new_stock_reserved'));
                    // $this->db->set('', $this->input->post('')); proveedor
                    $dataModel = $this->db->insert('product'); 
                    return $dataModel;


    
            }


    }


    public function viewProductList(){


        $this->db->select('a.id, a.category_id, a.code_1,
         a.code_2,
          a.description,a.expiration,a.measure, a.cost_price, a.sale_price, a.brand, a.weight, a.observation, a.actual_stock, a.reserved_stock, b.category');
        $this->db->from('product a');
        $this->db->join('category b', 'A.category_id = B.id');
        $this->db->where('a.status', 1);
        $query = $this->db->get();
        return $query->result_array();


    }




    public function modifyProduct(){


        $this->db->set('code_1',         $this->input->post('code_1'));
        $this->db->set('code_2',         $this->input->post('code_2'));
        $this->db->set('description',    $this->input->post('description'));
        $this->db->set('category_id',    $this->input->post('category_id'));
        $this->db->set('brand',          $this->input->post('brand'));
        $this->db->set('cost_price',     $this->input->post('cost_price'));
        $this->db->set('sale_price',     $this->input->post('sale_price'));
        $this->db->set('measure',        $this->input->post('measure'));
        $this->db->set('weight',         $this->input->post('weight'));
        $this->db->set('expiration',     $this->input->post('expiration'));
        $this->db->set('observation',    $this->input->post('observation'));
        $this->db->set('actual_stock',   $this->input->post('actual_stock'));
        $this->db->set('reserved_stock', $this->input->post('reserved_stock'));
        $this->db->where('code_1',           $this->input->post('code_1'));

        $dataModel = $this->db->update('product');
        return $dataModel;

       
    }





    public function deleteProduct(){

        $this->db->set('status',  0);
		$this->db->where('id', $this->input->post('id') );
		$this->db->update('product');

        return "ok";



    }
    

}