<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_property_update extends CI_Model{
	
	public function property_update($data,$prop_id){
		$email=get_cookie("login_user");
		$this->db->where("prop_code",$prop_id);
		$this->db->where("prop_owner_email",$email);
		$this->db->update("99acers_user_property_profile",$data);
		
		
		return true;
			
	}
	public function property_delete($prop_id){
		$data=array(
		 "status"=>0
		);
		$email=get_cookie("login_user");
		$this->db->where("prop_code",$prop_id);
		$this->db->where("prop_owner_email",$email);
		$this->db->update("99acers_user_property_profile",$data);
		return true;
		
		
	}
	public function property_recover($prop_id){
		$data=array(
		 "status"=>1
		);
		$email=get_cookie("login_user");
		$this->db->where("prop_code",$prop_id);
		$this->db->where("prop_owner_email",$email);
		$this->db->update("99acers_user_property_profile",$data);
		return true;
		
		
	}
  
}
