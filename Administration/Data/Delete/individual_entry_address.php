

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

<form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_title; ?>&main_menu=<?php echo $main_menu; ?>&database_table=employee_address_information&employee_id=<?php echo $employe_id; ?>&pers_no_id=<?php echo $pers_no_id; ?>&army_no=<?php echo $army_no; ?>&tab=Address" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    <div class="col-sm-12">
        <div class="form-group">
            <label for="address_type_id">Address Type<span style="color:#F00;">*</span></label>
             <select name="address_type_id" id="address_type_id" required class="form-control" style="width:100%;">
            <option selected value="">Select Address Type</option>
            <?php
           $address_type = $pdo->query("SELECT * FROM `address_type_setup` where deleted_at is NULL");
                 while ($rowaddress_type = $address_type->fetch()){
				 ?>
            <option value="<?php echo $rowaddress_type["id"]; ?>"><?php echo $rowaddress_type["address_type_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#address_type_id").select2({
 allowClear:true,
 placeholder: 'Select Address Type'
 });
 </script>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="village">House/Village<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="House/Village" name="village" id="village" type="text" required>
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="road_no">Road/PO/Sec<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Road/PO/Sec" name="road_no" id="road_no" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="police_station">Police Station<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Police Station" name="police_station" id="police_station" type="text" required>
        </div>
    </div>



    </div>
    
    <div class="row">
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="district_id">District<span style="color:#F00;">*</span></label>
            <select name="district_id" id="district_id" required class="form-control" style="width:100%;">
            <option selected value="">Select District</option>
            <?php
           $address_type = $pdo->query("SELECT * FROM `district_setup` where deleted_at is NULL");
                 while ($rowaddress_type = $address_type->fetch()){
				 ?>
            <option value="<?php echo $rowaddress_type["id"]; ?>"><?php echo $rowaddress_type["district_name"]; ?></option>
         <?php } ?>
            
            </select>
               <script>
 $("#district_id").select2({
 allowClear:true,
 placeholder: 'Select District'
 });
 </script>
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="from_date">From</label>
            <input class="form-control date" placeholder="From Date" name="from_date" id="from_date" type="text">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="to_date">To</label>
            <input class="form-control date" placeholder="To Date" name="to_date" id="to_date" type="text">
        </div>
    </div>
    
    </div>
    
    
    
    
    <div class="row">
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="telephone_no">Telephone No(Land)</label>
            <input class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off"  placeholder="Telephone No(Land)" name="telephone_no" id="telephone_no" type="text">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="mobile_no">Mobile No.</label>
            <input class="form-control"  onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off"  placeholder="Mobile No." name="mobile_no" id="mobile_no" type="text">
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="email_address">Email.</label>
            <input class="form-control" placeholder="Email Address." name="email_address" id="email_address" type="text">
        </div>
    </div>
    
    </div>
    <div class="box-tools pull-right">
       
                    <button class="btn btn-success" type="submit" name="address_input"><i class="fa fa-save"></i> Save </button>
                 
                </div>
    
    

</form>
</div>

</div>
      <!-- /.row (main row) -->

