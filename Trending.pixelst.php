<?php
if (isset($_GET["menuName"])) {
    $Detail = $_GET["menuName"];

?>

<style>
    .worldcup-banner img {
        width: 100%;
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
        color: #0c5170;
        display: inline;
        border-bottom: 1px solid #0c5170;
        transition: .3s;
    }

    .topic-links p a:hover {
        color: #3281a5;
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

    .selected-news {
        background: #fff;
        padding-bottom: 5px;
        border-radius: 8px;
        box-shadow: 0px 1px 10px 0px rgba(0, 0, 0, 0.3);
    }

    .selected-news .selected-news-title {
        color: #fff;
        text-align: center;
        font-size: 19px;
        padding: 5px 0;
        border-radius: 8px;
        background: #124b65;
    }

    .selected-news a {
        font-size: 19px;
        position: relative;
        margin: 10px 15px;
        transition: .3s;
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
        justify-content: start;
    }

    .topic-content:first-child {
        border-top: 1px solid #e2e2e2;
        padding-top: 15px;
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
        margin-right: 20px;
    }

    .topic-border-bottom {
        border-bottom: 1px solid #e2e2e2;
    }

    .topic-tab .topic-tab-btn {
        background: #cfdbe0;
        border-radius: 0;
        border: 0;
        width: 50%;
        color: #000;
        text-align: center;
        border-bottom: 3px solid transparent;
        transition: .3s ease-in-out;
    }

    .topic-tab .topic-tab-btn:hover {
        border-bottom: 3px solid #124b65;
    }

    .topic-tab .topic-tab-btn.active {
        background: #fff;
        color: #000;
        border-bottom: 3px solid #124b65;
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
    @media (min-width: 1200px) and (max-width: 1500px) {}

    @media screen and (min-width: 1300px) {
        .container {
            max-width: 1270px
        }


    }


    /* Normal desktop :992px. */
    @media (min-width: 992px) and (max-width: 1200px) {}


    /* Tablet desktop :768px. */
    @media (min-width: 768px) and (max-width: 991px) {}


    /* small mobile :320px. */
    @media (max-width: 767px) {
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

        .topic-text-con {
            text-align: unset !important;
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
            margin-right: 10px;
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

    }

    /* Large Mobile :480px. */
    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container {
            width: 450px
        }

        .topic-title ul li a {
            margin-right: 5px;
            margin-top: 10px;
        }

        .topic-text-con {
            text-align: unset !important;
        }

        .topic-content .topic-content-img img {
            width: 110px;
            height: 70px;
            margin-right: 10px;
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
<main role="main">
    <section class="tag-page-area pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <ol class="d-flex" style="padding: 0; margin-bottom: 8px;">
                        <li class="breadcrumb-item">
                            <a href="index.php">প্রচ্ছদ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="?menu=Trending&menuName=<?php echo $Detail ?>"><?php echo $Detail ?></a>
                        </li>
                    </ol>
                    <div class="topic-title w-100">
                        <i class="fa fa-tag"></i>
                        <h1><?php echo $Detail ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="my-2 mb-0 share-top d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
                        <div class="mb-0 d-flex align-items-center">
                            <div class="mb-0 d-flex flex-column text-align-center border-right pr-2 share-counter share-counter-pg0">
                                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://www.dhakapost.com/topic/মেট্রোরেল&layout=button_count&size=large&appId=3102640556528237&width=112&height=28" width="112" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                            <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons">
                                <a class="pl-2">
                                    <div class="mb-0 social-icon share-social-icon twitter"><i class="fa fa-twitter"></i></div>
                                </a>
                                <a class="pl-2">
                                    <div class="mb-0 social-icon share-social-icon whatsapp"><i class="fa fa-whatsapp"></i></div>
                                </a>
                                <a class="pl-2">
                                    <div class="mb-0 social-icon copy share-social-icon"><i class="fa fa-clone" aria-hidden="true"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="topic-text topic-links w-100">
                    <?php
                                            $informationtopnews = $pdo->query("select  * from  tbl_news where sironam_status='$Detail' order by id DESC limit 0,1");
                                            
                                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                                            $text_string_length = strlen($detail_data);

                                            if ($text_string_length >= 3000) {
                                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 2999));
                                            } else {
                                                $news_text_data = $detail_data;
                                            }
                                            ?>
                        <img src="NewsImage/<?php echo $rowdatatopnews['image']; ?>" alt="<?php echo $rowdatatopnews["title_bn"]; ?>">
                        <div class="topic-text-con text-justify" id="topic-text-con">
                            <p><?php echo $news_text_data; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="ad-position my-3">

                        <div id='div-gpt-ad-1666420343361-0' style='min-width: 300px; min-height: 250px;'>
                            <script type="0475d78a93a4a0512ba0e9c0-text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display('div-gpt-ad-1666420343361-0');
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <div class="article-box pt-3 more-contents">
                        <?php
                                            $informationtopnews = $pdo->query("select  * from  tbl_news where sironam_status='$Detail' order by id DESC limit 1,21");
                                            
                                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                                            $text_string_length = strlen($detail_data);

                                            if ($text_string_length >= 400) {
                                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 399));
                                            } else {
                                                $news_text_data = $detail_data;
                                            }
                                            ?>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["sironam_status"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                        <img src="assets/forAll/img/placeholder.png" data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186" alt="মেট্রোরেলের নির্দেশিকা মেনে চলতে প্রধানমন্ত্রীর আহ্বান" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatopnews["sironam_status"]; ?>&Detail=<?php echo $rowdatatopnews["id"]; ?>">
                                    <?php echo $rowdatatopnews["title_bn"]; ?>
                                    </a>
                                    <time datetime="<?php echo $rowdatatopnews["publish_date"]; ?><?php echo $rowdatatopnews["publish_time"]; ?>"><?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatopnews['publish_date']." ".$rowdatatopnews['publish_time']))); ?></time>
                                    <p class="d-none d-sm-block">"<?php echo $news_text_data; ?>...</p>
                                </div>
                            </div>
                            <?php } ?>
                           
                        </div>
                        <div class="w-100 text-center py-2">
                            <button type="button" class="btn bg-primary px-4 load-more text-white">আরও
                                দেখুন</button>
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
                </div>
            </div>
        </div>
    </section>
    <div id="snackbar">Link copied</div>
</main>
<?php } ?>
</div>
