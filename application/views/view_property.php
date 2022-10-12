<?php
 $email=get_cookie("login_user");
 $pass=$this->session->userdata($email);
 if($email!=null && $pass!=null){
	 $login_user_name;
	 $login_user_phone;
	 $this->db->select("*");
	 $this->db->from("user");
	 $this->db->where("email",$email);
	 foreach($this->db->get()->result() as $row){
		 $login_user_name=$row->name;
		 $login_user_phone=$row->phone_number;
		 
		 
	 }
	 
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
	  
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
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
#owner_part{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
 #header_part{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
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
 #emiModal_body{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
        
	  
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

  
  
  </style>
  <script>
  
  $(document).ready(function(){
	  (function () {
            var last_scroll_top = 0;

     $(window).scroll(function(){
       var  scroll_top = $(this).scrollTop();
       
	  if(scroll_top>100) {
		         $("#property_row").addClass("sticky-top");
				 $("#property_row").css("box-shadow","1px 1px 5px rgba(0,0, 0, 0.4)");
				 
	   }
	  if(scroll_top<100){
		   
			  $("#property_row").css("box-shadow","");
			  $("#property_row").removeClass("sticky-top");
				 
		   
	   }
             
       
       last_scroll_top = scroll_top;
    });
}());
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
			
			var full_width=$(this).attr("rel");
			var rel1=$(this).attr("rel1");
			
			if(rel1=='full_width'){
				$("#updated_des_of_prop").text(full_width);
				$(this).html("Less");
				$(this).attr("rel1","half_width");
				
				
			}
			else{
				$("#updated_des_of_prop").text(full_width.substring(0,399));
				$(this).html("&nbsp;.....More");
				$(this).attr("rel1","full_width")
				
				
				
			}
			
			
		});
		
		$("#user_message").keyup(function(){
			
			$("#required_text").text(400-$(this).val().length);
			
			
		});
		var carpet_area=$("#prop_carpet_area").text();
		$(".dropdown_text").on("click",function(){
			var unit=$(this).text();
			if(unit=="Sq.ft."){
				$("#prop_carpet_area").text(carpet_area);
				
			}
			else if(unit=="Sq.yards"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/9));
				
			}
			else if(unit=="Sq.m."){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/10.764));
				
			}
			else if(unit=="grounds"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/2400));
				
			}
			else if(unit=="aankadam"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/72));
				
			}
			else if(unit=="rood"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="chataks"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/45));
				
			}
			else if(unit=="perch"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="guntha"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area*0.0009182736455));
				
			}
			else if(unit=="ares"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/1076));
				
			}
			else if(unit=="bigha"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/27000));
				
			}
			else if(unit=="kottah"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/1361));
				
			}
			else if(unit=="hectares"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/107600));
				
			}
			else if(unit=="marla"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="kanal"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/5445));
				
			}
			else if(unit=="cents"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area*0.0023));
				
			}
			$("#carpet_area_unit_dropdown").text(unit);
			
			
		});
		$("#emi_calculator_button").on("click",function(){
			  var loan_amount=$("#loan_amount").val();//1000000
			  var loan_period=$("#loan_period").val();//1 year
			  var loan_interest=$("#loan_interest").val();//10.5
			  var balance_type=$("#balance_type").val();
			  var cp=loan_amount;
			  var new_cp=[];
			  var lp=0;
			  if(loan_amount.length>0 && loan_period.length>0 && loan_interest.length>0 ){
				  if(balance_type=="Monthly"){
					  var s;
					  var k=1;
					  for(var i=parseInt(loan_period*12);i>=1;i--){
						    cp=parseInt(cp)+(cp/100)*loan_interest/12;//1006000//927700
						    new_cp[k]=parseInt(cp/i);
						    s=cp-(cp/i);//922167
						    cp=s;
							k++;  
					  }
					  for(var j=1;j<=parseInt(loan_period*12);j++){
						  lp=lp+new_cp[j];
						   
					  }
					    $("#calculated_emi").text(parseInt(lp/parseInt(loan_period*12)));//86655 permonth for 1 year;
					 
					  
				  }
				  else{
					    var s;
					   var k=1;
					  for(var i=parseInt(loan_period);i>=1;i--){
						    cp=parseInt(cp)+(cp/100)*loan_interest;//1006000//927700
						    new_cp[k]=parseInt(cp/i);
						    s=cp-(cp/i);//922167
						    cp=s;
							k++;  
					  }
					  for(var j=1;j<=parseInt(loan_period);j++){
						  lp=lp+new_cp[j];
						   
					  }
					   $("#calculated_emi").text(parseInt(lp/loan_period));
					   //alert(parseInt(loan_amount)+parseInt((cp/100)*loan_interest)/loan_period);//86655 permonth for 1 year;
					  
					  
					  
					  
				  }
				  
				  
			  }
			
			
		});
		$("#property_description").keyup(function(){
			$("#description_length").text($(this).val().length);
			if($(this).val().length<30){
				
				$(this).css("border-color","red");
				$("#property_description_error").html("<p style='color:red'>*Please enter at lest 30 characters<p>");
				
			}
			else if($(this).val().length>30){
				$("#property_description").css("border-color"," ");
				$("#property_description_error").text("");
				
			}
			
		});
		$("#numberofbedroom").keyup(function(){
			
			if($(this).val().length==0){
				$("#numberofbedroom_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#numberofbedroom_error").html("");
				
				
				
			}
			
		});
		$("#numberofbathrooms").keyup(function(){
			
			if($(this).val().length==0){
				$("#numberofbathrooms_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#numberofbathrooms_error").html("");
				
				
				
			}
			
		});
		$("#numberofbalconies").keyup(function(){
			
			if($(this).val().length==0){
				$("#numberofbalconies_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#numberofbalconies_error").html("");
				
				
				
			}
			
		});
		$("#carpet_area").keyup(function(){
			
			if($(this).val().length==0){
				$("#carpet_area_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#carpet_area_error").html("");
				
				
				
			}
			
		});
		$("#prop_num_floor").keyup(function(){
			
			if($(this).val().length==0){
				$("#prop_num_floor_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#prop_num_floor_error").html("");
				
				
				
			}
			
		});
		$("#prop_price_for_apprt_whole").keyup(function(){
			
			if($(this).val().length==0){
				$("#prop_price_for_apprt_whole_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#prop_price_for_apprt_whole_error").html("");
				
				
				
			}
			
			
		});
		$("#prop_price_for_apprt_whole_per_sqft").keyup(function(){
			
			if($(this).val().length==0){
				$("#prop_price_for_apprt_whole_per_sqft_error").html("<p style='color:red'>*This field can't be empty<p>");
				
				
				
			}
			else{
				$("#prop_price_for_apprt_whole_per_sqft_error").html("");
				
				
				
			}
			
		});
		$("#property_update_button_data_v").on("click",function(){
			var prop_id=$("#prop_type_data_v_type").attr("rel");
			var prop_type;
			var prop_num_bedroom=$("#numberofbedroom").val();
			var prop_num_bathroom=$("#numberofbathrooms").val();
			var prop_num_balconies=$("#numberofbalconies").val();
			var prop_carpet_area=$("#carpet_area").val();
			var prop_carpet_area_unit=$("#carpet_area_input").val();
			var prop_num_floor= $("#prop_num_floor").val();
			var prop_num_floor_type=$("#prop_num_floor_type").val();
			var prop_age;
			var prop_ownership;
			var prop_price=$("#prop_price_for_apprt_whole").val();
			var prop_price_per_sqft=$("#prop_price_for_apprt_whole_per_sqft").val();
			var prop_des=$("#property_description").val();
			
			if($("#property_input_radio").prop("checked")){
				
				prop_type="2 BHK";
			}
			else if($("#property_input_radio1").prop("checked")){
				
				prop_type="4 BHK";
			}
			if($("#prop_age_0_1").prop("checked")){
				prop_age='0-1 years';
				
				
			}
			else if($("#prop_age_1_5").prop("checked")){
				prop_age='1-5 years';
				
			}
           else if($("#prop_age_5_10").prop("checked")){
				prop_age='5-10 years';
				
			}
			if($("#ownership_freehold").prop("checked")){
				prop_ownership='Freehold';
				
			}
			else if($("#ownership_Co-operative_society").prop("checked")){
				prop_ownership='Co-operative society';
				
			}
			else if($("#ownership_Leasehold").prop("checked")){
				prop_ownership='Leasehold';
				
			}
			else if($("#ownership_Power_of_Attorney").prop("checked")){
				prop_ownership='Power of Attorney';
				
			}
			if(prop_type.length >0 && prop_num_bedroom.length>0 && prop_num_bathroom.length>0 && prop_num_balconies.length>0 && prop_carpet_area.length>0 &&prop_num_floor.length>0&& prop_age.length>0 && prop_ownership.length>0 &&prop_price.length>0 && prop_price_per_sqft.length>0 && prop_des.length>30){
				
				
				$.post(
				
				"http://localhost/99acres/index.php/Acers/prop_update",{prop_id:prop_id,prop_type:prop_type,prop_num_bedroom:prop_num_bedroom,prop_num_bathroom:prop_num_bathroom,prop_num_balconies:prop_num_balconies,prop_carpet_area:prop_carpet_area,prop_num_floor:prop_num_floor,prop_age:prop_age,prop_ownership:prop_ownership,prop_price:prop_price,prop_price_per_sqft:prop_price_per_sqft,prop_des:prop_des},function(data){
					
					if(data.trim()=='updated'){
						$("#updated_num_bathroom").text(prop_num_bathroom);
						$("#updated_type_of_prop").text(prop_type);
						$("#prop_carpet_area").text(prop_carpet_area);
						$("#updated_num_bedroom_left_part").text(prop_num_bedroom);
						$("#updated_num_bathroom_left_part").text(prop_num_bathroom);
						$("#updated_num_balconies_left_part").text(prop_num_balconies);
						$("#updated_num_floor_left_part").text(prop_num_floor);
						$("#updated_prop_age_left_part").text(prop_age);
						
						if(prop_des.length>400){
							$("#updated_des_of_prop").text(prop_des.substring(0,399));
							$("#prop_des_more").css("display","");
							$("#prop_des_more").html("&nbsp;.....More");
							$("#prop_des_more").attr("rel",prop_des);
							$("#prop_des_more").attr("rel1","full_width");
							
				
							
						   
						}
						else{
							$("#prop_des_more").css("display","none");
							$("#updated_des_of_prop").text(prop_des);
							
						}
						
						$("#updated_prop_price_left_part").text(prop_price[0]+prop_price[1]+"."+prop_price[2]+prop_price[3]);
						$("#set_prop_price_after_update").text(prop_price[0]+prop_price[1]+"."+prop_price[2]+prop_price[3]);
						$("#updated_form_alert_message").slideDown();
						setInterval(function(){
							$("#updated_form_alert_message").slideUp();
							
							
						},3000);
						
					}
					
					
					
					
				
				
				
				
				});
			}
			
			
		});
		$("#send_message_to_owner").on("click",function(){
					var sender_name=$("#login_user_name").val();
					var reciver_email=$(this).attr("rel");
					var prop_id=$(this).attr("rel1");
					var sender_phone=$("#login_user_phone").val();
					var sender_message=$("#user_message").val();
					if(sender_name.length>0 && reciver_email.length>0 && sender_phone.length>0  &&sender_message.length>30 && prop_id.length>0){
						$("#user_message").css("border-color","");
						$.post(
						
						"http://localhost/99acres/index.php/Acers/responses",{reciver_email:reciver_email,sender_name:sender_name,sender_phone:sender_phone,sender_message:sender_message,prop_id:prop_id},function(data){
						   if(data.trim()=='delivered'){
							   $("#send_message_to_owner").attr("disabled",true);
							   $("#send_message_to_owner").html("<i class='spinner-border text-light'></i>");
							  // $("#send_message_to_owner").text("");
							   setTimeout(function(){
								   
								   $("#send_message_to_owner").addClass("btn btn-success py-2 btn-block")
								   $("#send_message_to_owner").text("SENT SUCCESSFULLY");
							   
								   
							   },3000);
							   $("#user_message").val("");
							   setTimeout(function(){
								    $("#send_message_to_owner").text("SEND");
									$("#send_message_to_owner").attr("disabled",false);
							        $("#send_message_to_owner").removeClass("btn btn-success").addClass("btn btn-primary");
								   
								   
							   },5000);
							   
							   
						   }
						
						
						
						   });
						
					}
					if(sender_message.length<30){
						$("#user_message").css("border-color","red");
						
					}
		});
		$("#shortlested_button_prop_data_v").on('click',function(){
			    var prop_code=$(this).attr("rel");
			   if(prop_code.length>0){
				     $.post(
					   "http://localhost/99acres/index.php/Acers/shortlest_property",{prop_code:prop_code},function(data){
						     if(data.trim()=='shortlested'){
							   $("#shortlested_button_prop_data_v").html("<i class='spinner-border text-light'></i>");
							   setTimeout(function(){
								   $("#shortlested_button_prop_data_v").removeClass("btn btn-outline-warning py-2 btn-block")
								   $("#shortlested_button_prop_data_v").addClass("btn btn-outline-success py-2 btn-block");
								   
								   $("#shortlested_button_prop_data_v").html("SHORTLESTED<i class='fa fa-star' style='margin:.15rem;float:left'></i>");
								   
							   
								   
							   },3000);
							  
							 }
							 else{
								   $("#shortlested_button_prop_data_v").html("<i class='spinner-border text-light'></i>");
							       setTimeout(function(){
									   $("#shortlested_button_prop_data_v").removeClass("btn btn-outline-success py-2 btn-block")
									   $("#shortlested_button_prop_data_v").addClass("btn btn-outline-warning py-2 btn-block");
									   $("#shortlested_button_prop_data_v").html("SHORTLEST<i class='fa fa-star' style='margin:.15rem;float:left'></i>");
								   
								   
							      },3000);
								 
								 
								 
								 
								 
							 }
					   }
					   
					 
					 
					 );
				   
				   
				   
			   }
			
		});
		
	  
  });
  
  </script>
 </head>
 <body>
 <nav class="navbar" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 style="color:white"><a href='<?=base_url()?>index.php/Acers/home' style="color:#fff;text-decoration:none"><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     
		 </div>
		 <?php
			 $this->db->select("*");
			 $this->db->from("99acers_user_property_profile");
			 $this->db->where("prop_owner_email",$email);
			 $res=$this->db->get()->result();
			 $count=0;
			 if($res!=null){
					$this->db->where('prop_owner_email', $email);
					$query = $this->db->get('99acers_user_property_profile');
					$count=$query->num_rows();
					?>
				<div class="col-sm-1">
					
						<a  href='<?=base_url()?>index.php/Acers/profile'style="font-size:17px;margin-left:40px;color:#F5F7FA;text-decoration:none" ><b>My&nbsp;Posting(<?=$count?>)</b>
						</a>
						
		        </div>
					<?php
			 }
			 else{
		?>
		 <div class="col-sm-1">
			<div class="nav-item dropdown" style="color:#F5F7FA;">
				<a style="cursor:pointer;font-size:17px;margin-left:40px;"data-toggle="dropdown" ><b>My&nbsp;Posting(0)</b>
					</a>
				<div class="dropdown-menu position-absolute"  style="width:900px;height:400px;margin-right:350px">
			   </div>
			</div>
		</div>
		<?php
			 }
		?>
		<div class="col-sm-5">
			 <div class="input-group mb-0">
					
					<input type="search" class="form-control" style=';border:none;margin-left:100px;transform: scale(1.1);margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
					</div>
					
           </div>
		</div>
		<div class="col-sm-1">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown"><b>For&nbsp;Owners</b>
                            </a>
                        <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:1000px;height:300px;;margin-left:-650px;margin-top:27px">
                           
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
		  <div class="col-sm-1">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
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
		$prop_owner_phone;
		$this->db->select("*");
		$this->db->from('99acers_user_property_profile');
		$this->db->where('prop_code',$prop_id);
		$this->db->where('status',1);
		$status_for_flag=0;
		foreach($this->db->get()->result() as $row){
			$status_for_flag=1;
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
		if($status_for_flag==0){
			redirect(base_url()."index.php/Acers/home");
			
		}
		$this->db->select("*");
		$this->db->from('user');
		$this->db->where('email',$prop_owner_email);
		foreach($this->db->get()->result() as $row){
			$prop_owner_name=$row->name;
			$prop_owner_phone=$row->phone_number;
			
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
		$emi=$eighty_percent_of_total_price*$one_year_interest*(1+$one_year_interest)^240/((1+$one_year_interest)^240-1);
		//$emi=2000000 *0.006* (1 + 0.006)^120 / ((1 + 0.006)^120 - 1); 
	    
 ?>
    <div class='container-fluid'>
	   <div class='row card 'id='property_row' style='border-radius:0px' >
	        <div class='col-sm-12 card-body'style=''>
			   <div class='row'>
			     <div class='col-sm-1'></div>
				 <div class='col-sm-11'>
				     <div class='row'>
					    <div class='col-sm-3'>
						<?php
						  if($prop_price>=1000000){
						
						?> 
						  <div class='row'>
                             <div class='col-sm-12'>
							  <h2>₹&nbsp;<b id='set_prop_price_after_update'><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?></b><b>&nbsp;Lac</b><span style='font-size:14px;color:gray'>@<?=$prop_price_per_sqft?>&nbsp;per&nbsp;sq.ft.</span></h2>
                             

							 </div>
							 
							 <div class='col-sm-12'>
							     
							     <p style='color:#3399CC;cursor:pointer' data-toggle='modal' data-target='#emiModal'>Estimated EMI&nbsp;&nbsp;₹<span><?=intval($emi)?></span></p>
							 
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
							       <h3 id='prop_type_data_v_type' rel='<?=$prop_id?>'><span id='updated_type_of_prop'><?=$prop_type?></span>&nbsp;&nbsp;<span id='updated_num_bathroom'><?=$prop_num_bathroom?></span>&nbsp;Baths</h3>
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
									<?php
									 if($email!=$prop_owner_email){
									?>
									<button class='btn btn-primary py-2 btn-block' data-toggle='modal' data-target='#owner_details_Modal' style='float:right;border-radius:0px'>CONTACT OWNER</button>
								  <?php
									 }
									 else{
										 
								  ?>
									<button class='btn btn-primary py-2 btn-block'  data-toggle='modal' data-target='#owner_property_details_edit_Modal'style='float:right;border-radius:0px;background-color:#59CDB5;border-color:#59CDB5'><i class='fa fa-edit'></i>&nbsp;&nbsp;Edit property</button>
								  <?php
									 }
								  ?>
						    </div>
								<div class='col-sm-12' style='margin-top:2%'>
									   <?php
										 if($email!=$prop_owner_email){
											 $status_for_shortlested=-1;
											 $this->db->select("*");
											 $this->db->from("shortlested_property");
											 $this->db->where("email",$email);
											 $this->db->where("prop_code",$prop_id);
											 foreach($this->db->get()->result() as $row_for_shotlested_property){
												 $status_for_shortlested=$row_for_shotlested_property->status;
												 
											 }
											 if($status_for_shortlested==1){
												?>
                                                  <button class='btn btn-outline-success py-2 btn-block'  id='shortlested_button_prop_data_v' rel='<?=$prop_id?>'style='float:right;border-radius:0px'><i class='fa fa-star' style='margin:.15rem;float:left'></i>SHORTLISTED</button>
						

                                            <?php												
											 }
											 else{
												?> 
												 <button class='btn btn-outline-warning py-2 btn-block'  id='shortlested_button_prop_data_v' rel='<?=$prop_id?>'style='float:right;border-radius:0px'><i class='fa fa-star' style='margin:.15rem;float:left'></i>SHORTLIST</button>
						
											<?php	 
											 }
											 
											 
										?>
										   
									  <?php
										 }
										 else{
											 
									  ?>
										<button class='btn btn-outline-warning py-2 btn-block'  style='float:right;border-radius:0px'><i class='fa fa-star' style='margin:.15rem;float:left'></i>SHORTLIST</button>
						
									  <?php
										 }
									  ?>
								
								
								
								
								
								</div>
							 </div>
						    
							
						
						
						</div>
					 
					 </div>
				 
				 </div>

			   
			   </div>
			
			
			</div>
	   
	   </div>
	    <div class="row"style='margin-top:5px;display:none'id='updated_form_alert_message'>
		          <div class="col-sm-4"></div>
				  <div class="col-sm-4">
				    <div class='alert alert-secondary' style='border-radius:0px;'>Your property details has been updated</div>
				  </div>
				  <div class="col-sm-4"></div>
				</div>
<!----- header  part end --------------------------------------------------------------------->
<!---xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----->
<!----- middle part start--------------------------------------------------------------------->
    <div class='row card-header' style='background-color:#fff;margin-top:-18px'>
	   <div class='col-sm-12'>
	     <div class='row' style='margin-top:3%'>
	    <div class='col-sm-1'></div>
		<div class='col-sm-11'>
		   <div class='row'>
		      <div class='col-sm-5 card' style='border-radius:0px'>
			     <div class='row'>
				    <div class='col-sm-12 card-header' style='background-color:#FAFBFC;border-radius:0px' >
					 <h5>Property(3)</h5>
					
					</div>
					<div class='col-sm-12 card-body'>
					   <div class='row'>
					      <div class='col-sm-12'>
						     <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg" id='cover_img_code' rel='<?=$prop_cover_img_code?>' rel2='2' class="img-fluid" style="height:350px;width:460px">
					
						  
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
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg"id='img_footer_1' class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bedroom_img_code?>.jpg" id='img_footer_2'class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bathroom_img_code?>.jpg" id='img_footer_3'class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					
				 
				 </div>
			  
			  
			  </div>
			   
			   <div class='col-sm-6 ' style='margin-left:20px'>
			      <div class='row'>
				     <div class='col-sm-12 card' style='border-radius:0px'>
					    <div class='row card-body' style=''>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/68-512.webp" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Area</b></p>
										   <div class='row'>
											
											<div class='col-sm-4'>
											  <p ><b id='prop_carpet_area'><?=$prop_carpet_area?></b></p>
											</div>
											<div class='col-sm-8'>
											
										     <div class="nav-item dropdown" >
												<a style="cursor:pointer;font-size:17px;color:#3399CC;margin-top:-5;"data-toggle="dropdown" ><b><span id='carpet_area_unit_dropdown'>Sq.ft.</span></b>
												 
												 </a>
												
													<div class="dropdown-menu position-absolute"id="more_property_details"  style="overflow:auto;width:150px;height:300px;margin-left:-60px;margin-top:0px;border-radius:0px">
														<a style='cursor:pointer'class="dropdown-item">
															<span class='dropdown_text'>Sq.ft.</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>Sq.yards</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>Sq.m.</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>grounds</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>aankadam</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>rood</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>chataks</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>perch</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>guntha</span>
														</a>
														<a style='cursor:pointer'class="dropdown-item">
															<span class='dropdown_text'>ares</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>biswa</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>acres</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>bigha</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>kottah</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>hectares</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>marla</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>kanal</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>cents</span>
														</a>
														
														
														
							
						
													</div>
												</div>
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
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/931776.png"  style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Configuration</b></p>
										   <div class='row'>
											  <div class='col-sm-12'>
												  <div class='row'>
													<div class='col-sm-12'>
														<h6><b><span id='updated_num_bedroom_left_part'><?=$prop_num_bedroom?></span>&nbsp;Bedrooms,<span id='updated_num_bathroom_left_part'><?=$prop_num_bathroom?></span>&nbsp;Bthrooms,<span id='updated_num_balconies_left_part'><?=$prop_num_balconies?></span>&nbsp;Balcony</b></h6>
												  </div>
												  </div>
												 
											  
											  </div>
							   
							   
							               </div>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							   
							   
							
							</div>
						<div class='col-sm-12'>
							<hr>
							</div>
						
					 
					 </div>
					 
					    <div class='row card-body'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/865621.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Price</b></p>
										   <div class='row'>
												<div class='col-sm-12'>
												<?php
												
												if($prop_price>=1000000){
												
												?>
												   <h6><b><span id='updated_prop_price_left_part'><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?></span>&nbsp;Lac</b></h6>
												   
												   <?php
												}
												else if($prop_price>=100000){
												?>
												  <h6><b><?=$prop_price[0]?>.<?=$prop_price[1].$prop_price[2]?>&nbsp;Lac</b></h6>
												   
												
												<?php
												}
												else if($prop_price>=10000){
												?>
												<h6><b><?=$prop_price[0].$prop_price[1]?>&nbsp;K</b></h6>
												  


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
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-6'>
							    <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/866872.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Address</b></p>
										      <div class='row'>
												<div class='col-sm-12'>
													<p ><b><?=$prop_aprtment?>,&nbsp;<?=$prop_city?></b></p>
												</div>
											  </div>
										</div>
									  </div>
									   
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-12'>
							<hr>
							</div>
						
						</div>
					 
					 
					    <div class='row card-body'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/Laminate-Floor-Icon.png"  style='height:45'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Floor Number</b></p>
										    <div class='row'>
												<div class='col-sm-12'>
													<h6><b><span id='updated_num_floor_left_part'><?=$prop_floor?></span>&nbsp;Floors</b></h6>
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
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/9234463.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Property Age</b></p>
										   <div class='row'>
												<div class='col-sm-12'>
												  <h6><b><span id='updated_prop_age_left_part'><?=$prop_age?></span></b></h6>
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
		   	   <div class='col-sm-1'> </div>
		   </div>
		
		
		</div>
	
	
	
	
	</div>
	</div>
	
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- why should you consider this property part start------------------------------------------------->
<div class='col-sm-12'>
<div class='row' style='margin-top:2%;'>
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
		    <hr>
		 </div>
		 
		 
		 
	  
	  
	  </div>
   
   
   </div>
   <div class='col-sm-12'>
     
   </div>
   



</div>
</div>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!---- about ownership and property description part start------------------------------------------>
  <div class='col-sm-12'>
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
			   
			  <hr>
			 </div>
		  
		  
		  </div>
	   
	   
	   </div>
       <div class='col-sm-12'>
	    
	   </div>
   
   
   
   </div>
  </div>
 
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!--- about property details part start------------------------------------------------------------->
   <div class='col-sm-12'>
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
				   
						     <b style='color:gray' id='long_des'><span id='updated_des_of_prop'><?=substr($prop_des,0,399)?></span>
							  <?php 
								  if(strlen($prop_des)>400){
								  ?>
								   <span style='cursor:pointer;color:black;'  rel1='full_width'rel='<?=$prop_des?>' id='prop_des_more' >&nbsp;.....More</span>
								 <?php
								 
								  }
							 ?>
							 
							 </b>
						     
							 <!--<b style='color:gray;display:none' id='short_des'><?=$prop_des?><span style='cursor:pointer;color:black' rel='<?=substr($prop_des,0,399)?>' id='prop_des_less'>&nbsp;Less</span></b>
						   -->
						   
						  
					
					
				 </div>
				  
			  
			  </div>
		   
		   <hr>
		   </div>
		
		</div>
	  
	  
	  </div>
	  <div class='col-sm-12'></div>
     
   
   
   
   </div>
 </div>


<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- furnshing part sart----------------------------------------------------------------------->
 <div class='col-sm-12'>
 <div class='row' >
      <div class='col-sm-12'>
	    <div class='row'>
	     <div class='col-sm-1'></div>
		 <div class='col-sm-11'>
		   <div class='row'>
		      <div class='col-sm-12'>
			     <p><b style='color:gray'>Furnished</b></p>
			   </div>
			    <div class='col-sm-12'>
			     <p>Furnishing Details</p>
			   </div>
		      <div class='col-sm-12'>
			    <div class='row'>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/1-Water-128.webp" style='height:40px'>
					  1 Water Purifier</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/2117228.png" style='height:40px'>
					  3 Fan</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/8025843.png" style='height:40px'>
					  1 Fridge</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/__bed_hotel_sleep-256.webp" style='height:45px'>
					  Undefined</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/exhaust__fan__airflow__ventilator-128.webp" style='height:35px'>
					  1 Exhaust Fan</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/table-dining-eat-meeting-kitchen-128.webp" style='height:35px'>
					  1 Dining Table</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/4630017.png" style='height:35px'>
					  1 Geyser</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/08-kitchenware-electronics-stove-tools-kitchen-oven-cooking-128.webp" style='height:35px'>
					  1 Stove</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/Lightbulb-128.webp" style='height:35px'>
					  20 Light's</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/smart_home_ac_air_conditioner_electronic_cool-128.webp" style='height:35px'>
					 1 Ac</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/tv-128.webp" style='height:35px'>
					 1 TV</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/7698652.png" style='height:35px'>
					 1 Modular Kitchen</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/z1-fireplace_interior_chimney_winter-128.webp" style='height:35px'>
					 1 Chimney</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/SingleCartoonSleepAndRestYulia_12-128.webp" style='height:35px'>
					 5 Curtains</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/Wardrobe-128.webp" style='height:35px'>
					 2 Wardrobe</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/armchair_chair_single_sofa-128.webp" style='height:35px'>
					  1 Sofa</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/laundry_washing_machine_basket-128.webp" style='height:20px'>
					  1&nbsp;Washing-Machine</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/16-kitchenware-microwave_oven-electronics-microwave-heating-cooking-128.webp" style='height:35px'>
					  0 Microwave</p>
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
  





<!-- furnshing part end----------------------------------------------------------------------->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- owner details part sart----------------------------------------------------------------------->
  <div class='row' style='background-color:#FAFBFC;height:400px'>
     <div class='col-sm-12'>
	    <div class='row' >
		   <div class='col-sm-1'></div>
		   <div class='col-sm-11 card-body'>
		      <div class='row'>
			    <div class='col-sm-4 '>
				   <div class='row'>
				     <div class='col-sm-12 card-body'>
					    <b><h4>Owner Detailssss</h4></b>
					 
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
					     <b style='color:gray'><h4>Send enquiry to Owner</h4></b>
					  
					  </div>
					 
					 <div class='col-sm-12'>
					      <input type='text' class='form-control' style='border-radius:0px' id='login_user_name' value='<?=$login_user_name?>'>
					  </div>
					  <div class='col-sm-12' style='margin-top:10px'>
					      <input type='email' class='form-control' style='border-radius:0px'id='login_user_email' value='<?=$email?>'>
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
							   <input type="phone" name='phone_number'  class="form-control" style='border-radius:0px'id='login_user_phone' value='<?=$login_user_phone?>'>
						   </div>
					  
					  
					  </div>
					  <div class='col-sm-12' style='margin-top:10px'>
					 <?php
					    if($email!=$prop_owner_email){
					?>
					     <button class='btn btn-primary py-2 btn-block' id='send_message_to_owner' rel='<?=$prop_owner_email?>' rel1='<?=$prop_id?>' style='border-radius:0px'>SEND</button>
					  <?php
						}
						else{
						?>
                            <button class='btn btn-secondary py-2 btn-block'  disabled  style='border-radius:0px'>THIS SERVICE NOT AVAILABLE</button>
                        <?php						
							
						}
					  ?>
					  
					  </div>
				   
				   </div>
				
				</div>
				<div class='col-sm-3'>
				   <div class='row' style='margin-top:35px'>
				      <div class='col-sm-12'>
					     <textarea class='form-control' required id='user_message'rows='5' style='resize:none;border-radius:0px' placeholder='I am interested in this property'></textarea>
					     
						 <p style='float:right'><span id='required_text'>400</span>&nbsp;Chars</p>
						 
					  </div>
					  
				   
				   
				   
				   </div>
				
				
				</div>
				
			  
			  
			  
			  </div>
		   
		   </div>

		
		</div>
	 
	 
	 </div>
    
  
  </div>
  </div>
  <!---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--------->
  
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
	
	
							 
 <div class="container-fluid bg-dark text-light" >
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
<!--- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->
		<!-- The Modal -->
  <div class="modal" id="emiModal">
    <div class="modal-dialog">
      <div class="modal-content"id='emiModal_body' style="width:500px;margin-top:20%;margin-left:10px;border-radius:0px;">
      
        <!-- Modal Header -->
          <div class='modal-header card-header' id='emiModal_header'>
		     <h4><b>EMI Calculator</b></h4>
		  
		  
		  </div>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			       <div class='col-sm-12'>
				      <h6>Calculate the EMI's for your home loan now!</h6>
				   
				   </div>
				    <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Loan Amount ₹:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <div class='row'>
					     <div class='col-sm-12'>
						 <input type='text' class='form-control'id='loan_amount' style='border-radius:0px' value='<?=$prop_price*80/100?>'>
						 
						 </div>
						 <div class='col-sm-12'>
						   <?php
						   
						     if($prop_price>=1000000){
						   
						   ?>
						      <h6>80% of Rs &nbsp;<?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp; Lac</h6>
						  
						  <?php
						   
							 }
							 else if($prop_price>=100000){
						   ?>
						     <h6>80% of Rs &nbsp;<?=$prop_price[0]?>.<?=$prop_price[1].$prop_price[2]?>&nbsp; Lac</h6>
						  
						   
						   
						   <?php
						   
							 }
						   
						   ?>
						 </div>
					  
					  
					  </div>
				      
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Loan Period(Yrs):</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <input type='text' class='form-control'id='loan_period' style='border-radius:0px' value='20'>
						 
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Interest Rate %:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <input type='text' class='form-control'  id='loan_interest'style='border-radius:0px' value='10.5'>
						 
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Reducing Balance Type:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <select class='form-control'id='balance_type' style='border-radius:0px'>
                          <option>Monthly</option>
						   <option>Annual</option>
                            


                     </select>					  
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>EMI:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <div class='row'>
					     <div class='col-sm-12 card-body'>
						    <span  style='background-color:#FFFF99;border-radius:0px;' >&nbsp;₹&nbsp;<span id='calculated_emi'></span></span>   					  
				   
						 </div>
					  
					  </div>
				     
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      
				   
				   </div>
				   <div class='col-sm-3'style='margin-top:10px'>
				       <button class='btn btn-primary btn-block' id='emi_calculator_button'style='border-radius:0px'>Calculate</button>
				   </div>
				   <div class='col-sm-3'style='margin-top:10px'>
				      <button class='btn btn-outline-secondary btn-block' class="close" data-dismiss="modal"style='border-radius:0px'>Cancel</button>
				   </div>
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
   <!--- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->
<!-- OWNER DEAILS  MODAL START -->
  <div class="modal" id="owner_details_Modal" >
    <div class="modal-dialog">
      <div class="modal-content"id='emiModal_body' style="width:900px;margin-top:5%;margin-left:-200px;border-radius:0px;">
      
        <!-- Modal Header -->
          <div class='modal-header card-header' style='border-radius:0px;'>
		     <h6><b>You are requesting to view advertiser details.</b></h6>
		  
		  
		  </div>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			      <div class='col-sm-12'>
				    <div class='row'>
					   <div class='col-sm-6'>
					     <span>POSTED BY OWNER:</span>
					    
					   </div>
					   <div class='col-sm-6'>
					     <span>POSTED ON MAY 16, 2022:</span>
					   
					   </div>
					   <div class='col-sm-2' style='margin-top:10px'>
					     <span><?=$prop_owner_phone?></span>
					    
					   </div>
					   <div class='col-sm-2'style='margin-top:10px'>
					     <hr style='transform:rotate(90deg);margin-top:15px;width:30px;margin-left:-50px'>
					   </div>
					   <div class='col-sm-2'style='margin-top:10px'>
					     <span style='margin-left:-150px'><?=$prop_owner_email?></span>
					   
					   </div>
					   <div class='col-sm-6'style='margin-top:10px'>
					     <div class='row'>
						 <div class='col-sm-4'>
						 <?php
						  if($prop_price>=1000000){
							  ?>
						    
							    <span>Rs&nbsp;<?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</span>
							
							
							<?php
						  }
						  else if($prop_price<1000000){
						?>
							    <span>Rs&nbsp;<?=$prop_price[0]?>&nbsp;Lac</span>
							
						<?php
						  }
						?>
							<hr style='transform:rotate(90deg);width:30px;margin-top:-10px;margin-right:-20'>
                        </div>	
                         <div class='col-sm-8'>						
							<span><?=$prop_aprtment?></span>
						</div>
						 
						 </div>
					   </div>
					
					</div>
					<div class='row'style='margin-top:10px'>
					  <div class='col-sm-6'>
					  <span><?=$prop_owner_name?></span>
					  
					  
					  </div>
					   <div class='col-sm-6'>
					  <span><?=$prop_carpet_area?>SQ.FT.&nbsp;,<?=$prop_type?>&nbsp;<?=$prop_type_of?>&nbsp;Aprtment for sell</span>
					  
					  
					  </div>
					
					
					</div>
				  
				  </div>
			      
			   </div>
			     
			
			</div>
        </div>
		  <div class='modal-header card-header' style='border-radius:0px;'>
		     <h6><b>Please fill in your details to be shared with this advertiser only.</b></h6>
		  
		  
		  </div>
		   <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			     <div class='col-sm-12'>
				    <div class='row'>
					   <div class='col-sm-6'>
					      <div class='row'>
						    <div class='col-sm-12'>
							  <span>BASIC INFORMATION</span>
							</div>
							<div class='col-sm-12'>
							  <span>Are you a property dealer:&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='property_dealer' style='transform:scale(1.5);'>&nbsp;&nbsp;YES&nbsp;&nbsp;
							  <input type='radio' name='property_dealer'style='transform:scale(1.5);'>&nbsp;&nbsp;NO
							  </span>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='text' class='form-control' style='border-radius:0px;'value='<?=$login_user_name?>'>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='text' class='form-control' style='border-radius:0px;'value='<?=$email?>'>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							      <div class="input-group mb-0" >
                                       <div class="input-group-prepend">		
										 <select name='country_code' class="form-control"  style='border-radius:0px'>
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
									 <input type="phone" name='phone_number'  class="form-control" value='<?=$login_user_phone?>'style='border-radius:0px'>
								</div>
							
							</div>
						  </div>
					     
					   </div>
					   <div class='col-sm-6'>
					      <div class='row'>
						    <div class='col-sm-12'>
					          <span>OPTIONAL INFORMATION</span>
							</div>
							<div class='col-sm-12'>
					          <span>By when you are planning to buy the property?</span>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
					          <input type='radio' style='transform:scale(1.5)' name='buying_time'>&nbsp;&nbsp;&nbsp;3 months&nbsp;&nbsp;&nbsp;
							  <input type='radio' style='transform:scale(1.5)'name='buying_time'>&nbsp;&nbsp;&nbsp;6 months&nbsp;&nbsp;&nbsp;
							  <input type='radio' style='transform:scale(1.5)'name='buying_time'>&nbsp;&nbsp;&nbsp;More than 6 months&nbsp;&nbsp;&nbsp;
							
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' >&nbsp;&nbsp;&nbsp;I am interested in home loan
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' checked >&nbsp;&nbsp;&nbsp;I am interested in site visits.
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' checked >&nbsp;&nbsp;&nbsp; I agree to be contacted by 99acres.
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							   <button class='btn btn-primary btn-block py-2' style='border-radius:0px'>View Advertiser Details</button>
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
 <!-- OWNER DETAILS MODAL END-------------------------------------------------------------------------->
 <!----xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---->
	   <!--- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->
<!-- OWNER  PROPERTY EDIT MODAL START -->
  <div class="modal " id="owner_property_details_edit_Modal">
    <div class="modal-dialog ">
      <div class="modal-content "id='emiModal_body' style="overflow-y: scroll;height:auto;width:1050px;margin-top:5%;margin-left:-280px;border-radius:0px;">
      
        <!-- Modal Header -->
          <div class='modal-header card-header' style='border-radius:0px;'>
		     <h6><b>Welcome back&nbsp;<?=$prop_owner_name?> update your property to reach more buyer's</b></h6>
		  
		  
		  </div>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
			   <div class="row">
			      <div class='col-sm-12'>
				    <div class='row'>
					
					<div class='col-sm-6'>
					    <div class='row'>
						    <div class="col-sm-12">
							  <h5>Your apartment is a....</h5>
							</div>
							<!-- 2 BHK part start---------------------------------------------------------------------------->
							<div class="col-sm-12"style="margin-top:10px">
							   <div class="row">
							    
								  
								  <?php
								  if($prop_type=='2 BHK'){
									   
								  ?><div class="col-sm-4">
								     <h6>
									  <input type='radio'  checked required style='transform: scale(1.5);'id='property_input_radio' name='property_type' value='2 BHK'>
									  &nbsp;&nbsp;2 BHK</h6>
								  </div>
								  <?php
								  }
								  else{
									 ?>

                                  <div class="col-sm-4">
								     <h6>
									  <input type='radio'   required style='transform: scale(1.5);'id='property_input_radio' name='property_type' value='2 BHK'>
									  &nbsp;&nbsp;2 BHK</h6>
								  </div>


                                   <?php									 
									  
									  
								  }
								  ?>
                                  <!---- 2 BHK part end----------------------------------------------------------------------->
								  <?php
								  if($prop_type=='4 BHK'){
								  ?>
								 <div class="col-sm-4">
									  <h6>
									  <input type='radio'  checked required style='transform: scale(1.5);'id='property_input_radio1' name='property_type'value='4 BHK'>
									  &nbsp;&nbsp;4 BHK</h6>
								 </div>
								  <?php
								  }
								  else{
									?>
                                    <div class="col-sm-4">
									   <h6>
									   <input type='radio'  required style='transform: scale(1.5);'id='property_input_radio1' name='property_type'value='4 BHK'>
									   &nbsp;&nbsp;4 BHK</h6>
								   </div>

<?php									
									  
									  
									  
								  }
								  ?>
								 <div class="col-sm-4">
									 <h6>
									  <input type='radio'  required style='transform: scale(1.5);'id='other_input_radio' name='property_type'value='other'>
									  &nbsp;&nbsp;Other</h6>
								 </div>
							   
							   </div>
							 
							  
							
							</div>
                           <div class='col-sm-12' style='margin-top:10px'>
						     <h5>Room Details</h5>
						   
						   </div>
						  
						   <div class='col-sm-12' style='margin-top:10px'>
						     <label>Bedrooms</label>
							  <input type='number' name='bedrooms'required id='numberofbedroom'class='form-control'value='<?=$prop_num_bedroom?>'style='border-radius:0px;' >
							 <span id='numberofbedroom_error'></span>
						   </div>
						   
						   <div class='col-sm-12' style='margin-top:10px'>
						     <label>Bathrooms</label>
							 <input type='number' name='bathrooms' required id='numberofbathrooms'class='form-control'value='<?=$prop_num_bathroom?>'style='border-radius:0px;' >
							 <span id='numberofbathrooms_error'></span>
						   </div>
						   <div class='col-sm-12' style='margin-top:10px'>
						     <label>Balconies</label>
							 <input type='number' name='balconies'required id='numberofbalconies'class='form-control'value='<?=$prop_num_balconies?>'style='border-radius:0px;' >
							<span id='numberofbalconies_error'></span>
						   </div>
						   <div class='col-sm-12' style='margin-top:10px'>
						     <h5>Area Details</h5>
						   
						   </div> 
						   <div class="col-sm-6">
									<input type="text" name='carpet_area' id='carpet_area'required class="form-control" value='<?=$prop_carpet_area?>' aria-label="search" aria-describedby="basic-addon1"style='border-radius:0px;'>			
							        <span id='carpet_area_error'></span>
							</div>
							<div class="col-sm-6">
										<select class="form-control " id='carpet_area_input'name='carpet_area_unit'style='border-radius:0px;'  >
										  <option value='sq.ft'>sq.ft</option>
										  <option value='sq.yards'>sq.yards</option>
										  <option value='sq.m.'>sq.m.</option>
										  <option value='acres'>acres</option>
										  <option value='marla'>marla</option>
										  <option value='cents'>cents</option>
										  <option value='bigha'>bigha</option>
										  <option value='kottah'>kottah</option>
										  <option value='kanal'>kanal</option>
										  <option value='grounds'>grounds</option>
										  <option value='ares'>ares</option>
										  <option value='biswa'>biswa</option>
										  <option value='guntha'>guntha</option>
										  <option value='aankadm'>aankadm</option>
										  <option value='hectares'>hectares</option>
										  <option value='rood'>rood</option>
										  <option value='chataks'>chataks</option>
										  <option value='perch'>perch</option>
										  
                                        </select>											
								   </div>
							<div class='col-sm-12' style='margin-top:10px'>
						        <h5>Floor Details</h5>
						   
						    </div> 
							<div class="col-sm-6">
									  <input type="text"  name='floors'required class="form-control" id='prop_num_floor'  value='<?=$prop_floor?>' style='border-radius:0px;'>
							           <span id='prop_num_floor_error'></span>
							</div>
							<div class="col-sm-6">
							  <select class="form-control" name='floors_details'  id='prop_num_floor_type'style='border-radius:0px;'>
									  <option value='Basement'>Basement</option>
									  <option value='Lower Ground'>Lower Ground</option>
									  <option value='Ground'>Ground</option>
									 
							   </select>
										 
							</div>
							<div class='col-sm-12' style='margin-top:10px'>
						     <label>Age of property</label>
							
						   </div>
						   <div class="col-sm-12" style='margin-top:10px'>
								  <div class="row">
								  <?php
								  if($prop_age=='0-1 years'){
								  
								  ?>
									 <div class="col-sm-4">
										  <h6>
											   <input type='radio' checked required style='transform: scale(1.5);' name='age_of_property'id='prop_age_0_1' value='0-1 years'>
											   &nbsp;0-1 years
										   </h6>
									 </div>
								<?php
								  }
								  else{
									  ?>
									  
									  <div class="col-sm-4">
										  <h6>
											   <input type='radio' required style='transform: scale(1.5);' name='age_of_property' value='0-1 years'>
											   &nbsp;0-1 years
										   </h6>
									 </div>
									  
									  
									  <?php
									  
									  
								  }
								   
								  if($prop_age=='1-5 years'){
								  
								  ?>
									 <div class="col-sm-4">
										 <h6>
											 <input type='radio' checked  required style='transform: scale(1.5);' name='age_of_property' id='prop_age_1_5'value='1-5 years'>
											 &nbsp;1-5 years
										   </h6>
									 </div>
							    <?php
								  }
								  else{
									  ?>
									  <div class="col-sm-4">
										 <h6>
											 <input type='radio'  required style='transform: scale(1.5);' name='age_of_property'id='prop_age_1_5'value='1-5 years'>
											 &nbsp;1-5 years
										   </h6>
									 </div>
									  
									  <?php
									  
									  
								  }
								 if($prop_age=='5-10 years'){
								
								?>
								 <div class="col-sm-4">
									 <h6>
										<input type='radio' checked required style='transform: scale(1.5);' name='age_of_property'id='prop_age_5_10'value='5-10 years'>
										&nbsp;5-10 years
									  </h6>
								 </div>
								<?php
								 }
								 else{
									 ?>
									 <div class="col-sm-4">
									 <h6>
										<input type='radio'  required style='transform: scale(1.5);' name='age_of_property'id='prop_age_5_10'value='5-10 years'>
										&nbsp;5-10 years
									  </h6>
								 </div>
									 
									 
									 <?php
								 }
?>								
							   
							       </div>
			               </div>
						  
						
						</div>
					</div>
					<div class='col-sm-6'>
					   <div class='row'>
					       <div class="col-sm-12">
							  <h5>Ownership</h5>
							 
							</div>
							
							<div class="col-sm-12"style="margin-top:10px">
							   <div class="row">
							      <div class="col-sm-6">
								  <div class="row">
								  <?php
								  if($prop_ownership=='Freehold'){
								  
								  ?>
								     <div class="col-sm-12">
									    <h6>
									       <input type='radio'  checked required style='transform: scale(1.5);' name='ownership' id='ownership_freehold'value='Freehold'>
										   &nbsp;Freehold
										 </h6>
									 
									 </div>
								  <?php
								  }
								  else{
									?>
                                     <div class="col-sm-12">
									    <h6>
									       <input type='radio' required style='transform: scale(1.5);' name='ownership'id='ownership_freehold'value='Freehold'>
										   &nbsp;Freehold
										 </h6>
									 
									 </div>

                                   <?php									
									  
									  
								  }
								  
								  
								  ?>
								  </div>
								  
								  
								  </div>
								   <div class="col-sm-6">
									   <div class="row">
									   <?php
									   
									   if($prop_ownership=='Co-operative society'){
								  
									   
									   ?>
										  <div class="col-sm-12">
											<h6>
											   <input type='radio'  checked required style='transform: scale(1.5);' name='ownership'id='ownership_Co-operative_society'value='Co-operative society'>
											   &nbsp;Co-operative society
											 </h6>
										 
										   </div>
								    <?php
									   }
									   else
									   {
										?>   
										   <div class="col-sm-12">
											<h6>
											   <input type='radio'  required style='transform: scale(1.5);' name='ownership'id='ownership_Co-operative_society'value='Co-operative society'>
											   &nbsp;Co-operative society
											 </h6>
										 
										   </div>
										   
										   
										<?php   
									   }
									
									
									?>
									  
									     </div>
								  
								  </div>
								    <div class="col-sm-6"style="margin-top:5%">
									   <div class="row">
									   <?php
									   if($prop_ownership=='Leasehold'){
									   
									   ?>
										 <div class="col-sm-12">
											<h6>
											   <input type='radio' checked required style='transform: scale(1.5);' name='ownership'id='ownership_Leasehold'value='Leasehold'>
											   &nbsp;Leasehold
											 </h6>
										 
										 </div>
										<?php
									   }
									   else{
										?>

                                          <div class="col-sm-12">
											<h6>
											   <input type='radio' required style='transform: scale(1.5);' name='ownership'id='ownership_Leasehold'value='Leasehold'>
											   &nbsp;Leasehold
											 </h6>
										 
										 </div>

										
										   
										   
									<?php	   
									   }
										
										?>
									  
								        </div>
								  
								  </div>
								   <div class="col-sm-6"style="margin-top:5%">
									   <div class="row">
									   <?php
									   if($prop_ownership=='Power of Attorney'){
									   
									   
									   ?>
											 <div class="col-sm-12">
												<h6>
												   <input type='radio'checked required style='transform: scale(1.5);' name='ownership' id='ownership_Power_of_Attorney'value='Power of Attorney'>
												   &nbsp;Power of Attorney
												 </h6>
											 
											 </div>
									  <?php
									   }
									   else{
										   ?>
										   
										  <div class="col-sm-12">
												<h6>
												   <input type='radio' required style='transform: scale(1.5);' name='ownership'id='ownership_Power_of_Attorney'value='Power of Attorney'>
												   &nbsp;Power of Attorney
												 </h6>
											 
											 </div> 
										   
										   
										   
										   <?php
										   
									   }
									  
									  ?>
								        </div>
								  
								  </div>
								  
							   </div>
							 
							 </div>
							 <div class="col-sm-12"style="margin-top:3px">
							    <div class="row">
								<div class='col-sm-12'>
								   <h5>Price Details</h5>
								</div>
								   <div class="col-sm-6">
								     <input type="text" class="form-control" name="expected_price" required  id='prop_price_for_apprt_whole'placeholder="Expected Price" value='<?=$prop_price?>'style='border-radius:0px;'>
								      <span id='prop_price_for_apprt_whole_error'></span>
									  <label>PRICE IN RUPEES(₹)</label>
									  
								   </div>
								   <div class="col-sm-6">
								     <input type="text" class="form-control" name="price_per_sq_ft" required id='prop_price_for_apprt_whole_per_sqft'placeholder="Price per sq.ft" value='<?=$prop_price_per_sqft?>'style='border-radius:0px;'>
								     <span id='prop_price_for_apprt_whole_per_sqft_error'></span>
									 <label>PRICE PER SQ.FT.</label>
								   </div>
								
								</div>
							
							
							</div>
							<div class="col-sm-12" style="margin-top:20px">
							   <div class="row">
							      <div class="col-sm-6">
								    <h6>
									   <input type="checkbox"required checked style='transform: scale(1.5);'>
									&nbsp;&nbsp;All inclusive price
                                    </h6>									
								  </div>
								  <div class="col-sm-6">
								    <h6>
									   <input type="checkbox"required  checked style='transform: scale(1.5);'>
									&nbsp;&nbsp;Govt.charges excluded
                                    </h6>									
								  </div>
							   
							   
							   </div>
							
							
							</div>
							<div class="col-sm-12" style="margin-top:6px">
							  <h5>What makes your property unique</h5>
							</div>
							<div class="col-sm-12"style="margin-top:0px">
							 
							   <textarea rows="8" id="property_description"name="property_description" required class="form-control" placeholder="Share some details about your property rooms,well maintained facilties..." style="resize:none;border-radius:0px"><?=$prop_des?></textarea>
							   <span id='property_description_error'></span>
							   <p style="color:gray">Minimum <span id="description_length"><?=strlen($prop_des)?></span>/30 characters required</p>
							
							</div>
					         
							
						  
					   </div>
					  
					</div>
					
					</div>
				  </div>
				  
				  <div class='col-sm-6' style='margin-top:20px'>
				     <button class='btn btn-primary btn-block py-2' id='property_update_button_data_v' class="close" data-dismiss="modal">Save</button>
				  
				  
				  </div>
				   <div class='col-sm-6'style='margin-top:20px'>
				   <button class='btn btn-outline-danger btn-block py-2'class="close" data-dismiss="modal">Cancel</button>
				  
				   
				   </div>
			   </div>
			     
			
			</div>
        </div>
		
        
       
        
      </div>
    </div>
  </div>
 <!-- OWNER PROPERTY DETAILS EDIT MODAL END-------------------------------------------------------------------------->
 <!----xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---->
	
  <?php
	}
  ?>
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
	  
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
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
#owner_part{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
 #header_part{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
 .radioInput_textOnly__1r7GL_free_plan {
    box-shadow: "";
	height:22px;
    background: #fff;
    border-radius: 2px;
    -webkit-border-radius:2px;
    -moz-border-radius: 2px;
    outline: none;
    margin-left: 185;
	margin-top:-30;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 0px 8px 0px;
    font-size:12px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
	 
   
}
 #emiModal_body{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
        
	  
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

  
  
  </style>
  <script>
  
  $(document).ready(function(){
	  (function () {
            var last_scroll_top = 0;

     $(window).scroll(function(){
       var  scroll_top = $(this).scrollTop();
       
	  if(scroll_top>100) {
		         $("#property_row").addClass("sticky-top");
				 $("#property_row").css("box-shadow","1px 1px 5px rgba(0,0, 0, 0.4)");
				 
	   }
	  if(scroll_top<100){
		   
			  $("#property_row").css("box-shadow","");
			  $("#property_row").removeClass("sticky-top");
				 
		   
	   }
             
       
       last_scroll_top = scroll_top;
    });
}());
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
			
			var full_width=$(this).attr("rel");
			var rel1=$(this).attr("rel1");
			
			if(rel1=='full_width'){
				$("#updated_des_of_prop").text(full_width);
				$(this).html("Less");
				$(this).attr("rel1","half_width");
				
				
			}
			else{
				$("#updated_des_of_prop").text(full_width.substring(0,399));
				$(this).html("&nbsp;.....More");
				$(this).attr("rel1","full_width")
				
				
				
			}
			
			
		});
		$("#user_message").keyup(function(){
			
			$("#required_text").text(400-$(this).val().length);
			
			
		});
		var carpet_area=$("#prop_carpet_area").text();
		$(".dropdown_text").on("click",function(){
			var unit=$(this).text();
			if(unit=="Sq.ft."){
				$("#prop_carpet_area").text(carpet_area);
				
			}
			else if(unit=="Sq.yards"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/9));
				
			}
			else if(unit=="Sq.m."){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/10.764));
				
			}
			else if(unit=="grounds"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/2400));
				
			}
			else if(unit=="aankadam"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/72));
				
			}
			else if(unit=="rood"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="chataks"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/45));
				
			}
			else if(unit=="perch"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="guntha"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area*0.0009182736455));
				
			}
			else if(unit=="ares"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/1076));
				
			}
			else if(unit=="bigha"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/27000));
				
			}
			else if(unit=="kottah"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/1361));
				
			}
			else if(unit=="hectares"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/107600));
				
			}
			else if(unit=="marla"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/272.3));
				
			}
			else if(unit=="kanal"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area/5445));
				
			}
			else if(unit=="cents"){
				
				$("#prop_carpet_area").text(parseInt(carpet_area*0.0023));
				
			}
			$("#carpet_area_unit_dropdown").text(unit);
			
			
		});
		$("#emi_calculator_button").on("click",function(){
			  var loan_amount=$("#loan_amount").val();//1000000
			  var loan_period=$("#loan_period").val();//1 year
			  var loan_interest=$("#loan_interest").val();//10.5
			  var balance_type=$("#balance_type").val();
			  var cp=loan_amount;
			  var new_cp=[];
			  var lp=0;
			  if(loan_amount.length>0 && loan_period.length>0 && loan_interest.length>0 ){
				  if(balance_type=="Monthly"){
					  var s;
					  var k=1;
					  for(var i=parseInt(loan_period*12);i>=1;i--){
						    cp=parseInt(cp)+(cp/100)*loan_interest/12;//1006000//927700
						    new_cp[k]=parseInt(cp/i);
						    s=cp-(cp/i);//922167
						    cp=s;
							k++;  
					  }
					  for(var j=1;j<=parseInt(loan_period*12);j++){
						  lp=lp+new_cp[j];
						   
					  }
					    $("#calculated_emi").text(parseInt(lp/parseInt(loan_period*12)));//86655 permonth for 1 year;
					 
					  
				  }
				  else{
					    var s;
					   var k=1;
					  for(var i=parseInt(loan_period);i>=1;i--){
						    cp=parseInt(cp)+(cp/100)*loan_interest;//1006000//927700
						    new_cp[k]=parseInt(cp/i);
						    s=cp-(cp/i);//922167
						    cp=s;
							k++;  
					  }
					  for(var j=1;j<=parseInt(loan_period);j++){
						  lp=lp+new_cp[j];
						   
					  }
					   $("#calculated_emi").text(parseInt(lp/loan_period));
					   //alert(parseInt(loan_amount)+parseInt((cp/100)*loan_interest)/loan_period);//86655 permonth for 1 year;
					  
					  
					  
					  
				  }
				  
				  
			  }
			
			
		});
		
	  
  });
  
  </script>
 </head>
 <body>
 <nav class="navbar" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 ><a href="<?=base_url()."index.php/Acers/index"?>"style="color:white;text-decoration:none"><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		 <div class="col-sm-1">
		    
		  </div>
		<div class="col-sm-6">
			 <div class="input-group mb-0">
					
					<input type="search" class="form-control" style=';border:none;margin-left:100px;transform: scale(1.1);margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
					</div>
					
           </div>
		</div>
		
		  
		 <div class="col-sm-2" >
		  
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:15px;color:#F5F7FA;margin-left:80px;text-decoration:none;margin-top:-50px" ><b>Post&nbsp;Property</b>
             
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
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:25px">
                           
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
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:170px;height:230px;margin-left:-70px;margin-top:27px;font-family:'Times New Roman' Times, serif;">

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
		$this->db->where("status",1);
		$status_for_flag=0;
		foreach($this->db->get()->result() as $row){
			$status_for_flag=1;
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
		if($status_for_flag==0){
			redirect(base_url()."index.php/Acers/index");
			
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
		$emi=$eighty_percent_of_total_price*$one_year_interest*(1+$one_year_interest)^240/((1+$one_year_interest)^240-1);
		//$emi=2000000 *0.006* (1 + 0.006)^120 / ((1 + 0.006)^120 - 1); 
	    
 ?>
    <div class='container-fluid'>
	   <div class='row card 'id='property_row' style='border-radius:0px' >
	        <div class='col-sm-12 card-body'style=''>
			   <div class='row'>
			     <div class='col-sm-1'></div>
				 <div class='col-sm-11'>
				     <div class='row'>
					    <div class='col-sm-3'>
						<?php
						  if($prop_price>=1000000){
						
						?> 
						  <div class='row'>
                             <div class='col-sm-12'>
							  <h2>₹&nbsp;<b><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</b><span style='font-size:14px;color:gray'>@<?=$prop_price_per_sqft?>&nbsp;per&nbsp;sq.ft.</span></h2>
                             

							 </div>
							 
							 <div class='col-sm-12'>
							     
							     <p style='color:#3399CC;cursor:pointer' data-toggle='modal' data-target='#emiModal'>Estimated EMI&nbsp;&nbsp;₹<span><?=intval($emi)?></span></p>
							 
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
								<button class='btn btn-primary py-2 btn-block' data-toggle='modal' data-target='#owner_details_Modal' style='float:right;border-radius:0px'>CONTACT OWNER</button>
						    
								</div>
								<div class='col-sm-12' style='margin-top:2%'>
								<button class='btn btn-outline-warning py-2 btn-block' style='float:right;border-radius:0px' data-toggle='modal' data-target='#myModal'><i class='fa fa-star' style='margin:.15rem;float:left'></i>SHORTLIST</button>
						
								</div>
							 </div>
						    
							
						
						
						</div>
					 
					 </div>
				 
				 </div>

			   
			   </div>
			
			
			</div>
	   
	   </div>
<!----- header  part end --------------------------------------------------------------------->
<!---xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx----->
<!----- middle part start--------------------------------------------------------------------->
    <div class='row card-header' style='background-color:#fff;margin-top:-18px'>
	   <div class='col-sm-12'>
	     <div class='row' style='margin-top:3%'>
	    <div class='col-sm-1'></div>
		<div class='col-sm-11'>
		   <div class='row'>
		      <div class='col-sm-5 card' style='border-radius:0px'>
			     <div class='row'>
				    <div class='col-sm-12 card-header' style='background-color:#FAFBFC;border-radius:0px' >
					 <h5>Property(3)</h5>
					
					</div>
					<div class='col-sm-12 card-body'>
					   <div class='row'>
					      <div class='col-sm-12'>
						     <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg" id='cover_img_code' rel='<?=$prop_cover_img_code?>' rel2='2' class="img-fluid" style="height:350px;width:460px">
					
						  
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
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_cover_img_code?>.jpg"id='img_footer_1' class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bedroom_img_code?>.jpg" id='img_footer_2'class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					<div class='col-sm-4 card-body'>
					   <img src="http://localhost/99acres/property_user_img/<?=$prop_bathroom_img_code?>.jpg" id='img_footer_3'class="img-fluid" style="height:100px;border:3px solid #F1F2F4;width:200px">
						
					</div>
					
				 
				 </div>
			  
			  
			  </div>
			   
			   <div class='col-sm-6 ' style='margin-left:20px'>
			      <div class='row'>
				     <div class='col-sm-12 card' style='border-radius:0px'>
					    <div class='row card-body' style=''>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/68-512.webp" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Area</b></p>
										   <div class='row'>
											
											<div class='col-sm-4'>
											  <p ><b id='prop_carpet_area'><?=$prop_carpet_area?></b></p>
											</div>
											<div class='col-sm-8'>
											
										     <div class="nav-item dropdown" >
												<a style="cursor:pointer;font-size:17px;color:#3399CC;margin-top:-5;"data-toggle="dropdown" ><b><span id='carpet_area_unit_dropdown'>Sq.ft.</span></b>
												 
												 </a>
												
													<div class="dropdown-menu position-absolute"id="more_property_details"  style="overflow:auto;width:150px;height:300px;margin-left:-60px;margin-top:0px;border-radius:0px">
														<a style='cursor:pointer'class="dropdown-item">
															<span class='dropdown_text'>Sq.ft.</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>Sq.yards</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>Sq.m.</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>grounds</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>aankadam</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>rood</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>chataks</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>perch</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>guntha</span>
														</a>
														<a style='cursor:pointer'class="dropdown-item">
															<span class='dropdown_text'>ares</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>biswa</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>acres</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>bigha</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>kottah</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>hectares</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>marla</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>kanal</span>
														</a>
														<a style='cursor:pointer' class="dropdown-item">
															<span class='dropdown_text'>cents</span>
														</a>
														
														
														
							
						
													</div>
												</div>
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
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/931776.png"  style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Configuration</b></p>
										   <div class='row'>
											  <div class='col-sm-12'>
												  <div class='row'>
													<div class='col-sm-12'>
														<h6><b><?=$prop_num_bedroom?>&nbsp;Bedrooms,<?=$prop_num_bathroom?>&nbsp;Bthrooms,<?=$prop_num_balconies?>&nbsp;Balcony</b></h6>
												  </div>
												  </div>
												 
											  
											  </div>
							   
							   
							               </div>
										</div>
									  </div>
								     
								  
								  </div>
							   
							   
							   </div>
							   
							   
							
							</div>
						<div class='col-sm-12'>
							<hr>
							</div>
						
					 
					 </div>
					 
					    <div class='row card-body'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/865621.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Price</b></p>
										   <div class='row'>
												<div class='col-sm-12'>
												<?php
												
												if($prop_price>=1000000){
												
												?>
												   <h6><b><?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</b></h6>
												   
												   <?php
												}
												else if($prop_price>=100000){
												?>
												  <h6><b><?=$prop_price[0]?>.<?=$prop_price[1].$prop_price[2]?>&nbsp;Lac</b></h6>
												   
												
												<?php
												}
												else if($prop_price>=10000){
												?>
												<h6><b><?=$prop_price[0].$prop_price[1]?>&nbsp;K</b></h6>
												  


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
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-6'>
							    <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/866872.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Address</b></p>
										      <div class='row'>
												<div class='col-sm-12'>
													<p ><b><?=$prop_aprtment?>,&nbsp;<?=$prop_city?></b></p>
												</div>
											  </div>
										</div>
									  </div>
									   
								     
								  
								  </div>
							   
							   
							   </div>
							
							</div>
							<div class='col-sm-12'>
							<hr>
							</div>
						
						</div>
					 
					 
					    <div class='row card-body'>
						    <div class='col-sm-6'>
							   <div class='row'>
							      <div class='col-sm-12'>
								      <div class='row'>
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/Laminate-Floor-Icon.png"  style='height:45'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Floor Number</b></p>
										    <div class='row'>
												<div class='col-sm-12'>
													<h6><b><?=$prop_floor?>&nbsp;Floors</b></h6>
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
									    <div class='col-sm-3'>
										   <img src="http://localhost/99acres/images/9234463.png" style='height:45px'>
										</div>
										<div class='col-sm-9'>
										   <p><b style='color:gray'>Property Age</b></p>
										   <div class='row'>
												<div class='col-sm-12'>
												  <h6><b><?=$prop_age?></b></h6>
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
		   	   <div class='col-sm-1'> </div>
		   </div>
		
		
		</div>
	
	
	
	
	</div>
	</div>
	
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- why should you consider this property part start------------------------------------------------->
<div class='col-sm-12'>
<div class='row' style='margin-top:2%;'>
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
		    <hr>
		 </div>
		 
		 
		 
	  
	  
	  </div>
   
   
   </div>
   <div class='col-sm-12'>
     
   </div>
   



</div>
</div>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!---- about ownership and property description part start------------------------------------------>
  <div class='col-sm-12'>
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
			   
			  <hr>
			 </div>
		  
		  
		  </div>
	   
	   
	   </div>
       <div class='col-sm-12'>
	    
	   </div>
   
   
   
   </div>
  </div>
 
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!--- about property details part start------------------------------------------------------------->
   <div class='col-sm-12'>
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
				   
						     <b style='color:gray' id='long_des'><span id='updated_des_of_prop'><?=substr($prop_des,0,399)?></span>
							  <?php 
								  if(strlen($prop_des)>400){
								  ?>
								   <span style='cursor:pointer;color:black;'  rel1='full_width'rel='<?=$prop_des?>' id='prop_des_more' >&nbsp;.....More</span>
								 <?php
								 
								  }
							 ?>
							 
							 </b>
						     
							 <!--<b style='color:gray;display:none' id='short_des'><?=$prop_des?><span style='cursor:pointer;color:black' rel='<?=substr($prop_des,0,399)?>' id='prop_des_less'>&nbsp;Less</span></b>
						   -->
						   
						  
					
					
				 </div>
				  
				  
			  
			  </div>
		   
		   <hr>
		   </div>
		
		</div>
	  
	  
	  </div>
	  <div class='col-sm-12'></div>
     
   
   
   
   </div>
 </div>


<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- furnshing part sart----------------------------------------------------------------------->
 <div class='col-sm-12'>
 <div class='row' >
      <div class='col-sm-12'>
	    <div class='row'>
	     <div class='col-sm-1'></div>
		 <div class='col-sm-11'>
		   <div class='row'>
		      <div class='col-sm-12'>
			     <p><b style='color:gray'>Furnished</b></p>
			   </div>
			    <div class='col-sm-12'>
			     <p>Furnishing Details</p>
			   </div>
		      <div class='col-sm-12'>
			    <div class='row'>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/1-Water-128.webp" style='height:40px'>
					  1 Water Purifier</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/2117228.png" style='height:40px'>
					  3 Fan</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/8025843.png" style='height:40px'>
					  1 Fridge</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/__bed_hotel_sleep-256.webp" style='height:45px'>
					  Undefined</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/exhaust__fan__airflow__ventilator-128.webp" style='height:35px'>
					  1 Exhaust Fan</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/table-dining-eat-meeting-kitchen-128.webp" style='height:35px'>
					  1 Dining Table</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/4630017.png" style='height:35px'>
					  1 Geyser</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/08-kitchenware-electronics-stove-tools-kitchen-oven-cooking-128.webp" style='height:35px'>
					  1 Stove</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/Lightbulb-128.webp" style='height:35px'>
					  20 Light's</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/smart_home_ac_air_conditioner_electronic_cool-128.webp" style='height:35px'>
					 1 Ac</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/tv-128.webp" style='height:35px'>
					 1 TV</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/7698652.png" style='height:35px'>
					 1 Modular Kitchen</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/z1-fireplace_interior_chimney_winter-128.webp" style='height:35px'>
					 1 Chimney</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/SingleCartoonSleepAndRestYulia_12-128.webp" style='height:35px'>
					 5 Curtains</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/Wardrobe-128.webp" style='height:35px'>
					 2 Wardrobe</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/armchair_chair_single_sofa-128.webp" style='height:35px'>
					  1 Sofa</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/laundry_washing_machine_basket-128.webp" style='height:20px'>
					  1&nbsp;Washing-Machine</p>
					</div>
					<div class='col-sm-2'>
					 <p><img src="http://localhost/99acres/images/16-kitchenware-microwave_oven-electronics-microwave-heating-cooking-128.webp" style='height:35px'>
					  0 Microwave</p>
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
  





<!-- furnshing part end----------------------------------------------------------------------->
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
<!-- owner details part sart----------------------------------------------------------------------->
  <div class='row' style='background-color:FAFBFC;height:400px'>
     <div class='col-sm-12'>
	    <div class='row' >
		   <div class='col-sm-1'></div>
		   <div class='col-sm-11 card-body'>
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
							<button class='btn btn-primary py-2' data-toggle='modal' data-target='#myModal' style='border-radius:0px;background-color:#59CDB5;border-color:#59CDB5'>VIEW PHONE NUMBER</button>
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
					     <b style='color:gray'><h4>Send enquiry to Owner</h4></b>
					  
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
					     <button class='btn btn-primary py-2 btn-block'   data-toggle='modal' data-target='#myModal'style='border-radius:0px'>SEND</button>
					  
					  
					  </div>
				   
				   </div>
				
				</div>
				<div class='col-sm-3'>
				   <div class='row' style='margin-top:35px'>
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
  </div>
  <!---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX--------->
  
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--------------------------------------------------------------->
	
	
							 
 <div class="container-fluid bg-dark text-light" >
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
<!--- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->
		<!-- THE EMI Modal -->
  <div class="modal" id="emiModal">
    <div class="modal-dialog">
      <div class="modal-content"id='emiModal_body' style="width:500px;margin-top:20%;margin-left:10px;border-radius:0px;">
      
        <!-- Modal Header -->
          <div class='modal-header card-header' id='emiModal_header'>
		     <h4><b>EMI Calculator</b></h4>
		  
		  
		  </div>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			       <div class='col-sm-12'>
				      <h6>Calculate the EMI's for your home loan now!</h6>
				   
				   </div>
				    <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Loan Amount ₹:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <div class='row'>
					     <div class='col-sm-12'>
						 <input type='text' class='form-control'id='loan_amount' style='border-radius:0px' value='<?=$prop_price*80/100?>'>
						 
						 </div>
						 <div class='col-sm-12'>
						   <?php
						   
						     if($prop_price>=1000000){
						   
						   ?>
						      <h6>80% of Rs &nbsp;<?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp; Lac</h6>
						  
						  <?php
						   
							 }
							 else if($prop_price>=100000){
						   ?>
						     <h6>80% of Rs &nbsp;<?=$prop_price[0]?>.<?=$prop_price[1].$prop_price[2]?>&nbsp; Lac</h6>
						  
						   
						   
						   <?php
						   
							 }
						   
						   ?>
						 </div>
					  
					  
					  </div>
				      
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Loan Period(Yrs):</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <input type='text' class='form-control'id='loan_period' style='border-radius:0px' value='20'>
						 
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Interest Rate %:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <input type='text' class='form-control'  id='loan_interest'style='border-radius:0px' value='10.5'>
						 
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>Reducing Balance Type:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <select class='form-control'id='balance_type' style='border-radius:0px'>
                          <option>Monthly</option>
						   <option>Annual</option>
                            


                     </select>					  
				   
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      <h6>EMI:</h6>
				   
				   </div>
				   <div class='col-sm-6'style='margin-top:10px'>
				      <div class='row'>
					     <div class='col-sm-12 card-body'>
						    <span  style='background-color:#FFFF99;border-radius:0px;' >&nbsp;₹&nbsp;<span id='calculated_emi'></span></span>   					  
				   
						 </div>
					  
					  </div>
				     
				   </div>
				   <div class='col-sm-6' style='margin-top:10px'>
				      
				   
				   </div>
				   <div class='col-sm-3'style='margin-top:10px'>
				       <button class='btn btn-primary btn-block' id='emi_calculator_button'style='border-radius:0px'>Calculate</button>
				   </div>
				   <div class='col-sm-3'style='margin-top:10px'>
				      <button class='btn btn-outline-secondary btn-block' class="close" data-dismiss="modal"style='border-radius:0px'>Cancel</button>
				   </div>
			   </div>
			
			</div>
        </div>
        
       
        
      </div>
    </div>
  </div>
<!--- EMI MODAL END --------------------------------------------------------------------------------------->
  <!--- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx--->
<!-- OWNER DEAILS  MODAL START -->
  <div class="modal" id="owner_details_Modal">
    <div class="modal-dialog">
      <div class="modal-content"id='emiModal_body' style="width:900px;margin-top:5%;margin-left:-200px;border-radius:0px;">
      
        <!-- Modal Header -->
          <div class='modal-header card-header' style='border-radius:0px;'>
		     <h6><b>You are requesting to view advertiser details.</b></h6>
		  
		  
		  </div>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			      <div class='col-sm-12'>
				    <div class='row'>
					   <div class='col-sm-6'>
					     <span>POSTED BY OWNER:</span>
					    
					   </div>
					   <div class='col-sm-6'>
					     <span>POSTED ON MAY 16, 2022:</span>
					   
					   </div>
					   <div class='col-sm-2' style='margin-top:10px'>
					     <span>98***543**</span>
					    
					   </div>
					   <div class='col-sm-2'style='margin-top:10px'>
					     <hr style='transform:rotate(90deg);margin-top:15px;width:30px;margin-left:-50px'>
					   </div>
					   <div class='col-sm-2'style='margin-top:10px'>
					     <span style='margin-left:-150px'>*****@*****.com</span>
					   
					   </div>
					   <div class='col-sm-6'style='margin-top:10px'>
					     <div class='row'>
						 <div class='col-sm-4'>
						 <?php
						  if($prop_price>=1000000){
							  ?>
						    
							    <span>Rs&nbsp;<?=$prop_price[0].$prop_price[1]?>.<?=$prop_price[2].$prop_price[3]?>&nbsp;Lac</span>
							
							
							<?php
						  }
						  else if($prop_price<1000000){
						?>
							    <span>Rs&nbsp;<?=$prop_price[0]?>&nbsp;Lac</span>
							
						<?php
						  }
						?>
							<hr style='transform:rotate(90deg);width:30px;margin-top:-10px;margin-right:-20'>
                        </div>	
                         <div class='col-sm-8'>						
							<span><?=$prop_aprtment?></span>
						</div>
						 
						 </div>
					   </div>
					
					</div>
					<div class='row'style='margin-top:10px'>
					  <div class='col-sm-6'>
					  <span><?=$prop_owner_name?></span>
					  
					  
					  </div>
					   <div class='col-sm-6'>
					  <span><?=$prop_carpet_area?>SQ.FT.&nbsp;,<?=$prop_type?>&nbsp;<?=$prop_type_of?>&nbsp;Aprtment for sell</span>
					  
					  
					  </div>
					
					
					</div>
				  
				  </div>
			      
			   </div>
			     
			
			</div>
        </div>
		  <div class='modal-header card-header' style='border-radius:0px;'>
		     <h6><b>Please fill in your details to be shared with this advertiser only.</b></h6>
		  
		  
		  </div>
		   <div class="modal-body"  >
            <div class="container-fluid">
			   <div class="row">
			     <div class='col-sm-12'>
				    <div class='row'>
					   <div class='col-sm-6'>
					      <div class='row'>
						    <div class='col-sm-12'>
							  <span>BASIC INFORMATION</span>
							</div>
							<div class='col-sm-12'>
							  <span>Are you a property dealer:&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='property_dealer' style='transform:scale(1.5);'>&nbsp;&nbsp;YES&nbsp;&nbsp;
							  <input type='radio' name='property_dealer'style='transform:scale(1.5);'>&nbsp;&nbsp;NO
							  </span>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='text' class='form-control' style='border-radius:0px;'placeholder='NAME'>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='text' class='form-control' style='border-radius:0px;'placeholder='EMAIL'>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							      <div class="input-group mb-0" >
                                       <div class="input-group-prepend">		
										 <select name='country_code' class="form-control"  style='border-radius:0px'>
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
									 <input type="phone" name='phone_number'  class="form-control" placeholder="Enter Phone Number"style='border-radius:0px'>
								</div>
							
							</div>
						  </div>
					     
					   </div>
					   <div class='col-sm-6'>
					      <div class='row'>
						    <div class='col-sm-12'>
					          <span>OPTIONAL INFORMATION</span>
							</div>
							<div class='col-sm-12'>
					          <span>By when you are planning to buy the property?</span>
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
					          <input type='radio' style='transform:scale(1.5)' name='buying_time'>&nbsp;&nbsp;&nbsp;3 months&nbsp;&nbsp;&nbsp;
							  <input type='radio' style='transform:scale(1.5)'name='buying_time'>&nbsp;&nbsp;&nbsp;6 months&nbsp;&nbsp;&nbsp;
							  <input type='radio' style='transform:scale(1.5)'name='buying_time'>&nbsp;&nbsp;&nbsp;More than 6 months&nbsp;&nbsp;&nbsp;
							
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' >&nbsp;&nbsp;&nbsp;I am interested in home loan
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' checked >&nbsp;&nbsp;&nbsp;I am interested in site visits.
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							  <input type='checkbox' style='transform:scale(1.5);border-radius:0px' checked >&nbsp;&nbsp;&nbsp; I agree to be contacted by 99acres.
							</div>
							<div class='col-sm-12' style='margin-top:20px'>
							   <button class='btn btn-primary btn-block py-2' class='close' data-dismiss='modal' data-toggle='modal' data-target='#myModal' style='border-radius:0px'>View Advertiser Details</button>
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
 <!-- OWNER DETAILS MODAL END-------------------------------------------------------------------------->
 <!----xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---->
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
									 
									 
				 

 <?php
	}
 
 ?>
 </body>
 </html>
	 
	 <?php
 } 
 ?>