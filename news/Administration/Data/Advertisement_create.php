
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=advertisement&folder=advertisement_image" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

<script type="text/javascript">
function validateImage() {
    var formData = new FormData();
 
    var file = document.getElementById("img").files[0];
 
    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 2024000) {
        alert('Max Upload size is 2MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}
</script>
    
   <div class="row">
        <div class="col-sm-3">
        <div class="form-group">
            <label for="category">Select Advertisement Name<span style="color:#F00;">*</span></label>
            <select name="category" id="category" required class="form-control" >
            <option selected value="">Select Advertisement Name</option>
        
            <option>Header Advertisement Left 630x125 PX</option>
            <option>Header Advertisement Right 630x125 PX</option>
            <option>Below Top Advertisement First 640x118 Px</option>
			<option>Below Top Advertisement Second 640x118 Px</option>	
				
			<option>Middle Advertisement 1280x126 Px</option>		
				<option>Footer Advertisement 1280x126 Px</option>	
				
            
            </select>
               <script>
 $("#category").select2({
 allowClear:true,
 placeholder: 'Select Advertisement Name'
 });
 </script>
        </div>
    </div>
   <div class="col-sm-3">
        <div class="form-group">
            <label for="company_name">Company Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Title Bangla Here .." name="company_name" id="company_name" type="text" required="required">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="company_link">Link</label>
            <input class="form-control" placeholder="Link Here .." name="company_link" id="company_link" type="text" >
        </div>
    </div>
            <div class="col-sm-3">
        <div class="form-group">
            <label for="image">Upload (Photo)</label>
            <input class="form-control"  name="photo" id="img" onchange="validateImage()" type="file" >
        </div>
    </div>

    </div> 

       <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail</label>
            <textarea class="form-control" placeholder="Detail Here .." name="detail"  id="area_editor1"></textarea> 
        </div>
    </div>
     
    </div>
        
    
      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit"  name="Insert_all"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
