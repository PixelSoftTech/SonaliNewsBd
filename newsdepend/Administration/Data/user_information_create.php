
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=login_information" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name">Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Name" name="name" id="name" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="user_name">User Name/Login Name<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="User Name/Login Name" name="user_name" id="user_name" type="text" required>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="password">Password<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Password" name="password" id="password" pattern="[A-Za-z0-9]{4,}" type="text" required title="Must contain at least one number and one  letter, and at least 4 or more characters">
        </div>
    </div>
    
    </div>
    
    
   
  <div class="row">
     <div class="col-sm-3">
        <div class="form-group">
            <label for="designation">Designation<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Designation"  name="designation" id="designation" type="text" required>
        </div>
    </div>

    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="email_address">Email<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Email Address" name="email_address" id="email_address" type="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="mobile_number">Mobile No<span style="color:#F00;">*</span></label>
            <input class="form-control" placeholder="Mobile Number" pattern="[0-9]{11}" name="mobile_number" id="mobile_number" type="text" required>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="user_type">Role<span style="color:#F00;">*</span></label>
            
             <select name="user_type" id="user_type" required class="form-control" style="width:100%;">
            <option selected value="">Select Role</option>
            <option>Admin</option>
            <option>User</option>
           

            </select>
               <script>
 $("#user_type").select2({
 allowClear:true,
 placeholder: 'Select Role'
 });
 </script>

        </div>
    </div>
    
    </div> 

  <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail" name="detail"  id="content"></textarea> 
        </div>
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
        <div class="row">
            <div class="col-sm-12">
        <div class="form-group">
            <label for="mobile_number">Image Upload</label>
            <input class="form-control"  name="image_upload" id="mobile_number" type="file" >
        </div>
    </div>
        </div>
    
      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary" type="submit" <?php /*?>onclick=" $('#txtEditor').val($('.Editor-editor').text());"<?php */?> name="<?php echo $page_title; ?>"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
