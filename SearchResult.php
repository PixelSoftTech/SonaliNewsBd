<?php include 'header.php';?>

<style>
    .cat-header a {
        font-size: 17px;
    }

    .cat-header a:hover {
        text-decoration: underline !important;
    }

    .subcat-header a {
        font-size: 38px;
    }

    .subcat-header {
        border-bottom: 1px solid #d8d8d8;
    }

    .subcat-header h1 {
        font-size: 38px;
    }

    .section-bb {
        border-bottom: 2px solid #212020;
    }

    .subcategories {
        flex-wrap: wrap;
        padding: 8px 0;
    }

    .subcategories a {
        font-size: 17px;
        background: #eee;
        margin-right: 10px;
        margin-bottom: 5px;
    }

    .identifier:not(:first-child) {
        margin-left: 12px;
    }

    .identifier:not(:last-child) {
        margin-right: 12px;
    }

    .identifier {
        width: 5px;
        height: 5px;
        background: var(--brand-color);
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
        background: #FFFFFF;
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

        .subcategories a {
            line-height: 2.1;
        }

    }

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container {
            width: 450px
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

        .subcategories a {
            line-height: 2.1;
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

<main role="main" class="pt-2 pb-2 category">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 border-right">
                <section class="section-bb">
                    <div class="cat-header mt-2">
                        <h2>
                            <a href="https://www.dhakapost.com/country/bhola-news">ভোলা</a>
                        </h2>
                    </div>
                    <div class="subcat-header py-2">
                        <h1>ভোলা সদর</h1>
                    </div>
                    <div class="subcategories d-flex align-items-center">
                        <a href="https://www.dhakapost.com/country/bhola/borhanuddin-news"
                            class="cat-item rounded py-1 px-2"> বোরহানউদ্দিন</a>
                        <a href="https://www.dhakapost.com/country/bhola/charfesson-news"
                            class="cat-item rounded py-1 px-2"> চরফ্যাশন</a>
                        <a href="https://www.dhakapost.com/country/bhola/doulatkhan-news"
                            class="cat-item rounded py-1 px-2"> দৌলতখান</a>
                        <a href="https://www.dhakapost.com/country/bhola/monpura-news"
                            class="cat-item rounded py-1 px-2"> মনপুরা</a>
                        <a href="https://www.dhakapost.com/country/bhola/tazumuddin-news"
                            class="cat-item rounded py-1 px-2"> তজুমদ্দিন</a>
                        <a href="https://www.dhakapost.com/country/bhola/lalmohan-news"
                            class="cat-item rounded py-1 px-2"> লালমোহন</a>
                    </div>
                </section>
                <div class="category-body my-3">
                    <div class="article-box pt-3 more-contents">
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/165093">
                                    ভোলায় ২২ কোটি টাকার ভারতীয় মালামাল জব্দ
                                </a>
                                <time datetime="2023-01-05 18:36:54">০৫ জানুয়ারি ২০২৩, ০৬:৩৬ পিএম</time>
                                <p class="d-none d-sm-block">শুল্ক ফাঁকি দিয়ে ভারত থেকে বাংলাদেশে আসা প্রায়
                                    ২২ কোটি টাকার ভারতীয় শাড়ি, থ্রি-পিস, ওষুধসহ অন্যান্য মালামাল জব্দ করেছে
                                    কোস্টগার্ড...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/165093">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2023January/bhola1-20230105183654.jpg?width=330&amp;height=186"
                                        alt="ভোলায় ২২ কোটি টাকার ভারতীয় মালামাল জব্দ" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/158804">
                                    ভোলায় নুডুলস খাওয়া নিয়ে সংঘর্ষে যুবক নিহত
                                </a>
                                <time datetime="2022-12-07 16:35:43">০৭ ডিসেম্বর ২০২২, ০৪:৩৫ পিএম</time>
                                <p class="d-none d-sm-block">ভোলায় বিশ্বকাপ ফুটবল খেলা দেখার সময় নুডুলস
                                    খাওয়াকে কেন্দ্র করে দুই গ্রুপের সমর্থকদের মধ্যে সংঘর্ষের ঘটনা ঘটে। এতে
                                    হৃদয় (২০) নামে এক যুবক ধারালো অস্ত্রের আঘাতে..</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/158804">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022December/untitled-5-20221207163543.jpg?width=330&amp;height=186"
                                        alt="ভোলায় নুডুলস খাওয়া নিয়ে সংঘর্ষে যুবক নিহত" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/156688">
                                    নৌযান শ্রমিকদের কর্মবিরতিতে বিপাকে ভোলাবাসী
                                </a>
                                <time datetime="2022-11-27 17:50:23">২৭ নভেম্বর ২০২২, ০৫:৫০ পিএম</time>
                                <p class="d-none d-sm-block">১০ দফা দাবিতে নৌযান শ্রমিকদের ডাকা
                                    অনির্দিষ্টকালের কর্মবিরতিতে ভোগান্তিতে পড়েছেন ভোলার যাত্রীরা। ভোলা থেকে
                                    নৌযান ছাড়া অন্য কোনো...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/156688">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022November/bhola1-20221127175022.jpg?width=330&amp;height=186"
                                        alt="নৌযান শ্রমিকদের কর্মবিরতিতে বিপাকে ভোলাবাসী" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/151891">
                                    ‘নানুকে শেষবারের মতো দেখতে যাব, ঘাটে এসে দেখি লঞ্চ-স্পিডবোট বন্ধ’
                                </a>
                                <time datetime="2022-11-05 11:33:33">০৫ নভেম্বর ২০২২, ১১:৩৩ এএম</time>
                                <p class="d-none d-sm-block">ভোলায় তৃতীয় দিনের মতো লঞ্চ চলাচল বন্ধ রয়েছে।
                                    টানা তিন দিন বরিশালের সঙ্গে লঞ্চ, স্পিডবোট চলাচল বন্ধ থাকায় ভোলা ও
                                    বরিশালের বহু মানুষ আটকা পড়েছে...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/151891">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022November/bhola-20221105113333.jpg?width=330&amp;height=186"
                                        alt="‘নানুকে শেষবারের মতো দেখতে যাব, ঘাটে এসে দেখি লঞ্চ-স্পিডবোট বন্ধ’"
                                        width="330" height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/151700">
                                    ভোলায় সিত্রাংয়ে ৫০০ কোটি টাকার ক্ষতি
                                </a>
                                <time datetime="2022-11-04 11:14:15">০৪ নভেম্বর ২০২২, ১১:১৪ এএম</time>
                                <p class="d-none d-sm-block">ঘূর্ণিঝড় সিত্রাংয়ের প্রভাবে ভোলায় প্রায় ৫০০
                                    কোটি টাকার ক্ষতি হয়েছে। তবে ক্ষতিগ্রস্ত কৃষকদের পুনর্বাসনে এখন পর্যন্ত
                                    কোনো...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/151700">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022November/bhola-20221104111415.jpg?width=330&amp;height=186"
                                        alt="ভোলায় সিত্রাংয়ে ৫০০ কোটি টাকার ক্ষতি" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/150518">
                                    ভোলায় ঝাঁকে ঝাঁকে ধরা পড়ছে মা ইলিশ
                                </a>
                                <time datetime="2022-10-30 07:29:18">৩০ অক্টোবর ২০২২, ০৭:২৯ এএম</time>
                                <p class="d-none d-sm-block">ভোলায় জেলেদের জালে ধরা পড়ছে ঝাঁকে ঝাঁকে মা
                                    ইলিশ। দুই থেকে আড়াই কেজি ওজনের এসব ইলিশ পেয়ে জেলে...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/150518">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022October/bhola-20221030072918.jpg?width=330&amp;height=186"
                                        alt="ভোলায় ঝাঁকে ঝাঁকে ধরা পড়ছে মা ইলিশ" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/150216">
                                    সিত্রাংয়ের প্রভাবে ভোলায় ইলিশের উৎপাদন বাড়বে : মৎস্য বিভাগ
                                </a>
                                <time datetime="2022-10-28 13:33:03">২৮ অক্টোবর ২০২২, ০১:৩৩ পিএম</time>
                                <p class="d-none d-sm-block">২২ দিনের নিষেধাজ্ঞার মেয়াদ শেষ হচ্ছে শুক্রবার
                                    (২৮ অক্টোবর) মধ্যরাতে। তাই মাছ শিকারে নদীতে নামার প্রস্তুতি নিচ্ছেন...
                                </p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/150216">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022October/bhola-20221028133303.jpg?width=330&amp;height=186"
                                        alt="সিত্রাংয়ের প্রভাবে ভোলায় ইলিশের উৎপাদন বাড়বে : মৎস্য বিভাগ" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/149534">
                                    ভোলায় গাছ ও ঘরচাপায় ৩ জনের মৃত্যু
                                </a>
                                <time datetime="2022-10-25 10:48:27">২৫ অক্টোবর ২০২২, ১০:৪৮ এএম</time>
                                <p class="d-none d-sm-block">ঘূর্ণিঝড় সিত্রাংয়ের প্রভাবে ভোলায় গাছ ও
                                    ঘরচাপায় তিনজনের মৃত্যু হয়েছে। ক্ষতিগ্রস্ত হয়েছে ঘরবাড়ি, ফসলি জমি ও
                                    পুকুরের...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/149534">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022October/bhola-20221025104827.jpg?width=330&amp;height=186"
                                        alt="ভোলায় গাছ ও ঘরচাপায় ৩ জনের মৃত্যু" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <p style="border-bottom: 1px solid #134b65;display: inline-block;color: #134b65;">
                                    ঘূর্ণিঝড় সিত্রাং</p>
                                <a href="https://www.dhakapost.com/country/149179">
                                    ভোলায় সরকারি কর্মকর্তা-কর্মচারীদের কর্মস্থলে থাকার নির্দেশ
                                </a>
                                <time datetime="2022-10-23 18:57:40">২৩ অক্টোবর ২০২২, ০৬:৫৭ পিএম</time>
                                <p class="d-none d-sm-block">ঘূর্ণিঝড় সিত্রাংয়ের প্রভাবে ভোলার উপকূলীয়
                                    এলাকায় গুড়ি গুড়ি বৃষ্টি হচ্ছে। আকাশ মেঘাচ্ছন্ন রয়েছে। সকাল থেকে বৈরি
                                    আবহাওয়া বিরাজ করলেও জনজীবন স্বাভাবিক রয়েছে। </p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/149179">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022October/bhola-20221023185740.jpg?width=330&amp;height=186"
                                        alt="ভোলায় সরকারি কর্মকর্তা-কর্মচারীদের কর্মস্থলে থাকার নির্দেশ" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/148438">
                                    নিষেধাজ্ঞার ১৩ দিনেও প্রণোদনার চাল পাননি ভোলার জেলেরা
                                </a>
                                <time datetime="2022-10-19 18:57:50">১৯ অক্টোবর ২০২২, ০৬:৫৭ পিএম</time>
                                <p class="d-none d-sm-block">দেশের নদ-নদী ও বঙ্গোপসাগরে ইলিশ ধরায় ২২ দিনের
                                    নিষেধাজ্ঞা চলায় বেকার হয়ে পড়েছেন ভোলার তিন লাখেরও বেশি জেলে।
                                    নিষেধাজ্ঞার ১৩ দিন পেরিয়ে গেলেও প্রণোদনার চাল...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/148438">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022October/bhola1-20221019185750.jpg?width=330&amp;height=186"
                                        alt="নিষেধাজ্ঞার ১৩ দিনেও প্রণোদনার চাল পাননি ভোলার জেলেরা" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/143460">
                                    স্ত্রীকে উত্ত্যক্তের প্রতিবাদ করায় পুলিশ সদস্যকে কুপিয়ে জখম
                                </a>
                                <time datetime="2022-09-24 07:28:48">২৪ সেপ্টেম্বর ২০২২, ০৭:২৮ এএম</time>
                                <p class="d-none d-sm-block">ভোলায় স্ত্রীকে নিয়ে ঘুরতে বের হয়ে বখাটেদের
                                    উত্ত্যক্তের প্রতিবাদ করায় মো. এনামুল ব্যাপারী নামে এক পুলিশ
                                    কনস্টেবলকে...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/143460">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022September/bhola-20220924072848.jpg?width=330&amp;height=186"
                                        alt="স্ত্রীকে উত্ত্যক্তের প্রতিবাদ করায় পুলিশ সদস্যকে কুপিয়ে জখম" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/141224">
                                    বাংলাদেশে নির্দলীয় সরকার আর হবে না : তোফায়েল আহমেদ
                                </a>
                                <time datetime="2022-09-12 17:45:36">১২ সেপ্টেম্বর ২০২২, ০৫:৪৫ পিএম</time>
                                <p class="d-none d-sm-block">বিএনপির মহাসচিব মির্জা ফকরুল ইসলাম আলমগীরের
                                    বক্তব্যের সমালোচনা করে আওয়ামী লীগের উপদেষ্টা পরিষদের সদস্য ও ভোলা-১
                                    আসনের সংসদ সদস্য তোফায়েল আহমেদ...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/141224">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022September/tofael-20220912174536.jpg?width=330&amp;height=186"
                                        alt="বাংলাদেশে নির্দলীয় সরকার আর হবে না : তোফায়েল আহমেদ" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/140378">
                                    ৩ বছরেও চালু হয়নি ভোলার ২৫০ শয্যা হাসপাতালের আধুনিক ভবন
                                </a>
                                <time datetime="2022-09-08 08:58:16">০৮ সেপ্টেম্বর ২০২২, ০৮:৫৮ এএম</time>
                                <p class="d-none d-sm-block">নির্মাণের তিন বছর পেরিয়ে গেলেও ভোলা জেনারেল
                                    হাসপাতালের ২৫০ শয্যা বিশিষ্ট আধুনিক সাত তলা ভবনটি চালু হয়নি। দীর্ঘদিন
                                    সেখানে অযত্ন অবহেলায় পড়ে থেকে...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/140378">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022September/bhola1-20220908085816.jpg?width=330&amp;height=186"
                                        alt="৩ বছরেও চালু হয়নি ভোলার ২৫০ শয্যা হাসপাতালের আধুনিক ভবন" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/137208">
                                    ছুটি নিয়ে বাড়ি ফেরা হলো না বিজিবি সদস্য টিপুর
                                </a>
                                <time datetime="2022-08-24 07:55:46">২৪ আগস্ট ২০২২, ০৭:৫৫ এএম</time>
                                <p class="d-none d-sm-block">ভোলায় পণ্যবাহী ট্রাকের সঙ্গে সিএনজিচালিত
                                    অটোরিকশার মুখোমুখি সংঘর্ষে ইসমাইল টিপু নামে এক বিজিবি সদস্য নিহত...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/137208">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/bhola-20220824075545.jpg?width=330&amp;height=186"
                                        alt="ছুটি নিয়ে বাড়ি ফেরা হলো না বিজিবি সদস্য টিপুর" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/135344">
                                    ত্রাণ তো দূরের কথা, কেউ খবরও নেয়নি
                                </a>
                                <time datetime="2022-08-15 15:59:59">১৫ আগস্ট ২০২২, ০৩:৫৯ পিএম</time>
                                <p class="d-none d-sm-block">ভোলায় বৈরী আবহাওয়ার কারণে অস্বাভাবিক জোয়ারের
                                    ফলে বিভিন্ন এলাকার নিম্নাঞ্চল ৫ থেকে ৬ ফুট পানিতে প্লাবিত হয়েছে। আজ
                                    দুপুর ১টার দিকে ফের...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/135344">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/bhola1-20220815155959.jpg?width=330&amp;height=186"
                                        alt="ত্রাণ তো দূরের কথা, কেউ খবরও নেয়নি" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/134765">
                                    জোয়ারে ডুবেছে ফসল, ভেসেছে পুকুর
                                </a>
                                <time datetime="2022-08-12 20:54:51">১২ আগস্ট ২০২২, ০৮:৫৪ পিএম</time>
                                <p class="d-none d-sm-block">পূর্ণিমার প্রভাবে ভোলায় গত কয়েক দিন ধরে
                                    অস্বাভাবিক জোয়ারে নিম্নাঞ্চল এবং বেড়িবাঁধের বাইরের এলাকা প্লাবিত
                                    হয়েছে। এতে অন্তত ২৫ গ্রামের অর্ধলক্ষাধিক...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/134765">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/bhola2-20220812205451.jpg?width=330&amp;height=186"
                                        alt="জোয়ারে ডুবেছে ফসল, ভেসেছে পুকুর" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/134581">
                                    ভোলায় নিহত ছাত্রদল সভাপতির স্ত্রীর মামলা, আসামি ৩৬ পুলিশ সদস্য
                                </a>
                                <time datetime="2022-08-11 19:47:23">১১ আগস্ট ২০২২, ০৭:৪৭ পিএম</time>
                                <p class="d-none d-sm-block">ভোলায় পুলিশ-বিএনপি সংঘর্ষে নিহত জেলা ছাত্রদল
                                    সভাপতি নুরে আলমের স্ত্রী ইফফাত জাহান বাদী হয়ে এসআই আনিস এবং ওসি (তদন্ত)
                                    আরমানসহ ৩৬ পুলিশকে সদস্যকে আসামি করে</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/134581">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/vola-20220811194723.jpg?width=330&amp;height=186"
                                        alt="ভোলায় নিহত ছাত্রদল সভাপতির স্ত্রীর মামলা, আসামি ৩৬ পুলিশ সদস্য" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/134509">
                                    ভোলায় দুর্যোগপূর্ণ আবহাওয়া, উত্তাল নদী-সাগর
                                </a>
                                <time datetime="2022-08-11 15:41:56">১১ আগস্ট ২০২২, ০৩:৪১ পিএম</time>
                                <p class="d-none d-sm-block">ভোলায় তৃতীয়দিনের মতো বৈরী আবহাওয়া বিরাজ করছে।
                                    নদী ও সাগর উত্তাল রয়েছে। আজ বৃহস্পতিবার (১১ আগস্ট) সকাল থেকে থেমে থেমে
                                    ভারী বৃষ্টি হচ্ছে...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/134509">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/bhola1-20220811154156.jpg?width=330&amp;height=186"
                                        alt="ভোলায় দুর্যোগপূর্ণ আবহাওয়া, উত্তাল নদী-সাগর" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/134143">
                                    আ.লীগকে ক্ষমতাচ্যুত করা এত সহজ নয় : তোফায়েল
                                </a>
                                <time datetime="2022-08-09 21:01:02">০৯ আগস্ট ২০২২, ০৯:০১ পিএম</time>
                                <p class="d-none d-sm-block">আওয়ামী লীগের উপদেষ্টা পরিষদের সদস্য ও সাবেক
                                    শিল্প ও বাণিজ্যমন্ত্রী তোফায়েল আহমেদ বলেছেন, গত ১৪ বছর আওয়ামী লীগ
                                    ক্ষমতায় কিন্তু বিএনপির...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/134143">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022August/bhola1-20220809210102.jpg?width=330&amp;height=186"
                                        alt="আ.লীগকে ক্ষমতাচ্যুত করা এত সহজ নয় : তোফায়েল" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                        </div>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="https://www.dhakapost.com/country/133190">
                                    ভোলা থানার পরিদর্শকসহ ৩৬ পুলিশ সদস্যের বিরুদ্ধে মামলা
                                </a>
                                <time datetime="2022-08-05 12:43:22">০৫ আগস্ট ২০২২, ১২:৪৩ পিএম</time>
                                <p class="d-none d-sm-block">স্বেচ্ছাসেবক দলের কর্মী আব্দুর রহিম মাতুব্বরের
                                    মৃত্যুর ঘটনায় ভোলা সদর মডেল থানা পুলিশের পরিদর্শক আরমান হোসেনসহ ৩৬ পুলিশ
                                    সদস্যের বিরুদ্ধে হত্যা মামলা...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="https://www.dhakapost.com/country/133190">
                                    <img src="assets/img/placeholder.png"
                                        data-src="//assets.dhakapost.com/media/imgAll/BG/2022July/bhola1-20220805124322.jpg?width=330&amp;height=186"
                                        alt="ভোলা থানার পরিদর্শকসহ ৩৬ পুলিশ সদস্যের বিরুদ্ধে মামলা" width="330"
                                        height="175" class="lazyload img-loader">
                                </a>
                            </div>
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
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="advertisement d-flex justify-content-center">
                    <div id='div-gpt-ad-1624960273857-0' style='min-width: 300px; min-height: 250px; max-width: 300px; background-color: #f9d5d5ab;'>
                        <h4 style="text-align: center; padding-top: 100px; color: #fff">For Add <br>300 X 250</h4>
                        <!-- <script type="81b7558e552758c8b4c742ff-text/javascript">
                            googletag.cmd.push(function () {
                                googletag.display('div-gpt-ad-1624960273857-0');
                            });
                        </script> -->
                    </div>
                </div>
                <div class="category-right-section-top">
                    <div
                        class="category-header bangladesh-ch d-flex justify-content-between align-items-center politics__home mt-2">
                        <div class="heading custom-heading">
                            <p class="title bangladesh-lc">আপনার এলাকার খবর</p>
                        </div>
                    </div>
                    <div class="row" style="margin: 0">
                        <div class='col-12' style="padding: 8px 0">
                            <div class="form-group" style="margin: 0">
                                <select  class="form-control" name="Division" id="divisions" onchange="divisionsList();">
                                    <option selected value="">বিভাগ</option>
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
                        <div class='col-12' style="padding: 8px 0">
                            <div class="form-group" style="margin: 0">
                                <select class="form-control" name="District" id="distr" onchange="thanaList();"></select>
                                <script>
                                    $("#distr").select2({
                                        allowClear: true,
                                        placeholder: 'জেলা'
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-12" style="padding: 8px 0">
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
                        <div class="col-12" style="padding: 8px 0">
                            <button type="button" class="btn bg-primary dis-sea btn-block text-white"
                                aria-label="Search">
                                খুঁজুন
                                <i class="fa fa-search ml-2" style="color: #FFF !important; height: 100%"></i>
                            </button>
                            <i class="fa fa-search" style="color: #FFF !important"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include 'footer.php';?>