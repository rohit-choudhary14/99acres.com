<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acers extends CI_Controller {
   public function __construct(){
	   parent::__construct();
	  $this->load->helper("form");
	  $this->load->helper("url");
	  $this->load->helper("cookie");
      $this->load->database();
	  $this->load->model('user_acers');
	  $this->load->model('user_property_upload');
	   $this->load->model('user_property_update');
	   $this->load->model('user_property_responses');
	  $this->load->model('user_property_draft_checking');
      $this->load->library("session");	
      $this->load->helper(array('form', 'url'));	 
	   
   }
	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		 $data=array(
		    "email"=>$this->input->post("email"),
			"pass"=>$this->input->post("pass")
		 
		 );
	  if($rec=$this->user_acers->login($data["email"])){
			foreach($rec as $row){
				if($row->password ==$data["pass"]){
					  set_cookie("login_user",$data["email"],360000);
					  $this->session->set_userdata($data["email"],$data["pass"]);
					  redirect(base_url()."index.php/Acers/home");
					
				}
				else{
					
					
					redirect(base_url()."index.php/Acers/index/Password_incorrect");
				}
				
				
			}
	  }
     else{


           redirect(base_url()."index.php/Acers/index/Invalid_email");

	 }		 
			 
		
	}
	public function sign_up()
	
	{
		  $a=array();
		  $code=0;
		 for($i=0;$i<=9;$i++){
			   array_push($a,$i);
		 }
		 for($i='A';$i<='Z';$i++){
			   array_push($a,$i);
			    if($i=='Z')
					break;
		 }
		 for($i='a';$i<='z';$i++){
			   array_push($a,$i);
			    if($i=='z')
					break;
		 }
		shuffle($a);
		for($i=0;$i<=5;$i++){
			  $code=$code.$a[$i];
		}
		$sn=0;
		$this->db->select("sn");
		$this->db->from("user");
		$res=$this->db->get()->result();
		foreach($res as $row){
			$sn=$row->sn;
			
		}
		$sn++;
	
		$data=array(
		    "sn"=>$sn,
		    "user_code"=>$code,
		    "name"=>$this->input->post("user_name"),
			"email"=>$this->input->post("email"),
			"password"=>$this->input->post("pass"),
			"cpassword"=>$this->input->post("cpass"),
			"country_code"=>$this->input->post("country_code"),
		    "phone_number"=>$this->input->post("phone_number")
		 
		 );
		 if($data["password"]==$data["cpassword"]){
			 $this->user_acers->register($data);
		 }
		 else{
			 redirect(base_url()."index.php/Acers/index/Password_Mismatch");
		 }
		
		
	}
	public function profile(){
		
		$this->load->view("profile");
		
	}
	public function home(){
		
		$this->load->view("home");
		
	}
	public function edit_profile(){
	    if(isset($_REQUEST["name"]) && isset($_REQUEST["phone"]) && isset($_REQUEST["phone_code"])){
			$data=array(
			   "name"=>$_REQUEST["name"],
			   "country_code"=>$_REQUEST["phone_code"],
			   "phone_number"=>$_REQUEST["phone"]
			
			
			);
			if($this->user_acers->update_profile($data)){
				 echo"updated_Succesfully";
			}
		}
		else{
			
			echo "Try Again";
			
		}
		
	}
	public function change_password(){
		
			$data=array(
			"password"=>$this->input->post("cpass"),
			"cpassword"=>$this->input->post("cpass")
			);
			if($this->user_acers->password_change($data)){
				  
				   redirect(base_url()."index.php/Acers/index");       
							
			}
			else{
				
				redirect(base_url()."index.php/Acers/editBuyerProfile/try_again");       
					
			}
		
		
	}
	public function modifyProfile(){
		
		$this->load->view('modify_profile');
		
	}
	public function Post_property(){
		
		 $this->user_property_draft_checking->draft_checking();
		 
		
		
	}
	public function responses(){
		if(isset($_REQUEST["reciver_email"]) &&isset($_REQUEST["sender_name"]) &&isset($_REQUEST["sender_phone"]) && isset($_REQUEST["sender_message"]) && isset($_REQUEST["prop_id"])){
		   $data=array(
		      "sender_email"=>get_cookie("login_user"),
			  "reciver_email"=>$_REQUEST["reciver_email"],
			  "sender_name"=>$_REQUEST["sender_name"],
			  "sender_phone"=>$_REQUEST["sender_phone"],
			  "message_for_reciver"=>$_REQUEST["sender_message"],
			  "prop_code"=>$_REQUEST["prop_id"],
			  "status"=>1
		   
		   
		   );
		   if($this->user_property_responses->send_responses($data)){
			   echo"delivered";
		   }
		   
		
		
		}
		
	}
	public function view_property(){
		$this->load->view('view_property');
		
		
	}
	public function location(){
		
				$email=get_cookie("login_user");
				
				$data=array(
				"property_code"=>$this->uri->segment(3),
				"city"=>$this->input->post("city"),
				"apartment"=>$this->input->post("Apartment"),
				"email"=>$email,
				"status"=>1
				
				);
				$this->user_property_upload->property_location($data);
				
		
		
		
	}
	
	public function property_profile_details(){
		       $email=get_cookie("login_user");
		       $data=array(
			   "property_code"=>$this->uri->segment(3),
			   "property_type"=>$this->input->post('property_type'),
			   "number_of_bedrooms"=>$this->input->post('bedrooms'),
			   "number_of_bathrooms"=>$this->input->post('bathrooms'),
			   "number_of_balconies"=>$this->input->post('balconies'),
			   "carpet_area"=>$this->input->post('carpet_area'),
			   "carpet_area_unit"=>$this->input->post('carpet_area_unit'),
			   "number_of_floors"=>$this->input->post('floors'),
			   "floors_details"=>$this->input->post('floors_details'),
			   "age_of_property"=>$this->input->post('age_of_property'),
			   "email"=>$email,
			   "status"=>1
			   
			   
			   );
			   $this->user_property_upload->property_profile_details_upload($data);
				
			   
			   
		
	}
	public function property_profile_form(){
		   $this->load->view("location");
		
		
	}
	public function property_profile(){
		        $a=array();
				$code=0;
				 for($i=0;$i<=9;$i++){
					   array_push($a,$i);
				 }
				 for($i='A';$i<='Z';$i++){
					   array_push($a,$i);
						
				 }
				
				shuffle($a);
				for($i=0;$i<=4;$i++){
					  $code=$code.$a[$i];
				}
				$data=array(
				  "property_code"=>$code,
				  "looking_for"=>$this->input->post("looking_for"),
				  "type_of_property"=>$this->input->post("type_of_property"),
				  "email"=>get_cookie("login_user"),
				  "status"=>1
				);
		       $this->user_property_upload->basic_detials_upload($data);
		
		
	}
	 public function cover_photo_upload()
     { 
	 
	            $a=array();
				$code=0;
				 for($i=0;$i<=9;$i++){
					   array_push($a,$i);
				 }
				 for($i='A';$i<='Z';$i++){
					   array_push($a,$i);
						if($i=='Z')
							break;
				 }
				 for($i='a';$i<='z';$i++){
					   array_push($a,$i);
						if($i=='z')
							break;
				 }
				shuffle($a);
				for($i=0;$i<=5;$i++){
					  $code=$code.$a[$i];
				} 
	 
	            
                $config['upload_path']          = './property_user_img/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 10000000000;
                $config['max_width']            = 10240000000;
                $config['max_height']           = 76800000000;
				$config['file_name']            =$code;
               $this->load->library('upload', $config);
               
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->user_property_upload->coverImageUpload($code,$this->uri->segment(3));
                       
						redirect(base_url()."index.php/Acers/property_profile_form?bedroom_image=".$this->uri->segment(3));
		
                }
        }
		 public function bedroom_image_upload()
         { 
		        $a=array();
				$code=0;
				 for($i=0;$i<=9;$i++){
					   array_push($a,$i);
				 }
				 for($i='A';$i<='Z';$i++){
					   array_push($a,$i);
						if($i=='Z')
							break;
				 }
				 for($i='a';$i<='z';$i++){
					   array_push($a,$i);
						if($i=='z')
							break;
				 }
				shuffle($a);
				for($i=0;$i<=5;$i++){
					  $code=$code.$a[$i];
				} 
                $config['upload_path']          = './property_user_img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000000;
                $config['max_width']            = 10240000000;
                $config['max_height']           = 76800000000;
				$config['file_name']            =$code;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->user_property_upload->bedroomImageUpload($code,$this->uri->segment(3));
                        redirect(base_url()."index.php/Acers/property_profile_form?bathrooms_image=".$this->uri->segment(3));
		
                }
        }
		
		 public function bathrooms_image_upload()
         { 
		         $a=array();
				 $code=0;
				 for($i=0;$i<=9;$i++){
					   array_push($a,$i);
				 }
				 for($i='A';$i<='Z';$i++){
					   array_push($a,$i);
						if($i=='Z')
							break;
				 }
				 for($i='a';$i<='z';$i++){
					   array_push($a,$i);
						if($i=='z')
							break;
				 }
				shuffle($a);
				for($i=0;$i<=5;$i++){
					  $code=$code.$a[$i];
				} 
		 
		 
		 
		 
		 
                $config['upload_path']          = './property_user_img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000000000;
                $config['max_width']            = 10240000000;
                $config['max_height']           = 76800000000;
				$config['file_name']            =$code;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->user_property_upload->bathroomImageUpload($code,$this->uri->segment(3));
                        redirect(base_url()."index.php/Acers/property_profile_form?pricing=".$this->uri->segment(3));
		
                }
        }
	 public function pricelisting_details_upload(){
		    $email=get_cookie("login_user");
			$data=array(
			 "ownership"=>$this->input->post("ownership"),
			 "expected_price"=>$this->input->post("expected_price"),
			 "price_per_sq_ft"=>$this->input->post("price_per_sq_ft"),
			 "property_description"=>$this->input->post("property_description"),
			 "property_code"=>$this->uri->segment(3),
			 "email"=>$email,
			 "status"=>1
			);
			$this->user_property_upload->price_listing_details_upload($data);
			
			
	}
	public function thanku(){
		
		$prop_id=$this->uri->segment(3);
		
		$this->load->view('thanku');
		
		
		
	}
	public function prop_update(){
		
		if(isset($_REQUEST["prop_id"]) && isset($_REQUEST["prop_type"]) && isset($_REQUEST["prop_num_bedroom"]) && isset($_REQUEST["prop_num_bathroom"]) && isset($_REQUEST["prop_num_balconies"]) && isset($_REQUEST["prop_carpet_area"]) && isset($_REQUEST["prop_num_floor"]) && isset($_REQUEST["prop_age"]) && isset($_REQUEST["prop_ownership"]) && isset($_REQUEST["prop_price"])&& isset($_REQUEST["prop_price_per_sqft"]) && isset($_REQUEST["prop_des"])){
		   $data=array(
				  "prop_type"=>$_REQUEST["prop_type"],
				  "prop_num_bedroom"=>$_REQUEST["prop_num_bedroom"],
				  "prop_num_bathroom"=>$_REQUEST["prop_num_bathroom"],
				  "prop_num_balconies"=>$_REQUEST["prop_num_balconies"],
				  "prop_carpet_area"=>$_REQUEST["prop_carpet_area"],
				  "prop_num_floor"=>$_REQUEST["prop_num_floor"],
				  "prop_age"=>$_REQUEST["prop_age"],
				  "prop_ownership"=>$_REQUEST["prop_ownership"],
				  "prop_price"=>$_REQUEST["prop_price"],
				  "prop_price_per_sqft"=>$_REQUEST["prop_price_per_sqft"],
				  "prop_des"=>$_REQUEST["prop_des"]
				  
		   );
		  if($this->user_property_update->property_update($data,$_REQUEST["prop_id"])){
			   echo"updated";
			  
		  }
		
		}
		
	}
	public function property_status_change_for_delete(){
		
		if(isset($_REQUEST["prop_id"])){
			if($this->user_property_update->property_delete($_REQUEST["prop_id"])){
				
				echo"Deleted";
			}
			
		}
			
	}
	public function recover_propperty(){
		 if(isset($_REQUEST["prop_id"])){
			if($this->user_property_update->property_recover($_REQUEST["prop_id"])){
				
				echo"recovered";
			}
			 
		 }
		
		
		
	}
	public function property_selecter(){
		if(isset($_REQUEST["prop_id"])){
			
			$this->user_property_upload->property_selecter($_REQUEST["prop_id"]);
			
		}
		
	}
	public function sendReply(){
		if(isset($_REQUEST['to_email']) && isset($_REQUEST['prop_code']) &&isset($_REQUEST['msg'])){
			//echo $_REQUEST['to_email'].$_REQUEST['prop_code'];
			if($this->user_property_responses->sendreply($_REQUEST['to_email'],$_REQUEST['prop_code'],$_REQUEST['msg'])){
				 echo 'Message_has_sent';
				
			}
			
		}
		
	}
	public function shortlest_property(){
		  if(isset($_REQUEST['prop_code'])){
			  if($this->user_property_responses->to_do_shortlest($_REQUEST['prop_code'])){
				  echo'shortlested';
			  }
			  else{
				  
				  echo'unshortlested';
				  
			  }
			  
		  }
		
		
	}
	public function city_finder(){
		if(isset($_REQUEST["city_name"])){
			$this->db->select('*');
			$this->db->from('city');
			$this->db->like('city_name', $_REQUEST["city_name"]);
			$res = $this->db->get()->result();
			?>
			<div class="row"style="overflow-y:scroll;height:200px;font-family:'Open Sans',Arial,Helivetica,sans-serif;">
			  <div class="col-sm-12" >
			<?php
			$flag=0;
			foreach($res as $row){
				 $flag=1;
			?>  
				 <div class="row">
				   <div class="col-sm-12" >
					  <p class='text' style='cursor:pointer'> <?=$row->city_name?></p>
				   
				   </div>
				</div>
				
				
			<?php
			}
			
			if($flag==0){
			?>
				
			<div class="row" style=";background-color:#f7eecf">
				   <div class="col-sm-12"style="" >
				     <div class="row">
					    <div class="col-sm-6">
						   <p style='cursor:pointer'>Can't find you'r city</p>
				   
						
						</div>
						<div class="col-sm-6">
						   <p  class='dismiss'style='cursor:pointer;color:blue'>Click here to add</p>
				   
						
						</div>
					 
					 </div>
					  
				   </div>
				</div>
			
			<?php
			}
			?>
			  </div>
			</div>
			<?php
			
		}
		
		
	}
	public function aprtment_finder(){
		if(isset($_REQUEST["apartment_name"])){
			$this->db->select('*');
			$this->db->from('aprtment');
			$this->db->like('aprtment_name', $_REQUEST["apartment_name"]);
			$res = $this->db->get()->result();
			?>
			<div class="row"style="overflow:auto;height:200px;font-family:'Open Sans',Arial,Helivetica,sans-serif;">
			  <div class="col-sm-12">
			<?php
			$flag=0;
			foreach($res as $row){
				 $flag=1;
			?>  
				 <div class="row">
				   <div class="col-sm-12" >
					  <p class='text' style='cursor:pointer'> <?=$row->aprtment_name?></p>
				   
				   </div>
				</div>
				
				
			<?php
			}
			if($flag==0){
			?>
			<div class="row">
				   <div class="col-sm-12"style="background-color:#f7eecf" >
				     <div class="row">
					    <div class="col-sm-6">
						   <p style='cursor:pointer'>Can't find you'r aprtment</p>
				   
						
						</div>
						<div class="col-sm-6">
						   <p  class='dismiss'style='cursor:pointer;color:blue'>Click here to add</p>
				   
						
						</div>
					 
					 </div>
					  
				   </div>
				</div>
			
			<?php
			}
			?>
			  </div>
			</div>
			<?php
			
		}
		
		
	}
	public function logout(){
		$email=get_cookie("login_user");
		delete_cookie("login_user");
		$this->session->unset_userdata($email);
		redirect(base_url()."index.php/Acers/index");
		
	}
}
