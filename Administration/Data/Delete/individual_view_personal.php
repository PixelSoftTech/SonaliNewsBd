<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;
     window.print();

     document.body.innerHTML = originalContents;
}
</script>
 <style type="text/css" media="print">
@media print {
	#printableArea{
		margin: 0;
		}
  @page { margin: 0; }
  
  body { margin: 1cm; }
  
header,footer {
display: none;
}
	
}
</style>
      <!-- Main row -->
      <div class="row" id="printableArea">
    <div class="col-sm-12">
    
 
<div class="box-tools pull-right no-print">
                    
                    
                    <?php /*?><a href="?menu=<?php echo $menu; ?>&page_title=indivisual_personal_info_create&main_menu=<?php echo $main_menu; ?>" class="btn btn-warning">
                        <i class="fa fa-plus"></i>&nbsp; Create
                    </a>&nbsp;&nbsp;&nbsp;<?php */?>
                          <a href="?menu=<?php echo $menu; ?>&page_title=indivisual_personal_info_edit&main_menu=<?php echo $main_menu; ?>&detail_id=<?php echo $detail_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>&nbsp; Edit
                    </a> 
                     <button onclick="printDiv('printableArea')" id="printpagebutton" class="btn btn-success btn-xl" style="margin-left:5px; color:#FFF;"  />
                        <i class="fa fa-print"></i>
                       Print
                    </button>         
                </div>
                
                
 <div class="row" >
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Personal Information</strong></p>
    
    </div>
    </div>   
                
                 <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Pers No.&nbsp;:&nbsp;</label><?php echo $rowdata["pers_no_type_name"]; echo "-"; echo $rowdata["army_no"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Rank&nbsp;:&nbsp;</label><?php echo $rowdata["rank_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Corps&nbsp;:&nbsp;</label><?php echo $rowdata["corps_name"];   ?>
            
        </div>
    </div>

    </div>   
                    
       <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Name&nbsp;:&nbsp;</label><?php echo $rowdata["name_english"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Name(Bangla)&nbsp;:&nbsp;</label><?php echo $rowdata["name_bangla"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Gender&nbsp;:&nbsp;</label><?php echo $rowdata["gender_name"];   ?>
            
        </div>
    </div>

    </div>    
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Date of birth&nbsp;:&nbsp;</label><?php echo $rowdata["date_of_birth"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Place of Birth&nbsp;:&nbsp;</label><?php echo $rowdata["place_of_birth"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Birth Certificate No.&nbsp;:&nbsp;</label><?php echo $rowdata["birth_certificate_no"];   ?>
            
        </div>
    </div>

    </div>     
     <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Blood Group&nbsp;:&nbsp;</label><?php echo $rowdata["blood_group_name"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Religion&nbsp;:&nbsp;</label><?php echo $rowdata["place_of_birth"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Caste&nbsp;:&nbsp;</label><?php echo $rowdata["caste_name"];   ?>
            
        </div>
    </div>

    </div> 
    
      <div class="row">
  
    <div class="col-xs-2">
        <div class="form-group">
            <label>Height(cm)&nbsp;:&nbsp;</label><?php echo $rowdata["height_cm"];  ?>
            
        </div>
    </div>
     <div class="col-xs-2">
        <div class="form-group">
            <label>Height(inch)&nbsp;:&nbsp;</label><?php echo $rowdata["height_inch"];   ?>
            
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label>Weight(in Pound)&nbsp;:&nbsp;</label><?php echo $rowdata["weight_pound"];  ?>
            
        </div>
    </div>
     <div class="col-xs-2">
        <div class="form-group">
            <label>Weight(KG)&nbsp;:&nbsp;</label><?php echo $rowdata["weight_kg"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Build&nbsp;:&nbsp;</label><?php echo $rowdata["build"];   ?>
            
        </div>
    </div>

    </div>   
    
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Complexion&nbsp;:&nbsp;</label><?php echo $rowdata["complexion"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Eye Color&nbsp;:&nbsp;</label><?php 
		   $eye_color_id=$rowdata["eye_color_id"];
           $eye_color = $pdo->query("SELECT * FROM `eye_color_setup` where eye_color_name='$eye_color_id'");
                 $eye_color = $eye_color->fetch();
			    echo $eye_color["eye_color_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Identity Mark(Visible)&nbsp;:&nbsp;</label><?php echo $rowdata["identity_mark"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Nationality&nbsp;:&nbsp;</label>	<?php 
		   $nationality_id=$rowdata["nationality_id"];
           $nationality = $pdo->query("SELECT * FROM `nationality_setup` where id='$nationality_id'");
                 $nationality = $nationality->fetch();
			    echo $nationality["nationality_name"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Previous Nationality&nbsp;:&nbsp;</label>
			<?php 
		   $prenationality_id=$rowdata["prenationality_id"];
           $pre_nationality = $pdo->query("SELECT * FROM `nationality_setup` where id='$prenationality_id'");
                 $pre_nationality = $pre_nationality->fetch();
			    echo $pre_nationality["nationality_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>National ID No.&nbsp;:&nbsp;</label><?php echo $rowdata["national_id_no"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
    <div class="col-xs-12">
        <div class="form-group">
           <label>Posn(Amongst Brothers and Sisters)&nbsp;:&nbsp;</label><?php echo $rowdata["posn"];   ?>
            
        </div>
    </div>

    </div>
    
  <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Passport No.&nbsp;:&nbsp;</label><?php echo $rowdata["passport_no"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Place of Issue&nbsp;:&nbsp;</label><?php 
		   $place_of_issue_id=$rowdata["place_of_issue_id"];
           $passport_issue_place = $pdo->query("SELECT * FROM `one_type_setup` where id='$place_of_issue_id'");
                 $passport_issue_place = $passport_issue_place->fetch();
			    echo $passport_issue_place["setup_type_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Issuing Auth&nbsp;:&nbsp;</label><?php echo $rowdata["issuing_auth"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Date of Issue&nbsp;:&nbsp;</label><?php echo $rowdata["passport_issue_date"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Date of Expiry&nbsp;:&nbsp;</label><?php echo $rowdata["passport_expiry_date"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Passport Type&nbsp;:&nbsp;</label><?php 
		   $passport_type_id=$rowdata["passport_type_id"];
           $passport_type_id_data = $pdo->query("SELECT * FROM `one_type_setup` where id='$passport_type_id'");
                 $passport_type_id_data = $passport_type_id_data->fetch();
			    echo $passport_type_id_data["setup_type_name"];   ?>
            
        </div>
    </div>

    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <label>Reasons of Obtn&nbsp;:&nbsp;</label><?php echo $rowdata["reasons_of_obtn"];   ?>
            
        </div>
    </div>
    
    </div>
    <div class="row">
    <div class="col-xs-12">
        <div class="form-group">
            <label>Trace&nbsp;:&nbsp;</label><?php echo $rowdata["trace"];   ?>
            
        </div>
    </div>
    
    </div>



</div>

</div>
      <!-- /.row (main row) -->
<iframe id="printf" name="printf" style="visibility: hidden"></iframe>
