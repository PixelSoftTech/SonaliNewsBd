  
 <link data-require="jqueryui@*" data-semver="1.10.0" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
   <script data-require="jqueryui@*" data-semver="1.10.0" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    
    
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/css/smoothness/jquery-ui-1.10.0.custom.min.css" />
    <link rel="stylesheet" href="http://weareoutman.github.io/clockpicker/dist/jquery-clockpicker.css" />
    <link rel="stylesheet" href="js/clockpicker-12-hour-option.css" />
    <style>
		body {
		    background-color: #eeeeee;
		    font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;
		    font-size: 14px;
		}
		.outer-container {
			background-color: #fff;
		    box-shadow: 0 5px 4px #646464;
		    width: 70%;
		    height: 30em;
			margin-left: auto;
  			margin-right: auto;
  			border-radius: 4px;
		}
		.outer-container>a {
			float: right;
		}
		.container {
		    padding: 20px;

		}
		div.container > label {
		    padding: 5px;
		}
		h1 {
		    padding-left: 10px;
		}
		
		.input-12-hour-icon-button {
			font-size: 200%;
		}
	</style>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.0/jquery-ui.js"></script>
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>-->
    <script src="js/clockpicker-12-hour-option.js"></script>
    <script>
	$(function() {
		$(".input-12-hour-icon-button").button({
			icons: {
				primary: ".ui-icon-clock"
		},
			text: false
		})
	});
  </script> 
    <section class="content">

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu; echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?><?php echo $menu; ?> Create</h3>

                <div class="box-tools pull-right">
                    
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> back</button>
                                       
                </div>
            </div>
   <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>
            <div class="box-body">
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=news&folder=NewsImage" accept-charset="UTF-8" class="form" enctype="multipart/form-data">


    
   <div class="row">
	   
	  <!-- <div class="col-sm-6">
        <div class="form-group">
            <label for="paper_number_bn">Number(Bangla)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Title Bangla Here .." name="paper_number_bn" id="paper_number_bn" type="text" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="paper_number_en">Number(English)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Title English Here .." name="paper_number_en" id="paper_number_en" type="text" required>
        </div>
    </div> -->
	   
	<div class="col-sm-6">
        <div class="form-group">
            <label for="sironam_status">Trending<span style="color:#F00;">*</span></label>
            <select name="sironam_status" id="sironam_status" required class="form-control" >
            <option  value="">Select Sironam</option>
           
            <option >Yes</option>
            <option selected>No</option>
           
            </select>
               <script>
                    $("#sironam_status").select2({
                    allowClear:true,
                    placeholder: 'Select'
                    });
                </script>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="highlight_status">Home Highlight<span style="color:#F00;">*</span></label>
            <select name="highlight_status" id="highlight_status" required class="form-control" >
            <option  value="">Select Highlight</option>
           
            <option >Yes</option>
            <option selected>No</option>
           
            </select>
               <script>
                    $("#highlight_status").select2({
                    allowClear:true,
                    placeholder: 'Select'
                    });
                </script>
        </div>
    </div>
	
    <div class="col-sm-6">
        <div class="form-group">
            <label for="district">Select District<span style="color:#F00;">*</span></label>
            <select name="district" id="district" required class="form-control" >
                <option selected value="">Select District</option>
                <option data-value="barishal" value="3">বরিশাল</option>
                <option data-value="barguna" value="2">বরগুনা</option>
                <option data-value="bhola" value="4">ভোলা</option>
                <option data-value="jhalokathi" value="5">ঝালকাঠি</option>
                <option data-value="pirojpur" value="6">পিরোজপুর</option>
                <option data-value="patuakhali" value="7">পটুয়াখালী</option>
                <option data-value="chattogram" value="12">চট্টগ্রাম</option>
                <option data-value="bandarban" value="8">বান্দরবান</option>
                <option data-value="rangamati" value="9">রাঙামাটি</option>
                <option data-value="khagrachari" value="10">খাগড়াছড়ি</option>
                <option data-value="cox-s-bazar" value="11">কক্সবাজার</option>
                <option data-value="feni" value="13">ফেনী</option>
                <option data-value="noakhali" value="14">নোয়াখালী</option>
                <option data-value="lakshmipur" value="15">লক্ষ্মীপুর</option>
                <option data-value="cumilla" value="16">কুমিল্লা</option>
                <option data-value="brahmanbaria" value="17">ব্রাহ্মণবাড়িয়া</option>
                <option data-value="chandpur" value="18">চাঁদপুর</option>
                <option data-value="dhaka" value="19">ঢাকা</option>
                <option data-value="manikganj" value="20">মানিকগঞ্জ</option>
                <option data-value="gazipur" value="21">গাজীপুর</option>
                <option data-value="narayanganj" value="23">নারায়ণগঞ্জ</option>
                <option data-value="tangail" value="24">টাঙ্গাইল</option>
                <option data-value="madaripur" value="25">মাদারীপুর</option>
                <option data-value="munsiganj" value="27">মুন্সিগঞ্জ</option>
                <option data-value="gopalganj" value="28">গোপালগঞ্জ</option>
                <option data-value="kishoreganj" value="30">কিশোরগঞ্জ</option>
                <option data-value="narsingdi" value="31">নরসিংদী</option>
                <option data-value="shariatpur" value="32">শরীয়তপুর</option>
                <option data-value="rajbari" value="34">রাজবাড়ী</option>
                <option data-value="faridpur" value="35">ফরিদপুর</option>
                <option data-value="khulna" value="40">খুলনা</option>
                <option data-value="bagerhat" value="36">বাগেরহাট</option>
                <option data-value="chuadanga" value="37">চুয়াডাঙ্গা</option>
                <option data-value="jashore" value="38">যশোর</option>
                <option data-value="jhenaidah" value="39">ঝিনাইদহ</option>
                <option data-value="kushtia" value="41">কুষ্টিয়া</option>
                <option data-value="magura" value="42">মাগুরা</option>
                <option data-value="meherpur" value="43">মেহেরপুর</option>
                <option data-value="narail" value="44">নড়াইল</option>
                <option data-value="satkhira" value="45">সাতক্ষীরা</option>
                <option data-value="rajshahi" value="52">রাজশাহী</option>
                <option data-value="bogura" value="46">বগুড়া</option>
                <option data-value="jaipurhat" value="47">জয়পুরহাট</option>
                <option data-value="naogaon" value="48">নওগাঁ</option>
                <option data-value="natore" value="49">নাটোর</option>
                <option data-value="pabna" value="51">পাবনা</option>
                <option data-value="sirajganj" value="53">সিরাজগঞ্জ</option>
                <option data-value="chapainawabganj" value="66">চাঁপাইনবাবগঞ্জ</option>
                <option data-value="sylhet" value="65">সিলেট</option>
                <option data-value="habiganj" value="62">হবিগঞ্জ</option>
                <option data-value="moulvibazar" value="63">মৌলভীবাজার</option>
                <option data-value="sunamganj" value="64">সুনামগঞ্জ</option>
                <option data-value="rangpur" value="60">রংপুর</option>
                <option data-value="dinajpur" value="54">দিনাজপুর</option>
                <option data-value="gaibandha" value="55">গাইবান্ধা</option>
                <option data-value="kurigram" value="56">কুড়িগ্রাম</option>
                <option data-value="lalmonirhat" value="57">লালমনিরহাট</option>
                <option data-value="nilphamari" value="58">নীলফামারী</option>
                <option data-value="panchagarh" value="59">পঞ্চগড়</option>
                <option data-value="thakurgaon" value="61">ঠাকুরগাঁও</option>
                <option data-value="mymensingh" value="22">ময়মনসিংহ</option>
                <option data-value="jamalpur" value="26">জামালপুর</option>
                <option data-value="sherpur" value="29">শেরপুর</option>
                <option data-value="netrokona" value="33">নেত্রকোনা</option>

            </select>
               <script>
                    $("#district").select2({
                    allowClear:true,
                    placeholder: 'Select district'
                    });
                </script>
        </div>
    </div>
	   
    <div class="col-sm-6">
        <div class="form-group">
            <label for="category">Select Menu<span style="color:#F00;">*</span></label>
            <select name="category" id="category" required class="form-control" >
            <option selected value="">Select Menu</option>
        
            <option>কুরআন</option>
            <option>হাদিস</option>
				<option>নবী-রাসুল</option>
				<option>সাহাবী</option>
				<option>অন্যান্য</option>
				<option>ইসলামি দুনিয়া</option>
				<option>দৈনন্দিন আমল</option>
				<option>ইসলাম ও বিজ্ঞান</option>
				<option>গল্প</option>
				<option>কবিতা</option>
				<option>প্রবন্ধ</option>
				<option>প্রযুক্তি</option>
				<option>শিক্ষা</option>
				<option>প্রবাস</option>
				<option>স্বাস্থ্য</option>
				<option>আন্তর্জাতিক</option>
				<option>মাদরাসা পরিচিতি</option>
				<option>মূল্যবান বাণী</option>
				<option>দেশ পরিচিতি</option>
				
            
            </select>
               <script>
                    $("#category").select2({
                    allowClear:true,
                    placeholder: 'Select Category'
                    });
                </script>
        </div>
    </div>
	   
	   
   <div class="col-sm-12">
        <div class="form-group">
            <label for="title">Title(Bangla)</label>
            <input class="form-control" placeholder="Title Bangla Here .." name="title_bn" id="title_bn" type="text" >
        </div>
    </div>

    </div>
    
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail (Bangla)</label>
            <textarea class="form-control" placeholder="Editor Detail (Bangla)" name="detail_bn"  id="area_editor1"></textarea> 
        </div>
    </div>
     
    </div>

     

<div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="image">Upload (Photo)<span style="color:#F00;">*</span></label>
            <input class="form-control"  name="image"  type="file" required >
        </div>
    </div>
   
  
    
        
    

</div>


<div class="row">
    
     <div class="col-sm-4">
        <div class="form-group">
            <label for="top_news">Top News<span style="color:#F00;">*</span></label>
            <select name="top_news" id="top_news" required class="form-control" >
           <option value="" >Select Top News</option>
                      <option>Yes</option>
                      <option selected>No</option>
				<option>Today Top</option>
            
            </select>
               <script>
 $("#top_news").select2({
 allowClear:true,
 placeholder: 'Select Top News'
 });
 </script>
        </div>
    </div>
    
    
     <div class="col-sm-4">
        <div class="form-group">
            <label for="publish_date">Publish Date<span style="color:#F00;">*</span></label>
            <input type="text"  autocomplete="off" name="publish_date" placeholder="Publish Date" class="form-control date" value="<?php echo date("Y-m-d"); ?>" />
        
        </div>
        </div> 
    
    
    
     <div class="col-sm-4">
        <div class="form-group">
            <label for="publish_time">Publish Time<span style="color:#F00;">*</span></label>
            <input type="text" id="input-12-hour" autocomplete="off" name="publish_time" placeholder="Publish Time" class="form-control"  data-default="08:45" value="<?php echo date("h:iA"); ?>" />
        
        </div>
        </div> 
    
</div>
        
       <script>
	var input1 = $('#input-12-hour');
	input1.clockpicker({
	    twelvehour: true,
	    donetext: 'Done'
	});
	
	var input2 = $('#input-12-hour-2');
	input2.clockpicker({
	    twelvehour: true,
	    donetext: 'Done'
	});



	</script> 
	
	
      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit"  name="Insert_News"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
