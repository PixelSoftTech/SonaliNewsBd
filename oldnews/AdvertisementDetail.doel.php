
<?php 
if(isset($_GET["Detail"])){
	$Detail=$_GET["Detail"];


		$informationlastone = $pdo->query("select  * from  advertisement where id='$Detail'");
        $rowdatatop_news = $informationlastone->fetch();
		
			
			
			?>

<section class="section article"><div class="section mb-3"><div class="sec-warp"><div class="container"><div class="row"><div class="col-12 col-sm-12 col-md-8"><div class="post-section-details"><div class="article-details">


	
	<div class="article-title"><div class="f-50 pl-3 pr-3 pb-0">
<?php echo $rowdatatop_news["company_name"]; ?></div></div>
	
	



<div class="post-img pb-3"><div class="w-75 m-auto"><div class="text-center">
<img src="advertisement_image/<?php echo $rowdatatop_news['photo']; ?>" alt="" class="img-fluid" style="border: 1px solid #eee;border-radius: 5px;"></div></div></div>
	
	
	<div class="detail-content f-18 pb-2">
		
		<?php echo $rowdatatop_news['detail']; ?>
		
		
		
	
	
	
	
	</div>

	
	
	
	
	</div>
	</div>
	</div>
	
	
	<div class="col-12 col-sm-12 col-md-4 border-left no-print">
		
		
		
		<?php include("rightside.php"); ?>
		
		
		
		
		
		
		
		</div>
	
	
	</div>
	
	</div></div></div></section>


<?php  }else{
		echo "<p style='font-size:25px;text-align:center;'>URL is not valid. please input valid url</p>";	
			
		} ?>

