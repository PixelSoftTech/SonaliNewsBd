
		
		
		
		</ul></div></div></div>
	
	
	</div></div></div></div>




<section class="section pb-3"><div class="section"><div class="section-warp"><div class="container"><div class="row">
	<?php
		$informationtopnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and top_news='Yes' order by id DESC limit 0,1");
        while($rowdatatopnews = $informationtopnews->fetch()){
		 $detail_data=strip_tags($rowdatatopnews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=750){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 740) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	
	
	<div class="col-12 col-sm-12 col-md-4"><div class="lead-one post-section"><div class="post-warp"><div class="post-content"><div class="row">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["category"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"><div class="post-content"><div class="post-img"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatatopnews['image']; ?>" alt="" class="img-fluid"></div></div><div class="post-meta"><div class="meta-warp p-3"><div class="post-title"><div class="f-28 c-2 font-weight-bold">
<?php echo $rowdatatopnews["title_bn"]; ?></div></div><div class="post-specs"><div class="f-18 c-2">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div>
</a></div></div></div></div></div>
	
<?php } ?>	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section">
	<?php
		$informationtwotopnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and top_news='Yes' order by id DESC limit 1,2");
        while($rowdatatwotopnews = $informationtwotopnews->fetch()){
			?>
		
		<div class="post pb-2 pb-md- pt-md- mb-md-  pb-md-2 mb-2 border-bottom">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatwotopnews["category"]; ?>&Detail=<?php echo $rowdatatwotopnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatatwotopnews['image']; ?>" alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-18 c-1 font-weight-bold">
<?php echo $rowdatatwotopnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>		
		
		
		
		
		</div></div>
	
	
	<div class="col-12 col-sm-12 col-md-2"><div class="section-profile"><div class="sec-name pt-1 pb-1 mb-1 border-bottom"><div class="profile-name-3 f-22 font-weight-bold">
ঐতিহ্য</div></div></div>
		<div class="section">
   <?php
	$informationtodaytopnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and top_news='Today Top' order by id DESC limit 0,2");
     while($rowdatatodaytopnews = $informationtodaytopnews->fetch()){
			?>		
			
			<div class="post pb-2 pb-md- pt-md- mb-md-  pb-md-2 mb-2 border-bottom">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatodaytopnews["category"]; ?>&Detail=<?php echo $rowdatatodaytopnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatatodaytopnews['image']; ?>" alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-20 c-1 font-weight-bold">
<?php echo $rowdatatodaytopnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>			
			
			
		
		
		</div></div><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-1 mb-1 border-bottom"><div class="profile-name-2 f-22 font-weight-bold">
নির্বাচিত পোস্ট</div></div></div><div class="section">
	
	  <?php
	$informationlatestnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' order by id DESC limit 0,9");
     while($rowdatalatestnews = $informationlatestnews->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatalatestnews["category"]; ?>&Detail=<?php echo $rowdatalatestnews["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-18 c-1">
<?php echo $rowdatalatestnews["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
	
	
	
	
	</div></div></div></div></div></div></section>










		
		
		
		
		
		
		
		
		<?php /*?><div class="col-12 col-sm-12 col-md-4"><div class="ad-section"><div id="ad-item" class="ad-manager" role="ad"><div id="ad" class="ad text-center">
		
		<?php
		
	$Advertisementbelowtopnews3 = $pdo->query("select  * from  advertisement where category='Below Top Advertisement Second 427x104 Px' order by id DESC limit 0,1");
        $rowdaAdvertisementbelowtopnews3= $Advertisementbelowtopnews3->fetch();		
	 
     if(empty($rowdaAdvertisementbelowtopnews3)){
		
			?>
           
		<a href="#"><img  src="ad/add-7-2.gif"  class="img-fluid" style="max-width: 100%; height: auto;" ></a>
        <?php }else{
       $company_linkadbelowtop3=$rowdaAdvertisementbelowtopnews3['company_link']; 
        if(!empty($company_linkadbelowtop3)){
			
        ?>
        <a href="<?php echo $company_linkadbelowtop3; ?>"><img  src="advertisement_image/<?php echo $rowdaAdvertisementbelowtopnews3['photo']; ?>" class="img-fluid" style="max-width: 100%; height: auto;"  title="<?php echo $rowdaAdvertisementbelowtopnews3['company_name']; ?>" alt="<?php echo $rowdaAdvertisementbelowtopnews3['company_name']; ?>" ></a>
        <?php }else{ ?>
        
            <a href="?menu=AdvertisementDetail&menuName=<?php echo $rowdaAdvertisementbelowtopnews3['company_name']; ?>&Detail=<?php echo $rowdaAdvertisementbelowtopnews2['id']; ?>"><img  src="advertisement_image/<?php echo $rowdaAdvertisementbelowtopnews3['photo']; ?>"  class="img-fluid" style="max-width: 100%; height: auto;"  title="<?php echo $rowdaAdvertisementbelowtopnews3['company_name']; ?>" alt="<?php echo $rowdaAdvertisementbelowtopnews3['company_name']; ?>" ></a>
        
        <?php }  } ?>
		
		
		
		</div></div></div></div><?php */?></div></div></div></div></section>


<section class="section"><div class="section pb-3"><div class="sec-warp"><div class="container"><div class="row"><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
কুরআন</div></div></div><div class="post-section">
	
	<?php
		$informationqurannews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='কুরআন' order by id DESC limit 0,1");
        while($rowdataqurannews = $informationqurannews->fetch()){
		 $detail_data=strip_tags($rowdataqurannews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataqurannews["category"]; ?>&Detail=<?php echo $rowdataqurannews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdataqurannews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdataqurannews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	

	  <?php
	$informationqurannews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='কুরআন'  order by id DESC limit 1,4");
     while($rowdataqurannews2 = $informationqurannews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataqurannews2["category"]; ?>&Detail=<?php echo $rowdataqurannews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdataqurannews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
	

	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-2 f-22 font-weight-bold">
হাদিস</div></div></div>
		
		
		<div class="post-section">
			
			<?php
		$informationharisnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='হাদিস' order by id DESC limit 0,1");
        while($rowdatahadisnews = $informationharisnews->fetch()){
		 $detail_data=strip_tags($rowdatahadisnews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews["category"]; ?>&Detail=<?php echo $rowdatahadisnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatahadisnews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatahadisnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
			
			
	  <?php
	$informationharisnews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='হাদিস'  order by id DESC limit 1,4");
     while($rowdatahadisnews2 = $informationharisnews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews2["category"]; ?>&Detail=<?php echo $rowdatahadisnews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatahadisnews2["title_bn"]; ?></div></div></div></div></div></div>

</a></div>
	
<?php } ?>	
			

		
		
		
		
		
		
		</div></div><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-3 f-22 font-weight-bold"> জীবন কথা </div></div></div><div class="post-section">
	
	
		
			<?php
		$informationjibonkothanews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('নবী-রাসুল','সাহাবী','অন্যান্য') order by id DESC limit 0,1");
        while($rowdatajibonkothanews = $informationjibonkothanews->fetch()){
		 $detail_data=strip_tags($rowdatajibonkothanews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>

	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatajibonkothanews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
    
<?php echo $rowdatajibonkothanews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
    
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>

</a></div>
<?php } ?>	
	
	
		  <?php
	$informationjibonkothanews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('নবী-রাসুল','সাহাবী','অন্যান্য')  order by id DESC limit 1,4");
     while($rowdatajibonkothanews2 = $informationjibonkothanews2->fetch()){
			?>	

	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews2["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">

<?php echo $rowdatajibonkothanews2["title_bn"]; ?></div></div></div></div></div></div>

</a></div>
	
<?php } ?>
	
	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
ইসলামি দুনিয়া
		</div></div></div><div class="post-section">
		
		
		
			<?php
		$informationislamidunianews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('ইসলামি দুনিয়া') order by id DESC limit 0,1");
        while($rowdataislamidunianews = $informationislamidunianews->fetch()){
		 $detail_data=strip_tags($rowdataislamidunianews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews["category"]; ?>&Detail=<?php echo $rowdataislamidunianews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdataislamidunianews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdataislamidunianews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
		
		  <?php
	$informationislamidunianews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('নবী-রাসুল','সাহাবী','অন্যান্য')  order by id DESC limit 1,4");
     while($rowdataislamidunianews2 = $informationislamidunianews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews2["category"]; ?>&Detail=<?php echo $rowdataislamidunianews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdataislamidunianews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
		

		
		
		</div></div></div></div></div></div></section>









	
		
		</div></div></div></div>
	
	
	</div></div></div></div></section>




<section class="section pb-3">
	
	
	
	<div class="section"><div class="sec-warp"><div class="container"><div class="row"><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
দৈনন্দিন আমল</div></div></div><div class="post-section">
	
	<?php
		$informationdailyamolnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='দৈনন্দিন আমল' order by id DESC limit 0,1");
        while($rowdatadailyamolnews = $informationdailyamolnews->fetch()){
		 $detail_data=strip_tags($rowdatadailyamolnews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatadailyamolnews["category"]; ?>&Detail=<?php echo $rowdatadailyamolnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatadailyamolnews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatadailyamolnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
	
	  <?php
	$informationdailyamolnews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='দৈনন্দিন আমল'  order by id DESC limit 1,4");
     while($rowdatadailyamolnews2 = $informationdailyamolnews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatadailyamolnews2["category"]; ?>&Detail=<?php echo $rowdatadailyamolnews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatadailyamolnews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
	

	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-2 f-22 font-weight-bold">
ইসলাম ও বিজ্ঞান</div></div></div>
		
		
		<div class="post-section">
			
			<?php
		$informationharisnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='ইসলাম ও বিজ্ঞান' order by id DESC limit 0,1");
        while($rowdatahadisnews = $informationharisnews->fetch()){
		 $detail_data=strip_tags($rowdatahadisnews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews["category"]; ?>&Detail=<?php echo $rowdatahadisnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatahadisnews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatahadisnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
			
			
	  <?php
	$informationharisnews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='ইসলাম ও বিজ্ঞান'  order by id DESC limit 1,4");
     while($rowdatahadisnews2 = $informationharisnews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews2["category"]; ?>&Detail=<?php echo $rowdatahadisnews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatahadisnews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
			

		
		
		
		
		
		
		</div></div><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-3 f-22 font-weight-bold"> সাহিত্য </div></div></div><div class="post-section">
	
	
		
			<?php
		$informationjibonkothanews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('গল্প','কবিতা','প্রবন্ধ') order by id DESC limit 0,1");
        while($rowdatajibonkothanews = $informationjibonkothanews->fetch()){
		 $detail_data=strip_tags($rowdatajibonkothanews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatajibonkothanews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatajibonkothanews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
	
	
		  <?php
	$informationjibonkothanews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('গল্প','কবিতা','প্রবন্ধ') order by id DESC limit 1,4");
     while($rowdatajibonkothanews2 = $informationjibonkothanews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews2["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatajibonkothanews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>
	
	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
নবী-রাসুল
		</div></div></div><div class="post-section">
		
		
		
			<?php
		$informationislamidunianews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('নবী-রাসুল') order by id DESC limit 0,1");
        while($rowdataislamidunianews = $informationislamidunianews->fetch()){
		 $detail_data=strip_tags($rowdataislamidunianews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews["category"]; ?>&Detail=<?php echo $rowdataislamidunianews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdataislamidunianews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdataislamidunianews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
		
		  <?php
	$informationislamidunianews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('নবী-রাসুল')  order by id DESC limit 1,4");
     while($rowdataislamidunianews2 = $informationislamidunianews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews2["category"]; ?>&Detail=<?php echo $rowdataislamidunianews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdataislamidunianews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
		

		
		
		</div></div></div></div></div></div>
	
	
	
	
	</section>







<section class="section border-top pt-3 pt-md-3">
	
	
	
	
	
	
	<div class="section pb-3"><div class="sec-warp"><div class="container"><div class="row"><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
প্রযুক্তি</div></div></div><div class="post-section">
	
	<?php
		$informationqurannews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='প্রযুক্তি' order by id DESC limit 0,1");
        while($rowdataqurannews = $informationqurannews->fetch()){
		 $detail_data=strip_tags($rowdataqurannews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataqurannews["category"]; ?>&Detail=<?php echo $rowdataqurannews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdataqurannews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdataqurannews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
	
	  <?php
	$informationqurannews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='প্রযুক্তি'  order by id DESC limit 1,4");
     while($rowdataqurannews2 = $informationqurannews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataqurannews2["category"]; ?>&Detail=<?php echo $rowdataqurannews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdataqurannews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
	

	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-2 f-22 font-weight-bold">
 	শিক্ষা</div></div></div>
		
		
		<div class="post-section">
			
			<?php
		$informationharisnews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='শিক্ষা' order by id DESC limit 0,1");
        while($rowdatahadisnews = $informationharisnews->fetch()){
		 $detail_data=strip_tags($rowdatahadisnews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews["category"]; ?>&Detail=<?php echo $rowdatahadisnews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatahadisnews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatahadisnews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
			
			
	  <?php
	$informationharisnews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category='শিক্ষা'  order by id DESC limit 1,4");
     while($rowdatahadisnews2 = $informationharisnews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatahadisnews2["category"]; ?>&Detail=<?php echo $rowdatahadisnews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatahadisnews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
			

		
		
		
		
		
		
		</div></div><div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name-3 f-22 font-weight-bold"> প্রবাস </div></div></div><div class="post-section">
	
	
		
			<?php
		$informationjibonkothanews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('প্রবাস') order by id DESC limit 0,1");
        while($rowdatajibonkothanews = $informationjibonkothanews->fetch()){
		 $detail_data=strip_tags($rowdatajibonkothanews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdatajibonkothanews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdatajibonkothanews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
	
	
		  <?php
	$informationjibonkothanews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('প্রবাস')  order by id DESC limit 1,4");
     while($rowdatajibonkothanews2 = $informationjibonkothanews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatajibonkothanews2["category"]; ?>&Detail=<?php echo $rowdatajibonkothanews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdatajibonkothanews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>
	
	
	</div></div>
	
	
	
	<div class="col-12 col-sm-12 col-md-3"><div class="section-profile"><div class="sec-name pt-1 pb-3"><div class="profile-name f-22 font-weight-bold">
স্বাস্থ্য
		</div></div></div><div class="post-section">
		
		
		
			<?php
		$informationislamidunianews= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('স্বাস্থ্য') order by id DESC limit 0,1");
        while($rowdataislamidunianews = $informationislamidunianews->fetch()){
		 $detail_data=strip_tags($rowdataislamidunianews["detail_bn"]);
		$text_string_length=strlen($detail_data);
		
		if($text_string_length>=450){
		$news_text_data=substr($detail_data, 0, strpos($detail_data, ' ', 440) );		
			
		}else{
		$news_text_data= $detail_data;	
		}
		  
			
			?>
	<div class="post pb-2 pb-md-3 pt-md-0 mb-md-1 border-bottom ">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews["category"]; ?>&Detail=<?php echo $rowdataislamidunianews["id"]; ?>"><div class="post-section"><div class="post-warp"><div class="post-content"><div class="post-img pb-2 pb-md-2"><div class="meta-img">
<img src="NewsImage/<?php echo $rowdataislamidunianews['image']; ?>" style="max-width: 100%; height: auto;"  alt="" class="img-fluid"></div></div><div class="post-meta"><div class="post-title"><div class="f-22 c-1 font-weight-bold">
<?php echo $rowdataislamidunianews["title_bn"]; ?></div></div><div class="post-specs pt-2 d-none"><div class="f-14 c-1">
<?php echo $news_text_data; ?>&hellip; ...</div></div></div></div></div></div>
</a></div>
<?php } ?>	
		
		  <?php
	$informationislamidunianews2= $pdo->query("select  * from  news where news_live_time<='$news_publish_time' and category in('স্বাস্থ্য')  order by id DESC limit 1,4");
     while($rowdataislamidunianews2 = $informationislamidunianews2->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdataislamidunianews2["category"]; ?>&Detail=<?php echo $rowdataislamidunianews2["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-20 c-1">
<?php echo $rowdataislamidunianews2["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
		

		
		
		</div></div></div></div></div></div>
	
	
	
	
	
	</section>




	
	
	</div></div></div></div><div class="col-12 col-sm-12 col-md-6"><div class="ad-section"><div id="ad-item" class="ad-manager" role="ad"><div id="ad" class="widget_text ad text-center"></div></div></div></div></div></div></div></div></section>













	
	</div></div>