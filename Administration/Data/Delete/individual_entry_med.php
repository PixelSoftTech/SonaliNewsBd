
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    
    
<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_med_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Med" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

 
 
 
 <script>
        $(document).ready(function(){

            $("#medical_category").select2({
                ajax: {
                    url: "indivisual_search.php?db_name=medical_category_setup&category_name=&field_name=medical_category_name",
                    type: "GET",
                    dataType: 'json',
                    delay: 250,
					allowClear:true,
		            placeholder: 'Select Med Cat',
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
            <label for="medical_category">Medical Category</label>
            <select name="medical_category" class="medical_category" class="form-control"  id="medical_category" style="width:100%;" >
               <option selected value="">Select Madical Category</option>  
           </select>

        </div>
    </div>
  
        
        <script type="text/javascript">
		$(document).ready(function()
		{
		$(".medical_category").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_medical_category_type.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".category_type").html(html);
		}
		});

		});
		});
	</script>
        
     
        
     <div class="col-sm-3">
        <div class="form-group">
            <label for="cat_type">Category Type</label>
            
           <select name="cat_type" class="category_type form-control" id="cat_type" style="width:100%;" >
                 <option selected value="">Select</option>
           </select>
         </div>
    </div>
                <script>
 $("#cat_type").select2({
 allowClear:true,
 placeholder: 'Select Category'
 });
 </script>                           
          
    <!--<div class="col-sm-3">
        <div class="form-group">
             <label for="cat_type">Cat Type</label>
            <select name="cat_type" class="form-control"  id="cat_type" style="width:100%;" >
               <option selected value="">Select</option>  
           </select>
        </div>
    </div>-->
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="medical_from">From</label>
            <input class="form-control date" placeholder="From" name="medical_from" id="medical_from" type="text">
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="medical_to">To</label>
            <input class="form-control date" placeholder="To" name="medical_to" id="medical_to" type="text">
        </div>
    </div>
    
    
    </div>


<div class="row">
    
<div class="col-sm-5">
        <div class="form-group">
            <label for="reasons">Reasons</label>
            <!--<input class="form-control" placeholder="" name="reasons" id="reasons" type="text">-->
            <textarea  rows="1" name="reasons" placeholder="Reasons"  class="form-control" /></textarea>
        </div>
    </div>
    
    <div class="col-sm-5">
        <div class="form-group">
            <label for="disability">Disability</label>
            <!--<input class="form-control" placeholder="" name="disability" id="disability" type="text">-->
            <textarea  rows="1" name="disability" placeholder="Disability"  class="form-control" /></textarea>
        </div>
    </div>
    
    <div class="col-sm-2">
        <div class="form-group">
         <label for="attributable">Attributable</label>
          <label class="checkbox">
          <input type="checkbox" value="Yes" name="attributable">
          <span class="checkmark"></span>
         </label>
        </div>
    </div>
    
    
    </div>
    
   
  <div class="row">
 
   <div class="col-sm-6">
        <div class="form-group">
            <label for="hosp_from">Date of Hospital Admission From</label>
            <input class="form-control date" placeholder="From" name="hosp_from" id="hosp_from" type="text">
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="hosp_to">Date of Hospital Admission To</label>
            <input class="form-control date" placeholder="To" name="hosp_to" id="hosp_to" type="text">
        </div>
    </div>
    
    
    </div>     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="med_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->