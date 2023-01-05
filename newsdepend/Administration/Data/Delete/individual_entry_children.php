
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    
    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_children_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Children" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

    <div class="row">
    <div class="col-sm-3">
        <div class="form-group">
            <label for="family_name">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name" name="children_name" id="children_name" type="text" required>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group">
            <label for="gender_id">Gender<span style="color:#F00;">*</span></label>
              <select name="gender_id" id="gender_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Gender</option>
            <?php
           $gender_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Gender Setup' and deleted_at is NULL");
                 while ($rowdatagender = $gender_setup->fetch()){
				 ?>
            <option value="<?php echo $rowdatagender["id"]; ?>"><?php echo $rowdatagender["setup_type_name"]; ?></option>
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
     <div class="col-sm-3">
        <div class="form-group">
            <label for="place_of_birth">Place of Birth</label>
            <input class="form-control" placeholder="Place of Birth" name="place_of_birth" id="place_of_birth" type="text" >
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
            <label for="died_no">Died No.</label>
            <input class="form-control date" placeholder="Died No." name="died_no" id="died_no" type="text">
        </div>
    </div>

    </div>
    
    <div class="row">
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="childrenoccupation_type_id">Occupation Type</label>
             <select name="occupation_type_id" id="childrenoccupation_type_id"  class="form-control" style="width:100%;">
            <option selected value="">Select Occupation Type</option>
            <?php
           $occupation_type = $pdo->query("SELECT * FROM `occupation_type_setup` where deleted_at is NULL");
                 while ($rowoccupation_type = $occupation_type->fetch()){
				 ?>
            <option value="<?php echo $rowoccupation_type["id"]; ?>"><?php echo $rowoccupation_type["occupation_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#childrenoccupation_type_id").select2({
 allowClear:true,
 placeholder: 'Select Occupation Type'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="detail_occupation">Detail of Occupation</label>
            <input class="form-control" placeholder="Detail of Occupation" name="detail_occupation" id="detail_occupation" type="text">
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $("#childreneducation_qualification").select2({
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

    <div class="col-sm-3">
        <div class="form-group">
            <label for="education_qualification">Education Qualification</label>
            <select name="education_qualification" class="form-control"  id="childreneducation_qualification" style="width:100%;" >
               <option selected value="">Education Qualification</option>  
           </select>

        </div>
    </div>
    
    <script>
        $(document).ready(function(){

            $("#childrenspecial_status").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Special Status&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Special Status',
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
            <label for="special_status">Special Status</label>
            <select name="special_status" class="form-control"  id="childrenspecial_status" style="width:100%;" >
               <option selected value="">Select Special Status</option>  
           </select>

        </div>
    </div>
    
    
    
    
    </div>
    

    
    
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="children_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->