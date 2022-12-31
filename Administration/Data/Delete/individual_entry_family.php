
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    

<style>
/* The checkbox */
.checkbox {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.checkbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #FFF;
  border:1px solid #000;
}

/* On mouse-over, add a grey background color */
.checkbox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.checkbox input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.checkbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.checkbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>


<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_family_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Family" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    
<div class="col-sm-6">
        <div class="form-group">
            <label for="relation_id">Relation<span style="color:#F00;">*</span></label>
             <select name="relation_id" id="relation_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Address Type</option>
            <?php
           $relation_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Relation Setup' and deleted_at is NULL");
                 while ($rowrelation_setup = $relation_setup->fetch()){
				 ?>
            <option value="<?php echo $rowrelation_setup["id"]; ?>"><?php echo $rowrelation_setup["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#relation_id").select2({
 allowClear:true,
 placeholder: 'Select Relation'
 });
 </script>
        </div>
    </div>
    
    
    <div class="col-sm-6">
        <div class="form-group">
         <label for="is_step">Is Step</label>
          <label class="checkbox">
          <input type="checkbox" value="Yes" name="is_step">
          <span class="checkmark"></span>
         </label>
        </div>
    </div>
    </div>
    
    <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="family_name">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name" name="family_name" id="family_name" type="text" required>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input class="form-control date" placeholder="Date of Birth" name="date_of_birth" id="date_of_birth" type="text">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="age_in_year">Age(In Year)</label>
            <input class="form-control" placeholder="Age(In Year)" name="age_in_year" id="age_in_year" type="text" >
        </div>
    </div>
    <div class="col-sm-3">
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
             <select name="occupation_type_id" id="occupation_type_idfamily"  class="form-control" style="width:100%;">
            <option selected value="">Select Occupation Type</option>
            <?php
           $occupation_type = $pdo->query("SELECT * FROM `occupation_type_setup` where deleted_at is NULL");
                 while ($rowoccupation_type = $occupation_type->fetch()){
				 ?>
            <option value="<?php echo $rowoccupation_type["id"]; ?>"><?php echo $rowoccupation_type["occupation_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#occupation_type_idfamily").select2({
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
    
    

    <div class="col-sm-6">
        <div class="form-group">
            <label for="present_address">Present Address</label>
            <input class="form-control" placeholder="Present Address" name="present_address" id="present_address" type="text">
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="contact_no">Contact No.</label>
      <input class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off"  placeholder="Contact No." name="contact_no" id="contact_no" type="text">

        </div>
    </div>
    
   
    </div>
    
    
    
    
    
    
    <div class="row">
    <script>
        $(document).ready(function(){

            $("#nationalityfamily").select2({
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
            <select name="nationality_id" class="form-control"  id="nationalityfamily" style="width:100%;" >
               <option selected value="">Select Nationality</option>  
           </select>

        </div>
    </div>
    
    <script>
        $(document).ready(function(){

            $("#prenationalityfamily").select2({
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
            <label for="prenationality">Previous Nationality(If Any)</label>
            <select name="prenationality_id" class="form-control"  id="prenationalityfamily" style="width:100%;" >
               <option selected value="">Select Previous Nationality</option>  
           </select>

        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="date_of_citizenship">Date of Citizenship and Auth</label>
      <input class="form-control date" placeholder="Date of Citizenship and Auth" name="date_of_citizenship" id="date_of_citizenship" type="text">

        </div>
    </div>
    
    </div>
    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="anual_average_income">Anual Average Income (In T.K.)</label>
      <input class="form-control" placeholder="Anual Average Income (In T.K.)" name="anual_average_income" id="anual_average_income" type="text">

        </div>
    </div>
   <div class="col-sm-6">
        <div class="form-group">
            <label for="dependency">Dependency</label>
      <input class="form-control" placeholder="Dependency" name="dependency" id="dependency" type="text">

        </div>
    </div>
    
    
    </div>
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="family_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->