<?php
include("../DBhandelar.php");
if(isset($_GET["db_name"])){
$db_name=$_GET["db_name"];	
$category_name=$_GET["category_name"];	
$field_name=$_GET["field_name"];
	

if(!isset($_GET['searchTerm']) && empty($category_name)){
	$fetchData = $pdo->query("select * from `$db_name` where deleted_at is NULL order by id limit 20");
}
else if(!isset($_GET['searchTerm']) && !empty($category_name)){
	$fetchData = $pdo->query("select * from `$db_name` where setup_category='$category_name' and deleted_at is NULL order by id limit 20");
}else{
	
	$search = $_GET['searchTerm'];
	if(empty($category_name)){
		$fetchData = $pdo->query("select * from `$db_name` where deleted_at is NULL and `$field_name` like '%".$search."%' limit 20");
		}else{
			$fetchData = $pdo->query("select * from `$db_name` where deleted_at is NULL and setup_category='$category_name' and `$field_name` like '%".$search."%' limit 20");
			}
	
	
}
	
$data = array();

while ($row =$fetchData->fetch()) {
    $data[] = array("id"=>$row['id'], "text"=>$row[$field_name]);
}

echo json_encode($data);
}
 ?>