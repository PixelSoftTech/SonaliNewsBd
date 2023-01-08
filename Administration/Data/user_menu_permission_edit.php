

<?php
if(isset($_GET['edit_id'])){
$edit_id=$_GET['edit_id'];	
$table=$_GET['table'];
}
$page_form=substr($page_title,0,-5);
$editinformation = $pdo->query("SELECT * FROM `tbl_user`  where id=$edit_id");
$editrowdata = $editinformation->fetch();
$menupermission=$editrowdata["menupermission"];

if(!empty($menupermission)){
       $distribution_area_data=json_decode($menupermission,true);
         }
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
          <style>
			  th{
				  text-align: left;
			  }	
				</style>  
            
        <form method="POST" action="?menu=<?php echo $menu; ?>&page_title=<?php echo $page_form; ?>&edit_id=<?php echo $edit_id; ?>&main_menu=<?php echo $main_menu; ?>&database_table=<?php echo $table; ?>" accept-charset="UTF-8" class="form" enctype="multipart/form-data">

    <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" >
                      <thead>
                            <tr>
                                <th>
                                 SL
                                </th>
                                <th>
                              <input type="checkbox" id="selectall"/>&nbsp;Menu
                                </th>
                                
                
                            </tr>
                            
                        </thead> 
                        <tbody aria-relevant="all" aria-live="polite" role="alert">
              
                   
                        <tr>
                    <td text align="left">1</td>                    
                   
                    <td text align="left"><input type="checkbox" class="case" <?php if (!empty($distribution_area_data) && in_array("Slide Show", $distribution_area_data)){echo "checked";}  ?> name="menupermission1" value="Slide Show"/>&nbsp;&nbsp;&nbsp;Slide Show</td>
                   
                  
                        </tr>
							
					 <tr>
                    <td text align="left">2</td>                    
                   
                    <td text align="left"><input type="checkbox" class="case" <?php if (!empty($distribution_area_data) && in_array("Upcoming Event", $distribution_area_data)){echo "checked";}  ?> name="menupermission2" value="Upcoming Event"/>&nbsp;&nbsp;&nbsp;Upcoming Event</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">3</td>                    
                   
                    <td text align="left"><input type="checkbox" class="case" <?php if (!empty($distribution_area_data) && in_array("Menu Wise Information", $distribution_area_data)){echo "checked";}  ?> name="menupermission3" value="Menu Wise Information"/>&nbsp;&nbsp;&nbsp;Menu Wise Information</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">4</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Photo Gallery", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission4" value="Photo Gallery"/>&nbsp;&nbsp;&nbsp;Photo Gallery</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">5</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Video Gallery", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission5" value="Video Gallery"/>&nbsp;&nbsp;&nbsp;Video Gallery</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">6</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Download Type", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission6" value="Download Type"/>&nbsp;&nbsp;&nbsp;Download Type</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">7</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Download Information", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission7" value="Download Information"/>&nbsp;&nbsp;&nbsp;Download Information</td>
                   
                  
                        </tr>
							
					
							 <tr>
                    <td text align="left">8</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Home Round Photo", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission8" value="Home Round Photo"/>&nbsp;&nbsp;&nbsp;Home Round Photo</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">9</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Notice", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission9" value="Notice"/>&nbsp;&nbsp;&nbsp;Notice</td>
                   
                  
                        </tr>
							 <tr>
                    <td text align="left">10</td>                    
                   
                    <td text align="left"><input type="checkbox" <?php if (!empty($distribution_area_data) && in_array("Product", $distribution_area_data)){echo "checked";}  ?> class="case" name="menupermission10" value="Product"/>&nbsp;&nbsp;&nbsp;Product</td>
                   
                  
                        </tr>
					

							
                        <SCRIPT language="javascript">
$(function(){

	// add multiple select / deselect functionality
	$("#selectall").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){

		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});
});
</SCRIPT>
                        </tbody>
                        
                   
                         
                        
                    </table>
                </div>
   
     

      <div class="box-tools pull-right">
       <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-close"></i> Cancel</button>&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-primary"  type="submit" name="user_menu_permission_edit"><i class="fa fa-save"></i> Save </button>
                </div>

</div>      
            
<!-- Form End-->


            

        </form>




        <p></p>
    </div>
        </div>
    </div>
