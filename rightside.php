<div class="col-12 col-sm-12 col-md-12"><div class="section-profile"><div class="sec-name pt-1 pb-1 mb-1 border-bottom"><div class="profile-name-2 f-22 font-weight-bold">
সব সংবাদ</div></div></div><div class="section">
	
	  <?php
	$informationlatestnews= $pdo->query("select  * from  tbl_news where news_live_time<='$news_publish_time' order by id DESC limit 0,15");
     while($rowdatalatestnews = $informationlatestnews->fetch()){
			?>	
	<div class="post">
<a href="?menu=NewsDetail&menuName=<?php echo $rowdatalatestnews["categoryid"]; ?>&Detail=<?php echo $rowdatalatestnews["id"]; ?>"><div class="post-section pt-0 pb-1 pb-md-1 mb-md-1 border-bottom"><div class="post-warp"><div class="post-content"><div class="post-meta"><div class="post-title bdr-left"><div class="f-18 c-1">
<?php echo $rowdatalatestnews["title_bn"]; ?></div></div></div></div></div></div>
</a></div>
	
<?php } ?>	
	
	
	
	
	</div></div>