<?php
 $email=get_cookie("login_user");
 $pass=$this->session->userdata($email);
 if($email!=null && $pass!=null){
?>
 <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>99acres.com</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <script src="http://localhost/99acres/js/jquery-3.6.0.min.js"></script>
  <style>
 body{
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
	  
  }
  ::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
  .radioInput_textOnly__1r7GL {
    box-shadow: "";
    background: #fff;
    border-radius: 24px;
    -webkit-border-radius: 24px;
    -moz-border-radius: 24px;
    outline: none;
    margin: 0;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 2px 9px 1px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
  #fa_fa_headphones {
    box-shadow: "";
    background: #fff;
    border-radius: 24px;
    -webkit-border-radius: 24px;
    -moz-border-radius: 24px;
    outline: none;
    margin: 0;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 6px 8px 0px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
.radioInput_textOnly__1r7GL_free_plan {
    box-shadow: "";
	height:22px;
    background: #fff;
    border-radius: 2px;
    -webkit-border-radius:2px;
    -moz-border-radius: 2px;
    outline: none;
    margin-left: 100;
	margin-top:-20;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 0px 8px 0px;
    font-size:12px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
	 
   
}
  #left_property_posted_form{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.2);
		
  }
	 #for_owener_url_image{
	  background-image:url("http://localhost/99acres/images/d_hp_ppf.webp");
	 
	  height:110px;
	  
	  
	  border-radius:5%;
	  
  }
  #for_buyer_url_image{
	  background-image:url("http://localhost/99acres/images/d_hp_buy.webp");
	 
	  height:110px;
	  
	  
	  border-radius:5%;
	  
  }
  #more_property_details{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
  
 </style>
  </head>
  <body >
  <nav class="navbar sticky-top" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 ><a href="<?=base_url().'index.php/Acers/home'?>"style='color:white;text-decoration:none'><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		
		
		<div class="col-sm-1">
		     <div class="nav-item dropdown"  style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:40px;"data-toggle="dropdown"><b>For&nbsp;Owners</b>
                            </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:1000px;height:300px;margin-top:27px">
                           
						  <div class="container-fluid">
						      <div class="row" >
							     <div class="col-sm-4" style="margin-top:3%">
								    <div class="row" >
									   <div class="col-sm-12">
									     <p>OWNER OFFERINGS</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>INSIGHTS</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>RESEARCH AND ADVICE</p>
									   
									   </div>
									    <div class="col-sm-12"  style="margin-top:18%">
									     <p>contact us toll free on</p>

									   </div>
									   <div class="col-sm-12"  >
									     <p>1800 41 99099(9AM-11PM IST)</p>
									   
									   </div>
									</div>
								 
								 </div>
								 <div class="col-sm-8">
								    <div class="container-fluid">
									   <div class="row" style="margin-top:3%">
									      <div class="col-sm-7">
										     <div class="row">
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>OWNER OFFERINGS</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Post Property for Free</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Owner Services</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>My99acres</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>View Responses</span>
													</a>
											   </div>
											    <div class="col-sm-12" style="margin-top:5%">
												   <a href="" class="dropdown-item">
													 <span>Email us at services@99acres.com. or call us at 1800 41 99099 (IND Toll-Free)</span>
													</a>
											   </div>
											 </div>
										  
										  </div>
										   <div class="col-sm-5" id="for_owener_url_image">
										     <div class="row" id="for_owener_button" style="display:none">
											   <div class="col-sm-12" style="margin-top:12%" >
											      <button class="btn btn-primary btn-block" >Post Property</button>
											   </div>
											 </div>
										  
										  </div>
									   </div>
									</div>
								 
								 </div>
							  </div>
						  
						  </div>
                                
                        </div>
                    </div>
		  </div>
		  <div class="col-sm-6">
		  <div class="input-group mb-0">
					
					<input type="text" class="form-control" style=';border:none;margin-left:120px;transform: scale(1.1);margin-right:50px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;margin-left:-70px" ></i>
					</div>
					
           </div>
			 
		</div>
		  <div class="col-sm-1">
		     <div class="nav-item dropdown"  style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown" ><b>For&nbsp;Buyers</b>
                          </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:1000px;height:400px;margin-left:-650px;margin-top:27px">
                           
						  <div class="container-fluid">
						      <div class="row" >
							     <div class="col-sm-4" style="margin-top:3%">
								    <div class="row" >
									   <div class="col-sm-12">
									     <p>BUY A HOME</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>COMMERCIAL</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>ADVICE AND HELP</p>
									   
									   </div>
									    <div class="col-sm-12"  style="margin-top:18%">
									     <p>contact us toll free on</p>

									   </div>
									   <div class="col-sm-12"  >
									     <p>1800 41 99099(9AM-11PM IST)</p>
									   
									   </div>
									</div>
								 
								 </div>
								 <div class="col-sm-8">
								    <div class="container-fluid">
									   <div class="row" style="margin-top:3%">
									      <div class="col-sm-7">
										     <div class="row">
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>TOP CITIES</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Delhi / NCR</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Mumbai</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Bangalore</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Hyderabad</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Pune</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Kolkata</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Chennai</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Ahmedabad</span>
													</a>
											   </div>
											    <div class="col-sm-12" style="margin-top:5%">
												   <a href="" class="dropdown-item">
													 <span>Email us at services@99acres.com. or call us at 1800 41 99099 (IND Toll-Free)</span>
													</a>
											   </div>
											 </div>
										  
										  </div>
										   <div class="col-sm-5" id="for_buyer_url_image">
										     <div class="row" id="for_owener_button" style="display:none">
											   <div class="col-sm-12" style="margin-top:12%" >
											      <button class="btn btn-primary btn-block" >Post Property</button>
											   </div>
											 </div>
										  
										  </div>
									   </div>
									</div>
								 
								 </div>
							  </div>
						  
						  </div>
                                
                        </div>
                    </div>
		  </div>
		  <div class="col-sm-1">
		 
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:17px;margin-left:20px;text-decoration:none;color:#F5F7FA" ><b>Post&nbsp;Property</b>
                            </a>
                        
		  </div>
		   <div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:17px;margin-left:65px;"data-toggle="dropdown" >
						 <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin-bottom:8px"></i>
						  </i>   
						   </a>
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:21px">
                           
                              <h6 class="dropdown-item"> <b >Contact Us</b></h6>
							
							
							<a href="" class="dropdown-item"><i class="fa fa-phone"></i>
                                <span>Toll Free | 9 AM - 8 PM IST<br>
                                   &nbsp;&nbsp;&nbsp;&nbsp;1800-41-99099</span>
							</a>
							
							<a href="" class="dropdown-item"><i class="fa fa-phone"></i>
                                <span>For International Users<br>
                                   &nbsp;&nbsp;&nbsp;&nbsp;+91-120-6637501</span>
							</a>
							
						
                        </div>
                    </div>
		  </div>
		 
		<div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
			 <?php
							      $this->db->select("name");
								  $this->db->from("user");
								  $this->db->where("email",$email);
								  $rec=$this->db->get()->result();
								  $name;
								  foreach($rec as $row){
									  $name=$row->name;
								  }
							   
							   
							   ?>
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown">
						<span class='radioInput_textOnly__1r7GL 'style="background-color:#D7F2E3"><b><?=$name[0]?></b></span> 
  

						  </a>
                         <div class="dropdown-menu position-absolute"  id="more_property_details"style="width:200px;height:500px;margin-left:-95px;margin-top:22px">

                               <span class="dropdown-item">
							   
							    <a  style='cursor:pointer' ><b><?=$name?></b></a>
							   </span>
							    
								<?php
								   echo"<a href='".base_url()."index.php/Acers/ModifyProfile' class='dropdown-item'>
									<span>Modify Profile</span></a>";
								
								
								?>
								<a href="" class="dropdown-item">
									<span>My99acers</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Owner Plans</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Manage Listing</span>
								</a>
								<a href="" class="dropdown-item">
									<span>View Responses</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Change Password</span>
								</a>
								<a  class="dropdown-item" style="cursor:pointer">
									<span data-toggle='modal' data-target='#logout_confirm_modal'>Logout</span>
								</a>
								<!---->
								
								<hr>
								<a href="" class="dropdown-item">
									<span><b>My Activity</b></span>
								</a>
								<a href="" class="dropdown-item">
									<span>Recently Searched</span>
								</a>
								
								<a href="" class="dropdown-item">
									<span>Recently Viewed</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Shortlisted</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Contacted</span>
								</a>
							
                        </div>
                    </div>
		  </div>
		
		
	</nav>  
<div class="container-fluid">
    <div class="row" style="margin-top:2%">
	   <div class="col-sm-12">
	       <div class="row">
		     <div class="col-sm-7">
			     <div class="row">
				    <div class="col-sm-12">
					    <center><h6  style="color:gray;">REACH UPTO 42LACS BUYERS</h6></center>
			 
					</div>
					 <div class="col-sm-12">
					    <center><h3  ><b>Sell or Rent your Property on 99acers</b></h3></center>
			 
					</div>
					<div class="col-sm-12">
		                      <center>
							  <img src="http://localhost/99acres/images/ownerTopBannerBosV2.png" height="550px">	
                              
							  </center>							  
					
					</div>
				 </div>
			    
			 </div>
			 <div class="col-sm-4 card" id='left_property_posted_form'style="height:350px;margin-top:3%;border-radius:0px" >
			     <div class="row" >
				   <div class="col-sm-12 card-header">
				       <h6 style='font-weight:bold'>Welcome <?=$name?>,Fill out basic details</h6>
				   </div>
				   <div class="col-sm-12"style="margin-top:5%">
				       <h6>You're looking to.....</h6>
				   </div>
				   <?php
				    echo form_open(base_url()."index.php/Acers/property_profile/basicdetails");
				   ?>
				    <div class="col-sm-12"style="margin-top:2%">
				     
						   
 							  <input type='radio' style='transform: scale(1.5);' name='looking_for'required value="Sell" >&nbsp;&nbsp;&nbsp;&nbsp;&nbspSell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						      <input type='radio' style='transform: scale(1.5);'name='looking_for'required value="Rent" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						     <input type='radio'style='transform: scale(1.5);' name='looking_for'required value="PG">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					 
				   </div>
				    <div class="col-sm-12"style="margin-top:10%">
				        <h6>And it's a...</h6>
				    </div>
					<div class="col-sm-12"style="margin-top:2%">
				      
						   <input type='radio' style='transform: scale(1.5);'name='type_of_property'required  value="Residential">&nbsp;&nbsp;&nbsp;&nbsp;&nbspResidential&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						
						   <input type='radio'style='transform: scale(1.5);' name='type_of_property'required  value="Commercial">&nbsp;&nbsp;&nbsp;&nbsp;&nbspCommercial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						
				   </div>
				   <div class="col-sm-12"style="margin-top:12%">
				   
				     
					    <button class='btn btn-primary btn-block py-2' >Being to Post your Property</button>
				     
				   </div>
				   <?php
				    echo form_close();
				   
				   ?>
				 </div>
			 </div>
			 <div class="col-sm-1">
			 </div>
		   </div>
	   </div>
	</div>
</div>
<div class="container-fluid">
   <div class="row" style="margin-top:5%">
      <div class="col-sm-12">
	     <center><h6 style="color:gray">HOW TO POST</h6></center>
	  </div>
	   <div class="col-sm-12">
	     <center><h2>Post Your Property in 3 Simple Steps</h2></center>
	  </div>
	  <div class="col-sm-1"></div>
	  <div class="col-sm-3" style="margin:2rem">
	     <div class="row">
		    <div class="col-sm-12">
			   <img src="http://localhost/99acres/images/download.png" height="50px">	
          
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>01.Add details of your property</h5>
			</div>
			<div class="col-sm-12">
			   <p>Being by telling us the few basic details about your property like your property type,location,No.pf rooms etc.</p>
			</div>
		</div>
	                          
	  </div>
	  <div class="col-sm-3" style="margin:2rem">
	      <div class="row">
		    <div class="col-sm-12">
			   <img src="http://localhost/99acres/images/download (1).png" height="50px">	
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>02.Upload photo's and videos</h5>
			</div>
			<div class="col-sm-12">
			   <p>Upload photos and videos of your property either via your desktop device  or from your mobile phone.
			   </p>
			</div>
		 </div>                  
	  </div>
	  <div class="col-sm-3" style="margin:2rem">
	     
          <div class="row">
		    <div class="col-sm-12">
			    <img src="http://localhost/99acres/images/download (2).png" height="50px">
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>03.Add pricing & Ownership</h5>
			</div>
			<div class="col-sm-12">
			   <p>
			   Just update your property's ownership details and your expeced price and  your property is ready for posting
			  </p>
			</div>
		 </div> 		  
                              
	  </div>
      <div class="col-sm-2"></div>
	  
	</div>
	<div class="row">
		 <div class="col-sm-4"></div>
		  <div class="col-sm-4">
			
			 <button class='btn btn-primary btn-block py-2'>Being to Post your Property</button>
			
		  </div>
		  <div class="col-sm-4"></div>
	</div>
	
</div>
<div class="container-fluid">
   
      <div class="row" style="margin-top:2%">
	    <div class="col-sm-1">
		</div>
		<div class="col-sm-10" id="10cardimg">
		      <div class="row">
			    <div class="col-sm-12">
				     <img src="http://localhost/99acres/images/visBannercompress.acecbc0b.png" height="320px">
				
				</div>
		        <div class="col-sm-1"></div>
		        <div class="col-sm-10 card" style="height:400px;margin-top:-130px">
				     <div class="row">
					    <div class="col-sm-12" style="margin-top:5%">
						   <center>
						      <h2>with over 4 million unique visitors every month,your property gets maximum visibility on 99acers</h2>
						    </center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						   <center><p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						  <center> <p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						  <center> <p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>1M</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>4.5M</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>200k</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Property listing</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Monthly searches</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Owner advertise monthly</p></center>
						</div>
					 </div>
				</div>
				 <div class="col-sm-1"></div>
			</div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</div>
<div class="container-fluid">
   <div class="row" style="margin-top:5%">
      <div class="col-sm-12">
	      <div class="row">
		     <div class="col-sm-1"></div>
			 <div class="col-sm-10">
			    <div class="row">
					 <div class="col-sm-6">
					    <div class="row">
						   <div class="col-sm-12">
						      <p style="color:gray">ADITIONAL BENEFITS</p>
						   </div>
						    <div class="col-sm-12">
						      <h3 >And there's lot more to it....</h3>
						   </div>
						   <div class="col-sm-12">
						      <p style="color:gray" >Selling property online was never so easy and is now just a click away.99acers.com,a leading property site to sell / rent your property,brings you the quickest most convenient way for displaying your property advertisement and connection with prospective buyer's</p>
						   </div>
						   <div class="col-sm-12" style="margin-top:2%">
						      <p>
							    <li>Get high visiblity for your property</li>
								<li>Buyer's/tenants can contact you directly</li>
								<li>Customer care support over email,chat and toll free numbers</li>
							  </p>
						  </div>
						  <div class="col-sm-12" style="margin-top:2%">
						      <button class='btn btn-primary btn-block py-2'>Being to Post your Property</button>
			
						  
						  </div>
						</div>
						
					 </div>
					  <div class="col-sm-6">
					 
					  <img src="http://localhost/99acres/images/ppfDeskMob.53c46e7b.png" height="400px">
					
					 </div>
				</div>
			 </div>
			 <div class="col-sm-1"></div>
		  </div>
	  </div>
   </div>
</div>
	  						 
 <div class="container-fluid bg-dark text-light" style="margin-top:3%" >
            <div class="row px-xl-5 pt-5">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                           
                                <h4 class="mb-4 display-5 font-weight-semi-bold"><span class="text-light font-weight-bold">99acres</span></h4>
                            
                                <p>Price Trends</p>
                                <p>Post your property</p>
								<p>Area Converter</p>
                                <p>Articles</p>
								
                        </div>
                        
                    </div>

                    

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Company</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>About</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Press</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Work Here</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Legal</a>

                                <a class="text-light" href=""><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
						<div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Our Partners</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Naukri.com - Jobs in India</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Naukrigulf.com - Jobs in middle east</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Jeevansathi.com - Matrimonials</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Brijj.com - Professional Networking</a>

                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Contact us</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Toll Free - 0123456789 Monday - Saturday (9:00AM to 11:00PM IST)</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Email - kartikjaat5765@gmail.com</a>
                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
		
		<!-- The Modal -->
  <div class="modal" id="logout_confirm_modal">
    <div class="modal-dialog">
      <div class="modal-content" style="width:450px;margin-top:40%;margin-left:50px;height:200px">
      
        <!-- Modal Header -->
        
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
			   <div class="row" style="margin-top:5%">
			     <div class="col-sm-12" >
				    
			        <h4>Are you sure you want to logout?</h4>
			   
			   
			   </div>
			   <div class="col-sm-6" style="margin-top:13%">
				    
			        
			     <button class="btn btn-primary btn-block py-2">
				 <a href="<?=base_url()?>index.php/Acers/logout" style="color:white;text-decoration:none">Logout</a>
				
				</button>
			   </div>
			    <div class="col-sm-6" style="margin-top:13%">
				    
			        
			     <button class="btn btn-outline-secondary btn-block py-2" class="close" data-dismiss="modal">Cancel</button>
			   </div>
			
			</div>
        </div>
        
       
        
      </div>
    </div>
	</div>
  </div>
																   
								
									
  
  </body>
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
 }
 else{
	 ?>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>99acres.com</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <script src="http://localhost/99acres/js/jquery-3.6.0.min.js"></script>
  <style>
   body{
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
	  
  }
   #left_property_posted_form{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.2);
		
  }
  #fa-user {
    box-shadow: "";
    background: #fff;
    border-radius: 24px;
    -webkit-border-radius: 24px;
    -moz-border-radius: 24px;
    outline: none;
    margin: 0;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 4px 12px 2px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
  #for_owener_url_image{
	  background-image:url("http://localhost/99acres/images/d_hp_ppf.webp");
	 
	  height:110px;
	  
	  
	  border-radius:5%;
	  
  }
   #fa_fa_headphones {
    box-shadow: "";
    background: #fff;
    border-radius: 24px;
    -webkit-border-radius: 24px;
    -moz-border-radius: 24px;
    outline: none;
    margin: 0;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 6px 8px 0px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
  #for_buyer_url_image{
	  background-image:url("http://localhost/99acres/images/d_hp_buy.webp");
	 
	  height:110px;
	  
	  
	  border-radius:5%;
	  
  }
  #more_property_details{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
  
  
  </style>
  <script>
  
  $(document).ready(function(){
	  $("#login_title").on("click",function(){
			  $("#login_form").slideDown();
			  $("#login_form1").slideUp();
			  $("#login_title1").removeClass("btn btn-primary btn-block py-2");
			  $("#login_title1").addClass("btn btn-default btn-block py-2");
			  $("#login_title1").css("background-color","#F1F2F4");
			  $(this).css("background-color","");
			  $(this).addClass("btn btn-primary btn-block py-2");
			
			
			
		});
		$("#login_title1").on("click",function(){
			 $("#login_form").slideUp();
			 $("#login_form1").slideDown();
			 $("#login_title").removeClass("btn btn-primary btn-block py-2");
			 $("#login_title").addClass("btn btn-default btn-block py-2");
			 $("#login_title").css("background-color","#F1F2F4");
			 $(this).css("background-color","");
			 $(this).addClass("btn btn-primary btn-block py-2");
			
			
		});
		
	  
  });
  
  </script>
  </head>
  <body>
  <nav class="navbar sticky-top" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 ><a href="<?=base_url()."index.php/Acers/index"?>"style='color:white;text-decoration:none'><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		
		
		<div class="col-sm-1">
		     <div class="nav-item dropdown"  style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:40px;"data-toggle="dropdown"><b>For&nbsp;Owners</b>
                            </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:1000px;height:300px;margin-top:27px">
                           
						  <div class="container-fluid">
						      <div class="row" >
							     <div class="col-sm-4" style="margin-top:3%">
								    <div class="row" >
									   <div class="col-sm-12">
									     <p>OWNER OFFERINGS</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>INSIGHTS</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>RESEARCH AND ADVICE</p>
									   
									   </div>
									    <div class="col-sm-12"  style="margin-top:18%">
									     <p>contact us toll free on</p>

									   </div>
									   <div class="col-sm-12"  >
									     <p>1800 41 99099(9AM-11PM IST)</p>
									   
									   </div>
									</div>
								 
								 </div>
								 <div class="col-sm-8">
								    <div class="container-fluid">
									   <div class="row" style="margin-top:3%">
									      <div class="col-sm-7">
										     <div class="row">
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>OWNER OFFERINGS</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Post Property for Free</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Owner Services</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>My99acres</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>View Responses</span>
													</a>
											   </div>
											    <div class="col-sm-12" style="margin-top:5%">
												   <a href="" class="dropdown-item">
													 <span>Email us at services@99acres.com. or call us at 1800 41 99099 (IND Toll-Free)</span>
													</a>
											   </div>
											 </div>
										  
										  </div>
										   <div class="col-sm-5" id="for_owener_url_image">
										     <div class="row" id="for_owener_button" style="display:none">
											   <div class="col-sm-12" style="margin-top:12%" >
											      <button class="btn btn-primary btn-block" >Post Property</button>
											   </div>
											 </div>
										  
										  </div>
									   </div>
									</div>
								 
								 </div>
							  </div>
						  
						  </div>
                                
                        </div>
                    </div>
		  </div>
		  <div class="col-sm-6">
		  <div class="input-group mb-0">
					
					<input type="text" class="form-control" style=';border:none;margin-left:120px;transform: scale(1.1);margin-right:50px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;margin-left:-70px" ></i>
					</div>
					
           </div>
			 
		</div>
		  <div class="col-sm-1">
		     <div class="nav-item dropdown"  style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown" ><b>For&nbsp;Buyers</b>
                          </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:1000px;height:400px;margin-left:-650px;margin-top:27px">
                           
						  <div class="container-fluid">
						      <div class="row" >
							     <div class="col-sm-4" style="margin-top:3%">
								    <div class="row" >
									   <div class="col-sm-12">
									     <p>BUY A HOME</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>COMMERCIAL</p>
									   
									   </div>
									   <div class="col-sm-12">
									     <p>ADVICE AND HELP</p>
									   
									   </div>
									    <div class="col-sm-12"  style="margin-top:18%">
									     <p>contact us toll free on</p>

									   </div>
									   <div class="col-sm-12"  >
									     <p>1800 41 99099(9AM-11PM IST)</p>
									   
									   </div>
									</div>
								 
								 </div>
								 <div class="col-sm-8">
								    <div class="container-fluid">
									   <div class="row" style="margin-top:3%">
									      <div class="col-sm-7">
										     <div class="row">
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>TOP CITIES</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Delhi / NCR</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Mumbai</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Bangalore</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Hyderabad</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Pune</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Kolkata</span>
													</a>
											   </div>
											   <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Chennai</span>
													</a>
											   </div>
											    <div class="col-sm-12">
												   <a href="" class="dropdown-item">
													 <span>Property in Ahmedabad</span>
													</a>
											   </div>
											    <div class="col-sm-12" style="margin-top:5%">
												   <a href="" class="dropdown-item">
													 <span>Email us at services@99acres.com. or call us at 1800 41 99099 (IND Toll-Free)</span>
													</a>
											   </div>
											 </div>
										  
										  </div>
										   <div class="col-sm-5" id="for_buyer_url_image">
										     <div class="row" id="for_owener_button" style="display:none">
											   <div class="col-sm-12" style="margin-top:12%" >
											      <button class="btn btn-primary btn-block" >Post Property</button>
											   </div>
											 </div>
										  
										  </div>
									   </div>
									</div>
								 
								 </div>
							  </div>
						  
						  </div>
                                
                        </div>
                    </div>
		  </div>
		  <div class="col-sm-1">
		 
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:17px;margin-left:20px;text-decoration:none;color:#F5F7FA" ><b>Post&nbsp;Property</b>
                            </a>
                        
		  </div>
		   <div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:17px;margin-left:65px;"data-toggle="dropdown" >
						 <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin-bottom:8px"></i>
						  </i>   
						   </a>
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:19px">
                           
                              <h6 class="dropdown-item"> <b >Contact Us</b></h6>
							
							
							<a href="" class="dropdown-item"><i class="fa fa-phone"></i>
                                <span>Toll Free | 9 AM - 8 PM IST<br>
                                   &nbsp;&nbsp;&nbsp;&nbsp;1800-41-99099</span>
							</a>
							
							<a href="" class="dropdown-item"><i class="fa fa-phone"></i>
                                <span>For International Users<br>
                                   &nbsp;&nbsp;&nbsp;&nbsp;+91-120-6637501</span>
							</a>
							
						
                        </div>
                    </div>
		  </div>
		 
  
  
  
		<div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:25px;margin-left:20px;"data-toggle="dropdown">
						     <i class="fa fa-user-circle" style='font-size:25'></i>
							 
                           </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:170px;height:230px;margin-left:-70px;margin-top:23px;font-family:'Times New Roman' Times, serif;">

                              <span class="dropdown-item1">
								   <a data-toggle="modal" data-target="#myModal" style='cursor:pointer;color:#3498DB;margin-left:20px' >LOGIN/REGISTER</a>
							   </span><br>
							   <a href="" class="dropdown-item">
									<span><b>My Activity</b></span>
								</a>
								
								<a href="" class="dropdown-item">
									<span>Recently Searched</span>
								</a>
								
								<a href="" class="dropdown-item">
									<span>Recently Viewed</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Shortlisted</span>
								</a>
								<a href="" class="dropdown-item">
									<span>Contacted</span>
								</a>
							
                        </div>
                    </div>
		  </div>
		
		
	</nav>
	<div class="container-fluid">
    <div class="row" style="margin-top:2%">
	   <div class="col-sm-12">
	       <div class="row">
		     <div class="col-sm-7">
			     <div class="row">
				    <div class="col-sm-12">
					    <center><h6  style="color:gray;">REACH UPTO 42LACS BUYERS</h6></center>
			 
					</div>
					 <div class="col-sm-12">
					    <center><h3  ><b>Sell or Rent your Property on 99acers</b></h3></center>
			 
					</div>
					<div class="col-sm-12">
		                      <center>
							  <img src="http://localhost/99acres/images/ownerTopBannerBosV2.png" height="550px">	
                              
							  </center>							  
					
					</div>
				 </div>
			    
			 </div>
			 <div class="col-sm-4 card" id='left_property_posted_form'style="height:350px;margin-top:3%;border-radius:0px" >
			     <div class="row" >
				   <div class="col-sm-12 card-header">
				       <h6 style='font-weight:bold'>Fill out basic details</h6>
				   </div>
				   <div class="col-sm-12"style="margin-top:5%">
				       <h6>You're looking to.....</h6>
				   </div>
				  
				    <div class="col-sm-12"style="margin-top:2%">
				     
						   
 							  <input type='radio' style='transform: scale(1.5);' name='looking_for'required value="Sell" >&nbsp;&nbsp;&nbsp;&nbsp;&nbspSell&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						     <input type='radio' style='transform: scale(1.5);'name='looking_for'required value="Rent" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						     <input type='radio'style='transform: scale(1.5);' name='looking_for'required value="PG">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					 
				   </div>
				    <div class="col-sm-12"style="margin-top:7%">
				        <h6>And it's a...</h6>
				    </div>
					<div class="col-sm-12"style="margin-top:2%">
				      
						   <input type='radio' style='transform: scale(1.5);'name='type_of_property'required  value="Residential">&nbsp;&nbsp;&nbsp;&nbsp;&nbspResidential&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						
						   <input type='radio'style='transform: scale(1.5);' name='type_of_property'required  value="Commercial">&nbsp;&nbsp;&nbsp;&nbsp;&nbspCommercial&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
						
				   </div>
				   <div class="col-sm-12" style="margin-top:8%">
				   
				     
					    <button class='btn btn-primary btn-block py-2'  style='width:63%' data-toggle='modal' data-target='#myModal'>Being to Post your Property</button>
				     
				   </div>
				   
				 </div>
			 </div>
			 <div class="col-sm-1">
			 </div>
		   </div>
	   </div>
	</div>
</div>
<div class="container-fluid">
   <div class="row" style="margin-top:5%">
      <div class="col-sm-12">
	     <center><h6 style="color:gray">HOW TO POST</h6></center>
	  </div>
	   <div class="col-sm-12">
	     <center><h2>Post Your Property in 3 Simple Steps</h2></center>
	  </div>
	  <div class="col-sm-1"></div>
	  <div class="col-sm-3" style="margin:2rem">
	     <div class="row">
		    <div class="col-sm-12">
			   <img src="http://localhost/99acres/images/download.png" height="50px">	
          
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>01.Add details of your property</h5>
			</div>
			<div class="col-sm-12">
			   <p>Being by telling us the few basic details about your property like your property type,location,No.pf rooms etc.</p>
			</div>
		</div>
	                          
	  </div>
	  <div class="col-sm-3" style="margin:2rem">
	      <div class="row">
		    <div class="col-sm-12">
			   <img src="http://localhost/99acres/images/download (1).png" height="50px">	
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>02.Upload photo's and videos</h5>
			</div>
			<div class="col-sm-12">
			   <p>Upload photos and videos of your property either via your desktop device  or from your mobile phone.
			   </p>
			</div>
		 </div>                  
	  </div>
	  <div class="col-sm-3" style="margin:2rem">
	     
          <div class="row">
		    <div class="col-sm-12">
			    <img src="http://localhost/99acres/images/download (2).png" height="50px">
			</div>
			<div class="col-sm-12" style="margin-top:4%">
			   <h5>03.Add pricing & Ownership</h5>
			</div>
			<div class="col-sm-12">
			   <p>
			   Just update your property's ownership details and your expeced price and  your property is ready for posting
			  </p>
			</div>
		 </div> 		  
                              
	  </div>
      <div class="col-sm-2"></div>
	  
	</div>
	<div class="row">
		 <div class="col-sm-4"></div>
		  <div class="col-sm-4">
			
			 <button class='btn btn-primary btn-block py-2'>Being to Post your Property</button>
			
		  </div>
		  <div class="col-sm-4"></div>
	</div>
	
</div>
<div class="container-fluid">
   
      <div class="row" style="margin-top:2%">
	    <div class="col-sm-1">
		</div>
		<div class="col-sm-10" id="10cardimg">
		      <div class="row">
			    <div class="col-sm-12">
				     <img src="http://localhost/99acres/images/visBannercompress.acecbc0b.png" height="320px">
				
				</div>
		        <div class="col-sm-1"></div>
		        <div class="col-sm-10 card" style="height:400px;margin-top:-130px">
				     <div class="row">
					    <div class="col-sm-12" style="margin-top:5%">
						   <center>
						      <h2>with over 4 million unique visitors every month,your property gets maximum visibility on 99acers</h2>
						    </center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						   <center><p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						  <center> <p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:5%">
						  <center> <p style="color:gray">OVER</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>1M</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>4.5M</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						   <center><h2><b>200k</b></h2></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Property listing</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Monthly searches</p></center>
						</div>
						<div class="col-sm-4"style="margin-top:1%">
						    <center> <p style="color:gray">Owner advertise monthly</p></center>
						</div>
					 </div>
				</div>
				 <div class="col-sm-1"></div>
			</div>
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</div>
<div class="container-fluid">
   <div class="row" style="margin-top:5%">
      <div class="col-sm-12">
	      <div class="row">
		     <div class="col-sm-1"></div>
			 <div class="col-sm-10">
			    <div class="row">
					 <div class="col-sm-6">
					    <div class="row">
						   <div class="col-sm-12">
						      <p style="color:gray">ADITIONAL BENEFITS</p>
						   </div>
						    <div class="col-sm-12">
						      <h3 >And there's lot more to it....</h3>
						   </div>
						   <div class="col-sm-12">
						      <p style="color:gray" >Selling property online was never so easy and is now just a click away.99acers.com,a leading property site to sell / rent your property,brings you the quickest most convenient way for displaying your property advertisement and connection with prospective buyer's</p>
						   </div>
						   <div class="col-sm-12" style="margin-top:2%">
						      <p>
							    <li>Get high visiblity for your property</li>
								<li>Buyer's/tenants can contact you directly</li>
								<li>Customer care support over email,chat and toll free numbers</li>
							  </p>
						  </div>
						  <div class="col-sm-12" style="margin-top:2%">
						      <button class='btn btn-primary btn-block py-2'>Being to Post your Property</button>
			
						  
						  </div>
						</div>
						
					 </div>
					  <div class="col-sm-6">
					 
					  <img src="http://localhost/99acres/images/ppfDeskMob.53c46e7b.png" height="400px">
					
					 </div>
				</div>
			 </div>
			 <div class="col-sm-1"></div>
		  </div>
	  </div>
   </div>
</div>
	  						 
 <div class="container-fluid bg-dark text-light" style="margin-top:3%" >
            <div class="row px-xl-5 pt-5">
                <div class="col-sm-1">

                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                           
                                <h4 class="mb-4 display-5 font-weight-semi-bold"><span class="text-light font-weight-bold">99acres</span></h4>
                            
                                <p>Price Trends</p>
                                <p>Post your property</p>
								<p>Area Converter</p>
                                <p>Articles</p>
								
                        </div>
                        
                    </div>

                    

                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Company</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>About</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Press</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Work Here</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Legal</a>

                                <a class="text-light" href=""><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                            </div>
                        </div>
						<div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Our Partners</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Naukri.com - Jobs in India</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Naukrigulf.com - Jobs in middle east</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Jeevansathi.com - Matrimonials</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Brijj.com - Professional Networking</a>

                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <h5 class="font-weight-bold text-light mb-4">Contact us</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Toll Free - 0123456789 Monday - Saturday (9:00AM to 11:00PM IST)</a>
                                <a class="text-light mb-2" href=""><i class="fa fa-angle-right mr-2"></i>Email - kartikjaat5765@gmail.com</a>
                                

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
		
	
			<!---Login Modal start-->
		<?php
		     echo "
			    
					<div class='modal' id='myModal'>
					  <div class='modal-dialog'>
						<div class='modal-content'style='width:800px;margin-left:-150px;margin-right:100px'>

						  <!-- Modal Header -->
						  <div class='modal-header'>
						  <div class='container-fluid'>
						    <div class='row'>
							  <div class='col-sm-3'>
							       <button class='btn btn-primary btn-block py-2'id='login_title' >Login</button>
							       
							   </div>
							    <div class='col-sm-3'>
								<button class='btn btn-default btn-block py-2'id='login_title1'style='background-color:#F1F2F4'>Register</button>
							       
								
							   </div>
							   <div class='col-sm-6'>
							   </div>
							  </div>
							  </div>
						   	
								
								<button type='button'class='close' data-dismiss='modal'>&times;</button>
							  </div>

						  <!-- Modal body -->
						  <div class='modal-body' >
						      <div class='container-fluid'>
								  <div class='row'>
									<div class='col-sm-6'>
									
							           <div class='login-form' id='login_form'>";?>
											<?php
											   echo form_open(base_url()."index.php/Acers/login");
											   $email=get_cookie("login_user");
											   
											   echo form_label("Email:");	
											   if($email!=null){
												 $data=array(
												  "type"=>"email",
												  "name"=>"email",
												  "class"=>"form-control",
												  "required"=>"required",
												  "value"=>$email
												  

												);
											   }
											   else{
												   
												   $data=array(
												  "type"=>"email",
												  "name"=>"email",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter Email"
												  

												);
												   
												   
												   
											   }
											  echo form_input($data)."<br>";
											  echo form_label("Password:");	
												$data=array(
												  "type"=>"password",
												  "name"=>"pass",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter Password"
												  

												);
											  echo form_input($data)."<br>";
											  $data=array(
												  "type"=>"submit",
												  "class"=>"btn btn-primary btn-block py-2",
												  "value"=>"Login"
												  

												);
													echo form_input($data)."<br>";
												  echo form_close();
									
												echo"
										</div>
										
										<div class='login-form' id='login_form1' style='display:none'>";?>
											<?php
											   echo form_open(base_url()."index.php/Acers/sign_up");
											   echo form_label("Name:");	
												$data=array(
												  "type"=>"text",
												  "name"=>"user_name",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter Name"
												  

												);
											  echo form_input($data)."<br>";
											  echo form_label("Email:");	
												$data=array(
												  "type"=>"email",
												  "name"=>"email",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter Email"
												  

												);
											 echo form_input($data)."<br>";
											  echo form_label("Password:");	
												$data=array(
												  "type"=>"password",
												  "name"=>"pass",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter Password"
												  

												);
											  echo form_input($data)."<br>";
											 
											  echo form_label("Retype Password:");	
												$data=array(
												  "type"=>"password",
												  "name"=>"cpass",
												  "class"=>"form-control",
												  "required"=>"required",
												  "placeholder"=>"Enter  Confirm Password"
												  

												);
												
											  echo form_input($data)."<br>";
											  
											  echo form_label("Mobile Number:")."<br>";
							                  ?>
											   <div class="input-group mb-0" >
                                                <div class="input-group-prepend">
												
												<select name='country_code' class="form-control" >
											    <option name='+91'>+91 IND</option>
												<option name='+44'>+44 GBR</option>
												<option name='+1'>+1 USA</option>
												<option name='+61'>+61 AUS</option>
												<option name='+60'>+60 MYS</option>
												<option name='+971'>+971 ARE</option>
												<option name='+93'>+93ALB</option>
												<option name='+355'>+355 DZA</option>
												<option name='+213'>+213ASM</option>
												<option name='+1684'>+1684AND</option>
											  </select>
												
												
											
											</div>
											 <input type="phone" name='phone_number'  class="form-control" placeholder="Enter Phone Number">
											  
										</div>
											
											  <?php
											  echo"<br>";
											  $data=array(
												  "type"=>"submit",
												  "class"=>"btn btn-primary btn-block py-2",
												  "value"=>"Register"
												  

												);
													echo form_input($data)."<br>";
												  echo form_close();
									
												echo"
										</div>
										
										 
										</div>
										<div class='col-sm-6'>
										<div class='row'>
										  <div class='col-sm-12' style='margin-top:5%'>
											 <center>
											 <img src='http://localhost/99acres/images/afeabae645181a677bf23a11aa742a57.png'style='height:180px;border-radius:5%' >
											 </center>
										  </div>
										 <div class='col-sm-12'>
										  <h6 align='center'>We are more than just a company</h6>
										 </div>
										 </div>
										 
										</div>

									 </div>
									
									
																   
									 </div>
									 </div>
									 </div>";
									?>
									 <!---Login Modalend-->
									 
									 
				 

									 <!---Login Modalend-->
															 
									 
									 
<?php
if($this->uri->segment(3)=="registered_successfully"){
	?>
	<script>
	$(document).ready(function(){
		
		 alert("Registration Success");
		
     });	
	</script>
	
	
	<?php	
}
else if($this->uri->segment(3)=="Alredy_registerd"){
?>
   <script>
	$(document).ready(function(){
		
		 alert("An account is alredy registerd with this email");
		
     });	
	</script>

<?php	
	
}
else if($this->uri->segment(3)=="Password_Mismatch"){
?>
   <script>
	$(document).ready(function(){
		
		 alert("Password And Confirm Password Mismatch ");
		
     });	
	</script>

<?php	
	
}
else if($this->uri->segment(3)=="Password_incorrect"){
?>
   <script>
	$(document).ready(function(){
		
		 alert("Invalid Password");
		
     });	
	</script>

<?php	
	
}
else if($this->uri->segment(3)=="Invalid_email"){
?>
   <script>
	$(document).ready(function(){
		
		 alert("The email you entered is invalid");
		
     });	
	</script>

<?php	
	
}
	
	
?>
									 
									 
																		   
								
		
</body>
</html>
<?php	 
	 
 }
 ?>