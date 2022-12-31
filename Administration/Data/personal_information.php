<link rel="icon" type="image/png" href="../images/logo.png"/>
<?php
$user_name=$_SESSION['user_name'];

if(!empty($_GET['page_title'])){
	$page_title=$_GET['page_title'];
	}else{
		$page_title="dashboard_info";
		}
	$personal = $pdo->query("select  * from  login_information where user_name='$user_name'");
    $row = $personal->fetch();	

		$user_name=$row['user_name'];
		$office_id_no=$row['office_id_no'];
		$name=$row['name'];
		$designation=$row['designation'];
		$image=$row['image'];
		$user_type=$row['user_type'];
		$mobile_no=$row['mobile_number'];
	
		$address=$row['address'];
		$no_value=$row['no_value'];
		$email_address=$row['email_address'];
      $menupermission=$row['menupermission'];
	
		
		$personal_information_edit_id=$row['id'];
		$joining_date=$row['joining_date'];
		$joining_date=date_create_from_format('d/m/Y', $joining_date);
        $joining_date_view=date_format($joining_date, 'F Y');
		
	 	if(isset($_GET['menu'])){
	      $menu= $_GET['menu'];
        }else{
		  $menu='Dashboard';
		   }
		 if(isset($_GET['main_menu'])){
	     
		  $main_menu=$_GET['main_menu'];
        }else{
		  $main_menu='';
		   }
		
		   
		    ?>