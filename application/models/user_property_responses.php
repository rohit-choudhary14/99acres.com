<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_property_responses extends CI_Model{
	
	public function send_responses($data){
		$this->db->insert("response",$data);
		 return true;	
	}
	public function sendreply($to_email,$prop_code,$msg){
		$from_email=get_cookie('login_user');
		$data=array(
		 "from_user"=>$from_email,
		 "to_user"=>$to_email,
		 "to_this_prop_code"=>$prop_code,
		 "reply_message"=>$msg,
		 "status"=>1
		);
		$this->db->insert("reply",$data);
		 return true;	
	}
	public function to_do_shortlest($prop_code){
		$email=get_cookie('login_user');
		$this->db->select("*");
		$this->db->from("shortlested_property");
		$this->db->where("email",$email);
		$this->db->where("prop_code",$prop_code);
		$res=$this->db->get()->result();
		$status;
		
		if($res!=null){
			foreach($res as $row){
		        $status=$row->status;	
		     }
			 if($status==1){
				$data=array(
				    "prop_code"=>$prop_code,
				    "email"=>$email,
				    "status"=>0
				);
				 $this->db->update("shortlested_property",$data);	
				 return false;
			 }
			 else{
				   $data=array(
					   "prop_code"=>$prop_code,
					   "email"=>$email,
					   "status"=>1
				  );
					$this->db->update("shortlested_property",$data);
					return true;
				 
				 
			 }
		}
		else{
			 $data=array(
			   "prop_code"=>$prop_code,
			   "email"=>$email,
			   "status"=>1
			 );
			$this->db->insert("shortlested_property",$data);
			return true;
		}
		
		
		
		
	}
}
