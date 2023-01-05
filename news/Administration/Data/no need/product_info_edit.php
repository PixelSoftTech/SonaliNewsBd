<?php
if(isset($_GET['edit_id'])){
$edit_id=$_GET['edit_id'];	
$table=$_GET['table'];
}
$page_form=substr($page_title,0,-5);
$editinformation = $pdo->query("SELECT * FROM $table where id_no=$edit_id");
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
            
            
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".main_menu").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_menu.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".menu").html(html);
		}
		});

		});
		});
	</script>
    
    
    <script type="text/javascript">
		$(document).ready(function()
		{
		$(".menu").change(function()
		{
		var id=$(this).val();
		var dataString = 'id='+ id;

		$.ajax
		({
		type: "POST",
		url: "ajax_summenu.php",
		data: dataString,
		cache: false,
		success: function(html)
		{
		$(".submenu").html(html);
		}
		});

		});
		});
	</script>

    <div class="col-sm-4">
        <div class="form-group">
            <label for="main_menu">Main Menu<span style="color:#F00;">*</span></label>
            <select name="main_menu" id="main_menu" required class="main_menu form-control" style="width:100%;height:34px;">
            <option selected><?php echo $editrowdata["main_menu"]; ?></option>
        
            <option>Products</option>
            <option>Services</option>
         
            
            </select>
               <script>
 $("#main_menu").select2({
 allowClear:true,
 placeholder: 'Select Main Menu'
 });
 </script>
        </div>
    </div>

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="menu">Menu<span style="color:#F00;">*</span></label>
            <select name="menu" class="menu form-control" required >
                                <option selected><?php echo $editrowdata["menu"]; ?></option>
           </select>
           
				  <script>
                 $(".menu").select2({
                 allowClear:true,
                 placeholder: 'Select Menu'
                 });
                 </script>
         
        </div>
    </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="submenu">Sub Menu</label>
            
           <select name="submenu" class="submenu form-control"  >
                                <option selected><?php echo $editrowdata["submenu"]; ?></option>
           </select>
           
				  <script>
                 $(".submenu").select2({
                 allowClear:true,
                 placeholder: 'Select Submenu'
                 });
                 </script>
        </div>
    </div>
     
    

    
    <div class="col-sm-12">
        <div class="form-group">
            <label for="title">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name Here .." value="<?php echo $editrowdata["title"]; ?>" name="title" id="title" type="text" required="required">
        </div>
    </div>
     
 
    
    </div>
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail</label>
            <textarea class="form-control" placeholder="Editor Detail" name="detail"  id="content" ><?php echo $editrowdata["detail"]; ?></textarea> 
        </div>
    </div>
     <script>
			// Replace the <textarea id="editor1"> with an CKEditor instance.
			CKEDITOR.replace( 'content', {
				on: {
					focus: onFocus,
					blur: onBlur,

					// Check for availability of corresponding plugins.
					pluginsLoaded: function( evt ) {
						var doc = CKEDITOR.document, ed = evt.editor;
						if ( !ed.getCommand( 'bold' ) )
							doc.getById( 'exec-bold' ).hide();
						if ( !ed.getCommand( 'link' ) )
							doc.getById( 'exec-link' ).hide();
					}
				}
			});
		</script>
    </div>
    
    <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <label for="detail_image">Photo(Upload Detail Page)</label>
            <input class="form-control"  name="image" id="detail_image" type="file" >
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
