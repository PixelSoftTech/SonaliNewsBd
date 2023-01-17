<!---Top Section Start-->
<?php
if (isset($_POST["searchdata"])) {
	$searchdata = $_POST["searchdata"];

	$query = "title_" . $web_header_session . " like '%" . $searchdata . "%' or detail_" . $web_header_session . " like '%" . $searchdata . "%'";
}
?>

<div class="container box" style="padding-top: 10px;">
	<div class="row">


		<!---Top Section First Part Start-->
		<div class=" col-md-9">

			<?php
			$informationlastone = $pdo->query("select  * from  tbl_news where $query");
			$msg = "Not Found Anything!";
			if(($informationlastone->rowCount()) !=0){
			while ($rowdatatop_news = $informationlastone->fetch()) {

			?>
				<hr style="width: 100%;">
				<div class="row">
					<div class=" col-md-9 ">
						<div class="title_inner" align="left">
							<p style="font-size:22px; color:#F9080C;letter-spacing: 1px;text-decoration: none;font-weight: bold;">
								<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>"><?php echo $rowdatatop_news["title_" . $web_header_session]; ?></a>
							</p>

							<p style="color: #000;font-size:18px;text-align: justify; ">
								<?php $detail_data = strip_tags($rowdatatop_news["detail_" . $web_header_session]);
								$text_string_length = strlen($detail_data);
								if ($text_string_length >= 750) {
									$news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 740));
								} else {
									$news_text_data = $detail_data;
								} {
									echo $news_text_data;
								} ?>
							</p>


						</div>
					</div>
					<div class=" col-md-3">
						<div align="center"><a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>"><img src="NewsImage/<?php echo $rowdatatop_news['image']; ?>" style="width: 100%; margin: 0px ;height:auto;"></a></div>
					</div>
				</div>
				<hr style="width: 100%;">
			<?php } }
			else{
				echo "<h3 style='text-align: center; padding: 50px 0px;'>দুঃখিত! কোন সংবাদ পাওয়া যায়নি</h3>";
			}
			
			?>
		</div>
		<div class=" col-md-3">
			<div class="NewsSearch_right probash">
				<div class="right-ad-0 advertisement d-flex justify-content-center">
					<div id='' style='width: 300px; height: 250px; background-color: #f9d5d5ab;'>
						<h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
						<!-- <script type="56aae2490e98c67d1ce6410c-text/javascript">
							googletag.cmd.push(function() {
								googletag.display('div-gpt-ad-1620297441942-0');
							});
						</script> -->
					</div>
				</div>
				<div class="fy-selective third-right">
					<div class="same-category-items pt-2">
						<div class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
							<div class="heading politics-heading">
								<p class="title">সর্বশেষ</p>
							</div>
						</div>
						<div class="regular-list scaled m-px-0">
							<?php
							$informationlatestnews = $pdo->query("select  * from  tbl_news where news_live_time<='$news_publish_time' order by id DESC limit 0,7");
							while ($rowdatalatestnews = $informationlatestnews->fetch()) {
							?>
								<a href="?menu=NewsDetail&menuName=<?php echo $rowdatalatestnews["categoryid"]; ?>&Detail=<?php echo $rowdatalatestnews["id"]; ?>" class="news-item news-item-regular py-2">
									<div class="image-container">
										<img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatalatestnews['image']; ?>" alt="পোস্টের ছবি" class="img-loader">
									</div>
									<h2 class="title"><?php echo $rowdatalatestnews["title_bn"]; ?></h2>
								</a>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!---Top Section End-->
</div>