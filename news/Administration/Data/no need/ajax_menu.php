<option>Select Menu</option>
<?php
include("../DBhandelar.php");
if($_POST['id'])
{
$id=$_POST['id'];
$upazila_information = $pdo->query("select * from news_category where publish_status='$id'");
while ($row = $upazila_information->fetch()){

?>
<option><?php echo $row['category']; ?></option>
<?php
}
}

?>