<?php 
//session_start();

include("../../DBhandelar.php");
if(!isset($_SESSION['user_name'])){

header("location: ../../Login/");
}
else {
include('personal_information.php');
include('insert_data.php');
include('edit_data.php');
include('delete.php');
	
?>


<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dawatul Islam || <?php echo $menu; ?></title>
  <?php include('css_content.php'); ?>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  

  <!----------Print --------------> 
        <link rel="icon" type="image/png" href="../../img/logo.png"/>
   

<!--Print New-->
<link href="exceladditional/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
<link href="exceladditional/jquery.dataTables.min.css" rel="stylesheet" type="text/css">


<script src="exceladditional/jquery-3.3.1.js" type="text/javascript"></script>
<script src="exceladditional/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="exceladditional/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="exceladditional/jszip.min.js" type="text/javascript"></script>
<script src="exceladditional/pdfmake.min.js" type="text/javascript"></script>
<script src="exceladditional/vfs_fonts.js" type="text/javascript"></script>
<script src="exceladditional/buttons.html5.min.js" type="text/javascript"></script>


<script src="exceladditional/buttons.print.min.js" type="text/javascript"></script>

<!--End Print New-->

	<script type="text/javascript" class="init">
	


$(document).ready(function() {
	$('#example').DataTable( {
		dom: 'Bfrtip',
		buttons: [
			'copy', 'csv', 'excel', 'pdf', 'print'
		]
	} );
} );



	</script>
    <script>
	$(document).ready(function(){
		var date_input=$('input[class="form-control date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'yyyy-mm-dd',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>
    
     <!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->

<style>
.jodit_toolbar_btn-about{
	display:none;
	}
</style>
<link rel="stylesheet" href="editor/build/jodit.min.css"/>
<link rel="stylesheet" href="editor/assets/prism.css"/>
<link rel="stylesheet" href="editor/assets/app.css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i" rel="stylesheet">
 <style>
 .select2-container--default .select2-selection--single{
	 height:33px;
	 }
 </style> 
  
<!--Editor End-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include('dashboard.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('menu.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('dashboard_content.php');
	?>

    <!-- Main content -->
    <?php 
	$file_check=file_exists("$page_title.php");
	if($file_check==1){
	 include("$page_title.php");
	}else{
		include("dashboard_info.php");
		}?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  
  
  
  <script src="editor/build/jodit.min.js"></script>
<script src="editor/assets/prism.js"></script>
<script src="editor/assets/app.js"></script>
<script>
var editor = new Jodit("#area_editor1", {
  "autofocus": true,
  "iframe": true,
  "uploader": {
    "insertImageAsBase64URI": true
  },
  "spellcheck": false
});
</script>
<script>
var editor = new Jodit("#area_editor2", {
  "autofocus": true,
  "iframe": true,
  "uploader": {
    "insertImageAsBase64URI": true
  },
  "spellcheck": false
});
</script>
<script src="../vendor/div.js"></script>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php include('javascript_content.php'); ?>
</body>
</html>
<?php } ?>