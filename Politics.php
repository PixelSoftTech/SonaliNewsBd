<?php include 'header.php'; ?>
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
<main role="main">
    <div class="py-3 category">
        <div class="container">
            <div class="category-container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 mb-2">
                        <section class="section-bb">
                            <div class="cat-header py-2">
                                <h1><a href="https://www.dhakapost.com/politics">রাজনীতি</a></h1>
                            </div>
                            <!-- <div class="subcategories d-flex align-items-center">
                                <a href="https://www.dhakapost.com/topic/আওয়ামী-লীগ" class="cat-item rounded py-1 px-2">
                                    আওয়ামী লীগ</a>
                                <a href="https://www.dhakapost.com/topic/বিএনপি" class="cat-item rounded py-1 px-2">
                                    বিএনপি</a>
                                <a href="https://www.dhakapost.com/topic/জাতীয়-পার্টি" class="cat-item rounded py-1 px-2"> জাতীয় পার্টি</a>
                            </div> -->
                        </section>
                        <div class="cat-lead-container border-bottom my-2">
                            <div class="row">
                                <div class="col-lg-8 top-left-section lead-top">
                                    <div class="lead-news">
                                        <a href="https://www.dhakapost.com/politics/165240" class="news-item news-item-lead border-0">
                                            <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/du-20230106162959.jpg?width=640&amp;height=360" alt="বক্তব্য দিচ্ছিলেন ওবায়দুল কাদের, ভেঙে পড়ল মঞ্চ" width="640" height="335" class="lazyload img-loader">
                                            <h2 class="title liveTitle" style="margin: 10px 0">
                                                বক্তব্য দিচ্ছিলেন ওবায়দুল কাদের, ভেঙে পড়ল মঞ্চ
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 cat-two-items">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-lg-12 box-news">
                                            <a href="https://www.dhakapost.com/politics/165225" class="news-item news-item-box m-py-2 border-bottom">
                                                <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jubo-20230106153637.jpg?width=330&amp;height=186" alt="তারেক-জোবাইদার সম্পত্তি বাজেয়াপ্তের প্রতিবাদে যুবদলের বিক্ষোভ" width="330" height="175" class="lazyload img-loader">
                                                <h2 class="title">
                                                    তারেক-জোবাইদার সম্পত্তি বাজেয়াপ্তের প্রতিবাদে যুবদলের বিক্ষোভ
                                                </h2>
                                            </a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-12 box-news pt-2">
                                            <a href="https://www.dhakapost.com/politics/165211" class="news-item news-item-box m-py-2">
                                                <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/148-20230106134308.jpg?width=330&amp;height=186" alt="আওয়ামী লীগের নবনির্বাচিত কমিটির যৌথসভা টুঙ্গিপাড়ায়" width="330" height="175" class="lazyload img-loader">
                                                <h2 class="title">
                                                    আওয়ামী লীগের নবনির্বাচিত কমিটির যৌথসভা টুঙ্গিপাড়ায়
                                                </h2>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row more-contents">
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/165182" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/kobir-bin-20230106105906.jpg?width=330&amp;height=186" alt="এইচটি ইমামের চেয়ারে কবির বিন আনোয়ার : আ.লীগে গুঞ্জন" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        এইচটি ইমামের চেয়ারে কবির বিন আনোয়ার : আ.লীগে গুঞ্জন
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/165135" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/asdas-20230105221710.jpg?width=330&amp;height=186" alt="রাজধানীতে হঠাৎ ছাত্রদলের বিক্ষোভ" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        রাজধানীতে হঠাৎ ছাত্রদলের বিক্ষোভ
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/165128" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bnp-20230105213508.jpg?width=330&amp;height=186" alt="বিএনপির ৬ আসনের উপ-নির্বাচনে ৫৩ জনের মনোনয়ন সংগ্রহ " width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        বিএনপির ৬ আসনের উপ-নির্বাচনে ৫৩ জনের মনোনয়ন সংগ্রহ
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/165094" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bnp-20230105183833.jpg?width=330&amp;height=186" alt="বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল : মোশাররফ " width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল : মোশাররফ
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164947" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sharif-bg-20230105081812.jpg?width=330&amp;height=186" alt="ঢাকা দক্ষিণ আ. লীগের বিজ্ঞানবিষয়ক সম্পাদক শরিফকে অব্যাহতি" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        ঢাকা দক্ষিণ আ. লীগের বিজ্ঞানবিষয়ক সম্পাদক শরিফকে অব্যাহতি
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164934" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/amu-20230105072301.jpg?width=330&amp;height=186" alt="স্মার্ট বাংলাদেশ বিনির্মাণে ছাত্রলীগকে কারিগর হতে হবে" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        স্মার্ট বাংলাদেশ বিনির্মাণে ছাত্রলীগকে কারিগর হতে হবে
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164921" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gonotonto-monch-20230105011844.jpg?width=330&amp;height=186" alt="মির্জা ফখরুল ও আব্বাসের জামিন স্থগিতে রাষ্ট্রপক্ষের আপিলের নিন্দা" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        মির্জা ফখরুল ও আব্বাসের জামিন স্থগিতে রাষ্ট্রপক্ষের আপিলের নিন্দা
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164877" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bnp-20221207231758-20230104191208.jpg?width=330&amp;height=186" alt="গণঅবস্থান কর্মসূচি সফলে বিএনপি নেতাদের মধ্যে দায়িত্ব বণ্টন" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        গণঅবস্থান কর্মসূচি সফলে বিএনপি নেতাদের মধ্যে দায়িত্ব বণ্টন
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164871" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/kader-bg-20230104190206.jpg?width=330&amp;height=186" alt="স্বাস্থ্য পরীক্ষা শেষে দেশে ফিরেছেন ওবায়দুল কাদের" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        স্বাস্থ্য পরীক্ষা শেষে দেশে ফিরেছেন ওবায়দুল কাদের
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164864" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/shit-20230104182844.jpg?width=330&amp;height=186" alt="ঢাবিতে শীতার্তদের মাঝে ছাত্রলীগের শীতবস্ত্র বিতরণ " width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        ঢাবিতে শীতার্তদের মাঝে ছাত্রলীগের শীতবস্ত্র বিতরণ
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164847" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/hasan-2-20221211142954-20230104172215.jpg?width=330&amp;height=186" alt="দেশকে স্বপ্নের ঠিকানায় নিতে ভূমিকা রাখবে ছাত্রলীগ" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        দেশকে স্বপ্নের ঠিকানায় নিতে ভূমিকা রাখবে ছাত্রলীগ
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164762" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/1154-20230104114838.jpg?width=330&amp;height=186" alt="প্রতিষ্ঠাবার্ষিকীতে বঙ্গবন্ধুর প্রতিকৃতিতে ছাত্রলীগের শ্রদ্ধা" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        প্রতিষ্ঠাবার্ষিকীতে বঙ্গবন্ধুর প্রতিকৃতিতে ছাত্রলীগের শ্রদ্ধা
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164696" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chat-20230104010143.jpg?width=330&amp;height=186" alt="৭৫তম প্রতিষ্ঠাবার্ষিকীতে স্বরূপে ফেরার প্রত্যয় ছাত্রলীগের " width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        ৭৫তম প্রতিষ্ঠাবার্ষিকীতে স্বরূপে ফেরার প্রত্যয় ছাত্রলীগের
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164659" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/noor-bg-20230103194713.jpg?width=330&amp;height=186" alt="ইসরায়েলি গোয়েন্দার সঙ্গে ছবি, যা বললেন নুর" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        ইসরায়েলি গোয়েন্দার সঙ্গে ছবি, যা বললেন নুর
                                    </h2>
                                </a>
                            </div>
                            <div class="col-sm-4 box-news">
                                <a href="https://www.dhakapost.com/politics/164624" class="news-item news-item-box m-py-2">
                                    <img src="https://assets.dhakapost.com/media/common/placeholder.jpg" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/japa-20230103172644.jpg?width=330&amp;height=186" alt="উপ-নির্বাচন: জাপার মনোনয়ন পেলেন যারা" width="330" height="175" class="lazyload img-loader">
                                    <h2 class="title">
                                        উপ-নির্বাচন: জাপার মনোনয়ন পেলেন যারা
                                    </h2>
                                </a>
                            </div>
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
                                <script type="2ed6531c2eef4a8a97d2f9e4-text/javascript">
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
                                <a href="https://www.dhakapost.com/jobs-career/164317" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jobs-20230102132810.jpg?width=160&amp;height=90" width="130" height="90" alt="২৫ হাজার বেতনে অভিজ্ঞতা ছাড়াই এনজিওতে চাকরি, নেবে ২০০ জন" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">২৫ হাজার বেতনে অভিজ্ঞতা ছাড়াই এনজিওতে চাকরি, নেবে ২০০ জন</h2>
                                </a>
                                <a href="https://www.dhakapost.com/jobs-career/163867" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/jobsss-20221220130822-20221231151920.jpg?width=160&amp;height=90" width="130" height="90" alt="২৫ হাজার মাসিক বেতনে জেলা পর্যায়ে চাকরির সুযোগ" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">২৫ হাজার মাসিক বেতনে জেলা পর্যায়ে চাকরির সুযোগ</h2>
                                </a>
                                <a href="https://www.dhakapost.com/jobs-career/164024" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jobsss-20230101105428.jpg?width=160&amp;height=90" width="130" height="90" alt="৩৪ হাজার বেতনে চাকরি, সঙ্গে সপ্তাহে ২ দিন ছুটি" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">৩৪ হাজার বেতনে চাকরি, সঙ্গে সপ্তাহে ২ দিন ছুটি</h2>
                                </a>
                                <a href="https://www.dhakapost.com/sports/football/164539" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/messi-mbappe-20230103120614.jpg?width=160&amp;height=90" width="130" height="90" alt="মেসি ফেরার আগেই পিএসজি থেকে উধাও এমবাপে" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">মেসি ফেরার আগেই পিএসজি থেকে উধাও এমবাপে</h2>
                                </a>
                                <a href="https://www.dhakapost.com/jobs-career/164556" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/brac-20221207135048-20221231111046-20230103130925.jpg?width=160&amp;height=90" width="130" height="90" alt="ব্র্যাকে পার্ট-টাইম চাকরির সুযোগ, আবেদন করুন আজই" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">ব্র্যাকে পার্ট-টাইম চাকরির সুযোগ, আবেদন করুন আজই</h2>
                                </a>
                                <a href="https://www.dhakapost.com/entertainment/164919" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/raj-pori-20230105003409.jpg?width=160&amp;height=90" width="130" height="90" alt="ভুল বোঝাবুঝির অবসান ঘটিয়ে রাজের ঘরে পরীমণি!" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">ভুল বোঝাবুঝির অবসান ঘটিয়ে রাজের ঘরে পরীমণি!</h2>
                                </a>
                                <a href="https://www.dhakapost.com/entertainment/dhallywood/163805" class="news-item news-item-regular py-2">
                                    <div class="image-container">
                                        <img src="assets/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/porimonijpg-brazil-20221214114711-20221231110635.jpg?width=160&amp;height=90" width="130" height="90" alt="সম্পর্ক ছিন্ন করে রাজের বাসা থেকে বেরিয়ে এসেছি: পরীমণি" class="lazyload img-loader">
                                    </div>
                                    <h2 class="title">সম্পর্ক ছিন্ন করে রাজের বাসা থেকে বেরিয়ে এসেছি: পরীমণি</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>