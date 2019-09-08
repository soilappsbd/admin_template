<?php

class model_inventory extends CI_Model
{
	
// Router //
	public function allitem(){
		$query = $this->db->query("SELECT * FROM `item`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	
	}
	
	
	
	public function allcategory(){
		$query = $this->db->query("SELECT * FROM `category`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	
	public function allvendor(){
		$query = $this->db->query("SELECT * FROM `vendor`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function allproduct(){
		$query = $this->db->query("SELECT * FROM `product`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function accounts(){
		$query = $this->db->query("SELECT * FROM `vendor_accounts`");
		//$query = $this->db->query("SELECT `vendor_accounts`.*,`vendor`.vendorname, `vendor`.vendor_address, `vendor`.vendor_mobile  FROM `vendor_accounts` LEFT JOIN `vendor` ON `vendor`.	vendor_id=`vendor_accounts`.vendor_id");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	
	
	
	
	public function itemnamebyid($id){
	   $this->db->where("id",$id );
	   $query =  $this->db->get("item");
	   if($query->num_rows()){
		 foreach($query->result() as $row){
			return   $data = $row->itemname;
		   }
	   
	   }else{
		  return "N/A";
	   }
	  
	}
	

	
	public function categorynamebyid($id){
	   $this->db->where("id",$id );
	   $query =  $this->db->get("category");
	   if($query->num_rows()){
		 foreach($query->result() as $row){
			return   $data = $row->categoryname;
		   }
	   
	   }else{
		  return "N/A";
	   }
	  
	}
	


	public function warehousename(){
		$query = $this->db->query("SELECT * FROM `warehouse`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function warehousestok(){
		$query = $this->db->query("SELECT * FROM `warehouse_stok`");

		if($query->num_rows()){
			return $query->result();
		}else{
			return false;
		}
	}

	


	public function warehousenamebyid($id){
	   $this->db->where("id",$id );
	   $query =  $this->db->get("warehouse");
	   if($query->num_rows()){
		 foreach($query->result() as $row){
			return   $data = $row->warehouse_name;
		   }
	   
	   }else{
		  return "N/A";
	   }
	  }
	  
	  
	  public function vendornameid($id){
	   $this->db->where("vendor_id",$id );
	   $query =  $this->db->get("vendor");
	  // echo $this->db->last_query();
	   if($query->num_rows()){
		 foreach($query->result() as $row){
			return   $data = $row->vendorname;
		   
		   }
	   
	   }else{
		  return "N/A";
	   }
	  }
	  
	  
	  
	  



	public function vendoridsearch(){

		$result= $this->db->query("SELECT 	vendor_id FROM vendor")->result();
		//echo $this->db->last_query();
		foreach($result as $row){
		 return	$data = $row->	vendor_id;	

			}
		}
	

		
		
	public function getActiveProductData()
	{
		$sql = "SELECT * FROM warehouse_stok WHERE flag = ? ORDER BY id DESC";

		$query = $this->db->query($sql, array(1));
		//echo $this->db->last_query();
		return $query->result_array();
	}
 
	
	

	
}