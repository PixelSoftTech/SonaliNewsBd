
      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

    
    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_nok_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=NOK" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

    <div class="row">
  
    <div class="col-sm-3">
        <div class="form-group">
            <label for="nok_type_id">NOK Type<span style="color:#F00;">*</span></label>
              <select name="nok_type_id" id="nok_type_id" required class="form-control" style="width:100%;">
            <option selected value="">NOK Type </option>
            <?php
           $nok_type = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='NOK Type Setup' and deleted_at is NULL");
                 while ($rowdatanok_type = $nok_type->fetch()){
				 ?>
            <option value="<?php echo $rowdatanok_type["id"]; ?>"><?php echo $rowdatanok_type["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#nok_type_id").select2({
 allowClear:true,
 placeholder: 'Select NOK Type'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
          <label for="nok_name">Name.<span style="color:#F00;">*</span></label>
          <input type="text" name="nok_name" placeholder="Name" required class="form-control" />
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="relation_id">Relation<span style="color:#F00;">*</span></label>
              <select name="relation_id" id="nok_relation_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Relation</option>
            <?php
           $relation_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Relation Setup' and deleted_at is NULL");
                 while ($rowdatarelation = $relation_setup->fetch()){
				 ?>
            <option value="<?php echo $rowdatarelation["id"]; ?>"><?php echo $rowdatarelation["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#nok_relation_id").select2({
 allowClear:true,
 placeholder: 'Select Relation'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
          <label for="nok_percentage">Percentage(%).<span style="color:#F00;">*</span></label>
          <input type="text" name="nok_percentage" placeholder="Percentage(%)" required class="form-control" />
        </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div class="form-group">
          <label for="occupation">Occupation</label>
          <input type="text" name="occupation" placeholder="Occupation"  class="form-control" />
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
          <label for="nok_address">Address</label>
          <textarea  rows="1" name="nok_address" placeholder="Address"  class="form-control" /></textarea>
        </div>
    </div>
    
    
    <div class="col-sm-3">
        <div class="form-group">
          <label for="phone_no">Phone No.</label>
          <input type="text" name="phone_no" placeholder="Phone No" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" class="form-control" />
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
          <label for="auth">Auth</label>
          <input type="text" name="auth" placeholder="Auth"  class="form-control" />
        </div>
    </div>
    
    

    </div>
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="nok_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->