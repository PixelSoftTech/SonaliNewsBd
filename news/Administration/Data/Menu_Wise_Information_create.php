
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=menu_wise_information&folder=ImageUploaded" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

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
   <div class="col-sm-4">
        <div class="form-group">
            <label for="category">Select Menu<span style="color:#F00;">*</span></label>
            <select name="category" id="category" required class="form-control" >
            <option selected value="">Select Menu</option>
        
            <option>ডোনেশন</option>
             <option>উপদেষ্টা মণ্ডলী</option> 
            </select>
               <script>
 $("#category").select2({
 allowClear:true,
 placeholder: 'Select Category'
 });
 </script>
        </div>
    </div>
   <div class="col-sm-4">
        <div class="form-group">
            <label for="title">Title(Bangla)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Title Bangla Here .." name="title_bn" id="title_bn" type="text" required="required">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="title">Title(English)<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Title English Here .." name="title_en" id="title_en" type="text" required="required">
        </div>
    </div>

    </div>
    
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail (Bangla)<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail (Bangla)" name="detail_bn"  id="area_editor1" required="required"></textarea> 
        </div>
    </div>
     
    </div>
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail (English)<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail (English)" name="detail_en"  id="area_editor2" required="required"></textarea> 
        </div>
    </div>
  
    </div>
    
     

<div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="image">Upload (Photo)</label>
            <input class="form-control"  name="photo" id="img" onchange="validateImage()" type="file" >
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
