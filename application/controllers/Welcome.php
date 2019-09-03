<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct(){
		 parent::__construct();
		 $this->load->model('Welcome_model');
		 
	 }
	 
	public function index()
	{
		$data['testdata'] = $this->Welcome_model->test_data();
		$data['content'] =$this->load->view('admin_view/welcome_message',$data,true);
		$this->load->view('admin_view/main/main_view',$data);
	}
	
	public function table()
	{
		$data['testdata'] = $this->Welcome_model->test_data();
		$data['content'] =$this->load->view('admin_view/table_view',$data,true);
		$this->load->view('admin_view/main/main_view',$data);
	}
}
