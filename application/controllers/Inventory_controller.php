<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_controller extends CI_Controller {
	 
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



	
	public function additem(){
		
		if($this->input->post()){
		//print_r($this->input->post());
			$itemname = $this->input->post("itemname");
			$active = $this->input->post("active");

		
			$data = array(
						'itemname'=>$this->input->post("itemname"),
						'active'=>$this->input->post("active"),
						'flag'=>1
					);
					
			$action = $this->model_common->insertData("item",$data);
			//echo $this->db->last_query();
			
			if($action){
			   $this->model_common->successFlash("Item Added Successfully" , "additem");
			} 
		
		}else{
			$data['arr'] =  $this->model_inventory->allitem();
			$data['content'] 		= $this->load->view('admin_view/inventory/item_view', $data, true);
			$this->load->view('admin_view/main/main_view',$data);
			
		}
	}
	

	
	
	
	
	public function category(){
		
		if($this->input->post()){
		//print_r($this->input->post());
			$category = $this->input->post("category");
			$item = $this->input->post("item");
			$active = $this->input->post("active");

	
			$data = array(
						'categoryname'=>$this->input->post("category"),
						'itemid'=>$this->input->post("item"),
						'active'=>$this->input->post("active"),
						'flag'=>1
					);
					
			$action = $this->model_common->insertData("category",$data);
			//echo $this->db->last_query();
			
			if($action){
			   $this->model_common->successFlash("Category Added Successfully" , "category");
			} 
		
		}else{
			$data['allitem'] =  $this->model_inventory->allitem();
			//echo $this->db->last_query();
			$data['arr'] =  $this->model_inventory->allcategory();
			$data['content'] 		= $this->load->view('admin_view/inventory/category_view', $data, true);
			$this->load->view('admin_view/main/main_view',$data);
			
		}
	}
	

	public function vendor(){
		
		if($this->input->post()){
		
			$vendorname = $this->input->post("vendorname");
			$address = $this->input->post("address");
			$mobile = $this->input->post("mobile");
			$active = $this->input->post("active");
			$vendor_id = $this->input->post("vendor_id");
					
			$data = array(
						'vendorname'=>$this->input->post("vendorname"),
						'vendor_address'=>$this->input->post("address"),
						'vendor_mobile'=>$this->input->post("mobile"),
						'active'=>$this->input->post("active"),
						'vendor_id'=>$this->input->post("vendor_id"),
						'flag'=>1
					);
					
			$action = $this->model_common->insertData("vendor",$data);
			//echo $this->db->last_query();

			if($action){
			   $this->model_common->successFlash("Vendor Added Successfully" , "vendor");
			} 

		}else{
			
			$data['arr'] = $this->db->query("SELECT `vendor`.*,`vendor_accounts`.* FROM `vendor` LEFT JOIN `vendor_accounts` ON `vendor_accounts`.vendor_id=`vendor`.vendor_id WHERE `vendor`.flag=1")->result();

			//echo $this->db->last_query();
			//$data['allvendor'] =  $this->model_inventory->allvendor();
			$data['content'] 		= $this->load->view('admin_view/inventory/vendor_view', $data, true);
			$this->load->view('admin_view/main/main_view',$data);
			
		}
	}
	
	
	public function warehouse(){
		
		if($this->input->post()){
	
			$warehouse = $this->input->post("warehouse");
			$active = $this->input->post("active");

	
			$data = array(
						'warehouse_name'=>$this->input->post("warehouse"),
						'flag'=>1
					);
					
			$action = $this->model_common->insertData("warehouse",$data);
			//echo $this->db->last_query();
			
			if($action){
			   $this->model_common->successFlash("Warehouse Added Successfully" , "warehouse");
			} 
		
		}else{
			//$data['arr'] = $this->db->query("SELECT `warehouse_stok`.*,`warehouse`.* FROM `warehouse_stok` LEFT JOIN `warehouse` ON `warehouse`.id = `warehouse_stok`.id WHERE `warehouse_stok`.flag=1")->result();
			$data['arr'] =  $this->model_inventory->warehousestok();
			$data['content'] 		= $this->load->view('admin_view/inventory/warehouse_view', $data, true);
			$this->load->view('admin_view/main/main_view',$data);
			
		}
	}
	

		
	public function product(){
		
		if($this->input->post()){
		
		//print_r($this->input->post());
			$product_code 	= $this->input->post("product_code");
			$payment 		= $this->input->post("payment");
			$itemid 		= $this->input->post("item");
			$vendorid 		= $this->input->post("vendor");
			$categoryid 	= $this->input->post("category");
			$payment_mode 	= $this->input->post("payment_mode");
			$payment_note 	= $this->input->post("payment_note");
			$due_payment 	= $this->input->post("due_payment");
			$product_qty 	= $this->input->post("product_qty");
			$purchase_price = $this->input->post("purchase_price");
			$memono 		= $this->input->post("memono");
			$warehousename 		= $this->input->post("warehousename");
			$sell_price 		= $this->input->post("sell_price");

			
			
// vendor table data update start//	
/* 			$productqty = $product_qty;
			$purchaseprice = $purchase_price;
			$finalprise =  $productqty * $purchaseprice;
			$final_prise = $finalprise;	
	
			$vendor_data 	=  $this->db->query("SELECT * FROM `vendor` WHERE `vendor_id`='$vendorid'")->result();
			//echo $this->db->last_query();
			$vendor_id		=   $vendor_data[0]->vendor_id;
			$vendorname		=   $vendor_data[0]->vendorname;
			$vendor_address	=   $vendor_data[0]->vendor_address;
			$vendor_mobile	=   $vendor_data[0]->vendor_mobile;

			$vendorupdateArray = array(
						'vendor_id'=>$vendor_id,
						'vendorname'=>$vendorname,
						'vendor_address'=>$vendor_address,
						'pursess_amount'=>$final_prise,
						'vendor_mobile'=>$vendor_mobile,
						'payment'=>$payment,
						'payment_mode'=>$payment_mode,
						'payment_note'=>$payment_note,
						'memo_no'=>$memono,
						'date' => date("Y-m-d"),
						'active' => 1,
						'flag' => 1
						);
						
			
			$action = $this->model_common->insertData("vendor",$vendorupdateArray); */
// vendor table data update end//	
			
		
///product table data update start///

			$productqty = $product_qty;
			$purchaseprice = $purchase_price;
			$finalprise =  $productqty * $purchaseprice;
			$final_prise = $finalprise;
			$vendor_data 	=  $this->db->query("SELECT * FROM `vendor` WHERE `vendor_id`='$vendorid'")->result();
			//echo $this->db->last_query();
			$vendor_id		=   $vendor_data[0]->vendor_id;

			$warehousedata 	=  $this->db->query("SELECT * FROM `warehouse`")->result();
			//echo $this->db->last_query();
			$warehouseid		=   $warehousedata[0]->id;
			$warehouse_name		=   $warehousedata[0]->warehouse_name;
			

		
			$item_id = $itemid;
			$category_id = $categoryid;
			
			$product_code_gen = $vendor_id."".$item_id."".$category_id."".$product_code;

			  $data = array(
						
						'productname'=>$this->input->post("product"),
						'itemid'=>$this->input->post("item"),
						'vendorid'=>$vendor_id,
						'categoryid'=>$this->input->post("category"),
						'product_qty'=>$this->input->post("product_qty"),
						'total_pursess'=>$final_prise,
						'payment'=>$payment,
						'payment_mode'=>$payment_mode,
						'payment_note'=>$payment_note,
						'purchase_price'=>$this->input->post("purchase_price"),
						'sell_price'=>$this->input->post("sell_price"),
						'memo_no'=>$this->input->post("memono"),
						'date' => date("Y-m-d") ,
						'product_code'=> $product_code_gen,
						'werehouse'=>$warehouseid,
						'active'=>1,
						'flag'=>1
					);  
					
			$action = $this->model_common->insertData("product",$data);
///product table data update end///
			

// warehouse stok management start///

				
				$dataupdate = array(
							'warehouse_name'=>$warehousename,
							'productid'=>$product_code_gen,
							'product_cat'=>$categoryid,
							'product_qty'=>$product_qty,
							'sell_rate'=>$sell_price,
							'date' => date("Y-m-d") ,
							'flag' => 1
							);
							
				
				$action = $this->model_common->insertData("warehouse_stok",$dataupdate);
//echo $this->db->last_query();

// warehouse stok management start///		
			
/// Vendor Accounts Table Update start////

			$pursess_amount_total = $this->db->query("SELECT SUM(`total_pursess`) as totalpursess FROM `product` WHERE `vendorid`='$vendor_id'");
			$totalPursess = $pursess_amount_total->row("totalpursess");
			$totalPursess =  ($totalPursess)?$totalPursess:0;
			
			$pay_amount_total = $this->db->query("SELECT SUM(`payment`) as totalpayment FROM `product` WHERE `vendorid`='$vendor_id'");
			
			$totalPayment = $pay_amount_total->row("totalpayment");
			$totalPayment =  ($totalPayment)?$totalPayment:0;


			 $total_pursess = $totalPursess;
			 $total_payment = $totalPayment;
							
				if( $total_pursess > $total_payment){
				    $finaldue =  $total_pursess-$total_payment;
					$finaladvance = 0;
					$paid = 0;				
				 }elseif($total_payment > $total_pursess ){
				    $finaladvance = $total_payment - $total_pursess;	
				    $finaldue = 0;
				    $paid = 0;
				}else{
					$paid = 1;
					$finaldue = 0;
					$finaladvance = 0;
				}
				
				
				$updateArray = array(
							'vendor_id' => $vendor_id,
							'pursess_amount' => $total_pursess,
							'payment' =>  $total_payment,
							'due_amount' =>$finaldue,
							'advance' =>$finaladvance,
							'paid' => $paid,
							'flag' => 1
						);   
	
			$existquery = $this->db->query("SELECT `vendor_id` FROM vendor_accounts WHERE `vendor_id`='$vendor_id'");
			//echo $this->db->last_query();
			
			$exist =	$existquery->num_rows();
			 
			if($exist){
				$this->db->where('vendor_id',$vendor_id );
				$this->db->update('vendor_accounts',$updateArray);
				
			}else{
				$this->db->insert('vendor_accounts',$updateArray);
				
			}
	
/// Vendor Accounts Table Update end////
			
			


			//echo $this->db->last_query();

			 if($action){
				$this->model_common->successFlash("Product Added Successfully" , "product");
				}  
		
		}else{
			$data['warehousename'] =  $this->model_inventory->warehousename();
			$data['allvendor'] =  $this->model_inventory->allvendor();
			$data['allcategory'] =  $this->model_inventory->allcategory();
			$data['allitem'] =  $this->model_inventory->allitem();
			$data['arr'] =  $this->model_inventory->allproduct();
			$data['content'] 		= $this->load->view('admin_view/inventory/product', $data, true);
			$this->load->view('admin_view/main/main_view',$data);
			
		}
	}
	
	


		
		
		
		//redirect("admin/dashboard");
		
//end tag////		
	
}