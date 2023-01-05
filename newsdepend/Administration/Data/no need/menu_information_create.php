
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=news_category" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="publish_status">Main Menu<span style="color:#F00;">*</span></label>
            <select name="publish_status" id="publish_status" required class="form-control" style="width:100%;height:34px;">
            <option selected value="">Select Main Menu</option>
        
            <option>Products</option>
            <option>Services</option>
         
            
            </select>
               <script>
 $("#publish_status").select2({
 allowClear:true,
 placeholder: 'Select Publish Status'
 });
 </script>
        </div>
    </div>

    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="category">Menu Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Menu Name" name="category" id="category" type="text" required>
        </div>
    </div>
    
    
     <div class="col-sm-2" style="display:none;">
        <div class="form-group">
            <label for="publishid">Menu Serial</label>
            <input class="form-control" placeholder="Menu Serial" name="publishid" id="publishid" type="text">
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
