<?php

class model_common extends CI_Model
{
	
	public function insertData($tablename,$dataArray){
		$query = $this->db->insert($tablename, $dataArray);
		return $this->db->insert_id();
	}
	
	
	public function updatedata($tablename,$data, $column, $id){
		$this->db->where($column,$id);
		$query = $this->db->update($tablename,$data);
		return $this->db->affected_rows();
	}
	
	
	public function deleteData($tablename,$id){
		$this->db->where('id', $id);
		$this->db->delete($tablename);
		return $this->db->affected_rows();
	}
	
	
	
// Data query
	public function databysql($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	
// Data array	
	public function dataarray($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return false;
		}
	}
	
	
// count rows	
	public function countrows($sql){
		$query = $this->db->query($sql);
		if($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return false;
		}
	}



// Pagination Config
	public function paginationConfig($base_url = null, $count_total = null , $perpage = null ){
	
	
			$config['base_url'] = base_url() . $base_url ;
			$config['total_rows'] =  $count_total;
			$config['per_page'] =  $perpage;
		
			$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
			$config['full_tag_close']   = '</ul></nav></div>';
			$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']    = '</span></li>';
			$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
			$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
			// $config['next_tag_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
			$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['prev_tag_close']  = '</span></li>';
			$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
			$config['first_tag_close'] = '</span></li>';
			$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
			$config['last_tag_close']  = '</span></li>';

			$this->pagination->initialize($config);
		 	 
		

	}	


	
	
// Mail send	
	public function mailsend($fromemail, $fromname, $to, $subject, $message){
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from($fromemail, $fromname);
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
	}
	
	
	
	
	
	
///	
	
	public function successFlash($message,$redirect){
	
		$msg = '<div class="alert alert-success" onload="oQuickReply.swap();">'. $message .'</div>';
	
		$this->session->set_flashdata("msg", $msg);
		redirect($redirect);
	}
	
	
	public function UnsuccessFlash($message,$redirect){
	
		$msg = '<div class="alert alert-danger" onload="oQuickReply.swap();">'. $message .'</div>';
	
		$this->session->set_flashdata("msg", $msg);
		redirect($redirect);
	}
	
	
	public function uniqCheck($input,$table,$column){
		$query = $this->db->query("SELECT `id` FROM $table WHERE $column='$input'");
		if($query->num_rows() > 0){
			return false;
		}else{
			return true;
		}
	}
	
	
	public function clientCheckUserblock($blockid){

		$userid =  $this->session->userdata("id");
		
		$query = $this->db->query("SELECT * FROM `block` WHERE `id`='$blockid' AND `userid`='$userid'");
			//echo  $this->db->last_query();
		
		//pd($query->result_array());
		
		 if($query->num_rows()){
			return true;
		}else{
			return false;
		} 
	
	}
	
// Login Validation Check //
		
	


}//end of class