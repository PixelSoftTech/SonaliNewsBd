<?php
include("DBhandelar.php");
		$informationlastone = $pdo->query("select  * from  news where deleted_at is NULL");
		
		$totalvalue='';
       while($rowdatatop_news = $informationlastone->fetch()){ 

$totalvalue.='<url><loc>https://dawatulislam24.com/?menu=NewsDetail&amp;menuName='. $rowdatatop_news["category"].'&amp;Detail='.$rowdatatop_news["id"].'</loc>
<priority>0.80</priority></url>
';} ?>
<?php
header('Content-Type: application/xml');
 $output ='<?xml version="1.0" encoding="UTF-8" ?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"><url>
<loc>https://dawatulislam24.com/</loc>
<priority>1.00</priority>
</url>'.$totalvalue.'</urlset>';
    print ($output);
    
    ?>