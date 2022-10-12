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
	         <h3 ><a href="<?=base_url().'index.php/Acers/profile'?>"style='color:white;text-decoration:none'>99acers</a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		 <div class="col-sm-1">
			
		</div>
		<div class="col-sm-8">
			 
		</div>
		
		   <div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown" ><i class="fa fa-headphones" style=";float:right"></i>
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
		 
		<div class="col-sm-1" style="margin-top:7px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown" ><i class="fa fa-user-circle"></i>
                           </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:100px;height:600px;margin-left:-55px;margin-top:25px">

                               <span class="dropdown-item">
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
							    <a  style='cursor:pointer' ><b><?=$name?></b></a>
							   </span>
							    <hr>
								<?php
								   echo"<a href='".base_url()."index.php/Acers/editBuyerProfile' class='dropdown-item'>
									<span>Modify Profile</span></a>";
								
								
								?>
								<a href="" class="dropdown-item">
									<span>Change Password</span>
								</a>
								<?php
								
								echo"<a href='".base_url()."index.php/Acers/logout'class='dropdown-item'>Logout</a>";
								
								?>
								
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
	    <div class="col-sm-1"></div>
		<div class="col-sm-10 card" style="border-radius:5px" >
		   <div class="row">
		     <div class="col-sm-12" style="background-color:#F1F2F4;height:150px">
			     <div class="row" style="margin-top:5%">
				   <div class="col-sm-1">
				      <img src="http://localhost/99acres/images/greenTickDiscoverability.png" height="30px" >
				   
				   </div>
				   <div class="col-sm-6">
				       
				       <h5>Congratulations!Your Free Posting is Live</h5>
					   <p>You get limited benefits with free plan and sell slower than paid plans</p>
				   </div>
				   <div class="col-sm-5">
				       <button class="btn btn-outline-primary py-2" style="float:right;">PREVIEW/EDIT</button>
				   
				   </div>
				 
				 
				 </div>
			   
			 </div>
			 <div class="col-sm-12" style="background-color:#fdf5e6">
				   <div class="row" style="margin-top:2%">
					  <div  class="col-sm-12">
						<h4>Get upto 10X Responses and sell faster</h4>
					  
					  </div>
					   <div  class="col-sm-12">
						<p>Don't miss out on response with your current free plan</p>
					  
					  </div>
				   
				   </div>
				   <div class="row" >
					  <div class="col-sm-1"></div>
					  <div class="col-sm-10 card" >
					    <div class="row"style="height:100px">
							<div class="col-sm-4"style="background-color:#fbe8ce;">
							
							
							</div>
							<div class="col-sm-4"style="background-color:#FFBA61;">
							   <center>
							     <h4 style="color:white;margin-top:12%">SELF SERVICE PLAN</h4>
							   </center>
							
							</div>
							<div class="col-sm-4"style="background-color:orange;">
							  <center>
							    <h4 style="color:white;margin-top:12%">ASSISTED PLAN</h4>
							  </center>
							
							</div>
						
						
						
						
						</div>
						<div class="row">
						<div  class="col-sm-2 card" style="border-radius:0px">
						  <div class="row">
							 <div class="col-sm-12" style="height:80px">
							   <p align="center">Plan Benefits</p>
							 
							 </div>
							
						  
						  </div>
						  <div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12" style="margin-top:6%">
							   <p style="font-size:12px">Be more visible to buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">increase in Buyer Response</p>
							 
							 </div>
							
						  
						   </div>
						  <div class="row"style="height:70px;background-color:#f0f8ff">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Relationship Manager in selling</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row"style="height:70px">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Reach buyer Facebook and Google platforms</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Premium listing,standout with larg Photos & Slideshow</p>
							 
							 </div>
							
						  
						  </div>
						  <div class="row" style="height:90px">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Free Verficatioon & Photoshoot of your property*</p>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Plan duration</p>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">Plan Cost</p>
							 
							 </div>
							
						  
						   </div>
					  </div>
					  <div  class="col-sm-2 card"style="border-radius:0px">
						 <div class="row">
							 <div class="col-sm-12"style="height:80px">
							   <p align="center">Free(Active)</p>
							 
							 </div>
						  
						  </div>
						  
						  <div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">visible to  14% buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						  <div class="row" style="height:70px;background-color:#f0f8ff">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						  <div class="row"style="height:90px">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
							     <p style="font-size:12px">4 Month</p>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							 <center>
							    <p style="font-size:12px">Free</p>
							</center>
							 
							 </div>
							
						  
						   </div>
					  </div>
					  <div  class="col-sm-2 card" style="border-radius:0px">
						  <div class="row">
							 <div class="col-sm-12"style="height:80px">
							   <p align="center">Advanced</p>
							 
							 </div>
						     
						  </div>
						  <div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">visible to  59% buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:10%">
							   <p align="center">UPTO 5X</p>
							 
							 </div>
							
						  
						   </div>
						  <div class="row" style="height:70px;background-color:#f0f8ff">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						  <div class="row"style="height:90px">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
							     <p style="font-size:12px">4 Month</p>
							  </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
            						 <p style="font-size:12px">2999</p>
							  </center>
							 
							 </div>
							
						  
						   </div>
						  
					  </div>
					  <div  class="col-sm-2 card" style="border-radius:0px">
						  <div class="row">
							 <div class="col-sm-12"style="height:80px">
							   <p align="center">Advanced Plus</p>
							 
							 </div>
						  
						  </div>
						  <div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">visible to  73% buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							<div class="col-sm-12" style="margin-top:10%">
							   <p align="center">UPTO 8X</p>
							 
							 </div>
							
						  
						   </div>
						  <div class="row" style="height:70px;background-color:#f0f8ff">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						  <div class="row"style="height:90px">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
							     <p style="font-size:12px">4 Month</p>
								</center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							    <center>
								  <p style="font-size:12px">5898</p>
								 </center>
							 
							 </div>
							
						  
						   </div>
					  </div>
					  <div  class="col-sm-2 card" style="border-radius:0px">
							<div class="row">
								 <div class="col-sm-12"style="height:80px">
								   <p align="center">Assist</p>
								 
								 </div>
						  
						    </div>
							<div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">visible to  85% buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:10%">
							   <p align="center">UPTO 6X</p>
							 
							 </div>
							
						  
						   </div>
						  <div class="row" style="height:70px;background-color:#f0f8ff">
							<div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-close"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						  <div class="row"style="height:90px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							    <center>
								  <p style="font-size:12px">4 Month</p>
								</center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
							     <p style="font-size:12px">11999</p>
								</center>
							 
							 </div>
							
						  
						   </div>
							
						  
					  </div>
					  <div  class="col-sm-2 card" style="border-radius:0px">
							<div class="row">
								 <div class="col-sm-12"style="height:80px">
								   <p align="center">Assist Plus</p>
								 
								 </div>
						  
						    </div>
							<div class="row" style="height:70px;background-color:#e8f4f7">
							 <div class="col-sm-12"style="margin-top:6%">
							   <p style="font-size:12px">visible to  97% buyers</p>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:10%">
							   <p align="center">UPTO 10X</p>
							 
							 </div>
							
						  
						   </div>
						  <div class="row" style="height:70px;background-color:#f0f8ff">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:70px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						   <div class="row" style="height:90px;background-color:#e8f4f7">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						  </div>
						  <div class="row"style="height:90px">
							 <div class="col-sm-12" style="margin-top:14%">
							   <center>
							     <i class="fa fa-check"></i>
							   </center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							    <center>
								  <p style="font-size:12px">4 Month</p>
								</center>
							 
							 </div>
							
						  
						   </div>
						    <div class="row" style="height:90px">
							 <div class="col-sm-12">
							   <center>
							     <p style="font-size:12px">17998</p>
							  </center>
							 
							 </div>
							
						  
						   </div>
					  </div>
						
						</div>
					  
					  
					  </div>
					  <div class="col-sm-1"></div>
				   
				   </div>
				 
				 
				 </div>
		      
		   
		   </div>
		</div>
		<div class="col-sm-1"></div>
		
		
    </div>

</div>
		
	
																   
								
									
  
  </body>
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 		
</body>
</html>
<?php	 
	 
 }
 ?>