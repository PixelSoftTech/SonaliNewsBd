
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_civedn_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Civ_Edn" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    
<div class="col-sm-6">
        <div class="form-group">
            <label for="institute">Institute Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Institute Name" name="institute" id="institute" type="text" required>
        </div>
    </div>
 
 
 
 <script>
        $(document).ready(function(){

            $("#exam").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Exam Setup&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Exam',
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
            <label for="exam">Exam</label>
            <select name="exam" class="form-control"  id="exam" style="width:100%;" >
               <option selected value="">Select Exam</option>  
           </select>

        </div>
    </div>
  
  
  <script>
        $(document).ready(function(){

            $("#result").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=one_type_setup&category_name=Result/Grade Setup&field_name=setup_type_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Result',
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
             <label for="result">Result</label>
            <select name="result" class="form-control"  id="result" style="width:100%;" >
               <option selected value="">Select Result</option>  
           </select>
        </div>
    </div>
    
    
    </div>


<div class="row">
    
<div class="col-sm-3">
        <div class="form-group">
            <label for="from_year">From (Year)</label>
            <input class="form-control" placeholder="From (Year)" name="from_year" id="from_year" type="text">
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="to_year">To (Year)</label>
            <input class="form-control" placeholder="To (Year)" name="to_year" id="to_year" type="text">
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="remarks">Remarks</label>
            <input class="form-control" placeholder="Remarks" name="remarks" id="remarks" type="text">
        </div>
    </div>
    
    
    </div>
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="civedn_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->