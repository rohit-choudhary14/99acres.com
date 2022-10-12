<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_property_upload extends CI_Model{
	
	public function basic_detials_upload($data){
		
		$this->db->insert("draft_property_basic_details",$data);
		redirect(base_url()."index.php/Acers/property_profile_form?basicdetails=".$data["property_code"]);
		
	}
	
	public function property_location($data){
		$where=array(
		 "email"=>get_cookie("login_user"),
		 "property_code"=>$data["property_code"]
		
		
		);
		$this->db->select("*");
		$this->db->from("draft_property_location");
		$this->db->where($where);
		$res_check=$this->db->get()->result();
		if($res_check==null){
			
			$this->db->insert("draft_property_location",$data);
			redirect(base_url()."index.php/Acers/property_profile_form?propertyprofile=".$data["property_code"]);
		
			
		}
		else{
			$this->db->update("draft_property_location",$data);
			redirect(base_url()."index.php/Acers/property_profile_form?propertyprofile=".$data["property_code"]);
		
			
		}
		
		
	}
	public function property_profile_details_upload($data){
		$where=array(
		 "email"=>get_cookie("login_user"),
		 "property_code"=>$data["property_code"]
		
		
		);
		$this->db->select("*");
		$this->db->from("draft_property_profile_details");
		$this->db->where($where);
		$res_check=$this->db->get()->result();
		if($res_check==null){
			$this->db->insert("draft_property_profile_details",$data);
			redirect(base_url()."index.php/Acers/property_profile_form?Cover_Images=".$data["property_code"]);
		
			
		}
		else{
			 $this->db->update("draft_property_profile_details",$data);
			 redirect(base_url()."index.php/Acers/property_profile_form?Cover_Images=".$data["property_code"]);
		
			
			
		}
		
		
		
	}
	public function coverImageUpload($code,$property_code){
		$email=get_cookie("login_user");
		$data=array(
		"img_code"=>$code,
		"property_code"=>$property_code,
		"email"=>$email,
		 "status"=>1
		);
		$where=array(
			"property_code"=>$property_code,
			"email"=>$email
		
		
		);
		$this->db->select("*");
		$this->db->from("cover_image");
		$this->db->where($where);
		$res_check=$this->db->get()->result();
		if($res_check==null){
			$this->db->insert("cover_image",$data);	
			
		}
		else{
			$this->db->where($where);
			$this->db->update("cover_image",$data);	
			
		}
		
		
	}
	public function bedroomImageUpload($code,$property_code){
		$email=get_cookie("login_user");
		$data=array(
		"img_code"=>$code,
		"property_code"=>$property_code,
		"email"=>$email,
		 "status"=>1
		);
		$where=array(
			"property_code"=>$property_code,
			"email"=>$email
		
		
		);
		$this->db->select("*");
		$this->db->from("bedroom_image");
		$this->db->where($where);
		$res_check=$this->db->get()->result();
		if($res_check==null){
			$this->db->insert("bedroom_image",$data);	
			
		}
		else{
			$this->db->where($where);
			$this->db->update("bedroom_image",$data);	
			
		}
		
	}
	public function bathroomImageUpload($code,$property_code){
		$email=get_cookie("login_user");
		$data=array(
		"img_code"=>$code,
		"property_code"=>$property_code,
		"email"=>$email,
		 "status"=>1
		);
		$where=array(
			"property_code"=>$property_code,
			"email"=>$email
		
		
		);
		$this->db->select("*");
		$this->db->from("bathroom_image");
		$this->db->where($where);
		$res_check=$this->db->get()->result();
		if($res_check==null){
			$this->db->insert("bathroom_image",$data);	
			
		}
		else{
			$this->db->where($where);
			$this->db->update("bathroom_image",$data);	
		}
		
	}
	public function price_listing_details_upload($data){
		$this->db->insert("draft_price_listing",$data);
		$looking_for;
		$prop_of_type;
		$prop_city;
		$prop_aprtment;
		$prop_id=$data["property_code"];
		$prop_type;
		$prop_num_bedroom;
		$prop_num_bathroom;
		$prop_num_balconies;
		$prop_carpet_area;
		$prop_carpet_area_unit;
		$prop_num_floor;
		$prop_floor_details;
		$prop_age;
/*  Getting property basics details  start */
		$where=array(
		   "property_code"=>$prop_id,
		   "email"=>get_cookie("login_user"),
		   "status"=>1
		
		);
		$this->db->select("*");
		$this->db->from("draft_property_basic_details");
		$this->db->where($where);
		foreach($this->db->get()->result() as $row){
			  $looking_for=$row->looking_for;
		      $prop_of_type=$row->type_of_property;
			
		}
		 $this->db->where($where);
		 $this->db->delete("draft_property_basic_details");
/*  Getting property basics details part end  */   
/*  Getting property location  */
		$where=array(
		   "property_code"=>$prop_id,
		   "email"=>get_cookie("login_user"),
		   "status"=>1
		
		);
		$this->db->select("*");
		$this->db->from("draft_property_location");
		$this->db->where($where);
		foreach($this->db->get()->result() as $row){
			$prop_city=$row->city;
			$prop_aprtment=$row->apartment;
		}
/* delete the pervious record of property location start */
         $this->db->where($where);
		 $this->db->delete("draft_property_location");
/* delete part end*/


/*  Getting property profile  */
		$where=array(
		   "property_code"=>$prop_id,
		   "email"=>get_cookie("login_user"),
		   "status"=>1
		
		);
		$this->db->select("*");
		$this->db->from("draft_property_profile_details");
		$this->db->where($where);
		foreach($this->db->get()->result() as $row){
			$prop_type=$row->property_type;
			$prop_num_bedroom=$row->number_of_bedrooms;
			$prop_num_bathroom=$row->number_of_bathrooms;
			$prop_num_balconies=$row->number_of_balconies;
			$prop_carpet_area=$row->carpet_area;
			$prop_carpet_area_unit=$row->carpet_area_unit;
			$prop_num_floor=$row->number_of_floors;
			$prop_floor_details=$row->floors_details;
			$prop_age=$row->age_of_property;
		}
/*  Getting property profile  part end */

/* delete the pervious record start */
         $this->db->where($where);
		 $this->db->delete("draft_property_profile_details");
/* delete part end*/		 
		$prop_ownership=$data["ownership"];
		$prop_price=$data["expected_price"];
		$prop_price_per_sqft=$data["price_per_sq_ft"];
		$prop_des=$data["property_description"];
		$prop_owner_email=get_cookie("login_user");
		$status=1;
		$sn=0;
		$this->db->select_max("sn");
		$this->db->from("99acers_user_property_profile");
		foreach($this->db->get()->result() as $row){
			$sn=$row->sn;
		}
		$sn++;
		$data_insert=array(
		  "sn"=>$sn,
		  "looking_for"=>$looking_for,
		  "type_of_prop"=>$prop_of_type,
		  "prop_code"=>$prop_id,
		  "prop_city"=>$prop_city,
		  "prop_aprtment"=>$prop_aprtment,
		  "prop_type"=>$prop_type,
		  "prop_num_bedroom"=>$prop_num_bedroom,
		  "prop_num_bathroom"=>$prop_num_bathroom,
		  "prop_num_balconies"=>$prop_num_balconies,
		  "prop_carpet_area"=>$prop_carpet_area,
		  "prop_carpet_area_unit"=>$prop_carpet_area_unit,
		  "prop_num_floor"=>$prop_num_floor,
		  "prop_floor_details"=>$prop_floor_details,
		  "prop_age"=>$prop_age,
		  "prop_ownership"=>$prop_ownership,
		  "prop_price"=>$prop_price,
		  "prop_price_per_sqft"=>$prop_price_per_sqft,
		  "prop_des"=>$prop_des,
		  "prop_owner_email"=>$prop_owner_email,
		  "status"=>1
		
		
		
		);
		$this->db->insert("99acers_user_property_profile",$data_insert);
/* deleteing the record of draft_price_listing table start*/
		$where=array(
		   "property_code"=>$prop_id,
		   "email"=>get_cookie("login_user"),
		   "status"=>1
		
		);
		 $this->db->where($where);
		 $this->db->delete("draft_price_listing");
/* deleteing the record of draft_price_listing table end*/

		redirect(base_url()."index.php/Acers/thanku/".$data["property_code"]);
		
		
		
		
	}
	public function property_selecter($prop_id){
		/* property cover image for above prop_id */
		$where=array(
		 "property_code"=>$prop_id,
		 "email"=>get_cookie("login_user"),
		
		);
		$this->db->select("img_code");
		$this->db->from("cover_image");
		$this->db->where($where);
		$data= $this->db->get()->result();
		foreach($data as $row){
			echo $row->img_code."/";
			
		}
		/* property_record for above prop_id */
		$where=array(
		 "prop_code"=>$prop_id,
		 "prop_owner_email"=>get_cookie("login_user"),
		 
		
		);
		$this->db->select("*");
		$this->db->from("99acers_user_property_profile");
		$this->db->where($where);
		$res= $this->db->get()->result();
		foreach($res as $row){
			echo $row->prop_type."@".$row->prop_city."&".$row->prop_aprtment."#".$row->status;
			
			
		}
		$where=array(
		 "reciver_email"=>get_cookie("login_user"),
		 "prop_code"=>$prop_id
		
		
		);
		$this->db->select("*");
		$this->db->from('response');
		$this->db->where($where);
		$num_rows=count($this->db->get()->result());
		echo"-".$num_rows;
		
		
		
	}
  
}
