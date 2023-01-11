<?php
if (isset($_GET["Detail"])) {
	$Detail = $_GET["Detail"];


	$informationlastone = $pdo->query("select  * from  tbl_news where id='$Detail'");
	$rowdatatop_news = $informationlastone->fetch();

	$news_category = $rowdatatop_news['categoryid'];
	$newser_name = $rowdatatop_news['ReporterName'];

	$reader_count = $rowdatatop_news['viewers'] + 1;
	$pdo->query("UPDATE  tbl_news set viewers='$reader_count' where id='$Detail' ")

?>

	<section class="section article">
		<div class="section mb-3">
			<div class="sec-warp">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-8">
							<div class="post-section-details">
								<div class="article-details">
									<nav aria-label="breadcrumb" style="margin-top: 15px;">
										<ol class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo $base_url; ?>" class="f-20">প্রচ্ছদ</a></li>
											<li class="breadcrumb-item f-20" aria-current="page"><a href="?menu=NewsCategory&menuName=<?php echo $rowdatatop_news["categoryid"]; ?>" rel="category tag"><?php echo $rowdatatop_news["categoryid"]; ?></a></li>
											<!-- <li class="breadcrumb-item f-20" aria-current="page"><a href="?menu=NewsCategory&menuName=<?php echo $rowdatatop_news["categoryid"]; ?>" rel="category tag"><?php echo $rowdatatop_news["title_bn"]; ?></a></li> -->
										</ol>
									</nav>

									<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=632048d4ec51fa0012aaef95&product=inline-share-buttons' async='async'></script>
									<!-- ShareThis BEGIN -->
									<div class="sharethis-inline-share-buttons"></div>
									<!-- ShareThis END -->

									<div class="article-title">
										<div class="f-50 pl-3 pr-3 pb-0">
											<?php echo $rowdatatop_news["title_bn"]; ?></div>
									</div>


									<div class="row pb-3">
										<div class="col-12 col-sm-12 col-md-4 text-center text-md-left pb-2 pb-md-0">
											<div class="post-time">
												<div class="f-18 c-1 text-center">
													<?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatop_news['publish_date'] . " " . $rowdatatop_news['publish_time']))); ?> মিনিট </div>
											</div>
										</div>
									</div>



									<div class="post-img pb-3">
										<div class="w-75 m-auto">
											<div class="text-center">
												<img src="NewsImage/<?php echo $rowdatatop_news['image']; ?>" alt="" class="img-fluid" style="border: 1px solid #eee;border-radius: 5px;">
											</div>
										</div>
									</div>


									<div class="detail-content f-18 pb-2"><!--<strong class="f-22"><?php echo $rowdatatop_news['newser_name']; ?>:</strong> -->

										<?php echo $rowdatatop_news['detail_bn']; ?>







									</div>

									<div id="fb-root"></div>
									<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0&appId=121033205242621&autoLogAppEvents=1" nonce="pZCluBqZ"></script>

									<div class="fb-comments" data-href="https://dawatulislam24.com/?menu=NewsDetail&amp;menuName=<?php echo $rowdatatop_news['category']; ?>&amp;Detail=<?php echo $rowdatatop_news['id']; ?>" data-width="100%" data-numposts="5"></div>

								</div>
							</div>
						</div>


						<div class="col-12 col-sm-12 col-md-4 border-left no-print">



							<?php include("rightside.php"); ?>







						</div>


					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="section no-print">
		<div class="section pb-3">
			<div class="sec-warp">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-8">
							<div class="section-profile">
								<div class="sec-name pt-1 pb-3">
									<div class="profile-name f-22 font-weight-bold">
										এ ক্যাটাগরীর আরো সংবাদ</div>
								</div>
							</div>
							<div class="relative-post">
								<div class="row">

									<?php
									$informationtwotopnews = $pdo->query("select  * from  tbl_news where news_live_time<='$news_publish_time' and categoryid='$news_category' order by id DESC limit 0,8");
									while ($rowdatatwotopnews = $informationtwotopnews->fetch()) {
									?>
										<div class="post col-12 col-sm-12 col-md-3">
											<a href="?menu=NewsDetail&menuName=<?php echo $rowdatatwotopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatwotopnews["id"]; ?>">
												<div class="post-section">
													<div class="post-warp">
														<div class="post-content">
															<div class="post-img pb-2 pb-md-2">
																<div class="meta-img">
																	<img src="NewsImage/<?php echo $rowdatatwotopnews['image']; ?>" alt="" class="img-fluid">
																</div>
															</div>
															<div class="post-meta">
																<div class="post-title">
																	<div class="f-20 c-1 font-weight-bold">
																		<?php echo $rowdatatwotopnews["title_bn"]; ?></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</a>
										</div>
									<?php } ?>
									
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<?php  } else {
	echo "<p style='font-size:25px;text-align:center;'>URL is not valid. please input valid url</p>";
} ?>