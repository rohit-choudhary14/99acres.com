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
  
  <style>
  body{
	  font-family: "Open Sans",Arial,Helivetica,sans-serif;
	 
	  
  }
  .MultiCarousel { 
		  float: left; 
		  overflow: hidden;
		  padding: 15px;
		  width: 100%;
		  position:relative;
  }
   .MultiCarousel{
		Height: 220px;
  }
  .MultiCarousel .MultiCarousel-inner {
		
		transition: 1s ease all; float: left;
   }
   .MultiCarousel .MultiCarousel-inner .item {
	   float: left;
	}
   
    .MultiCarousel .leftLst, .MultiCarousel .rightLst {
		position:absolute;
		
		
    }
    .MultiCarousel .leftLst { 
	   left:0;
	}
    .MultiCarousel .rightLst { 
	   right:0;
	}
    
   .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over {
	  
	  pointer-events: none; background:#ccc;
  }
  #url{
	 
	  
	  background-image:url("http://localhost/99acres/images/banners2.png");
	  
	  height:400px;
	  
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
  #right_commercial{
	  background-image:url("http://localhost/99acres/images/d_hp_com_buy_xl.webp");
	  height:300px;
	  border-radius:5%;
	  
  }
  #left_commercial{
	  background-image:url("http://localhost/99acres/images/d_hp_com_lease_xl.webp");
	  height:300px;
	  border-radius:5%;
	  
  }
  #card1{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 } 
 #card_for_input{

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
#property_profile_for_user_card{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
 #more_property_details_action_on_property{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
		
 }
 #more_property_details1{

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
  </style>
 <script>
	 $(document).ready(function(){
		  var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

   ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }
		 
				
		$("#right_rental_agreement").mouseover(function(){
			$(this).css("box-shadow","1px 1px 5px rgba(0,0, 0, 0.4)");
			
		});
		$("#right_rental_agreement").mouseout(function(){
			$(this).css("box-shadow","");
			
		});
		$("#left_rental_agreement").mouseover(function(){
			$(this).css("box-shadow","1px 1px 5px rgba(0,0, 0, 0.4)");
			
		});
		$("#left_rental_agreement").mouseout(function(){
			$(this).css("box-shadow","");
			
		});
		
		$("#for_owener_url_image").mouseover(function(){
			 $("#for_owener_button").slideDown();
			
		});
		$("#for_owener_url_image").mouseout(function(){
			 $("#for_owener_button").hide();
			
		});
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
		$(".dropdown-item1").on("click",function(){
			$(this).css("background-color","gray");
			var prop_code =$(this).attr("id");
			
			var prop_id=$("#property_code-"+prop_code).text();
			
			$.post(
			    "http://localhost/99acres/index.php/Acers/property_selecter",{prop_id:prop_id},function(data){
					
					 var img_code=data.substring(0,data.indexOf("/"));
					 var prop_type=data.substring(data.indexOf("/")+1,data.indexOf("@"));
					 var prop_city=data.substring(data.indexOf("@")+1,data.indexOf("&"));
					 var prop_aprtment=data.substring(data.indexOf("&")+1,data.indexOf("#"));
					 var prop_status=data.substring(data.indexOf("#")+1,data.indexOf("-"));
					 var response=data.substring(data.indexOf("-")+1);
					 $("#prop_response").text(response);
					 $("#prop_total_response").text(response);
					 $("#prop_total1_response").text(response);
					 $("#more_property_details1").hide();
					 if(parseInt(prop_status)==0){
						 $("#action_on_property").hide();
						 $("#reactivate_posting").show();
						 $("#if_status_is_one_else_uper_data_part").show();
						 $("#bottom_row_for_upgrade_status_zero").hide();
						 
					 }
					 else{
						 $("#if_status_is_one_else_uper_data_part").hide();
						 $("#bottom_row_for_upgrade_status_zero").show();
						 $("#action_on_property").show();
						 $("#reactivate_posting").hide();
						 /*$("#more_property_details_action_on_property").show();
						 $("#more_property_details1").hide();*/
						 
						 
					 }
					 $(".img-fluid").attr("src","http://localhost/99acres/property_user_img/"+img_code+".jpg");
				     $("#prop_type_for_acer_user_property").text(prop_type);
					 $("#prop_aprtment_for_acer_user_property").text(prop_aprtment);
					 $("#prop_city_for_acer_user_property").text(prop_city);
					 $("#prop_id_for_acer_user_property").text(prop_id);
					 $("#on_click_prop_id_changed").text(prop_id);
					 $("#on_click_prop_type_changed").text(prop_type);
					 $("#on_click_prop_aprtment_changed").text(prop_aprtment);
					 $("#prop_delete").attr("rel",prop_id);
					 $("#reactivate_property").attr("rel",prop_id);
					 $("#reactivate_property1").attr("rel",prop_id);
					 
					$("#prop_id_for_preview").attr("href","http://localhost/99acres/index.php/Acers/view_property?pid="+prop_id+"");
				
				}
				
				
			
			
			);
			
			
		});
		$("#prop_delete").on("click",function(){
			var prop_id=$(this).attr("rel");
			if(prop_id.length>0){
				$.post(
			    "http://localhost/99acres/index.php/Acers/property_status_change_for_delete",{prop_id:prop_id},function(data){
				 if(data.trim()=='Deleted'){
					      $("#action_on_property").hide();
						  $("#reactivate_posting").show();
						  $("#if_status_is_one_else_uper_data_part").show();
						  $("#bottom_row_for_upgrade_status_zero").hide();
					 
				 }
				 else{
					      $("#action_on_property").show();
						  $("#reactivate_posting").hide();
						  $("#if_status_is_one_else_uper_data_part").hide();
						  $("#bottom_row_for_upgrade_status_zero").show();
					 
				 }
				});
			}
				
		});
		$("#reactivate_property").on("click",function(){
			var prop_id=$(this).attr("rel");
			$.post(
			
			"http://localhost/99acres/index.php/Acers/recover_propperty",{prop_id:prop_id},function(data){
				
				if(data.trim()=='recovered'){
					      $("#action_on_property").show();
						  $("#reactivate_posting").hide();
						  $("#if_status_is_one_else_uper_data_part").hide();
						  $("#bottom_row_for_upgrade_status_zero").show();
				}
				else{
					      $("#action_on_property").hide();
						  $("#reactivate_posting").show();
						  $("#if_status_is_one_else_uper_data_part").show();
						  $("#bottom_row_for_upgrade_status_zero").hide();
					
					
					
				}
			
			
			});
			
			
		});
		$("#reactivate_property1").on("click",function(){
			var prop_id=$(this).attr("rel");
			$.post(
			
			"http://localhost/99acres/index.php/Acers/recover_propperty",{prop_id:prop_id},function(data){
				
				if(data.trim()=='recovered'){
					      $("#action_on_property").show();
						  $("#reactivate_posting").hide();
						  $("#if_status_is_one_else_uper_data_part").hide();
						  $("#bottom_row_for_upgrade_status_zero").show();
				}
				else{
					      $("#action_on_property").hide();
						  $("#reactivate_posting").show();
						  $("#if_status_is_one_else_uper_data_part").show();
						  $("#bottom_row_for_upgrade_status_zero").hide();
					
					
					
				}
			
			
			});
			
			
		});
		var num;
		var flag=0;
		$(".drop_down").on("click",function(){
			    $("#vistied-"+num).css('color','black');
			    var rel=$(this).attr("rel");
				num=rel;
				$("#vistied-"+rel).css('color','gray');
			
		});
			
		
		
	});


</script> 

 
 </head>
 <body  >
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
 <nav class="navbar sticky-top" style="background-color:#005CA8;">
  
	    <div class="col-sm-1">
	         <h3 style="color:white"><a href='<?=base_url()?>index.php/Acers/home' style="color:#fff;text-decoration:none"><b>99acers</b></a></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     
		 </div>
		 <div class="col-sm-1">
			<div class="nav-item dropdown" style="color:#F5F7FA;">
				<a style="cursor:pointer;font-size:17px;margin-left:40px;"data-toggle="dropdown" ><b>My&nbsp;Posting(<?=$count?>)</b>
					</a>
				<div class="dropdown-menu position-absolute"  style="width:900px;height:400px;margin-right:350px">
			   </div>
			</div>
		</div>
		<div class="col-sm-5">
			 <div class="input-group mb-0">
					
					<input type="text" class="form-control" style=';border:none;margin-left:100px;transform: scale(1.1);margin-right:-30px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
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
 <div class="container-fluid">
     <div class="row" style="margin-top:2%">
	   
	   <div class="col-sm-8" style="margin-left:20px">
	      <div class="row">
		      <div class="col-sm-12">
			      <div class="row" >
				     <div class="col-sm-12">
					    <h6 style="color:gray">Welcome to your dashboard, <?=$name?></h6>
					 </div>
					 <div class="col-sm-6" style="margin-top:3%">
					   <h4>Your Property Postings</h4>
					   
					 </div>
					 <div class="col-sm-6" style="margin-top:3%">
					   <?php
					     echo "<a href='".base_url()."index.php/Acers/modifyprofile?all_listing=$count' style='text-decoration:none;float:right'><h5>View all Postings</h5></a>";
					   ?>
					 </div>
					 <?php   
						 $prop_id;
						 $prop_city;
						 $prop_aprtment;
						 $prop_type;
						 $prop_status;
						 
					 
						 $this->db->select("*");
						 $this->db->from("99acers_user_property_profile");
						 $this->db->where("prop_owner_email",$email);
						// $this->db->where("status",0);
						 $this->db->order_by("sn", "DESC");
						 $this->db->limit(1,0);
						 $res_for_property_profile_details=$this->db->get()->result();
						 foreach($res_for_property_profile_details as $row1){
							 $prop_id=$row1->prop_code;
							 
							 $prop_type=$row1->prop_type;
							 $prop_city=$row1->prop_city;
							 
							 $prop_apartment=$row1->prop_aprtment;
							 $prop_status=$row1->status;
							 
						 }
						 $view_prop_id=$prop_id;
						 $view_prop_city=$prop_city;
						
				         $where=array(
						  "email"=>$email,
						  "property_code"=>$prop_id,
						  "status"=>1
						
						 );
            			 $this->db->select("*");
						 $this->db->from("cover_image");
						 $this->db->where($where);
				
						 $rd=$this->db->get()->result();
						 $img_code;
						 foreach($rd as $row2){
							 $img_code=$row2->img_code;
						 }

						  $where=array(
							 "reciver_email"=>get_cookie("login_user"),
							 "prop_code"=>$prop_id
							
						
						  );
						  $this->db->select("*");
						  $this->db->from('response');
						  $this->db->where($where);
						  $num_rows=count($this->db->get()->result());
					 
	 
	 						 
							 
                ?>
					 <div class="col-sm-12">
					       <div class="nav-item dropdown" >
								<a style="cursor:pointer;font-size:17px;"data-toggle="dropdown" >
								  <p style="color:gray">Manage posting for<b style="color:black">&nbsp;PROPERTY ID</b>
								  <i class="fa fa-minus"></i>&nbsp;<span id='on_click_prop_id_changed'><?=$row1->prop_code?></span>,&nbsp;(<span id='on_click_prop_type_changed'><?=$prop_type?></span>&nbsp;Aprtment for sale in,&nbsp;<span id='on_click_prop_aprtment_changed'><?=$prop_apartment?></span>)
											 
								  </p>

								</a>
						       
								<div class="dropdown-menu position-absolute" id="more_property_details" style="width:750px;margin-left:150px;height:auto;overflow:auto;border-radius:0px;height:200px">
								    <div class="container-fluid">
									  <div class="row">
									    
								   <?php 
								     $this->db->select("*");
									 $this->db->from("99acers_user_property_profile");
									 $this->db->where("prop_owner_email",$email);
									 $this->db->order_by("sn", "DESC");
								      $sn_for_count=0;
									   foreach($this->db->get()->result() as $row1){
										     $prop_id=$row1->prop_code;
											 $prop_city=$row1->prop_city;
											 $prop_aprtment=$row1->prop_aprtment;
											 $prop_type=$row1->prop_type;
					 
										   
									   ?>
										<div class="col-sm-12" style="cursor:pointer;margin-top:10px;"> 
											 <a class="dropdown-item1" id='<?=$prop_id?>' style="color:black;font-size:13px;text-decoration:none">
											   <b id='vistied-<?=$sn_for_count?>' rel='<?=$sn_for_count?>'  class='drop_down'>
											     <p>PROPERTY ID&nbsp;<i class="fa fa-minus"></i>&nbsp;<span  id='property_code-<?=$prop_id?>'><?=$prop_id?></span>,&nbsp;<?=$row1->prop_type?>&nbsp; Aprtment for sale in,&nbsp;<?=$row1->prop_aprtment?>,<?=$row1->prop_city?>
													 
													
												 </p>
											   </b>
											 </a>
										</div>
										  
									  
									   <?php
										$sn_for_count++;	
									   }
									   ?>
										  </div>
										</div>
										   
									 </div>
									
										
						  </div>
                     </div>
					    
					 
				  
				  </div>
				
				  <div class="row" style="margin-top:2%">
				     <div class="col-sm-12" id="property_profile_for_user_card" style="border-radius:10px;height:250px">
					   <div class="row" style="margin-top:2%;margin-bottom:2%">
					       <div class="col-sm-3">
						      <div  class="row">
							     <div class="col-sm-12">
								   <img src="http://localhost/99acres/property_user_img/<?=$img_code?>.jpg" class="img-fluid" style="border-radius:20px;height:150px;width:200px">
						   
								 
								 </div>
							   
							  </div>
						     
						   </div>
						   <div class="col-sm-9">
						      <div class="row">
							  <div class="col-sm-1"></div> 
							     <div class="col-sm-2" style="border-radius:0px;">
								    <center>
										<p class="card" style="background-color:#F1F2F4">
										<i class="fa fa-exclamation-triangle"style="color:orange;font-size:10px;margin-top:8px;margin-bottom:8px" aria-hidden="true">&nbsp;Free &nbsp;Plan</i>
										
									   </p>
									</center>
								 </div>
							     <div class="col-sm-5">
								    <p>Property ID - <b id='prop_id_for_acer_user_property'><?=$view_prop_id?></b></p>
						            
								 </div>
								 <div class="col-sm-4">
								  <div class="nav-item dropdown" >
									<a style="cursor:pointer;font-size:17px;"data-toggle="dropdown" >
									   <button class="btn btn-default"  style="border:0.5px solid #EBECF0;border-radius:20px;float:right;">More&nbsp;<i class="fas fa-ellipsis-v"></i></button>
									</a>
							       <?php
									 if($prop_status==0){
									 
									 ?>  
									
									 <div class="dropdown-menu position-absolute"  id="more_property_details_action_on_property"  style="width:200px;height:auto;margin-left:190px;margin-top:-5px;border-radius:10px;">
								       <div class="container-fluid">
									    <div class="row" id='action_on_property' style='display:none' >
										   <div class="col-sm-12"  >
										     <a href="<?=base_url()?>index.php/Acers/view_property?pid=<?=$view_prop_id?>"  style='color:gray;text-decoration:none'id='prop_id_for_preview' >
											    <span>preview &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   <hr>
										    <div class="col-sm-12">
										     <a href="" style='color:gray;text-decoration:none'>
											   <span>Edit Details &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   <hr>
										   <div class="col-sm-12">
										     <a  style='color:gray;text-decoration:none;cursor:pointer'id='prop_delete' rel='<?=$view_prop_id?>'>
											   <span>Delete &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   
										   <div class="col-sm-12">
										     <a href="" style='color:gray;text-decoration:none'>
											   <span>Upgrade &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   </div>
										</div>
<!-------------------------------xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx------>
                                        <div class='row' id='reactivate_posting' >
										      <div class="col-sm-12">
										        <a  style='color:gray;text-decoration:none;cursor:pointer' id='reactivate_property' rel='<?=$view_prop_id?>'>
											      <span>Re-activate &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											    </a>
										       </div>
										   </div>
<!---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX_---------->								  

									 </div>
									
								  </div>
                                  

								 
<!-- reactivate part of property start---------------------------------------------------------->
                               <?php
									 }
                                 else{
?>							   
								<div class="dropdown-menu position-absolute"  id="more_property_details_action_on_property"  style="width:200px;height:auto;margin-left:190px;margin-top:-5px;border-radius:10px;">
								       <div class="container-fluid">
									    <div class="row" id='action_on_property'  >
										   <div class="col-sm-12"  >
										     <a href="<?=base_url()?>index.php/Acers/view_property?pid=<?=$view_prop_id?>"  style='color:gray;text-decoration:none'id='prop_id_for_preview' >
											    <span>preview &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   <hr>
										    <div class="col-sm-12">
										     <a href="" style='color:gray;text-decoration:none'>
											   <span>Edit Details &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   <hr>
										   <div class="col-sm-12">
										     <a  style='color:gray;text-decoration:none;cursor:pointer'id='prop_delete' rel='<?=$view_prop_id?>'>
											   <span>Delete &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   
										   <hr>
										   </div>
										   
										   <div class="col-sm-12">
										     <a href="" style='color:gray;text-decoration:none'>
											   <span>Upgrade &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											 </a>
										   </div>
										</div>
<!-------------------------------xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx------>
                                        <div class='row' id='reactivate_posting' style='display:none' >
										      <div class="col-sm-12">
										        <a style='color:gray;text-decoration:none;cursor:pointer'id='reactivate_property' rel='<?=$view_prop_id?>'>
											      <span>Re-activate &nbsp;&nbsp;<i class="fa fa-arrow-right" style="float:right"></i></span>
											    </a>
										       </div>
										   </div>
<!---XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX_---------->								  

									 </div>
									
								  </div>
                                  

						<?php
								  }
						?>
						
						
								 
<!------------------------------------ reactivate part of property end---------------------------------------------------------->
<!--------------------xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---------------------------------------->
                             </div>
								 
								 </div>
							  </div>
							   <div class="row">
							   <div class="col-sm-1"></div>
							     <div class="col-sm-11">
								    <h5><span id="prop_type_for_acer_user_property"><?=$prop_type?></span> Apartment for Sale</h5>
						            
								 </div>
								 
							  </div>
							  <div class="row">
							  <div class="col-sm-1"></div>
							     <div class="col-sm-11">
								    <p><span id="prop_aprtment_for_acer_user_property"><?=$prop_apartment?></span>, <span id="prop_city_for_acer_user_property"><?=$view_prop_city?></span></p>
						            
								 </div>
								 
							  </div>
						      
						   </div>
						   
						 <div class="col-sm-12">
							   <hr>
						 </div>

						 <div class="col-sm-12">
							 
							 <?php
							 if($prop_status==0){
								 ?>
							<div class="row"  >
								 <div class='col-sm-12' id='if_status_is_one_else_uper_data_part' >
								   <div class='row'>
									   <div class="col-sm-3">
										<p class='card bg-danger' style='border-radius:0px;text-align:center;color:white;font-weight:bold'>Deleted property posting</p>
									   </div>
									   <div class="col-sm-6"></div>
									   <div class="col-sm-3">
										 <button class='btn btn-primary btn-block' id='reactivate_property1' rel='<?=$view_prop_id?>'>Re-active Posting</button>
									   </div>
									</div>
								</div>
							    <div class="col-sm-12" id='bottom_row_for_upgrade_status_zero' style='display:none'>
								   <p>Tip: Upgrade for • Upto 10X Resonses • Relationship Manager • Social media campaign</p>
								</div>
							 
							</div>	 
								 <?php
							 
							 }
							 else{
								 ?>
								 
								<div class="row"  >
								 <div class='col-sm-12' id='if_status_is_one_else_uper_data_part' style='display:none'>
								   <div class='row'>
									   <div class="col-sm-3">
										<p class='card bg-danger' style='border-radius:0px;text-align:center;color:white;font-weight:bold'>Deleted property posting</p>
									   </div>
									   <div class="col-sm-6"></div>
									   <div class="col-sm-3">
										 <button class='btn btn-primary btn-block' id='reactivate_property1' rel='<?=$view_prop_id?>'>Re-active Posting</button>
									   </div>
									</div>
								</div>
							    <div class="col-sm-12" id='bottom_row_for_upgrade_status_zero' >
								   <p>Tip: Upgrade for • Upto 10X Resonses • Relationship Manager • Social media campaign</p>
								</div>
							 
							   </div>	
								 
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
			  <div class="col-sm-3 card" style="border-radius:10px;margin-left:40px;height:270">
			     <div class="row" style="margin-top:3%">
				  
				  <div class="col-sm-2 " style="border-radius:1px" >
				      <span class='radioInput_textOnly__1r7GL 'style="background-color:#D7F2E3;font-weight:bold"><?=$name[0]?></span>
				  </div>
				    <div class="col-sm-10">
					  <div class="row">
					    <div class="col-sm-12">
						  <h5><?=$name?></h5>
						
						</div>
						<div class="col-sm-12">
						  <p style='color:gray'>Owner</p>
						</div>
					  
					  </div>
					  
					
					</div>
				 </div>
				 <div class="row" style="margin-top:3%">
				 <div class="col-sm-1"></div>
				       <div class="col-sm-11">
						  <div class="row">
						      <div class="col-sm-12">
							     <p style='color:gray'>YOUR RECENT ACTIVITY </p>
						      </div>
							  <div class="col-sm-12">
							  
							  <div class="nav-item dropdown" >
									<a style="cursor:pointer;font-size:17px;"data-toggle="dropdown" >
									PROPERTY ID&nbsp;<i class="fa fa-angle-down"></i>

									</a>
							
									<div class="dropdown-menu position-absolute" id="more_property_details" style="width:310px;height:180px;margin-left:px;">
								   
									  
							
								  </div>
                             </div>
					    </div>
						<div class="col-sm-12" style="height:20px">
						
						</div>
						
						   <div class="col-sm-5 card"style="background-color:#F0F9FF;border:none;border-radios:5%;;margin:.0.5rem;height:65" >
						     <div class="row" style="margin-top:5%">
							    <div class="col-sm-9">
								  <h5><?=$count?></h5>
								</div>
								<div class="col-sm-3">
								  <i class="fa fa-arrow-right" style="float:right;color:blue;transform:rotate(-35deg)"></i>
								</div>
								
							 
							 </div>
							  <div class="row" style="margin-top:5%">
							     <div class="col-sm-12">
								   <p style="font-size:13px">Property Posted</p>
								 </div>
							  
							  </div>
						   
						   </div>
						   <div class="col-sm-1"></div>
						   <div class="col-sm-5 card"style="background-color:#F0F9FF;border:none;border-radios:5%;margin:.05rem;height:65" >
						     <div class="row" style="margin-top:5%">
							    <div class="col-sm-9">
								  <h5 id='prop_total1_response'>0</h5>
								</div>
								<div class="col-sm-3">
								  <i class="fa fa-arrow-right" style="float:right;color:blue;transform:rotate(-35deg)"></i>
								</div>
								
							 
							 </div>
							  <div class="row" style="margin-top:5%;">
							     <div class="col-sm-12">
								   <p style="font-size:12px">Total Responses</p>
								 </div>
							  
							  </div>
							   
						   
						   </div>
						    <div class="col-sm-1"></div>
						   <div class="col-sm-12" style="height:20px">
						   </div>
					     </div>
					  </div>
				 
				 </div>
			  
			  </div>
			  <div class="col-sm-1"></div>
		 
	  
	 
	 </div>
	 <div class='row'>
	 
		<div class='col-sm-8' style='margin-top:20px'>
          <div class='row card-body'>
		     <div class='col-sm-8 '>
			   <div class='row'>
			     <div class='col-sm-12'>
				   <h5 ><span id='prop_total_response'><?=$num_rows?></span>&nbsp;Responses on this posting</h5>
				
				 </div>
				 
			   </div>
			     
			 
			 </div>
			 <div class='col-sm-4'>
			   <a href='' style='float:right;text-decoration:none'><h5>View all responses</h5></a>
			 </div>

				 <div class='col-sm-6'>
				    <div class='row'>
					  
					    <div class='col-sm-11 card'>
						  <div class='row card-body'>
						    <div class='col-sm-3'>
							  <h6 style='font-weight:bold' id='prop_response'><?=$num_rows?></h6>
							  <hr style='transform:rotate(90deg);margin-top:-10'>
							</div>
							<div class='col-sm-9'>
							  <h6 style='font-weight:bold'>Buyer Responses</h6>
							</div>
						  </div>
						
						</div>
						 <div class='col-sm-1'></div>
					  
					</div>
				 </div>
				 <div class='col-sm-6'>
				    <div class='row'>
					   <div class='col-sm-1'></div>
					    <div class='col-sm-11 card'>
						  <div class='row card-body'>
						     <div class='col-sm-3'>
							  <h6 style='font-weight:bold'>0</h6>
							  <hr style='transform:rotate(90deg);margin-top:-10'>
							</div>
							<div class='col-sm-9'>
							  <h6 style='font-weight:bold'>Dealer Responses</h6>
							</div>
						  </div>
						</div>
						 
					  
					</div>
				 </div>
				 
		  
		  
		  </div>



		</div>
	  <div class='col-sm-3 card' style='margin-left:60px;background-color:#F0F9FF;margin-top:-110;height:252'>
	    <div class='row'>
		   <div class='col-sm-8 card-body'>
		     <h6 style=''>Get a Relationship Manager</h6>
		     <p style='font-size:14px'>Get filtered and geniune leads hassle-free selling</p>
			 <p style='font-size:14px'>RS 79999 Onwards</p>
		     <a href=''>EXPLORE NOW&nbsp;<i class='fa fa-arrow-right'></i></a>
		   </div>
		   <div class='col-sm-4 card-body'>
		     <img src='<?=base_url()?>images/questionDiscoverability1x.png' style='margin-left:-45'>
		   </div>
		
		
		</div>
	  
	  
	 </div>
	  <div class='col-sm-1'></div>
	 
	 </div>
	
	 <!--- user that show interest in property part start--------------------------->
	 <div class='row' >
	   <div class='col-sm-8 '>
	     <div class='row'>
		     <div class='col-sm-12'  id='recent_response_text'style='margin-bottom:-15'>
				 <h5 style='margin-left:4'>Recent responses</h5>
		    </div>
		 </div>
	     <div class='row ' style='margin-top:-20'>
		    
		   <div class='col-sm-12 '>
		     <div class='row'>
			   <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
			     <div class="MultiCarousel-inner">
		     <?php
			  $res=$this->db->get("user")->result();
			  foreach($res as $row){
				    $this->db->select("*");
					$this->db->from("response");
					$this->db->where("sender_email",$row->email);
					$this->db->where("reciver_email",$email);
				    $this->db->where("sender_email<>",$email);
					//$this->db->where("prop_code",$view_prop_id);
					$flag=0;
					if($this->db->get()->result()){
					     $flag=1;
						
					
				  ?>
			<div class="item" >
                <div  class='pad15'>
				   <div class='row card-body '>
				    
				    <div class='col-sm-12 card' >
					  <div class='row'>
					     <div class='col-sm-12 card-body'>
						   <div class='row'>
						      <div class='col-sm-2'>
							     <span class='radioInput_textOnly__1r7GL 'style="font-weight:bold;background-color:#FFF5E4;color:#C41F1F"><?=$row->name[0]?></span>
							  </div>
							  <div class='col-sm-10'>
							     <span style='font-weight:bold'><?=$row->name?>&nbsp;<img src='<?=base_url()?>images/verified-green-512.webp' height='20'></span>
							  </div>
						   </div>
						   <!-- mobile phone row start---->
						   <div class='row' style='margin-top:30'>
						      <div class='col-sm-2'>
							     <img src='<?=base_url()?>images/5a452598546ddca7e1fcbc80.png' height='20'>
							  </div>
							  <div class='col-sm-10'>
							     <span style='font-size:13'><?=$row->country_code[1].$row->country_code[2]."-".$row->phone_number?></span>
						      </div>
						   </div>
						   <!-- mobile phone row end---->
						   <!-- email row start---->
						   <div class='row' style='margin-top:30'>
						      <div class='col-sm-2'>
							     <img src='<?=base_url()?>images/email-icon-transparent-background-11549825133qbltljgp1w.png' height='20'>
							  </div>
							  <div class='col-sm-10'>
							     <span style='font-size:13'><?=$row->email?></span>
						   </div>
						   
						 </div>
						 <!-- email row end---->
					
						 
					  
					  
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
		   <style>
						.btn.btn-primary.leftLst{
									box-shadow: "";
									background: #fff;
									border-radius: 24px;
									-webkit-border-radius: 24px;
									-moz-border-radius: 24px;
									outline: none;
									margin-top:80;
									cursor: pointer;
									align-items: center;
									border: 1px solid #ebecf0;
									padding: 1px 16px 2px;
									height:40px;
									line-height: 24px;
									
									color: #42526e;
									display: inline-flex;
									text-align: center;
									vertical-align: middle;
								   
                       }
					   .btn.btn-primary.rightLst{
									box-shadow: "";
									background: #fff;
									border-radius: 24px;
									-webkit-border-radius: 24px;
									-moz-border-radius: 24px;
									outline: none;
									margin-top:80;
									
									cursor: pointer;
									align-items: center;
									border: 1px solid #ebecf0;
									padding: 1px 16px 2px;
									height:40px;
									line-height: 24px;
									font-weight: 400;
									color: #42526e;
									display: inline-flex;
									text-align: center;
									vertical-align: middle;
								   
                       }
						
						
						
						</style>
						
					     <button class="btn btn-primary leftLst" ><i class="fa fa-angle-left" style="font-size:15px"></i></button>
				         <button class="btn btn-primary rightLst"><i class="fa fa-angle-right" style="font-size:15px"></i></button>
				
				</div>
		      </div>
		   </div>
		 </div>
	   </div>
	   <div class='col-sm-4'></div>
	 
	 
	 
	 </div>
	 <!--- user that show interest in property part end--------------------------->
 </div>
 <?php	 
	if($flag==0){
?>

<style>
						
                  </style>


<?php



	}		
 }
 else{
	   redirect(base_url()."index.php/Acers/home");
 } 
	 
 
 ?>
 
 
<div class="container-fluid" style="margin-top:10px">
	   <div class="row">
	      <div class="col-sm-12" >
		    <pre align="center" >GET STARTED WITH EXPLORING REAL ESTATE OPTIONS</pre>
		  </div>
		  
		</div>
		<div class="row">
	      <div class="col-sm-2" >
		    <img src="http://localhost/99acres/images/d_hp_buy.webp">
		  </div>
		  <div class="col-sm-2" >
		   <img src="http://localhost/99acres/images/d_hp_rent.webp">
		  </div>
		  <div class="col-sm-2" >
		    <img src="http://localhost/99acres/images/d_hp_ppf.webp">
		  </div>
		  <div class="col-sm-2" >
		   <img src="http://localhost/99acres/images/d_hp_pg.webp">
		  </div>
		  <div class="col-sm-2" >
		    <img src="http://localhost/99acres/images/d_hp_com_buy.webp">
		  </div>
		  <div class="col-sm-2" >
		    <img src="http://localhost/99acres/images/d_hp_com_lease.webp">
		  </div>
		   <div class="col-sm-2" >
		    <pre>Buying a Home</pre>

		  </div>
		  <div class="col-sm-2" >
		    <pre>Renting a Home</pre>

		  </div>
		  <div class="col-sm-2" >
		    <pre>Sell/Rent your property</pre>

		  </div>
		  <div class="col-sm-2" >
		    <pre>PG and co-living</pre>

		  </div>
		  <div class="col-sm-2" >
		    <pre>Buying commercial spaces</pre>

		  </div>
		  <div class="col-sm-2" >
		    <pre>Lease commercial spaces</pre>

		  </div>
		  
		</div>
		<div class="row" style="margin-top:2%">
		   <div class="col-sm-1">
		   </div>
		   <div class="col-sm-10 card"   style="background-color:#F0F8FF;height:200px">
			   <div class="row" style="margin-top:3%">
				        <div class="col-sm-1"></div>
						<div class="col-sm-1">
						<img src="http://localhost/99acres/images/batch_prediction.png" style="height:60px">

					    </div>
					    <div class="col-sm-10">
							<div class="row">
								 <div class="col-sm-12">
								   <h3>More Insights & Utilities</h3>
								 </div>
								 <div class="col-sm-12">
									<pre>Go from browsing to buying</pre>
								 </div>
							</div>
				      </div>
		       </div>
	       <div class="row" style="margin-top:1%">
		     <div class="col-sm-1"></div>
               <div class="col-sm-11">
				  <div id="header-carousel1" class="carousel slide" data-ride="carousel" data-interval="false">
					  <div class="carousel-inner">
						 <div class="carousel-item active" >
							<div class="row">
								  <div class="col-sm-4 card" style="height:150px">
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>Check Property Rates & Price</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">in any city, locality or society</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/Price_Trends.png" style="height:100px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-40px">
											  <?php
											  echo"<a href=''>Price Trends&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
										
										</div>
										<div class="col-sm-1"></div>
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
							  </div>
							  
							   <div class="col-sm-4 card"  style="height:150px">
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>Get to know different localities before you buy/rent</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">Check Prices, lifestyle, reviews & more</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/Locality_Insights.png" style="height:90px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-50px">
											  <?php
											  echo"<a href=''>Locality Insights&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
										
										</div>
										<div class="col-sm-1"></div>
										
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
							  </div>
							  <div class="col-sm-4 card" style="height:150px" >
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>What locals say about their locality / society?</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">Get to know from residents</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/Ratings_n_Reviews.png" style="height:90px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-50px">
											  <?php
											  echo"<a href=''>Read Ratings&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
											
										</div>
										<div class="col-sm-1"></div>
										
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
							  </div>
							  
						 </div>
                       </div>
                                                      
               <div class="carousel-item" >
				   <div class="row">
					    <div class="col-sm-4 card" style="height:150px">
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>Plan your Home loan better with our EMI calculator</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">and plan your budget right...</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/EMI_Calculator.png" style="height:100px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-65px">
											  <?php
											  echo"<a href=''>EMI Calculator&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
										
										</div>
										<div class="col-sm-1"></div>
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
								  </div>
					 <div class="col-sm-4 card"style="height:150px" >
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>Check your Home buying budget</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">based on your savings & EMI</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/Budget_Calculator.png" style="height:100px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-40px">
											  <?php
											  echo"<a href=''>Budget Calculator&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
										
										</div>
										<div class="col-sm-1"></div>
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
							  </div>
					   <div class="col-sm-4 card" style="height:150px" >
										<div class="row">
										<div class="col-sm-1"></div>
										<div class="col-sm-10" >
											 <div class="row">
											 <div class="col-sm-12">
											  <p><b>Home Loan Eligibility Calculator</b></p>
											 </div>
											 <div class="col-sm-8">
											  <p style="font-size:12px">based on your borrowing capacity</p>
											 </div>
											  <div class="col-sm-4">
											 <img src="http://localhost/99acres/images/img_014.png" style="height:100px">

											 </div>
											 <div class="col-sm-12" style="margin-top:-40px">
											  <?php
											  echo"<a href=''>Check Now&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
											  
											  ?>
											 </div>
											
											 </div>
										
										</div>
										<div class="col-sm-1"></div>
										</div>
							        
								  <a href="" class="cat-img position-relative overflow-hidden mb-3">
								   
								  </a>
							  </div>
							 
				</div>
					  </div>
					  </div>

				</div>
				<!--<a class="carousel-control-prev" href="#header-carousel1" data-slide="prev">
					<i class="fa fa-angle-left" style="color:black"></i>
				</a>--->
				<a class="carousel-control-next" href="#header-carousel1" data-slide="next">
					<i class="fa fa-angle-right" style="color:black"></i>
				</a>
				 
			</div>
			</div>
		   </div>
		   <div class="col-sm-1">
		   </div>
		</div>
</div>
<div class="container-fluid" style="margin-top:8%">
	<div class="row">
		  <div class="col-sm-12">
			 <p align="center">ALL PROPERTY NEEDS - ONE PORTAL</p>
		  </div>
		  <div class="col-sm-12">
			 <h3 align="center"><b>Find Better Places to Live, Work and Wonder...</b></h3>
		  </div>
	</div>
	<div class="row">
			<div class="col-sm-1"></div>
			  <div class="col-sm-6">
				 <img src="http://localhost/99acres/images/d_hp_buy_xl.webp" >

			  </div>
			  <div class="col-sm-5">
				<div class="row" style="margin-top:8%">
				  <div class="col-sm-12">
					<b style="color:gray">BUY A HOME</b>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<h2><b>Find, Buy & Own Your Dream Home</b></h2>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<p style="color:gray">Explore from Apartments, land, builder floors, villas and more</p>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%">
				   <button class="btn btn-primary btn-block py-3">Explore Buying</button>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%"></div>
				</div>
			  </div>
	
	</div>
	<div class="row" style="margin-top:5%">
			<div class="col-sm-1"></div>
			  <div class="col-sm-6">
				 <img src="http://localhost/99acres/images/d_hp_rent_xl.webp" >

			  </div>
			  <div class="col-sm-5">
				<div class="row" style="margin-top:8%">
				  <div class="col-sm-12">
					<b style="color:gray">RENT A HOME</b>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<h2><b>Rental Homes for Everyone</b></h2>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<p style="color:gray">Explore from Apartments, builder floors, villas and more</p>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%">
				   <button class="btn btn-primary btn-block py-3">Explore Renting</button>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%"></div>
				</div>
			  </div>
	
	</div>
</div>
 <div class="container-fluid" style="margin-top:3%">
	<div class="row">
		  <div class="col-sm-12">
			 <p align="center">ARE YOU AN OWNER?</p>
		  </div>
		  <div class="col-sm-12">
			 <h3 align="center"><b>Sell or Rent your property faster with 99acres</b></h3>
		  </div>
	</div>
	<div class="row">
			<div class="col-sm-1"></div>
			  <div class="col-sm-6">
				 <img src="http://localhost/99acres/images/d_hp_ppf_xl.webp" >

			  </div>
			  <div class="col-sm-5">
				<div class="row" style="margin-top:8%">
				  <div class="col-sm-12">
					<b style="color:gray">POST YOUR PROPERTY</b>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<h2><b>Property owners get free posting when they register</b></h2>
				  </div>
				  <div class="col-sm-12"style="margin-top:2%">
					<p style="color:gray">Sell or rent your residential/ commercial property</p>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%">
				   <button class="btn btn-primary btn-block py-3">Post your property for FREE</button>
				  </div>
				   <div class="col-sm-6"style="margin-top:2%"></div>
				</div>
			  </div>
	
	</div>
	
</div>
<div class="container-fluid" style="margin-top:3%">
	<div class="row">
	  <div class="col-sm-1">
	  </div>
	  <div class="col-sm-10">
	     <div class="row">
		   <div class="col-sm-12">
		     <b>Our services for owners</b>
		   </div>
		   <div class="col-sm-12">
		     <p style="color:gray">Make your life easier with our services</p>
		   </div>
		 </div>
	    
	  </div>
	  <div class="col-sm-1">
	  </div>
	
	</div>
	<div class="row">
	  <div class="col-sm-1">
	  </div>
	  <div class="col-sm-4 card" style="background-color:#F0F8FF;border-radios:5%" id="right_rental_agreement">
	     <div class="row">
		   <div class="col-sm-12" style="margin-top:10%">
		    <img src="http://localhost/99acres/images/d_hp_rent_agreement.webp"style="height:130px" >

		   </div>
		   <div class="col-sm-12"style="margin-top:5%">
		     <b>Rental Agreement</b>
		   </div>
		   <div class="col-sm-12">
		     <p style="color:gray">Share basic details online and get doorstep delivery of your rental agreement</p>
		   </div>
		   <div class="col-sm-12" style="margin-bottom:1%">
		   
		   <?php
		     echo"<a href=''>Know more&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
		   
		   ?>
		     
		   </div>
		 </div>
	    
	  </div>
	  <div class="col-sm-2">
	  </div>
	  <div class="col-sm-4 card"style="background-color:#fdf5e6"id="left_rental_agreement">
	     <div class="row">
		 
		   <div class="col-sm-12" style="margin-top:2%">
		    
		    <img src="http://localhost/99acres/images/d_hp_owner_assist_benefits.webp"  style="height:170px">

		   </div>
		    <div class="col-sm-12" style="margin-top:5%">
		     <b>Get assistance in selling faster</b>
		   </div>
		   <div class="col-sm-12">
		     <p style="color:gray">Dedicated Relationship manager to help you sell your property faster</p>
		   </div>
		   <div class="col-sm-12"style="margin-bottom:2%">
		   
		   <?php
		     echo"<a href=''>Explore now&nbsp;&nbsp;<i class='fa fa-arrow-right'></i></a>";
		   
		   ?>
		     
		   </div>
		 </div>
	    
	  </div>
	  <div class="col-sm-1">
	  </div>
	
	</div>
</div>
<div class="container-fluid" style="margin-top:2%">
  <div class="row">
	  <div class="col-sm-1"></div>
	  
	  <div class="col-sm-10">
		  <div class="row">
			  <div class="col-sm-12">
				  <b style="color:gray">TOP CITIES</b>
			  </div>
			  <div class="co-sm-12">
				  <h1>Explore Real Estate in Popular Indian Cities</h1>
			  </div>
	      </div>
		
	  </div>
	  <div class="col-sm-1"></div>
  </div>
  <div class="row"style="margin-top:2%">
	<div class="col-sm-12">
	  <div class="row">
		  <div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="row">
				    <div class="col-sm-2">
					    <img src="http://localhost/99acres/images/236961707D-1594715125517.jpg"  style="height:100px;border-radius:5%" >

				    </div>
				    <div class="col-sm-1"style="margin-top:1%;margin-left:-20px">
					   <b >Delhi/NCR</b>
					   <b style="color:gray">164,000+ Properties</b>
					  
				    </div>
					 <div class="col-sm-2" >
						  <img src="http://localhost/99acres/images/236932009D-1594709336922.jpg"style="height:100px;border-radius:5%" >
					 </div>
					  <div class="col-sm-1"style="margin-top:1%;margin-left:-20px">
						   <b >Bangalore</b>
						   <b style="color:gray">49000+ Properties</b>
						  
					  </div>
					  <div class="col-sm-2">
						  <img src="http://localhost/99acres/images/336143474D-1640587363487.jpg"style="height:100px;width:140px;border-radius:5%" >

					 </div>
					   <div class="col-sm-1"style="margin-top:1%;">
						   <b >Pune</b>
						   <b style="color:gray">55000+ Properties</b>
					  
					  </div>
					  <div class="col-sm-2">
							<img src="http://localhost/99acres/images/236960749D-1594714810078.jpg"style="height:100px;border-radius:5%" >

					 </div>
				   <div class="col-sm-1"style="margin-top:1%;margin-left:-20px">
					   <b >Chennai</b>
						<b style="color:gray">164,000+ Properties</b>
				  
				  </div>
           </div>
         </div>
	   <div class="col-sm-1"></div>
	  </div>
	 </div>
   </div>
     <div class="row"style="margin-top:2%">
	<div class="col-sm-12">
	  <div class="row">
		  <div class="col-sm-1"></div>
			<div class="col-sm-10">
				<div class="row">
				    <div class="col-sm-2">
					    <img src="http://localhost/99acres/images/236975527D-1594718126587.jpg"  style="height:100px;border-radius:5%" >

				    </div>
				    <div class="col-sm-1"style="margin-top:1%;margin-left:-20px">
					   <b >Mumbai</b>
					   <b style="color:gray">100,000+ Properties</b>
					  
				    </div>
					 <div class="col-sm-2" >
						  <img src="http://localhost/99acres/images/236967665D-1594716318858.jpg"style="height:100px;border-radius:5%" >
					 </div>
					  <div class="col-sm-1"style="margin-top:1%;margin-left:-20px">
						   <b >Hyderabad</b>
						   <b style="color:gray">29000+ Properties</b>
						  
					  </div>
					  <div class="col-sm-2">
						  <img src="http://localhost/99acres/images/236973031D-1594717541096.jpg"style="height:100px;border-radius:5%" >

					 </div>
					   <div class="col-sm-1"style="margin-top:1%;margin-left:">
						   <b >Kolkata</b>
						   <b style="color:gray">29000+ Properties</b>
					  
					  </div>
					  <div class="col-sm-2">
							<img src="http://localhost/99acres/images/236927313D-1594708353470.jpg"style="height:100px;border-radius:5%" >

					 </div>
				   <div class="col-sm-1"style="margin-top:1%;margin-left:-20px;">
					   <b >Ahmedabad</b>
						<b style="color:gray">19000+ Properties</b>
				  
				  </div>
           </div>
         </div>
	   <div class="col-sm-1"></div>
	  </div>
	 </div>
   </div>
</div>
<div class="container-fluid" style="margin-top:4%">
   <div class="row">
     <div class="col-sm-12">
	      <center><b  style="color:gray">COMMERCIAL SPACES</b></center>
	 </div>
	 <div class="col-sm-12">
	     <h2 align="center"><b>Choose from a wide variety of commercial properties</b></h2>
	 </div>
   </div>
   <div class="row">
      <div  class="col-sm-1"></div>
      <div  class="col-sm-4" id="right_commercial">
	     <div class="row" >
		    <div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <b style="color:gray">BUY FOR COMMERCIAL USE</b>
			</div>
			<div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <h1>Buy a Commercial property</h1>
			</div>
			
			<div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <button class="btn btn-primary btn-block py-3"><b>Explore buying Comercial</b></button>
			
			</div>
		 </div>
	  </div>
	  <div  class="col-sm-2"></div>

	  <div  class="col-sm-4" id="left_commercial">
	    <div class="row" >
		    <div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <b style="color:gray">LEASE FOR COMMERCIAL USE</b>
			</div>
			<div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <h1>Lease a Commercial property</h1>
			</div>
			
			<div class="col-sm-1">
			</div>
			<div class="col-sm-11" style="margin-top:5%">
			   <button class="btn btn-primary btn-block py-3"><b>Explore Leasing Comercial</b></button>
			
			</div>
		 </div>
	  </div>
	  
	  
      <div  class="col-sm-1"></div>

   
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
	 redirect(base_url()."index.php/Acers/index");
	 
	 
	 
 }
 ?>