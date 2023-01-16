<?php 
if(isset($_GET['database_table'])){
	$database_table=$_GET['database_table'];
	
	}
	if(isset($_GET['edit_id'])){
	$edit_id=$_GET['edit_id'];
	}


	//ProgramScheduleArea Start
	
	if(isset($_POST["user_menu_permission_edit"])){
	$bascic__info_value = array();
	 $copyArray=$_POST;
      $sliced = array_slice($copyArray, 0, -1);
	  
	  foreach ($sliced as $key => $value) {
      array_push($bascic__info_value, $value);
	}
   
	 $menupermission=json_encode($bascic__info_value); 
	 
	 
	 $sql = "UPDATE `tbl_user` SET `menupermission`=:menupermission WHERE id=$edit_id";
            $insert_data= $pdo->prepare($sql);
		    $insert_data->bindparam(":menupermission", $menupermission);
										  	
			$insert_data->execute();
		  
		  echo "<script>alert('Thank you.Your $menu information Insert successfuly.')</script>";
	      echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>"; 
	  
	}
	
	//ProgramScheduleArea End




//Edit Start
if(isset($_POST["edit_all_product"])){
	
	
	  if(!empty($_FILES['photo']['name'])){
	   $folder_name=$_GET["folder"];	 
	  $temp = explode(".", $_FILES['photo']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['photo']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	 
	  $editimage = $pdo->query("UPDATE `$database_table` SET photo='$newfilename'  where id=$edit_id");
	  }
	
	
	
		
$resultitle = array();
	if(!empty($_POST["title_count"])){
	$title_count=$_POST["title_count"];
					
	for($i=0;$i<=$title_count;$i++){
						
    array_push($resultitle,array("title"=>$_POST["title".$i]));
     }
	}else{
	array_push($resultitle,array("title"=>$_POST["title0"]));
							
	}
	$multiple_title=json_encode($resultitle);
		
		
		
		
	$resultarray = array();
	if(!empty($_POST["title_count"])){
	$title_count=$_POST["title_count"];
					
	for($i=0;$i<=$title_count;$i++){
		
		
	if(!empty($_FILES["photo".$i]['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES["photo".$i]['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES["photo".$i]['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	  
	  
	   array_push($resultarray,array("photo"=>$newfilename));
	  
	  }else{
		$photoprevious=$_POST["photoprevious".$i];
		array_push($resultarray,array("photo"=>$photoprevious));  
		  
		  }	
		
						
   
	
	
	
     }
	}else{
		
	if(!empty($_FILES["photo0"]['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES["photo0"]['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES["photo0"]['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	  
	  array_push($resultarray,array("photo"=>$newfilename));
	  }	else{
		$photoprevious=$_POST["photoprevious0"];
		array_push($resultarray,array("photo"=>$photoprevious));  
		  
		  }	
						
	}
	$multiple_photo=json_encode($resultarray);	
		
		
		
		
		// Array Insert Loop Start
	
   
      $sql="UPDATE `product_information` SET `category`=:category,`title_bn`=:title_bn,`title_en`=:title_en,`coverage`=:coverage,`term`=:term,`premium`=:premium,`detail_bn`=:detail_bn,`detail_en`=:detail_en,`multiple_title`=:multiple_title,`multiple_photo`=:multiple_photo,`special_status`=:special_status,update_by='$personal_information_edit_id',updated_at=now() WHERE id=$edit_id";

            $insert_data= $pdo->prepare($sql);
            $insert_data->bindparam(":category", $_POST["category"]);
		    $insert_data->bindparam(":title_bn", $_POST["title_bn"]);
			$insert_data->bindparam(":title_en", $_POST["title_en"]);
	        $insert_data->bindparam(":coverage",$_POST["coverage"]);
		    $insert_data->bindparam(":term",$_POST["term"]);
		    $insert_data->bindparam(":premium",$_POST["premium"]);
			$insert_data->bindparam(":detail_bn", $_POST["detail_bn"]);
			$insert_data->bindparam(":detail_en", $_POST["detail_en"]);	
	        $insert_data->bindparam(":multiple_title", $multiple_title);
	       $insert_data->bindparam(":multiple_photo", $multiple_photo);
	       $insert_data->bindparam(":special_status", $_POST["special_status"]);
			$insert_data->execute();
//Array Update Loop End
	
	echo "<script>alert('Thank you.Your $menu information Updated successfuly.')</script>";
	echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	
	}
	
	
//Edit End












//Edit Start
if(isset($_POST["edit_all"])){
		
		

   if(!empty($_FILES['photo']['name'])){
	   $folder_name=$_GET["folder"];	 
	  $temp = explode(".", $_FILES['photo']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['photo']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	 
	  $editimage = $pdo->query("UPDATE `$database_table` SET photo='$newfilename'  where id=$edit_id");
	  }
	
	
	if(!empty($_FILES['photo2']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['photo2']['name']);
      $newfilename2 = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp2= $_FILES['photo2']['tmp_name'];
      move_uploaded_file($file_tmp2, "../../".$folder_name."/" . $newfilename2);
			
	  $pdo->query("UPDATE `$database_table` SET photo2='$newfilename2'  where id=$edit_id");	
	  }
	  
	  
	   if(!empty($database_table) && $database_table=='news'){
          
         $publish_date=$_POST["publish_date"]; 
         $publish_time=$_POST["publish_time"]; 
         
         $yourdate =$publish_date." ".$publish_time;
        $stamp = strtotime($yourdate); // get unix timestamp
        $time_in_ms = $stamp;
        $news_live_time=number_format($time_in_ms, 0, '.', '');
        
         $pdo->query("UPDATE `$database_table` SET news_live_time='$news_live_time'  where id=$edit_id");	
        
        }
		  	
	if(!empty($_FILES['image']['name'])){
		$folder_name=$_GET["folder"];
	  $temp = explode(".", $_FILES['image']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['image']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	 
	  $editimage = $pdo->query("UPDATE `$database_table` SET image='$newfilename'  where id=$edit_id");
	  }
	
	
	if(!empty($_FILES['slide_show']['name'])){
		  
	  $folder_name=$_GET["folder"];	  
	  $temp = explode(".", $_FILES['slide_show']['name']);
      $newfilename2 = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp2= $_FILES['slide_show']['tmp_name'];
      move_uploaded_file($file_tmp2, "../../SliderImage/" . $newfilename2);
			
	  $pdo->query("UPDATE `$database_table` SET slide_show='$newfilename2'  where id=$edit_id");	
	  }	
	
// Array Update Loop Start

$valuedata='';
    $copyArray=$_POST;
    $sliced = array_slice($copyArray, 0, -1);
    
    
    foreach ($sliced as $key => $value) {
      $valuedata.="`".$key."`=:".$key.",";
	}
    
    $valuedata_send=substr($valuedata,0,-1);
    $sql="UPDATE `$database_table` SET ". $valuedata_send.",update_by='$personal_information_edit_id',updated_at=now() WHERE id=$edit_id";
    
    foreach( $sliced as $field => $value ) $params[":{$field}"]=$value;
	$statement = $pdo->prepare( $sql );
	$statement->execute( $params );

//Array Update Loop End
	
	echo "<script>alert('Thank you.Your $menu information Updated successfuly.')</script>";
	echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	
	}
	
	
//Edit End


//Edit Start
if(isset($_POST["edit_Book_information"])){
		
		

   if(!empty($_FILES['photo']['name'])){
	   $folder_name=$_GET["folder"];	 
	  $temp = explode(".", $_FILES['photo']['name']);
      $newfilename = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp= $_FILES['photo']['tmp_name'];
      move_uploaded_file($file_tmp, "../../".$folder_name."/" . $newfilename);
	 
	  $editimage = $pdo->query("UPDATE `$database_table` SET photo='$newfilename'  where id=$edit_id");
	  }
		
	 if(!empty($_FILES['book_font']['name'])){
		  
	  $folder_name="BookFont";	  
	  $temp = explode(".", $_FILES['book_font']['name']);
      $book_fontname = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp1= $_FILES['book_font']['tmp_name'];
      move_uploaded_file($file_tmp1, "../../".$folder_name."/" . $book_fontname);
	 
	  
	  $editimage = $pdo->query("UPDATE `$database_table` SET book_font='$book_fontname'  where id=$edit_id");
	  }
		  
	  if(!empty($_FILES['book_back']['name'])){
		  
	  $folder_name="BookBack";	  
	  $temp = explode(".", $_FILES['book_back']['name']);
      $book_backname = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp2= $_FILES['book_back']['tmp_name'];
      move_uploaded_file($file_tmp2, "../../".$folder_name."/" . $book_backname);
	 
	  
	  $editimage = $pdo->query("UPDATE `$database_table` SET book_back='$book_backname'  where id=$edit_id");
	  }
		  
	 if(!empty($_FILES['book_pdf']['name'])){
		  
	  $folder_name="BookPDF";	
	  $book_size=$_FILES['book_pdf']['size']; 
	  $temp = explode(".", $_FILES['book_pdf']['name']);
      $book_pdfname = $temp["0"].round(microtime(true)) . '.' . end($temp);
      $file_tmp3= $_FILES['book_pdf']['tmp_name'];
      move_uploaded_file($file_tmp3, "../../".$folder_name."/" . $book_pdfname);
	
	  $editimage = $pdo->query("UPDATE `$database_table` SET book_pdf='$book_pdfname',`book_size`='$book_size'  where id=$edit_id");
	  }  
		  
	
	
		
	
// Array Update Loop Start

$valuedata='';
    $copyArray=$_POST;
    $sliced = array_slice($copyArray, 0, -1);
    
    
    foreach ($sliced as $key => $value) {
      $valuedata.="`".$key."`=:".$key.",";
	}
    
    $valuedata_send=substr($valuedata,0,-1);
    $sql="UPDATE `$database_table` SET ". $valuedata_send.",update_by='$personal_information_edit_id',updated_at=now() WHERE id=$edit_id";
    
    foreach( $sliced as $field => $value ) $params[":{$field}"]=$value;
	$statement = $pdo->prepare( $sql );
	$statement->execute( $params );

//Array Update Loop End
	
	echo "<script>alert('Thank you.Your $menu information Updated successfuly.')</script>";
	echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
	
	}
	
	
//Edit End

	
	
	
	//User Information Edit Start
if(isset($_POST['user_information_edit']))
		{
		  $name=strip_tags($_POST['name']);
		  $user_name=strip_tags($_POST['user_name']);
		  $password=strip_tags($_POST['password']);
		  $designation=strip_tags($_POST['designation']);
		  $email_address=strip_tags($_POST['email_address']);
		  $mobile_number=strip_tags($_POST['mobile_number']);
		  $user_type=strip_tags($_POST['user_type']);
		  $detail=$_POST["detail"];
		   $post_file= $_FILES['image_upload']['name'];
		   
		   if(!empty($post_file)){
		  
		  $temp = explode(".", $_FILES['image_upload']['name']);
          $newfilename = round(microtime(true)) . '.' . end($temp);
          $file_tmp= $_FILES['image_upload']['tmp_name'];
          move_uploaded_file($file_tmp, "../../Login/images/" . $newfilename);
		  
		  $editimage = $pdo->query("UPDATE `$database_table` SET image='$newfilename'  where id=$edit_id");
		   }
		
		  $new_password = password_hash($password, PASSWORD_DEFAULT);
		  
          $sql = "UPDATE `$database_table` SET `name`=:name,`user_name`=:user_name,`password`=:password,`designation`=:designation,`detail`=:detail,`email_address`=:email_address,`mobile_number`=:mobile_number,`user_type`=:user_type,`no_value`=:no_value,`update_by`='$personal_information_edit_id', `updated_at`='$current_time' where id=$edit_id";
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
		  
		 echo "<script>alert('Thank you.Your $menu information Updated successfuly.')</script>";
	     echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";
	 
			}
			
	//User Information Edit End		
	
		
	
	

?>