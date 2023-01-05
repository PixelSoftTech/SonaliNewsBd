  
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
            <label for="sironam_status">Sironam<span style="color:#F00;">*</span></label>
            <select name="sironam_status" id="sironam_status" required class="form-control" >
            <option  value="">Select Sironam</option>
           
            <option >Yes</option>
            <option selected>No</option>
           
            </select>
               <script>
 $("#sironam_status").select2({
 allowClear:true,
 placeholder: 'Select Sironam'
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
