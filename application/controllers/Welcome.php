<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 
	 function __construct(){
		 parent::__construct();
		 $this->load->model('Welcome_model');
		 
	 }
	 
	 
	public function index()
	{
		$data['testdata'] = $this->Welcome_model->test_data();
		$data['content'] =$this->load->view('admin_view/welcome_message',$data,true);
		//$data['header'] =$this->load->view('admin_view/main/header_view',$data,true);
		//$data['navber'] =$this->load->view('admin_view/main/navber_view',$data,true);
		$this->load->view('admin_view/main/main_view',$data);
	}
	
	
	
	public function table()
	{
		$data['testdata'] = $this->Welcome_model->test_data();
		$data['content'] =$this->load->view('admin_view/table_view',$data,true);
		$this->load->view('admin_view/main/main_view',$data);
	}

	
	
}
