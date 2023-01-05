<?php 


if(isset($_GET['del'])){

	$delete_id = $_GET['del'];
	$page_title = $_GET['page_title'];
	 $table=$_GET['table'];
	 $menu=$_GET['menu'];
	
  
$delete_modify = $pdo->query("DELETE FROM `$table` where id='$delete_id'");

if(isset($delete_modify)){
	echo "<script>window.open('?menu=$menu&page_title=$page_title&main_menu=$main_menu','_self')</script>";

	}

}



?>