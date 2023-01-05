
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
            <label for="division_id">Division Name<span style="color:#F00;">*</span></label>
            <select class="form-control myselect" required name="division_id" id="division_id">
            <option value="">Select One Division</option>
             <?php
				$information = $pdo->query('SELECT * FROM division where deleted_at is NULL');
				$i=1;
                 while ($rowdata = $information->fetch()){
					 
              
						?>
            <option value="<?php echo $rowdata["id"]; ?><"><?php echo $rowdata["name"]; ?></option>
            <?php } ?>
     
            </select>
            
        </div>
    </div>
    <script type="text/javascript">
      $(".myselect").select2();
</script>

<div class="col-sm-6">
        <div class="form-group">
            <label for="district_name">District Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="District Name" name="district_name" id="district_name" type="text" required>
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
