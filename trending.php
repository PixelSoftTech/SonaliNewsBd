<?php include 'header.php'; ?>

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
                            <a href="/">প্রচ্ছদ</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="https://www.dhakapost.com/topic/মেট্রোরেল">মেট্রোরেল</a>
                        </li>
                    </ol>
                    <div class="topic-title w-100">
                        <i class="fa fa-tag"></i>
                        <h1>মেট্রোরেল</h1>
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
                        <img src="https://cdn.dhakapost.com/media/setup/tag/2021October/dhaka-metrotail--20211212114128.jpg" alt="মেট্রোরেল">
                        <div class="topic-text-con text-justify" id="topic-text-con">
                            <p>বাংলাদেশের প্রথম মেট্রোরেল উদ্বোধন করেছেন প্রধানমন্ত্রী শেখ হাসিনা। ২০২২ সালের ২৮
                                ডিসেম্বর মেট্রোরেলের উদ্বোধন করেন তিনি। মেট্রোরেলের রুট ও ভাড়ার তালিকা, কোথায়
                                কোথায় মেট্রোরেলের স্টেশন, মেট্রোরেল প্রজেক্টের খরচ, মেট্রোরেলের সর্বোচ্চ গতি
                                ইত্যাদি সহ মেট্রোরেলের সর্বশেষ আপডেট খবর, ছবি ভিডিও ও প্রতিবেদন দেখুন ঢাকা
                                পোস্টে।</p>
                        </div>
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
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165918">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/pm-20230109184156.jpg?width=330&amp;height=186" alt="মেট্রোরেলের নির্দেশিকা মেনে চলতে প্রধানমন্ত্রীর আহ্বান" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165918">
                                        মেট্রোরেলের নির্দেশিকা মেনে চলতে প্রধানমন্ত্রীর আহ্বান
                                    </a>
                                    <time datetime="2023-01-09 18:37:36">০৯ জানুয়ারি ২০২৩, ০৬:৩৭ পিএম</time>
                                    <p class="d-none d-sm-block">আধুনিক প্রযুক্তি ব্যবহারের মাধ্যমে নির্মিত
                                        হয়েছে স্বপ্নের মেট্রোরেল। সে কারণে ভ্রমণের সময় মেট্রোরেলের নিয়ম ও
                                        নির্দেশনা মেনে চলতে যাত্রীদের...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165872">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/pl-20230109160035.jpg?width=330&amp;height=186" alt="১০ দিনে মেট্রোরেলের আয় ৮৮ লাখ টাকা" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165872">
                                        ১০ দিনে মেট্রোরেলের আয় ৮৮ লাখ টাকা
                                    </a>
                                    <time datetime="2023-01-09 16:00:36">০৯ জানুয়ারি ২০২৩, ০৪:০০ পিএম</time>
                                    <p class="d-none d-sm-block">মেট্রোরেল উদ্বোধনের প্রথম ১০ দিনে টিকিট বিক্রি
                                        করে মোট ৮৮ লাখ টাকা আয় করেছে ঢাকা ম্যাস ট্রানজিট কোম্পানি...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165868">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/metro-20230109155554.jpg?width=330&amp;height=186" alt="মেট্রোরেলের সময়সূচিতে পরিবর্তন" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165868">
                                        মেট্রোরেলের সময়সূচিতে পরিবর্তন
                                    </a>
                                    <time datetime="2023-01-09 15:55:54">০৯ জানুয়ারি ২০২৩, ০৩:৫৫ পিএম</time>
                                    <p class="d-none d-sm-block">বাংলাদেশের প্রথম মেট্রোরেল এমআরটি লাইন-৬ এর
                                        সময়সূচিতে পরিবর্তন আনা হয়েছে। আগামী ২৫ জানুয়ারি (বুধবার) থেকে মেট্রোরেল
                                        চলবে...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165847">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/pl-20230109145754.jpg?width=330&amp;height=186" alt="পল্লবী স্টেশনে মেট্রোরেল থামবে ২৫ জানুয়ারি থেকে" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165847">
                                        পল্লবী স্টেশনে মেট্রোরেল থামবে ২৫ জানুয়ারি থেকে
                                    </a>
                                    <time datetime="2023-01-09 14:57:55">০৯ জানুয়ারি ২০২৩, ০২:৫৭ পিএম</time>
                                    <p class="d-none d-sm-block">বাংলাদেশের প্রথম মেট্রোরেল এমআরটি লাইন-৬ এর
                                        পল্লবী স্টেশন সর্বসাধারণের জন্য খুলে দেওয়া হচ্ছে...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/international/165676">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/metor-train-20230108180310.jpg?width=330&amp;height=186" alt="মেট্রোর সিটের ওপর উঠে নাচলেন তরুণী, ক্ষুব্ধ সাধারণ যাত্রীরা" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/international/165676">
                                        মেট্রোর সিটের ওপর উঠে নাচলেন তরুণী, ক্ষুব্ধ সাধারণ যাত্রীরা
                                    </a>
                                    <time datetime="2023-01-08 18:03:10">০৮ জানুয়ারি ২০২৩, ০৬:০৩ পিএম</time>
                                    <p class="d-none d-sm-block">মানুষের যাতায়াত যানজটবিহীন ও নির্বিঘ্ন করতে
                                        বিশ্বের বিভিন্ন দেশে তৈরি করা হয়েছে মেট্রোরেল। এই সেবা ব্যবহার করে বেশ
                                        স্বাচ্ছন্দেই যাতায়াত করতে পারছেন সব শ্রেণীর</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165593">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/t-20230108130336.jpg?width=330&amp;height=186" alt="মেট্রোরেলের জন্য কম দামে বিদ্যুৎ সরবরাহের প্রস্তাব" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165593">
                                        মেট্রোরেলের জন্য কম দামে বিদ্যুৎ সরবরাহের প্রস্তাব
                                    </a>
                                    <time datetime="2023-01-08 13:03:36">০৮ জানুয়ারি ২০২৩, ০১:০৩ পিএম</time>
                                    <p class="d-none d-sm-block">মেট্রোরেলের জন্য কোনো ধরনের লাভ ছাড়া কম দামে
                                        বিদ্যুৎ দেওয়ার দাবি জানিয়েছে ঢাকা ম্যাস ট্রানজিট কোম্পানি...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/international/165388">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/sadfsd-20230107130734.jpg?width=330&amp;height=186" alt="টিকিট বিক্রির সঙ্গে বিজ্ঞাপন থেকেও আয় করেছে কলকাতার মেট্রো" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/international/165388">
                                        টিকিট বিক্রির সঙ্গে বিজ্ঞাপন থেকেও আয় করেছে কলকাতার মেট্রো
                                    </a>
                                    <time datetime="2023-01-07 13:07:34">০৭ জানুয়ারি ২০২৩, ০১:০৭ পিএম</time>
                                    <p class="d-none d-sm-block">আয় বাড়ানোর উদ্দেশে এবার বিজ্ঞাপনের ওপর জোর
                                        দিয়েছে ভারতের কলকাতার মেট্রোরেল। যার ফলে বেড়েছে রেকর্ড পরিমাণে আয়।
                                        কলকাতার সংবাদমাধ্যমগুলো থেকে জানা গেছে...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/opinion/165175">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/aditi-20230106101148.jpg?width=330&amp;height=186" alt="২০২২ কেমন ছিল?" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/opinion/165175">
                                        ২০২২ কেমন ছিল?
                                    </a>
                                    <time datetime="2023-01-06 10:11:48">০৬ জানুয়ারি ২০২৩, ১০:১১ এএম</time>
                                    <p class="d-none d-sm-block">গুম-খুন—সাম্প্রতিক সময়ে বুয়েটের নিহত ছাত্র
                                        ফারদীন, প্রবল আওয়ামী লীগ সমর্থক দুরন্ত বিপ্লবের শবদেহ নারায়ণগঞ্জের
                                        শীতলক্ষ্যা নদীতে ভেসে ওঠা....</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/165169">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/932-20230106092921.jpg?width=330&amp;height=186" alt="নারীর ক্ষমতায়নে উজ্জ্বল দৃষ্টান্ত নারীবান্ধব মেট্রোরেল" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/165169">
                                        নারীর ক্ষমতায়নে উজ্জ্বল দৃষ্টান্ত নারীবান্ধব মেট্রোরেল
                                    </a>
                                    <time datetime="2023-01-06 09:29:22">০৬ জানুয়ারি ২০২৩, ০৯:২৯ এএম</time>
                                    <p class="d-none d-sm-block">মহিলা ও শিশু বিষয়ক প্রতিমন্ত্রী ফজিলাতুন নেসা
                                        ইন্দিরা বলেছেন, নারীদের জন্য প্রধানমন্ত্রীর শ্রেষ্ঠ উপহার নারীবান্ধব
                                        মেট্রোরেল। যা নারীর ক্ষমতায়নে উজ্জ্বল...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164992">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/corruption-20230105120420.jpg?width=330&amp;height=186" alt="দুর্নীতির লাগাম টানবে কে?" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164992">
                                        দুর্নীতির লাগাম টানবে কে?
                                    </a>
                                    <time datetime="2023-01-05 12:04:20">০৫ জানুয়ারি ২০২৩, ১২:০৪ পিএম</time>
                                    <p class="d-none d-sm-block">শীতে কাঁপছে দেশ। বিশেষ করে উত্তরবঙ্গের অবস্থা
                                        শোচনীয়। শীতার্তদের শীতবস্ত্র দেওয়া জরুরি। সেই কাজে অগ্রগতি নেই....</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164773">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/cats-20230104123441.jpg?width=330&amp;height=186" alt="মেট্রোরেল স্টেশন এলাকায় রিকশাচালকের মরদেহ" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164773">
                                        মেট্রোরেল স্টেশন এলাকায় রিকশাচালকের মরদেহ
                                    </a>
                                    <time datetime="2023-01-04 12:23:35">০৪ জানুয়ারি ২০২৩, ১২:২৩ পিএম</time>
                                    <p class="d-none d-sm-block">রাজধানীর আগারগাঁও মেট্রোরেল স্টেশন এলাকা থেকে
                                        শাহাবুদ্দিন (৭০) নামে এক ব্যক্তির মরদেহ উদ্ধার করেছে পুলিশ।</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164761">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/frame-01-20230104114557.jpg?width=330&amp;height=186" alt="ব্যক্তিগত গাড়ি বাড়ছে কেন?" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164761">
                                        ব্যক্তিগত গাড়ি বাড়ছে কেন?
                                    </a>
                                    <time datetime="2023-01-04 11:45:57">০৪ জানুয়ারি ২০২৩, ১১:৪৫ এএম</time>
                                    <p class="d-none d-sm-block">মেট্রোরেলের পিলারে পোস্টার লাগানো দণ্ডনীয়
                                        অপরাধ। অথচ এই পিলারটিতেই পোস্টার লাগানো হয়েছে....</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/international/164652">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/mumbai-metro-20230103185652.jpg?width=330&amp;height=186" alt="দরজায় আটকে গেল জামা, নারীকে টেনে-হিঁচড়ে নিল মেট্রোরেল" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/international/164652">
                                        দরজায় আটকে গেল জামা, নারীকে টেনে-হিঁচড়ে নিল মেট্রোরেল
                                    </a>
                                    <time datetime="2023-01-03 18:56:52">০৩ জানুয়ারি ২০২৩, ০৬:৫৬ পিএম</time>
                                    <p class="d-none d-sm-block">ভারতের পশ্চিমাঞ্চলীয় রাজ্য মহারাষ্ট্রের
                                        রাজাধানী মুম্বাইয়ে মেট্রোরেলের দরজায় জামা আটকে ভয়াবহ দুর্ঘটনার শিকার
                                        হয়েছেন এক নারী...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/international/164502">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/943-20230103093946.jpg?width=330&amp;height=186" alt="ঢাকার মতো কলকাতাতেও মেট্রো ঘিরে উচ্ছ্বাস " width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/international/164502">
                                        ঢাকার মতো কলকাতাতেও মেট্রো ঘিরে উচ্ছ্বাস
                                    </a>
                                    <time datetime="2023-01-03 09:39:46">০৩ জানুয়ারি ২০২৩, ০৯:৩৯ এএম</time>
                                    <p class="d-none d-sm-block">বহুল প্রতীক্ষিত মেট্রোরেলের উদ্বোধনের মধ্য দিয়ে
                                        নতুন যুগে প্রবেশ করেছে বাংলাদেশ। সাধারণ মানুষের জন্য মেট্রোরেল খুলে
                                        দেওয়ার পর থেকে তা নিয়ে মানুষের মধ্যে ব্যাপক</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164473">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/sha-20230103061229.jpg?width=330&amp;height=186" alt="মেট্রোরেলে সহায়তার জন্য জাপানকে পররাষ্ট্র প্রতিমন্ত্রীর ধন্যবাদ " width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164473">
                                        মেট্রোরেলে সহায়তার জন্য জাপানকে পররাষ্ট্র প্রতিমন্ত্রীর ধন্যবাদ
                                    </a>
                                    <time datetime="2023-01-03 06:12:29">০৩ জানুয়ারি ২০২৩, ০৬:১২ এএম</time>
                                    <p class="d-none d-sm-block">মেট্রোরেল প্রকল্প বাস্তবায়নে কারিগরি ও আর্থিক
                                        সহায়তা প্রদানের জন্য জাপান সরকারকে ধন্যবাদ জানিয়েছেন পররাষ্ট্র
                                        প্রতিমন্ত্রী মো. শাহরিয়ার আলম...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164459">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/metro-rail-202212281238171-20230102231534.jpg?width=330&amp;height=186" alt="প্রথম সপ্তাহে মেট্রোরেলের আয় ৪৬ লাখ টাকা" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164459">
                                        প্রথম সপ্তাহে মেট্রোরেলের আয় ৪৬ লাখ টাকা
                                    </a>
                                    <time datetime="2023-01-02 23:15:34">০২ জানুয়ারি ২০২৩, ১১:১৫ পিএম</time>
                                    <p class="d-none d-sm-block">আনুষ্ঠানিকভাবে যাত্রা শুরুর প্রথম সপ্তাহে
                                        মেট্রোরেল পরিচালনা করে ৪৬ লাখ ৮০ হাজার ৩০০ টাকা আয় করেছে ঢাকা ম্যাস
                                        ট্রানজিট কোম্পানি লিমিটেড (ডিএমটিসিএল)। </p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164420">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/metro-rail-20230102191240.jpg?width=330&amp;height=186" alt="কাল মেট্রোরেলের সাপ্তাহিক ছুটি" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164420">
                                        কাল মেট্রোরেলের সাপ্তাহিক ছুটি
                                    </a>
                                    <time datetime="2023-01-02 19:12:40">০২ জানুয়ারি ২০২৩, ০৭:১২ পিএম</time>
                                    <p class="d-none d-sm-block">বাংলাদেশে বাণিজ্যিকভাবে চালু হওয়া মেট্রোরেলের
                                        সাপ্তাহিক ছুটি মঙ্গলবার নির্ধারণ করা হয়েছে। সে হিসেবে আগামীকাল
                                        মঙ্গলবার..</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164413">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/metro-12-20211209191722-20230102184903.jpg?width=330&amp;height=186" alt="প্রথম ৪ দিনে মেট্রোরেলের আয় সাড়ে ৩৬ লাখের বেশি" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164413">
                                        প্রথম ৪ দিনে মেট্রোরেলের আয় সাড়ে ৩৬ লাখের বেশি
                                    </a>
                                    <time datetime="2023-01-02 18:49:03">০২ জানুয়ারি ২০২৩, ০৬:৪৯ পিএম</time>
                                    <p class="d-none d-sm-block">বাণিজ্যিকভাবে মেট্রোরেল চালিয়ে প্রথম চারদিনে
                                        সাড়ে ৩৬ লাখ টাকার বেশি আয় করেছে ঢাকা ম্যাস ট্রানজিট কোম্পানি...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164296">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/123-20230102120356.jpg?width=330&amp;height=186" alt="আলোচিত খবর,  ২ ডিসেম্বর ২০২২" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164296">
                                        আলোচিত খবর, ২ ডিসেম্বর ২০২২
                                    </a>
                                    <time datetime="2023-01-02 12:03:56">০২ জানুয়ারি ২০২৩, ১২:০৩ পিএম</time>
                                    <p class="d-none d-sm-block">অর্থনীতি নিয়ে আমাদের চিন্তা এবং দুশ্চিন্তার শেষ
                                        নেই। তার মধ্যে প্রবাসী আয় নিয়ে আমাদের আশাও বেশি কারণ দেশের অর্থনীতিতে বড়
                                        অবদান প্রবাসীদের...</p>
                                </div>
                            </div>
                            <div class="topic-content topic-border-bottom pb-3 mb-3">
                                <div class="topic-content-img">
                                    <a href="https://www.dhakapost.com/national/164238">
                                        <img src="https://cdn.dhakapost.com/media/common/placeholder.jpg" data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/speaker-20230102080624.jpg?width=330&amp;height=186" alt="মেট্রোরেলের মাধ্যমে বাংলাদেশে নতুন ধারা সূচিত হয়েছে : স্পিকার" width="330" height="175" class="lazyload img-loader">
                                    </a>
                                </div>
                                <div class="topic-content-text">
                                    <a href="https://www.dhakapost.com/national/164238">
                                        মেট্রোরেলের মাধ্যমে বাংলাদেশে নতুন ধারা সূচিত হয়েছে : স্পিকার
                                    </a>
                                    <time datetime="2023-01-02 08:06:24">০২ জানুয়ারি ২০২৩, ০৮:০৬ এএম</time>
                                    <p class="d-none d-sm-block">স্পিকার ড. শিরীন শারমিন চৌধুরী বলেছেন,
                                        মেট্রোরেলের যাত্রা শুরুর মাধ্যমে বাংলাদেশে নতুন ধারা সূচিত হয়েছে। শনিবার
                                        (১ জানুয়ারি) সংসদ ভবনে...</p>
                                </div>
                            </div>
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
</div>

<?php include 'footer.php'; ?>