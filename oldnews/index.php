<?php include('scrip_upper.php'); ?>
<link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="<?php /* ?>font-family: 'SolaimanLipi', sans-serif,Roboto,-apple-system,BlinkMacSystemFont,'Segoe UI','Helvetica Neue',Arial,'Noto Sans','SolaimanLipiNormal',sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol','Noto Color Emoji','Al Qalam Quran Majeed Web Regular' !important;<?php */ ?>margin: 0 3px 0 3px"  >
    
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HWRNKQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<div class="container-fluid box" style="padding: 0px;">

<?php include('header.php');
?>
<div style="margin: 10px 0">
	<?php
	
$file_check=file_exists("$page_title_data");
	if($file_check==1){
	 include("$page_title_data");
	}else{
		include("Error.php");
		}

?>
	</div>	

	
	<?php include('footer.php'); ?>
</div>






</body>


</html>
