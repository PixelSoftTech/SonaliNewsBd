<?php
if (isset($_GET["Detail"])) {
    $Detail = $_GET["Detail"];


    $informationlastone = $pdo->query("select  * from  tbl_news where id='$Detail'");
    $rowdatatop_news = $informationlastone->fetch();

    $news_category = $rowdatatop_news['categoryid'];
    $newser_name = $rowdatatop_news['ReporterName'];
    $img = $rowdatatop_news['image'];
    $video = $rowdatatop_news['VideoLink'];
    $reader_count = $rowdatatop_news['viewers'] + 1;
    $pdo->query("UPDATE  tbl_news set viewers='$reader_count' where id='$Detail' ")
?>
    <style type="text/css">
        #st-1 {
            font-family: "Helvetica Neue", Verdana, Helvetica, Arial, sans-serif;
            ;
            direction: ltr;
            display: block;
            opacity: 1;
            text-align: left;
            z-index: 94034;
        }

        #st-1.st-animated {
            -moz-transition: o 0.2s ease-in, p 0.2s ease-in, a 0.2s ease-in, c 0.2s ease-in, i 0.2s ease-in, t 0.2s ease-in, y 0.2s ease-in;
            -ms-transition: o 0.2s ease-in, p 0.2s ease-in, a 0.2s ease-in, c 0.2s ease-in, i 0.2s ease-in, t 0.2s ease-in, y 0.2s ease-in;
            -o-transition: o 0.2s ease-in, p 0.2s ease-in, a 0.2s ease-in, c 0.2s ease-in, i 0.2s ease-in, t 0.2s ease-in, y 0.2s ease-in;
            -webkit-transition: o 0.2s ease-in, p 0.2s ease-in, a 0.2s ease-in, c 0.2s ease-in, i 0.2s ease-in, t 0.2s ease-in, y 0.2s ease-in;
            transition: o 0.2s ease-in, p 0.2s ease-in, a 0.2s ease-in, c 0.2s ease-in, i 0.2s ease-in, t 0.2s ease-in, y 0.2s ease-in;
        }

        #st-1.st-hidden {
            opacity: 0;
        }

        #st-1.st-hide {
            display: none;
        }

        #st-1 .st-btn {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -moz-transition: opacity 0.2s ease-in, top 0.2s ease-in;
            -ms-transition: opacity 0.2s ease-in, top 0.2s ease-in;
            -o-transition: opacity 0.2s ease-in, top 0.2s ease-in;
            -webkit-transition: opacity 0.2s ease-in, top 0.2s ease-in;
            transition: opacity 0.2s ease-in, top 0.2s ease-in;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
            border-radius: 7px;
            border: none;
            cursor: pointer;
            display: inline-block;
            font-size: 12px;
            height: 40px;
            line-height: 40px;
            margin-right: 8px;
            padding: 0 10px;
            position: relative;
            text-align: center;
            top: 0;
            vertical-align: top;
            white-space: nowrap;
        }

        #st-1 .st-btn:last-child {
            margin-right: 0;
        }

        #st-1 .st-btn>svg {
            height: 20px;
            width: 20px;
            position: relative;
            top: 10px;
            vertical-align: top;
        }

        #st-1 .st-btn>img {
            display: inline-block;
            height: 20px;
            width: 20px;
            position: relative;
            top: 10px;
            vertical-align: top;
        }

        #st-1 .st-btn>span {
            -moz-transition: all 0.2s ease-in;
            -ms-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            letter-spacing: 0.5px;
            min-width: 67px;
            opacity: 1;
            padding: 0 6px;
            position: relative;
            vertical-align: top;
        }

        #st-1.st-has-labels .st-btn {
            min-width: 135px;
        }

        #st-1.st-has-labels .st-btn.st-remove-label {
            min-width: 50px;
        }

        #st-1.st-has-labels .st-btn.st-remove-label>span {
            display: none;
        }

        #st-1.st-has-labels .st-btn.st-hide-label>span {
            display: none;
        }

        #st-1 .st-total {
            color: #555;
            display: inline-block;
            font-weight: 500;
            line-height: 15px;
            margin-right: 0;
            max-width: 80px;
            padding: 4px 8px;
            text-align: center;
        }

        #st-1 .st-total.st-hidden {
            display: none;
        }

        #st-1 .st-total>span {
            font-size: 20px;
            line-height: 22px;
            display: block;
            padding: 0;
        }

        #st-1 .st-total>span.st-shares {
            font-size: 12px;
            line-height: 12px;
        }

        #st-1.st-justified {
            display: flex;
            text-align: center;
        }

        #st-1.st-justified .st-btn {
            -moz-flex: 1;
            -ms-flex: 1;
            -webkit-flex: 1;
            flex: 1;
        }

        #st-1 .st-btn:hover {
            opacity: .8;
            top: -4px;
        }

        #st-1 .st-btn[data-network='facebook'] {
            background-color: #eee
        }

        #st-1 .st-btn[data-network='facebook'] img {
            filter: invert(100%) sepia(100%) saturate(22%) hue-rotate(45deg) brightness(107%) contrast(105%)
        }

        #st-1 .st-btn[data-network='facebook']>span {
            color: #000
        }

        #st-1 .st-btn[data-network='messenger'] {
            background-color: #eee
        }

        #st-1 .st-btn[data-network='messenger'] img {
            filter: invert(100%) sepia(100%) saturate(22%) hue-rotate(45deg) brightness(107%) contrast(105%)
        }

        #st-1 .st-btn[data-network='messenger']>span {
            color: #000
        }

        #st-1 .st-btn[data-network='whatsapp'] {
            background-color: #eee
        }

        #st-1 .st-btn[data-network='whatsapp'] img {
            filter: invert(100%) sepia(100%) saturate(22%) hue-rotate(45deg) brightness(107%) contrast(105%)
        }

        #st-1 .st-btn[data-network='whatsapp']>span {
            color: #000
        }

        #st-1 .st-btn[data-network='copy'] {
            background-color: #eee
        }

        #st-1 .st-btn[data-network='copy'] img {
            filter: invert(100%) sepia(100%) saturate(22%) hue-rotate(45deg) brightness(107%) contrast(105%)
        }

        #st-1 .st-btn[data-network='copy']>span {
            color: #000
        }

        #st-1 .st-btn[data-network='print'] {
            background-color: #eee
        }

        #st-1 .st-btn[data-network='print'] img {
            filter: invert(100%) sepia(100%) saturate(22%) hue-rotate(45deg) brightness(107%) contrast(105%)
        }

        #st-1 .st-btn[data-network='print']>span {
            color: #000
        }

        #st-1 .st-btn[data-network='snapchat']>span {
            color: #333
        }
    </style>
    <style>
        .ats-overlay-bottom-wrapper-rendered,
        #av-container #av-inner #gui #close-btn,
        #av-close-btn {
            z-index: 1000 !important;
        }

        .lg-start-zoom {
            background: black;
        }

        .footerNewLinks a {
            display: inline-block;
            margin: 0 15px;
        }

        .footerNewAddress p {
            display: inline-block;
            margin: 0 15px;
        }

        .footerNewAddress a abbr {
            text-decoration: none;
        }

        .footerText {
            border-top: 1px solid #20353e;
            padding-top: 10px;
            margin-bottom: 15px;
            text-align: center;
        }

        .footerText h1 {
            display: inline;
            font-size: 15px;
            line-height: 1.3;
            font-weight: normal;
        }

        .footerText p {
            display: inline;
            font-size: 15px;
            line-height: 1.3;
            font-weight: normal;
        }

        /* Tablet desktop :768px. */
        @media (min-width: 768px) and (max-width: 991px) {
            .footer-link {
                display: flex;
                justify-content: center;
            }

            .footer-link a {
                margin: 0 10px;
            }

        }

        /* small mobile :320px. */
        @media (max-width: 767px) {
            .footer-link {
                display: flex;
                justify-content: center;
                flex-flow: wrap;
            }

            .footer-link a {
                margin: 0 10px;
            }

            .footerNewLinks a {
                margin: 0 10px;
                margin-bottom: 5px;
            }

            .footerNewAddress p {
                margin: 0 3px;
                margin-bottom: 10px;
            }

        }

        /* Large Mobile :480px. */
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            .container {
                width: 450px
            }

            .footer-link {
                display: flex;
                justify-content: center;
                flex-flow: wrap;
            }

            .footer-link a {
                margin: 0 10px;
            }

            .footerNewLinks a {
                margin: 0 10px;
                margin-bottom: 5px;
            }

            .footerNewAddress p {
                margin: 0 3px;
                margin-bottom: 10px;
            }

        }
    </style>
    <style>
        @media print {
            @page {
                size: A4;
            }

            a:link {
                border-bottom: none !important;
                text-decoration: none !important;
            }

            a[href]:after {
                content: none !important;
            }

            .show_advertisement,
            .ap-container {
                display: none !important;
            }

            .adsbygoogle {
                display: none;
            }

        }

        .author-reporting-area span {
            margin: 0 0 0 8px;
        }

        table caption {
            padding-top: 0 !important;
            padding-bottom: .75rem;
            color: #6c757d;
            text-align: left;
            caption-side: top !important;
        }

        table {
            margin-bottom: 15px;
        }

        tr:nth-child(even) {
            background-color: #f7f7f7;
        }

        aside.quote {
            font-size: 22px;
        }

        .trc_user_exclude_btn {
            z-index: 1 !important;
        }

        .lg-outer.lg-visible {
            z-index: 99999 !important;
        }

        .google-news-box img {
            width: 100%;
        }

        @media (max-width: 575.98px) {
            .author-reporting-area {
                flex-direction: column;
                flex-flow: wrap;
            }

            .author-reporting-area span {
                margin: 0;
            }

            .web-stories {
                margin: 0 -23px 0 -15px;
            }

            .details-writer {
                flex-direction: column;
                align-items: start !important;
            }

            .google-news-box img {
                width: 100%;
            }

            .google-news-box {
                display: none !important;
            }

        }

        @media (max-width: 719px) {
            .fix-order-1 {
                order: -1;
                justify-content: center !important;
                padding-bottom: 1rem;
            }

            .fix-padding-0 {
                padding: 0 !important;
            }

            .details-writer {
                flex-direction: column;
                align-items: start !important;
            }

            .google-news-box img {
                width: 100%;
            }

            .google-news-box {
                display: none !important;
            }

        }

        @media (min-width: 576px) {
            .sticky-container {
                position: -webkit-sticky;
                position: sticky;
                top: 60px;
            }
        }
    </style>
    <style>
        .news-details h2 {
            font-size: 21px;
            margin-bottom: 15px;
            line-height: 30px;
            font-weight: 600;
        }

        .news-details h3 {
            font-size: 19px;
            margin-bottom: 15px;
            line-height: 30px;
            font-weight: 600;
        }

        .news-details ul li {
            list-style-position: inside;
        }

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
        /* The snackbar - position it at the bottom and in the middle of the screen */
        #snackbar {
            visibility: hidden;
            /* Hidden by default. Visible on click */
            background-color: #00000094;
            /* Black background color */
            color: #fff;
            /* White text color */
            text-align: center;
            /* Centered text */
            border-radius: 2px;
            /* Rounded borders */
            padding: 16px;
            /* Padding */
            position: fixed;
            /* Sit on top of the screen */
            z-index: 21147483647;
            /* Add a z-index if needed */
            left: 50%;
            /* Center the snackbar */
            bottom: 100px;
            /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible;
            /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
            However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @media (max-width: 575.98px) {
            #snackbar {
                left: 32%;
            }
        }
    </style>
    <!-- <div id='div-gpt-ad-1624691711930-0'>
        <script type="56aae2490e98c67d1ce6410c-text/javascript">
            googletag.cmd.push(function() {
                googletag.display('div-gpt-ad-1624691711930-0');
            });
        </script>
    </div>-->

    <main role="main">

        <!-- <div id='div-gpt-ad-1670239862432-0'>
            <script type="56aae2490e98c67d1ce6410c-text/javascript">
                googletag.cmd.push(function() {
                    googletag.display('div-gpt-ad-1670239862432-0');
                });
            </script>
        </div> -->
        <div class="pt-2 pb-2 details">
            <div class="container">
                <div class="news-items">
                    <div class="row news-item-0">
                        <div class="col-xl-9 col-lg-8 news-root-container-0">
                            <ol class="d-flex" style="padding: 0; margin: 8px 0 16px;">
                                <li class="breadcrumb-item"><a href="<?php echo $base_url; ?>">প্রচ্ছদ</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="?menu=NewsCategory&menuName=<?php echo $rowdatatop_news["categoryid"]; ?>" rel="category tag"><?php echo $rowdatatop_news["categoryid"]; ?></a></li>
                            </ol>
                            <article class="details-body">
                                <h1 class="news-title">
                                    <?php echo $rowdatatop_news["title_bn"]; ?>
                                </h1>
                                <div class="details-writer d-flex align-items-center justify-content-between my-2 py-2" style="gap: 10px;">
                                    <div class="d-flex align-items-center">
                                        <div style="width: 38px;height: 38px;border-radius: 19px; overflow: hidden; border: 1px solid #970808;">
                                            <img class="author-image" style="width: 100%;" src="assets/img/authorIcon.png" data-src="ReporterImage/<?php echo $rowdatatop_news['ReporterName']; ?>" alt="News Depend Desk">
                                        </div>
                                        <div class="d-flex justify-content-start flex-column ml-2">
                                            <div class="d-flex align-items-center">
                                                <p class="author">প্রতিনিধিঃ <?php echo $rowdatatop_news['ReporterName']; ?></p>
                                            </div>
                                            <p class="news-time" style="color: rgba(0,0,0,.7);"><?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatop_news['publish_date'] . " " . $rowdatatop_news['publish_time']))); ?> মিনিট </p>
                                        </div>
                                    </div>
                                    <!-- <div class="google-news-box d-flex align-items-center">
                                    <a href="https://news.google.com/publications/CAAqBwgKMKLnogsw5fG6Aw?hl=bn&amp;gl=BD&amp;ceid=BD%3Abn" rel="nofollow noopener" target="_blank">
                                        <img src="https://cdn.dhakapost.com/media/common/google-news-follow.gif" alt="google news">
                                    </a>
                                </div> -->
                                </div>
                                <div class="mb-0 share-top mt-2 d-flex align-items-center d-print-none justify-content-between">

                                    <div class="sharethis-inline-share-buttons st-left  st-inline-share-buttons st-animated" style="z-index: 1;" id="st-1">
                                        <div class="st-total ">
                                            <span class="st-label">44</span>
                                            <span class="st-shares">
                                                Shares
                                            </span>
                                        </div>
                                        <div class="st-btn st-first  st-remove-label" data-network="facebook" style="display: inline-block;">
                                            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">

                                        </div>
                                        <div class="st-btn  st-remove-label" data-network="messenger" style="display: inline-block;">
                                            <img alt="messenger sharing button" src="https://platform-cdn.sharethis.com/img/messenger.svg">

                                        </div>
                                        <div class="st-btn  st-remove-label" data-network="whatsapp" style="display: inline-block;">
                                            <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">

                                        </div>
                                        <div class="st-btn  st-remove-label" data-network="copy" style="display: inline-block;">
                                            <img alt="copy sharing button" src="https://platform-cdn.sharethis.com/img/copy.svg">

                                        </div>
                                        <div class="st-btn st-last  st-remove-label" data-network="print" style="display: none;">
                                            <img alt="print sharing button" src="https://platform-cdn.sharethis.com/img/print.svg">

                                        </div>
                                    </div>
                                    <!-- <div class="mb-0 d-flex align-items-center fs-mapper fs-mapper-0">
                                        <button type="button" class="btn btn-light social-icon share-social-icon fsi fsi-0">
                                            ফ+
                                        </button>
                                        <button type="button" class="btn btn-light social-icon share-social-icon fsd fsd-0">
                                            ফ-
                                        </button>
                                    </div> -->
                                </div>
                                <hr class="pb-2 fix-padding-0">
                                <div class="news-image">
                                    <?php
                                    if ($video == 'NULL' ||  $video == '') {
                                        $pic = $img;
                                        echo '<img src="NewsImage/' . $pic . '" alt="পোস্ট ফটো" class="lg-image" />';
                                    } elseif ($video != 'NULL' || $video != '') {
                                        $vid = $video;
                                        echo '<iframe frameborder="0" width="900" height="475" src="https://www.youtube.com/embed/' . $vid . '" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                                    } ?>
                                </div>
                                <div class="news-details" style="text-align: justify;">
                                    <p style="text-align: justify;"><?php echo $rowdatatop_news["detail_bn"]; ?></p>
                                </div>
                                <?php
                                if ($video != 'NULL' &&  $video != '' && $img != 'NULL' &&  $img != '') {
                                    $pic = $img;
                                ?>
                                    <hr class="pb-2 fix-padding-0">
                                    <div class="news-image">
                                        <img src="NewsImage/<?php echo $pic; ?>" alt="পোস্ট ফটো" class="lg-image" />
                                    </div>
                                    <hr class="pb-2 fix-padding-0">
                                <?php } ?>
                                <!-- <div class="tags d-flex align-items-center flex-wrap d-print-none">
                                <div class="view-more-round" style="margin: 5px;"><a style="color: #000;" href="https://www.dhakapost.com/topic/মালদ্বীপ">মালদ্বীপ</a>
                                </div>
                                <div class="view-more-round" style="margin: 5px;"><a style="color: #000;" href="https://www.dhakapost.com/topic/অগ্নিকাণ্ড">অগ্নিকাণ্ড</a>
                                </div>
                            </div> -->
                                <div class="content-below-ad content-below-ad-0 d-flex justify-content-center d-print-none">
                                    <div id='' style='min-width: 300px; min-height: 250px; background-color: #f9d5d5ab;'>
                                        <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                                        <!-- <script type="56aae2490e98c67d1ce6410c-text/javascript">
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1625305399072-0');
                                        });
                                    </script> -->
                                    </div>
                                </div>
                                <div class="py-2 d-print-none">
                                    <div id="fb-root"></div>
                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=3102640556528237&autoLogAppEvents=1" nonce="Ab5pPkTO" type="56aae2490e98c67d1ce6410c-text/javascript"></script>
                                    <div class="fb-comments" data-href="https://www.dhakapost.com/national/165879" data-width="100%" data-numposts="5"></div>
                                </div>
                            </article>
                            <!-- <div class="d-flex justify-content-center d-print-none">
                                <div id='' style='min-width: 300px; min-height: 90px; background-color: #f9d5d5ab;'>
                                    <h4 style="text-align: center; padding-top: 15px; color: #fff">For Add <br>300 X 250</h4>
                                    <script type="56aae2490e98c67d1ce6410c-text/javascript">
                                        googletag.cmd.push(function() {
                                            googletag.display('div-gpt-ad-1643184983419-0');
                                        });
                                    </script>
                                </div>
                            </div> -->
                            <div class="d-print-none">
                                <div class="py-3 m-py-2">
                                    <div class="category-header d-flex justify-content-between align-items-center mt-2">
                                        <div class="heading recent-heading">
                                            <p class="title">আরও পড়ুন</p>
                                        </div>
                                    </div>
                                    <div class="more-items pt-2">
                                        <div class="row d-flex justify-content-center">
                                            <?php
                                            $informationtwotopnews = $pdo->query("select  * from  tbl_news where news_live_time<='$news_publish_time' and categoryid='$news_category' order by id DESC limit 0,6");
                                            while ($rowdatatwotopnews = $informationtwotopnews->fetch()) {
                                            ?>
                                                <div class="col-sm-4 box-news">
                                                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatwotopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatwotopnews["id"]; ?>" class="news-item news-item-box">
                                                        <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatwotopnews['image']; ?>" alt="" class="img-loader">
                                                        <h2 class="title"><?php echo $rowdatatwotopnews["title_bn"]; ?></h2>
                                                    </a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!-- <div class="col-sm-4 box-news">
                                            <a href="https://www.dhakapost.com/national/165872" class="news-item news-item-box">
                                                <img src="assets/img/placeholder.png" data-src="https://cdn.dhakapost.com/media/imgAll/BG/2023January/pl-20230109160035.jpg" alt="১০ দিনে মেট্রোরেলের আয় ৮৮ লাখ টাকা" class="img-loader">
                                                <h2 class="title">১০ দিনে মেট্রোরেলের আয় ৮৮ লাখ টাকা</h2>
                                            </a>
                                        </div>
                                        <div class="col-sm-4 box-news">
                                            <a href="https://www.dhakapost.com/national/165868" class="news-item news-item-box">
                                                <img src="assets/img/placeholder.png" data-src="https://cdn.dhakapost.com/media/imgAll/BG/2023January/metro-20230109155554.jpg" alt="মেট্রোরেলের সময়সূচিতে পরিবর্তন" class="img-loader">
                                                <h2 class="title">মেট্রোরেলের সময়সূচিতে পরিবর্তন</h2>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 d-print-none">
                            <div class="probash">
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
                                                <p class="title">
                                                    <a href="https://www.dhakapost.com/national" class="politics-lc"><?php echo $rowdatatop_news["categoryid"]; ?> থেকে আরও</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="regular-list scaled m-px-0">
                                            <?php
                                            $informationtwotopnews = $pdo->query("select  * from  tbl_news where news_live_time<='$news_publish_time' and categoryid='$news_category' order by id DESC limit 6,7");
                                            while ($rowdatatwotopnews = $informationtwotopnews->fetch()) {
                                            ?>
                                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatwotopnews["categoryid"]; ?>&Detail=<?php echo $rowdatatwotopnews["id"]; ?>" class="news-item news-item-regular py-2">
                                                    <div class="image-container">
                                                        <img src="assets/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatwotopnews['image']; ?>" alt="" class="img-loader">
                                                    </div>
                                                    <h2 class="title"><?php echo $rowdatatwotopnews["title_bn"]; ?></h2>
                                                </a>
                                            <?php } ?>

                                            <!-- <a href="https://www.dhakapost.com/national/165857" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ec-vaban-20230109152511.jpg?width=330&amp;height=186" alt="মনোনয়নপত্র অনলাইনে জমা নিতে চায় ইসি" class="img-loader">
                                                </div>
                                                <h2 class="title">মনোনয়নপত্র অনলাইনে জমা নিতে চায় ইসি</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/national/165855" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/tt-20230109152126.jpg?width=330&amp;height=186" alt="পুলিশ ও সাংবাদিক একে অপরের পরিপূরক : অতিরিক্ত আইজিপি" class="img-loader">
                                                </div>
                                                <h2 class="title">পুলিশ ও সাংবাদিক একে অপরের পরিপূরক : অতিরিক্ত আইজিপি</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/national/165844" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bipu-20230109143739.jpg?width=330&amp;height=186" alt="সৌর ও বায়ু থেকে ২ হাজার মেগাওয়াট বিদ্যুৎ উৎপাদনের পরিকল্পনা" class="img-loader">
                                                </div>
                                                <h2 class="title">সৌর ও বায়ু থেকে ২ হাজার মেগাওয়াট বিদ্যুৎ উৎপাদনের পরিকল্পনা</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/national/165842" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230109143003.jpg?width=330&amp;height=186" alt="ব্যাংকখাত নিয়ে গুজব ছড়াচ্ছে জামায়াত" class="img-loader">
                                                </div>
                                                <h2 class="title">ব্যাংকখাত নিয়ে গুজব ছড়াচ্ছে জামায়াত</h2>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="right-ad-0 advertisement d-flex justify-content-center" style="height: 250px">
                                    <div id='' style='width: 300px; height: 250px;background-color: #f9d5d5ab;'>
                                        <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                                        <!-- <script type="56aae2490e98c67d1ce6410c-text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display('div-gpt-ad-1620297488528-0');
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

                                            <!-- <a href="https://www.dhakapost.com/sports/cricket/165878" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/robin-20230109162254.jpg?width=330&amp;height=175" alt="ইংল্যান্ডের হয়েই খেলতে চান রবিন দাস" class="img-loader">
                                                </div>
                                                <h2 class="title">ইংল্যান্ডের হয়েই খেলতে চান রবিন দাস</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/national/165877" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/f-20230109162103.jpg?width=330&amp;height=175" alt="বিশ্ববাজারের সঙ্গে তেল-গ্যাসের দাম সমন্বয় করা হবে" class="img-loader">
                                                </div>
                                                <h2 class="title">বিশ্ববাজারের সঙ্গে তেল-গ্যাসের দাম সমন্বয় করা হবে</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/lifestyle/165876" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/purnima-1-20230109162016.jpg?width=330&amp;height=175" alt="যে কাজগুলো করলে আপনাকে দেখতে অল্প বয়সী মনে হবে" class="img-loader">
                                                </div>
                                                <h2 class="title">যে কাজগুলো করলে আপনাকে দেখতে অল্প বয়সী মনে হবে</h2>
                                            </a>
                                            <a href="https://www.dhakapost.com/country/165875" class="news-item news-item-regular py-2">
                                                <div class="image-container">
                                                    <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sirajgonj-20230109161319.jpg?width=330&amp;height=175" alt="সিরাজগঞ্জে তুচ্ছ ঘটনায় দুই পক্ষের সংঘর্ষ, গুলিবিদ্ধ ২৫" class="img-loader">
                                                </div>
                                                <h2 class="title">সিরাজগঞ্জে তুচ্ছ ঘটনায় দুই পক্ষের সংঘর্ষ, গুলিবিদ্ধ ২৫</h2>
                                            </a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-loader" style="display: none">
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
            <div id="snackbar">Link copied</div>
        </div>
        </div>
    </main>

<?php  } else {
    echo "<p style='font-size:25px;text-align:center;'>URL is not valid. please input valid url</p>";
} ?>