

<section class="section article"><div class="section mb-3"><div class="sec-warp"><div class="container"><div class="row"><div class="col-12 col-sm-12 col-md-12"><div class="post-section-details"><div class="article-details">

<?php
$informationlastone = $pdo->query("select  * from  menu_wise_information where category='".$_GET["menuName"]."'");
        $rowdatatop_news = $informationlastone->fetch();
        if(!empty($rowdatatop_news["title_bn"])){
       echo "<h2 style='text-align:center;'>".$rowdatatop_news["title_bn"]."</h2>";    
       }
       if(!empty($rowdatatop_news["detail_bn"])){
       echo $rowdatatop_news["detail_bn"];    
       } 
        
?>
	

	
	
	
	
	</div>
	</div>
	</div>
	

	
	</div>
	
	</div></div></div></section>



