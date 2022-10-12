<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_property_draft_checking extends CI_Model{
	public function draft_checking(){
		$prop_id;
		$email=get_cookie("login_user");
		$this->db->select("*");
		$this->db->from("draft_property_basic_details");
		$this->db->where("email",$email);
		$flagx=0;
		foreach($this->db->get()->result() as $row){
			$flagx=1;
			$prop_id=$row->property_code;
			
		}
		if($flagx==1){
			$where=array(
			   "property_code"=>$prop_id,
			   "email"=>$email
			);
			$this->db->select("*");
			$this->db->from("draft_property_location");
			$this->db->where($where);
			$flag=0;
			foreach($this->db->get()->result() as $row){
				$flag=1;	
			}
			if($flag==1){
				
							$where=array(
							   "property_code"=>$prop_id,
							   "email"=>$email
							);
							$this->db->select("*");
							$this->db->from("draft_property_profile_details");
							$this->db->where($where);
							$flag1=0;
							foreach($this->db->get()->result() as $row){
								$flag1=1;
								
								
							}
							if($flag1==1){
								     $where=array(
										   "property_code"=>$prop_id,
										   "email"=>$email
										);
										$this->db->select("*");
										$this->db->from("cover_image");
										$this->db->where($where);
										$flag2=0;
										foreach($this->db->get()->result() as $row){
											$flag2=1;
											
											
										}
										if($flag2==1){
												   $where=array(
													   "property_code"=>$prop_id,
													   "email"=>$email
													);
													$this->db->select("*");
													$this->db->from("bedroom_image");
													$this->db->where($where);
													$flag3=0;
													foreach($this->db->get()->result() as $row){
														$flag3=1;
														
														
													}
													if($flag3==1){
														   $where=array(
															   "property_code"=>$prop_id,
															   "email"=>$email
															);
															$this->db->select("*");
															$this->db->from("bathroom_image");
															$this->db->where($where);
															$flag4=0;
															foreach($this->db->get()->result() as $row){
																$flag4=1;
																
																
															}
															if($flag4==1){
																    $where=array(
																	   "property_code"=>$prop_id,
																	   "email"=>$email
																	);
																	$this->db->select("*");
																	$this->db->from("draft_price_listing");
																	$this->db->where($where);
																	$flag5=0;
																	foreach($this->db->get()->result() as $row){
																		$flag5=1;
																		
																		
																	}
																	if($flag5==1){
																		
																		
																	}
																	else{
																		   redirect(base_url()."index.php/Acers/property_profile_form?pricing=".$prop_id);
		
																		
																	}
																
																
															}
															else{
																
																redirect(base_url()."index.php/Acers/property_profile_form?bathrooms_image=".$prop_id);
		
																
																
																
															}
														
														
														
													}
													else{
														
														redirect(base_url()."index.php/Acers/property_profile_form?bedroom_image=".$prop_id);
		
														
														
														
													}
										}
										else{
											  redirect(base_url()."index.php/Acers/property_profile_form?Cover_Images=".$prop_id);	
										}
								
							}
							else{
								
								redirect(base_url()."index.php/Acers/property_profile_form?propertyprofile=".$prop_id);
		
								
							}
							
							
							
							
			}
			else{
				redirect(base_url()."index.php/Acers/property_profile_form?basicdetails=".$prop_id);
		
			}
						
						
			
			
		}
		else{
			
			
			$this->load->view('Post_property');
			
			
		}
		
		
		
		
	}
	
	
  
}
