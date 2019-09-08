<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	 
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



		
	public function categorybycpoduct()
	{
		$product_cat = $this->input->post("product_cat");
		//$showroom_id = $this->session->userdata("showroom_id");
		
		$data = $this->db->query("SELECT `warehouse_stok`.*, `category`.categoryname as cate_name FROM `warehouse_stok` LEFT JOIN  `category` ON `category`.id=`warehouse_stok`.product_cat WHERE `warehouse_stok`.product_cat='$product_cat' AND `warehouse_stok`.flag=1")->result();
		
		echo json_encode($data);
		
	}


	public function product_rate_by_id()
	{
		$product_id = $this->input->post("product_id");
		//$showroom_id = $this->session->userdata("showroom_id");
		
		$data = $this->db->query("SELECT `warehouse_stok`.sell_rate FROM `warehouse_stok`  WHERE `warehouse_stok`.productid='$product_id'")->result();
		
		echo json_encode($data);
		
	}		
	


	
	
	
}