<?php
if(isset($_GET["menuName"])){
$menuName=$_GET["menuName"];
	
if($menuName=='সংবাদ'){
$query_value='deleted_at is NULL';	
}else if($menuName=='চলচ্চিত্র'){
$query_value="category in('চলচ্চিত্র') and deleted_at is NULL";	
}else if($menuName=='ওটিটি'){
$query_value="category in('ওটিটি') and deleted_at is NULL";	
}else if($menuName=='টেলিভিশন'){
$query_value="category in('টেলিভিশন') and deleted_at is NULL";	
}else if($menuName=='অন্যান্য'){
$query_value="category in('সঙ্গীত','নৃত্য','নাটক','থিয়েটার','ফ্যাক্ট চেক') and deleted_at is NULL";	
}else{
$query_value="category in('$menuName') and deleted_at is NULL";	
}	
	
	
	
}

?>


<!---Top Section Start-->
<div class="container box" style="padding: 0px;">
	
	
	
	
	<!---Top Section Start-->

<div class="row">
	
	
<!---Top Section First Part Start-->	
<div class=" col-md-8 " >
	<div class="row">
		<div class=" col-md-8 " >
		<?php
		$informationlastone = $pdo->query("select  * from  news where $query_value  order by id DESC limit 0,1");
        $rowdatatop_news = $informationlastone->fetch();	
			?>
		<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['category']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>"><div align="center"><img src="NewsImage/<?php echo $rowdatatop_news['image']; ?>"  style="width: 100%; margin: 0px 0 5px 0; height:auto;"></div></a>
			
			
			<div  class="title_inner" align="left"><p style="padding-top: 5px;"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['category']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>" style="font-size:25px; color:#F0090D;font-weight: bold;letter-spacing: 1px;text-decoration: none;"><?php echo $rowdatatop_news["title_".$web_header_session]; ?></a></p></div>
			
			
			
			
		
		</div>
		<div class=" col-md-4 " >
		<div class="row">
			
		<?php
		$informationlasttwo = $pdo->query("select  * from  news where $query_value order by id DESC limit 1,2");
        while($rowdatatoptwo_news = $informationlasttwo->fetch()){	
			?>
		<div class=" col-md-12 " >
		
		<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatoptwo_news['category']; ?>&Detail=<?php echo $rowdatatoptwo_news['id']; ?>"><div align="center"><img src="NewsImage/<?php echo $rowdatatoptwo_news['image']; ?>"  style="width: 100%; margin: 0px 0 5px 0; height:auto;"></div></a>
			
			
			<div  class="title_inner" align="left"><p style="padding-top: 10px;"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatoptwo_news['category']; ?>&Detail=<?php echo $rowdatatoptwo_news['id']; ?>" style="font-size:16px; color:#000;letter-spacing: 1px;text-decoration: none;"><?php echo $rowdatatoptwo_news["title_".$web_header_session]; ?></a></p></div>
		</div>
		<?php } ?>
			</div>
		
		</div>
		
		
		
		<?php
		$informationlasttwo = $pdo->query("select  * from  news where $query_value order by id DESC limit 3,50");
        while($rowdatatoptwo_news = $informationlasttwo->fetch()){	
			?>
		<div class=" col-md-4 " >
		
		<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatoptwo_news['category']; ?>&Detail=<?php echo $rowdatatoptwo_news['id']; ?>"><div align="center"><img src="NewsImage/<?php echo $rowdatatoptwo_news['image']; ?>"  style="width: 100%; margin: 0px 0 5px 0; height:auto;"></div></a>
			
			
			<div  class="title_inner" align="left"><p style="padding-top: 10px;"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatoptwo_news['category']; ?>&Detail=<?php echo $rowdatatoptwo_news['id']; ?>" style="font-size:16px; color:#000;letter-spacing: 1px;text-decoration: none;"><?php echo $rowdatatoptwo_news["title_".$web_header_session]; ?></a></p></div>
		</div>
		<?php } ?>
		
	
	</div>		
	
	
		
    	
		
		
	
	
	
		</div>
	
<!---Top Section First Part End-->	
<div class=" col-md-4 " >
		
	
	<div class="row" >
	

		
	<?php include("rightside.php"); ?>
		
		
		
		
		
		
	</div>
	
	
	
	
	
		</div>	
	


</div>
<!---Top Section End-->

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<!---Top Section End-->

</div>
