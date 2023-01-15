<!---Top Section Start-->
<?php 
if(isset($_POST["searchdata"])){
	$searchdata=$_POST["searchdata"];
	
	$query="title_".$web_header_session. " like '%".$searchdata."%' or detail_".$web_header_session. " like '%".$searchdata."%'" ;
}
?>

<div class="container box" style="padding: 0px;">
<div class="row">
	
	
<!---Top Section First Part Start-->	
<div class=" col-md-9" >
	
		<?php
		$informationlastone = $pdo->query("select  * from  tbl_news where $query");
        while($rowdatatop_news = $informationlastone->fetch()){
	
			?>
	<div class="row">
		
	
		<div class=" col-md-9 " >
			<div  class="title_inner" align="left">
				<p style="font-size:22px; color:#F9080C;letter-spacing: 1px;text-decoration: none;font-weight: bold;"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>"><?php echo $rowdatatop_news["title_".$web_header_session]; ?></a></p>
				
			     <p  style="color: #000;font-size:18px;text-align: justify; "><?php if(!empty($rowdatatop_news["detail_".$web_header_session])){  echo substr( strip_tags($rowdatatop_news["detail_".$web_header_session]), 0, strpos(strip_tags($rowdatatop_news["detail_".$web_header_session]), ' ', 700) ); } ?></p>
		
			
			</div>
		</div>
	<div class=" col-md-3" >
		<div align="center"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>"><img src="NewsImage/<?php echo $rowdatatop_news['image']; ?>"  style="width: 100%; margin: 0px ;height:auto;"></a></div>
		</div>
		
		
	
	
	
	
	
	
	
	</div>
	<hr style="width: 100%;">
		<?php } ?>
	
		
    	
		
	
	
	
		</div>


</div>
<!---Top Section End-->

</div>
