 <?php
		 $current_month_name=date('m');
		 	$date = date('Y');
            $previous_year = strtotime ( '-1 year' , strtotime ( $date ) ) ;
            $previous_year_value = date ( 'Y' , $previous_year );


           $next_year = strtotime ( '+1 year' , strtotime ( $date ) ) ;
           $next_year_value = date ( 'Y' , $next_year );		
			
	      if($current_month_name<='06'){
		   $session_value=$previous_year_value."-".date('Y');
		    }else{
			
			$session_value=date('Y')."-".$next_year_value;
			} 	
		
		  ?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
       <?php if($image!=''){ ?>
          <img src="../../Login/images/<?php echo $image; ?>" class="img-circle" alt="<?php echo $name; ?>" style="height:50px; width:250px;"><?php }else{ ?>
          <img src="../../Login/images/logo.png" class="img-circle" alt="<?php echo $name; ?>">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $name; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $designation; ?></a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($menu=='Dashboard'){ echo "active"; }else{}?> treeview">
          <a href="?page_title=dashboard_info">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

	
              
  <li class="<?php if($menu=='News' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=News&page_title=News">
            <i class="fa fa-bell"></i> <span>News</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        
        
        <li class="<?php if($menu=='BreakingNews' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Breaking News&page_title=BreakingNews">
            <i class="fa fa-bitcoin"></i> <span>Breaking News</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li> 
        
         <li class="<?php if($menu=='Top News' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Top News&page_title=TopNews">
            <i class="fa fa-black-tie"></i> <span>Top News</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>

       
        <li class="<?php if($menu=='Advertisement' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Advertisement&page_title=Advertisement">
            <i class="fa fa-delicious"></i> <span>Advertisement</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>

       
          
          
         
        
        <li class="<?php if($menu=='Photo Gallery' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Photo Gallery&page_title=photo_gallery">
            <i class="fa fa-image"></i> <span>Photo Gallery</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        
         <li class="<?php if($menu=='Video Gallery' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Video Gallery&page_title=video_gallery">
            <i class="fa fa-bold"></i> <span>Video Gallery</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>


         <?php if($user_type=='Admin'){ ?>
         <li class="<?php if($menu=='Paper Information'){ echo "active"; }else{}?> treeview" >
        <a href="?menu=Paper Information&page_title=PaperInformation">
            <i class="fa fa-codepen"></i> <span>Paper Information</span>
           
          </a>
          </li>
          
         <li class="<?php if($menu=='Menu Wise Information'){ echo "active"; }else{}?> treeview" >
        <a href="?menu=Menu Wise Information&page_title=Menu_Wise_Information">
            <i class="fa fa-list"></i> <span>Menu Wise Information</span>
           
          </a>
          </li>
          
		  
        <li class="<?php if($menu=='User Information' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=User Information&page_title=user_information">
            <i class="fa fa-arrows-alt"></i> <span>User</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
     <?php } ?>
        

  
		  
       <li class="<?php if($menu=='Personal Information' or $menu=='Edit Personal Information' ){ echo "active"; }else{}?> treeview">
          <a href="?menu=Personal Information&page_title=personal_information_view">
            <i class="fa fa-user"></i> <span>Personal Information</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
       
       
       
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>