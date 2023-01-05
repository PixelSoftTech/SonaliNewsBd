 <?php 
 if(isset($_GET["detail_id"])){
	 $detail_id=$_GET["detail_id"];

	 $information = $pdo->query("SELECT a.*,`b`.`pers_no_type_name` AS pers_no_type_name,`c`.`rank_name` AS rank_name,`d`.`corps_name` AS corps_name,`e`.`setup_type_name` AS gender_name,`f`.`blood_group_name` AS blood_group_name,`g`.`religion_name` AS religion_name,`h`.`caste_name` AS caste_name  FROM `employee_personal_information` AS a INNER JOIN `pers_no_type_setup` AS b ON b.`id`=a.`pers_no_id` INNER JOIN `rank_setup` AS c ON `a`.`rank_id`=`c`.`id` INNER JOIN corps_setup AS d ON `a`.`corps_id`=`d`.`id` INNER JOIN one_type_setup AS e ON `a`.`gender_id`=`e`.`id` INNER JOIN blood_group_setup AS f ON `a`.`blood_group_id`=`f`.`id` INNER JOIN religion_setup AS g ON `a`.`religion_id`=`g`.`id` INNER JOIN caste_setup AS h ON `a`.`caste_id`=`h`.`id`  where `a`.`id`='$detail_id' and `a`.deleted_at is NULL");
     $rowdata = $information->fetch();
	 $employe_id=$rowdata["id"];
	 
	 }
 ?>

<section class="content" id="HTMLtoPDF">

      <!-- Main row -->
      <div class="row">
    <div class="col-xs-12">
    <style>
    th{
		text-align:center;
		}
		.table-responsive{
		overflow-x: hidden;
			
			}
			
	
		
    </style>
    
    
<style type="text/css" media="print">
@media print {
  @page { margin: 0; }
  body { margin: 1cm; }
  header,footer {
display: none;
}
}
</style>
  
    
    
        <div class="box-primary" id="tab">
        <div class="box box-primary hidden-print"></div>
            <div class="box-header with-border no-print">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu;echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?>
<?php /*echo $menu;*/ echo $rowdata["name_english"]; ?> Detail</h3>

                <div class="box-tools pull-right">
                    
                  <button id="printpagebutton" class="btn btn-success btn-xl" style="margin-left:5px; color:#FFF;" onclick="window.print();return false;" />
                        <i class="fa fa-print"></i>
                       Print
                    </button>
                   <a class="btn btn-warning" href="?menu=<?php echo $menu ?>&page_title=individual_list_detail_view&detail_id=<?php echo $detail_id; ?>&main_menu=&table=&tab=Personal Information&pers_no_id=<?php echo $rowdata["pers_no_id"]; ?>&army_no=<?php echo $rowdata["army_no"]; ?>"><i class="fa fa-edit"></i>&nbsp;View Information with Edit</a>
                 
                                       
                </div>
            </div>


  

            <div class="box-body">
                <div class="table-responsive">
               
                
                <div class="row">
    <div class="col-xs-8" style="text-align:center;">
        <div class="form-group">
           <img src="../images/logo.png" alt="Military Secretary's Branch" style="width:150px; height:150px;" />
           <p style="font-size:18px;"><strong>Military Secretary's Branch</strong></p>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
        <?php if(!empty($rowdata["photo_data"])){ ?>
      <img src="employee_image/<?php echo $rowdata["photo_data"]; ?>" alt="<?php echo $rowdata["name_english"];  ?>" />     <?php }else{ ?>
      <img src="employee_image/no_image.jpg" alt="<?php echo $rowdata["name_english"];  ?>" /> 
      <?php } ?>
            
        </div>
    </div>
    
    </div>
         
             <div class="row">
  
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


<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Address Information</strong></p>
    
    </div>
    </div>

<?php
$employee_id=$rowdata["id"];
$employee_addressall = $pdo->query("SELECT * FROM `employee_address_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($employee_address = $employee_addressall->fetch()){
 ?>
 <div class="row">
  
    <div class="col-xs-12" style="font-size:17px;">
        <div class="form-group">
            <label><?php
			$address_type_id=$employee_address["address_type_id"];
           $address_type_id_data = $pdo->query("SELECT * FROM `address_type_setup` where id='$address_type_id'");
                 $address_type_id_data = $address_type_id_data->fetch();
			    echo $address_type_id_data["address_type_name"];  ?>&nbsp;:&nbsp;</label>
            
        </div>
    </div>
  </div>
<div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>House/Village&nbsp;:&nbsp;</label><?php echo $employee_address["village"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Road/PO/Sec&nbsp;:&nbsp;</label><?php echo $employee_address["road_no"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Police Station&nbsp;:&nbsp;</label><?php  echo $employee_address["police_station"];   ?>
            
        </div>
    </div>

    </div>
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>District&nbsp;:&nbsp;</label><?php 
			$district_id_address=$employee_address["district_id"];
            $district_id_data = $pdo->query("SELECT * FROM `district_setup` where id='$district_id_address'");
            $district_id_data = $district_id_data->fetch();
			    echo $district_id_data["district_name"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>From&nbsp;:&nbsp;</label><?php echo $employee_address["from_date"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>To&nbsp;:&nbsp;</label><?php  echo $employee_address["to_date"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Telephone No(Land)&nbsp;:&nbsp;</label><?php echo $employee_address["telephone_no"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Mobile No.&nbsp;:&nbsp;</label><?php echo $employee_address["mobile_no"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Email&nbsp;:&nbsp;</label><?php  echo $employee_address["email_address"];   ?>
            
        </div>
    </div>

    </div>

<?php } ?>
              
         
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Spouse Information</strong></p>
    
    </div>
    </div>

<?php

$spouse_infoall = $pdo->query("SELECT * FROM `employee_spouse_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($spouse_info = $spouse_infoall->fetch()){
 ?>
 
<div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Spouse Name&nbsp;:&nbsp;</label><?php echo $spouse_info["spouse_name_english"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-2">
        <div class="form-group">
            <label>Marriage Date&nbsp;:&nbsp;</label><?php echo $spouse_info["marriage_date"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>CORO Order&nbsp;:&nbsp;</label><?php  echo $spouse_info["coro_order"];   ?>
            
        </div>
    </div>
     <div class="col-xs-2">
        <div class="form-group">
            <label>Before Marriage Status&nbsp;:&nbsp;</label><?php
			$before_marriage_id=$spouse_info["before_marriage_id"];
            $before_marriage_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$before_marriage_id'");
            $before_marriage_data = $before_marriage_dataa->fetch();
			    echo $before_marriage_data["setup_type_name"];   ?>
            
        </div>
    </div>

    </div>
    <div class="row">
  
    <div class="col-xs-3">
        <div class="form-group">
            <label>Spouse Name(Bangla)&nbsp;:&nbsp;</label><?php 
			    echo $spouse_info["spouse_name_bangla"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-2">
        <div class="form-group">
            <label>Date of Birth&nbsp;:&nbsp;</label><?php echo $spouse_info["date_of_birth"];   ?>
            
        </div>
    </div>
     <div class="col-xs-2">
        <div class="form-group">
            <label>Place of Birth&nbsp;:&nbsp;</label><?php echo $spouse_info["place_of_birth"];   ?>
            
        </div>
    </div>
     <div class="col-xs-3">
        <div class="form-group">
            <label>Birth Registration No.&nbsp;:&nbsp;</label><?php  echo $spouse_info["birth_registration_no"];   ?>
            
        </div>
    </div>
    <div class="col-xs-2">
        <div class="form-group">
            <label>Died No.&nbsp;:&nbsp;</label><?php echo $spouse_info["died_no"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-6">
        <div class="form-group">
            <label>Occupation Type&nbsp;:&nbsp;</label><?php
			$occupation_type_id=$spouse_info["occupation_type_id"];
            $occupation_type_dataa = $pdo->query("SELECT * FROM `occupation_type_setup` where id='$occupation_type_id'");
            $occupation_type_data = $occupation_type_dataa->fetch();
			    echo $occupation_type_data["occupation_type_name"];    ?>
            
        </div>
    </div>
    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Detail of Occupation&nbsp;:&nbsp;</label><?php echo $spouse_info["detail_occupation"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    <div class="row">
    
     <div class="col-xs-3">
        <div class="form-group">
            <label>Nationality&nbsp;:&nbsp;</label><?php  
			$spouse_nationality_id=$spouse_info["nationality_id"];
            $spouse_nationality_dataa = $pdo->query("SELECT * FROM `nationality_setup` where id='$spouse_nationality_id'");
            $spouse_nationality_data = $spouse_nationality_dataa->fetch();
			    echo $spouse_nationality_data["nationality_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label>National ID No.&nbsp;:&nbsp;</label><?php  echo $spouse_info["national_id_no"];   ?>
            
        </div>
    </div>
    
    <div class="col-xs-3">
        <div class="form-group">
            <label>Previous Nationality(If Any)&nbsp;:&nbsp;</label><?php  
			$spouse_prenationality_id=$spouse_info["prenationality_id"];
            $spouse_prenationality_dataa = $pdo->query("SELECT * FROM `nationality_setup` where id='$spouse_prenationality_id'");
            $spouse_prenationality_data = $spouse_prenationality_dataa->fetch();
			    echo $spouse_prenationality_data["nationality_name"];   ?>
            
        </div>
    </div>
    
    <div class="col-xs-3">
        <div class="form-group">
            <label>Date of Citizenship and Auth&nbsp;:&nbsp;</label><?php  echo $spouse_info["date_of_citizenship"];   ?>
            
        </div>
    </div>
    
    

    </div>
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Blood Group&nbsp;:&nbsp;</label><?php
			$spouse_blood_group_id=$spouse_info["blood_group_id"];
            $spouse_blood_group_dataa = $pdo->query("SELECT * FROM `blood_group_setup` where id='$spouse_blood_group_id'");
            $spouse_blood_group_data = $spouse_blood_group_dataa->fetch();
			    echo $spouse_blood_group_data["blood_group_name"];    ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Education Qualification&nbsp;:&nbsp;</label><?php
			$spouse_education_qualification_id=$spouse_info["education_qualification"];
            $spouse_education_qualification_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$spouse_education_qualification_id'");
            $spouse_education_qualification_data = $spouse_education_qualification_dataa->fetch();
			    echo $spouse_education_qualification_data["setup_type_name"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Contact No.&nbsp;:&nbsp;</label><?php echo $spouse_info["contact_no"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    
    

<?php } ?>
              
   
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Family Information</strong></p>
    
    </div>
    </div>

<?php

$family_infoall = $pdo->query("SELECT * FROM `employee_family_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($family_info = $family_infoall->fetch()){
 ?>
 
 <div class="row">
  
    <div class="col-xs-8" style="font-size:17px;">
        <div class="form-group">
            <label><?php
			$family_relation_id=$family_info["relation_id"];
           $family_relation_id_data = $pdo->query("SELECT * FROM `one_type_setup` where id='$family_relation_id'");
                 $family_relation_id_data = $family_relation_id_data->fetch();
			    echo $family_relation_id_data["setup_type_name"];  ?>&nbsp;:&nbsp;</label>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Is Step&nbsp;:&nbsp;</label><?php echo $family_info["is_step"];  ?>
            
        </div>
    </div>
    
  </div>
 
<div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Name&nbsp;:&nbsp;</label><?php echo $family_info["family_name"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-3">
        <div class="form-group">
            <label>Date of Birth&nbsp;:&nbsp;</label><?php echo $family_info["date_of_birth"];   ?>
            
        </div>
    </div>
     <div class="col-xs-3">
        <div class="form-group">
            <label>Age(In Year)&nbsp;:&nbsp;</label><?php  echo $family_info["age_in_year"];   ?>
            
        </div>
    </div>
     <div class="col-xs-2">
        <div class="form-group">
            <label>Died Nos&nbsp;:&nbsp;</label><?php
			    echo $family_info["died_no"];   ?>
            
        </div>
    </div>

    </div>
    <div class="row">
  
    <div class="col-xs-6">
        <div class="form-group">
            <label>Occupation Type&nbsp;:&nbsp;</label><?php
			$family_occupation_type_id=$family_info["occupation_type_id"];
            $family_occupation_type_dataa = $pdo->query("SELECT * FROM `occupation_type_setup` where id='$family_occupation_type_id'");
            $family_occupation_type_data = $family_occupation_type_dataa->fetch();
			    echo $family_occupation_type_data["occupation_type_name"];    ?>
            
        </div>
    </div>
    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Detail of Occupation&nbsp;:&nbsp;</label><?php echo $family_info["detail_occupation"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    <div class="row">
  
   
    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Present Address&nbsp;:&nbsp;</label><?php
			    echo $family_info["present_address"];  ?>
            
        </div>
    </div>
     <div class="col-xs-6">
        <div class="form-group">
            <label>Contact No.&nbsp;:&nbsp;</label><?php echo $family_info["contact_no"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    
    
    
    
    <div class="row">
    
     <div class="col-xs-4">
        <div class="form-group">
            <label>Nationality&nbsp;:&nbsp;</label><?php  
			$family_nationality_id=$family_info["nationality_id"];
            $family_nationality_dataa = $pdo->query("SELECT * FROM `nationality_setup` where id='$family_nationality_id'");
            $family_nationality_data = $family_nationality_dataa->fetch();
			    echo $family_nationality_data["nationality_name"];   ?>
            
        </div>
    </div>
   
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Previous Nationality(If Any)&nbsp;:&nbsp;</label><?php  
			$family_prenationality_id=$family_info["prenationality_id"];
            $family_prenationality_dataa = $pdo->query("SELECT * FROM `nationality_setup` where id='$family_prenationality_id'");
            $family_prenationality_data = $family_prenationality_dataa->fetch();
			    echo $family_prenationality_data["nationality_name"];   ?>
            
        </div>
    </div>
    
    <div class="col-xs-3">
        <div class="form-group">
            <label>Date of Citizenship and Auth&nbsp;:&nbsp;</label><?php  echo $family_info["date_of_citizenship"];   ?>
            
        </div>
    </div>
    
    

    </div>
    <div class="row">

     <div class="col-xs-6">
        <div class="form-group">
            <label>Anual Average Income (In T.K.)&nbsp;:&nbsp;</label><?php echo $family_info["anual_average_income"];   ?>
            
        </div>
    </div>
    
     <div class="col-xs-6">
        <div class="form-group">
            <label>Dependency&nbsp;:&nbsp;</label><?php echo $family_info["dependency"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    
    

<?php } ?>
              
                
   
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Children Information</strong></p>
    
    </div>
    </div>

<?php

$children_infoall = $pdo->query("SELECT * FROM `employee_children_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($children_info = $children_infoall->fetch()){
 ?>
 
 
 
<div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Name&nbsp;:&nbsp;</label><?php echo $children_info["children_name"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Gender&nbsp;:&nbsp;</label><?php
			$children_gender_id=$children_info["gender_id"];
            $children_gender_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$children_gender_id'");
            $children_gender_id_data = $children_gender_id_dataa->fetch();
			    echo $children_gender_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Place of Birth&nbsp;:&nbsp;</label><?php  echo $children_info["place_of_birth"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-6">
        <div class="form-group">
            <label>Date of Birth&nbsp;:&nbsp;</label><?php echo $children_info["date_of_birth"];  ?>
            
        </div>
    </div>
    

     <div class="col-xs-6">
        <div class="form-group">
            <label>Died No.&nbsp;:&nbsp;</label><?php  echo $children_info["died_no"];   ?>
            
        </div>
    </div>

    </div>
    
    
    
    <div class="row">
  
    <div class="col-xs-6">
        <div class="form-group">
            <label>Occupation Type&nbsp;:&nbsp;</label><?php
			$children_occupation_type_id=$children_info["occupation_type_id"];
            $children_occupation_type_dataa = $pdo->query("SELECT * FROM `occupation_type_setup` where id='$children_occupation_type_id'");
            $children_occupation_type_data = $children_occupation_type_dataa->fetch();
			    echo $children_occupation_type_data["occupation_type_name"];    ?>
            
        </div>
    </div>
    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Detail of Occupation&nbsp;:&nbsp;</label><?php echo $children_info["detail_occupation"];   ?>
            
        </div>
    </div>
  

    </div>
    
    
    <div class="row">
  
   
    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Education Qualification&nbsp;:&nbsp;</label><?php
			   $children_education_qualification_id=$children_info["education_qualification"];
            $children_education_qualification_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$children_education_qualification_id'");
            $children_education_qualification_data = $children_education_qualification_dataa->fetch();
			    echo $children_education_qualification_data["setup_type_name"]; ?>
            
        </div>
    </div>
     <div class="col-xs-6">
        <div class="form-group">
            <label>Special Status&nbsp;:&nbsp;</label><?php 
			$children_special_status_id=$children_info["special_status"];
            $children_special_status_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$children_special_status_id'");
            $children_special_status_data = $children_special_status_dataa->fetch();
			    echo $children_special_status_data["setup_type_name"];  ?>
            
        </div>
    </div>
  

    </div>
    
    

<?php } ?>
              
  
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Civil Education Information</strong></p>
    
    </div>
    </div>

<?php

$civedn_infoall = $pdo->query("SELECT * FROM `employee_civedn_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($civedn_info = $civedn_infoall->fetch()){
 ?>
 
 
 
<div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>Institute&nbsp;:&nbsp;</label><?php echo $civedn_info["institute"];  ?>
            
        </div>
    </div>
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Exam&nbsp;:&nbsp;</label><?php
			$civedn_exam_id=$civedn_info["exam"];
            $civedn_exam_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$civedn_exam_id'");
            $civedn_exam_id_data = $civedn_exam_id_dataa->fetch();
			    echo $civedn_exam_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Result&nbsp;:&nbsp;</label><?php  
			$civedn_result_id=$civedn_info["result"];
            $civedn_result_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$civedn_result_id'");
            $civedn_result_id_data = $civedn_result_id_dataa->fetch();
			    echo $civedn_result_id_data["setup_type_name"];   ?>
            
        </div>
    </div>

    </div>
    
    <div class="row">
  
    <div class="col-xs-4">
        <div class="form-group">
            <label>From (Year)&nbsp;:&nbsp;</label><?php echo $civedn_info["from_year"];  ?>
            
        </div>
    </div>
    

     <div class="col-xs-4">
        <div class="form-group">
            <label>To (Year)&nbsp;:&nbsp;</label><?php  echo $civedn_info["to_year"];   ?>
            
        </div>
    </div>
    
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Remarks&nbsp;:&nbsp;</label><?php  echo $civedn_info["remarks"];   ?>
            
        </div>
    </div>

    </div>
    
<?php } ?>
              
                
  
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Language Information</strong></p>
    
    </div>
    </div>

<?php

$language_infoall = $pdo->query("SELECT * FROM `employee_language_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($language_info = $language_infoall->fetch()){
 ?>
 
 
 
<div class="row">

    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Exam&nbsp;:&nbsp;</label><?php
			$language_id=$language_info["language_id"];
            $language_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$language_id'");
            $language_id_data = $language_id_dataa->fetch();
			    echo $language_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
     <div class="col-xs-6">
        <div class="form-group">
            <label>Skill&nbsp;:&nbsp;</label><?php  
			    echo $language_info["skill"];   ?>
            
        </div>
    </div>

    </div>
    
    
    
<?php } ?>


<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Medical Information</strong></p>
    
    </div>
    </div>

<?php

$medical_infoall = $pdo->query("SELECT * FROM `employee_med_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($medical_info = $medical_infoall->fetch()){
 ?>
 
 
 
<div class="row">

    
    <div class="col-xs-3">
        <div class="form-group">
            <label>Medical Category&nbsp;:&nbsp;</label><?php
			$medical_id=$medical_info["medical_category"];
            $medical_id_dataa = $pdo->query("SELECT * FROM `medical_category_setup` where id='$medical_id'");
            $medical_id_data = $medical_id_dataa->fetch();
			    echo $medical_id_data["medical_category_name"];  ?>
            
        </div>
    </div>
      <div class="col-xs-3">
        <div class="form-group">
            <label>Category Type&nbsp;:&nbsp;</label><?php
			$cat_type_id=$medical_info["cat_type"];
            $cat_type_id_dataa = $pdo->query("SELECT * FROM `medical_category_setup` where id='$cat_type_id'");
            $cat_type_id_data = $cat_type_id_dataa->fetch();
			    echo $cat_type_id_data["penalty"];  ?>
            
        </div>
    </div>
    
     <div class="col-xs-3">
        <div class="form-group">
            <label>From&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["medical_from"];   ?>
            
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label>To&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["medical_to"];   ?>
            
        </div>
    </div>

    </div>
   <div class="row">

    <div class="col-xs-4">
        <div class="form-group">
            <label>Reasons&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["reasons"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Disability&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["disability"];   ?>
            
        </div>
    </div>   
    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Attributable&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["attributable"];   ?>
            
        </div>
    </div>

    </div> 
    
    
     <div class="row">

    <div class="col-xs-6">
        <div class="form-group">
            <label>Date of Hospital Admission From&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["hosp_from"];   ?>
            
        </div>
    </div>
     <div class="col-xs-6">
        <div class="form-group">
            <label>Date of Hospital Admission To&nbsp;:&nbsp;</label><?php  
			    echo $medical_info["hosp_to"];   ?>
            
        </div>
    </div>   

    </div>
    
    
<?php } ?>
              
    
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Bank Account Information</strong></p>
    
    </div>
    </div>

<?php

$bank_account_infoall = $pdo->query("SELECT * FROM `employee_bank_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($bank_account_info = $bank_account_infoall->fetch()){
 ?>
 
 
 
<div class="row">

    
    <div class="col-xs-4">
        <div class="form-group">
            <label>Bank Name&nbsp;:&nbsp;</label><?php
			$bank_account_id=$bank_account_info["bank_id"];
            $bank_account_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$bank_account_id'");
            $bank_account_id_data = $bank_account_id_dataa->fetch();
			    echo $bank_account_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
  
    
     <div class="col-xs-4">
        <div class="form-group">
            <label>Account No.&nbsp;:&nbsp;</label><?php  
			    echo $bank_account_info["bank_account_no"];   ?>
            
        </div>
    </div>
    <div class="col-xs-4">
        <div class="form-group">
            <label>Account Type&nbsp;:&nbsp;</label><?php
			$bank_ac_type_id=$bank_account_info["bank_ac_type_id"];
            $bank_ac_type_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$bank_ac_type_id'");
            $bank_ac_type_id_data = $bank_ac_type_id_dataa->fetch();
			    echo $bank_ac_type_id_data["setup_type_name"];  ?>
            
        </div>
    </div>

    </div>
 
    
    
<?php } ?>
              
                
  
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>NOK Information</strong></p>
    
    </div>
    </div>

<?php

$nok_infoall = $pdo->query("SELECT * FROM `employee_nok_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($nok_info = $nok_infoall->fetch()){
 ?>
 
 
 
<div class="row">

    
    <div class="col-xs-3">
        <div class="form-group">
            <label>NOK Type&nbsp;:&nbsp;</label><?php
			$nok_id=$nok_info["nok_type_id"];
            $nok_id_dataa = $pdo->query("SELECT * FROM `one_type_setup` where id='$nok_id'");
            $nok_id_data = $nok_id_dataa->fetch();
			    echo $nok_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
  
    
     <div class="col-xs-3">
        <div class="form-group">
            <label>Name&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["nok_name"];   ?>
            
        </div>
    </div>
    <div class="col-xs-3">
        <div class="form-group">
            <label>Relation&nbsp;:&nbsp;</label><?php
			$nok_relation_id=$nok_info["relation_id"];
           $nok_relation_id_data = $pdo->query("SELECT * FROM `one_type_setup` where id='$nok_relation_id'");
                 $nok_relation_id_data = $nok_relation_id_data->fetch();
			    echo $nok_relation_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
    
     <div class="col-xs-3">
        <div class="form-group">
            <label>Percentage(%)&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["nok_percentage"];   ?>
            
        </div>
    </div>

    </div>
    <div class="row">
    <div class="col-xs-3">
        <div class="form-group">
            <label>Occupation&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["occupation"];   ?>
            
        </div>
    </div>
     <div class="col-xs-3">
        <div class="form-group">
            <label>Address&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["nok_address"];   ?>
            
        </div>
    </div>
     <div class="col-xs-3">
        <div class="form-group">
            <label>Phone No&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["phone_no"];   ?>
            
        </div>
    </div>
     <div class="col-xs-3">
        <div class="form-group">
            <label>Auth&nbsp;:&nbsp;</label><?php  
			    echo $nok_info["auth"];   ?>
            
        </div>
    </div>

    </div>
 
 
    
    
<?php } ?>
      
<div class="row">
  
    <div class="col-xs-12">
    <p style="font-size:18px;text-decoration:underline;"><strong>Near Relation in Defence Service  Information</strong></p>
    
    </div>
    </div>

<?php

$near_defence_serviceall = $pdo->query("SELECT * FROM `employee_defsvc_information` where employee_id ='$employee_id' and   deleted_at is NULL");
           while ($near_defence_service = $near_defence_serviceall->fetch()){
 ?>
 
 
 
<div class="row">

    
    <div class="col-xs-6">
        <div class="form-group">
            <label>Name&nbsp;:&nbsp;</label><?php
			    echo $near_defence_service["defsvc_name"];  ?>
            
        </div>
    </div>
  
    
  
    <div class="col-xs-6">
        <div class="form-group">
            <label>Relation&nbsp;:&nbsp;</label><?php
			$near_defence_service_id=$near_defence_service["defsvc_relation"];
           $near_defence_service_id_data = $pdo->query("SELECT * FROM `one_type_setup` where id='$near_defence_service_id'");
                 $near_defence_service_id_data = $near_defence_service_id_data->fetch();
			    echo $near_defence_service_id_data["setup_type_name"];  ?>
            
        </div>
    </div>
    
   

    </div>
    <div class="row">
    <div class="col-xs-4">
        <div class="form-group">
            <label>Rank&nbsp;:&nbsp;</label><?php  
			    echo $near_defence_service["defsvc_rank"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Arm/Svc&nbsp;:&nbsp;</label><?php  
			    echo $near_defence_service["defsvc_arm"];   ?>
            
        </div>
    </div>
     <div class="col-xs-4">
        <div class="form-group">
            <label>Present Address&nbsp;:&nbsp;</label><?php  
			    echo $near_defence_service["defsvc_address"];   ?>
            
        </div>
    </div>
   

    </div>
 
 
    
    
<?php } ?>
              
                
                                      
                      
                
                                      
                      
             
                
                    
                    
                </div>

                

            </div>
        </div>
    </div>
</div>
      <!-- /.row (main row) -->

    </section>
    
    
    