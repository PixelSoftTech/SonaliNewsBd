
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    
    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_language_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Language" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

    <div class="row">
  
    <div class="col-sm-6">
        <div class="form-group">
            <label for="language_id">Language<span style="color:#F00;">*</span></label>
              <select name="language_id" id="language_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Language</option>
            <?php
           $language_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Language Setup' and deleted_at is NULL");
                 while ($rowdalanguage = $language_setup->fetch()){
				 ?>
            <option value="<?php echo $rowdalanguage["id"]; ?>"><?php echo $rowdalanguage["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#language_id").select2({
 allowClear:true,
 placeholder: 'Select Language'
 });
 </script>
        </div>
    </div>
     <div class="col-sm-6">
        <div class="form-group">
            <label for="place_of_birth" style="width:100%;">Skill<span style="color:#F00;">*</span><br /></label>
            <style>
            .childrencheckbox{
				display:inline-block;
				}
            </style>
       <label class="checkbox childrencheckbox">
          <input type="checkbox" value="Read" name="skill">
          <span class="checkmark"></span>&nbsp;Read&nbsp;
         </label>&nbsp;
         &nbsp;
         <label class="checkbox childrencheckbox">
          <input type="checkbox" value="Write" name="skill">
          <span class="checkmark"></span>&nbsp;Write&nbsp;&nbsp;
         </label>&nbsp;&nbsp;
         
         
         <label class="checkbox childrencheckbox">
          <input type="checkbox" value="Speak" name="skill">
          <span class="checkmark"></span>&nbsp;Speak&nbsp;&nbsp;
         </label>&nbsp;&nbsp;
         
         <label class="checkbox childrencheckbox">
          <input type="checkbox" value="Interpret" name="skill">
          <span class="checkmark"></span>&nbsp;Interpret&nbsp;&nbsp;
         </label>&nbsp;&nbsp;
        </div>
    </div>
    

    </div>
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="language_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->