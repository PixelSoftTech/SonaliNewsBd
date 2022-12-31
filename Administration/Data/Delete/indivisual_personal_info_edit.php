
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $page_title; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    <div class="col-sm-2">
        <div class="form-group">
            <label for="pers_no_id">Pers No<span style="color:#F00;">*</span></label>
             <select name="pers_no_id" id="pers_no_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Type</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `pers_no_type_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["pers_no_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#pers_no_id").select2({
 allowClear:true,
 placeholder: 'Select Pers No'
 });
 </script>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="army_no">Army No<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Army No" name="army_no" id="army_no" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="rank_id">Rank<span style="color:#F00;">*</span></label>
             <select name="rank_id" id="rank_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Rank</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `rank_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["rank_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#rank_id").select2({
 allowClear:true,
 placeholder: 'Select Rank'
 });
 </script>
        </div>
    </div>
   <div class="col-sm-4">
        <div class="form-group">
            <label for="corps_id">Corps<span style="color:#F00;">*</span></label>
             <select name="corps_id" id="corps_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Corps</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `corps_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["corps_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#corps_id").select2({
 allowClear:true,
 placeholder: 'Select Corps'
 });
 </script>
        </div>
    </div> 
    
    
    
    </div>


<div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name" name="name_english" id="name" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name_bangla">Name(Bangla)</label>
            <input class="form-control" placeholder="Bangla Name" name="name_bangla" id="name_bangla" type="text" >
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="gender_id">Gender<span style="color:#F00;">*</span></label>
              <select name="gender_id" id="gender_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Gender</option>
            <?php
           $gender_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Gender Setup' and deleted_at is NULL");
                 while ($rowdata = $gender_setup->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#gender_id").select2({
 allowClear:true,
 placeholder: 'Select Gender'
 });
 </script>
        </div>
    </div>
    
    </div>
    
    
   
  <div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="date_of_birth">Date of birth<span style="color:#F00;">*</span></label>
            <input class="form-control date" placeholder="Date of Birth" name="date_of_birth" id="date_of_birth" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="place_of_birth">Place of Birth</label>
            <input class="form-control" placeholder="Place of Birth" name="place_of_birth" id="place_of_birth" type="text">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="birth_certificate_no">Birth Certificate No.</label>
      <input class="form-control" placeholder="Birth Certificate No" name="birth_certificate_no" id="birth_certificate_no" type="text">

        </div>
    </div>
    
    </div> 
   
   <div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="blood_group_id">Blood Group<span style="color:#F00;">*</span></label>
             <select name="blood_group_id" id="blood_group_id" required class="form-control" style="width:100%;">
            <option selected value="">Blood Group</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `blood_group_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["blood_group_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#blood_group_id").select2({
 allowClear:true,
 placeholder: 'Blood Group'
 });
 </script>
        </div>
    </div>
   
    
   <div class="col-sm-4">
        <div class="form-group">
            <label for="religion_id">Religion<span style="color:#F00;">*</span></label>
             <select name="religion_id" id="religion_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Religion</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `religion_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["religion_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#religion_id").select2({
 allowClear:true,
 placeholder: 'Select Religion'
 });
 </script>
        </div>
    </div> 
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="caste_id">Caste<span style="color:#F00;">*</span></label>
             <select name="caste_id" id="caste_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Caste</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `caste_setup` where deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["caste_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#caste_id").select2({
 allowClear:true,
 placeholder: 'Select Caste'
 });
 </script>
        </div>
    </div>
    
    
    </div>
   
   <div class="row">
    

    
    <div class="col-sm-2">
        <div class="form-group">
            <label for="height_cm">Height(cm)</label>
            <input class="form-control" placeholder="Height(cm)" name="height_cm" id="height_cm" type="text">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="height_inch">Height(inch)</label>
            <input class="form-control" placeholder="Height(inch)" name="height_inch" id="height_inch" type="text" >
        </div>
    </div>
    
    <div class="col-sm-2">
        <div class="form-group">
            <label for="weight_pound">Weight(in Pound)</label>
            <input class="form-control" placeholder="Weight(in Pound)" name="weight_pound" id="weight_pound" type="text">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="weight_kg">Weight(KG)</label>
            <input class="form-control" placeholder="Weight(KG)" name="weight_kg" id="weight_kg" type="text" >
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="build">Build</label>
             <input class="form-control" placeholder="Build" name="build" id="build" type="text" >
        </div>
    </div>
    
    
    
    
    </div>
    
    <div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="complexion">Complexion</label>
            <input class="form-control" placeholder="Complexion" name="complexion" id="complexion" type="text" >
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $("#eyecolor").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=eye_color_setup&category_name=&field_name=eye_color_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Eye Color',
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });

	
        </script>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="eye_color">Eye Color</label>
            <select name="eye_color_id" class="form-control"  id="eyecolor" style="width:100%;" >
               <option selected value="">Select Eye Color</option>  
           </select>

        </div>
    </div>
  
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="identity_mark">Identity Mark(Visible)</label>
      <input class="form-control" placeholder="Identity Mark(Visible)" name="identity_mark" id="identity_mark" type="text">

        </div>
    </div>
    
    </div>
    
    <div class="row">
    <script>
        $(document).ready(function(){

            $("#nationality").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=nationality_setup&category_name=&field_name=nationality_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Nationality',
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });

	
        </script>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <select name="nationality_id" class="form-control"  id="nationality" style="width:100%;" >
               <option selected value="">Select Nationality</option>  
           </select>

        </div>
    </div>
  <script>
        $(document).ready(function(){

            $("#prenationality").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=nationality_setup&category_name=&field_name=nationality_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Previous Nationality',
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });

	
        </script>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="prenationality">Previous Nationality</label>
            <select name="prenationality_id" class="form-control"  id="prenationality" style="width:100%;" >
               <option selected value="">Select Previous Nationality</option>  
           </select>

        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="national_id_no">National ID No.</label>
      <input class="form-control" placeholder="National ID No." name="national_id_no" id="national_id_no" type="text">

        </div>
    </div>
    
    </div>
    <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="posn">Posn(Amongst Brothers and Sisters)</label>
      <input class="form-control" placeholder="Posn(Amongst Brothers and Sisters)" name="posn" id="posn" type="text">

        </div>
    </div>
    
    </div>
    <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group">
            <label for="passport_no">Passport No.</label>
            <input class="form-control" placeholder="Passport No." name="passport_no" id="passport_no" type="text">
        </div>
    </div>
  <script>
        $(document).ready(function(){

            $("#place_of_issue").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Passport Issue Place&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Place of Issue',
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });

	
        </script>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="place_of_issue">Place of Issue</label>
            <select name="place_of_issue_id" class="form-control"  id="place_of_issue" style="width:100%;" >
               <option selected value="">Select Place of Issue</option>  
           </select>

        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="issuing_auth">Issuing Auth</label>
      <input class="form-control" placeholder="Issuing Auth" name="issuing_auth" id="issuing_auth" type="text">

        </div>
    </div>
    
    </div>
    
    
    <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group">
            <label for="passport_issue_date">Date of Issue</label>
            <input class="form-control date" placeholder="Date of Issue" name="passport_issue_date" id="passport_issue_date" type="text">
        </div>
    </div>
 
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="passport_expiry_date">Date of Expiry</label>
      <input class="form-control date" placeholder="Date of Expiry" name="passport_expiry_date" id="passport_expiry_date" type="text">

        </div>
    </div>
     <script>
        $(document).ready(function(){

            $("#passport_type").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=passport_type_setup&category_name=&field_name=passport_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Passport Type',
                    data: function (params) {
                        return {
                            searchTerm: params.term // search term
                        };
                    },
                    processResults: function (response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });

	
        </script>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="passport_type">Passport Type</label>
            <select name="passport_type_id" class="form-control"  id="passport_type" style="width:100%;" >
               <option selected value="">Select Passport Type</option>  
           </select>

        </div>
    </div>
    </div>
    
    <div class="row">
  
    <div class="col-sm-12">
        <div class="form-group">
            <label for="reasons_of_obtn">Reasons of Obtn</label>
            <textarea class="form-control" placeholder="Reasons of Obtn" name="reasons_of_obtn" id="reasons_of_obtn"></textarea>
        </div>
    </div>
 </div>
 
   <div class="row">
  
    <div class="col-sm-12">
        <div class="form-group">
            <label for="trace">Trace</label>
            <input class="form-control" placeholder="Trace" name="trace" id="trace" type="text">
        </div>
    </div>
 </div>
    
    
    
      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-success" type="submit" name="<?php echo $page_title; ?>_next"><i class="fa fa-save"></i> Save & Next (Upload Image) </button>
                    &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit" name="<?php echo $page_title; ?>_exit"><i class="fa fa-save"></i> Save & Exit </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
