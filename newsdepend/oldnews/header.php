
<style>

@media only screen and (max-width: 600px) {
  .m-none {
    display: none;
  }
}
	.f-18{
		text-align: justify;
	}
</style>

<div class="container pt-1 pb-1"><div class="row"><div class="col-12 col-sm-12 col-md-6 pr-md-1 pb-2 pb-md-0"></div><div class="col-12 col-sm-12 col-md-6 pl-md-1"></div></div></div>


<div class="header no-print"><div class="header-warp"><div class="header-bg"><div class="hdr-bg-warp pb-3 pb-md-2" style="padding: 0px !important">
	
	
	<div class="container-fluid" style="padding: 0px;"><div class="row" style="margin: 0px;">
	
	
	
	<div class="col-12 col-sm-12 col-md-4" style="padding: 0px;"><div class="ad-item text-center">
	<p style="text-align: center;font-size: 16px;margin-top:20px;margin-bottom:0px;"><?php echo BanglaConverter::en2bn(date ("l, d, F, Y")); echo " ,   "; echo $bangla_date_name;?></p>
		<?php
		
	$Advertisement1 = $pdo->query("select  * from  advertisement where category='Header Advertisement Left 630x125 PX' order by id DESC limit 0,1");
        $rowdaAdvertisement1= $Advertisement1->fetch();		
	 
     if(empty($rowdaAdvertisement1)){
		
			?>
           
		<a href="#"><img  src="ad/add-7-2.gif"  class="img-fluid"></a>
        <?php }else{
       $company_link1=$rowdaAdvertisement1['company_link']; 
        if(!empty($company_link1)){
			
        ?>
        
        
        
        
        
        
        
        
        
        
            
        
        <?php }  } ?>		
			

			
			

		
</div></div>
	
	
	<div class="col-12 col-sm-12 col-md-4 " style="padding-bottom: 0px !important;margin-bottom: 0px !important;"><div class="logo pb-3 pb-sm-3 pb-md-0">
<a href="<?php echo $base_url; ?>"><div class="logo-warp"><div class="text-center">
<img src="weblogo/dawatulislamdot24-logo.png" alt="" class="img-fluid"></div></div>
</a>
<p style="text-align: center;font-size: 16px;"><?php /* echo BanglaConverter::en2bn(date ("l, d, F, Y")); echo "    "; echo $bangla_date_name; */ ?></p></div></div>
	<div class="col-12 col-sm-12 col-md-4 " style="padding: 0px;text-align: center;">
	 <a class="btn btn-success" style="text-align:center;" href="?menu=Donation&menuName=উপদেষ্টা মণ্ডলী">উপদেষ্টা মণ্ডলী</a>   
	</div>
<!--	<div class="col-12 col-sm-12 col-md-4 " style="padding: 0px;"><div class="ad-item text-center">
		
		<?php
		
	$Advertisement1 = $pdo->query("select  * from  advertisement where category='Header Advertisement Right 630x125 PX' order by id DESC limit 0,1");
        $rowdaAdvertisement1= $Advertisement1->fetch();		
	 
     if(empty($rowdaAdvertisement1)){
		
			?>
           
		
        <?php }else{
       $company_link1=$rowdaAdvertisement1['company_link']; 
        if(!empty($company_link1)){
			
        ?>
       
       
       
       
       
       
       
       
       
       
        <?php }else{ ?>
        
            <a href="?menu=AdvertisementDetail&menuName=<?php echo $rowdaAdvertisement1['company_name']; ?>&Detail=<?php echo $rowdaAdvertisement1['id']; ?>"><img  src="advertisement_image/<?php echo $rowdaAdvertisement1['photo']; ?>"  class="img-fluid" title="<?php echo $rowdaAdvertisement1['company_name']; ?>" alt="<?php echo $rowdaAdvertisement1['company_name']; ?>" ></a>
        
        <?php }  } ?>		
			
		
		
</div></div>-->
	
	
	</div></div></div></div></div></div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.topnav {
  overflow: hidden;
  background-color: #0d8377;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
  font-size: 18px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdownmenu {
  float: left;
  overflow: hidden;
}

.dropdownmenu .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdownmenu-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdownmenu-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdownmenu:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdownmenu-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdownmenu:hover .dropdownmenu-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdownmenu .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdownmenu {float: none;}
  .topnav.responsive .dropdownmenu-content {position: relative;}
  .topnav.responsive .dropdownmenu .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
  
 
  
}
@media screen and (min-width: 601px) {
  .mobilemenudisplay{
    display:none !important;
  }   
}

</style>








<div class="container-fluid no-print" style="background-color: #0d8377;">

<div class="container" >
	
<div class="topnav" id="myTopnav">
  <a href="<?php echo $base_url; ?>" <?php if(empty($menuName)){ ?> class="active" <?php } ?>>প্রচ্ছদ</a>
  <a href="?menu=NewsCategory&menuName=কুরআন" <?php if(!empty($menuName) && $menuName=='কুরআন'){ ?> class="active" <?php } ?>>কুরআন</a>
  <a href="?menu=NewsCategory&menuName=হাদিস" <?php if(!empty($menuName) && $menuName=='হাদিস'){ ?> class="active" <?php } ?>>হাদিস</a>
  <div class="dropdownmenu <?php if(!empty($menuName) && ($menuName=='নবী-রাসুল' or $menuName=='সাহাবী' or $menuName=='অন্যান্য')){ ?> active <?php } ?>">
    <button class="dropbtn " >জীবন কথা 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownmenu-content">
      <a href="?menu=NewsCategory&menuName=নবী-রাসুল">নবী-রাসুল</a>
      <a href="?menu=NewsCategory&menuName=সাহাবী">সাহাবী</a>
      <a href="?menu=NewsCategory&menuName=অন্যান্য">অন্যান্য</a>
    </div>
  </div> 
  <a href="?menu=NewsCategory&menuName=ইসলামি দুনিয়া" <?php if(!empty($menuName) && $menuName=='ইসলামি দুনিয়া'){ ?> class="active" <?php } ?>>ইসলামি দুনিয়া</a>
	<a href="?menu=NewsCategory&menuName=দৈনন্দিন আমল" <?php if(!empty($menuName) && $menuName=='দৈনন্দিন আমল'){ ?> class="active" <?php } ?>>দৈনন্দিন আমল</a>
	<a href="?menu=NewsCategory&menuName=ইসলাম ও বিজ্ঞান" <?php if(!empty($menuName) && $menuName=='ইসলাম ও বিজ্ঞান'){ ?> class="active" <?php } ?>>ইসলাম ও বিজ্ঞান</a>
	
	
	<div class="dropdownmenu <?php if(!empty($menuName) && ($menuName=='গল্প' or $menuName=='কবিতা' or $menuName=='প্রবন্ধ')){ ?> active <?php } ?>">
    <button class="dropbtn">সাহিত্য 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownmenu-content">
      <a href="?menu=NewsCategory&menuName=গল্প">গল্প</a>
      <a href="?menu=NewsCategory&menuName=কবিতা">কবিতা</a>
      <a href="?menu=NewsCategory&menuName=প্রবন্ধ">প্রবন্ধ</a>
    </div>
  </div> 
	
	<div class="dropdownmenu <?php if(!empty($menuName) && ($menuName=='প্রযুক্তি' or $menuName=='শিক্ষা' or $menuName=='প্রবাস'  or $menuName=='স্বাস্থ্য' )){ ?> active <?php } ?>">
    <button class="dropbtn">অন্যান্য
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownmenu-content">
      <a href="?menu=NewsCategory&menuName=প্রযুক্তি">প্রযুক্তি</a>
      <a href="?menu=NewsCategory&menuName=শিক্ষা">শিক্ষা</a>
      <a href="?menu=NewsCategory&menuName=প্রবাস">প্রবাস</a>
	  <a href="?menu=NewsCategory&menuName=স্বাস্থ্য">স্বাস্থ্য</a>
    </div>
  </div> 
  <div class="dropdownmenu  m-none <?php if(!empty($menuName) && ($menuName=='আন্তর্জাতিক' or $menuName=='মাদরাসা পরিচিতি' or $menuName=='ভিডিও'  or $menuName=='ফটো গ্যালারী' or $menuName=='মূল্যবান বাণী' or $menuName=='দেশ পরিচিতি' )){ ?> active <?php } ?>">
    <button class="dropbtn"><i class="fa fa-bars" style="font-size:20px"></i>
     
    </button>
    
    <div class="dropdownmenu-content">
      <a href="?menu=NewsCategory&menuName=আন্তর্জাতিক">আন্তর্জাতিক</a>
      <a href="?menu=NewsCategory&menuName=প্রতিষ্ঠান পরিচিতি">প্রতিষ্ঠান পরিচিতি</a>
      <a href="?menu=VideoGallery&menuName=ভিডিও">ভিডিও</a>
	  <a href="?menu=PhotoGally&menuName=ফটো গ্যালারী">ফটো গ্যালারী</a>
	  <a href="?menu=NewsCategory&menuName=মূল্যবান বাণী">মূল্যবান বাণী</a>
	  <a href="?menu=NewsCategory&menuName=দেশ পরিচিতি">দেশ পরিচিতি</a>
    </div>
  </div> 

      <div class="dropdownmenu mobilemenudisplay <?php if(!empty($menuName) && ($menuName=='আন্তর্জাতিক' or $menuName=='মাদরাসা পরিচিতি' or $menuName=='ভিডিও'  or $menuName=='ফটো গ্যালারী' or $menuName=='মূল্যবান বাণী' or $menuName=='দেশ পরিচিতি' )){ ?> active <?php } ?>">
    
     <button class="dropbtn ">আরও
     
    </button>
    <div class="dropdownmenu-content">
      <a href="?menu=NewsCategory&menuName=আন্তর্জাতিক">আন্তর্জাতিক</a>
      <a href="?menu=NewsCategory&menuName=মাদরাসা পরিচিতি">মাদরাসা পরিচিতি</a>
      <a href="?menu=VideoGallery&menuName=ভিডিও">ভিডিও</a>
	  <a href="?menu=PhotoGally&menuName=ফটো গ্যালারী">ফটো গ্যালারী</a>
	  <a href="?menu=NewsCategory&menuName=মূল্যবান বাণী">মূল্যবান বাণী</a>
	  <a href="?menu=NewsCategory&menuName=দেশ পরিচিতি">দেশ পরিচিতি</a>
    </div>
  </div> 
 

     


  
  <a id="myBtn"><i id="searchmenubacground" class="fa fa-search" style="color:#fff;" ></i></a>	
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>	
	
	</div>




</div>
















<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



<style>




.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 20px 50px;
  border: 1px solid #888;
  width: 90%;
  /*box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);*/
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px 20px 16px;
  border:none;
  color: black;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px 20px 16px;
  border:none;
  color: black;
}



</style>



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
     <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">অনুসন্ধান</h5>
        <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
          <span style="color:#000;" aria-hidden="true">&times;</span>
        </button>
      </div>
     <div class="modal-body">
        
		<form method="POST" action="?menu=NewsSearch&menuName=সংবাদ" accept-charset="UTF-8" class="form" enctype="multipart/form-data">	
		<div class="row">
		    <div class=" col-md-2 " style="margin-bottom:10px;" ></div>
		    <div class=" col-md-6 " style="margin-bottom:10px;" >
		
		 <input class="form-control" placeholder="Write Here .." name="searchdata" id="searchdata" type="text" required="required">
		
			
		</div>
		<div class=" col-md-2 "  style="margin-bottom:10px;" >
		
		 <input class="form-control btn btn-success"  name="Search" id="Search" type="submit" value="অনুসন্ধান" >
		
			
		</div></div>
			</form>	
			
      </div>
  <div class="modal-footer">
      
      </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


