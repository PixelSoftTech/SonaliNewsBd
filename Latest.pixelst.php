
    <style>
        .d-flex.justify-content-end.fix-order-1.m-justify-content-center.m-my-2 {
            position: -webkit-sticky;
            position: sticky;
            top: 56px;
            z-index: 1019;
        }

        .todays-news-title {
            font-size: 30px;
            margin-bottom: 15px;
        }

        .tab-content .tab-pane {
            height: auto;
            overflow-y: unset;
        }

        .topic-title {
            margin-bottom: 5px;
            display: inline-flex;
        }

        .tab-pane {
            background: #f9f9f9;
            padding: 0;
        }

        .topic-title h1 {
            font-size: 36px;
            line-height: 1.4;
        }

        .topic-title h1 .fa-tag {
            font-size: 30px;
        }

        .topic-title .fa-tag {
            font-size: 30px;
            margin-right: 15px;
            margin-top: 13px;
        }

        .topic-text {
            margin-bottom: 10px;
        }

        .topic-text img {
            width: 150px;
            float: left;
            margin-right: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .topic-text p {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .topic-links p a {
            display: inline-block;
            position: relative;
        }

        .topic-links p a:hover {
            color: #3281a5;
        }

        .topic-links p a:after {
            content: "";
            background: #3281a5;
            bottom: 1px;
            left: 0;
            position: absolute;
            width: 100%;
            height: 2px;
        }

        .related-topics {
            float: left;
        }

        .related-topics span {
            font-size: 18px;
            margin-bottom: 5px;
            display: block;
        }

        .related-topics ul li {
            list-style: none;
            display: inline-flex;
            margin-bottom: 15px;
        }

        .related-topics ul li a {
            background: #dadada;
            padding: 5px 15px;
            margin-right: 10px;
            border-radius: 5px;
            color: #000;
        }

        #btnShowMore {
            border: 0;
            font-size: 13px;
            color: #3491f1;
        }

        #btnHideMore {
            border: 0;
            font-size: 14px;
            color: #3491f1;
        }

        .topic-content {
            display: flex;
            justify-content: space-between;
        }

        .topic-content .topic-content-text a {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .topic-content-text time {
            color: rgba(0, 0, 0, .5);
            font-size: 14px;
            margin-bottom: 8px;
            display: block;
        }

        .topic-content .topic-content-img img {
            width: 200px;
            height: 134px;
            object-fit: cover;
            margin-left: 20px;
        }

        .topic-border-bottom {
            border-bottom: 1px solid #e2e2e2;
        }

        .topic-tab .topic-tab-btn {
            background: #f9e1e1 !important;
            border-radius: 0;
            border: 0;
            width: 50%;
            color: #000;
            text-align: center;
            border-bottom: 3px solid transparent;
            transition: .3s ease-in-out;
        }

        .topic-tab .topic-tab-btn h2 {
            font-size: 16px;
        }

        .topic-tab .topic-tab-btn:hover {
            border-bottom: 3px solid #970808;
        }

        .topic-tab .topic-tab-btn.active {
            background: #CF4B4B !important;
            color: #fff;
            border-bottom: 3px solid #970808;
        }

        #snackbar {
            visibility: hidden;
            background-color: #00000094;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }


        /* Normal desktop :1200px. */
        @media (min-width: 1200px) and (max-width: 1500px) {


        }

        @media  screen and (min-width: 1300px) {
            .container {
                max-width: 1270px
            }


        }


        /* small mobile :320px. */
        @media (max-width: 767px) {
            .todays-news-title {
                font-size: 22px;
            }

            #snackbar {
                left: 32%;
            }

            .topic-title h1 {
                font-size: 24px;
            }

            .topic-title h1 .fa-tag {
                font-size: 22px;
            }

            .topic-title .fa-tag {
                font-size: 22px;
                margin-right: 10px;
                margin-top: 8px;
            }

            .topic-text img {
                width: 80px;
                margin-right: 10px;
                border-radius: 50%;
                margin-bottom: 10px;
            }

            .topic-text p {
                display: block;
            }

            .topic-title ul li a {
                margin-right: 5px;
                margin-top: 10px;
            }

            .topic-content .topic-content-img img {
                width: 110px;
                height: 70px;
                margin-left: 10px;
            }

            .topic-content .topic-content-text a {
                font-size: 19px;
                line-height: 26px;
                font-weight: 500;
                margin-bottom: 0;
            }

            .topic-content-text time {
                margin-bottom: 0;
            }

            .m-justify-content-center {
                justify-content: center !important;
            }

        }
    </style>
    <main role="main">
        <section class="tag-page-area pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="todays-news-title">
                            <h1 class="font-weight-bold py-2 todays-news-title">আজকের খবর</h1>
                        </div>
                        <div class="share-top d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
                            <div class="d-flex align-items-center">
                                <div class="mb-0 d-flex flex-column text-align-center border-right pr-2 share-counter">
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.dhakapost.com%2Flatest-news&layout=button_count&size=large&appId=3102640556528237&width=112&height=28" width="112" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                </div>
                                <div class="py-3 d-flex align-items-center justify-content-center social_list social-media-icons">
                                    <a class="pl-2">
                                        <div class="social-icon twitter"><i class="fa fa-twitter"></i></div>
                                    </a>
                                    <a class="pl-2">
                                        <div class="social-icon whatsapp"><i class="fa fa-whatsapp"></i></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <div class="nav nav-tabs topic-tab" id="nav-tab">
                                <a class="nav-item nav-link topic-tab-btn active" data-toggle="tab" href="#nav-latest">
                                    <h2>
                                        এই মুহূর্তের সর্বশেষ</h2>
                                </a>
                                <a class="nav-item nav-link topic-tab-btn" data-toggle="tab" href="#nav-selected">
                                    <h2>
                                        সর্বাধিক পঠিত</h2>
                                </a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            
                            <div class="tab-pane fade show active" id="nav-latest">
                                <div class="article-box pt-3 more-contents">
                                    <?php
                                    $informationtopnews = $pdo->query("select  * from  tbl_news  order by id DESC limit 0,25");
                                    
                                    while ($rowdatatopnews = $informationtopnews->fetch()) {
                                    $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                                    $text_string_length = strlen($detail_data);

                                    if ($text_string_length >= 450) {
                                        $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                                    } else {
                                        $news_text_data = $detail_data;
                                    }
                                    ?>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ওমানে বাংলাদেশের শুভসূচনা " data-href="https://www.dhakapost.com/sports/hockey/165239">
                                        <div class="topic-content-text">
                                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                                <?php echo $rowdatatopnews["title_bn"]; ?>
                                            </a>
                                            <time datetime="2023-01-02 13:28:10"><p class="news-time" style="color: rgba(0,0,0,.7);"><?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatopnews['publish_date'] . " " . $rowdatatopnews['publish_time']))); ?> মিনিট </p></time>
                                            <p class="d-none d-sm-block"><?php echo $news_text_data; ?>...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                                <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="ওমানে বাংলাদেশের শুভসূচনা " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-selected">
                                <div class="article-box pt-3">
                                    <?php
                                    $informationtopnews = $pdo->query("select  * from  tbl_news  order by viewers DESC limit 0,15");

                                    while ($rowdatatopnews = $informationtopnews->fetch()) {
                                        $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                                        $text_string_length = strlen($detail_data);

                                        if ($text_string_length >= 450) {
                                            $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 420));
                                        } else {
                                            $news_text_data = $detail_data;
                                        }

                                    ?>
                                        <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="" data-href="">
                                            <div class="topic-content-text">
                                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                                    <?php echo $rowdatatopnews["title_bn"]; ?>
                                                </a>
                                                <time datetime="2023-01-02 13:28:10"><p class="news-time" style="color: rgba(0,0,0,.7);"><?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatopnews['publish_date'] . " " . $rowdatatopnews['publish_time']))); ?> মিনিট </p></time>
                                                <p class="d-none d-sm-block"><?php echo $news_text_data; ?>...</p>
                                            </div>
                                            <div class="topic-content-img">
                                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                                    <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="নিউজ ফটো" class="lazyload img-loader">
                                                </a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end fix-order-1 m-justify-content-center m-my-2">

                            <div id='' style='max-width: 100%; width: 300px; height: 250px; background-color: #f9d5d5ab;'>
                                <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                                <!-- <script type="f06bb2af6b94c87471f8f77a-text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1620297441942-0');
                                    });
                                </script> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
