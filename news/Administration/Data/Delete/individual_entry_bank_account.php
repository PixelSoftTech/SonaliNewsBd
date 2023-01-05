
      <div class="row">
    <div class="col-sm-12">

    
    

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_bank_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Bank_Account" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

    <div class="row">
  
    <div class="col-sm-4">
        <div class="form-group">
            <label for="bank_id">Bank Name<span style="color:#F00;">*</span></label>
              <select name="bank_id" id="bank_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Bank </option>
            <?php
           $bank_setup = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Bank Setup' and deleted_at is NULL");
                 while ($rowdatabank = $bank_setup->fetch()){
				 ?>
            <option value="<?php echo $rowdatabank["id"]; ?>"><?php echo $rowdatabank["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#bank_id").select2({
 allowClear:true,
 placeholder: 'Select Bank'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
          <label for="bank_account_no">Account No.<span style="color:#F00;">*</span></label>
          <input type="text" name="bank_account_no" placeholder="Bank Account Number" required class="form-control" />
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="bank_ac_type_id">Account Type<span style="color:#F00;">*</span></label>
              <select name="bank_ac_type_id" id="bank_ac_type_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Bank Account Type</option>
            <?php
           $bank_account_type = $pdo->query("SELECT * FROM `one_type_setup` where setup_category='Bank Account Type' and deleted_at is NULL");
                 while ($rowdatabankac_type = $bank_account_type->fetch()){
				 ?>
            <option value="<?php echo $rowdatabankac_type["id"]; ?>"><?php echo $rowdatabankac_type["setup_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#bank_ac_type_id").select2({
 allowClear:true,
 placeholder: 'Select Bank Account Type'
 });
 </script>
        </div>
    </div>
    

    </div>
    
    
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="bank_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->