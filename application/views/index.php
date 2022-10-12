  <?php
 $email=get_cookie("login_user");
 $pass=$this->session->userdata($email);
 if($email!=null && $pass!=null){
	 redirect(base_url()."index.php/Acers/home");
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="http://localhost/99acres/js/jquery-3.6.0.min.js"></script>
  
  <style>
  .radioInput_textOnly__1r7GL_free_plan {
    box-shadow: "";
	height:22px;
    background: #fff;
    border-radius: 2px;
    -webkit-border-radius:2px;
    -moz-border-radius: 2px;
    outline: none;
    margin-left: 125;
	margin-top:-30;
    cursor: pointer;
    border: 1px solid #ebecf0;
    padding: 0px 8px 0px;
    font-size:12px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
	 
   
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
    padding: 4px 3px 0px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #42526e;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
}
  .MultiCarousel { 
		  float: left; 
		  overflow: hidden;
		  padding: 15px;
		  width: 100%;
		  position:relative;
  }
  #prop_price{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
	  
       
	 
 }
 #prop_price1{
	  box-shadow:0px 0px 5px rgba(0,0, 0, 0.2);
	  
       
	 
 }
  .MultiCarousel{
		Height: 350px;
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
 
  body{
	    font-family: "Open Sans",Arial,Helivetica,sans-serif;
	  
	  
  }
  #url{
	 
	  
	  background-image:url("http://localhost/99acres/images/1366-smsa1.jpg");
	  height:340px;
	  
	 
	  
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
 #prop_price{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
	  
       
	 
 }
  #dropdown_contact{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
        
	  
  }
   #dropdown_user{
	  box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
        
	  
  }
  #card1{

        box-shadow:1px 1px 5px rgba(0,0, 0, 0.4);
        
 } 
 #card_for_input{

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
		
		(function () {
            var last_scroll_top = 0;

     $(window).scroll(function(){
       var  scroll_top = $(this).scrollTop();
       
	  if(scroll_top >400) {
		         
				 $(".navbar.sticky-top").show();
			    
				 
	   }
	   if(scroll_top<400){
		   
		    $(".navbar.sticky-top").hide();
	   }
	   
             
       
       last_scroll_top = scroll_top;
    });
}());
				
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
// property images slide jquery part start	
    $(".col-sm-12.prop_cover_images").mouseover(function(){
		/*var bedrom_img_code=$(this).attr("rel1");
		var prop_id=$(this).attr("id");
		$("#prop_price_"+prop_id).attr("src","http://localhost/99acres/property_user_img/"+bedrom_img_code+""+".jpg");
		*/
		
	});
});


</script> 

 
 </head>
 <body  >
   
<nav class="navbar sticky-top" style="background-color:#005CA8;display:none">
  
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
					
					<input type="search" class="form-control" style=';border:none;margin-left:120px;transform: scale(1.1);margin-right:50px;border-radius:5px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
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
                      <a style="cursor:pointer;float:right"data-toggle="dropdown" >
                            <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin:.25rem"></i>
						  </i> 
						  </a>
                        
                            <div class="dropdown-menu position-absolute"id="more_property_details"  style="width:250px;height:180px;margin-left:-50px;margin-top:50px">
                           
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
	<div class="container-fluid"id='top-header'>
     <div class="row">
	   <div class="col-sm-12"id="url">
	      <div class="row" id="none" style="margin-top:1%">
		  <div class="col-sm-2"style="margin-top:-8">
		    <h3 style="color:white"><b>99acers</b></h3>
			 <p style="color:white;margin-top:-10px;font-size:10px">India's&nbsp;No.1&nbsp;Property&nbsp;Portal</p>
	     
		  </div>
		   <div class="col-sm-2">
		     <div class="nav-item dropdown" style="color:#F5F7FA;" id="show_more_for_dropdown">
                        <a style="cursor:pointer;font-size:18px"data-toggle="dropdown" ><b>All india</b> 
                            <i class="fa fa-angle-down"  id="show_more_down"></i></a>
                        <div class="dropdown-menu position-absolute"  id="show_more" style="width:600px;height:400px;margin-top:0px">
                           <div class="container-fluid">
						     <div class="row">
							    <div class="col-sm-12" style="margin-top:2%">
							     <a href="" class="dropdown-item">
                                      <h3><b>Explore real estate in...</b></h3></a>
							     </div>
								 <div class="col-sm-12" style="margin-top:2%">
								    <div class="row">
										 <div class="col-sm-1"></div>
										<div class="col-sm-4" style="margin-top:2%">
											  <b>Buy</b>
										</div>
										<div class="col-sm-4" style="margin-top:2%">
											
											 <b>Rent/Lease</b>
										 </div>
										 <div class="col-sm-3" style="margin-top:2%">
											 <b>PG/Co-living</b>
										</div>
								   </div>
								</div>
								<div class="col-sm-4" style="margin-top:5%">
								  
										<div class="nav-item dropdown" >
												<a style="cursor:pointer;font-size:20px;"data-toggle="dropdown" ><b>All Residential
													<i class="fa fa-angle-down" ></i></b></a>
												<div class="dropdown-menu position-absolute"   id="show_more">
												   <a href="" class="dropdown-item"><i class="fa fa-phone" style="font-size:25px;color:#3392F3"></i>
													<span>24*7 Customer Care</span></a>
														
												</div>
											</div>
			                       
								</div>
								 <div class="col-sm-8" style="margin-top:5%">
								       <div class="input-group mb-0" id="card_for_input">

											<input type="text" class="form-control py-2" placeholder="search,city,locality,project" aria-label="search" aria-describedby="basic-addon1">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fa fa-search" ></i></span>
											</div>
										</div>
								 </div>
							 </div>
							</div>
						   
						  
                                
                        </div>
             </div>
		  </div>
		   <div class="col-sm-2">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:18px"data-toggle="dropdown" ><b>For Buyers</b>
                            <i class="fa fa-angle-down" ></i></a>
                        <div class="dropdown-menu position-absolute"  style="width:900px;height:400px;margin-right:350px">
                           
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
		   <div class="col-sm-2">
		     <div class="nav-item dropdown" style="color:#F5F7FA;">
                        <a style="cursor:pointer;font-size:18px"data-toggle="dropdown" ><b>For Owners</b>
                            <i class="fa fa-angle-down" ></i></a>
                        <div class="dropdown-menu position-absolute"  style="width:900px;height:300px;margin-right:350px">
                           
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
		  <div class="col-sm-2">
		   
		    <a  href="<?=base_url().'index.php/Acers/Post_property/'?>" style="cursor:pointer;font-size:18px;color:#F5F7FA;text-decoration:none" ><b>Post&nbsp;Property</b>
            </a>
			<span class='radioInput_textOnly__1r7GL_free_plan'><b>Free</b></span> 

                               
		  </div>
		   <div class="col-sm-1" style="margin-top:3px">
		     <div class="nav-item dropdown" style="color:white;">
                        <a style="cursor:pointer;"data-toggle="dropdown" >
                            <i id='fa_fa_headphones'>
						    <i class="fa fa-headphones" style="color:black;margin:.25rem"></i>
						  </i> 
						  </a>
                        
                            <div class="dropdown-menu position-absolute"id='dropdown_contact'  style="width:250px;height:180px;margin-right:100px;margin-top:10px">
                           
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
                        <a style="cursor:pointer;font-size:26px;"data-toggle="dropdown" ><i class="fa fa-user-circle-o" style='margin-top:-5px'></i>
                           </a>
                        <div class="dropdown-menu position-absolute" id='dropdown_user' style="width:170px;height:230px;margin-right:70px">

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
		  
		  </div>
		  <div class="row" style="margin-top:5%">
		    <div class="col-sm-12">
			   <div class="row">
			     <div class="col-sm-4">
				 <div class="row">
				 <div class="col-sm-6">
				     <h3 style="color:white">EMAAR</h3>
				 </div>
				 <div class="col-sm-6">
				   <h3 style="color:white">EBD89</h3>
				 </div>
				 <div class="col-sm-6">
				     <pre style="color:white">INDIA</pre>
				 </div>
				 <div class="col-sm-6">
				   <pre style="color:white">EMAAR BUSINES DISTRICT</pre>
				 </div>
				 <div class="col-sm-12">
				   <p style="color:white">LIMITED SCO PLOTS STARTING 2.37CR*.ONWARDS</p>
				 </div>
				 <div class="col-sm-12">
				   <p style="color:white">Sector 89,Gurugram|call 0123456789</p>
				 </div>
				 </div>
				    
				 </div>
				  <div class="col-sm-4">
				 
				 </div>
				  <div class="col-sm-4">
				 
				 </div>
			   </div>
			</div>
		  
		  </div>
		  <div class="row" style="margin-top:1%">
		  <div class="col-sm-1">
		  </div>
		   <div class="col-sm-10 card" id="card1" style="height:140px;border-radius:15px">
		     <div class="row"style="margin-top:2%;">
			   <div class="col-sm-2">
			     <h5>Buy</h5>
			   </div>
			   <div class="col-sm-2">
			     <h5>Rent</h5>
			   </div>
			   <div class="col-sm-2">
			     <h5>PG/Co-living</h5>
			   </div>
			   <div class="col-sm-2">
			     <h5>Commercial</h5>
			   </div>
			   <div class="col-sm-2">
			     <h5>Coworking</h5>
			   </div>
			   <div class="col-sm-2">
			     <h5>Projects</h5>
			   </div>
			    <div class="col-sm-12"style="background-color:#F1F2F4;height:1px">
				</div>
			   <div class="col-sm-2"style="margin-top:1%">
			      <div class="nav-item dropdown" >
                        <a style="cursor:pointer;font-size:17px;"data-toggle="dropdown" ><b>All Residential
                            <i class="fa fa-angle-down" ></i></b></a>
                        <div class="dropdown-menu position-absolute"   id="show_more">
                           <a href="" class="dropdown-item"><i class="fa fa-phone" style="font-size:25px;color:#3392F3"></i>
                            <span>24*7 Customer Care</span></a>
                                
                        </div>
                    </div>
					<hr style="transform:rotate(90deg);width:82px;margin-top:3px;margin-right:-30px">
					
			   </div>
			   
			   <div class="col-sm-10" style="margin-top:1%">
			      <div class="input-group mb-0">
					<input type="search" class="form-control" style=';;margin-left:20px;transform: scale(1.1);;border-radius:10px' placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
					
					<div class="input-group-prepend">
						<i class="fa fa-search"style="transform: scale(1.2);margin:.65rem;" ></i>
					</div>
					
                  </div>
			   
			   </div>
			   
			 </div>
		   </div>
		    <div class="col-sm-1">
		  </div>
       </div>
	 </div>
	   
   </div>
</div>
<div class="container-fluid" style="margin-top:10%">
	  
<!----- 2 BHK Property part start------->
		<div class="row" style="margin-top:5%">
		   <div class="col-sm-12">
		   
		     <h3><b>Recommended  2BHK Properties</b></h3>
		   
		   </div>
		   <div class="col-sm-12">
		     <p style="color:gray">Curated especially for you</p>
		   
		   </div>
		  
		  <div class='col-sm-8'>
		     <div class="row">
			 <?php
			     $prop_city;
				 $prop_aprtment;
				 $prop_img_code;
				 $prop_id;
				 $prop_price;
				 $prop_type;
				 $prop_num_bathroom;
				 $this->db->select("*");
				 $this->db->from("99acers_user_property_profile");
				 $this->db->where("prop_type","2 BHK");
				 $this->db->where("status",1);
				 $res=$this->db->get()->result();
			 ?>
			 <div class="col-sm-12">
			    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
					<div class="MultiCarousel-inner">
						   <?php
								foreach($res as $row){
												
											  $prop_id=$row->prop_code;
											  $prop_price=$row->prop_price;
											  $prop_type=$row->prop_type;
											  $prop_num_bathroom=$row->prop_num_bathroom;
											  $prop_city=$row->prop_city;
											  $prop_aprtment=$row->prop_aprtment;
											  $this->db->select("img_code");
											  $this->db->from("cover_image");
											  $this->db->where("property_code",$prop_id);
											  foreach($this->db->get()->result() as $row1){
												  $prop_img_code=$row1->img_code;
											  }
											  $prop_bedroom_img_code;
											  $this->db->select("*");
											  $this->db->from("bedroom_image");
											  $this->db->where("property_code",$prop_id);
											  foreach($this->db->get()->result() as $row){
												  
												  $prop_bedroom_img_code=$row->img_code;
												  
											  }
											
											
											
						   ?>
		    
						  <div class="item">
						  <a href="<?=base_url()?>index.php/Acers/view_property?pid=<?=$prop_id?>" style='color:black;text-decoration:none'>
								<div class="pad15">
								   <div class="container-fluid">
								      <div class="row">
                                         <div class="col-sm-12 prop_cover_images" id='<?=$prop_id?>' rel='<?=$prop_id?>' rel1='<?=$prop_bedroom_img_code?>' >
										    <img src="http://localhost/99acres/property_user_img/<?=$prop_img_code?>.jpg" id='prop_price_<?=$prop_id?>'class="img-fluid" style="height:200px;width:400px;border-radius:2px;">  
									            
										 </div>
										 
										 
										 <div class="col-sm-12 prop_card"  rel='<?=$prop_id?>'>
										    
										    <!--<h4 style="margin-top:-50px;margin-right:160px;margin-left:20px;height:30px;border-radius:5px;" class="card" id='prop_price'><span style="font-size:17px;margin:..25rem" class='text-dark'>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L</span></h4>
										 
											   <h4 style="margin-top:-50px;margin-left:20px;height:30px;border-radius:5px;"  id='prop_price'><span style="font-size:17px;" class='text-dark'>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L</span></h4>
										-->
                                              <h5 class='card'id='prop_price1' style='margin-left:-1px;margin-right:0px;border-radius:2px'>
											     <span class='card-body' >
												   <h6 style='color:#2980B7'><b>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L,&nbsp;<?=$prop_type?></b></h6>
												   <h6><b><?=$prop_aprtment?></b></h6>
												    <h6 style='color:gray;font-size:14px'><b><?=$prop_city?></b></h6>
												  
											     </span>
											  
											  </h5>
										
										</div>
										<div class="col-sm-11">
										    <i class="fa fa-star-o" style="float:right;margin-top:-310px;color:white;font-size:25px"></i>
										 </div>
										 <div class="col-sm-1">
										 
										 </div>
										 
										 <!--<div class="col-sm-12" style='margin-top:1%'>
										 <h6><b><?=$prop_type?>&nbsp;Aprtment,&nbsp;<?=$prop_num_bathroom?>&nbsp;Baths</b></h6>
										 
										 </div>
										 <div class="col-sm-12">
										  <p style='font-size:12px'>in&nbsp;<b><?=$prop_aprtment?></b>,&nbsp;<?=$prop_city?></p>
										 
										 </div>-->
										 
									  </div>
								   </div>
								   
								</div>
							</a>
						  </div>
						   
							<?php
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
		  
		 <div class="col-sm-3 card" style="background-color:#F0F8FF;border-radios:5%;height:330;margin-top:10px" id="right_rental_agreement">
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
	  <div class="col-sm-1">
	  </div>
		
		
		
		</div>
<!-- 2 BHK property end------------------------------------------------------------------------------------>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---->		<!----- 4 BHK Property part start------->
		<div class="row" style="margin-top:5%">
		   <div class="col-sm-12">
		     <h3><b>Recommended  4 BHK Properties</b></h3>
		   
		   </div>
		   <div class="col-sm-12">
		     <p style="color:gray">Curated especially for you</p>
		   
		   </div>
		  
		  <div class='col-sm-8'>
		     <div class="row">
			 <?php
			     $prop_city;
				 $prop_aprtment;
				 $prop_img_code;
				 $prop_id;
				 $prop_price;
				 $prop_type;
				 $prop_num_bathroom;
				 $this->db->select("*");
				 $this->db->from("99acers_user_property_profile");
				 $this->db->where("prop_type","4 BHK");
				 $this->db->where("status",1);
				 $res=$this->db->get()->result();
			 ?>
			 <div class="col-sm-12">
			    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
					<div class="MultiCarousel-inner">
						   <?php
								foreach($res as $row){
												
											  $prop_id=$row->prop_code;
											  $prop_price=$row->prop_price;
											  $prop_type=$row->prop_type;
											  $prop_num_bathroom=$row->prop_num_bathroom;
											  $prop_city=$row->prop_city;
											  $prop_aprtment=$row->prop_aprtment;
											  $this->db->select("img_code");
											  $this->db->from("cover_image");
											  $this->db->where("property_code",$prop_id);
											  foreach($this->db->get()->result() as $row1){
												  $prop_img_code=$row1->img_code;
											  }
											
											
											
						   ?>
		    
						  <div class="item">
						  <a href="<?=base_url()?>index.php/Acers/view_property?pid=<?=$prop_id?>" style='color:black;text-decoration:none'>
								<div class="pad15">
								   <div class="container-fluid">
								      <div class="row">
                                         <div class="col-sm-12" id='prop_card1-<?=$prop_id?>'>
										    <img src="http://localhost/99acres/property_user_img/<?=$prop_img_code?>.jpg" id='prop_price'class="img-fluid" style="height:200px;width:400px;border-radius:2px;">  
									            
										 </div>
										 
										 <div class="col-sm-12 prop_card"  rel='<?=$prop_id?>'>
										    
										    <!--<h4 style="margin-top:-50px;margin-right:160px;margin-left:20px;height:30px;border-radius:5px;" class="card" id='prop_price'><span style="font-size:17px;margin:..25rem" class='text-dark'>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L</span></h4>
										 
											   <h4 style="margin-top:-50px;margin-left:20px;height:30px;border-radius:5px;"  id='prop_price'><span style="font-size:17px;" class='text-dark'>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L</span></h4>
										-->
                                              <h5 class='card'id='prop_price1' style='margin-left:-1px;margin-right:0px;border-radius:2px'>
											     <span class='card-body' >
												   <h6 style='color:#2980B7'><b>₹&nbsp;<?=$prop_price[0].$prop_price[1]?>&nbsp;L,&nbsp;<?=$prop_type?></b></h6>
												   <h6><b><?=$prop_aprtment?></b></h6>
												    <h6 style='color:gray;font-size:14px'><b><?=$prop_city?></b></h6>
												  
											     </span>
											  
											  </h5>
										
										</div>
										<div class="col-sm-11">
										    <i class="fa fa-star-o" style="float:right;margin-top:-310px;color:white;font-size:25px"></i>
										 </div>
										 <div class="col-sm-1">
										 
										 </div>
										 
										 <!--<div class="col-sm-12" style='margin-top:1%'>
										 <h6><b><?=$prop_type?>&nbsp;Aprtment,&nbsp;<?=$prop_num_bathroom?>&nbsp;Baths</b></h6>
										 
										 </div>
										 <div class="col-sm-12">
										  <p style='font-size:12px'>in&nbsp;<b><?=$prop_aprtment?></b>,&nbsp;<?=$prop_city?></p>
										 
										 </div>-->
										 
									  </div>
								   </div>
								   
								</div>
							</a>
						  </div>
						   
							<?php
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
		  
		  <div class="col-sm-3 card"style="background-color:#fdf5e6;margin-top:10px;height:330"id="left_rental_agreement">
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
	  <div class='col-sm-1'></div>
		
		
		
		</div>
<!-- 4 BHK property end------------------------------------------------------------------------------------>
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx---->		
	 
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
<!----- 4 BHK Property part end------->		
		
		
		
		
		
		
		
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
 }
	
	
?>
									 
									 
							 
 </body>
 </html>