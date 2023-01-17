<?php
if (isset($_GET["menuName"])) {
    $Detail = $_GET["menuName"];

?>

    <style>
        .lead-top span {
            color: #525050 !important
        }

        .news-item-lead {
            margin: 0;
            padding: 0
        }

        @media only screen and (max-width: 991.98px) {
            .cat-two-items .box-news:nth-child(2) {
                padding-top: 0 !important
            }

            .cat-two-items .box-news:nth-child(1) {
                border-bottom: none !important;
                padding-bottom: 0 !important
            }
        }

        @media only screen and (max-width: 767.98px) {
            .category-container .news-item-lead h2 {
                font-weight: 400
            }

            .category-container .lead-news {
                border-bottom: none;
            }

            .category-container .news-item-box {
                display: flex
            }

            .category-container .news-item-box img {
                width: 110px;
                min-width: 110px;
                max-width: 110px;
                height: 75px;
                object-fit: cover
            }

            .category-container .news-item-box h2 {
                margin: 0 8px;
                width: 100%;
            }

            .category-container .box-news a {
                border-bottom: 1px solid var(--border-color-light)
            }

            .m-border-bottom-none {
                border-bottom: none !important
            }

            .lead-top {
                margin-bottom: 0
            }

            .cat-lead-container {
                border-bottom: none !important;
                margin-bottom: 0 !important
            }
        }

        @media only screen and (max-width: 575.98px) {
            .news-item-lead {
                margin: 0 -15px;
                padding: 0
            }
        }
    </style>
    <style>
        .sk-chase {
            width: 40px;
            height: 40px;
            position: relative;
            animation: sk-chase 2.5s infinite linear both
        }

        .sk-chase-dot {
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0;
            animation: sk-chase-dot 2s infinite ease-in-out both
        }

        .sk-chase-dot:before {
            content: '';
            display: block;
            width: 25%;
            height: 25%;
            background-color: var(--brand-color);
            border-radius: 100%;
            animation: sk-chase-dot-before 2s infinite ease-in-out both
        }

        .sk-chase-dot:nth-child(1) {
            animation-delay: -1.1s
        }

        .sk-chase-dot:nth-child(2) {
            animation-delay: -1s
        }

        .sk-chase-dot:nth-child(3) {
            animation-delay: -.9s
        }

        .sk-chase-dot:nth-child(4) {
            animation-delay: -.8s
        }

        .sk-chase-dot:nth-child(5) {
            animation-delay: -.7s
        }

        .sk-chase-dot:nth-child(6) {
            animation-delay: -.6s
        }

        .sk-chase-dot:nth-child(1):before {
            animation-delay: -1.1s
        }

        .sk-chase-dot:nth-child(2):before {
            animation-delay: -1s
        }

        .sk-chase-dot:nth-child(3):before {
            animation-delay: -.9s
        }

        .sk-chase-dot:nth-child(4):before {
            animation-delay: -.8s
        }

        .sk-chase-dot:nth-child(5):before {
            animation-delay: -.7s
        }

        .sk-chase-dot:nth-child(6):before {
            animation-delay: -.6s
        }

        @keyframes sk-chase {
            100% {
                transform: rotate(360deg)
            }
        }

        @keyframes sk-chase-dot {

            100%,
            80% {
                transform: rotate(360deg)
            }
        }

        @keyframes sk-chase-dot-before {
            50% {
                transform: scale(.4)
            }

            0%,
            100% {
                transform: scale(1)
            }
        }
    </style>
    <style>
        .cat-header a {
            font-size: 38px;
        }

        .cat-header {
            border-bottom: 1px solid #d8d8d8;
        }

        .section-bb {
            border-bottom: 2px solid #212020;
        }

        .subcategories {
            flex-wrap: wrap;
            padding: 0 0 8px;
        }

        .subcategories a {
            font-size: 17px;
            margin-top: 8px;
            background: #eee;
            margin-right: 10px;
            margin-bottom: 5px;
        }

        .identifier:not(:first-child) {
            margin-left: 12px;
            margin-top: 8px;
        }

        .identifier:not(:last-child) {
            margin-right: 12px;
        }

        .identifier {
            width: 5px;
            height: 5px;
            background: var(--brand-color);
        }

        .cat-item.active {
            font-weight: bold;
        }
    </style>
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
                        <div class="cat-lead-container container border-bottom my-2">
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
                                                <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=640&amp;height=360" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="640" height="335" class="lazyload img-loader">
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
                                        $informationtopnews = $pdo->query("select  * from  tbl_news where categoryid='$Detail' order by id DESC limit 1,2");
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
                                                    <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="330" height="175" class="lazyload img-loader">
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
                                        <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="330" height="175" class="lazyload img-loader">
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
                            <div id='div-gpt-ad-1624960273857-0' style='min-width: 300px; min-height: 250px;max-width: 300px; background-color: #DFDFDF;'>
                                <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                                <script>
                                    googletag.cmd.push(function() {
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
                                            <img class="img-loader" src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=130&amp;height=90" alt="<?php echo $rowdatatopnews["title_bn"]; ?>">
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