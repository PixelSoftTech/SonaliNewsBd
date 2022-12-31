

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">
   
    
    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_spouse_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Spouse" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="spouse_name_english">Spouse Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Spouse Name" name="spouse_name_english" id="spouse_name_english" type="text" required>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="marriage_date">Marriage Date<span style="color:#F00;">*</span></label>
            <input class="form-control date" placeholder="Marriage Date" name="marriage_date" id="marriage_date" type="text" required>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="coro_order">CORO Order<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="CORO Order" name="coro_order" id="coro_order" type="text" required>
        </div>
    </div>
<div class="col-sm-3">
        <div class="form-group">
            <label for="before_marriage_id">Before Marriage Status</label>
             <select name="before_marriage_id" id="before_marriage_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Marriage Status</option>
            <?php
           $marraige_type = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Before Marriage Status Setup' and deleted_at is NULL");
                 while ($rowmarraige_type = $marraige_type->fetch()){
				 ?>
            <option value="<?php echo $rowmarraige_type["id"]; ?>"><?php echo $rowmarraige_type["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#before_marriage_id").select2({
 allowClear:true,
 placeholder: 'Select Before Marriage Status'
 });
 </script>
        </div>
    </div>


    </div>
    
    <div class="row">
  <div class="col-sm-3">
        <div class="form-group">
            <label for="spouse_name_bangla">Spouse Name(Bangla)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Spouse Name Bangla" name="spouse_name_bangla" id="spouse_name_bangla" type="text" required>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input class="form-control date" placeholder="Date of Birth" name="date_of_birth" id="date_of_birth" type="text">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="place_of_birth">Place of Birth</label>
            <input class="form-control" placeholder="Place of Birth" name="place_of_birth" id="place_of_birth" type="text">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="birth_registration_no">Birth Registration No.</label>
            <input class="form-control" placeholder="Birth Registration No." name="birth_registration_no" id="birth_registration_no" type="text">
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="died_no">Died No.</label>
            <input class="form-control date" placeholder="Died No." name="died_no" id="died_no" type="text">
        </div>
    </div>
    
    </div>
    
    
    
    
    <div class="row">
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="occupation_type_id">Occupation Type</label>
             <select name="occupation_type_id" id="occupation_type_id"  class="form-control" style="width:100%;">
            <option selected value="">Select Occupation Type</option>
            <?php
           $occupation_type = $pdo->query("SELECT * FROM `occupation_type_setup` where deleted_at is NULL");
                 while ($rowoccupation_type = $occupation_type->fetch()){
				 ?>
            <option value="<?php echo $rowoccupation_type["id"]; ?>"><?php echo $rowoccupation_type["occupation_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#occupation_type_id").select2({
 allowClear:true,
 placeholder: 'Select Occupation Type'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="detail_occupation">Detail of Occupation</label>
            <input class="form-control" placeholder="Detail of Occupation" name="detail_occupation" id="detail_occupation" type="text">
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
    <div class="col-sm-3">
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <select name="nationality_id" class="form-control"  id="nationality" style="width:100%;" >
               <option selected value="">Select Nationality</option>  
           </select>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="national_id_no">National ID No.</label>
      <input class="form-control" placeholder="National ID No." name="national_id_no" id="national_id_no" type="text">

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

    <div class="col-sm-3">
        <div class="form-group">
            <label for="prenationality">Previous Nationality(If Any)</label>
            <select name="prenationality_id" class="form-control"  id="prenationality" style="width:100%;" >
               <option selected value="">Select Previous Nationality</option>  
           </select>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="date_of_citizenship">Date of Citizenship and Auth</label>
      <input class="form-control date" placeholder="Date of Citizenship and Auth" name="date_of_citizenship" id="date_of_citizenship" type="text">

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
           $blood_group = $pdo->query("SELECT * FROM `blood_group_setup` where deleted_at is NULL");
                 while ($rowblood_group = $blood_group->fetch()){
				 ?>
            <option value="<?php echo $rowblood_group["id"]; ?>"><?php echo $rowblood_group["blood_group_name"]; ?></option>
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
    <script>
        $(document).ready(function(){

            $("#education_qualification").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Education Qualification&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Education Qualification',
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
            <label for="education_qualification">Education Qualification</label>
            <select name="education_qualification" class="form-control"  id="education_qualification" style="width:100%;" >
               <option selected value="">Education Qualification</option>  
           </select>

        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="contact_no">Contact No.</label>
      <input class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off"  placeholder="Contact No." name="contact_no" id="contact_no" type="text">

        </div>
    </div>
    
    
    </div>
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="spouse_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->