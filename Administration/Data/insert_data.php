<?php 
if(isset($_GET['database_table'])){
	$database_table=$_GET['database_table'];
	}

	
	//All Create Start
	if(isset($_POST["Insert_all"])){
		
		// Array Insert Loop Start
	
	  if(!empty($_FILES['image']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['image']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	  $image_field_name=',`image`';
	  $image_value=",'".$newfilename."'";
	  }else{
		$image_field_name='';
	    $image_value="";  
		  }
		
		
		if(!empty($_FILES['photo2']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['photo2']['name']);
      $newfilename2 = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp2= $_FILES['photo2']['tmp_name'];
      move_uploaded_file($file_tmp2, "../../".$folder_name."/" . $newfilename2);
	  $image_field_name2=',`photo2`';
	  $image_value2=",'".$newfilename2."'";
	  }else{
		$image_field_name2='';
	    $image_value2="";  
		  }
		  
		
		  

    
      $copyArray=$_POST;
      $sliced = array_slice($copyArray, 0, -1);
      $sql="INSERT INTO  `$database_table` (`".implode( "`,`", array_keys( $sliced ) ) ."`,`create_by`,`created_at`$image_field_name$image_field_name2) values (:".implode(",:",array_keys( $sliced ) ).",'$personal_information_edit_id','$current_time'$image_value$image_value2);";

     foreach( $sliced as $field => $value ) $params[":{$field}"]=$value;

     $statement = $pdo->prepare( $sql );
     $statement->execute( $params );
	 
	 echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	 echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	   
	 
	 

	}
	//All Create End



//All Create Start
	if(isset($_POST["Insert_News"])){
		
		// Array Insert Loop Start
	
	  if(!empty($_FILES['image']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['image']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	  $image_field_name=',`image`';
	  $image_value=",'".$newfilename."'";
	  }else{
		$image_field_name='';
	    $image_value="";  
		  }
		
		
		if(!empty($_FILES['slide_show']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['slide_show']['name']);
      $newfilename2 = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp2= $_FILES['slide_show']['tmp_name'];
      move_uploaded_file($file_tmp2, "../../".$folder_name."/" . $newfilename2);
	  $image_field_name2=',`slide_show`';
	  $image_value2=",'".$newfilename2."'";
	  }else{
		$image_field_name2='';
	    $image_value2="";  
		  }
		  
		
		  

    
      $copyArray=$_POST;
      $sliced = array_slice($copyArray, 0, -1);
      
      if(!empty($database_table) && $database_table=='tbl_news'){
          
         $publish_date=$_POST["publish_date"]; 
         $publish_time=$_POST["publish_time"]; 
         
         $yourdate =$publish_date." ".$publish_time;
$stamp = strtotime($yourdate); // get unix timestamp
$time_in_ms = $stamp;
$news_live_time=number_format($time_in_ms, 0, '.', '');

         
     # $sql="INSERT INTO  `$database_table` (`".implode( "`,`", array_keys( $sliced ) ) ."`,`editor`,`news_live_time`,`date`,`create_by`,`created_at`$image_field_name$image_field_name2) values (:".implode(",:",array_keys( $sliced ) ).",'$name','$news_live_time','$current_date','$personal_information_edit_id','$current_time'$image_value$image_value2);"; 
      $sql="INSERT INTO  `$database_table` (`".implode( "`,`", array_keys( $sliced ) ) ."`,`i_user`,`news_live_time`,`date`,`created_by`,`created_at`$image_field_name$image_field_name2) values (:".implode(",:",array_keys( $sliced ) ).",'$name','$news_live_time','$current_date','$personal_information_edit_id','$current_time'$image_value$image_value2);";
          
      }else{
          
		$sql="INSERT INTO  `$database_table` (`".implode( "`,`", array_keys( $sliced ) ) ."`,`i_user`,`news_live_time`,`date`,`created_by`,`created_at`$image_field_name$image_field_name2) values (:".implode(",:",array_keys( $sliced ) ).",'$name','$news_live_time','$current_date','$personal_information_edit_id','$current_time'$image_value$image_value2);";
	}

     foreach( $sliced as $field => $value ) $params[":{$field}"]=$value;

     $statement = $pdo->prepare( $sql );
     $statement->execute( $params );
	 
	 echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	 echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	   
	 
	 

	}
	//All Create End






//Insert_all_Product Create Start
	if(isset($_POST["Insert_all_Product"])){
		
		// Array Insert Loop Start
	
	  if(!empty($_FILES['photo']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['photo']['name']);
      $newfilename_image = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['photo']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename_image);
	 
	  }
		

	$resultitle = array();
	if(!empty($_POST["title_count"])){
	$title_count=$_POST["title_count"];
					
	for($i=1;$i<=$title_count;$i++){
						
    array_push($resultitle,array("title"=>$_POST["title".$i]));
     }
		$multiple_title=json_encode($resultitle);
	}
	
		
		
		
		
	$resultarray = array();
	if(!empty($_POST["title_count"])){
	$title_count=$_POST["title_count"];
					
	for($i=1;$i<=$title_count;$i++){
		
		
	if(!empty($_FILES["photo".$i]['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES["photo".$i]['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES["photo".$i]['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	  
	  
	   array_push($resultarray,array("photo"=>$newfilename));
	  
	  }	
		
						
   
	
	
	
     }
	$multiple_photo=json_encode($resultarray);	
		
	}
		
		
		
		
		
		// Array Insert Loop Start
	
   
      $sql="INSERT INTO `product_information`(`category`, `title_bn`, `title_en`,coverage,term,premium,`detail_bn`, `detail_en`, `photo`, `multiple_title`, `multiple_photo`,`special_status`, `create_by`,`created_at`) VALUES (:category,:title_bn,:title_en,:coverage,:term,:premium,:detail_bn,:detail_en,:photo,:multiple_title,:multiple_photo,:special_status,'$personal_information_edit_id','$current_time')";

            $insert_data= $pdo->prepare($sql);
		    $insert_data->bindparam(":category", $_POST["category"]);
		    $insert_data->bindparam(":title_bn", $_POST["title_bn"]);
			$insert_data->bindparam(":title_en",$_POST["title_en"]);
		    $insert_data->bindparam(":coverage",$_POST["coverage"]);
		    $insert_data->bindparam(":term",$_POST["term"]);
		    $insert_data->bindparam(":premium",$_POST["premium"]);
		    $insert_data->bindparam(":detail_bn",$_POST["detail_bn"]);
		    $insert_data->bindparam(":detail_en",$_POST["detail_en"]);
			$insert_data->bindparam(":photo", $newfilename_image);
		    $insert_data->bindparam(":multiple_title", $multiple_title);	
		    $insert_data->bindparam(":multiple_photo", $multiple_photo);	
		    $insert_data->bindparam(":special_status", $_POST["special_status"]);
			$insert_data->execute();
	 
	 echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	 echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	   
	 
	 

	}
	//Insert_all_Product Create End



















	
	
	
	
	// User Information Create Start
	
    //   if(isset($_POST['UserInsert']))
	// 	{
    //       $current_date_registration=date('d/m/Y');
	// 	  $name=strip_tags($_POST['name']);
	// 	  $user_name=strip_tags($_POST['user_name']);
	// 	  $password=strip_tags($_POST['password']);
	// 	  $designation=strip_tags($_POST['designation']);
	// 	  $email_address=strip_tags($_POST['email_address']);
	// 	  $mobile_number=strip_tags($_POST['mobile_number']);
	// 	  $user_type=strip_tags($_POST['user_type']);
	// 	  $detail=$_POST["detail"];
	      
	// 	  if(!empty($_FILES['image_upload']['name'])){
	// 	  $temp = explode(".", $_FILES['image_upload']['name']);
    //       $newfilename = round(microtime(true)) . '.' . end($temp);
    //       $file_tmp= $_FILES['image_upload']['tmp_name'];
    //       move_uploaded_file($file_tmp, "../../UserImages/" . $newfilename);
	// 	  }else{
	// 		$newfilename='';  
	// 		  }
	// 	  $new_password = password_hash($password, PASSWORD_DEFAULT);
		  

		
	// 	  $logininformation ="SELECT * FROM `$database_table`";  
	// 	  $insert_datacheck= $pdo->query($logininformation);
    //       $countinformation = $insert_datacheck->rowCount(); 
		 
    //      if($countinformation==0){
	
    //       $sql = "INSERT INTO `$database_table`(`name`,`user_name`,`password`,`designation`,`detail`,`email_address`,`mobile_number`,`user_type`,`no_value`,`joining_date`,`image`,`create_by`, `created_at`) VALUES (:name,:user_name,:password,:designation,:detail,:email_address,:mobile_number,:user_type,:no_value,'$current_date_registration','$newfilename','$personal_information_edit_id','$current_time')";
    //         $insert_data= $pdo->prepare($sql);
	// 	    $insert_data->bindparam(":name", $name);
	// 		$insert_data->bindparam(":user_name", $user_name);
	// 		$insert_data->bindparam(":password", $new_password);
	// 		$insert_data->bindparam(":designation", $designation);
	// 		$insert_data->bindparam(":detail", $detail);
	// 		$insert_data->bindparam(":email_address", $email_address);
	// 		$insert_data->bindparam(":mobile_number", $mobile_number);
	// 		$insert_data->bindparam(":user_type", $user_type);
	// 		$insert_data->bindparam(":no_value", $password);
	// 		$insert_data->bindparam(":joining_date", $current_date_registration);							  	
	// 		$insert_data->execute();
		  
	// 	  echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	//       echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	// 			 }else{
					 
					 
	// 				 echo "<script>alert('Your $menu Information Already Exist Our System. Please Input Another $menu Name')</script>";
	// echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	// 				 }

	// 		}
			
	// User Information Create End

		// User Information Create Start
	
		if(isset($_POST['user_information_create']))
		{
          $current_date_registration=date('d/m/Y');
		  $name=strip_tags($_POST['name']);
		  $user_name=strip_tags($_POST['user_name']);
		  $password=strip_tags($_POST['password']);
		  $designation=strip_tags($_POST['designation']);
		  $email_address=strip_tags($_POST['email_address']);
		  $mobile_number=strip_tags($_POST['mobile_number']);
		  $user_type=strip_tags($_POST['user_type']);
		  $detail=$_POST["detail"];
	      
		  if(!empty($_FILES['image_upload']['name'])){
		  $temp = explode(".", $_FILES['image_upload']['name']);
          $newfilename = round(microtime(true)) . '.' . end($temp);
          $file_tmp= $_FILES['image_upload']['tmp_name'];
          move_uploaded_file($file_tmp, "../../UserImages/" . $newfilename);
		  }else{
			$newfilename='';  
			  }
		  $new_password = password_hash($password, PASSWORD_DEFAULT);
		  

		
		  $logininformation ="SELECT * FROM `$database_table` where user_name='$user_name' and  deleted_at is NULL";  
		  $insert_datacheck= $pdo->query($logininformation);
          $countinformation = $insert_datacheck->rowCount(); 
		 
         if($countinformation==0){
	
          $sql = "INSERT INTO `$database_table`(`name`,`user_name`,`password`,`designation`,`detail`,`email_address`,`mobile_number`,`user_type`,`no_value`,`joining_date`,`image`,`create_by`, `created_at`) VALUES (:name,:user_name,:password,:designation,:detail,:email_address,:mobile_number,:user_type,:no_value,'$current_date_registration','$newfilename','$personal_information_edit_id','$current_time')";
            $insert_data= $pdo->prepare($sql);
		    $insert_data->bindparam(":name", $name);
			$insert_data->bindparam(":user_name", $user_name);
			$insert_data->bindparam(":password", $new_password);
			$insert_data->bindparam(":designation", $designation);
			$insert_data->bindparam(":detail", $detail);
			$insert_data->bindparam(":email_address", $email_address);
			$insert_data->bindparam(":mobile_number", $mobile_number);
			$insert_data->bindparam(":user_type", $user_type);
			$insert_data->bindparam(":no_value", $password);							  	
			$insert_data->execute();
		  
		  echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	      echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
				 }else{
					 
					 
					 echo "<script>alert('Your $menu Information Already Exist Our System. Please Input Another $menu Name')</script>";
	echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
					 }

			}
			
	// User Information Create End
