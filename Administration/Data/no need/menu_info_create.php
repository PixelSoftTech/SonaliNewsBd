
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
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form=substr($page_title,0,-7); ?>&main_menu=<?php echo $main_menu; ?>&database_table=short_information" accept-charset="UTF-8" class="form" enctype="multipart/form-data"><input name="_token" value="0vH3WmTMiPYUVHdlQx2yXKyXNPUbwjJw55Dl1JA6" type="hidden">

<div class="row">
    

    <div class="col-sm-6">
        <div class="form-group">
            <label for="category">Menu Name<span style="color:#F00;">*</span></label>
                    <select class="form-control" id="category" name="category" required>
                      <option value="" selected>Select  Category</option>
                              <option>About Us</option> 
                              <option>Our Services</option>
                              <option>We provide</option>
                    </select>
                         <script>
 $("#category").select2({
 allowClear:true,
 placeholder: 'Select Category'
 });
 </script>
        </div>
    </div>
    
        <div class="col-sm-6" >
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" placeholder="Title Write Here.." name="title" id="title" type="text">
        </div>
    </div>
    
    </div>
    <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail<span style="color:#F00;">*</span></label>
            <textarea class="form-control" placeholder="Editor Detail" name="detail"  id="content" required="required"></textarea> 
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
