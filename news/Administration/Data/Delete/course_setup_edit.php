<?php
if(isset($_GET['edit_id'])){
$edit_id=$_GET['edit_id'];	
$table=$_GET['table'];
}
$page_form=substr($page_title,0,-5);
$editinformation = $pdo->query("SELECT * FROM $table where id=$edit_id");
$editrowdata = $editinformation->fetch();
$course_category_data=$editrowdata["course_category"];
				 $course_type_data=$editrowdata["course_type"];
				$course_category = $pdo->query("SELECT * FROM `one_type_setup` where id=$course_category_data");
				$course_category = $course_category->fetch();
				
				
				$course_type = $pdo->query("SELECT * FROM `one_type_setup` where id=$course_type_data");
				$course_type = $course_type->fetch();
 ?>
    <section class="content">

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu; echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?><?php echo $menu; ?> Edit</h3>

                <div class="box-tools pull-right">
                    
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> back</button>
                                       
                </div>
            </div>
   <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>
            <div class="box-body">
            
            
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="course_short_name">Course Name(Short)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Course Name(Short)" value="<?php echo $editrowdata['course_short_name']; ?>" name="course_short_name" id="course_short_name" type="text" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="course_full_name">Course Name(Full)<span style="color:#F00;">*</span></label>
            <input class="form-control" value="<?php echo $editrowdata['course_full_name']; ?>" placeholder="Course Name(Full)" name="course_full_name" id="course_full_name" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="course_category">Course Category<span style="color:#F00;">*</span></label>
       <select name="course_category" id="coursecategory" required class="form-control" >
            <option selected value="<?php echo $course_category_data; ?>"><?php echo $course_category["setup_type_name"]; ?></option>
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
    <div class="col-sm-4">
        <div class="form-group">
            <label for="dt_of_from">Course Type<span style="color:#F00;">*</span></label>
       <select name="course_type" id="coursetype" required class="form-control" >
            <option selected value="<?php echo $course_type_data; ?>"><?php echo $course_type["setup_type_name"]; ?></option>
            <?php
           $course_type = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Course Type Setup' and deleted_at is NULL");
                 while ($rowdata = $course_type->fetch()){
				 ?>
            <option value="<?php echo $rowdata["id"]; ?>"><?php echo $rowdata["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
        </div>
           <script>
 $("#coursetype").select2({
 allowClear:true,
 placeholder: 'Select Course Type'
 });
 </script>
    </div>
    
 <div class="col-sm-4">
        <div class="form-group">
            <label for="bonus_point">Bonus Point<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Bonus Point" value="<?php echo $editrowdata["bonus_point"]; ?>" name="bonus_point" id="bonus_point"  type="text" required>
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
