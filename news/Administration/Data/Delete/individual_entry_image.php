 <?php 
 if(isset($_GET["pers_no_id"])){
	 $pers_no_id=$_GET["pers_no_id"];
	 $army_no=$_GET["army_no"];
	 $tab_value=$_GET["tab"];
	 
	 
	 $information = $pdo->query("SELECT a.*,`b`.`pers_no_type_name` AS pers_no_type_name,`c`.`rank_name` AS rank_name,`d`.`corps_name` AS corps_name,`e`.`setup_type_name` AS gender_name FROM `employee_personal_information` AS a INNER JOIN `pers_no_type_setup` AS b ON b.`id`=a.`pers_no_id` INNER JOIN `rank_setup` AS c ON `a`.`rank_id`=`c`.`id` INNER JOIN corps_setup AS d ON `a`.`corps_id`=`d`.`id` INNER JOIN one_type_setup AS e ON `a`.`gender_id`=`e`.`id`  where `a`.`pers_no_id`='$pers_no_id' and `a`.`army_no`='$army_no' and `a`.deleted_at is NULL");
     $rowdata = $information->fetch();
	 $employe_id=$rowdata["id"];
	 
	 }
 ?>
 
 <link rel="stylesheet" href="Image Crop/croppie.min.css">
<style>
.nav-tabs > li > a{
	margin-right:0px;
	}

</style>
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
   
   
   
   
            

            <div class="box-body">
            
            <div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <label for="name_english">Pers No&nbsp;:&nbsp;</label><?php echo $rowdata["pers_no_type_name"]; echo $army_no; ?> 
            
        </div>
    </div>
 
        <div class="col-sm-2">
        <div class="form-group">
            <label for="name_bangla">Rank&nbsp;:&nbsp;</label><?php echo $rowdata["rank_name"]; ?>
            
        </div>
			</div> 
            <div class="col-sm-4">
        <div class="form-group">
            <label for="name_bangla">Corps&nbsp;:&nbsp;</label><?php echo $rowdata["corps_name"]; ?>
            
        </div>
			</div>
       
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name_bangla">Name.&nbsp;:&nbsp;</label><?php echo $rowdata["name_english"]; ?>
            
        </div>
    </div>
</div>
          <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>   
                        
            <ul class="nav nav-tabs">
    <li class="nav-item <?php if($tab_value=='Image'){?>active<?php } ?>">
      <a class="nav-link active" data-toggle="tab" href="#home">Image Upload</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Address'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Address">Address</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Spouse'){?>active<?php } ?>">
      <a class="nav-link " data-toggle="tab" href="#Spouse">Spouse</a>
    </li>
     <li class="nav-item <?php if($tab_value=='Family'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Family">Family</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Children'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Children">Children</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Civ_Edn'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Civ_Edn">Civ Edn</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Language'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Language">Language</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Med'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Med">Med</a>
    </li>
    <li class="nav-item <?php if($tab_value=='Bank_Account'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#Bank_Account">Bank Account</a>
    </li>
     <li class="nav-item <?php if($tab_value=='NOK'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#NOK">NOK</a>
    </li>
    <li class="nav-item <?php if($tab_value=='NRDS'){?>active<?php } ?>">
      <a class="nav-link" data-toggle="tab" href="#NRDS">Near Relations in Def Svc</a>
    </li>
  </ul>
  
 <div class="tab-content">
 
 
 <!--Address Insert Start-->
 
 <div id="Address" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Address'){?>active<?php }else{ ?> fade <?php } ?>"><br>
    
  <?php include("individual_entry_address.php"); ?>
   
    </div>
 
 <!--Address Insert End-->
 
 <!--Spouse Insert Start-->
 
 <div id="Spouse" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Spouse'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_spouse.php"); ?>
    </div>
    
 <!--Spouse Insert End-->   
 
 
  <!--Family Insert Start-->
 
 <div id="Family" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Family'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_family.php"); ?>
    </div>
    
 <!--Family Insert End--> 
 
 
   <!--Children Insert Start-->
 
 <div id="Children" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Children'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_children.php"); ?>
    </div>
    
 <!--Children Insert End-->
   <!--Language Insert Start-->
 
 <div id="Language" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Language'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_language.php"); ?>
    </div>
    
 <!--Language Insert End-->
 
 <!--Civ_Edn Insert Start-->
 
 <div id="Civ_Edn" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Civ_Edn'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_civedn.php"); ?>
    </div>
    
 <!--Civ_Edn Insert End-->
 
 <!--Med Insert Start-->
 
 <div id="Med" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Med'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_med.php"); ?>
    </div>
    
 <!--Med Insert End-->
 
  <!--Bank Account Insert Start-->
 
 <div id="Bank_Account" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='Bank_Account'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_bank_account.php"); ?>
    </div>
    
 <!--Bank Account Insert End-->
 
   <!--NOK Insert Start-->
 
 <div id="NOK" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='NOK'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_nok.php"); ?>
    </div>
    
 <!--NOK Insert End-->
 
  <!--NOK Insert Start-->
 
 <div id="NRDS" class="<?php /*?>container<?php */?> tab-pane <?php if($tab_value=='NRDS'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      <?php include("individual_entry_defsvc.php"); ?>
    </div>
    
 <!--NOK Insert End-->
 
 
 

 <!-- Image Upload start-->
 
 
 
    <div id="home" class="<?php /*?>container <?php */?>tab-pane <?php if($tab_value=='Image'){?>active<?php }else{ ?> fade <?php } ?>"><br>
      
       
  
 <?php /*?> <script src="Image Crop/jquery.min.js"></script><?php */?>
  <script src="Image Crop/croppie.js"></script>



  <div class="card" style="max-height: 500px;">
    <div class="card-header bg-info" style="text-align:center; padding:15px 0px; font-family:'Times New Roman', Times, serif; font-size:18px; margin:10px 0px;">Image Upload</div>
    <div class="card-body">

      <div class="row">
        <div class="col-sm-4 text-center">
        <div id="upload-demo"></div>
        </div>
        <div class="col-sm-4" style="padding:5%;">
        <strong>Select image to crop:</strong>
        <input type="file" id="image">

        <button class="btn btn-success btn-block btn-upload-image" style="margin-top:2%">Upload Image</button>
        </div>

        <div class="col-sm-4">
        <div id="preview-crop-image" style="background:#9d9d9d;width:300px;padding:50px 50px;height:300px;"><?php if(!empty($rowdata["photo_data"])){ ?><img src="employee_image/<?php echo $rowdata["photo_data"]; ?>" /><?php } ?></div>
        </div>
      </div>

    </div>
  </div>



<script type="text/javascript">


var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,    
    viewport: { // Default { width: 100, height: 100, type: 'square' } 
        width: 200,
        height: 200,
       // type: 'circle' //square
	   type: 'square'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#image').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      resize.croppie('bind',{
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.btn-upload-image').on('click', function (ev) {
  resize.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (img) {
    $.ajax({
      url: "?menu=Individual Address&page_title=individual_address_entry&main_menu=<?php echo $main_menu; ?>&database_table=employee_personal_information&pers_no_id=<?php echo $pers_no_id ?>&army_no=<?php echo $army_no; ?>&employe_id=<?php echo $employe_id; ?>",
      type: "POST",
      data: {"image":img},
      success: function (data) {
        html = '<img src="' + img + '" />';
        $("#preview-crop-image").html(html);
      }
    });
  });
});


</script>


      
      
      
    </div>
    
    <!-- Image Upload End-->
    
    
    
    
  </div>
            
  

 


   
            
<!-- Form End-->




</div>   

        <p></p>
    </div>
        </div>
    </div>
