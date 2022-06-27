<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Inventory extends CI_Controller {

	public function __construct(){

        parent::__construct();
        $this->load->model('Inventory_Model');
        $this->load->helper('url');
        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('principal');
	}


	public function products(){
		$productList["products"] = $this->Inventory_Model->viewProductList();
	
		$this->load->view('products', $productList);
	}


	public function createproduct(){

		// categorie from model
		$dataFromModel["categories"] = $this->Inventory_Model->viewCategory();

		$this->load->view('createproduct',$dataFromModel);
	}


	public function rate(){

		// rate from model
		$dataFromModel["rate"] = $this->Inventory_Model->viewRate();
		$this->load->view('rate',$dataFromModel);
	}

	public function taxe(){
	   // tax from model
		$dataFromModel["tax"] = $this->Inventory_Model->viewTax();
		$this->load->view('taxe', $dataFromModel);
	}



	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************
	public function createCategory(){
		
		
        if (!$this->input->is_ajax_request()) { redirect(BASE_URL());}


        $dataFromModel = $this->Inventory_Model->createCategorie();  

        echo json_encode($dataFromModel);
	}




	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************

	public function deleteCategory(){
		
		
        if (!$this->input->is_ajax_request()) { redirect(BASE_URL());}


        $dataFromModel = $this->Inventory_Model->deleteCategory();  

        echo json_encode($dataFromModel);
	}



	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************

	public function modifyRate(){

		if (!$this->input->is_ajax_request()) { redirect(BASE_URL());}

        $dataFromModel = $this->Inventory_Model->modifyRate();  

        echo json_encode($dataFromModel);


	}


	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************

	public function modifyTax(){

		if (!$this->input->is_ajax_request()) { redirect(BASE_URL());}

        $dataFromModel = $this->Inventory_Model->modifyTax();  

        echo json_encode($dataFromModel);


	}


	// ***********************************************************************
	// ***********************************************************************
	// ***********************************************************************

	public function createNewProduct(){

		if (!$this->input->is_ajax_request()) { redirect(BASE_URL());}

        $dataFromModel = $this->Inventory_Model->createNewProduct();  

        echo json_encode($dataFromModel);


	}


	

	


	
}
