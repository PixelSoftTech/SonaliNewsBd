<div class="container">
<div class="row">
 
   <?php
				
$information = $pdo->query("SELECT *  FROM `video_gallery` where deleted_at is NULL order by id DESC limit 0,40");
	
				$i=1;
while ($rowdata = $information->fetch()){
					
				$table='video_gallery';
				$folder='VideoImage';
				 $total=$i++;
						?>
 	<div class="col-12 col-sm-12 col-md-4" style="padding:10px;">
 	    
 	    
 	    <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $rowdata["link"]; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 	    
 	</div>
 
 <?php } ?>   
    
</div></div>