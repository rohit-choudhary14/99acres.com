<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_acers extends CI_Model{
	
	public function register($data){
		  $email=$data["email"];
		  $this->db->select("*");
		  $this->db->from("user");
		  $this->db->where("email",$email);
		  $rec=$this->db->get()->result();
		  if($rec!=null){
			 redirect(base_url()."index.php/Acers/index/Alredy_registerd");
		 }
		 else{
			 $this->db->insert("user",$data);
			 redirect(base_url()."index.php/Acers/index/registered_successfully");
			
		 }  	
	}
	public function login($email){
		$this->db->select("password");
		$this->db->from("user");
		$this->db->where("email",$email);
		return $this->db->get()->result();
	}
	public function update_profile($data){
		   $email=get_cookie("login_user");
		   $this->db->where("email",$email);
		   $this->db->update("user",$data);
		   return true;
		
		
	}
	public function password_change($data){
		   $email=get_cookie("login_user");
		   $this->db->where("email",$email);
		   $this->db->update("user",$data);
		   delete_cookie("login_user");
		   $this->session->unset_userdata($email);
							
		   return true;
		
		
	}
  
}
