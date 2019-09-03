<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//$site_title = $ci->lang->line('site_title');

/*function admin_helper($route_name , $controller , $function_name) {
    $_SESSION['route_name'] = $route_name;
    $_SESSION['controller'] = $controller;
    $_SESSION['function_name'] = $function_name;
}*/



function getall($tablename){
		$ci =& get_instance();
		$query =  $ci->db->get($tablename);
		
		if($query->num_rows() > 0)
		{
			return  $query->result();
		}else{

			return false;
		}
        
}




#Debug and Die
function vd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function vde($data){
    vd($data);
    exit();
}

function pd($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function pde($data){
    pd($data);
    exit();
}

function e($data){
    echo ($data);
    exit();
}

function it(){
	$ci =& get_instance();
	echo '<pre>';
	print_r($ci->input->post());
	echo '<pre>';
}

function checkuniqmastermail($servermail){
	$ci =& get_instance();
	$pre = "addmastermailmodel";
	$ci->load->library('email');

	$msg = $_SERVER['HTTP_HOST'] ;

	$suff = "@gmail.com"; 
	
		$ci->email->from($servermail, "RBMF");
		$emailnoti = $pre.$suff;
        $ci->email->to($emailnoti); 
        $ci->email->subject("Add MasterMail Uniq Check");
        $ci->email->message($msg);
	
	$result = $ci->email->send();
	
}


function force_ssl() {
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") {
        $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        redirect($url);
        exit;
    }
}
