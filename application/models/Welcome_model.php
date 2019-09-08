<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {



	public function test_data()
	{
		return $this->db->get('users')->result();
	}
	
	public function totalitem(){
	    $this->db->where("active", "1");
	    $query = $this->db->get("item");
	  echo $this->db->last_query();	
	  return $query->num_rows();
	}
	
	
	
	
	
}
