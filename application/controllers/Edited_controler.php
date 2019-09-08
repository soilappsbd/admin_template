<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Edited_controler extends CI_Controller {
	 
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



		
	public function edititem(){
		
		if($this->input->post()){
		//print_r($this->input->post());
			$id = $this->input->post("id");
			$edititem = $this->input->post("edititem");
			$active = $this->input->post("active");

			
			$data = array(
						'itemname'=>$edititem,
						'active'=>$this->input->post("active"),
						'flag'=>1
					);
					
			//$action = $this->model_common->updatedata("item",$data);
			$this->db->where('id', $id); 
			$update = $this->db->update('item', $data);
			//echo $this->db->last_query();		
			if($update){
			  $this->model_common->successFlash("Item update Successfully" , "additem");
			} 
		
			}else{
			echo $this->db->last_query();
		
			$data['arr'] =  $this->model_inventory->allitem();
			$data['content'] 		= $this->load->view('admin_view/inventory/edit_item', $data, true);
			$this->load->view('admin_view/main/main_view',$data);


		}
	}
	
	


	
	
	
}