<?php
 $email=get_cookie("login_user");
 $pass=$this->session->userdata($email);
 if($email!=null && $pass!=null){
?>
 <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>99acres.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  
  <script src="http://localhost/99acres/js/jquery-3.6.0.min.js"></script>
 </head>
 <body>
 
 
 
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  
  <script src="http://localhost/99acres/js/jquery-3.6.0.min.js"></script>
   <style>
  body{
	   font-family: "Times New Roman", Times, serif;
	  
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
    margin-left: 115;
	margin-top:-30;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 0px 8px 0px;
    font-size:12px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
	 
   
}

#about_society {
    display: inline-block;
    padding: 3px 10px;
    margin: 5px;
    background-color: #1ccaa7;
    color: #fff;
    text-align: center;
    border: 1px solid #16A085;
    border-radius: 25px !important;
    font-size: 14px;
    font-weight: 600;
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
		setInterval(function(){
			var src1=$("#cover_img_code").attr("rel");
			var src2=$("#bedroom_img_code").attr("rel");
			
			var src3=$("#bathroom_img_code").attr("rel");
			
			$("#cover_img_code").attr("src","http://localhost/99acres/property_user_img/"+src2+".jpg");
			
			$("#bedroom_img_code").attr("rel",src3);
			$("#bathroom_img_code").attr("rel",src1);
			$("#cover_img_code").attr("rel",src2);
			var border_color=$("#cover_img_code").attr("rel2");
			
			var border=parseInt(border_color)-1;
			$("#img_footer_"+border).css("border-color","#F1F2F4");
			if(border_color==4){
				border_color=1;
			}
			$("#img_footer_"+border_color).css("border-color","#3399CC");
			
			$("#cover_img_code").attr("rel2",parseInt(border_color)+1);
			
			
			
		},3000);
		$("#prop_des_more").on("click",function(){
			 $("#long_des").hide();
			 $("#short_des").show();
			
			
		});
		$("#prop_des_less").on("click",function(){
			 $("#long_des").show();
			 $("#short_des").hide();
			
			
		});
		$("#user_message").keyup(function(){
			
			$("#required_text").text(400-$(this).val().length);
			
			
		});
		
	  
  });
  
  </script>
 </head>
 <body style='height:1000px'>
 <nav class="navbar sticky-top" style="background-color:#004E8F;">
  
	    <div class="col-sm-1">
	         <h3 ><a href="<?=base_url()."index.php/Acers/index"?>"style="color:white;text-decoration:none"><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		 <div class="col-sm-1">
		    
		  </div>
		<div class="col-sm-6">
			 <div class="input-group mb-0">
					
					<input type="text" class="form-control" style=';border:none;margin-left:100px;transform: scale(1.1);margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
					</div>
					
           </div>
		</div>
		
		  <div class="col-sm-1">
		    
		  </div>
		 <div class="col-sm-1">
		  
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:15px;color:white;margin-left:20px;text-decoration:none;margin-top:-50px" ><b>Post&nbsp;Property</b>
             
			 </a>
			 <span class='radioInput_textOnly__1r7GL_free_plan'><b>Free</b></span> 

                        
		  </div>
		   <div class="col-sm-1" >
		     <div class="nav-item dropdown" style="color:white;">
                         <a style="cursor:pointer;font-size:17px;margin-left:65px;"data-toggle="dropdown" >
						 <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin-bottom:8px"></i>
						  </i>  
						   
						   </a>
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:45px">
                           
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
		 
		<div class="col-sm-1">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:25px;margin-left:20px;"data-toggle="dropdown" ><i class="fa fa-user-circle"></i>
                           </a>
                        <div class="dropdown-menu position-absolute"  id="more_property_details"style="width:100px;height:600px;margin-left:-55px;margin-top:25px">

                               <span class="dropdown-item">
								   <a data-toggle="modal" data-target="#myModal" style='cursor:pointer' >Login/Register</a>
							   </span>
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
 <!--- body part  start---------------------------------------------------------->
 <?php
 $prop_id;
    if(isset($_REQUEST['pid'])){
		$prop_id=$_REQUEST['pid'];
		$prop_city;
		$prop_aprtment;
		$prop_cover_img_code;
		$prop_age;
		$prop_owner_email;
		$prop_owner_name;
		$prop_price;
		$prop_price_per_sqft;
		$prop_type;
		$prop_num_bathroom;
		$prop_num_bedroom;
		$prop_num_balconies;
		$prop_floor;
		$prop_des;
		$prop_bedroom_img_code;
		$prop_bathroom_img_code;
		$prop_type_of;
		$prop_carpet_area;
		$prop_ownership;
		$prop_count;
		$this->db->select("*");
		$this->db->from('99acers_user_property_profile');
		$this->db->where('prop_code',$prop_id);
		foreach($this->db->get()->result() as $row){
			$prop_price=$row->prop_price;
			$prop_price_per_sqft=$row->prop_price_per_sqft;
			$prop_type=$row->prop_type;
			$prop_num_bathroom=$row->prop_num_bathroom;
			$prop_type_of=$row->type_of_prop;
			$prop_city=$row->prop_city;
			$prop_aprtment=$row->prop_aprtment;
			$prop_carpet_area=$row->prop_carpet_area;
			$prop_num_bedroom=$row->prop_num_bedroom;
			$prop_num_balconies=$row->prop_num_balconies;
			$prop_floor=$row->prop_num_floor;
			$prop_age=$row->prop_age;
			$prop_ownership=$row->prop_ownership;
			$prop_des=$row->prop_des;
			$prop_owner_email=$row->prop_owner_email;
			
		}
		$this->db->select("name");
		$this->db->from('user');
		$this->db->where('email',$prop_owner_email);
		foreach($this->db->get()->result() as $row){
			$prop_owner_name=$row->name;
			
		}
		$this->db->select("*");
		$this->db->from('99acers_user_property_profile');
		$this->db->where('prop_owner_email',$prop_owner_email);
		$prop_count=count($this->db->get()->result());
		$this->db->select("img_code");
		$this->db->from('cover_image');
		$this->db->where('property_code',$prop_id);
		foreach($this->db->get()->result() as $row){
			$prop_cover_img_code=$row->img_code;
			
		}
		$this->db->select("img_code");
		$this->db->from('bedroom_image');
		$this->db->where('property_code',$prop_id);
		foreach($this->db->get()->result() as $row){
			$prop_bedroom_img_code=$row->img_code;
			
		}
		$this->db->select("img_code");
		$this->db->from('bathroom_image');
		$this->db->where('property_code',$prop_id);
		foreach($this->db->get()->result() as $row){
			$prop_bathroom_img_code=$row->img_code;
			
		}
		$twenty_percent=($prop_price*20)/100;
		$eighty_percent_of_total_price=$prop_price-$twenty_percent;//2000000
		$one_year_interest=10.5/12/100;
		$emi=$eighty_percent_of_total_price*$one_year_interest*(5.44123824653)/(4.44123824);
		
	    
 ?>
    <div class='container-fluid'>
	   <div class='row' style='margin-top:2%'>
	        <div class='col-sm-12'>
			   <div class='row'>
			     <div class='col-sm-1'></div>
				 <div class='col-sm-11'>
				     <div class='row'>
					    <div class='col-sm-3'>
						<?php
						  if($prop_price>=1000000){
						
						?> 
						  <div class='row'>
                             <div class='col-sm-8'>
							  <h1>₹&nbsp;<b><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</b></h1>
                         
							 </div>
							 <div class='col-sm-4' style='margin-top:7%'>
							  <h6 style='color:gray'>@&nbsp;<?=$prop_price_per_sqft?>&nbsp;per&nbsp;sq.ft.</h6>


							 </div>
							 <div class='col-sm-12'>
							     
							     <p style='color:#3399CC;cursor:pointer'>Estimated EMI&nbsp;&nbsp;₹<span><?=intval($emi)?></span></p>
							 
							 </div>
						  </div>
						  
						  
						<?php
						  }
						?>
						</div>
						<div class='col-sm-1'>
						
						<hr style="transform:rotate(90deg);width:130px;margin-top:50px;">
					
						
						</div>
						<div class='col-sm-6'>
						    <div class='row'>
							   <div class='col-sm-12'>
							       <h3><?=$prop_type?>&nbsp;&nbsp;<?=$prop_num_bathroom?>&nbsp;Baths</h3>
							   </div>
							   <div class='col-sm-12'>
							       <p style='color:gray'><?=$prop_type_of?>&nbsp;Aprtment for sale</p>
							   </div>
							   <div class='col-sm-12' style='margin-top:-20px'>
							       <p style='color:gray'>in&nbsp;<?=$prop_aprtment?>,&nbsp;<?=$prop_city?></p>
							   </div>
							
							</div>
						
						</div>
						<div class='col-sm-2'>
						     <div class='row'>
							    <div class='col-sm-12'>
								<button class='btn btn-primary py-2 btn-block' style='float:right'>CONTACT OWNER</button>
						    
								</div>
								<div class='col-sm-12' style='margin-top:2%'>
								<button class='btn btn-outline-warning py-2 btn-block' style='float:right'><i class='fa fa-star' style='margin:.15rem;float:left'></i>SHORTLIST</button>
						
								</div>
							 </div>
						    
							
						
						
						</div>
					 
					 </div>
				 
				 </div>

			   
			   </div>
			
			<hr>
			</div>
	   
	   </div>
<!----- header  part end --------------------------------------------------------------------->
<!---xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----->
<!----- middle part start--------------------------------------------------------------------->
    <div class='row' style='margin-top:3%'>
	    <div class='col-sm-1'></div>
		<div class='col-sm-11'>
		   <div class='row'>
		      <div class='col-sm-5 card' style='border-radius:0px'>
			     <div class='row'>
				    <div class='col-sm-12 card-header'>
					 <h5>Property(3)</h5>
					
					</div>
					<div class='col-sm-12 card-body'>
					   <div class='row'>
					      <div class='col-sm-12'>
						     <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg" id='cover_img_code' rel='<?=$prop_cover_img_code?>' rel2='2' class="img-fluid" style="height:350px">
					
						  
						  </div>
						   <div class='col-sm-12'style='display:none'>
						        <img src="http://localhost/99acres/property_user_img/<?=$prop_bedroom_img_code?>.jpg" id='bedroom_img_code'class="img-fluid" rel='<?=$prop_bedroom_img_code?>'style="height:100px;border:2px solid #F1F2F4">
						
						  
						  </div>
						  <div class='col-sm-12' style='display:none'>
						      <img src="http://localhost/99acres/property_user_img/<?=$prop_bathroom_img_code?>.jpg" id='bathroom_img_code'class="img-fluid" rel='<?=$prop_bathroom_img_code?>' style="height:100px;border:2px solid #F1F2F4">
						
						  </div>
						 
					   </div>
					 	   
					</div>
					<div class='col-sm-12' style='height:1px;background-color:#F1F2F4'>
					</div>
				 
				 </div>
				 <div class='row' style='margin-top:2%'>
				    <div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg"id='img_footer_1' class="img-fluid" style="height:100px;border:3px solid #F1F2F4">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bedroom_img_code?>.jpg" id='img_footer_2'class="img-fluid" style="height:100px;border:3px solid #F1F2F4">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bathroom_img_code?>.jpg" id='img_footer_3'class="img-fluid" style="height:100px;border:3px solid #F1F2F4">
						
					</div>
					
				 
				 </div>
			  
			  
			  </div>
			   <div class='col-sm-1'> </div>
			  
			   <div class='col-sm-5'>
			      <div class='row'>
				     <div class='col-sm-12  card-header'>
					    <div class='row'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/958-9580505_png-file-svg-per-square-foot-icon.png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Area</b></p>
										</div>
									  </div>
									  <div class='row'>
									    <div class='col-sm-8'>
										   <h6>Carpet Area&nbsp;<span style='color:#3399CC;'><?=$prop_carpet_area?></span></h6>
										</div>
										<div class='col-sm-4'>
										
										     <div class="nav-item dropdown" >
												<a style="cursor:pointer;font-size:17px;color:#3399CC;float:left;margin-top:-5"data-toggle="dropdown" ><span>Sq.ft.</span>
												 
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
										  </div>
																 
															  
								  </div>
							   
							   
							   </div>
							
							</div> 
							<div class='col-sm-6'>
							    <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/1847182-200.png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Configuration</b></p>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-12'>
										    <h6><?=$prop_num_bedroom?>&nbsp;Bedrooms,<?=$prop_num_bathroom?>&nbsp;Bthrooms,<?=$prop_num_balconies?>&nbsp;Balcony</h6>
									  </div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							   
							
							</div>
						
						</div>
					 
					 </div>
					 <div class='col-sm-12  card-header' style='margin-top:3%'>
					    <div class='row'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/16-161575_price-free-download-and-tag-icon.png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Price</b></p>
										</div>
									  </div>
									  <div class='row'>
									    <div class='col-sm-12'>
										<?php
										
										if($prop_price>=1000000){
										
										?>
										   <h6><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</h6>
										   
										   <?php
										}
										else if($prop_price>=100000){
										?>
										  <h6><?=$prop_price[0]?>.<?=$prop_price[1].$prop_price[2]?>&nbsp;Lac</h6>
										   
										
										<?php
										}
										else if($prop_price>=10000){
										?>
                                        <h6><?=$prop_price[0].$prop_price[1]?>&nbsp;K</h6>
										  


                                      <?php										
											
											
										}
										else{
										?>
                                        <h6><?=$prop_price[0]?>&nbsp;K</h6>
										



                                        <?php										
											
											
											
										}
										
										?>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-6'>
							    <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/download (5).png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Address</b></p>
										</div>
									  </div>
									   <div class='row'>
									    <div class='col-sm-12'>
										    <p style='color:gray'><?=$prop_aprtment?>,&nbsp;<?=$prop_city?></p>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
						
						</div>
					 
					 </div>
					 <div class='col-sm-12  card-header' style='margin-top:3%'>
					    <div class='row'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/258148.png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Floor Number</b></p>
										</div>
									  </div>
									  <div class='row'>
									    <div class='col-sm-12'>
										    <h6><?=$prop_floor?>&nbsp;Floors</h6>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-6'>
							    <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-2'>
										   <img src="http://localhost/99acres/images/download (7).png" style='height:30px'>
										</div>
										<div class='col-sm-10'>
										   <p><b>Property Age</b></p>
										</div>
									  </div>
									   <div class='row'>
									    <div class='col-sm-12'>
										  <h6><?=$prop_age?></h6>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
						
						</div>
					 
					 </div>
				  
				  
				  </div>
			  
			  
			  </div>
		   	   <div class='col-sm-1'> </div>
		   </div>
		
		
		</div>
	
	
	
	
	</div>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- why should you consider this property part start------------------------------------------------->
<div class='row' style='margin-top:2%'>
   <div class='col-sm-12'>
      <div class='row'>
	     <div class='col-sm-1'></div>
		 <div class='col-sm-11'>
		   <div class='row'>
		     <div class='col-sm-12' style='margin-bottom:1%'><b>Why should you consider this property?</b></div>
		      <div class='col-sm-2' id='about_society'>Fresh Construction</div>
			  <div class='col-sm-2'id='about_society'>Gated Society</div>
			  <div class='col-sm-2'id='about_society'>Overlooking Park/Garden</div>
			  <div class='col-sm-2'id='about_society'>Wheel Chair Friendly</div>
			  <div class='col-sm-2'id='about_society'>Pet Friendly</div>
			  <div class='col-sm-2'id='about_society'>Full Power Backup</div>
			  <div class='col-sm-2'id='about_society'>24*7 Water</div>
		      <div class='col-sm-2'id='about_society'>Visitor Parking Available</div>
		      <div class='col-sm-2'id='about_society'>Air Conditioned</div>
		      <div class='col-sm-2'id='about_society'>On-Call Maintenance Staff</div>
		      <div class='col-sm-2'></div>
		      <div class='col-sm-2'></div>
		   
		   </div>
		 </div>
		 
		 
		 
	  
	  
	  </div>
   
   
   </div>
   <div class='col-sm-12'>
      <hr>
   </div>
   



</div>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!---- about ownership and property description part start------------------------------------------>
   <div class='row' style='margin-top:1%;'>
       <div class='col-sm-12'>
	      <div class='row'>
		      <div class='col-sm-1'></div>
		     <div class='col-sm-11'>
			    <div class='row'>
				   <div class='col-sm-3'>Property Ownership:<span style='color:gray'><?=$prop_ownership?></span></div>
				   <div class='col-sm-3'>Furnishing:<span style='color:gray'>Furnished</span></div>
				   <div class='col-sm-3'>Parking:<span style='color:gray'>1 Covered</span></div>
				   <div class='col-sm-3'>Power Backup:<span style='color:gray'>Yes</span></div>
				
				</div>
			   
			 
			 </div>
		  
		  
		  </div>
	   
	   
	   </div>
       <div class='col-sm-12'>
	     <hr>
	   </div>
   
   
   
   </div>



<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!--- about property details part start------------------------------------------------------------->
   <div class='row' style='margin-top:1%'>
      <div class='col-sm-12'>
	    <div class='row'>
		   <div class='col-sm-1'></div>
		   <div class='col-sm-11'>
		      <div class='row'>
			     <div class='col-sm-12'>
				    <b style='color:gray'>About Property</b>
				 </div>
				 <div class='col-sm-12'>
				    <b style='color:gray'>Address:&nbsp;<?=$prop_aprtment?>,&nbsp;<?=$prop_city?></b>
				 </div>
				  <div class='col-sm-12'>
				    <?php
					   
					   if(strlen($prop_des)>150){
						     $prop_des_short='';
							 for($i=0;$i<149;$i++){
								 $prop_des_short=$prop_des_short.$prop_des[$i];
								 
							 }
						   ?>
						     <b style='color:gray' id='long_des'><?=$prop_des_short?>.....<span style='cursor:pointer;color:black' rel='<?=$prop_des?>' id='prop_des_more'>&nbsp;More</span></b>
						     
							 <b style='color:gray;display:none' id='short_des'><?=$prop_des?><span style='cursor:pointer;color:black' rel='<?=$prop_des_short?>'id='prop_des_less'>&nbsp;Less</span></b>
						   
						   
						   <?php
						   
					   }
					   else{
						   
					?>
				        <b style='color:gray'><?=$prop_des?></b>
					<?php
					
					   }
					
					?>
				 </div>
				  
			  
			  </div>
		   
		   
		   </div>
		
		</div>
	  
	  
	  </div>
      <div class='col-sm-12'>
	     <hr>
	  
	  </div>
   
   
   
   </div>





<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- owner details part sart----------------------------------------------------------------------->
  <div class='row card-header'>
     <div class='col-sm-12'>
	    <div class='row'>
		   <div class='col-sm-1'></div>
		   <div class='col-sm-11'>
		      <div class='row'>
			    <div class='col-sm-4 '>
				   <div class='row'>
				     <div class='col-sm-12 card-body'>
					    <b><h4>Owner Details</h4></b>
					 
					 </div>
					 <div class='col-sm-5' style='margin-top:2%'>
					        <img src="http://localhost/99acres/images/owner_pnava (1).png" style='height:130px'>
					 
					 </div>
					 <div class='col-sm-7' style='margin-top:2%'>
					        <h4><?=$prop_owner_name?></h4>
							<h6>Owner</h6>
							<br>
							<button class='btn btn-primary py-2' style='border-radius:0px;background-color:#59CDB5;border-color:#59CDB5'>VIEW PHONE NUMBER</button>
					 </div>
					 <div class='col-sm-12' style='margin-top:2%'>
					        <a style='color:#3399CC;cursor:pointer'>Property Listed&nbsp;<?=$prop_count?></a>
					 </div>
				   
				   </div>
				
				</div>
				<div class='col-sm-2'></div>
				<div class='col-sm-3'>
				   <div class='row'>
				      <div class='col-sm-12'>
					     <b style='color:gray'><h3>Send enquiry to Owner</h3></b>
					  
					  </div>
					 
					 <div class='col-sm-12'>
					      <input type='text' class='form-control' style='border-radius:0px' placeholder='NAME'>
					  </div>
					  <div class='col-sm-12' style='margin-top:10px'>
					      <input type='email' class='form-control' style='border-radius:0px' placeholder='EMAIL'>
					  </div>
					  <div class='col-sm-12' style='margin-top:10px'>
					      <div class="input-group mb-0" >
							<div class="input-group-prepend">
								<select name='country_code' class="form-control"style='border-radius:0px' >
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
							   <input type="phone" name='phone_number'  class="form-control" style='border-radius:0px' placeholder="MOBILE">
						   </div>
					  
					  
					  </div>
					  <div class='col-sm-12' style='margin-top:10px'>
					     <button class='btn btn-primary py-2 btn-block' style='border-radius:0px'>SEND</button>
					  
					  
					  </div>
				   
				   </div>
				
				</div>
				<div class='col-sm-3'>
				   <div class='row' style='margin-top:40'>
				      <div class='col-sm-12'>
					     <textarea class='form-control' id='user_message'rows='5' style='resize:none;border-radius:0px' placeholder='I am interested in this property'></textarea>
					     <p style='float:right'><span id='required_text'>400</span>&nbsp;Chars</p>
					  
					  </div>
				   
				   
				   
				   </div>
				
				
				</div>
				
			  
			  
			  
			  </div>
		   
		   </div>

		
		</div>
	 
	 
	 </div>
    
  
  </div>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->




	
	
	</div>
 <?php
	}
 
 ?>
 </body>
 </html>
	 
	 <?php
 } 
 ?>