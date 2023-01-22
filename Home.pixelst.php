<div class="container">
    <div class="trending-tag d-flex align-items-center mt-3">
        <span>ট্রেন্ডিং : </span>
        <?php
      $informationtopnews = $pdo->query("select  * from  tbl_trendingcatagory order by Id DESC limit 0,5");
      while ($rowdatatopnews = $informationtopnews->fetch()) {
      ?>
        <a
            href="?menu=Trending&menuName=<?php echo $rowdatatopnews["TrendingCatNameBn"]; ?>"><?php echo $rowdatatopnews["TrendingCatNameBn"]; ?></a>

        <?php } ?>
        <!-- <a href="https://www.dhakapost.com/namaz-sehri-iftar-time" target="_blank">নামাজের সময়সূচি</a> -->
    </div>
</div>

<div class="container section-top mt-3">
    <div class="row">
        <div class="col-lg-6 col-md-12 top-left-section lead-top m-order-0">
            <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news where highlight_status='Yes' order by id DESC limit 0,1");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }


         ?>
            <div class="row">
                <div class="col-12 lead-news">
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item news-item-lead">
                        <div class="image-container">
                            <img style="width: 100%; max-height: 350px; " src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>"
                                alt="<?php echo $rowdatalatestnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title" style="margin: 10px 0"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        <span class="d-none d-sm-block"><?php echo $news_text_data; ?></span>
                    </a>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where homepage_status='Yes' order by id DESC limit 3,2");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }


            ?>
                <div class="col-sm-6 scaled lead-below-item">
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item news-item-list">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                alt="রাশিয়ার হামলায় অন্ধকারাচ্ছন্ন ইউক্রেনের ওডেসা" class="lazyload img-loader">
                        </div>
                        <div class="">
                            <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-sm-6 scaled ">
                              <a href="https://www.dhakapost.com/sports/football/159584" class="news-item news-item-list">
                                 <div class="image-container">
                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/france-england-2-20221211032156.jpg?width=130&amp;height=90" alt="ইংলিশদের স্বপ্ন শেষ করে বিশ্বকাপের শেষ চারে ফ্রান্স" class="lazyload img-loader">
                                 </div>
                                 <div class="">
                                    <h2 class="title">ইংলিশদের স্বপ্ন শেষ করে বিশ্বকাপের শেষ চারে ফ্রান্স</h2>
                                 </div>
                              </a>
                           </div> -->
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 top-list-1 m-order-1  " style="order: -1">


            <div class="second-center scaled" style="background: #f6dcdc;">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where homepage_status='Yes' order by id DESC limit 0,3");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }


            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-list py-2 ">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <div class="">
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </div>
                </a>
                <?php } ?>
                <div class="advertisement m-py-2 md-py-2">
                    <div id='' style='max-width:100%;width: 300px; height: 250px; background-color: #adacacab;'>
                        <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                        <!-- <script>
                           googletag.cmd.push(function () {
                              googletag.display('div-gpt-ad-1620283475109-0');
                           });
                     </script> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="top-right m-pt-3">
                <div class="d-flex align-items-center flex-column mb-3" style="border: 1px solid #911a39;">
                    <!-- <style>
                  .title-box .title-box-left a {
                  color: #101B2C;
                  font-size: 22px;
                  line-height: 1.3;
                  text-decoration: none;
                  font-weight: bold;
                  }

                  .title-box .title-box-left {
                  color: #101B2C;
                  font-size: 22px;
                  line-height: 1.3;
                  position: relative;
                  padding-left: 10px;
                  text-decoration: none;
                  display: block;
                  font-weight: bold;
                  }

                  .title-box .title-box-left::before {
                  content: "";
                  position: absolute;
                  background: #9E0C36;
                  width: 3px;
                  height: 100%;
                  left: 0;
                  top: 0;
                  }

                  .title-box .title-box-right a {
                  color: #fff;
                  font-size: 19px;
                  line-height: 1.3;
                  text-decoration: none;
                  padding: 5px 20px;
                  border-radius: 3px;
                  background: #7D194B;
                  /* background: linear-gradient(270deg, #1E010A 0%, #9E0C36 100%); */
                  }

                  .today-match-box {
                  background: #fff;
                  border: 1px solid #dedede;
                  box-shadow: 0 2px 4px 0 rgb(0 0 0 / 10%);
                  }

                  .today-match-box .today-match {
                  border-bottom: 1px solid #dedede;
                  padding: 5px;
                  }

                  .today-match-box .today-match .today-match-result {
                  padding-bottom: 5px;
                  }

                  .today-match-box .today-match .today-match-result p {
                  background: #882055;
                  padding: 3px 10px;
                  color: #fff;
                  font-size: 14px;
                  border-radius: 50px;
                  display: inline;
                  margin-bottom: 0;
                  }

                  .today-match-box .match-schedule-body {
                  display: flex;
                  align-items: center;
                  justify-content: space-between;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  gap: 5px;
                  color: #101B2C;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .flag img {
                  max-width: 30px;
                  /* border: 1px solid #dedede; */
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .country {
                  font-size: 15px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-goal {
                  display: flex;
                  flex-direction: column;
                  gap: 10px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-goal .goals {
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  gap: 2px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-goal .goals .goal {
                  color: #fff;
                  background: #121212;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  width: 25px;
                  height: 25px;
                  border-radius: 3px;
                  font-size: 15px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-goal .links a {
                  text-decoration: none;
                  background: #7D194B;
                  padding: 5px 10px;
                  color: #fff;
                  font-size: 14px;
                  border-radius: 3px;
                  }

                  .today-match-box .today-match .today-games {
                  color: red;
                  font-size: 14px;
                  padding-bottom: 5px;
                  }

                  .today-match-box .today-match .today-games .live-loading {
                  width: 15px;
                  height: 15px;
                  background-color: red;
                  margin-right: 5px;
                  border-radius: 50px;
                  -moz-animation-duration: 500ms;
                  -moz-animation-name: liveblink;
                  -moz-animation-iteration-count: infinite;
                  -moz-animation-direction: alternate;
                  -webkit-animation-duration: 500ms;
                  -webkit-animation-name: liveblink;
                  -webkit-animation-iteration-count: infinite;
                  -webkit-animation-direction: alternate;
                  animation-duration: 500ms;
                  animation-name: liveblink;
                  animation-iteration-count: infinite;
                  animation-direction: alternate;
                  }

                  @-moz-keyframes liveblink {
                  from {
                  opacity: 1;
                  }

                  to {
                  opacity: 0;
                  }
                  }

                  @-webkit-keyframes liveblink {
                  from {
                  opacity: 1;
                  }

                  to {
                  opacity: 0;
                  }
                  }

                  @keyframes liveblink {
                  from {
                  opacity: 1;
                  }

                  to {
                  opacity: 0;
                  }
                  }

                  /* Large devices (desktops, 992px and up) */
                  @media (max-width: 991.98px) {
                  .today-match-box .match-schedule-body .match-schedule-flag {
                  flex-direction: column;
                  gap: 5px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .country {
                  order: 1;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .flag {
                  order: 0;
                  }
                  }

                  /* Medium devices (tablets, 768px and up) */
                  @media (max-width: 767.98px) {
                  .today-match-box .match-schedule-body .match-schedule-flag {
                  flex-direction: column;
                  gap: 5px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .country {
                  order: 1;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .flag {
                  order: 0;
                  }
                  }

                  /* Small devices (landscape phones, 576px and up) */
                  @media (max-width: 575.98px) {
                  .today-match-box .match-schedule-body .match-schedule-flag {
                  flex-direction: column;
                  gap: 5px;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .country {
                  order: 1;
                  }

                  .today-match-box .match-schedule-body .match-schedule-flag .flag {
                  order: 0;
                  }
                  }
               </style> -->
                    <style>
                    #prayer-container {
                        width: 300px;
                        text-align: center;
                    }

                    .prayer_time {
                        font-size: 1.6em;
                        font-weight: 800;
                    }

                    #prayer-container #prayer_city {
                        font-size: 1.2em;
                        font-weight: 800;
                    }

                    #prayer-container table {
                        width: 100%
                    }

                    #prayer-container tbody tr:nth-child(odd) {
                        background-color: #f3f3f3;
                    }

                    #prayer-container tbody td {
                        padding: 10px 20px;
                    }

                    #prayer-container tbody td:nth-child(1) {
                        text-align: left;
                    }

                    #prayer-container tbody td:nth-child(2) {
                        text-align: right;
                    }
                    </style>
                    <div class="today-match-box" style="width: 100%;">
                        <div style="margin:auto; border:1px solid #c0c0c0" id="prayer-container">
                            <div class="prayer_time">নামাজের সময়সূচি</div>
                            <div id="prayer_city"></div>
                            <div id="prayer_date"></div>
                            <div id="prayer_clock"></div>
                            <table class="table responsive table-success table-striped table-hover">
                                <tbody>
                                    <tr>
                                        <th>Imsak</th>
                                        <td id="Imsak"></td>
                                    </tr>
                                    <tr>
                                        <th>ফজর</th>
                                        <td id="Fajr"></td>
                                    </tr>
                                    <tr>
                                        <th>যোহর</th>
                                        <td id="Dhuhr"></td>
                                    </tr>
                                    <tr>
                                        <th>আছর</th>
                                        <td id="Asr"></td>
                                    </tr>
                                    <tr>
                                        <th>মাগরিব</th>
                                        <td id="Maghrib"></td>
                                    </tr>
                                    <tr>
                                        <th>ইশা</th>
                                        <td id="Isha"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="opinion-contents">

                    <div class="category-header opinion-header d-flex justify-content-between align-items-center">
                        <div class="heading opinion-heading d-flex align-items-center">
                            <p class="title">
                                <a
                                    href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>">মতামত</a>
                            </p>
                        </div>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>">
                            <div class="read-more d-flex justify-content-end align-items-center">
                                <p>আরও পড়ুন</p>
                                <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                            </div>
                        </a>
                    </div>
                    <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='মতামত' order by id DESC limit 0,1");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                            $text_string_length = strlen($detail_data);

                            if ($text_string_length >= 230) {
                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                            } else {
                                $news_text_data = $detail_data;
                            }
                        ?>
                        <div class="regular-list scaled ai-custom">
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                class="news-item news-item-regular py-2 d-flex">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader"
                                    style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px">
                                <div class="d-flex flex-column">
                                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                    <p style="margin-top: 5px;color: #696464;">
                                        <?php echo $rowdatatopnews["ReporterName"]; ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>

                <div class="advertisement mt-3" style="display: none;">
                    <div id='' style='max-width: 100%; width: 300px; height: 250px; background-color: #adacacab;'>
                        <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                        <!-- <script>
                        googletag.cmd.push(function () {
                           googletag.display('div-gpt-ad-1620297530803-0');
                        });
                  </script> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="section-two py-3 bg-section-two m-pt-0 mt-3 m-mt-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-sm-9 special-top">
                <div class="row">

                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='রাজনীতি' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='অর্থনীতি' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আন্তর্জাতিক' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='স্বাস্থ্য' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='শিক্ষা' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='তথ্যপ্রযুক্তি' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='ধর্ম' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='কৃষি ও প্রকৃতি' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 box-news ">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আইন-আদালত' order by id DESC limit 0,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-box m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-3 m-pt-3">
                <div class="recent-popular">
                    <div>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-recent-tab" data-toggle="tab" href="#nav-recent"
                                role="tab" aria-controls="nav-recent" aria-selected="true">সর্বশেষ</a>
                            <a class="nav-item nav-link" id="nav-popular-tab" data-toggle="tab" href="#nav-popular"
                                role="tab" aria-controls="nav-popular" aria-selected="false">সর্বাধিক পঠিত</a>
                        </div>
                    </div>
                    <div class="tab-content px-sm-0" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-recent" role="tabpanel"
                            aria-labelledby="nav-recent-tab">
                            <div>
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news order by id DESC limit 0,10");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }


                        ?>
                                <a class="rp-item py-2 "
                                    href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                    <div class="image-container">
                                        <img class="img-loader" src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>">
                                    </div>
                                    <h2 class="news-item-lite"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                            <div>
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
                                <a class="rp-item py-2 "
                                    href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                    <div class="image-container">
                                        <img class="img-loader" src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>">
                                    </div>
                                    <h2 class="news-item-lite"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="bg-primary text-center py-2">
                        <a style="font-size: 19px; color: #FFF" href="" rel="nofollow">আর্কাইভ</a>
                    </div>
                </div>
                <div class="two-right">
                    <div class="advertisement">
                        <div id='' style='max-width:100%; width: 300px; height: 250px; background-color: #adacacab;'>
                            <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                            <!-- <script>
                        googletag.cmd.push(function() {
                           googletag.display('div-gpt-ad-1620297568227-0');
                        });
                     </script> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <section class="worldcup-area my-3">
   <div class="container">
      <div class="worldcup">
         <div class="worldcup-title text-center mb-3">
            <div class="desktop-fwc">
               <a href="https://www.dhakapost.com/fifa-world-cup">
                  <img class="width: 100%;" src="https://cdn.dhakapost.com/media/fifa-world-cup/common/fwc-sports-banner-desktop.png" alt="banner">
               </a>
            </div>
         </div>
         <div class="worldcup-body px-3">
            <div class="row">
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/topic/ম্যান-অব-দ্য-ম্যাচ">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/Walton-man-ab-the-match.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/topic/আর্জেন্টিনা-ফুটবল-দল">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/Jamuna-Argentina.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/fifa-world-cup/quiz">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/AIR-ASTRA-US-Bangla-Quiz-22.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/topic/ব্রাজিল-ফুটবল-দল">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/Jamuna-Brazil.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/fifa-world-cup/point-table">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/Vibrant-Point-Table.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-6 col-md-2">
                  <div class="worldcup-box mb-3">
                     <a href="https://www.dhakapost.com/fifa-world-cup/fixture">
                        <img src="https://cdn.dhakapost.com/media/fifa-world-cup/common/Purbachal-American-City-Fixture.png" alt="">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="HotlineArea" style="text-align: center; background-color: #FFFFFF; padding: 20px 0px;">
    <div class="container">
        <img src="assets/img/hotline.jpg" alt="Govt. Hotline Numbers" style="width: 80%; Height: auto;">
    </div>
</section>
<!-- <div class="container mt-3">
   <div class="advertisement">
      <div id='' style='min-width: 300px; min-height: 250px; background-color: #f9d5d5ab;'>
         <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>1260 X 250</h4>
            <script>
                  googletag.cmd.push(function () {
                     googletag.display('div-gpt-ad-1641204562078-0');
                  });
            </script>
         </div>
   </div>
</div> -->
<div class="container pt-3 m-pt-2">
    <div class="row">
        <div class="col-lg-9 col-md-8 national-items">
            <div
                class="category-header national-ch d-flex justify-content-between align-items-center national__home mt-2">
                <div class="heading national-heading">
                    <p class="title"><a href="?menu=Category&menuName=জাতীয়" class="national-lc">জাতীয়</a></p>
                </div>
                <a href="?menu=Category&menuName=জাতীয়" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right"></i></p>
                    </div>
                </a>
            </div>
            <div class="row border-right">
                <div class="col-lg-8 col-12">
                    <div class="grid-fourth pt-2 m-pt-0">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 1,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="grid-fourth-item grid-fourth-item__1 m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 2,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="grid-fourth-item grid-fourth-item__2 m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 3,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="grid-fourth-item grid-fourth-item__3 m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 4,1");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="grid-fourth-item grid-fourth-item__4 m-py-2">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                    <div class="regular-list scaled">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='জাতীয়' order by id DESC limit 5,7");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                            </div>
                            <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 politics">
            <div
                class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
                <div class="heading politics-heading">
                    <p class="title"><a href="?menu=Category&menuName=রাজনীতি" class="politics-lc">রাজনীতি</a></p>
                </div>
                <a href="?menu=Category&menuName=রাজনীতি" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="regular-list scaled ai-custom">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='রাজনীতি' order by id DESC limit 2,6");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-regular py-2">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="advertisement">
        <div id='' style='min-width: 100%; min-height:90px; background-color: #adacacab;'>
            <h4 style="text-align: center; padding-top: 15px; color: #fff">For Add <br>970 X 90</h4>
            <!-- <script>
            googletag.cmd.push(function() {
               googletag.display('div-gpt-ad-1654068917401-0');
            });
         </script> -->
        </div>
    </div>
</div>
<div class="container pt-3 m-pt-2">
    <div class="row">
        <div class="col-lg-9 col-md-8">
            <div
                class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
                <div class="heading opinion-heading">
                    <p class="title"><a href="?menu=HoleCountry" class="country-lc">সারাদেশ</a></p>
                </div>
                <a href="?menu=HoleCountry" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="row border-right country-articles">
                <div class="col-12 col-md-12 col-xl-4">
                    <div class="row type-sect-three-left">
                        <?php
                            $informationtopnews = $pdo->query("select * from tbl_news where categoryid <> 'আন্তর্জাতিক' and categoryid <> 'বিনোদন' and categoryid <> 'খেলা' order by id DESC limit 1,2");
                            
                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                            $text_string_length = strlen($detail_data);

                            if ($text_string_length >= 450) {
                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                            } else {
                                $news_text_data = $detail_data;
                            }
                            ?>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="news-item news-item-box pt-2 m-pb-2">
                                    <img src="assets/img/placeholder.png"
                                        data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                        alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                        class="lazyload img-loader">
                                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="clk-list clk-center">
                        <?php
                            $informationtopnews = $pdo->query("select * from tbl_news where categoryid <> 'আন্তর্জাতিক' and categoryid <> 'বিনোদন' and categoryid <> 'খেলা' order by id DESC limit 3,2");
                            
                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                            $text_string_length = strlen($detail_data);

                            if ($text_string_length >= 450) {
                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                            } else {
                                $news_text_data = $detail_data;
                            }
                            ?>
                            <a href=?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>" class="clk-item clk-item-regular py-2 ">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                        <?php } ?>
                        <?php
                            $informationtopnews = $pdo->query("select * from tbl_news where categoryid <> 'আন্তর্জাতিক' and categoryid <> 'বিনোদন' and categoryid <> 'খেলা' order by id DESC limit 5,3");
                            
                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                            $text_string_length = strlen($detail_data);

                            if ($text_string_length >= 450) {
                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                            } else {
                                $news_text_data = $detail_data;
                            }
                            ?>
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 d-none d-sm-flex">
                    <div class="clk-list clk-right">
                        <?php
                            $informationtopnews = $pdo->query("select * from tbl_news where categoryid <> 'আন্তর্জাতিক' and categoryid <> 'বিনোদন' and categoryid <> 'খেলা' order by id DESC limit 8,5");
                            
                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                            $text_string_length = strlen($detail_data);

                            if ($text_string_length >= 450) {
                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                            } else {
                                $news_text_data = $detail_data;
                            }
                            ?>
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>" class="clk-item clk-item-regular py-2">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 custom-item">
            <div
                class="category-header bangladesh-ch d-flex justify-content-between align-items-center politics__home mt-2">
                <div class="heading custom-heading">
                    <p class="title bangladesh-lc">আপনার এলাকার খবর</p>
                </div>
            </div>
            <form method="POST" action="?menu=SearchResult&menuName=সংবাদ" accept-charset="UTF-8" class="form"
                enctype="multipart/form-data">
                <div class="row mt-2" style="margin: 0">
                    <div class='col-12' style="padding: 5px 0">
                        <div class="form-group" style="margin: 0">
                            <select class="form-control" name="Division" id="divisions" onchange="divisionsList();">
                                <option selected disabled value="">বিভাগ</option>
                                <option data-value="Dhaka" value="ঢাকা">ঢাকা</option>
                                <option data-value="Barishal" value="বরিশাল">বরিশাল</option>
                                <option data-value="Sylhet" value="সিলেট">সিলেট</option>
                                <option data-value="Chattogram" value="চট্টগ্রাম">চট্টগ্রাম</option>
                                <option data-value="Rajshahi" value="রাজশাহী">রাজশাহী</option>
                                <option data-value="Khulna" value="খুলনা">খুলনা</option>
                                <option data-value="Rangpur" value="রংপুর">রংপুর</option>
                                <option data-value="Mymensingh" value="ময়মনসিংহ">ময়মনসিংহ</option>
                            </select>
                            <script>
                            $("#divisions").select2({
                                allowClear: true,
                                placeholder: 'বিভাগ'
                            });
                            </script>
                        </div>
                    </div>
                    <div class='col-12' style="padding: 5px 0">
                        <div class="form-group" style="margin: 0">
                            <select class="form-control" name="District" id="distr" onchange="thanaList();"
                                required></select>
                            <script>
                            $("#distr").select2({
                                allowClear: true,
                                placeholder: 'জেলা'
                            });
                            </script>
                        </div>
                    </div>
                    <div class="col-12" style="padding: 5px 0">
                        <div class="form-group" style="margin: 0">
                            <select class="form-control" name="Upozila" id="upo"></select>
                            <script>
                            $("#upo").select2({
                                allowClear: true,
                                placeholder: 'উপজেলা'
                            });
                            </script>
                        </div>
                    </div>
                    <div class="col-12" style="padding: 5px 0">
                        <!-- <input class="btn bg-primary  btn-block text-white" name="submit" id="submit" type="submit" value="খুঁজুন">
                        <i class="fa fa-search ml-2" style="color: #FFF !important; height: 100%"></i> -->
                            <button name="submit" id="submit" type="submit" class="btn dis-sea btn-block bg-primary" aria-label="Search" style="padding: 4.5px 0px;">
                                <p style="color:#FFF; font-size:18px;">খুঁজুন <i class="fa fa-search" style="padding-left: 5px; color: #FFF !important; font-size:16px;"></i></p>
                            </button>
                    </div>
                </div>
            </form>
            <div class="advertisement mt-2">
                <div id='' style='min-width: 300px; min-height: 250px; max-width: 300px; background-color: #adacacab;'>
                    <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                    <!-- <script>
                  googletag.cmd.push(function() {
                     googletag.display('div-gpt-ad-1624958658889-0');
                  });
               </script> -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-section-two sports-section-contents mt-4">
    <div class="container pt-3 m-pt-2 pb-3 m-pb-2">
        <div class="row">
            <div class="col-lg-9 col-md-8">
                <div class="category-header sports-ch d-flex justify-content-between align-items-center">
                    <div class="heading sports-heading">
                        <p class="title"><a href="?menu=Category&menuName=খেলা" class="sports-lc">খেলা</a></p>
                    </div>
                    <!-- <div class="d-none d-sm-flex align-items-center">
                  <div class="sct-items" data-href="cricket">ক্রিকেট</div>
                  <div class="sct-items" data-href="football">ফুটবল</div>
                  <div class="sct-items active" data-href="sports-all">সকল</div>
               </div> -->
                    <a href="?menu=Category&menuName=খেলা" class="d-none d-sm-flex ">
                        <div class="read-more d-flex justify-content-end align-items-center">
                            <p>আরও খবর</p>
                            <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div>
                    <div class="row sports-all sports-item">
                        <div class="col-lg-8 col-12">
                            <div class="grid-fourth pt-2 m-pt-0">
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 1,1");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="grid-fourth-item grid-fourth-item__1 m-py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 2,1");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="grid-fourth-item grid-fourth-item__2 m-py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 3,1");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="grid-fourth-item grid-fourth-item__3 m-py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 4,1");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="grid-fourth-item grid-fourth-item__4 m-py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                            <div class="regular-list scaled">
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='খেলা' order by id DESC limit 5,7");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="news-item news-item-regular py-2">
                                    <div class="image-container d-flex d-lg-none">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row cricket sports-item" style="display: none"></div>
                    <div class="row football sports-item" style="display: none"></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 m-mt-2">
                <div class="category-header education-ch d-flex justify-content-between align-items-center">
                    <div class="heading custom-heading">
                        <p class="title"><a href="?menu=Category&menuName=শিক্ষা" class="education-lc">শিক্ষা</a></p>
                    </div>
                    <a href="?menu=Category&menuName=শিক্ষা" class="d-none d-sm-flex">
                        <div class="read-more d-flex justify-content-end align-items-center">
                            <p>আরও খবর</p>
                            <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="blk-list scaled">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='শিক্ষা' order by id DESC limit 1,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-blk py-2 news-blk-image">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='শিক্ষা' order by id DESC limit 2,2");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item news-item-regular py-2">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175?width=130&amp;height=90"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="advertisement">
        <div id='' style='min-width: 100%; min-height: 120px; background-color: #adacacab;'>
            <h4 style="text-align: center; padding-top: 25px; color: #fff">For Add <br>970 X 120</h4>
            <!-- <script>
            googletag.cmd.push(function() {
               googletag.display('div-gpt-ad-1666505039219-0');
            });
         </script> -->
        </div>
    </div>
</div>
<div class="container pt-3 m-pt-2 entertainment">
    <div class="category-header entertainment-ch d-flex justify-content-between align-items-center mt-2">
        <div class="heading custom-heading">
            <p class="title"><a href="?menu=Category&menuName=বিনোদন" class="entertainment-lc">বিনোদন</a></p>
        </div>
        <!-- <div class="d-none d-sm-flex align-items-center">
         <div class="et-items" data-href="bollywood">বলিউড</div>
         <div class="et-items" data-href="hollywood">হলিউড</div>
         <div class="et-items" data-href="dhallywood">ঢালিউড</div>
         <div class="et-items active" data-href="entertainment-all">সকল</div>
      </div> -->
        <a href="?menu=Category&menuName=বিনোদন" class="d-none d-sm-flex">
            <div class="read-more d-flex justify-content-end align-items-center">
                <p>আরও খবর</p>
                <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
            </div>
        </a>
    </div>
    <div>
        <div class="row entertainment-all entertainment-item">
            <div class="col-lg-6 col-12 entertainment-left">
                <div class="grid-entertainment pt-2">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 1,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="grid-entertainment-item grid-entertainment-item__1">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=640&amp;height=335"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 2,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="grid-entertainment-item grid-entertainment-item__2">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 3,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="grid-entertainment-item grid-entertainment-item__3">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 entertainment-center">
                <div class="alk-list">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 4,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-alk py-2 news-alk-image">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 6,4");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-alk news-item-regular py-2 d-none d-sm-flex">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 entertainment-right d-none d-sm-flex">
                <div class="alk-list">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 5,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-alk py-2 news-alk-image">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='বিনোদন' order by id DESC limit 10,4");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-alk news-item-regular py-2">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row bollywood entertainment-item" style="display: none"></div>
        <div class="row hollywood entertainment-item" style="display: none"></div>
        <div class="row dhallywood entertainment-item" style="display: none"></div>
    </div>
</div>
<div class="container pt-3 m-pt-2">
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="category-header international-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading international-heading">
                    <p class="title"><a href="?menu=Category&menuName=আন্তর্জাতিক"
                            class="international-lc">আন্তর্জাতিক</a></p>
                </div>
                <a href="?menu=Category&menuName=আন্তর্জাতিক" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="row border-right international-articles">
                <div class="col-12 col-md-12 col-xl-6">
                    <div class="row type-sect-three-left">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আন্তর্জাতিক' order by id DESC limit 1,2");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                class="news-item news-item-box pt-2">
                                <div class="image-container">
                                    <img src="assets/img/placeholder.png"
                                        data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=90"
                                        alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                        class="lazyload img-loader">
                                </div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-6">
                    <div class="clk-list clk-center">
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আন্তর্জাতিক' order by id DESC limit 3,2");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="clk-item clk-item-regular py-2 ">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                    class="lazyload img-loader">
                            </div>
                            <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                        <?php
                  $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আন্তর্জাতিক' order by id DESC limit 5,3");
                  while ($rowdatatopnews = $informationtopnews->fetch()) {
                     $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                     $text_string_length = strlen($detail_data);

                     if ($text_string_length >= 230) {
                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                     } else {
                        $news_text_data = $detail_data;
                     }
                  ?>
                        <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                            class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                            <div class="image-container">
                                <img src="assets/img/placeholder.png"
                                    data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                    alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                    class="lazyload img-loader">
                            </div>
                            <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="category-header economy-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading economy-heading">
                    <p class="title"><a href="?menu=Category&menuName=অর্থনীতি" class="economy-lc">অর্থনীতি</a></p>
                </div>
                <!-- <div class="d-none d-sm-flex align-items-center">
               <div class="ect-items" data-href="bank">ব্যাংক</div>
               <div class="ect-items" data-href="insurance">বীমা</div>
               <div class="ect-items" data-href="stock-market">শেয়ার বাজার</div>
               <div class="ect-items active" data-href="economy-all">সকল</div>
            </div> -->
                <a href="?menu=Category&menuName=অর্থনীতি" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="economy-articles">
                <div class="row economy-all economy-item">
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="row type-sect-three-left">
                            <?php
                     $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='অর্থনীতি' order by id DESC limit 1,2");
                     while ($rowdatatopnews = $informationtopnews->fetch()) {
                        $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                        $text_string_length = strlen($detail_data);

                        if ($text_string_length >= 230) {
                           $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                        } else {
                           $news_text_data = $detail_data;
                        }
                     ?>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-12 box-news">
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="news-item news-item-box pt-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=90"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-6">
                        <div class="clk-list clk-center">
                            <?php
                     $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='অর্থনীতি' order by id DESC limit 3,2");
                     while ($rowdatatopnews = $informationtopnews->fetch()) {
                        $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                        $text_string_length = strlen($detail_data);

                        if ($text_string_length >= 230) {
                           $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                        } else {
                           $news_text_data = $detail_data;
                        }
                     ?>
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                class="clk-item clk-item-regular py-2 ">
                                <div class="image-container">
                                    <img src="assets/img/placeholder.png"
                                        data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                        alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                                </div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                            <?php } ?>
                            <?php
                     $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='অর্থনীতি' order by id DESC limit 5,3");
                     while ($rowdatatopnews = $informationtopnews->fetch()) {
                        $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                        $text_string_length = strlen($detail_data);

                        if ($text_string_length >= 230) {
                           $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                        } else {
                           $news_text_data = $detail_data;
                        }
                     ?>
                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                                <div class="image-container">
                                    <img src="assets/img/placeholder.png"
                                        data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                        alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                                    <i class="fa fa-play-circle video-icon"></i>
                                </div>
                                <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row bank economy-item" style="display: none"></div>
                <div class="row insurance economy-item" style="display: none"></div>
                <div class="row stock-market economy-item" style="display: none"></div>
            </div>
        </div>
    </div>
</div>
<div class="bg-section-two">
    <div class="container pt-3 m-pt-2">
        <div class="row">
            <div class="col-md-3">
                <div class="category-header law-courts-ch d-flex justify-content-between align-items-center mt-2">
                    <div class="heading custom-heading">
                        <p class="title"><a href="?menu=Category&menuName=স্বাস্থ্য" class="law-courts-lc">স্বাস্থ্য</a>
                        </p>
                    </div>
                    <a href="?menu=Category&menuName=স্বাস্থ্য" class="d-none d-sm-flex">
                        <div class="read-more d-flex justify-content-end align-items-center">
                            <p>আরও খবর</p>
                            <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="blk-list scaled">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='স্বাস্থ্য' order by id DESC limit 1,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-blk py-2 news-blk-image">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='স্বাস্থ্য' order by id DESC limit 2,2");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item news-item-regular py-2">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>"class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 probash">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="category-header probash-ch d-flex justify-content-between align-items-center mt-2">
                            <div class="heading custom-heading">
                                <p class="title"><a href="?menu=Category&menuName=প্রবাস" class="probash-lc">প্রবাস</a>
                                </p>
                            </div>
                            <!-- <div class="px-2 menu-scroll probash-menu-scroll menu-scroll-left inactive" style="font-size: 22px;"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></div>
                     <div class="d-none d-sm-flex align-items-center overflow-hidden probash-country-items" style="white-space: nowrap;">
                        <div class="ct-items" data-href="usa">যুক্তরাষ্ট্র</div>
                        <div class="ct-items" data-href="canada">কানাডা</div>
                        <div class="ct-items" data-href="uk">যুক্তরাজ্য</div>
                        <div class="ct-items" data-href="uae">সংযুক্ত আরব আমিরাত</div>
                        <div class="ct-items" data-href="spain">স্পেন</div>
                        <div class="ct-items" data-href="portugal">পর্তুগাল</div>
                        <div class="ct-items" data-href="italy">ইতালি</div>
                        <div class="ct-items" data-href="malaysia">মালয়েশিয়া</div>
                        <div class="ct-items" data-href="qatar">কাতার</div>
                        <div class="ct-items" data-href="oman">ওমান</div>
                        <div class="ct-items" data-href="kuwait">কুয়েত</div>
                        <div class="ct-items active" data-href="probash-all">সকল</div>
                     </div>
                     <div class="px-2 menu-scroll probash-menu-scroll menu-scroll-right active" style="font-size: 22px;"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></div> -->
                            <a href="https://www.dhakapost.com/probash" class="d-none d-sm-flex"
                                style="white-space: nowrap;">
                                <div class="read-more d-flex justify-content-end align-items-center">
                                    <p>আরও খবর</p>
                                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 m-px-0 third-right pt-1">
                        <div class="regular-list scaled">
                            <div class="row probash-all country-item">
                                <?php
                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='প্রবাস' order by id DESC limit 0,8");
                        while ($rowdatatopnews = $informationtopnews->fetch()) {
                           $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                           $text_string_length = strlen($detail_data);

                           if ($text_string_length >= 230) {
                              $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                           } else {
                              $news_text_data = $detail_data;
                           }
                        ?>
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                                    class="news-item news-item-regular py-2 col-md-6 ">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png"
                                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                                            class="lazyload img-loader">
                                    </div>
                                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                                </a>
                                <?php } ?>
                            </div>
                            <div class="row usa country-item" style="display: none"></div>
                            <div class="row canada country-item" style="display: none"></div>
                            <div class="row uk country-item" style="display: none"></div>
                            <div class="row uae country-item" style="display: none"></div>
                            <div class="row spain country-item" style="display: none"></div>
                            <div class="row portugal country-item" style="display: none"></div>
                            <div class="row italy country-item" style="display: none"></div>
                            <div class="row malaysia country-item" style="display: none"></div>
                            <div class="row qatar country-item" style="display: none"></div>
                            <div class="row oman country-item" style="display: none"></div>
                            <div class="row kuwait country-item" style="display: none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-header law-courts-ch d-flex justify-content-between align-items-center mt-2">
                    <div class="heading custom-heading">
                        <p class="title"><a href="?menu=Category&menuName=আইন-আদালত" class="law-courts-lc">আইন-আদালত</a>
                        </p>
                    </div>
                    <a href="?menu=Category&menuName=আইন-আদালত" class="d-none d-sm-flex">
                        <div class="read-more d-flex justify-content-end align-items-center">
                            <p>আরও খবর</p>
                            <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                        </div>
                    </a>
                </div>
                <div class="blk-list scaled">
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আইন-আদালত' order by id DESC limit 1,1");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item-blk py-2 news-blk-image">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                    <?php
               $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='আইন-আদালত' order by id DESC limit 2,2");
               while ($rowdatatopnews = $informationtopnews->fetch()) {
                  $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                  $text_string_length = strlen($detail_data);

                  if ($text_string_length >= 230) {
                     $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
                  } else {
                     $news_text_data = $detail_data;
                  }
               ?>
                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                        class="news-item news-item-regular py-2">
                        <div class="image-container">
                            <img src="assets/img/placeholder.png"
                                data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                                alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                        </div>
                        <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-2 ocs-section exclusive-section">
    <div class="container pt-3 m-pt-2">
        <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
            <div class="heading lifestyle-heading">
                <p class="title"><a href="?menu=Latest" class="lifestyle-lc">এক্সক্লুসিভ</a></p>
            </div>
            <a href="?menu=Latest">
                <div class="read-more d-flex justify-content-end align-items-center">
                    <p>আরও খবর</p>
                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="row ocs-items mt-2">
            <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news order by id DESC limit 0,1");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }
         ?>
            <div class="col-sm-3 m-scroll-item align-items-stretch d-flex">
                <a class="ocs card"
                    href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png" class="lazyload img-loader card-img-top"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php
         $informationtopnews = $pdo->query("select  * from  tbl_news order by id DESC limit 1,3");
         while ($rowdatatopnews = $informationtopnews->fetch()) {
            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
            $text_string_length = strlen($detail_data);

            if ($text_string_length >= 230) {
               $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
            } else {
               $news_text_data = $detail_data;
            }
         ?>
            <div class="col-sm-3 m-scroll-item align-items-stretch d-none d-sm-flex">
                <a class="ocs card"
                    href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png" class="lazyload img-loader card-img-top"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container pt-3 m-pt-2 pb-3">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading lifestyle-heading">
                    <p class="title"><a href="?menu=Category&menuName=লাইফস্টাইল" class="lifestyle-lc">লাইফস্টাইল</a>
                    </p>
                </div>
                <a href="?menu=Category&menuName=লাইফস্টাইল" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="blk-list scaled">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='লাইফস্টাইল' order by id DESC limit 0,1");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item-blk py-2 news-blk-image">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='লাইফস্টাইল' order by id DESC limit 1,2");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-regular py-2">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="category-header technology-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading custom-heading">
                    <p class="title"><a href="?menu=Category&menuName=তথ্যপ্রযুক্তি"
                            class="technology-lc">তথ্যপ্রযুক্তি</a></p>
                </div>
                <a href="?menu=Category&menuName=তথ্যপ্রযুক্তি" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="blk-list scaled">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='তথ্যপ্রযুক্তি' order by id DESC limit 0,1");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item-blk py-2 news-blk-image">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='তথ্যপ্রযুক্তি' order by id DESC limit 0,1");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-regular py-2">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="category-header religion-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading islam-heading">
                    <p class="title"><a href="?menu=Category&menuName=ধর্ম" class="religion-lc">ধর্ম</a></p>
                </div>
                <a href="?menu=Category&menuName=ধর্ম" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="blk-list scaled">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='ধর্ম' order by id DESC limit 1,1");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item-blk py-2 news-blk-image">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='ধর্ম' order by id DESC limit 2,2");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-regular py-2">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="category-header tourism-ch d-flex justify-content-between align-items-center mt-2">
                <div class="heading custom-heading">
                    <p class="title"><a href="?menu=Category&menuName=চাকরি" class="tourism-lc">চাকরি</a></p>
                </div>
                <a href="?menu=Category&menuName=চাকরি" class="d-none d-sm-flex">
                    <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও খবর</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                    </div>
                </a>
            </div>
            <div class="blk-list scaled">
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='চাকরি' order by id DESC limit 0,1");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item-blk py-2 news-blk-image">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=175"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
                <?php
            $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='চাকরি' order by id DESC limit 1,2");
            while ($rowdatatopnews = $informationtopnews->fetch()) {
               $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
               $text_string_length = strlen($detail_data);

               if ($text_string_length >= 230) {
                  $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 220));
               } else {
                  $news_text_data = $detail_data;
               }
            ?>
                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>"
                    class="news-item news-item-regular py-2">
                    <div class="image-container">
                        <img src="assets/img/placeholder.png"
                            data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90"
                            alt="<?php echo $rowdatatopnews["title_bn"]; ?>" class="lazyload img-loader">
                    </div>
                    <h2 class="title"><?php echo $rowdatatopnews["title_bn"]; ?></h2>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script>
var api_url = 'https://api.pray.zone/v2/times/today.json?ip=auto';
document.addEventListener("DOMContentLoaded", function() {
    PrayerTimesApi();
});
</script>