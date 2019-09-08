<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_controller extends CI_Controller {
	 
	 function __construct(){
		 parent::__construct();
		 $this->load->model('model_inventory');
		 $this->load->model('model_common');
		 
	 }
	 
	 
	public function index()
	{
		$data['testdata'] = $this->Welcome_model->test_data();
		$data['content'] =$this->load->view('admin_view/welcome_message',$data,true);
		$this->load->view('admin_view/main/main_view',$data);
	}



		
		public function order(){
		//print_r($this->input->post());

			//echo $this->db->last_query();


            // false case
        	//$company = $this->model_company->getCompanyData(1);
        	//$this->data['company_data'] = $company;
        	//$this->data['is_vat_enabled'] = ($company['vat_charge_value'] > 0) ? true : false;
        	//$this->data['is_service_enabled'] = ($company['service_charge_value'] > 0) ? true : false;

        	$data['products'] = $this->model_inventory->getActiveProductData(); 
        	$data['allcategory'] = $this->model_inventory->allcategory(); 
			//$data['arr'] =  $this->model_inventory->allitem();			
			//echo $this->db->last_query();			

			$data['content'] 		= $this->load->view('admin_view/inventory/order_view', $data, true);
			$this->load->view('admin_view/main/main_view',$data);

		}
		
	
	


	
	
	
}