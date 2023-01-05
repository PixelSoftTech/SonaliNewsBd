<header class="main-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DI</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dawatul Islam</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
           
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 Pending messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
               
                
                
                  <li><!-- start message -->
                    <a href="0" onClick="return confirm('Do You Want To View Information?')">
                      <div class="pull-left">
                        <img src="#" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                       
                        <small><i class="fa fa-clock-o"></i></small>
                      </h4>
                      <p>&nbsp;&nbsp;&nbsp;</p>
                    </a>
                  </li>
                  
                 
                  <!-- end message -->
                 
                  
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
             
              
              <span class="label label-warning">0</span>
            </a>
           
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <?php if($image!=''){ ?>
              <img src="../../Login/images/<?php echo $image; ?>" class="user-image" alt="<?php echo $name; ?>">
              <?php }else{ ?>
                 <img src="../../Login/images/logo.png" class="user-image" alt="<?php echo $name; ?>">
                <?php } ?>
              <span class="hidden-xs"><?php echo $name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <?php if($image!=''){ ?>
                <img src="../../Login/images/<?php echo $image; ?>" class="img-circle" alt="<?php echo $name; ?>"><?php }else{ ?>
                 <img src="../../Login/images/logo.jpg" class="img-circle" alt="<?php echo $name; ?>">
                <?php } ?>

                <p>
                  <?php echo $name; ?> - <?php echo $designation; ?>
                  <small>Member since <?php echo $joining_date_view; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>