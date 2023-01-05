<?php
include("../DBhandelar.php");
if($_POST['id'])
{
$id=$_POST['id'];
$upazila_information = $pdo->query("select * from submenu where menu='$id'");
while ($row = $upazila_information->fetch()){

?>
<option><?php echo $row['submenu']; ?></option>
<?php
}
}

?>