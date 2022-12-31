

<?php
if(isset($_GET['edit_id'])){
$edit_id=$_GET['edit_id'];	
$table=$_GET['table'];
$folder=$_GET['folder'];
}
$page_form=substr($page_title,0,-5);
$editinformation = $pdo->query("SELECT * FROM `$table` where id=$edit_id");
$editrowdata = $editinformation->fetch();

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
            
            
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>&folder=<?php echo $folder; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

      
   <div class="row">
   <div class="col-sm-4">
        <div class="form-group">
            <label for="category">Select Menu<span style="color:#F00;">*</span></label>
            <select name="category" id="category" required class="form-control" >
            <option selected><?php echo $editrowdata["category"]; ?></option>
          
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
            <input class="form-control" value="<?php echo $editrowdata["title_bn"]; ?>" placeholder="Title Bangla Here .." name="title_bn" id="title_bn" type="text" required="required">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="title">Title(English)<span style="color:#F00;">*</span></label>
            <input class="form-control" value="<?php echo $editrowdata["title_en"]; ?>" placeholder="Title English Here .." name="title_en" id="title_en" type="text" required="required">
        </div>
    </div>

    </div>
    
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail (Bangla)<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail (Bangla)" name="detail_bn"  id="area_editor1" required="required"><?php echo $editrowdata["detail_bn"]; ?></textarea> 
        </div>
    </div>
     
    </div>
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail (English)<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail (English)" name="detail_en"  id="area_editor2" required="required"><?php echo $editrowdata["detail_en"]; ?></textarea> 
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
                    <button class="btn btn-primary"  type="submit" name="edit_all"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
