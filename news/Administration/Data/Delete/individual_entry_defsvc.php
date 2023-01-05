

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_defsvc_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Civ_Edn" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    
<div class="col-sm-6">
        <div class="form-group">
            <label for="defsvc_name">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name" name="defsvc_name" id="defsvc_name" type="text" required>
        </div>
    </div>
 
 
 
 <script>
        $(document).ready(function(){

            $("#defsvc_relation").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Relation Setup&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Relation',
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
        
        
           
    <div class="col-sm-6">
        <div class="form-group">
            <label for="defsvc_relation">Relation</label>
            <select name="defsvc_relation" class="form-control"  id="defsvc_relation" style="width:100%;" >
               <option selected value="">Select</option>  
           </select>

        </div>
    </div>
  
  </div>


<div class="row">
    
<div class="col-sm-3">
        <div class="form-group">
            <label for="defsvc_rank">Rank</label>
            <input class="form-control" placeholder="Rank" name="defsvc_rank" id="defsvc_rank" type="text">
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="defsvc_arm">Arm/Svc</label>
            <input class="form-control" placeholder="Arm/Svc" name="defsvc_arm" id="defsvc_arm" type="text">
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="defsvc_address">Present Address</label>
            <textarea rows="1" name="defsvc_address" placeholder="Address"  class="form-control" /></textarea>
        </div>
    </div>
    
    
    </div>
    
        
 <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="defsvc_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->