<?php 
if(isset($_GET["menuName"])){
	$Detail= $_GET["menuName"];

         ?>	
		
   <div class="py-3 category">
      <div class="container">
         <div class="category-container">
            <div class="row">
               <div class="col-lg-9 col-md-8 mb-2">
                  <section class="section-bb">
                     <div class="cat-header py-2">
                        <h1><a href="?menu=Category&menuName=<?php echo $Detail ?>"><?php echo $Detail ?></a></h1>
                     </div>
                  </section>
                  <div class="cat-lead-container border-bottom my-2">
                     <div class="row">
                        <div class="col-lg-8 top-left-section lead-top">
                        <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='$Detail' order by id DESC limit 0,1");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }


         ?>
                           <div class="lead-news">
                              <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>" class="news-item news-item-lead border-0">
                                 <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=640&amp;height=360" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="640" height="335" class="lazyload img-loader">
                                 <h2 class="title liveTitle" style="margin: 10px 0">
                                 <?php echo $rowdatatopnews["title_bn"]; ?>
                                 </h2>
                              </a>
                           </div>
                           <?php } ?>
                        </div>
                        <div class="col-lg-4 cat-two-items">
                           <div class="row">
                           <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='$Detail>' order by id DESC limit 1,3");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }


         ?>
                              <div class="col-12 col-sm-6 col-lg-12 box-news">
                                 <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>" class="news-item news-item-box m-py-2 border-bottom">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                    <?php echo $rowdatatopnews["title_bn"]; ?>
                                    </h2>
                                 </a>
                              </div>
                              <?php } ?>

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row more-contents">
                  <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='$Detail' order by id DESC limit 3,18");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }


         ?>
                     <div class="col-sm-4 box-news">
                     <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>" class="news-item news-item-box m-py-2 border-bottom">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                    <?php echo $rowdatatopnews["title_bn"]; ?>
                                    </h2>
                                 </a>
                              </div>
                              <?php } ?>
                     
                  </div>
                  <div class="w-100 text-center py-2">
                     <button type="button" class="btn bg-primary px-4 load-more text-white">আরও দেখুন
                     </button>
                     <div class="next-loader" style="display: none;">
                        <div class="d-flex justify-content-center">
                           <div class="sk-chase">
                              <div class="sk-chase-dot"></div>
                              <div class="sk-chase-dot"></div>
                              <div class="sk-chase-dot"></div>
                              <div class="sk-chase-dot"></div>
                              <div class="sk-chase-dot"></div>
                              <div class="sk-chase-dot"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-4">
                  <div class="advertisement d-flex justify-content-center">
                     <div id='div-gpt-ad-1624960273857-0' style='min-width: 300px; min-height: 250px;max-width: 300px'>
                        <script>
                           googletag.cmd.push(function () {
                                 googletag.display('div-gpt-ad-1624960273857-0');
                           });
                        </script>
                     </div>
                  </div>
                  <div class="category-right-section-top">
                     <div class="category-header d-flex justify-content-between align-items-center mt-2">
                        <div class="heading national-heading">
                           <p class="title">এই সপ্তাহের পাঠকপ্রিয়</p>
                        </div>
                     </div>
                     <div class="blk-list scaled">
                     <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news  order by viewers DESC limit 0,10");
                  
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }


                  ?>
                        <a class="rp-item py-2 " href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                           <div class="image-container">
                              <img class="img-loader" src="assets/forAll/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90" alt="<?php echo $rowdatatopnews["title_bn"]; ?>">
                           </div>
                           <h2 class="news-item-lite"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

	
<?php } ?>