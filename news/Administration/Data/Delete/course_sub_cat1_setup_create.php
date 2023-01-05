
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $page_form; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="course_category">Course Category<span style="color:#F00;">*</span></label>
       <select name="course_category" id="coursecategory" required class="form-control" >
            <option selected value="">Select Type</option>
            <?php
           $course_category = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Course Category Setup' and deleted_at is NULL");
                 while ($rowdata = $course_category->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
        </div>
           <script>
 $("#coursecategory").select2({
 allowClear:true,
 placeholder: 'Select Course Category'
 });
 </script>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="course_subcat1_name">Course Subcatgory Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Course Subcategory Name" name="course_subcat1_name" id="course_subcat1_name" type="text" required>
        </div>
    </div>
    
    
    
    
    
    
    </div>
      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit" name="<?php echo $page_title; ?>"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
