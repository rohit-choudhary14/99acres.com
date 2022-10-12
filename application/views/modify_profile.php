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
#more_property_details{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
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
  
  </style>
 <script>
   $(document).ready(function(){
	 $("#save_profile").on("click",function(){
      var name=$("#user_name").val();
	   var phone=$("#phone_number").val();
	   var phone_code=$("select").val();
	   $.post(
	  "http://localhost/99acres/index.php/Acers/edit_profile",{name:name,phone:phone,phone_code:phone_code},function(data){
		  if(data.trim()=="updated_Succesfully"){
			 
			  $("#set_name").html("Welcome&nbsp;&nbsp;"+name+"");
			  
		  }
		   
	   }
	   
	   
	   );
	   

	 });
	 var current_password="";
	 var new_password="";
	 var confirm_password="";
	  $("#current_password").keyup(function(){
         current_password=$(this).val();
		 if(current_password.length>0){
			
				 if(<?=$pass?>!=current_password){
					 $("#password_error").show();
					  $("#save_password").attr("disabled","disabled");
					 
				 }
				 else{
					 
					  $("#password_error").hide();
					  $("#save_password").removeAttr("disabled");
					 
				 }
				 
		 }
	  });
	  $("#new_password").keyup(function(){
		  new_password=$(this).val();
		  if(new_password!=confirm_password){
		  
		    $("#save_password").attr("disabled","disabled");
					 
		  
	      }
		  else{
			  $("#save_password").removeAttr("disabled");
			
			  
			  
		  }
		  
		  
	  });
     $("#confirm_password").keyup(function(){
         confirm_password=$(this).val();
		 if(confirm_password.length>0){
				 if(new_password!=confirm_password){
					 $("#confirm_password_error").show();
					 $("#save_password").attr("disabled","disabled");
					 
					 
				 }
				 else{
					  $("#confirm_password_error").hide();
					  $("#save_password").removeAttr("disabled");
					 
				 }
				 
		 }
	  });
	  $(".fa.fa-trash").on("click",function(){
		  var prop_id=$(this).attr("rel");
		  
		 $.post(
			    "http://localhost/99acres/index.php/Acers/property_status_change_for_delete",{prop_id:prop_id},function(data){
				 
				 if(data.trim()=='Deleted'){
					 $("#delete_property-"+prop_id).removeClass("fa fa-trash")
					 $("#delete_property-"+prop_id).addClass("fa fa-bug");
					  $("#delete_property-"+prop_id).attr("disable");
					  $("#hyp_data_v_"+prop_id).removeAttr("href");
					 
					 
				 }
		});
		  
		  
		  
	  });
	  $(".hyper-link").on("click",function(){
		  var prop_code=$(this).attr("rel");
		  var operation=$(this).attr("rel1");
		  if(operation=='open'){
		     $("#view_responses-"+prop_code).slideDown();
			 $(this).attr("rel1",'close');
		  }
		  else{
			  $("#view_responses-"+prop_code).slideUp();
			 $(this).attr("rel1",'open');
		  }
		  
	  });
	  $(".email_data_get").on("click",function(){
		  var email=$(this).text();
		  var prop_code=$(this).attr("rel");
		 
		  $(".email_data_set").text(email);
		  $(".email_data_set").attr("rel",prop_code);
		  $("#reply_textarea_").val("");
		  $("#msg_length_data_t").text('0');
         
		  
	  });
	  $("#reply_textarea_").keyup(function(){
		  var msg=$(this).val();
		  if(msg.length==0){
			  $(this).css("border-color","red");
			  $("#send_reply").attr("disabled",true);
		  }
		  else if(msg.length>0){
			  $(this).css("border-color","");
			  $("#send_reply").attr("disabled",false);
			 
			  
		  }
		  $("#msg_length_data_t").text(msg.length);
		  
		  
	  }); 
     $("#send_reply").on("click",function(){
            var to_email=$(".email_data_set").text();
		    var prop_code=$(".email_data_set").attr("rel");
			var msg=$("#reply_textarea_").val();
			if(msg.length==0){
			  $("#reply_textarea_").css("border-color","red");
			  $("#send_reply").attr("disabled",true);
		    }
		    else if(msg.length>0 && to_email.length>0 && prop_code.length>0){
			  $("#reply_textarea_").css("border-color","");
			  $("#send_reply").attr("disabled",false);
			  $.post(
			  
			     "http://localhost/99acres/index.php/Acers/sendReply",{msg:msg,to_email:to_email,prop_code:prop_code},function(data){
				
					if(data.trim()=='Message_has_sent'){
						   $("#send_reply").attr("disabled",true);
							   $("#send_reply").html("<i class='spinner-border text-light'></i>");
				
							   setTimeout(function(){
								   
								   $("#send_reply").addClass("btn btn-success py-2 btn-block")
								   $("#send_reply").text("SENT SUCCESSFULLY");
							   
								   
							   },3000);
							   
							   setTimeout(function(){
								    $("#send_reply").text("SEND");
									$("#send_reply").attr("disabled",false);
							        $("#send_reply").removeClass("btn btn-success").addClass("btn btn-primary");
								    $("#reply_textarea_").val("");
							        $("#msg_length_data_t").text('0');
								   
							   },5000);
							     
					}
				 }
			  
			  );
			 
			  
		   }
		    	  
			 


	 });		 
   });
  
  </script>
  </head>
  <body >
  <nav class="navbar sticky-top" style="background-color:#005CA8;">
  
	     <div class="col-sm-1">
	         <h3 style="color:white"><a href='<?=base_url()?>index.php/Acers/home' style="color:#fff;text-decoration:none"><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     
		 </div>
		 <div class="col-sm-2" style='margin-left:50px'>
			<div class="nav-item dropdown" style="color:white;">
				<a style="cursor:pointer;font-size:20px"data-toggle="dropdown" >Buy
					<i class="fa fa-angle-down" ></i></a>
				<div class="dropdown-menu position-absolute"  style="width:900px;height:400px;margin-right:350px">
			   </div>
			</div>
		</div>
		<div class="col-sm-5">
			 <div class="input-group mb-0">
					<!---<div class="input-group-postpend form-control" style='transform:scale(1.1)' >
						<div class="nav-item dropdown">
							<a style="cursor:pointer;font-size:15px;"data-toggle="dropdown" >All Residential
								<i class="fa fa-angle-down" style="float:right;margin-top:4px" ></i></a>
							<div class="dropdown-menu position-absolute"  style="width:900px;height:400px;margin-right:300px">
						    </div>
						</div>
					</div>-->
					<input type="search" class="form-control" style=';border:none;transform: scale(1.1);margn-left:-50px;margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
					</div>
           </div>
		</div>
		
		<div class="col-sm-1">
		  
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:15px;color:#F5F7FA;margin-left:15px;text-decoration:none;margin-top:-50px" ><b>Post&nbsp;Property</b>
             
			 </a>
			 <span class='radioInput_textOnly__1r7GL_free_plan'><b>Free</b></span> 

                        
		  </div>
		 <div class="col-sm-1" style="margin-top:0px">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:65px;"data-toggle="dropdown" >
						 <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin-bottom:8px"></i>
						  </i>  
						   
						   </a>
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:24px">
                           
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
		<div class="col-sm-1" style="margin-top:0px">
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
                        <a style="cursor:pointer;font-size:14px;margin-left:20px;"data-toggle="dropdown" >
						<span class='radioInput_textOnly__1r7GL 'style="background-color:#D7F2E3"><b><?=$name[0]?></b></span> 

						  </a>
                        <div class="dropdown-menu position-absolute"  id="more_property_details"style="width:200px;height:500px;margin-left:-95px;margin-top:24px">

                               <span class="dropdown-item">
							   
							    <a  style='cursor:pointer' ><b><?=$name?></b></a>
							   </span>
							    
								<?php
								   echo"<a href='".base_url()."index.php/Acers/modifyProfile' class='dropdown-item'>
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
<?php
  if(isset($_REQUEST['all_listing'])){
	  ?>
	  <div class='container-fluid' >
	     <div class='row' style='background-color:#FAFBFC;' >
		    <div class='col-sm-1'></div>
			<div class='col-sm-2 ' style='border-radius:0px;'>
			   <div class='row ' >
			   
			     <div class='col-sm-12'  >
				     <div class='row' style='position:fixed'>
					 
					  <div class='col-sm-12' style='boder-radius:50%;display:inline-block;background:linear-gradient(to bottom, #ffffcc 0%, #669999 50%);width:200px;margin-top:-5px;margin-left:-5px'>
					     <div class='row'>
						   <div class='col-sm-12 card-body' style='background:linear-gradient(to bottom, #ffffcc 0%,  50%)'>
								 <img src="http://localhost/99acres/images/owner_pnava (1).png"id="more_property_details" style='border-radius:50%;margin-left:37px' >
								 <br><p style='color:white;margin-left:40'><?=$name?></p>
								 <p style='color:#F1F2F4;margin-left:40;margin-top:-20;font-size:14;align-item:center'>Master user</p>
					              <hr>
					             <div class='row' style='margin-top:20px;overflow:hidden'>
									 <div class='col-sm-12'>
										 <a href=''  style='color:white;'>MY99Acres</a>
									 </div>
									 <div class='col-sm-12' style='margin-top:20px'>
										 <a href=''  style='color:white;'>MANAGE LISTIING</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white;'>All Product</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white;'>Ad Campaigns</a>
									 </div>
							 
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white;'>E-Mailers</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white;'>Banners</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href='' style='color:white'>All Listing</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href='' style='color:white'>Plain Listing</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white'>Basic Listing</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href=''  style='color:white'>Platinum Listing</a>
									 </div>
									 <div class='col-sm-12'style='margin-top:20px'>
										 <a href='' style='color:white'>Premium Listing</a>
									 </div>
							 
								  </div>
								  
							   </div>
					       </div>
						  
					   </div>
					    </div>
					  					
				 </div>
				 
			   
			   </div>
			   
			
			
			
			</div>
			<div class='col-sm-8'style='background-color:#FAFBFC;margin-left:20;' >
			  <div class='row'>
			  <div class='col-sm-12' style='margin-top:10px;margin-bottom:10px;'>
				 <div class='row'>
					  <div class='col-sm-3'>
						<p style='font-size:14'>LEAD&nbsp;SEARCH</p>
						<hr style='transform:rotate(90deg);width:20px;float:right;margin-top:-27'></hr>
								 
					  </div>
					  <div class='col-sm-3'>
						<p style='font-size:14'>BUY OUR SERVICE </p>
						<hr style='transform:rotate(90deg);width:20px;float:right;margin-top:-27'></hr>
						
					  </div>
					  <div class='col-sm-3'>
						<a href="<?=base_url()?>index.php/Acers/Post_property" style='font-size:14;text-decoration:none;color:black'>POST&nbsp;PROPERTY</a>
					    <hr style='transform:rotate(90deg);width:20px;float:right;margin-top:10'></hr>
						
					  </div>
					  <div class='col-sm-3'>
						<p style='font-size:14'>CUSTOMER&nbsp;SERVICE</p>
					  </div>
				  </div>
				  <hr>
			 </div>
			<?php
			  $this->db->select("*");
			  $this->db->from("99acers_user_property_profile");
			  $this->db->where("prop_owner_email",$email);
			  $this->db->order_by("sn","DESC");
			  foreach($this->db->get()->result() as $row){
				    $this->db->select("*");
					$this->db->from("response");
					$this->db->where("prop_code",$row->prop_code);
					$count=count($this->db->get()->result());
					
				     
				   
				  
				  ?>
				  <div class='col-sm-1'></div>
				   <div class='col-sm-10 card-body'style='border-radius:10px;box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);'  >
				   
				      <div class='row card-body' style=';background-color:#FAFBFC;'>
					  
					     <div class='col-sm-12 card-body'  style='background-color:#fff; border:solid 0.5px #fff;'>
						    <div class='row'>
							  <div class='col-sm-12'>
							  <?php
							  if($row->status==1){
							  ?>
						         <a href='<?=base_url()?>index.php/Acers/view_property?pid=<?=$row->prop_code?>' id='hyp_data_v_<?=$row->prop_code?>'style='color:gray;text-decoration:none'><?=$row->prop_type?>&nbsp;Aprtment for sale in &nbsp;<?=$row->prop_aprtment?>&nbsp;</a><span style='background-color:#FFA500;color:white;padding:4px 4px 4px;font-weight:bold'>Plain</span> <i class='fa fa-trash' rel='<?=$row->prop_code?>' id='delete_property-<?=$row->prop_code?>' style='float:right;cursor:pointer;color:gray' ></i>
						     
							 <?php
							  }
							  else{
							 ?>
							 <h6 style='color:gray'><?=$row->prop_type?>&nbsp;Aprtment for sale in &nbsp;<?=$row->prop_aprtment?>&nbsp;<span style='background-color:#FFA500;color:white;padding:4px 4px 4px;font-weight:bold'>Plain</span> <i class='fa fa-bug' style='float:right;cursor:pointer;color:gray' ></i></h6>
						     
							 
							 <?php
							  }
							 ?>

							 </div>
							  <div class='col-sm-3'>
							  <?php
							     if($row->prop_price>1000000 && $row->prop_price<10000000){
							  ?>
							     <p style='color:gray;font-size:14px'>Price&nbsp;RS&nbsp;<?=$row->prop_price[0].$row->prop_price[1]?>.<?=$row->prop_price[2].$row->prop_price[3]?>&nbsp;LAC</p>
								 <hr style='transform:rotate(90deg);width:20px;margin-top:-25px;float:right'></hr>
								 
							<?php
								 }
								 else{
									?>
									
									 <p style='color:gray;font-size:14px'>Price&nbsp;RS&nbsp;<?=$row->prop_price[0]?>&nbsp;LAC</p>
								 
									 
								<?php	 
								 }
							?>
							  </div>
							  
							   <div class='col-sm-9'>
							     <p style='color:gray;font-size:14px'>Super Built Up Area:&nbsp;<?=$row->prop_carpet_area?>&nbsp;SQ.FT.</p>
							   
							   </div>
							   <div class='col-sm-12'>
							   <?php
							     if($row->status==1){
							   ?>
							     <p style='color:gray;font-size:14px'><?=$row->prop_code?>:<span style='color:#00DC6D'>ACTIVE</span></p>
							    
								<?php
								 }
								 else{
									?>
                                      <p style='color:gray;font-size:14px'><?=$row->prop_code?>:<span style='color:red'>NOT-ACTIVE</span></p>
                                    <?php										 
								 }
							   ?>
							   </div>
							   <?php
							     if($count>0){
							   
							   ?>
							    <div class='col-sm-12'>
							       <a href='javascript:void(0);'class='hyper-link' rel='<?=$row->prop_code?>'   rel1='open'style='font-size:13px;text-decoration:none'  ><?=$count?>&nbsp;View Responses</a>
							   
							    </div>
								<?php
								 }
								 else{
									?> 
									  <div class='col-sm-12'>
										   <a href='javascript:void(0);' disabled    style='font-size:13px;text-decoration:none'  ><?=$count?>&nbsp;View Responses</a>
									   
									</div>
									 
								<?php
								 }								
								?>
							   <div class='col-sm-12'>
							     <img src='<?=base_url()?>/images/tip.png'>
								 <p style='margin-left:20px;margin-top:-10px'>Need more buyers/tenants for your property, simply</p>
							   
							   
							   </div>
							</div>
						 </div>
						 
					  
					  </div>
				   
				   
				   </div>
				   
				   <div class='col-sm-1'></div>
				   <div class='col-sm-12' style='height:20px'></div>
				   <!-- see response start-->
				   <div class='col-sm-1'></div>
				   <div class='col-sm-10 'style='margin-top:auto;margin-bottom:20;border-radius:10px;box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);'  >
				     <div class='row'>
					 
					   <div class='col-sm-12  card ' id='view_responses-<?=$row->prop_code?>' style='display:none;border-radius:10;height:300px;overflow:auto;background-color:#FAFBFC;'>
					    
					   <?php
					  $res=$this->db->get("user")->result();
					  foreach($res as $row1){
						$this->db->select("*");
						$this->db->from("response");
						$this->db->where("sender_email",$row1->email);
						$this->db->where("reciver_email",$email);
						$this->db->where("sender_email<>",$email);
						$this->db->where("prop_code",$row->prop_code);
						$flag=0;
						if($this->db->get()->result()){
							 $flag=1;
						
					
				  ?>
			<div class='row ' style='padding: 2px 3px 6px;'>
				    
				    <div class='col-sm-12'  >
					  <div class='row card-body'>
					      
					     <div class='col-sm-12 card-body '>
						   <div class='row card' >
								<div class='col-sm-12 card-body' >
								   <div class='row'>
									  <div class='col-sm-1'>
									     <span class='radioInput_textOnly__1r7GL 'style="font-weight:bold;background-color:#FFF5E4;color:#C41F1F"><?=$row1->name[0]?></span>
										 <br>
										 <!--<p style='font-size:13'><?=$row1->name?>&nbsp;<img src='<?=base_url()?>images/verified-green-512.webp' height='15'></p>
									         --->
									  </div>
									  <div class='col-sm-3'>
									    <?php
										  if(strlen($row1->name)>=15){
											 
											?>
                                                 <span style='font-size:13'><?=substr($row1->name,0,10)?>.<img src='<?=base_url()?>images/verified-green-512.webp' height='15'></span>
									      
                                       <?php											
											  
										  }
										  else{
											?> 
                                             <span style='font-size:13'><?=$row1->name?>&nbsp;<img src='<?=base_url()?>images/verified-green-512.webp' height='15'></span>
									      
										<?php	  
										  }
										?>


									         
									  
									  </div>
									  <div class='col-sm-5'>
										  <p style='font-size:13'>4.0  
											  <i class='fa fa-star' style='color:#F5B241'></i>
											  <i class='fa fa-star' style='color:#F5B241'></i>
											  <i class='fa fa-star' style='color:#F5B241'></i>
											  <i class='fa fa-star' style='color:#F5B241'></i>
											  <i class='fa fa-star' ></i>
											  <a href='javascript:void(0);'>View Behaviour</a>
										  </p>
									  </div>
									  <div class='col-sm-3'>
									   <p style='font-size:13' ><?=$row->prop_code?>:<a href='javascript:void(0)' style='text-decoration:none'>Active</a></p>
									  </div>
									  <div class='col-sm-12' style='margin-top:-17px'><hr></div>
								   </div>
							 
						 </div>
						  <div class='row card-body' style='margin-top:-30' >
								  <div class='col-sm-4'>
									 <img src='<?=base_url()?>images/5a452598546ddca7e1fcbc80.png' height='20'>
									 <span style='font-size:13'><?=$row1->country_code[1].$row1->country_code[2]."-"?><a href='http://wa.me/+91<?=$row1->phone_number?>' style='text-decoration:none'><?=$row1->phone_number?></a></span>
								  </div>
								  <div class='col-sm-5'>
									 <img src='<?=base_url()?>images/email-icon-transparent-background-11549825133qbltljgp1w.png' height='20'>
									 <span style='font-size:13;cursor:pointer' data-toggle='modal' data-target='#reply_modal' class='email_data_get'rel='<?=$row->prop_code?>' ><?=$row1->email?></span>
								  </div>
								  <div class='col-sm-3'>
									  <a href="mailto:<?=$row1->email?>" style='text-decoration:none'>Click to email</a>
								  </div>
								  <div class='col-sm-12'>
								     <hr>
								  </div>
								  <div class='col-sm-4'>
								    <p>Status:New&nbsp;<a href='javascript:void(0);' style='text-decoration:none'>Update Status</a></p>
								  </div>
								  <div class='col-sm-5'>
								  
								   <p style='font-size:30px;margin-top:-15'>&#128522; &nbsp;&nbsp;&#128559;&nbsp;&nbsp;&#128564;</p>
								  </div>
								  <div class='col-sm-3'>
								    <a href='javascript:void(0);' style='text-decoration:none'>Report as Broker</a>
								    
								  </div>
                              								  
						  </div>
					</div>
					  </div>
					
					</div>
					</div>
				</div>
				  
				  
				  
				  
				  
				  <?php
				  
						}
					  }
				  
				  
				  ?>
					   
					   
					   
					   
					   
					   </div>
					 </div>
				   
				   
				   </div>
				   <div class='col-sm-1'></div>
				   <!-- see response end-->
				  
				  
				  <?php
			  }
			
			?>
			
			
			
			
			</div>
			</div>
			<div class='col-sm-1'></div>
		 
		 
		 
		 </div>
	  
	  
	  
	  </div>
	   <!--- Modal for replay start----------------------------->

                                   <div class='modal' id='reply_modal'>
									  <div class='modal-dialog'>
										<div class='modal-content'style='border-radius:0px;width:800px;margin-left:-150px;margin-right:100px;margin-top:30%'>

										  <!-- Modal Header -->
										  <div class='modal-header' style='background-color:#434A54;border-radius:0px'>
											<h5 style='color:#fff'>Reply by Email</h5>
											
												
												<button type='button'class='close' data-dismiss='modal'>&times;</button>
											  </div>

												  <!-- Modal body -->
												  <div class='modal-body  card-header' >
												     <div class='container-fluid'>
													     <div class='row'>
														   <div class='col-sm-12'>
														      <p style='color:gray' >To:<span class='email_data_set' rel=''><?=$row1->email?></span></p>
														   
														   </div>
														   <div class='col-sm-3'>
														      <p style='color:gray'>Message:</p>
														   
														   </div>
														   <div class='col-sm-9'>
														      <textarea rows='6' class='form-control' id='reply_textarea_'  style='resize:none;border-radius:0px'></textarea>
														      <p><span id='msg_length_data_t'>0</span>/500Characters</p>
														   </div>
														   <div class='col-sm-3'>
														      
														   </div>
														   <div class='col-sm-9'>
														      <div class='row'>
															    <div class='col-sm-6'>
																  <button class='btn btn-primary btn-block py-2'  id='send_reply' disabled style='border-radius:0px'>Send</button>
																</div>
																<div class='col-sm-6'>
																<button class='btn btn-warning btn-block  py-2' class='close' data-dismiss='modal' style='border-radius:0px'>Cancel</button>
																</div>
															  </div>
														   </div>
														 </div>
													 
													 
													 </div>
												  
												  
												  
												  
												  </div>
											</div>
										</div>
									</div>
 



                            <!-- Modal for replay end------------------------------------->							 
							  
	  
	 <?php
	  
	  
  }
  else{


?>	
<div class="container-fluid"  >
    <div class="row" style="margin-top:2%">
	   <div class="col-sm-1"></div>
	   <div class="col-sm-10 card-header" style='border-radius:0px'>
	      <div class="row">
		     <div class="col-sm-12">
			   <h6 align='center'><a href="<?=base_url().'index.php/Acers/home'?>">My99acres Home</a>&nbsp;|&nbsp; <a href="">Property Alerts </a>&nbsp;|&nbsp;<a href="" style='color:red'>Shortlist Buy Our Services</a></h6>
			 
			 </div>
		  
		  </div>
	   </div>
	   <div class="col-sm-1"></div>
	</div>
    <div class="row"  style="margin-top:5%">
	    <div class="col-sm-12">
		      <div class="row">
			     <div class="col-sm-1"></div>
				 <div class="col-sm-5 card " style="border-color:#D8EFFD;margin:.35rem">
				      <div class="row">
					     <div class="col-sm-12" style="margin-top:2%">
						   <h6 style="color:gray">Modify Profile</h6>
						 </div>
						
						 <div class="col-sm-7">
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
						  <b id="set_name">Welcome&nbsp;&nbsp;<?=$name?></p></b>
						 </div>
						 <div class="col-sm-5">
						   <?php
						     echo"<a  style='cursor:pointer;color:#3498DB'data-toggle='modal' data-target='#myModal'><i class='fa fa-key'style='color:#3498DB'></i>&nbsp;Change Password</a>";
						   
						   ?>
						 </div>
					</div>
					<hr style="background-color:#D8EFFD;">
				 <?php
					   $this->db->select("*");
					   $this->db->from("user");
					   $this->db->where("email",$email);
					   $rec=$this->db->get()->result();
					   foreach($rec as $row){
							  
							   echo form_label("Name:");	
								$data=array(
								  "type"=>"user_name",
								  "name"=>"text",
								  "id"=>"user_name",
								  "class"=>"form-control",
								  "style"=>"border-radius:0px",
								  "value"=>$row->name
								 

									);
							   echo form_input($data)."<br>";
							   echo form_label("Email:");	
								$data=array(
								  "type"=>"email",
								  "name"=>"email",
								  "style"=>"border-radius:0px",
								  "class"=>"form-control",
								  
								  "readonly"=>"readonly",
								  "value"=>$email
								 

									);
								  echo form_input($data)."<br>";
								   echo form_label("Mobile Number:");
							                  ?>
											   <div class="input-group mb-0" >
                                                <div class="input-group-prepend">
												
												<select name='country_code' class="form-control" style='border-radius:0px' >
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
											 <input type="phone" id="phone_number" name='phone_number'  class="form-control" style='border-radius:0px' value="<?=$row->phone_number?>">
											  
										</div>
										<br>
										<?php
								  $data=array(
									  "type"=>"submit",
									  "class"=>"btn btn-success btn-block py-2",
									  "value"=>"Save Profile",
									  "id"=>"save_profile"

									);
										echo form_input($data)."<br>";
									  
					   }
									?>
				 </div>
				 <div class="col-sm-5 card " style=";margin:.35rem;border-color:#D8EFFD;" >
					 <div class="row card-header"style="background-color:#D8EFFD">
					   <div class="col-sm-12">
					       <h4>I want to Buy / Rent</h4>
					   
					   </div>
					 </div>
					 <div class="row" >
					    <div class="col-sm-2"style="margin-top:4%">
						  <img src="http://localhost/99acres/images/regis_prp_alrt_circ.gif"style="height:60px;border-radius:5%" >

						</div>
						<div class="col-sm-10"style="margin-top:3%">
						     <div class="row">
							    <div class="col-sm-12">
								  <b>Property Alerts</b>
								
								</div>
								<div class="col-sm-12">
								  <p>Get notified when new listings matching your criteria come on to the market.</p>
								
								</div>
							 </div>
						   
						</div>
					 
					 </div>
					  <div class="row" >
					    <div class="col-sm-2"style="margin-top:4%">
						  <img src="http://localhost/99acres/images/registration_home_circ.gif"style="height:60px;border-radius:5%" >

						</div>
						<div class="col-sm-10"style="margin-top:3%">
						     <div class="row">
							    <div class="col-sm-12">
								  <b>Property Search</b>
								
								</div>
								<div class="col-sm-12">
								  <p>Over 1,00,000 properties live on 99acres.</p>
								
								</div>
							 </div>
						   
						</div>
					 
					 </div>
					 <div class="row" >
					    <div class="col-sm-2"style="margin-top:4%">
						  <img src="http://localhost/99acres/images/dlr_srch_circ.gif"style="height:60px;border-radius:5%" >

						</div>
						<div class="col-sm-10"style="margin-top:3%">
						     <div class="row">
							    <div class="col-sm-12">
								  <b>Dealer Search</b>
								
								</div>
								<div class="col-sm-12">
								  <p>Get in touch with agents, brokers, builders others professionals.</p>
								
								</div>
							 </div>
						   
						</div>
					 
					 </div>
					  <div class="row" >
					    <div class="col-sm-2"style="margin-top:4%">
						  <img src="http://localhost/99acres/images/np_srch_circ.gif"style="height:60px;border-radius:5%" >

						</div>
						<div class="col-sm-10"style="margin-top:3%">
						     <div class="row">
							    <div class="col-sm-12">
								  <b>New Projects</b>
								
								</div>
								<div class="col-sm-12">
								  <p>Over 400 new projects across locations.</p>
								
								</div>
							 </div>
						   
						</div>
					 
					 </div>
				 </div>
				 <div class="col-sm-1"></div>
			  </div>
		 </div>
	  </div>
	  <div class="row" style="margin-top:3%">
	     <div class="col-sm-1"></div>
	     <div class="col-sm-10 card" style="border-color:#D8EFFD;">
		    <div class="row card-header" style="background-color:#D8EFFD;height:50px">
			  <div class="col-sm-12">
			     <b><h4>Other things to do</h4></b>
			  </div>
			</div>
			<div class="row">
			  <div class="col-sm-1" style="margin-top:3%">
			    <img src="http://localhost/99acres/images/registration_ana_circ.gif"style="height:60px;border-radius:5%" >

			  </div>
			  <div class="col-sm-5"style="margin-top:3%">
			    <div class="row">
				   <div class="col-sm-12">
				     <b>Ask and Answer</b>
				   </div>
				    <div class="col-sm-12">
				     <p>Make sense of the home-buying process by asking local experts questions.</p>
				   </div>
				</div>
				
			  </div>
			  <div class="col-sm-6" style="margin-top:3%">
			      <div class="row">
				   <div class="col-sm-12">
				     <b>Unsubscribe from promotional Mailers</b>
				   </div>
				    <div class="col-sm-12">
				     <p>In order to stop receiving promotional mails from 99acres.com </p>
				   </div>
				</div>
			  </div>
			   <div class="col-sm-1">
			    <img src="http://localhost/99acres/images/99cares_circ.gif"style="height:60px;border-radius:5%" >

			  </div>
			  <div class="col-sm-5">
			    <div class="row">
				   <div class="col-sm-12">
				     
				   </div>
				    <div class="col-sm-12">
				     <p>Go to</p>
				   </div>
				</div>
				
			  </div>
			  <div class="col-sm-6">
			      <div class="row">
				   <div class="col-sm-12">
				     <b>Unsubscribe from being contacted for related services</b>
				   </div>
				    <div class="col-sm-12">
				     <p>I wish not to be contacted by 99acres and others for similar properties and related services</p>
				   </div>
				</div>
			  </div>
			</div>
		 
		 
		 </div>
		  <div class="col-sm-1"></div>
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
		
		
    <?php
		     echo "
			    
					<div class='modal' id='myModal'>
					  <div class='modal-dialog'>
						<div class='modal-content'style='width:600px;margin-left:-50px;margin-right:100px'>

						  <!-- Modal Header -->
						  <div class='modal-header'>
						    <center><h4 >Change Password</h4></center>
						   	
								
								<button type='button'class='close' data-dismiss='modal'>&times;</button>
							  </div>

						  <!-- Modal body -->
						  <div class='modal-body' >
						      <div class='container-fluid'>
								  <div class='row'>
									<div class='col-sm-12'>
									
							           <div class='login-form' id='login_form'>";?>
											<?php
											echo form_open(base_url()."index.php/Acers/change_password");
											 echo form_label("Current Password:");
											 $data=array(
											    "type"=>"password",
												"name"=>"password",
												"class"=>"form-control",
												"required"=>"required",
												"id"=>"current_password"
											 );
											 echo form_input($data);
											 echo"<span id='password_error' style='color:red;display:none'>Your current password is not correct</span>";
											
											 echo"<br>";
											 echo form_label("New Password:");
											 $data=array(
											    "type"=>"password",
												"name"=>"npass",
												"class"=>"form-control",
												"required"=>"required",
												"id"=>"new_password"
											 );
											 echo form_input($data)."<br>";
											 echo form_label("Confirm Password:");
											 $data=array(
											    "type"=>"password",
												"name"=>"cpass",
												"class"=>"form-control",
												"required"=>"required",
												"id"=>"confirm_password"
											 );
											 echo form_input($data);
											 
											 echo"<span id='confirm_password_error' style='color:red;display:none'>New Password AND Current password Missmatch</span><br>";
											 echo"<br>";
											 $data=array(
											    "type"=>"submit",
												"value"=>"Save password",
												"class"=>"btn btn-primary btn-block py-2",
												"disabled"=>"disabled",
												"id"=>"save_password"
											 );
											 echo form_input($data)."<br>";
                                             echo form_close();
											 
										echo "</div>
							 
										</div>
										

									 </div>
									
									
																   
									 </div>
									 </div>
									 </div>
									 </div>
									 </div>";
									?> 
									
  
  </body>
  <?php
  }
  ?>
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
				
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
 }
 else{
	redirect(base_url()."index.php/Acers/index"); 
	 
	 
	 
 }
 ?>