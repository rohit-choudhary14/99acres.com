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
 <link rel="stylesheet" href="http://localhost/99acres/js/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/dist/css/dropify.min.css">
 <link rel="stylesheet" href="http://localhost/99acres/js/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/dist/css/dropify.css">
  
  
  <script src="http://localhost/99acres/js/jQuery-Plugin-To-Beautify-File-Inputs-with-Custom-Styles-Dropify/dist/js/dropify.min.js"></script>
        <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
				
	 
            });
        </script>
  <script>
 $(document).ready(function(){
	 setTimeout(function(){
			       $("#myModal").modal();
		  }, 10000);
	
	 
	$("#city").keyup(function(){
		 $("#card_search_result").slideDown();
		 var city_name=$(this).val();
		 $.post(
		 "http://localhost/99acres/index.php/Acers/city_finder",{city_name:city_name},function(data){
			   if(data.trim().length>0){
                   				   
					 $("#card_search_result").html(data.trim());
					 $(".text").on("click",function(){
						var city=$(this).text();
						$("#city").val(city.trim());
						$("#card_search_result").html("");
						$("#card_search_result").slideUp();
						
						
					});
					$(".dismiss").on("click",function(){
						$("#card_search_result").html("");
						$("#card_search_result").slideUp();
						
						
					});
			   }
			 
		 }); 
		 
	 });
	 $("#apartment").keyup(function(){
		 $("#card_search_result_for_apartment").slideDown();
		 var apartment_name=$(this).val();
		 $.post(
		 "http://localhost/99acres/index.php/Acers/aprtment_finder",{apartment_name:apartment_name},function(data){
			   if(data.trim().length>0){
                   				   
					 $("#card_search_result_for_apartment").html(data.trim());
					 $(".text").on("click",function(){
						var apartment_name=$(this).text();
						$("#apartment").val(apartment_name.trim());
						$("#card_search_result_for_apartment").html("");
						$("#card_search_result_for_apartment").slideUp();
						
						
					});
					$(".dismiss").on("click",function(){
						$("#card_search_result_for_apartment").html("");
						$("#card_search_result_for_apartment").slideUp();
						
						
					});
			   }
			 
		 }); 
		 
	 });
	 $("#continue").on("click",function(){
		var city= $("#city").val();
		var apartment=$("#apartment").val();
		if(city.length>0){
			$("#city_error").hide();
			
		}
		if(apartment.length>0){
			$("#apartment_error").hide();
		}
		
		if(city.length<=0){
			$("#city_error").html("<span style='color:red'>*Please Enter City Name</span><br>");
			
		}
		if(apartment.length<=0){
			$("#apartment_error").html("<span style='color:red'>*Please Enter Apartment/Society Name</span><br>");
			
		}
		 if(city.length>0 && apartment.length>0){
			$("#city_error").hide();
			$("#apartment_error").hide();
		}
		 
		 
		 
		 
	 });
	  
	
	 $(".tags-and-chips_textOnly__2k10B.pageComponent").on("click",function(){
		  var rel =$(this).attr("rel");
		  if(rel=="0"){
		    $("#clicked-"+rel).css("background-color","#D8EFFD");
			$("#clicked-"+1).css("background-color","white");
			$("#clicked-"+2).css("background-color","white");
		  }
		  if(rel=="1"){
		    $("#clicked-"+rel).css("background-color","#D8EFFD");
			$("#clicked-"+0).css("background-color","white");
			$("#clicked-"+2).css("background-color","white");
		  }
		  if(rel=="2"){
		    $("#clicked-"+rel).css("background-color","#D8EFFD");
			$("#clicked-"+1).css("background-color","white");
			$("#clicked-"+0).css("background-color","white");
		  }
         		  
	 });
	 $(".pageComponent.radioInput_textOnly__1r7GL").on("click",function(){
		 var id=$(this).attr("id");
		
		 $("#"+id).css("background-color","#D8EFFD");
		 
	 });
		  
	$(".fa.fa-plus").on("click",function(){
		$("#addother").hide();
		$("#extra").show();
		$("#done").on("click",function(){
			var num=$("#newbadroom").val();
			if(parseInt(num)>4 && parseInt(num)<100){
				$("#new_bad_room").html("<div id="+num+" class='pageComponent radioInput_textOnly__1r7GL' data-label='VALUE' data-custominfo='{&quot;custom_object&quot;:{&quot;value&quot;:&quot;1&quot;}}'><span>"+num+"</span></div>");
			}						
								 
				$("#addother").show();
				$("#extra").hide();
				
		});
	});
	
	$("#2bhk").on("click",function(){
		alert("");
		
		
	});
	$("#numberofbedroom").on("click",function(){
		var number=$(this).val();
		
		if(number<0){
			$("#numberofbedroom").val("0");
			
		}
		
		
	});
	$("#property_description").keyup(function(){
		$("#description_length").text($(this).val().length);
		if($(this).val().length>=30){
			$("#price_submit_button").removeAttr("disabled");
			$("#property_description").css("border-color","");
			
		}
		else if($(this).val().length<30){
			
			$("#price_submit_button").attr("disabled","disabled");
			$("#property_description").css("border-color","red");
			
			
		}
		
		
	});
	$("#4bhk_input_radio").on("click",function(){
		
		$("#2bhk_carousel").slideDown();
		 
		
		$("#property_type_for_2bhk_1").text("4BHK");
		$("#property_type_for_2bhk").text("4BHK");
		$("#property_noofbathroom_for_2bhk").text("3");
		$("#property_carpert_area_for_2bhk").text("1677");
		$("#property_noofbathroom_for_2bhk_1").text("3");
		$("#property_carpert_area_for_2bhk_1").text("1490");
		
		
	});
	$("#2bhk_input_radio").on("click",function(){
		
		$("#2bhk_carousel").slideDown();
		/*$("#radio").prop("checked", false);
		$("#radio1").prop("checked", false);*/
		$("#property_type_for_2bhk_1").text("2BHK");
		$("#property_type_for_2bhk").text("2BHK");
		$("#property_noofbathroom_for_2bhk").text("2");
		$("#property_carpert_area_for_2bhk").text("1231");
		$("#property_noofbathroom_for_2bhk_1").text("2");
		$("#property_carpert_area_for_2bhk_1").text("1175");
		
		
		
	});
	$("#other_input_radio").on("click",function(){
		$("#2bhk_carousel").slideUp();
		$("#numberofbathrooms").val("");
		$("#carpet_area_input").val("");
		$("#radio").prop("checked", false);
		$("#radio1").prop("checked", false);
		
	});
	
	$(".btn.btn-default").on("click",function(){
		$("#2bhk_input_radio").prop("checked", false);
		$("#other_input_radio").prop("checked", true);
		$("#radio").prop("checked", false);
		$("#radio1").prop("checked", false);
		$("#numberofbathrooms").val("");
		$("#carpet_area_input").val("");
		$("#2bhk_carousel").slideUp();
		
		
	});
	$("#radio").on("click",function(){
		 var no_of_bathroom=$("#property_noofbathroom_for_2bhk").text();
		 var carpet_area=$("#property_carpert_area_for_2bhk").text();
		
		 $("#numberofbathrooms").val(no_of_bathroom);
		 $("#carpet_area_input").val(carpet_area);
		 $("#updated_form_alert_message").slideDown();
		 setTimeout(function(){
			       $("#updated_form_alert_message").slideUp();
		  }, 3000);
		 $("#2bhk_carousel").slideUp();
		
		
	});
	$("#radio1").on("click",function(){
		 var no_of_bathroom=$("#property_noofbathroom_for_2bhk_1").text();
		 var carpet_area=$("#property_carpert_area_for_2bhk_1").text();
		
		 $("#numberofbathrooms").val(no_of_bathroom);
		 $("#carpet_area_input").val(carpet_area);
		 $("#2bhk_carousel").slideUp();
		 $("#updated_form_alert_message").slideDown();
				 setTimeout(function(){
			       $("#updated_form_alert_message").slideUp();
		         }, 3000);
		 
		
		
	});
	
		
	});
  
  
  </script>

<style>
 body{
	  
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
  }
  

#extra{
	
	display:none;
	
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
.tags-and-chips_textOnly__2k10B {
	box-shadow: "";
	background: #fff;
	border-radius: 24px;
	-webkit-border-radius: 24px;
	-moz-border-radius: 24px;
	outline: none;
	margin: 0;
	cursor: pointer;
	align-items: center;
	border: 1px solid #ebecf0;
	padding: 4px 12px 2px;
	font-size: 14px;
	line-height: 24px;
	font-weight: 400;
	color: #42526e;
	display: inline-flex;
	text-align: center;
	vertical-align: middle;
}
.tagWrapper_tags_wrapper__KIRJJ>div {
margin-right: 8px;
margin-bottom: 8px;
display: inline-flex;
align-items: center;
}
.tagWrapper_tags_wrapper__KIRJJ>div {
margin-right: 8px;
margin-bottom: 8px;
display: inline-flex;
align-items: center;
}
.tags-and-chips_textOnly__2k10B {
box-shadow: "";
background: #fff;
border-radius: 24px;
-webkit-border-radius: 24px;
-moz-border-radius: 24px;
outline: none;
margin: 0;
cursor: pointer;
align-items: center;
border: 1px solid #ebecf0;
padding: 4px 12px 2px;
font-size: 14px;
line-height: 24px;
font-weight: 400;
color: #42526e;
display: inline-flex;
text-align: center;
vertical-align: middle;
}
#right_side_details{
	
 position: fixed;
 top:140px;
 
 left:100px;
 right:auto;

	
}
#left_side_details{
	
 position: fixed;
 top:140px;
 
 left:auto;
 right:100;

	
}
.tagWrapper_tags_wrapper__KIRJJ {
    display: inline-block;
}
.tagWrapper_tags_wrapper__KIRJJ {
    display: inline-block;
}
.multiple_input {
    margin-bottom: 12px;
}
.tagWrapper_tags_wrapper__KIRJJ>div {
    margin-right: 8px;
    margin-bottom: 8px;
    display: inline-flex;
    align-items: center;
}
.tagWrapper_tags_wrapper__KIRJJ>div {
    margin-right: 8px;
    margin-bottom: 8px;
    display: inline-flex;
    align-items: center;
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
#age_property_col{
	display:none;	
}
#card_search_result{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
} 


 #card_search_result_for_apartment{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 } 
 #more_property_details{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
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
  </head>
  
  <body >
  <nav class="navbar sticky-top" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 ><a href="<?=base_url().'index.php/Acers/home'?>"style='color:white;text-decoration:none'><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     </div>
		 
		
		<div class="col-sm-2">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:17px;margin-left:40px;"data-toggle="dropdown"><b>For&nbsp;Owners</b>
                            </a>
                        <div class="dropdown-menu position-absolute" id="more_property_details" style="width:1000px;height:300px;;margin-top:27px">
                           
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
		  <div class="col-sm-5">
			 <div class="input-group mb-0">
					
					<input type="text" class="form-control" style=';border:none;margin-left:50px;transform: scale(1.1);margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
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
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:17px;color:#F5F7FA;margin-left:20px;text-decoration:none" ><b>Post&nbsp;Property</b>
             </a>
			 
                        
		  </div>
		   <div class="col-sm-1" style="margin-top:0px">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
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
		 
		<div class="col-sm-1" style="margin-top:0px">
		     <div class="nav-item dropdown" style="color:white;">
			  <?php
							      $this->db->select("*");
								  $this->db->from("user");
								  $this->db->where("email",$email);
								  $rec=$this->db->get()->result();
								  $name;
								  $phone_number;
								  foreach($rec as $row){
									  $name=$row->name;
									  $phone_number=$row->phone_number;
								  }
							   
							   
							   ?>
                        <a style="cursor:pointer;font-size:17px;margin-left:20px;"data-toggle="dropdown">
						 <span class='radioInput_textOnly__1r7GL 'style="background-color:#D7F2E3"><b><?=$name[0]?></b></span> 
    
						   
						 </a>
						   
						   
                        <div class="dropdown-menu position-absolute"  id="more_property_details"style="width:200px;height:500px;margin-left:-95px;margin-top:24px">

                               <span class="dropdown-item">
							   
							    <a  style='cursor:pointer' ><b><?=$name?></b></a>
							   </span>
							    
								<?php
								   echo"<a href='".base_url()."index.php/Acers/editBuyerProfile' class='dropdown-item'>
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
    <div class="row" style="margin-top:2%;">
	   <div class="col-sm-12">
	      <div class="row">
		 
		      <div class="col-sm-1"></div>
		      <div class="col-sm-3"  id="right_side_details"style="background-color:#F1F2F4;border-radius:5%;height:420px;margin-left:-70px">
			     <div class="row" >
				  
					   <div class="col-sm-2"style="margin-top:5%" >
						   <div class="row">

						       <div class="col-sm-12">
								  <div class="radioInput_textOnly__1r7GL" >
									<b>1</b>
								  </div>
								</div>
								
						   </div>
						  
						    <div class="row">
								<div class="col-sm-12" style="height:55px">
								</div>
						  </div>
						   <div class="row" style="margin-top:5%">
							   <div class="col-sm-12">
								  <div class="radioInput_textOnly__1r7GL">
									<b>2</b>
								  </div>
								</div>
						   </div>
						    <div class="row">
								<div class="col-sm-12" style="height:55px">
								</div>
						  </div>
						   <div class="row">
							    <div class="col-sm-12">
								  <div class="radioInput_textOnly__1r7GL" >
									<b>3</b>
								  </div>
								</div>
						   </div>
						   <div class="row">
								<div class="col-sm-12" style="height:55px">
								</div>
						  </div>
						   <div class="row">
								<div class="col-sm-12">
								  <div class="radioInput_textOnly__1r7GL" >
									<b>4</b>
								  </div>
								</div>
						   </div>
						    <div class="row">
								<div class="col-sm-12" style="height:55px">
								</div>
						  </div>
						   <div class="row">
						        <div class="col-sm-12">
								  <div class="radioInput_textOnly__1r7GL" >
									<b>5</b>
								  </div>
							    </div>
						   </div>
						   
					   </div>
					   <div class="col-sm-10"style="margin-top:5%" >
							<div class="row" >
								 <div class="col-sm-12">
								   <b>Basic Details</b>
								 
								 </div>
								  <div class="col-sm-12">
								   <p>Step 1</p>
								 
								 </div>
							  
							</div>
							<div class="row"style="margin-top:8%" >
								 <div class="col-sm-12">
								   <b>Location Details</b>
								 
								 </div>
								  <div class="col-sm-12">
								   <p>Step 2</p>
								 
								 </div>
							  
							</div>
							<div class="row"style="margin-top:8%" >
								 <div class="col-sm-12">
								   <b>Property Profile</b>
								 
								 </div>
								  <div class="col-sm-12">
								   <p>Step 3</p>
								 
								 </div>
							  
							</div>
							<div class="row"style="margin-top:8%" >
								 <div class="col-sm-12">
								   <b>Photos</b>
								 
								 </div>
								  <div class="col-sm-12">
								   <p>Step 4</p>
								 
								 </div>
							  
							</div>
							<div class="row"style="margin-top:8%" >
								 <div class="col-sm-12">
								   <b>Pricing & Others</b>
								 
								 </div>
								  <div class="col-sm-12">
								   <p>Step 5</p>
								 
								 </div>
							  
							</div>
					   </div>
					     
					  
				 </div>
			  
			  
			  
			  
			  
			  
			  </div>
			  <div class="col-sm-4" style="margin-left:300px;margin-top:40px">
			    <div class="row"style='display:none;margin-top:-55px'id='updated_form_alert_message'>
				  <div class="col-sm-12">
				    <div class='alert alert-success' style='background-color:#171747;color:white'>Based on your floor plan form has been updatded</div>
				  </div>
				</div>
			  <?php
			if(isset($_REQUEST['basicdetails'])){
				?>
			      <div class="row">
				     <div class="col-sm-12" style="margin-top:2%">
					   <?php
                          echo"<a href='".base_url()."index.php/Acers/Post_property' style='text-decoration:none'>
						  <i class='fa fa-arrow-left'></i>&nbsp;&nbsp;back</a>";

                       ?>					   
					 </div>
				  
				  </div>
			
			      <div class="row" style="margin-top:5%">
				    <div class="col-sm-12">
					  <h3>Where is property located?</h3>
					 
					</div>
					<div class="col-sm-12">
					  <p style="color:gray">An accurate location help connect with the right buyers</p>
					 
					</div>
					<div class="col-sm-12">
					  
					    <?php
						      
							  echo form_open(base_url()."index.php/Acers/location/".$_REQUEST['basicdetails']);
							  echo form_label("City");
							  $data=array(
								 "type"=>"text",
								 "name"=>"city",
								 "id"=>"city",
								 "class"=>"form-control",
								 "required"=>"required",
								 "style"=>'border-radius:0px;',
								 "placeholder"=>"Enter City"
							  
						  
								  );
								  echo form_input($data);
								  echo"<span id='city_error'></span>";
								 
								  echo"<br>";
								  
								  ?>
							  
								 <div class="col-sm-12" id="card_search_result" style="margin-top:-15px;margin-bottom:5%" >
								 
								 </div>
								 
							
							  
							  <?php
							   echo form_label("Apartment/Society");
							  $data=array(
								 "type"=>"text",
								 "name"=>"Apartment",
								 "class"=>"form-control",
								 "id"=>"apartment",
								 "style"=>'border-radius:0px;',
								 "required"=>"required",
								 "placeholder"=>"Apartment/Society"
							  
							  
							  );
							   echo form_input($data);
							   echo"<span id='apartment_error'></span>";
							   echo"<br>";
							   ?>
							    <div class="col-sm-12" id="card_search_result_for_apartment" style="margin-top:-15px;margin-bottom:5%" >
								 
								</div>
								
							   <?php
							   $data=array(
								 "type"=>"submit",
								 "class"=>"btn btn-primary py-2 btn-block",
								 "style"=>'',
								 "id"=>"continue",
								 "value"=>"Continue"
							  
							  
							  );
							  echo form_input($data)."<br>";
							  echo form_close();
						
						?>
					    
					</div>
				  </div>
			  <?php
			}
			
			else if(isset($_REQUEST['propertyprofile'])){
			  ?>
				  <div class="row">
						 <div class="col-sm-12" style="margin-top:2%">
						   <?php
							  echo"<a href='".base_url()."index.php/Acers/Post_property' style='text-decoration:none'>
							  <i class='fa fa-arrow-left'></i>&nbsp;&nbsp;back</a>";

						   ?>					   
						 </div>
					  
					  </div>
					   <div class="row" style="margin-top:5%">
							<div class="col-sm-12">
							  <h3>Tell us about your property</h3>
							 
							</div>
							<div class="col-sm-12"style="margin-top:5%">
							  <h5>Your apartment is a....</h5>
							</div>
							<?php
							
							echo form_open(base_url()."index.php/Acers/property_profile_details/".$_REQUEST['propertyprofile']);
							?>
<!-- 2 BHK part start---------------------------------------------------------------------------->
							<div class="col-sm-12"style="margin-top:5%">
							   <div class="row">
							     <div class="col-sm-4">
								  <h6>
								  <input type='radio' uncheck  required style='transform: scale(1.5);'id='2bhk_input_radio' name='property_type' value='2 BHK'>
								  &nbsp;&nbsp;2 BHK</h6>
								  </div>
<!---- 2 BHK part end----------------------------------------------------------------------->
								 <div class="col-sm-4">
								  <h6>
								  <input type='radio'uncheck required style='transform: scale(1.5);'id='4bhk_input_radio' name='property_type'value='4 BHK'>
								  &nbsp;&nbsp;4 BHK</h6>
								 </div>
								 <div class="col-sm-4">
								 <h6>
								  <input type='radio' uncheck required style='transform: scale(1.5);'id='other_input_radio' name='property_type'value='other'>
								  &nbsp;&nbsp;Other</h6>
								 </div>
							   
							   </div>
							 
							  
							
							</div>
<!-- 2BHK carousel start----------------------------------------------------------------------->					     

							<div class="col-sm-12" style="margin-top:5%;display:none" id="2bhk_carousel">
		
							 <div class="row" style="margin-top:1%">
							         
									 <div class="col-sm-12" style="box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);border-radius:10px">
										  <div id="header-carousel1" class="carousel slide" data-ride="carousel" data-interval="false">
											  <div class="carousel-inner">
												 <div class="carousel-item active" >
													<div class="row">
													
														  <div class="col-sm-12" style="height:230px" >
															 <div class="row" style="margin-top:2%">
															    
															    <div class="col-sm-8">
																   
																   <div class="row" >
																        
																        <div class="col-sm-12">
																		   <input type="radio" style='transform: scale(1.5);margin-left:3px;' name='2bhk_plan_check'id='radio'>
																		
																		</div>
																		
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">Aprtment type</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_type_for_2bhk'>2BHK</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">Super Built-up area</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_carpert_area_for_2bhk'>1231</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">No.of Bathrooms</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_noofbathroom_for_2bhk'>2</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																
															       </div>
																
																</div>
																<div class="col-sm-4">
																    <img src="http://localhost/99acres/images/f8smparv_med.jpg" height="70px">
																</div>
															  
															 
															 </div>
															 
										
										                    </div>
							        
													  <a href="" class="cat-img position-relative overflow-hidden mb-3">
													   
													  </a>
							                      </div>
							  
												 </div>
											  
                                                <div class="carousel-item" >
											   
												   <div class="row">
														<div class="col-sm-12" style="height:230px" >
															 <div class="row" style="margin-top:2%">
															    
															    <div class="col-sm-8">
																   
																   <div class="row" >
																        
																        <div class="col-sm-12">
																		   <input type="radio" style='transform: scale(1.5);margin-left:3px;'name='2bhk_plan_check' id='radio1'>
																		
																		</div>
																		
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">Aprtment type</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_type_for_2bhk_1'>2BHK</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">Super Built-up area</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_carpert_area_for_2bhk_1'>1175</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																		<div class="col-sm-12" >
																			<div class="row">
																			 <div class="col-sm-8" style="margin-top:5%">
																			     <p style="color:gray;">No.of Bathrooms</p>
																			 
																			 
																			 </div>
																			 <div class="col-sm-4"style="margin-top:5%">
																			    <b id='property_noofbathroom_for_2bhk_1'>2</b>
																			 </div>
																			
																			
																			</div>
																		</div>
																
															       </div>
																
																</div>
																<div class="col-sm-4">
																    <img src="http://localhost/99acres/images/f8smparv_med.jpg" height="70px">
																</div>
															  
															 
															 </div>
															 
										
										                    </div>
														
													</div>
											   </div>       
											   <div class="carousel-item" >
											   
												   <div class="row">
														<div class="col-sm-12" style="height:230px" >
															 <div class="row" style="margin-top:2%">
															    <div class="col-sm-12"style="margin-top:8%">
																
															      <h5 align="center">Can't find your floor plan?</h5>
																		
																</div>
                                                                 <div class="col-sm-12"style="margin-top:5%">
																
															     <center><input type="button" class="btn btn-default"  value="Click Here"></center>
																		
																</div>																
																
															  </div>
																
														  </div>
																
													</div>
												</div>
														
													
											   </div> 
					                     <a class="carousel-control-next" href="#header-carousel1" data-slide="next">
											<button  class="btn btn-primary btn-round" ><i class="fa fa-arrow-right"></i></button>
										</a>
										
							 
										</div>
										
									</div>
								
				
				</div> 
			</div>
			
<!-- 2BHK carousel end----------------------------------------------------------------------->					     
	
		                   <div class="col-sm-12"style="margin-top:5%">
							  <h5>Add Room Details</h5>
							</div>
							<div class="col-sm-12"style="margin-top:5%">
							  <?php
							  echo form_label("Bedrooms");
							  ?>
							</div>
							<div class="col-sm-12">
							
							  <input type='number' name='bedrooms'required id='numberofbedroom'class='form-control'placeholder='Enter Number Of Bedroms'style='border-radius:0px;' >
							 
							
							</div>
							
			  
							<div class="col-sm-12"style="margin-top:5%">
							   <?php
							  echo form_label("Bathrooms");
							  ?>
							</div>
							<div class="col-sm-12">
								
								<input type='number' name='bathrooms' required id='numberofbathrooms'class='form-control'placeholder='Enter Number Of Bathrooms'style='border-radius:0px;' >
							 
									</div>
			  
							<div class="col-sm-12"style="margin-top:5%">
							 <?php
							  echo form_label("Balconies");
							  ?>
							  
							</div>
							<div class="col-sm-12">
								
							<input type='number' name='balconies'required id='numberofbalconies'class='form-control'placeholder='Enter Number Of Balconies'style='border-radius:0px;' >
							 
							</div>
							<div class="col-sm-12"style="margin-top:5%">
							 <?php
							  echo form_label(" Add Area Details");
							  ?>
							 
							</div>
							<div class="col-sm-12">
							  <div class="row">
							      <div class="col-sm-6">
							     
									<input type="text" name='carpet_area' id='carpet_area_input'required class="form-control" placeholder="Carpet Area" aria-label="search" aria-describedby="basic-addon1"style='border-radius:0px;'>
											
							</div>
							<div class="col-sm-6">
							
									
										<select class="form-control " name='carpet_area_unit'style='border-radius:0px;'  >
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
							
							  
							  </div>
							  
							</div>
							
							<div class="col-sm-12"style="margin-top:5%">
							<?php
							  echo form_label(" Floor Details");
							  ?>
							  
							</div>
							<div class="col-sm-12">
							   <div class="row">
								  <div class="col-sm-6">
									  <input type="text"  name='floors'required class="form-control" placeholder="Total Floors"style='border-radius:0px;'>
								   </div>
									<div class="col-sm-6">
										  <select class="form-control " name='floors_details'style='border-radius:0px;'>
												  <option value='Basement'>Basement</option>
												  <option value='Lower Ground'>Lower Ground</option>
												  <option value='Ground'>Ground</option>
												 
										   </select>
										 
									</div>
							  
							  </div>
							
							
							</div>
							
							<div class="col-sm-12"style="margin-top:5%">
							<?php
							  echo form_label("Age of property");
							  ?>
							   
							</div>
							<div class="col-sm-12">
							
								  <div class="row">
										 <div class="col-sm-4">
											  <h6>
											       <input type='radio' required style='transform: scale(1.5);' name='age_of_property' value='0-1 years'>
											       &nbsp;0-1 years
											   </h6>
										 </div>
										 <div class="col-sm-4">
											 <h6>
											     <input type='radio'   required style='transform: scale(1.5);' name='age_of_property'value='1-5 years'>
											     &nbsp;1-5 years
											   </h6>
										 </div>
										 <div class="col-sm-4">
											 <h6>
											    <input type='radio' required style='transform: scale(1.5);' name='age_of_property'value='5-10 years'>
											    &nbsp;5-10 years
											  </h6>
										 </div>
										
							   
							       </div>
			               </div>
						   <div class="col-sm-12"style="margin-top:6%">
							   <button class='btn btn-primary py-2 btn-block' style=''>Continue</button>
							</div>
							<?php
							echo form_close();
							
							?>
							<div class="col-sm-12"style="margin-top:5%">
							</div>
			  
			                
			  
			  
			  </div>
			  
					  <?php
					}
					
					else if(isset($_REQUEST["Cover_Images"])){
					  ?>
				
					   <div class="row" style="margin-top:2%;">
							<div class="col-sm-12">
							  <h3>Add cover photo</h3>
							 
							</div>
							<div class="col-sm-12">
							  <p style="color:gray">A picture is worth a thousand words.87% of buyers look at photos before buying</p>
							  
							  
							  
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="background-color:#fdefe9;border-radius:20px">
							  <center>
							     <p style=";margin-top:2%">
								    <i class="fa fa-exclamation-triangle"></i>
									Without photos your add will be ignored 
							    </p>
							  </center>
							  
							</div>
							<div class="col-sm-1"></div>
							<?php
							   echo form_open_multipart(base_url()."index.php/Acers/cover_photo_upload/".$_REQUEST["Cover_Images"]);?>
							<div class="col-sm-12" style="margin-top:5%">
							   <input type="file" required  multiple name='userfile' id="input-file-now" class="dropify"  >
                    
							</div>
							<div class="col-sm-12"style="margin-top:5%;margin-bottom:5%">
							
							  <button class="btn btn-primary btn-block py-2" style="">Continue </button>
							
							</div>
							<?php
							
							echo form_close();
							?>
						</div>
					  <?php
					  
					}
					
					else if(isset($_REQUEST["bedroom_image"])){
					  ?>
				
					   <div class="row" style="margin-top:2%;">
							<div class="col-sm-12">
							  <h3>Add bedroom photo</h3>
							 
							</div>
							<div class="col-sm-12">
							  <p style="color:gray">A picture is worth a thousand words.87% of buyers look at photos before buying</p>
							  
							  
							  
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="background-color:#fdefe9;border-radius:20px">
							  <center>
							     <p style=";margin-top:2%">
								    <i class="fa fa-exclamation-triangle"></i>
									Without photos your add will be ignored 
							    </p>
							  </center>
							  
							</div>
							<div class="col-sm-1"></div>
							<?php
							   echo form_open_multipart(base_url()."index.php/Acers/bedroom_image_upload/".$_REQUEST["bedroom_image"]);?>
							<div class="col-sm-12" style="margin-top:5%">
							   <input type="file" required  multiple name='userfile' id="input-file-now" class="dropify"  >
                    
							</div>
							<div class="col-sm-12"style="margin-top:5%;margin-bottom:5%">
							
							  <button class="btn btn-primary btn-block py-2" style="">Continue </button>
							
							</div>
							<?php
							
							echo form_close();
							?>
						</div>
					  <?php
					  
					}
					
					else if(isset($_REQUEST["bathrooms_image"])){
					  ?>
				
					   <div class="row" style="margin-top:2%;">
							<div class="col-sm-12">
							  <h3>Add bathroom photo</h3>
							 
							</div>
							<div class="col-sm-12">
							  <p style="color:gray">A picture is worth a thousand words.87% of buyers look at photos before buying</p>
							  
							  
							  
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="background-color:#fdefe9;border-radius:20px">
							  <center>
							     <p style=";margin-top:2%">
								    <i class="fa fa-exclamation-triangle"></i>
									Without photos your add will be ignored 
							    </p>
							  </center>
							  
							</div>
							<div class="col-sm-1"></div>
							<?php
							   echo form_open_multipart(base_url()."index.php/Acers/bathrooms_image_upload/".$_REQUEST["bathrooms_image"]);?>
							<div class="col-sm-12" style="margin-top:5%">
							   <input type="file" required  multiple name='userfile' id="input-file-now" class="dropify"  >
                    
							</div>
							<div class="col-sm-12"style="margin-top:5%;margin-bottom:5%">
							
							  <button class="btn btn-primary btn-block py-2" style="">Continue </button>
							
							</div>
							<?php
							
							echo form_close();
							?>
						</div>
					  <?php
					  
					}
					
					else if(isset($_REQUEST["pricing"])){
					  ?>
				
					   <div class="row" style="margin-top:2%;">
							<div class="col-sm-12">
							  <h3>Add pricing and details</h3>
							 
							</div>
							<?php
							 echo form_open(base_url()."index.php/Acers/pricelisting_details_upload/".$_REQUEST["pricing"]);
							 ?>
							 <div class="col-sm-12"style="margin-top:2%">
							     <?php
							  echo form_label("<b>Ownership</b>");
							  ?>
							  
							 </div>
							 <div class="col-sm-12"style="margin-top:5%">
							   <div class="row">
							      <div class="col-sm-6">
								  <div class="row">
								     <div class="col-sm-12">
									    <h6>
									       <input type='radio' required style='transform: scale(1.5);' name='ownership'value='Freehold'>
										   &nbsp;Freehold
										 </h6>
									 
									 </div>
								  
								  </div>
								  
								  
								  </div>
								   <div class="col-sm-6">
									   <div class="row">
										  <div class="col-sm-12">
											<h6>
											   <input type='radio' required style='transform: scale(1.5);' name='ownership'value='Co-operative society'>
											   &nbsp;Co-operative society
											 </h6>
										 
										   </div>
									  
									     </div>
								  
								  </div>
								    <div class="col-sm-6"style="margin-top:5%">
									   <div class="row">
										 <div class="col-sm-12">
											<h6>
											   <input type='radio' required style='transform: scale(1.5);' name='ownership'value='Leasehold'>
											   &nbsp;Leasehold
											 </h6>
										 
										 </div>
									  
								        </div>
								  
								  </div>
								   <div class="col-sm-6"style="margin-top:5%">
									   <div class="row">
											 <div class="col-sm-12">
												<h6>
												   <input type='radio' required style='transform: scale(1.5);' name='ownership'value='Power of Attorney'>
												   &nbsp;Power of Attorney
												 </h6>
											 
											 </div>
									  
								        </div>
								  
								  </div>
								  
							   </div>
							 
							 </div>
							 <div class="col-sm-12"style="margin-top:5%">
							     <?php
							  echo form_label("<b>Price Details</b>");
							  ?>
							
							</div>
							<div class="col-sm-12"style="margin-top:2%">
							    <div class="row">
								   <div class="col-sm-6">
								   
								     <input type="text" class="form-control" name="expected_price" required placeholder="Expected Price"style='border-radius:0px;'>
								   </div>
								   <div class="col-sm-6">
								   <input type="text" class="form-control" name="price_per_sq_ft" required placeholder="Price per sq.ft"style='border-radius:0px;'>
								   
								   </div>
								
								</div>
							
							
							</div>
							<div class="col-sm-12" style="margin-top:5%">
							   <div class="row">
							      <div class="col-sm-6">
								    <h6>
									   <input type="checkbox"required style='transform: scale(1.5);'>
									&nbsp;&nbsp;All inclusive price
                                    </h6>									
								  </div>
								  <div class="col-sm-6">
								    <h6>
									   <input type="checkbox"required style='transform: scale(1.5);'>
									&nbsp;&nbsp;Govt.charges excluded
                                    </h6>									
								  </div>
							   
							   
							   </div>
							
							
							</div>
							 <div class="col-sm-12"style="margin-top:5%">
							     <?php
							  echo form_label("<b>What makes your property unique</b>");
							  ?>
							
							</div>
							 <div class="col-sm-12"style="margin-top:5%">
							 
							   <textarea rows="5" id="property_description"name="property_description" required class="form-control" placeholder="Share some details about your property rooms,well maintained facilties..." style="resize:none;border-radius:0px"></textarea>
							   <p style="color:gray">Minimum <span id="description_length">0</span>/30 characters required</p>
							 </div>
							
							 <div class="col-sm-12"style="margin-top:5%;">
							 
							  <button  id="price_submit_button"class="btn btn-primary btn-block py-2" disabled="disabled">Post Property</button>
							 </div>
							 <?php
							 echo form_close();
							 
							 ?>
							</div>
					  <?php
					  
					}
					else{
						redirect(base_url()."index.php/Acers/home");
						
						
					}
					  ?>
					 
					  
					  </div>
			<!--center divi end-->
			  
			  
			   <div class="col-sm-3" id="left_side_details"style="background-color:#F1F2F4;border-radius:5%;height:400px;margin-left:110px">
			      <div class="row" style="margin-top:20%">
				    <div class="col-sm-12">
					    <center>
						   <img src="http://localhost/99acres/images/download (3).png" height="150px" >
			            </center>
					</div>
				  </div>
				  <div class="row" style="margin-top:20%">
				      <div class="col-sm-12">
					    <p align="center">Why we need accurate location?</p>
					  </div>
					  <div class="col-sm-12">
					    <center>
						  <p style="color:gray">Location is the most important for Buyer's.By capturing a detailed location we ensure we get your geniune enquires.</p>
					     </center>
					  </div>
					 
				  
				  </div>
				 
			  </div>
			  <div class="col-sm-1"></div>
		  
		  </div>
	   
	   </div>
	   
	  <div class="col-sm-12" style="height:20px"></div> 
	   
   </div>
</div>
<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content" style="width:600px;margin-top:20%;margin-left:-80px">
      
        <!-- Modal Header -->
        
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>-->
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="container-fluid">
			   <div class="row">
			     <div class="col-sm-12">
				    <h4>Stuck in the form?</h4>
				 
				 
				 </div>
				  <div class="col-sm-12">
				    <h6>Give us your mobile no. and we will call you!</h6>
				 
				 
				 </div>
				 <div class="col-sm-12">
				    
				    <label>
					
					Phone Number
					</label>
				 
				 </div>
				 <div class="col-sm-12">
				    
				    <input type="text" class="form-control"  value='<?=$phone_number?>'style='border-radius:0px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
				 
				 </div>
				  <div class="col-sm-12">
				    
				    <h5 align="center">OR</h5>
				 
				 </div>
				 <div class="col-sm-12" style="margin-top:5%">
				    
				    <h5 align="center">Here is new simpler way</h5>
				 
				 </div>
				 <div class="col-sm-12">
				    
				    <h5 align="center">Now post <i style="font-size:24px" class="fa">&#xf232;</i></h5>
				 
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
 
  </body>
  </html>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
 }
 else{
	redirect(base_url()."index.php/Acers/index"); 
	 
	 
	 
 }
 ?>