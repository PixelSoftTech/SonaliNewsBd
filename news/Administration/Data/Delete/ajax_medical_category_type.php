<option value="">Select</option>
<?php
include("../DBhandelar.php");
if($_POST['id'])
{
$id=$_POST['id'];


 $insert_data=$pdo->query("select * from medical_category_setup where `id`='$id' and deleted_at is NULL");;
		  
while($rowajax=$insert_data->fetch())
{
	$penalty=$rowajax['penalty'];
	


?>
<option value="<?php echo $rowajax["id"]; ?>"><?php echo $penalty; ?></option>
<?php
}
}

?>