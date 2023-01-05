
    <section class="content">

      <!-- Main row -->
      <div class="row">
    <div class="col-sm-12">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php if(!empty($main_menu)){ echo $main_menu; echo "&nbsp;&nbsp;<i class='fa fa-angle-right' style='font-weight:bold;'></i>&nbsp;&nbsp;";} ?><?php echo $menu; ?></h3>

                <div class="box-tools pull-right">
                <a title="View Detail" class="btn btn-success" href="?menu=<?php echo $menu; ?>&page_title=personal_information_edit&edit_id=<?php echo $row["id"]; ?>&main_menu=<?php echo $main_menu; ?>&table=login_information" onClick="return confirm('Do You Want To Edit <?php echo $row["name"]; ?> Information?')"><i class="fa fa-edit" ></i>Edit</a>
                    &nbsp;&nbsp;
                    <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fa fa-reply"></i> back</button>
                                       
                </div>
            </div>
   <p style="text-align:center; color:#F00;">***All * marked fields are required***</p>
            <div class="box-body">
          

<div class="row">
    

    
    <div class="col-sm-4">
        <div class="form-group">
            <label for="name">Name&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["name"]; ?>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="user_name">User Name/Login Name&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["user_name"]; ?>
            
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label for="password">Password&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["no_value"]; ?>
          
        </div>
    </div>
    
    </div>
    
    
   
  <div class="row">
  
  <div class="col-sm-3">
        <div class="form-group">
            <label for="designation">Designation&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["designation"]; ?>
          
        </div>
    </div>
    

    
    <div class="col-sm-3">
        <div class="form-group">
            <label for="email_address">Email&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["email_address"]; ?>
           
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="mobile_number">Mobile No&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["mobile_number"]; ?>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group">
            <label for="user_type">Role&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["user_type"]; ?>
            
         
   

        </div>
    </div>
    
    </div> 
   <div class="row">
     <div class="col-sm-12">
        <div class="form-group">
            <label for="designation">Detail&nbsp;&nbsp;:&nbsp;&nbsp;</label><?php echo $row["detail"]; ?>
           
        </div>
    </div>
    </div>




</div>      
            
<!-- Form End-->






        <p></p>
    </div>
        </div>
    </div>
