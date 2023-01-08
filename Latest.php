<?php include 'header.php';?>

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
            background: #cfdbe0;
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
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ওমানে বাংলাদেশের শুভসূচনা " data-href="https://www.dhakapost.com/sports/hockey/165239">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/hockey/165239">
                                                ওমানে বাংলাদেশের শুভসূচনা
                                            </a>
                                            <time datetime="2023-01-06 16:26:41">০৬ জানুয়ারি ২০২৩, ০৪:২৬ পিএম</time>
                                            <p class="d-none d-sm-block">এএইচএফ কাপ জুনিয়র টুর্নামেন্টে বাংলাদেশ হকি দল শুভসূচনা করেছে। ওমানে টুর্নামেন্টের প্রথম ম্যাচে বাংলাদেশ ৪-০ গোলে হংকংকে হারায়...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/hockey/165239">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bd-33-20230106162641.jpg?width=330&amp;height=186" alt="ওমানে বাংলাদেশের শুভসূচনা " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জাটকা শিকার করায় ৪ জনকে জরিমানা, নৌকা জব্দ" data-href="https://www.dhakapost.com/national/165238">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165238">
                                                জাটকা শিকার করায় ৪ জনকে জরিমানা, নৌকা জব্দ
                                            </a>
                                            <time datetime="2023-01-06 16:17:21">০৬ জানুয়ারি ২০২৩, ০৪:১৭ পিএম</time>
                                            <p class="d-none d-sm-block">বঙ্গোপসাগরে অবৈধ জাল ব্যবহারের মাধ্যমে জাটকা নিধনের দায়ে দুটি বোট জব্দ করেছে চট্টগ্রাম জেলা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165238">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jatka-20230106161721.jpg?width=330&amp;height=186" alt="জাটকা শিকার করায় ৪ জনকে জরিমানা, নৌকা জব্দ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কেন্দ্রীয় কারাগারে হাজতির মৃত্যু" data-href="https://www.dhakapost.com/national/165237">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165237">
                                                কেন্দ্রীয় কারাগারে হাজতির মৃত্যু
                                            </a>
                                            <time datetime="2023-01-06 16:14:29">০৬ জানুয়ারি ২০২৩, ০৪:১৪ পিএম</time>
                                            <p class="d-none d-sm-block">ঢাকার কেরানীগঞ্জ কেন্দ্রীয় কারাগারে বাচ্চু হাওলাদার (৪০) নামে এক হাজতির মৃত্যু হয়েছে। শুক্রবার (৬ জানুয়ারি) দুপুর আড়াইটার দিকে অসুস্থ অবস্থায় তাকে উদ্ধার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165237">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dfsa-20230106161428.jpg?width=330&amp;height=186" alt="কেন্দ্রীয় কারাগারে হাজতির মৃত্যু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পিবিআই কর্মকর্তা সেজেছিলেন অনিক!" data-href="https://www.dhakapost.com/country/165236">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165236">
                                                পিবিআই কর্মকর্তা সেজেছিলেন অনিক!
                                            </a>
                                            <time datetime="2023-01-06 16:13:30">০৬ জানুয়ারি ২০২৩, ০৪:১৩ পিএম</time>
                                            <p class="d-none d-sm-block">তোমার নামে পিবিআইতে একটি মামলা হয়েছে এবং মামলার ওয়ারেন্ট আছে। তুমি আমাদের নগদ বা বিকাশ করে ৫০ হাজার টাকা পাঠিয়ে দাও। তাহলে আমরা আর আসবো না...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165236">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/pbi-mymansing-20230106161330.jpg?width=330&amp;height=186" alt="পিবিআই কর্মকর্তা সেজেছিলেন অনিক!" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="১ লাখ টাকার কমে চশমা পরেন না করণ!" data-href="https://www.dhakapost.com/entertainment/bollywood/165235">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165235">
                                                ১ লাখ টাকার কমে চশমা পরেন না করণ!
                                            </a>
                                            <time datetime="2023-01-06 16:02:25">০৬ জানুয়ারি ২০২৩, ০৪:০২ পিএম</time>
                                            <p class="d-none d-sm-block">বলিউড প্রযোজক ও পরিচালক করণ জোহর বরাবরই ফ্যাশন সচেতন। ব্র্যান্ডেড পোশাক, বহুমূল্য প্রসাধনী দ্রব্য আর অবশ্যই পোশাকের সঙ্গে মানানসই অ্যাকসেসরিজ থাকা চাই তার।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165235">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/karan-johar-20230106160225.jpg?width=330&amp;height=186" alt="১ লাখ টাকার কমে চশমা পরেন না করণ!" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="স্মার্ট বাংলাদেশ গড়তে স্মার্ট পাঠদান পদ্ধতি অপরিহার্য" data-href="https://www.dhakapost.com/national/165234">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165234">
                                                স্মার্ট বাংলাদেশ গড়তে স্মার্ট পাঠদান পদ্ধতি অপরিহার্য
                                            </a>
                                            <time datetime="2023-01-06 16:01:59">০৬ জানুয়ারি ২০২৩, ০৪:০১ পিএম</time>
                                            <p class="d-none d-sm-block">ডাক ও টেলিযোগাযোগ মন্ত্রী মোস্তাফা জব্বার বলেছেন, শিক্ষাপ্রতিষ্ঠানগুলোতে ইন্ডাস্ট্রির উপযোগী স্মার্ট পাঠদান পদ্ধতি ‘স্মার্ট বাংলাদেশ’ গড়ে তোলার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165234">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/mostafa-jabbar-20230106160159.jpg?width=330&amp;height=186" alt="স্মার্ট বাংলাদেশ গড়তে স্মার্ট পাঠদান পদ্ধতি অপরিহার্য" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল" data-href="https://www.dhakapost.com/economy/165233">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165233">
                                                পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল
                                            </a>
                                            <time datetime="2023-01-06 15:59:38">০৬ জানুয়ারি ২০২৩, ০৩:৫৯ পিএম</time>
                                            <p class="d-none d-sm-block">সপ্তাহজুড়ে পুঁজিবাজারে তালিকাভুক্ত পাঁচ কোম্পানির বোনাস শেয়ার লভ্যাংশের প্রস্তাব বাতিল করেছে বাংলাদেশ সিকিউরিটিজ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165233">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ezgif-5-e77c00cdcb-20230106155938.jpg?width=330&amp;height=186" alt="পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আইনজীবীরা সবার আগে আইন মেনে চলেন : আইনমন্ত্রী" data-href="https://www.dhakapost.com/country/165232">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165232">
                                                আইনজীবীরা সবার আগে আইন মেনে চলেন : আইনমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-06 15:58:40">০৬ জানুয়ারি ২০২৩, ০৩:৫৮ পিএম</time>
                                            <p class="d-none d-sm-block">ব্রাহ্মণবাড়িয়ায় বিচারককে আইনজীবীদের গালিগালাজের ঘটনায় আইনমন্ত্রী আনিসুল হক বলেছেন, এটা হাইকোর্ট তার এখতিয়ারে নিয়েছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165232">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/anisul2-20230106155839.jpg?width=330&amp;height=186" alt="আইনজীবীরা সবার আগে আইন মেনে চলেন : আইনমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল" data-href="https://www.dhakapost.com/economy/stock-market/165231">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/stock-market/165231">
                                                পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল
                                            </a>
                                            <time datetime="2023-01-06 15:53:44">০৬ জানুয়ারি ২০২৩, ০৩:৫৩ পিএম</time>
                                            <p class="d-none d-sm-block">সপ্তাহজুড়ে পুঁজিবাজারে তালিকাভুক্ত পাঁচ কোম্পানির বোনাস শেয়ার লভ্যাংশের প্রস্তাব বাতিল করেছে নিয়ন্ত্রক সংস্থা বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/stock-market/165231">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ezgif-4-fecadcdd5b-202212270607321-202301041706391-20230106155344.jpg?width=330&amp;height=186" alt="পাঁচ কোম্পানির বোনাস লভ্যাংশের প্রস্তাব বাতিল" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চট্টগ্রামের সংগ্রহ মোটে ৮৯ " data-href="https://www.dhakapost.com/sports/cricket/165230">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165230">
                                                চট্টগ্রামের সংগ্রহ মোটে ৮৯
                                            </a>
                                            <time datetime="2023-01-06 15:48:44">০৬ জানুয়ারি ২০২৩, ০৩:৪৮ পিএম</time>
                                            <p class="d-none d-sm-block">মাশরাফি-মুশফিকদের অভিজ্ঞ সিলেট দলের সামনে শুরু থেকেই বেশ অসহায় লেগেছে তারুণ্যনির্ভর চট্টগ্রাম দলকে। মোহাম্মদ আমির ও রেজাউর রহমান...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165230">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bpl-3-20230106154844.jpg?width=330&amp;height=186" alt="চট্টগ্রামের সংগ্রহ মোটে ৮৯ " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাকা লিট ফেস্টে ‘রোহিঙ্গা সংস্কৃতির পুনর্জন্ম ও আলো’" data-href="https://www.dhakapost.com/literature/165229">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/literature/165229">
                                                ঢাকা লিট ফেস্টে ‘রোহিঙ্গা সংস্কৃতির পুনর্জন্ম ও আলো’
                                            </a>
                                            <time datetime="2023-01-06 15:43:52">০৬ জানুয়ারি ২০২৩, ০৩:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">বিশ্ব সাহিত্য ও সংস্কৃতি নিয়ে বাংলাদেশের সবচেয়ে বড় আয়োজন ঢাকা লিট ফেস্টে জাতিসংঘের শরণার্থী সংস্থা ইউএনএইচসিআর, আন্তর্জাতিক সংস্থা আর্টোল্যুশন এবং তের...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/literature/165229">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/screenshot-20230106-150931--20230106154352.jpg?width=330&amp;height=186" alt="ঢাকা লিট ফেস্টে ‘রোহিঙ্গা সংস্কৃতির পুনর্জন্ম ও আলো’" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="অত্যাধুনিক ইলেকট্রিক গাড়ি বাজারে আনছে ‘টেক জায়ান্ট’ সনি" data-href="https://www.dhakapost.com/economy/165228">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165228">
                                                অত্যাধুনিক ইলেকট্রিক গাড়ি বাজারে আনছে ‘টেক জায়ান্ট’ সনি
                                            </a>
                                            <time datetime="2023-01-06 15:43:38">০৬ জানুয়ারি ২০২৩, ০৩:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">আফিলা গাড়িটির ভেতর ও বাইরে মিলিয়ে মোট ৪৫টি ক্যামেরা এবং সেন্সর দেওয়া...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165228">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/soni-car-20230106154338.jpg?width=330&amp;height=186" alt="অত্যাধুনিক ইলেকট্রিক গাড়ি বাজারে আনছে ‘টেক জায়ান্ট’ সনি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="৭ দফা দাবিতে যুব অধিকার পরিষদের সমাবেশ শুরু" data-href="https://www.dhakapost.com/national/165227">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165227">
                                                ৭ দফা দাবিতে যুব অধিকার পরিষদের সমাবেশ শুরু
                                            </a>
                                            <time datetime="2023-01-06 15:42:04">০৬ জানুয়ারি ২০২৩, ০৩:৪২ পিএম</time>
                                            <p class="d-none d-sm-block">চাহিদাভিত্তিক শিক্ষা ব্যবস্থা প্রণয়নসহ ৭ দফা দাবিতে যুব সমাবেশ শুরু করেছে বাংলাদেশ যুব অধিকার পরিষদ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165227">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jubo-2-20230106154203.jpg?width=330&amp;height=186" alt="৭ দফা দাবিতে যুব অধিকার পরিষদের সমাবেশ শুরু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দেশব্যাপী পালিত হলো টোটাল ফিটনেস ডে" data-href="https://www.dhakapost.com/health/165226">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/health/165226">
                                                দেশব্যাপী পালিত হলো টোটাল ফিটনেস ডে
                                            </a>
                                            <time datetime="2023-01-06 15:38:00">০৬ জানুয়ারি ২০২৩, ০৩:৩৮ পিএম</time>
                                            <p class="d-none d-sm-block">‘সুস্থ দেহ প্রশান্ত মন কর্মব্যস্ত সুখী জীবন’ প্রতিপাদ্য নিয়ে প্রথমবারের মতো দেশব্যাপী ব্যাপক আয়োজনে পালিত হলো টোটাল ফিটনেস ডে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/health/165226">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/yoga-20230106153800.jpg?width=330&amp;height=186" alt="দেশব্যাপী পালিত হলো টোটাল ফিটনেস ডে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="তারেক-জোবাইদার সম্পত্তি বাজেয়াপ্তের প্রতিবাদে যুবদলের বিক্ষোভ" data-href="https://www.dhakapost.com/politics/165225">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165225">
                                                তারেক-জোবাইদার সম্পত্তি বাজেয়াপ্তের প্রতিবাদে যুবদলের বিক্ষোভ
                                            </a>
                                            <time datetime="2023-01-06 15:36:37">০৬ জানুয়ারি ২০২৩, ০৩:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">দুদকের মামলায় আদালত কর্তৃক বিএনপির ভারপ্রাপ্ত চেয়ারম্যান তারেক রহমান ও তার স্ত্রী ডা. জোবাইদা রহমানের সম্পদ ক্রোকের আদেশের প্রতিবাদে বিক্ষোভ মিছিল করেছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165225">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jubo-20230106153637.jpg?width=330&amp;height=186" alt="তারেক-জোবাইদার সম্পত্তি বাজেয়াপ্তের প্রতিবাদে যুবদলের বিক্ষোভ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আমরা বাংলাদেশের উন্নতি দেখতে চাই : সেনাপ্রধান" data-href="https://www.dhakapost.com/country/165224">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165224">
                                                আমরা বাংলাদেশের উন্নতি দেখতে চাই : সেনাপ্রধান
                                            </a>
                                            <time datetime="2023-01-06 15:36:29">০৬ জানুয়ারি ২০২৩, ০৩:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">সেনাবাহিনীর প্রধান জেনারেল এস এম শফিউদ্দিন আহমেদ শিক্ষার্থীদের উদ্দেশে বলেছেন, আমরা অতীতের পর্যায়ে, তোমরা হলে ভবিষ্যৎ</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165224">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/khulna1-20230106153629.jpg?width=330&amp;height=186" alt="আমরা বাংলাদেশের উন্নতি দেখতে চাই : সেনাপ্রধান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="টুঙ্গিপাড়া থেকে খুলনার পথে প্রধানমন্ত্রী " data-href="https://www.dhakapost.com/country/165223">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165223">
                                                টুঙ্গিপাড়া থেকে খুলনার পথে প্রধানমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-06 15:24:54">০৬ জানুয়ারি ২০২৩, ০৩:২৪ পিএম</time>
                                            <p class="d-none d-sm-block">দুই দিনের ব্যক্তিগত সফরে গোপালগঞ্জের টুঙ্গিপাড়ায় এসে বঙ্গমাতা ফজিলাতুন্নেছা মুজিবের নামে কেনা ৪ বিঘা জমির ওপর পাটগুদাম দেখতে ছোট বোন শেখ রেহানাকে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165223">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/pm03-20230106152454.jpg?width=330&amp;height=186" alt="টুঙ্গিপাড়া থেকে খুলনার পথে প্রধানমন্ত্রী " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জাতীয় চলচ্চিত্র পুরস্কার পাচ্ছেন যারা" data-href="https://www.dhakapost.com/entertainment/dhallywood/165222">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/165222">
                                                জাতীয় চলচ্চিত্র পুরস্কার পাচ্ছেন যারা
                                            </a>
                                            <time datetime="2023-01-06 15:16:50">০৬ জানুয়ারি ২০২৩, ০৩:১৬ পিএম</time>
                                            <p class="d-none d-sm-block">দেশীয় চলচ্চিত্র অভিনয়শিল্পী ও কলাকুশলীদের কাছে জাতীয় চলচ্চিত্র পুরস্কার বরাবরই সর্বোচ্চ সম্মানের আসনে আসীন। প্রতি বছর ২৮টি ক্যাটাগরিতে দেওয়া হয় এই স্বীকৃতি।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/165222">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/na-20230106151650.jpg?width=330&amp;height=186" alt="জাতীয় চলচ্চিত্র পুরস্কার পাচ্ছেন যারা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সরকার কখনোই আদালতে হস্তক্ষেপ করে না : আইনমন্ত্রী" data-href="https://www.dhakapost.com/country/165221">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165221">
                                                সরকার কখনোই আদালতে হস্তক্ষেপ করে না : আইনমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-06 15:10:49">০৬ জানুয়ারি ২০২৩, ০৩:১০ পিএম</time>
                                            <p class="d-none d-sm-block">আইনমন্ত্রী আনিসুল হক বলেছেন, সরকার কখনোই আদালতে হস্তক্ষেপ করে না। আদালতে মামলা চলছে, আদালত স্বাধীনভাবে তাদের সিদ্ধান্ত দিচ্ছে....</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165221">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/anisul1-20230106152149.jpg?width=330&amp;height=186" alt="সরকার কখনোই আদালতে হস্তক্ষেপ করে না : আইনমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চট্টগ্রামকে চেপে ধরেছে সিলেট" data-href="https://www.dhakapost.com/sports/cricket/165220">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165220">
                                                চট্টগ্রামকে চেপে ধরেছে সিলেট
                                            </a>
                                            <time datetime="2023-01-06 15:01:46">০৬ জানুয়ারি ২০২৩, ০৩:০১ পিএম</time>
                                            <p class="d-none d-sm-block">মিরপুর শেরে-ই-বাংলা স্টেডিয়ামে টস হেরে ব্যাট করতে নেমে ব্যাটিং বিপর্যয়ে পড়েছে চট্টগ্রাম চ্যালেন্জার্স। সিলেট সিক্সারসের বোলারদের তোপে পড়ে ৪৭ রানেই ৫ উইকেট...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165220">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sylhet-20230106150145.jpg?width=330&amp;height=186" alt="চট্টগ্রামকে চেপে ধরেছে সিলেট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="২০২৩: পুরুষ অভিভাবক ছাড়াই হজ করতে পারবেন সৌদি নারীরা" data-href="https://www.dhakapost.com/international/165219">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165219">
                                                ২০২৩: পুরুষ অভিভাবক ছাড়াই হজ করতে পারবেন সৌদি নারীরা
                                            </a>
                                            <time datetime="2023-01-06 14:51:47">০৬ জানুয়ারি ২০২৩, ০২:৫১ পিএম</time>
                                            <p class="d-none d-sm-block">চলতি বছরের হজ মৌসুমের জন্য নিবন্ধন চালুর ঘোষণা দিয়েছে সৌদি আরব। বৃহস্পতিবার (৫ জানুয়ারি) স্থানীয় মুসলমানদের জন্য হজের নিবন্ধন উন্মুক্ত করার ঘোষণা দেয় দেশটির হজ</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165219">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/hajj-20230106145147.jpg?width=330&amp;height=186" alt="২০২৩: পুরুষ অভিভাবক ছাড়াই হজ করতে পারবেন সৌদি নারীরা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="স্যাটেলাইটের মাধ্যমে জরুরি বার্তা পাঠানো যাবে অ্যান্ড্রয়েডেও" data-href="https://www.dhakapost.com/technology/165218">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/technology/165218">
                                                স্যাটেলাইটের মাধ্যমে জরুরি বার্তা পাঠানো যাবে অ্যান্ড্রয়েডেও
                                            </a>
                                            <time datetime="2023-01-06 14:31:57">০৬ জানুয়ারি ২০২৩, ০২:৩১ পিএম</time>
                                            <p class="d-none d-sm-block">আইফোন ১৪ এর মতো স্যাটেলাইট বা কৃত্রিম উপগ্রহের সংযোগ ব্যবহার করে জরুরি বিপদ বার্তা পাঠানোর নতুন ফিচার নিয়ে এসেছে অ্যান্ড্রয়েড। এর ফলে মোবাইল নেটওয়ার্কের বাইরে</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/technology/165218">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cats-20230106143157.jpg?width=330&amp;height=186" alt="স্যাটেলাইটের মাধ্যমে জরুরি বার্তা পাঠানো যাবে অ্যান্ড্রয়েডেও" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="৩ ঘণ্টা পর ৩ বগি ছাড়াই ভৈরব ছাড়ল এগারো সিন্ধুর প্রভাতী ট্রেন" data-href="https://www.dhakapost.com/country/165217">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165217">
                                                ৩ ঘণ্টা পর ৩ বগি ছাড়াই ভৈরব ছাড়ল এগারো সিন্ধুর প্রভাতী ট্রেন
                                            </a>
                                            <time datetime="2023-01-06 14:25:39">০৬ জানুয়ারি ২০২৩, ০২:২৫ পিএম</time>
                                            <p class="d-none d-sm-block">কিশোরগঞ্জের ভৈরবে এগারো সিন্ধুর প্রভাতী ট্রেনের বগি লাইনচ্যুত হওয়ার তিন ঘণ্টা পর বগিটি উদ্ধার করা হয়েছে। লাইনচ্যুত বগিটির পাশাপাশি আরও দুটি বগি ক্ষতিগ্রস্ত...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165217">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bhorob-20230106142538.jpg?width=330&amp;height=186" alt="৩ ঘণ্টা পর ৩ বগি ছাড়াই ভৈরব ছাড়ল এগারো সিন্ধুর প্রভাতী ট্রেন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চাকরি না পেয়ে চায়ের দোকান খুললেন দুই ইঞ্জিনিয়ার বন্ধু" data-href="https://www.dhakapost.com/international/165216">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165216">
                                                চাকরি না পেয়ে চায়ের দোকান খুললেন দুই ইঞ্জিনিয়ার বন্ধু
                                            </a>
                                            <time datetime="2023-01-06 14:16:01">০৬ জানুয়ারি ২০২৩, ০২:১৬ পিএম</time>
                                            <p class="d-none d-sm-block">চাকরি না পেয়ে শেষমেশ চায়ের দোকান খুললেন দুই ইঞ্জিনিয়ার। রাহুল আলি ও আলমগীর খান। দুজনেই বন্ধু, দুজনেই বি.টেক পাস করে চাকরির চেষ্টা করেন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165216">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106141601.jpg?width=330&amp;height=186" alt="চাকরি না পেয়ে চায়ের দোকান খুললেন দুই ইঞ্জিনিয়ার বন্ধু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কাশিমপুর কারাগারে বন্দী হুজি সদস্যের মৃত্যু" data-href="https://www.dhakapost.com/country/165215">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165215">
                                                কাশিমপুর কারাগারে বন্দী হুজি সদস্যের মৃত্যু
                                            </a>
                                            <time datetime="2023-01-06 14:08:34">০৬ জানুয়ারি ২০২৩, ০২:০৮ পিএম</time>
                                            <p class="d-none d-sm-block">গাজীপুরের কাশিমপুর কারাগার-২ এ বন্দি জঙ্গি সংগঠন হরকাতুল জিহাদের (হুজি) সদস্য আবুল হোসেন খোকনের (৫৫) মৃত্যু হয়েছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165215">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gazipur-20230106140834.jpg?width=330&amp;height=186" alt="কাশিমপুর কারাগারে বন্দী হুজি সদস্যের মৃত্যু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিপিএলের প্রথম ম্যাচে টস জিতে ফিল্ডিংয়ে মাশরাফির সিলেট" data-href="https://www.dhakapost.com/sports/cricket/165214">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165214">
                                                বিপিএলের প্রথম ম্যাচে টস জিতে ফিল্ডিংয়ে মাশরাফির সিলেট
                                            </a>
                                            <time datetime="2023-01-06 14:00:15">০৬ জানুয়ারি ২০২৩, ০২:০০ পিএম</time>
                                            <p class="d-none d-sm-block">বিপিএলের উদ্বোধনী ম্যাচে আজ সিলেট স্ট্রাইকার্স মুখোমুখি হয়েছে চট্টগ্রাম চ্যালেঞ্জার্সের। সেই ম্যাচে টসে জিতেছেন সিলেট অধিনায়ক মাশরাফি বিন মুর্তজা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165214">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bpl-opener-20230106140015.jpg?width=330&amp;height=186" alt="বিপিএলের প্রথম ম্যাচে টস জিতে ফিল্ডিংয়ে মাশরাফির সিলেট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চট্টগ্রামের হালিশহরে ব্যাংকের আগুন নিয়ন্ত্রণে" data-href="https://www.dhakapost.com/national/165213">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165213">
                                                চট্টগ্রামের হালিশহরে ব্যাংকের আগুন নিয়ন্ত্রণে
                                            </a>
                                            <time datetime="2023-01-06 13:59:42">০৬ জানুয়ারি ২০২৩, ০১:৫৯ পিএম</time>
                                            <p class="d-none d-sm-block">চট্টগ্রামের হালিশহরে ইস্টার্ন ব্যাংকে লাগা আগুন নিয়ন্ত্রণে এসেছে। ফায়ার সার্ভিস অ্যান্ড সিভিল ডিফেন্সের ৭টি ইউনিটের চেষ্টায় দুপুর ১টা ৩০ মিনিটের..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165213">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/agun-20230106135942.jpg?width=330&amp;height=186" alt="চট্টগ্রামের হালিশহরে ব্যাংকের আগুন নিয়ন্ত্রণে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শৈত্যপ্রবাহ অব্যাহত থাকতে পারে " data-href="https://www.dhakapost.com/national/165212">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165212">
                                                শৈত্যপ্রবাহ অব্যাহত থাকতে পারে
                                            </a>
                                            <time datetime="2023-01-06 13:53:38">০৬ জানুয়ারি ২০২৩, ০১:৫৩ পিএম</time>
                                            <p class="d-none d-sm-block">নওগাঁ, দিনাজপুর, পঞ্চগড়, যশোর ও চুয়াডাঙ্গার ওপর দিয়ে বয়ে যাওয়া মৃদু শৈত্যপ্রবাহ অব্যাহত থাকতে পারে বলে জানিয়েছে আবহাওয়া অধিদপ্তর। </p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165212">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/158-20230106135337.jpg?width=330&amp;height=186" alt="শৈত্যপ্রবাহ অব্যাহত থাকতে পারে " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আওয়ামী লীগের নবনির্বাচিত কমিটির যৌথসভা টুঙ্গিপাড়ায়" data-href="https://www.dhakapost.com/politics/165211">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165211">
                                                আওয়ামী লীগের নবনির্বাচিত কমিটির যৌথসভা টুঙ্গিপাড়ায়
                                            </a>
                                            <time datetime="2023-01-06 13:43:08">০৬ জানুয়ারি ২০২৩, ০১:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">আওয়ামী লীগের নব-নির্বাচিত জাতীয় কমিটি, কেন্দ্রীয় কার্যনির্বাহী সংসদ ও উপদেষ্টা পরিষদের যৌথসভা অনুষ্ঠিত হবে শনিবার।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165211">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/148-20230106134308.jpg?width=330&amp;height=186" alt="আওয়ামী লীগের নবনির্বাচিত কমিটির যৌথসভা টুঙ্গিপাড়ায়" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আরব আমিরাত: বাড়তি সময় থাকলে পর্যটকদের গুনতে হচ্ছে জরিমানা" data-href="https://www.dhakapost.com/international/165210">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165210">
                                                আরব আমিরাত: বাড়তি সময় থাকলে পর্যটকদের গুনতে হচ্ছে জরিমানা
                                            </a>
                                            <time datetime="2023-01-06 13:42:11">০৬ জানুয়ারি ২০২৩, ০১:৪২ পিএম</time>
                                            <p class="d-none d-sm-block">মধ্যপ্রাচ্য তথা উপসাগরীয় দেশগুলোর মধ্যে পর্যটকদের অন্যতম জনপ্রিয় গন্তব্য সংযুক্ত আরব আমিরাত (ইউএই)। সারা বিশ্ব থেকে প্রতি বছর লাখও পর্যটক দেশটিতে ভ্রমণ করে</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165210">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/uae-20230106134211.jpg?width=330&amp;height=186" alt="আরব আমিরাত: বাড়তি সময় থাকলে পর্যটকদের গুনতে হচ্ছে জরিমানা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দেশে কোনো সংকট নেই, সংকটে আছে বিএনপি : হানিফ " data-href="https://www.dhakapost.com/country/165209">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165209">
                                                দেশে কোনো সংকট নেই, সংকটে আছে বিএনপি : হানিফ
                                            </a>
                                            <time datetime="2023-01-06 13:11:05">০৬ জানুয়ারি ২০২৩, ০১:১১ পিএম</time>
                                            <p class="d-none d-sm-block">আওয়ামী লীগের যুগ্ম সাধারণ সম্পাদক মাহবুব উল আলম হানিফ বলেছেন, দেশে কোনো সংকট নেই, মানুষও কোনো সংকটে নেই, সংকটে আছে বিএনপি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165209">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/hanif1-20230106131105.jpg?width=330&amp;height=186" alt="দেশে কোনো সংকট নেই, সংকটে আছে বিএনপি : হানিফ " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চট্টগ্রামের হালিশহরে ব্যাংকে আগুন, নিয়ন্ত্রণে ৭ ইউনিট" data-href="https://www.dhakapost.com/national/165208">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165208">
                                                চট্টগ্রামের হালিশহরে ব্যাংকে আগুন, নিয়ন্ত্রণে ৭ ইউনিট
                                            </a>
                                            <time datetime="2023-01-06 13:07:49">০৬ জানুয়ারি ২০২৩, ০১:০৭ পিএম</time>
                                            <p class="d-none d-sm-block">চট্টগ্রামের হালিশহরে ইস্টার্ন ব্যাংকের শাখায় আগুন লেগেছে। খবর পেয়ে আগুন নিয়ন্ত্রণে ফায়ার সার্ভিস অ্যান্ড সিভিল ডিফেন্সের ৭টি ইউনিট ঘটনাস্থলে গেছে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165208">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/116-20230106131111.jpg?width=330&amp;height=186" alt="চট্টগ্রামের হালিশহরে ব্যাংকে আগুন, নিয়ন্ত্রণে ৭ ইউনিট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আর্জেন্টিনার ঘরে ঘরে জন্ম নিচ্ছে ‘লিওনেল’" data-href="https://www.dhakapost.com/sports/football/165207">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/football/165207">
                                                আর্জেন্টিনার ঘরে ঘরে জন্ম নিচ্ছে ‘লিওনেল’
                                            </a>
                                            <time datetime="2023-01-06 13:03:00">০৬ জানুয়ারি ২০২৩, ০১:০৩ পিএম</time>
                                            <p class="d-none d-sm-block">৩৬ বছরের অপেক্ষা শেষে বিশ্বকাপ জিতেছে আর্জেন্টিনা। আকাশি-সাদাদের এই অপেক্ষার অবসান ঘটেছে লিওনেল মেসির হাত ধরে। বড় অবদান রেখে আর্জেন্টিনাকে বিশ্বকাপ জেতানোর...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/football/165207">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/messi-20230106130259.jpg?width=330&amp;height=186" alt="আর্জেন্টিনার ঘরে ঘরে জন্ম নিচ্ছে ‘লিওনেল’" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="মোহাম্মদপুর থেকে গাঁজাসহ নারী মাদক কারবারি গ্রেপ্তার" data-href="https://www.dhakapost.com/national/165206">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165206">
                                                মোহাম্মদপুর থেকে গাঁজাসহ নারী মাদক কারবারি গ্রেপ্তার
                                            </a>
                                            <time datetime="2023-01-06 12:58:46">০৬ জানুয়ারি ২০২৩, ১২:৫৮ পিএম</time>
                                            <p class="d-none d-sm-block">রাজধানীর মোহাম্মদপুর থেকে গাঁজাসহ এক মাদক কারবারিকে গ্রেপ্তার করেছে ঢাকা মেট্রোপলিটন পুলিশের (ডিএমপি) গোয়েন্দা-মতিঝিল বিভাগ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165206">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106125846.jpg?width=330&amp;height=186" alt="মোহাম্মদপুর থেকে গাঁজাসহ নারী মাদক কারবারি গ্রেপ্তার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="র‍্যাব বা নির্দিষ্ট একটা ইস্যুতে সম্পর্কের মূল্যায়ন হয় না" data-href="https://www.dhakapost.com/national/165205">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165205">
                                                র‍্যাব বা নির্দিষ্ট একটা ইস্যুতে সম্পর্কের মূল্যায়ন হয় না
                                            </a>
                                            <time datetime="2023-01-06 12:53:29">০৬ জানুয়ারি ২০২৩, ১২:৫৩ পিএম</time>
                                            <p class="d-none d-sm-block">পররাষ্ট্রমন্ত্রী ড. এ. কে. আব্দুল মোমেন বলেছেন, র‍্যাব বা নির্দিষ্ট একটা ইস্যু নিয়ে একটা দেশের সঙ্গে সম্পর্কের মূল্যায়ন হয় না...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165205">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106125329.jpg?width=330&amp;height=186" alt="র‍্যাব বা নির্দিষ্ট একটা ইস্যুতে সম্পর্কের মূল্যায়ন হয় না" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আলোচনায় ফারহান-তিশার ‘কঞ্জুস’" data-href="https://www.dhakapost.com/entertainment/165204">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165204">
                                                আলোচনায় ফারহান-তিশার ‘কঞ্জুস’
                                            </a>
                                            <time datetime="2023-01-06 12:50:29">০৬ জানুয়ারি ২০২৩, ১২:৫০ পিএম</time>
                                            <p class="d-none d-sm-block">গত কয়েক বছরে অনবদ্য অভিনয় দিয়ে নাট্যাঙ্গনে তুমুল আলোচনায় এসেছেন যিনি, তিনি মুশফিক আর ফারহান। বছরজুড়েই গল্পনির্ভর নাটকে তার দেখা মেলে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165204">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/konjus-20230106125029.jpg?width=330&amp;height=186" alt="আলোচনায় ফারহান-তিশার ‘কঞ্জুস’" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এবারের বইমেলায় বায়াজিদ গালিবের ‌বাসর রাতের বিড়াল" data-href="https://www.dhakapost.com/probash/165203">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/probash/165203">
                                                এবারের বইমেলায় বায়াজিদ গালিবের ‌বাসর রাতের বিড়াল
                                            </a>
                                            <time datetime="2023-01-06 12:44:23">০৬ জানুয়ারি ২০২৩, ১২:৪৪ পিএম</time>
                                            <p class="d-none d-sm-block">আগামী ফেব্রুয়ারির বইমেলায় প্রবাসী রম্য লেখক বায়াজিদ গালিবের রম্য গল্পের বই ‌‘বাসর রাতের বিড়াল’ প্রকাশিত হতে যাচ্ছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/probash/165203">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106124423.jpg?width=330&amp;height=186" alt="এবারের বইমেলায় বায়াজিদ গালিবের ‌বাসর রাতের বিড়াল" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সবজির দাম কিছুটা কম, মাছ-মাংস আগের মতোই চড়া" data-href="https://www.dhakapost.com/economy/165202">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165202">
                                                সবজির দাম কিছুটা কম, মাছ-মাংস আগের মতোই চড়া
                                            </a>
                                            <time datetime="2023-01-06 12:39:37">০৬ জানুয়ারি ২০২৩, ১২:৩৯ পিএম</time>
                                            <p class="d-none d-sm-block">বাজারে শীতকালীন সবজির দাম অন্য সময়ের চেয়ে তুলনামূলক কম। তবে মাছ-মাংসের মূল্য আগের মতোই চড়া। ক্রেতাদের অভিযোগ, মাছ-মাংসের বাজার দিন দিন নিম্ন-মধ্যবিত্তদের..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165202">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/fish-manso-20230106124652.jpg?width=330&amp;height=186" alt="সবজির দাম কিছুটা কম, মাছ-মাংস আগের মতোই চড়া" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ভৈরবে এগারো সিন্ধুর প্রভাতী ট্রেনের বগি লাইনচ্যুত, আহত ১০" data-href="https://www.dhakapost.com/country/165201">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165201">
                                                ভৈরবে এগারো সিন্ধুর প্রভাতী ট্রেনের বগি লাইনচ্যুত, আহত ১০
                                            </a>
                                            <time datetime="2023-01-06 12:39:19">০৬ জানুয়ারি ২০২৩, ১২:৩৯ পিএম</time>
                                            <p class="d-none d-sm-block">কিশোরগঞ্জের ভৈরবে এগারো সিন্ধুর প্রভাতী ট্রেনের ইঞ্জিন ঘুরানোর সময় একটি বগি লাইনচ্যুত হয়েছে। শুক্রবার (৬ জানুয়ারি) সকাল সাড়ে ৯টার দিকে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165201">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/kishorgonj1-20230106123919.jpg?width=330&amp;height=186" alt="ভৈরবে এগারো সিন্ধুর প্রভাতী ট্রেনের বগি লাইনচ্যুত, আহত ১০" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ভারতে মন্দিরে প্লেন বিধ্বস্ত, পাইলট নিহত" data-href="https://www.dhakapost.com/international/165200">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165200">
                                                ভারতে মন্দিরে প্লেন বিধ্বস্ত, পাইলট নিহত
                                            </a>
                                            <time datetime="2023-01-06 12:36:44">০৬ জানুয়ারি ২০২৩, ১২:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">ভারতে একটি প্রশিক্ষণ প্লেন বিধ্বস্ত হয়েছে। এতে প্লেনটির এক পাইলট নিহত হয়েছেন। এছাড়া এই ঘটনায় আহত হয়েছেন আরও এক পাইলট। বৃহস্পতিবার (৫ জানুয়ারি) রাতে ভারতের</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165200">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/untitled-2-20230106123644.jpg?width=330&amp;height=186" alt="ভারতে মন্দিরে প্লেন বিধ্বস্ত, পাইলট নিহত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পছন্দের মানুষকে বিয়ে করতে সিলেটে ছুটে এলেন জার্মান তরুণী" data-href="https://www.dhakapost.com/country/165199">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165199">
                                                পছন্দের মানুষকে বিয়ে করতে সিলেটে ছুটে এলেন জার্মান তরুণী
                                            </a>
                                            <time datetime="2023-01-06 12:28:32">০৬ জানুয়ারি ২০২৩, ১২:২৮ পিএম</time>
                                            <p class="d-none d-sm-block">পছন্দের মানুষকে বিয়ে করতে সুদূর জার্মানি থেকে সিলেটের বিশ্বনাথে ছুটে এসেছেন মারিয়া নামে এক জার্মান তরুণী। জার্মানের একটি বিশ্ববিদ্যালয়ের শিক্ষক মারিয়ার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165199">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sylhet1-20230106122831.jpg?width=330&amp;height=186" alt="পছন্দের মানুষকে বিয়ে করতে সিলেটে ছুটে এলেন জার্মান তরুণী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দুবাইয়ের সংবাদ মাধ্যমে চাকরি, কাজ রোনালদোর খবর ছাপা" data-href="https://www.dhakapost.com/sports/football/165198">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/football/165198">
                                                দুবাইয়ের সংবাদ মাধ্যমে চাকরি, কাজ রোনালদোর খবর ছাপা
                                            </a>
                                            <time datetime="2023-01-06 12:23:33">০৬ জানুয়ারি ২০২৩, ১২:২৩ পিএম</time>
                                            <p class="d-none d-sm-block">রোনালদোর বিশালতা এমনই যে, তার জন্য একজন পূর্ণকালীন প্রতিবেদক প্রয়োজন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/football/165198">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ronaldo-al-nassr-20230106122333.jpg?width=330&amp;height=186" alt="দুবাইয়ের সংবাদ মাধ্যমে চাকরি, কাজ রোনালদোর খবর ছাপা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দিনাজপুরে বাসা থেকে স্বামী-স্ত্রীর মরদেহ উদ্ধার" data-href="https://www.dhakapost.com/country/165197">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165197">
                                                দিনাজপুরে বাসা থেকে স্বামী-স্ত্রীর মরদেহ উদ্ধার
                                            </a>
                                            <time datetime="2023-01-06 12:09:25">০৬ জানুয়ারি ২০২৩, ১২:০৯ পিএম</time>
                                            <p class="d-none d-sm-block">দিনাজপুর পৌর শহরের একটি ভাড়া বাসা থেকে স্বামী-স্ত্রীর মরদেহ উদ্ধার করেছে পুলিশ। শুক্রবার (৬ জানুয়ারি) সকালে শহরের লিলির...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165197">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dinajpur1-20230106120925.jpg?width=330&amp;height=186" alt="দিনাজপুরে বাসা থেকে স্বামী-স্ত্রীর মরদেহ উদ্ধার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঋষভের হাসপাতালের সামনে ঘুরঘুর করছেন উর্বশী?" data-href="https://www.dhakapost.com/entertainment/bollywood/165196">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165196">
                                                ঋষভের হাসপাতালের সামনে ঘুরঘুর করছেন উর্বশী?
                                            </a>
                                            <time datetime="2023-01-06 11:57:24">০৬ জানুয়ারি ২০২৩, ১১:৫৭ এএম</time>
                                            <p class="d-none d-sm-block">উর্বশীর যে ঋষভের প্রতি দুর্বলতা আছে, সেটা এখন ‘ওপেন সিক্রেট’। পান্তের প্রতি ভালোবাসার কথা বারবারই প্রকাশ করেছেন উর্বশী। তার খেলা দেখতে মাঠেও পৌঁছে গিয়েছেন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165196">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ru-20230106115724.jpg?width=330&amp;height=186" alt="ঋষভের হাসপাতালের সামনে ঘুরঘুর করছেন উর্বশী?" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="প্রমোদতরীতে বারাণসী-পাটনা-কলকাতা-ঢাকা হয়ে আসাম, খরচ কত?" data-href="https://www.dhakapost.com/international/165195">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165195">
                                                প্রমোদতরীতে বারাণসী-পাটনা-কলকাতা-ঢাকা হয়ে আসাম, খরচ কত?
                                            </a>
                                            <time datetime="2023-01-06 11:56:56">০৬ জানুয়ারি ২০২৩, ১১:৫৬ এএম</time>
                                            <p class="d-none d-sm-block">আনুষ্ঠানিক নাম গঙ্গা বিলাস। বিলাসবহুল এই প্রমোদতরীতে থাকবে নদী-বিহারের ব্যবস্থা। শুরু হবে ভারতের উত্তরপ্রদেশ রাজ্যের বারাণসী শহর থেকে। তারপর বিহারের পাটনা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165195">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/untitled-1-20230106115656.jpg?width=330&amp;height=186" alt="প্রমোদতরীতে বারাণসী-পাটনা-কলকাতা-ঢাকা হয়ে আসাম, খরচ কত?" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="‍‍রস উৎসব আমাদের গ্রামীণ ঐতিহ্য ও সংস্কৃতির অনুষঙ্গ : কে এ খালিদ" data-href="https://www.dhakapost.com/national/165194">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165194">
                                                ‍‍রস উৎসব আমাদের গ্রামীণ ঐতিহ্য ও সংস্কৃতির অনুষঙ্গ : কে এ খালিদ
                                            </a>
                                            <time datetime="2023-01-06 11:56:05">০৬ জানুয়ারি ২০২৩, ১১:৫৬ এএম</time>
                                            <p class="d-none d-sm-block">সংস্কৃতি প্রতিমন্ত্রী কে এম খালিদ বলেছেন, রস উৎসব আমাদের গ্রামীণ ঐতিহ্য ও সংস্কৃতির অন্যতম অনুষঙ্গ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165194">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106115605.jpg?width=330&amp;height=186" alt="‍‍রস উৎসব আমাদের গ্রামীণ ঐতিহ্য ও সংস্কৃতির অনুষঙ্গ : কে এ খালিদ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="নিষেধাজ্ঞা নিয়ে ভারতের অবস্থান থেকে যে সুবিধা নিচ্ছে বাংলাদেশ" data-href="https://www.dhakapost.com/national/165193">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165193">
                                                নিষেধাজ্ঞা নিয়ে ভারতের অবস্থান থেকে যে সুবিধা নিচ্ছে বাংলাদেশ
                                            </a>
                                            <time datetime="2023-01-06 11:54:46">০৬ জানুয়ারি ২০২৩, ১১:৫৪ এএম</time>
                                            <p class="d-none d-sm-block">বাংলাদেশের নেয়া মেগা প্রজেক্টগুলোর মধ্যে অন্যতম রূপপুর পারমাণবিক বিদ্যুৎকেন্দ্র। যেটি রাশিয়ার সহযোগিতায় বাংলাদেশের পাবনার ঈশ্বরদীতে নির্মাণ হচ্ছে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165193">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/132222222-20230106115446.jpg?width=330&amp;height=186" alt="নিষেধাজ্ঞা নিয়ে ভারতের অবস্থান থেকে যে সুবিধা নিচ্ছে বাংলাদেশ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="টুঙ্গিপাড়ায় বঙ্গবন্ধুর সমাধিতে প্রধানমন্ত্রীর শ্রদ্ধা " data-href="https://www.dhakapost.com/country/165192">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165192">
                                                টুঙ্গিপাড়ায় বঙ্গবন্ধুর সমাধিতে প্রধানমন্ত্রীর শ্রদ্ধা
                                            </a>
                                            <time datetime="2023-01-06 11:50:07">০৬ জানুয়ারি ২০২৩, ১১:৫০ এএম</time>
                                            <p class="d-none d-sm-block">গোপালগঞ্জের টুঙ্গিপাড়ায় জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের সমাধিতে শ্রদ্ধা জানিয়েছেন প্রধানমন্ত্রী শেখ হাসিনা। শুক্রবার (৬ জানুয়ারি) বেলা ১১টা ১০ মিনিটে..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165192">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gopalgonj-pm-20230106123356.jpg?width=330&amp;height=186" alt="টুঙ্গিপাড়ায় বঙ্গবন্ধুর সমাধিতে প্রধানমন্ত্রীর শ্রদ্ধা " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="অবসরে যাচ্ছেন মেসির চোখে ‘অযোগ্য’ সেই রেফারি" data-href="https://www.dhakapost.com/sports/football/165191">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/football/165191">
                                                অবসরে যাচ্ছেন মেসির চোখে ‘অযোগ্য’ সেই রেফারি
                                            </a>
                                            <time datetime="2023-01-06 11:44:15">০৬ জানুয়ারি ২০২৩, ১১:৪৪ এএম</time>
                                            <p class="d-none d-sm-block">বিশ্বকাপে সেই এক ম্যাচ দিয়েই নিজের পরিচিতির গণ্ডিটা বহুগুণে বাড়িয়ে নিয়েছিলেন স্প্যানিশ এই রেফারি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/football/165191">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/messi-yellow-card-mateu-lah-20230106114415.jpg?width=330&amp;height=186" alt="অবসরে যাচ্ছেন মেসির চোখে ‘অযোগ্য’ সেই রেফারি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাকায় পুলিশের অভিযানে গ্রেপ্তার ৪৭" data-href="https://www.dhakapost.com/national/165190">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165190">
                                                ঢাকায় পুলিশের অভিযানে গ্রেপ্তার ৪৭
                                            </a>
                                            <time datetime="2023-01-06 11:42:54">০৬ জানুয়ারি ২০২৩, ১১:৪২ এএম</time>
                                            <p class="d-none d-sm-block">রাজধানীর বিভিন্ন এলাকায় মাদকবিরোধী অভিযান পরিচালনা করে মাদক বিক্রি ও সেবনের অভিযোগে ৪৭ জনকে গ্রেপ্তার করেছে ঢাকা মেট্রোপলিটন পুলিশের..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165190">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/arrest-20230106114254.jpg?width=330&amp;height=186" alt="ঢাকায় পুলিশের অভিযানে গ্রেপ্তার ৪৭" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দেশের সর্বনিম্ন তাপমাত্রায় কাঁপছে চুয়াডাঙ্গা" data-href="https://www.dhakapost.com/country/165189">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165189">
                                                দেশের সর্বনিম্ন তাপমাত্রায় কাঁপছে চুয়াডাঙ্গা
                                            </a>
                                            <time datetime="2023-01-06 11:41:02">০৬ জানুয়ারি ২০২৩, ১১:৪১ এএম</time>
                                            <p class="d-none d-sm-block">কনকনে শীতে কাঁপছে চুয়াডাঙ্গা। ঘন কুয়াশা আর হিমেল হাওয়ায় জনজীবনে দুর্ভোগ নেমে এসেছে। কোথাও কোথাও বৃষ্টির মতো ঝরছে কুয়াশা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165189">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chuadanga02-20230106114102.jpg?width=330&amp;height=186" alt="দেশের সর্বনিম্ন তাপমাত্রায় কাঁপছে চুয়াডাঙ্গা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ছুটির দিনে শীতের প্রভাবে অন্যরকম এক রাজধানী" data-href="https://www.dhakapost.com/national/165188">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165188">
                                                ছুটির দিনে শীতের প্রভাবে অন্যরকম এক রাজধানী
                                            </a>
                                            <time datetime="2023-01-06 11:39:57">০৬ জানুয়ারি ২০২৩, ১১:৩৯ এএম</time>
                                            <p class="d-none d-sm-block">সকাল হয়েছে বেশ আগেই। আজও (শুক্রবার) সকাল থেকে কুয়াশার চাদরে আবৃত পুরো রাজধানী...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165188">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106113957.jpg?width=330&amp;height=186" alt="ছুটির দিনে শীতের প্রভাবে অন্যরকম এক রাজধানী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শীতে কাঁপছে মানতা সম্প্রদায়, মাছ শিকারে যেতে পারছে না ১২ দিন ধরে" data-href="https://www.dhakapost.com/country/165187">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165187">
                                                শীতে কাঁপছে মানতা সম্প্রদায়, মাছ শিকারে যেতে পারছে না ১২ দিন ধরে
                                            </a>
                                            <time datetime="2023-01-06 11:36:44">০৬ জানুয়ারি ২০২৩, ১১:৩৬ এএম</time>
                                            <p class="d-none d-sm-block">লক্ষ্মীপুরে শীতের তীব্রতা বাড়ায় সবচেয়ে বেশি কষ্টে রয়েছে ভাসমান জেলেরা (মানতা সম্প্রদায়)। ঠান্ডায় কাঁপছে পুরো সম্প্রদায়টি। শীতের কারণে রাতে তাদের ঘুমাতে কষ্ট হয়।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165187">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/manta-20230106113644.jpg?width=330&amp;height=186" alt="শীতে কাঁপছে মানতা সম্প্রদায়, মাছ শিকারে যেতে পারছে না ১২ দিন ধরে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="অবৈধ অভিবাসীদের সীমান্ত থেকে দূরে থাকতে হুঁশিয়ারি বাইডেনের" data-href="https://www.dhakapost.com/international/165186">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165186">
                                                অবৈধ অভিবাসীদের সীমান্ত থেকে দূরে থাকতে হুঁশিয়ারি বাইডেনের
                                            </a>
                                            <time datetime="2023-01-06 11:32:19">০৬ জানুয়ারি ২০২৩, ১১:৩২ এএম</time>
                                            <p class="d-none d-sm-block">অনথিভুক্ত অভিবাসীদের যুক্তরাষ্ট্রের সীমান্ত থেকে দূরে থাকতে হুঁশিয়ারি উচ্চারণ করেছেন মার্কিন প্রেসিডেন্ট জো বাইডেন। একইসঙ্গে চারটি দরিদ্র দেশ থেকে সীমিত সংখ্যায়</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165186">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/biden-13-20230106113218.jpg?width=330&amp;height=186" alt="অবৈধ অভিবাসীদের সীমান্ত থেকে দূরে থাকতে হুঁশিয়ারি বাইডেনের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কমছে তাপমাত্রা, শীতে নাজেহাল পঞ্চগড়ের মানুষ" data-href="https://www.dhakapost.com/country/165185">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165185">
                                                কমছে তাপমাত্রা, শীতে নাজেহাল পঞ্চগড়ের মানুষ
                                            </a>
                                            <time datetime="2023-01-06 11:27:41">০৬ জানুয়ারি ২০২৩, ১১:২৭ এএম</time>
                                            <p class="d-none d-sm-block">ঘন কুয়াশা আর উত্তরের হিমেল হাওয়ায় বইছে মৃদু শৈত্যপ্রবাহ। এ শৈত্যপ্রবাহে নাজেহাল পরিস্থিতিতে পড়েছে উত্তরের সীমান্ত জেলা পঞ্চগড়ের মানুষ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165185">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ponchogar1-20230106112740.jpg?width=330&amp;height=186" alt="কমছে তাপমাত্রা, শীতে নাজেহাল পঞ্চগড়ের মানুষ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="টুঙ্গিপাড়ায় পৌঁছেছেন প্রধানমন্ত্রী" data-href="https://www.dhakapost.com/country/165184">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165184">
                                                টুঙ্গিপাড়ায় পৌঁছেছেন প্রধানমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-06 11:09:46">০৬ জানুয়ারি ২০২৩, ১১:০৯ এএম</time>
                                            <p class="d-none d-sm-block">দশমবারের মতো আওয়ামী লীগ সভানেত্রী নির্বাচিত হওয়ার পর প্রথমবারের মতো দুই দিনের সফরে ছোট বোন শেখ রেহানাকে সঙ্গে নিয়ে গোপালগঞ্জের টুঙ্গিপাড়ায়...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165184">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/pm1-20230106110946.jpg?width=330&amp;height=186" alt="টুঙ্গিপাড়ায় পৌঁছেছেন প্রধানমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এক শানাকাতেই নাস্তানাবুদ ভারত" data-href="https://www.dhakapost.com/sports/cricket/165183">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165183">
                                                এক শানাকাতেই নাস্তানাবুদ ভারত
                                            </a>
                                            <time datetime="2023-01-06 10:59:36">০৬ জানুয়ারি ২০২৩, ১০:৫৯ এএম</time>
                                            <p class="d-none d-sm-block">ম্যাচের দুই ইনিংসের শেষ দুই ওভার যদি বাদ দেওয়া হয়, তাহলে ভারত আর শ্রীলঙ্কার অবস্থান থাকত সাম্যাবস্থায়। খেলাটা হতো টাই। সিরিজের দ্বিতীয় টি-টোয়েন্টিতে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165183">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/shanaka-20230106105936.jpg?width=330&amp;height=186" alt="এক শানাকাতেই নাস্তানাবুদ ভারত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এইচটি ইমামের চেয়ারে কবির বিন আনোয়ার : আ.লীগে গুঞ্জন" data-href="https://www.dhakapost.com/politics/165182">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165182">
                                                এইচটি ইমামের চেয়ারে কবির বিন আনোয়ার : আ.লীগে গুঞ্জন
                                            </a>
                                            <time datetime="2023-01-06 10:59:06">০৬ জানুয়ারি ২০২৩, ১০:৫৯ এএম</time>
                                            <p class="d-none d-sm-block">হঠাৎ করেই আওয়ামী লীগের সভাপতির ধানমন্ডির রাজনৈতিক কার্যালয়ে এলেন সদ্যবিদায়ী মন্ত্রিপরিষদ সচিব কবির বিন আনোয়ার। এ সময় এইচটি ইমামের চেয়ারে বসতে দেখা যায় তাকে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165182">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/kobir-bin-20230106105906.jpg?width=330&amp;height=186" alt="এইচটি ইমামের চেয়ারে কবির বিন আনোয়ার : আ.লীগে গুঞ্জন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="যুক্তরাষ্ট্র: ১১ বার ভোট হলো, জিততে পারলেন না ম্যাকার্থি" data-href="https://www.dhakapost.com/international/165181">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165181">
                                                যুক্তরাষ্ট্র: ১১ বার ভোট হলো, জিততে পারলেন না ম্যাকার্থি
                                            </a>
                                            <time datetime="2023-01-06 10:47:02">০৬ জানুয়ারি ২০২৩, ১০:৪৭ এএম</time>
                                            <p class="d-none d-sm-block">রেকর্ড করলেন যুক্তরাষ্ট্রের রিপাবলিকান পার্টির নেতা কেভিন ম্যাকার্থি। ১১ বার ভোট হলো। রিপাবলিকান পার্টির এই নেতা এই জিততে পারলেন না। তার এখনও মার্কিন প্রতিনিধি</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165181">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/untitled-2-20230106104702.jpg?width=330&amp;height=186" alt="যুক্তরাষ্ট্র: ১১ বার ভোট হলো, জিততে পারলেন না ম্যাকার্থি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সীমান্তে উদ্ধার হওয়া নীলগাই বঙ্গবন্ধু সাফারি পার্কে" data-href="https://www.dhakapost.com/country/165180">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165180">
                                                সীমান্তে উদ্ধার হওয়া নীলগাই বঙ্গবন্ধু সাফারি পার্কে
                                            </a>
                                            <time datetime="2023-01-06 10:31:31">০৬ জানুয়ারি ২০২৩, ১০:৩১ এএম</time>
                                            <p class="d-none d-sm-block">চাঁপাইনবাবগঞ্জের সোনামসজিদ সীমান্তে উদ্ধার হওয়া বিরল প্রজাতির নীলগাইটি বঙ্গবন্ধু শেখ মুজিব সাফারি পার্কে হস্তান্তর করেছে বর্ডার গার্ড বাংলাদেশ-বিজিবি।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165180">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/1-20230106103131.jpg?width=330&amp;height=186" alt="সীমান্তে উদ্ধার হওয়া নীলগাই বঙ্গবন্ধু সাফারি পার্কে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আজকের পূর্ণিমা যে কারণে ‌‘ফুল উল্ফ মুন’" data-href="https://www.dhakapost.com/national/165179">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165179">
                                                আজকের পূর্ণিমা যে কারণে ‌‘ফুল উল্ফ মুন’
                                            </a>
                                            <time datetime="2023-01-06 10:30:11">০৬ জানুয়ারি ২০২৩, ১০:৩০ এএম</time>
                                            <p class="d-none d-sm-block">নতুন বছরের প্রথম পূর্ণিমা আজ (শুক্রবার)। এই পূর্ণিমাকে বিশেষ কারণে ‌‘মাইক্রোমুন’ বা ‘ফুল উল্ফ মুন’ বলা হচ্ছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165179">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106103011.jpg?width=330&amp;height=186" alt="আজকের পূর্ণিমা যে কারণে ‌‘ফুল উল্ফ মুন’" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কনকনে শীতে কাবু কুড়িগ্রামের মানুষ" data-href="https://www.dhakapost.com/country/165178">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165178">
                                                কনকনে শীতে কাবু কুড়িগ্রামের মানুষ
                                            </a>
                                            <time datetime="2023-01-06 10:24:38">০৬ জানুয়ারি ২০২৩, ১০:২৪ এএম</time>
                                            <p class="d-none d-sm-block">উত্তরের হিমেল হাওয়া ও কনকনে শীতে কুড়িগ্রামে জনজীবনে নেমে এসেছে দুর্ভোগ। আকাশে ঘন মেঘে সূর্য ঢেকে থাকায় দিনের বেশিরভাগ সময় প্রাকৃতিক উষ্ণতাও..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165178">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/winter-20230106102438.jpg?width=330&amp;height=186" alt="কনকনে শীতে কাবু কুড়িগ্রামের মানুষ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="স্পর্শকাতর তাইওয়ান প্রণালীতে মার্কিন যুদ্ধজাহাজ, ক্ষুব্ধ চীন" data-href="https://www.dhakapost.com/international/165177">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165177">
                                                স্পর্শকাতর তাইওয়ান প্রণালীতে মার্কিন যুদ্ধজাহাজ, ক্ষুব্ধ চীন
                                            </a>
                                            <time datetime="2023-01-06 10:18:01">০৬ জানুয়ারি ২০২৩, ১০:১৮ এএম</time>
                                            <p class="d-none d-sm-block">তাইওয়ান, বাণিজ্যসহ নানা ইস্যুতে চীনের সঙ্গে যুক্তরাষ্ট্রের দীর্ঘদিন ধরেই উত্তেজনা চলছে। বিদ্যমান এই উত্তেজনা অনেক সময়ই হুঁশিয়ারি ও পাল্টা হুঁশিয়ারিতে সৃষ্টি করে</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165177">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/untitled-1-20230106101801.jpg?width=330&amp;height=186" alt="স্পর্শকাতর তাইওয়ান প্রণালীতে মার্কিন যুদ্ধজাহাজ, ক্ষুব্ধ চীন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="অসুস্থ ছাত্রলীগ নেতাকে দেখতে হাসপাতালে মাহি" data-href="https://www.dhakapost.com/country/165176">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165176">
                                                অসুস্থ ছাত্রলীগ নেতাকে দেখতে হাসপাতালে মাহি
                                            </a>
                                            <time datetime="2023-01-06 10:17:39">০৬ জানুয়ারি ২০২৩, ১০:১৭ এএম</time>
                                            <p class="d-none d-sm-block">চাঁপাইনবাবগঞ্জের রহনপুরের অসুস্থ ছাত্রলীগ নেতা মোরসালিন আলীকে (২২) দেখতে রাজশাহী মেডিকেল কলেজ (রামেক) হাসপাতালে গেছেন চিত্রনায়িকা মাহিয়া মাহি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165176">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/mahi1-20230106101739.jpg?width=330&amp;height=186" alt="অসুস্থ ছাত্রলীগ নেতাকে দেখতে হাসপাতালে মাহি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কেমন ছিল ২০২২?" data-href="https://www.dhakapost.com/opinion/165175">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/opinion/165175">
                                                কেমন ছিল ২০২২?
                                            </a>
                                            <time datetime="2023-01-06 10:11:48">০৬ জানুয়ারি ২০২৩, ১০:১১ এএম</time>
                                            <p class="d-none d-sm-block">পদ্মা সেতুর পরেই ২০২২ সালে দেশ হিসেবে বাংলাদেশের দ্বিতীয় বৃহত্তম সাফল্য মেট্রোরেলের উদ্বোধন। অনেক জল্পনা-কল্পনা ও তর্ক-বিতর্কের শেষে ২৮ সেপ্টেম্বর ঢাকা মেট্রোরে</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/opinion/165175">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/aditi-20230106101148.jpg?width=330&amp;height=186" alt="কেমন ছিল ২০২২?" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বরফ পড়লে কেমন দেখা যাবে কলকাতা" data-href="https://www.dhakapost.com/international/165174">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165174">
                                                বরফ পড়লে কেমন দেখা যাবে কলকাতা
                                            </a>
                                            <time datetime="2023-01-06 10:05:32">০৬ জানুয়ারি ২০২৩, ১০:০৫ এএম</time>
                                            <p class="d-none d-sm-block">ঢাকার মতোই শীতে কাঁপছে প্রতিবেশী কলকাতা। এরই মধ্যে সামাজিক মাধ্যমে শীতের কলকাতার কিছু দৃশ্যের ছবি ছড়িয়ে পড়ে। যেখানে দেখা গেছে- বরফে ঢেকে গিয়েছে ভিক্টোরিয়া চত্বর</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165174">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/855-20230106100532.png?width=330&amp;height=186" alt="বরফ পড়লে কেমন দেখা যাবে কলকাতা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আড়াই ঘণ্টা পর দৌলতদিয়া-পাটুরিয়ায় ফেরি চলাচল স্বাভাবিক " data-href="https://www.dhakapost.com/country/165173">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165173">
                                                আড়াই ঘণ্টা পর দৌলতদিয়া-পাটুরিয়ায় ফেরি চলাচল স্বাভাবিক
                                            </a>
                                            <time datetime="2023-01-06 09:59:35">০৬ জানুয়ারি ২০২৩, ০৯:৫৯ এএম</time>
                                            <p class="d-none d-sm-block">ঘন কুয়াশায় আড়াই ঘণ্টা বন্ধ থাকার পর দৌলতদিয়া-পাটুরিয়া নৌপথে পুনরায় ফেরি চলাচল শুরু হয়েছে। শুক্রবার (৬ জানুয়ারি) সকাল ৮টার দিকে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165173">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rajbari-ferry1-20230106095934.jpg?width=330&amp;height=186" alt="আড়াই ঘণ্টা পর দৌলতদিয়া-পাটুরিয়ায় ফেরি চলাচল স্বাভাবিক " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সাপ্তাহিক চাকরির খবর : ০৬ জানুয়ারি, ২০২৩" data-href="https://www.dhakapost.com/jobs-career/165172">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/165172">
                                                সাপ্তাহিক চাকরির খবর : ০৬ জানুয়ারি, ২০২৩
                                            </a>
                                            <time datetime="2023-01-06 09:58:18">০৬ জানুয়ারি ২০২৩, ০৯:৫৮ এএম</time>
                                            <p class="d-none d-sm-block">চলতি সপ্তাহে সরকারি ও বেসরকারি বেশ কয়েকটি প্রতিষ্ঠান নিয়োগ বিজ্ঞপ্তি দিয়েছে। পদ ও প্রতিষ্ঠান অনুসারে নিয়োগ প্রক্রিয়া ভিন্ন।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/165172">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jobs-2-20230106095818.png?width=330&amp;height=186" alt="সাপ্তাহিক চাকরির খবর : ০৬ জানুয়ারি, ২০২৩" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="করোনার নতুন ভ্যারিয়েন্টে বাংলাদেশে প্রভাব পড়বে না" data-href="https://www.dhakapost.com/country/165171">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165171">
                                                করোনার নতুন ভ্যারিয়েন্টে বাংলাদেশে প্রভাব পড়বে না
                                            </a>
                                            <time datetime="2023-01-06 09:44:22">০৬ জানুয়ারি ২০২৩, ০৯:৪৪ এএম</time>
                                            <p class="d-none d-sm-block">স্বাস্থ্যমন্ত্রী জাহিদ মালেক বলেছেন, করোনার নতুন ভ্যারিয়েন্টে বাংলাদেশের মানুষের ওপর কোনো প্রভাব পড়বে না...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165171">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jahidmalek-20230106094422.jpg?width=330&amp;height=186" alt="করোনার নতুন ভ্যারিয়েন্টে বাংলাদেশে প্রভাব পড়বে না" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="যুক্তরাষ্ট্রকে বাদ দিয়ে ফরাসি রাফায়েলকেই বেছে নিল ভারত" data-href="https://www.dhakapost.com/international/165170">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165170">
                                                যুক্তরাষ্ট্রকে বাদ দিয়ে ফরাসি রাফায়েলকেই বেছে নিল ভারত
                                            </a>
                                            <time datetime="2023-01-06 09:29:34">০৬ জানুয়ারি ২০২৩, ০৯:২৯ এএম</time>
                                            <p class="d-none d-sm-block">চীন এবং পাকিস্তানকে মোকাবিলা করতে নতুন যুদ্ধবিমান কিনছে ভারত। এক্ষেত্রে পছন্দের তালিকায় ছিল মার্কিন এফ এ ১৮ সুপার হর্নেট ও ফরাসি যুদ্ধবিমান রাফায়েল। তবে এ দুই য</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165170">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cats-20230106092934.jpg?width=330&amp;height=186" alt="যুক্তরাষ্ট্রকে বাদ দিয়ে ফরাসি রাফায়েলকেই বেছে নিল ভারত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="নারীর ক্ষমতায়নে উজ্জ্বল দৃষ্টান্ত নারীবান্ধব মেট্রোরেল" data-href="https://www.dhakapost.com/national/165169">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165169">
                                                নারীর ক্ষমতায়নে উজ্জ্বল দৃষ্টান্ত নারীবান্ধব মেট্রোরেল
                                            </a>
                                            <time datetime="2023-01-06 09:29:22">০৬ জানুয়ারি ২০২৩, ০৯:২৯ এএম</time>
                                            <p class="d-none d-sm-block">মহিলা ও শিশু বিষয়ক প্রতিমন্ত্রী ফজিলাতুন নেসা ইন্দিরা বলেছেন, নারীদের জন্য প্রধানমন্ত্রীর শ্রেষ্ঠ উপহার নারীবান্ধব মেট্রোরেল। যা নারীর ক্ষমতায়নে উজ্জ্বল...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165169">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/932-20230106092921.jpg?width=330&amp;height=186" alt="নারীর ক্ষমতায়নে উজ্জ্বল দৃষ্টান্ত নারীবান্ধব মেট্রোরেল" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পুতিনের ৩৬ ঘণ্টার যুদ্ধবিরতিকে চক্রান্ত আখ্যা জেলেনস্কির" data-href="https://www.dhakapost.com/international/165168">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165168">
                                                পুতিনের ৩৬ ঘণ্টার যুদ্ধবিরতিকে চক্রান্ত আখ্যা জেলেনস্কির
                                            </a>
                                            <time datetime="2023-01-06 09:29:15">০৬ জানুয়ারি ২০২৩, ০৯:২৯ এএম</time>
                                            <p class="d-none d-sm-block">টানা প্রায় সাড়ে ১০ মাস ধরে ইউক্রেনে সামরিক অভিযান চালাচ্ছে রাশিয়া। দীর্ঘ এই সময়ে ইউক্রেন কোন যুদ্ধবিরতি দেখেনি, এমনকি বড়দিনের উৎসবের সময়েও না। এই পরিস্থিতিতে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165168">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/volodymyr-zelensky-6-20230106092915.jpg?width=330&amp;height=186" alt="পুতিনের ৩৬ ঘণ্টার যুদ্ধবিরতিকে চক্রান্ত আখ্যা জেলেনস্কির" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বন্দে ভারত এক্সপ্রেসে পাথর ছোড়া নিয়ে সরব মমতা" data-href="https://www.dhakapost.com/international/165167">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165167">
                                                বন্দে ভারত এক্সপ্রেসে পাথর ছোড়া নিয়ে সরব মমতা
                                            </a>
                                            <time datetime="2023-01-06 09:26:52">০৬ জানুয়ারি ২০২৩, ০৯:২৬ এএম</time>
                                            <p class="d-none d-sm-block">ভারতের প্রথম দ্রুতগামী ট্রেন বন্দে ভারত এক্সপ্রেস। সম্প্রতি পশ্চিমবঙ্গেও এর উদ্বোধন হয়েছে। এরইমধ্যে দুইবার বন্দে ভারত এক্সপ্রেস ট্রেন লক্ষ্য করে পাথর ছোড়া...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165167">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106092652.jpg?width=330&amp;height=186" alt="বন্দে ভারত এক্সপ্রেসে পাথর ছোড়া নিয়ে সরব মমতা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কোনো কৌশল নয়, মেসিকে আটকাতে প্রার্থনাই সম্বল প্রতিপক্ষের" data-href="https://www.dhakapost.com/sports/football/165166">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/football/165166">
                                                কোনো কৌশল নয়, মেসিকে আটকাতে প্রার্থনাই সম্বল প্রতিপক্ষের
                                            </a>
                                            <time datetime="2023-01-06 09:25:37">০৬ জানুয়ারি ২০২৩, ০৯:২৫ এএম</time>
                                            <p class="d-none d-sm-block">প্রতিপক্ষ দলে সবচেয়ে বড় খেলোয়াড়কে আটকাতে নানা কৌশল ছকে থাকেন কোচরা। তবে অ্যাটলেটিকো মাদ্রিদ কোচ দিয়েগো সিমিওনের মনে হয় লিওনেল মেসি সে কাতারে পড়েন না...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/football/165166">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/messi-20230106092537.jpg?width=330&amp;height=186" alt="কোনো কৌশল নয়, মেসিকে আটকাতে প্রার্থনাই সম্বল প্রতিপক্ষের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বসে যাচ্ছে জমি, বিপর্যয়ের মুখে ভারতের এক শহর " data-href="https://www.dhakapost.com/international/165165">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165165">
                                                বসে যাচ্ছে জমি, বিপর্যয়ের মুখে ভারতের এক শহর
                                            </a>
                                            <time datetime="2023-01-06 09:04:34">০৬ জানুয়ারি ২০২৩, ০৯:০৪ এএম</time>
                                            <p class="d-none d-sm-block">ভারতের উত্তরাখন্ডের কিছু এলাকায় ক্রমাগত বসে যাচ্ছে জমি। ফাটল ধরছে একের পর এক বাড়িতে। একই অবস্থা হচ্ছে রাস্তাঘাটেও। </p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165165">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/909-20230106090434.jpg?width=330&amp;height=186" alt="বসে যাচ্ছে জমি, বিপর্যয়ের মুখে ভারতের এক শহর " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঘন কুয়াশায় দৌলতদিয়া-পাটুরিয়া নৌপথে ফেরি চলাচল বন্ধ" data-href="https://www.dhakapost.com/country/165164">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165164">
                                                ঘন কুয়াশায় দৌলতদিয়া-পাটুরিয়া নৌপথে ফেরি চলাচল বন্ধ
                                            </a>
                                            <time datetime="2023-01-06 08:57:27">০৬ জানুয়ারি ২০২৩, ০৮:৫৭ এএম</time>
                                            <p class="d-none d-sm-block">ঘন কুয়াশার কারণে রাজবাড়ীর দৌলতদিয়া ও মানিকগঞ্জের পাটুরিয়া নৌপথে ফেরি চলাচল বন্ধ রয়েছে। শুক্রবার (৬ জানুয়ারি) ভোর সাড়ে ৫টা থেকে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165164">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rajbari-20230106085726.jpg?width=330&amp;height=186" alt="ঘন কুয়াশায় দৌলতদিয়া-পাটুরিয়া নৌপথে ফেরি চলাচল বন্ধ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="২০৬ কিমি সাইকেল চালিয়ে মসজিদ দেখতে গেলেন আবুল হোসেন" data-href="https://www.dhakapost.com/country/165163">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165163">
                                                ২০৬ কিমি সাইকেল চালিয়ে মসজিদ দেখতে গেলেন আবুল হোসেন
                                            </a>
                                            <time datetime="2023-01-06 08:51:29">০৬ জানুয়ারি ২০২৩, ০৮:৫১ এএম</time>
                                            <p class="d-none d-sm-block">মাগুরা থেকে সাইকেল চালিয়ে ২০৬ কিলোমিটার পথ পাড়ি দিয়ে সিরাজগঞ্জের বেলকুচিতে অবস্থিত আল-আমান বাহেলা খাতুন জামে মসজিদে ছুটে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165163">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sirajgon2-20230106085129.jpg?width=330&amp;height=186" alt="২০৬ কিমি সাইকেল চালিয়ে মসজিদ দেখতে গেলেন আবুল হোসেন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="করোনা নিয়ে কোনো তথ্য গোপন করা হয়নি : দাবি চীনের" data-href="https://www.dhakapost.com/international/165162">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165162">
                                                করোনা নিয়ে কোনো তথ্য গোপন করা হয়নি : দাবি চীনের
                                            </a>
                                            <time datetime="2023-01-06 08:46:46">০৬ জানুয়ারি ২০২৩, ০৮:৪৬ এএম</time>
                                            <p class="d-none d-sm-block">করোনাভাইরাস মহামারি শুরুর থেকেই চীনের বিরুদ্ধে কোভিড সংক্রান্ত তথ্য গোপন করার অভিযোগ বারবারই জানিয়ে এসেছে বিশ্ব স্বাস্থ্য সংস্থা (ডব্লিউএইচও)।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165162">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/corona-20230106084646.jpg?width=330&amp;height=186" alt="করোনা নিয়ে কোনো তথ্য গোপন করা হয়নি : দাবি চীনের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জ্বরঠোসা হলে কী করবেন?" data-href="https://www.dhakapost.com/health/165161">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/health/165161">
                                                জ্বরঠোসা হলে কী করবেন?
                                            </a>
                                            <time datetime="2023-01-06 08:46:31">০৬ জানুয়ারি ২০২৩, ০৮:৪৬ এএম</time>
                                            <p class="d-none d-sm-block">শীতে অনেকেরই ঠোঁটের কোণে ঘা হয়। কখনও এটা পানিভর্তি ফোস্কার মতো হয়, আবার কখনও এটা ফেটে রক্তও বের হতে পারে। চলতি ভাষায় এগুলোকে ‘জ্বরঠোসা’ বলা হয়। আর ডাক্তারদের...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/health/165161">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/846-20230106084631.jpg?width=330&amp;height=186" alt="জ্বরঠোসা হলে কী করবেন?" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="মৌমাছির জন্য বিশ্বের প্রথম টিকা" data-href="https://www.dhakapost.com/international/165160">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165160">
                                                মৌমাছির জন্য বিশ্বের প্রথম টিকা
                                            </a>
                                            <time datetime="2023-01-06 08:32:16">০৬ জানুয়ারি ২০২৩, ০৮:৩২ এএম</time>
                                            <p class="d-none d-sm-block">মৌমাছির জন্য বিশ্বের প্রথম ভ্যাকসিন ব্যবহারের অনুমোদন দিয়েছে যুক্তরাষ্ট্র সরকার। যা মৌমাছিকে ফাউলব্রুডসহ বিভিন্ন প্রাণঘাতী রোগ থেকে রক্ষা করবে। একইসঙ্গে এ ভ্যাক</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165160">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/01-20220115140713-20230106083216.jpg?width=330&amp;height=186" alt="মৌমাছির জন্য বিশ্বের প্রথম টিকা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আনফিট আফ্রিদি নেই পাকিস্তানের ওয়ানডে দলেও" data-href="https://www.dhakapost.com/sports/cricket/165159">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165159">
                                                আনফিট আফ্রিদি নেই পাকিস্তানের ওয়ানডে দলেও
                                            </a>
                                            <time datetime="2023-01-06 08:22:12">০৬ জানুয়ারি ২০২৩, ০৮:২২ এএম</time>
                                            <p class="d-none d-sm-block">শাহিন শাহ আফ্রিদি চোটের কারণে অনেক দিন ধরেই আছেন মাঠের বাইরে। নিউজিল্যান্ডের বিপক্ষে টেস্ট সিরিজেও ছিলেন না তিনি। এবার দলটির বিপক্ষে ওয়ানডে সিরিজেও...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165159">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/afridi-gets-allen-20230106082212.jpg?width=330&amp;height=186" alt="আনফিট আফ্রিদি নেই পাকিস্তানের ওয়ানডে দলেও" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আরশদীপের নো বলের হ্যাটট্রিক নিয়ে হার্দিকের ক্ষোভ" data-href="https://www.dhakapost.com/sports/cricket/165158">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165158">
                                                আরশদীপের নো বলের হ্যাটট্রিক নিয়ে হার্দিকের ক্ষোভ
                                            </a>
                                            <time datetime="2023-01-06 08:10:07">০৬ জানুয়ারি ২০২৩, ০৮:১০ এএম</time>
                                            <p class="d-none d-sm-block">আন্তর্জাতিক ক্রিকেটে নো বল করা অপরাধ। নিজের ভুল থেকে শিক্ষা নিতে হবে আরশদীপকে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165158">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/814-20230106081006.jpg?width=330&amp;height=186" alt="আরশদীপের নো বলের হ্যাটট্রিক নিয়ে হার্দিকের ক্ষোভ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এনআরবিসি অ্যাপ ব্যবহার করে উপায় ওয়ালেটে ফান্ড ট্রান্সফার" data-href="https://www.dhakapost.com/economy/165157">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165157">
                                                এনআরবিসি অ্যাপ ব্যবহার করে উপায় ওয়ালেটে ফান্ড ট্রান্সফার
                                            </a>
                                            <time datetime="2023-01-06 08:01:18">০৬ জানুয়ারি ২০২৩, ০৮:০১ এএম</time>
                                            <p class="d-none d-sm-block">এনআরবিসি ব্যাংকের গ্রাহকেরা তাদের এনআরবিসি প্ল্যানেট অ্যাপ ব্যবহার করে মোবাইল ফিনান্সিয়াল সার্ভিস প্রদানকারী প্রতিষ্ঠান উপায় ওয়ালেটে তাৎক্ষণিক ফান্ড..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165157">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/nrbc-20230106080118.jpg?width=330&amp;height=186" alt="এনআরবিসি অ্যাপ ব্যবহার করে উপায় ওয়ালেটে ফান্ড ট্রান্সফার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিকাশ অ্যাপে দেওয়া যাবে ওয়ালটন ও বাটারফ্লাইয়ের কিস্তির টাকা" data-href="https://www.dhakapost.com/economy/165156">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165156">
                                                বিকাশ অ্যাপে দেওয়া যাবে ওয়ালটন ও বাটারফ্লাইয়ের কিস্তির টাকা
                                            </a>
                                            <time datetime="2023-01-06 07:59:59">০৬ জানুয়ারি ২০২৩, ০৭:৫৯ এএম</time>
                                            <p class="d-none d-sm-block">এখন বিকাশ অ্যাপের মাধ্যমে ওয়ালটন ও বাটারফ্লাইয়ের গ্রাহকরা ঘরে বসেই মাসিক কিস্তির টাকা পরিশোধ করতে পারবেন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165156">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106075959.jpg?width=330&amp;height=186" alt="বিকাশ অ্যাপে দেওয়া যাবে ওয়ালটন ও বাটারফ্লাইয়ের কিস্তির টাকা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গোপনে স্কুলছাত্রীদের ভিডিও ধারণ করে টিকটক বানাতেন চা-দোকানি" data-href="https://www.dhakapost.com/country/165155">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165155">
                                                গোপনে স্কুলছাত্রীদের ভিডিও ধারণ করে টিকটক বানাতেন চা-দোকানি
                                            </a>
                                            <time datetime="2023-01-06 07:56:13">০৬ জানুয়ারি ২০২৩, ০৭:৫৬ এএম</time>
                                            <p class="d-none d-sm-block">চুয়াডাঙ্গা সদর উপজেলার গড়াইটুপিতে বিদ্যালয়ে যাওয়ার পথে গোপনে ছাত্রীদের ভিডিও ধারণ করে টিকটক ভিডিও তৈরির পর সামাজিক যোগাযোগ মাধ্যমে ছড়িয়ে দেওয়ায়...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165155">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chuadanga1-20230106075612.jpg?width=330&amp;height=186" alt="গোপনে স্কুলছাত্রীদের ভিডিও ধারণ করে টিকটক বানাতেন চা-দোকানি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আলিয়া-বিপাশার পর এবার দীপিকাকে নিয়ে জল্পনা " data-href="https://www.dhakapost.com/entertainment/bollywood/165154">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165154">
                                                আলিয়া-বিপাশার পর এবার দীপিকাকে নিয়ে জল্পনা
                                            </a>
                                            <time datetime="2023-01-06 07:51:35">০৬ জানুয়ারি ২০২৩, ০৭:৫১ এএম</time>
                                            <p class="d-none d-sm-block">গতকাল ছিল দীপিকা পাড়ুকোনের ৩৭তম জন্মদিন। এই বিশেষ দিনটিতে তার ভক্তদের মধ্যে আলোচনা শুরু হয়েছে অন্য একটি বিষয় নিয়ে। </p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165154">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/756-20230106075135.jpg?width=330&amp;height=186" alt="আলিয়া-বিপাশার পর এবার দীপিকাকে নিয়ে জল্পনা " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="মসজিদের সিঁড়িতে জুমার নামাজ পড়ার বিধান" data-href="https://www.dhakapost.com/religion/165153">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/religion/165153">
                                                মসজিদের সিঁড়িতে জুমার নামাজ পড়ার বিধান
                                            </a>
                                            <time datetime="2023-01-06 07:50:25">০৬ জানুয়ারি ২০২৩, ০৭:৫০ এএম</time>
                                            <p class="d-none d-sm-block">সপ্তাহের শ্রেষ্ঠ দিন জুমাবার। এদিনের সওয়াব-মর্যাদা ঈদুল ফিতর ও আজহার মতো। মুসলমানদের কাছে এ দিন অপরিসীম ফজিলতের।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/religion/165153">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/juma-20230106075024.jpg?width=330&amp;height=186" alt="মসজিদের সিঁড়িতে জুমার নামাজ পড়ার বিধান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিশ্বজুড়ে শনাক্ত সাড়ে ৪ লাখ, মৃত্যু আরও সাড়ে ১২শ" data-href="https://www.dhakapost.com/international/165152">
                                        <div class="topic-content-text">
                                            <p style="border-bottom: 1px solid #134b65;display: inline-block;color: #134b65;">করোনাভাইরাস পরিস্থিতি</p>
                                            <a href="https://www.dhakapost.com/international/165152">
                                                বিশ্বজুড়ে শনাক্ত সাড়ে ৪ লাখ, মৃত্যু আরও সাড়ে ১২শ
                                            </a>
                                            <time datetime="2023-01-06 07:49:15">০৬ জানুয়ারি ২০২৩, ০৭:৪৯ এএম</time>
                                            <p class="d-none d-sm-block">গত ২৪ ঘণ্টায় বিশ্বজুড়ে সবচেয়ে বেশি সংক্রমণ ও প্রাণহানির ঘটনা ঘটেছে জাপানে। অন্যদিকে দৈনিক প্রাণহানির তালিকায় দ্বিতীয় অবস্থানে রয়েছে যুক্তরাষ্ট্র।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165152">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/corona-test-20230106074915.jpg?width=330&amp;height=186" alt="বিশ্বজুড়ে শনাক্ত সাড়ে ৪ লাখ, মৃত্যু আরও সাড়ে ১২শ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিসিসির নির্বাহী পরিচালককে আইডিয়া প্রকল্পের শুভেচ্ছা" data-href="https://www.dhakapost.com/national/165151">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165151">
                                                বিসিসির নির্বাহী পরিচালককে আইডিয়া প্রকল্পের শুভেচ্ছা
                                            </a>
                                            <time datetime="2023-01-06 07:44:22">০৬ জানুয়ারি ২০২৩, ০৭:৪৪ এএম</time>
                                            <p class="d-none d-sm-block">তথ্য ও যোগাযোগ প্রযুক্তি বিভাগের বাংলাদেশ কম্পিউটার কাউন্সিলের (বিসিসি) নির্বাহী পরিচালক রণজিৎ কুমার বাংলাদেশ সরকারের অতিরিক্ত সচিব..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165151">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bcc-20230106074422.jpg?width=330&amp;height=186" alt="বিসিসির নির্বাহী পরিচালককে আইডিয়া প্রকল্পের শুভেচ্ছা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জবির প্রতিবন্ধী শিক্ষার্থীদের পাশে পিডিএফ" data-href="https://www.dhakapost.com/campus/165150">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/campus/165150">
                                                জবির প্রতিবন্ধী শিক্ষার্থীদের পাশে পিডিএফ
                                            </a>
                                            <time datetime="2023-01-06 07:43:20">০৬ জানুয়ারি ২০২৩, ০৭:৪৩ এএম</time>
                                            <p class="d-none d-sm-block">জগন্নাথ বিশ্ববিদ্যালয়ে (জবি) অধ্যয়নরত বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীদের সার্বিক কল্যাণের লক্ষ্যে কাজ করছে স্বেচ্ছাসেবী সংগঠন পিডিএফ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/campus/165150">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230106074320.jpg?width=330&amp;height=186" alt="জবির প্রতিবন্ধী শিক্ষার্থীদের পাশে পিডিএফ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিপিএলসহ টিভিতে আজ দেখবেন যেসব খেলা" data-href="https://www.dhakapost.com/sports/165149">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/165149">
                                                বিপিএলসহ টিভিতে আজ দেখবেন যেসব খেলা
                                            </a>
                                            <time datetime="2023-01-06 07:34:03">০৬ জানুয়ারি ২০২৩, ০৭:৩৪ এএম</time>
                                            <p class="d-none d-sm-block">কখন, কোথায়, কার সঙ্গে কার খেলা, দেখে নিন এক নজরে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/165149">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bpl-20230106073402.jpg?width=330&amp;height=186" alt="বিপিএলসহ টিভিতে আজ দেখবেন যেসব খেলা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দুই দিনের সফরে আজ টুঙ্গিপাড়া যাচ্ছেন প্রধানমন্ত্রী" data-href="https://www.dhakapost.com/national/165148">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165148">
                                                দুই দিনের সফরে আজ টুঙ্গিপাড়া যাচ্ছেন প্রধানমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-06 07:22:01">০৬ জানুয়ারি ২০২৩, ০৭:২২ এএম</time>
                                            <p class="d-none d-sm-block">দশমবারের মতো আওয়ামী লীগের সভানেত্রী নির্বাচিত হওয়ার পর প্রথমবারের মতো দুই দিনের ব্যক্তিগত সফরে আজ গোপালগঞ্জের টুঙ্গিপাড়ায় যাচ্ছেন প্রধানমন্ত্রী শেখ হাসিনা।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165148">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/pm-20230106072201.jpg?width=330&amp;height=186" alt="দুই দিনের সফরে আজ টুঙ্গিপাড়া যাচ্ছেন প্রধানমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="মাদক সম্রাটের ছেলেকে গ্রেপ্তারের ঘটনায় মেক্সিকোতে তুলকালাম" data-href="https://www.dhakapost.com/international/165147">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165147">
                                                মাদক সম্রাটের ছেলেকে গ্রেপ্তারের ঘটনায় মেক্সিকোতে তুলকালাম
                                            </a>
                                            <time datetime="2023-01-06 07:01:07">০৬ জানুয়ারি ২০২৩, ০৭:০১ এএম</time>
                                            <p class="d-none d-sm-block">উত্তর আমেরিকার দেশ মেক্সিকোর মাদক সম্রাট জোয়াকিন ‘এল চাপো’-এর ছেলে অভিদিও গুজমানকে গ্রেপ্তার করেছে আইন-শৃঙ্খলা রক্ষাকারী বাহিনীর সদস্যরা। আর তাকে গ্রেপ্তারের পর</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165147">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ffffak-20230106070106.jpg?width=330&amp;height=186" alt="মাদক সম্রাটের ছেলেকে গ্রেপ্তারের ঘটনায় মেক্সিকোতে তুলকালাম" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="হ্যাক হয়েছিল টুইটার, ফাঁস হয়েছে ২০ কোটি ইমেইল এড্রেস: রিপোর্ট" data-href="https://www.dhakapost.com/international/165146">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165146">
                                                হ্যাক হয়েছিল টুইটার, ফাঁস হয়েছে ২০ কোটি ইমেইল এড্রেস: রিপোর্ট
                                            </a>
                                            <time datetime="2023-01-06 05:18:15">০৬ জানুয়ারি ২০২৩, ০৫:১৮ এএম</time>
                                            <p class="d-none d-sm-block">একটি নিরাপত্তা গবেষণা প্রতিষ্ঠান জানিয়েছে, হ্যাকিংয়ের শিকার হয়েছিল জনপ্রিয় সামাজিক যোগাযোগমাধ্যম টুইটার। ওই সময় হ্যাকাররা ২০ কোটিরও বেশি ব্যবহারকারীর ইমেইল এড্</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165146">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ezgif-2-ab1513da4c-20230106051815.jpg?width=330&amp;height=186" alt="হ্যাক হয়েছিল টুইটার, ফাঁস হয়েছে ২০ কোটি ইমেইল এড্রেস: রিপোর্ট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আফগানিস্তানে ২৫ জনকে হত্যার কথা স্বীকার প্রিন্স হ্যারির" data-href="https://www.dhakapost.com/international/165145">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165145">
                                                আফগানিস্তানে ২৫ জনকে হত্যার কথা স্বীকার প্রিন্স হ্যারির
                                            </a>
                                            <time datetime="2023-01-06 03:49:47">০৬ জানুয়ারি ২০২৩, ০৩:৪৯ এএম</time>
                                            <p class="d-none d-sm-block">যুক্তরাজ্যের আলোচিত প্রিন্স হ্যারি জানিয়েছেন, সেনাবাহিনীর হয়ে কাজ করার সময় আফগানিস্তানে ২৫ জনকে হত্যা করেছেন তিনি।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165145">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ezgif-4-204cfa76eb-20230106034947.jpg?width=330&amp;height=186" alt="আফগানিস্তানে ২৫ জনকে হত্যার কথা স্বীকার প্রিন্স হ্যারির" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিশ্বের ‘সবচেয়ে বড় মানব পাচারকারী’ আটক" data-href="https://www.dhakapost.com/international/165144">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165144">
                                                বিশ্বের ‘সবচেয়ে বড় মানব পাচারকারী’ আটক
                                            </a>
                                            <time datetime="2023-01-06 02:59:28">০৬ জানুয়ারি ২০২৩, ০২:৫৯ এএম</time>
                                            <p class="d-none d-sm-block">বিশ্বের সবচেয়ে বড় দাগী মানব পাচারকারীকে সুদান থেকে আটক করেছে ইন্টারন্যাশনাল ক্রিমিনাল পুলিশ অর্গানাইজেশন (ইন্টারপোল)।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165144">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/illegal-migrants-20230106025928.jpg?width=330&amp;height=186" alt="বিশ্বের ‘সবচেয়ে বড় মানব পাচারকারী’ আটক" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চবি ছাত্রলীগের দুই গ্রুপের সংঘর্ষ, আহত ৩" data-href="https://www.dhakapost.com/campus/165143">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/campus/165143">
                                                চবি ছাত্রলীগের দুই গ্রুপের সংঘর্ষ, আহত ৩
                                            </a>
                                            <time datetime="2023-01-06 01:04:46">০৬ জানুয়ারি ২০২৩, ০১:০৪ এএম</time>
                                            <p class="d-none d-sm-block">চবি ছাত্রলীগের দুই গ্রুপের সংঘর্ষ, আহত ৩</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/campus/165143">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chbi-fuk-20230106010446.jpg?width=330&amp;height=186" alt="চবি ছাত্রলীগের দুই গ্রুপের সংঘর্ষ, আহত ৩" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="যুদ্ধবিরতির ঘোষণায় যে প্রতিক্রিয়া জানাল ইউক্রেন-যুক্তরাষ্ট্র" data-href="https://www.dhakapost.com/international/165142">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165142">
                                                যুদ্ধবিরতির ঘোষণায় যে প্রতিক্রিয়া জানাল ইউক্রেন-যুক্তরাষ্ট্র
                                            </a>
                                            <time datetime="2023-01-06 00:51:35">০৬ জানুয়ারি ২০২৩, ১২:৫১ এএম</time>
                                            <p class="d-none d-sm-block">রাশিয়ার প্রেসিডেন্ট ভ্লাদিমির পুতিন বৃহস্পতিবার ইউক্রেনে ৩৬ ঘণ্টার যুদ্ধবিরতির ঘোষণা দিয়েছেন। তিনি সেনাদের নির্দেশ দিয়েছেন, ৬ এবং ৭ জানুয়ারি যেন তারা হামলা চালা</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165142">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/np-file-183671-20230106005135.jpg?width=330&amp;height=186" alt="যুদ্ধবিরতির ঘোষণায় যে প্রতিক্রিয়া জানাল ইউক্রেন-যুক্তরাষ্ট্র" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পঞ্চম বর্ষে ‘সুপ্রভাত মিশিগান’" data-href="https://www.dhakapost.com/probash/165141">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/probash/165141">
                                                পঞ্চম বর্ষে ‘সুপ্রভাত মিশিগান’
                                            </a>
                                            <time datetime="2023-01-05 23:54:26">০৫ জানুয়ারি ২০২৩, ১১:৫৪ পিএম</time>
                                            <p class="d-none d-sm-block">আমেরিকার মিশিগান থেকে প্রকাশিত পত্রিকা ‘সুপ্রভাত মিশিগান’ ৪ বছর পেরিয়ে পঞ্চম বর্ষে পদার্পণ করেছে। স্থানীয় সময় সোমবার (২ ডিসেম্বর) রাতে মৃধা বেঙ্গলি সাংস্কৃতিক ক</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/probash/165141">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/mishis-20230105235426.jpg?width=330&amp;height=186" alt="পঞ্চম বর্ষে ‘সুপ্রভাত মিশিগান’" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাকায় তীব্র যানজট, গাড়ি রেখে বাইকে চড়লেন তুরস্কের রাষ্ট্রদূত" data-href="https://www.dhakapost.com/national/165140">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165140">
                                                ঢাকায় তীব্র যানজট, গাড়ি রেখে বাইকে চড়লেন তুরস্কের রাষ্ট্রদূত
                                            </a>
                                            <time datetime="2023-01-05 23:34:48">০৫ জানুয়ারি ২০২৩, ১১:৩৪ পিএম</time>
                                            <p class="d-none d-sm-block">গাড়ি নিয়ে গেলে হয়ে যেতে পারে দেরি। ঘণ্টার পর ঘণ্টা আটকে থাকতে হতে পারে যানজটে। ঢাকার রাস্তায় ট্রাফিক জ্যামের কোনো নিশ্চয়তা নেই।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165140">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/ezgif-4-55c6c1846a-20230105233448.jpg?width=330&amp;height=186" alt="ঢাকায় তীব্র যানজট, গাড়ি রেখে বাইকে চড়লেন তুরস্কের রাষ্ট্রদূত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শুক্রবার খুলনায় যাচ্ছেন প্রধানমন্ত্রী" data-href="https://www.dhakapost.com/country/165139">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165139">
                                                শুক্রবার খুলনায় যাচ্ছেন প্রধানমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-05 22:52:40">০৫ জানুয়ারি ২০২৩, ১০:৫২ পিএম</time>
                                            <p class="d-none d-sm-block">ব্যক্তিগত সফরে খুলনায় আসছেন প্রধানমন্ত্রী শেখ হাসিনা। শুক্রবার (৬ জানুয়ারি) তিনি দিঘলিয়ার নগরঘাট এলাকায় তাঁর মা বঙ্গমাতা বেগম ফজিলাতুন্নেছা মুজিবের নামে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165139">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/hasina-2-20230105230107.jpg?width=330&amp;height=186" alt="শুক্রবার খুলনায় যাচ্ছেন প্রধানমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গভীর সমুদ্রে ট্রলারের ইঞ্জিন বিকল, ৮ দিন পর ১৫ জেলে উদ্ধার " data-href="https://www.dhakapost.com/country/165138">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165138">
                                                গভীর সমুদ্রে ট্রলারের ইঞ্জিন বিকল, ৮ দিন পর ১৫ জেলে উদ্ধার
                                            </a>
                                            <time datetime="2023-01-05 22:40:51">০৫ জানুয়ারি ২০২৩, ১০:৪০ পিএম</time>
                                            <p class="d-none d-sm-block">কক্সবাজারের দক্ষিণে বঙ্গোপসাগরে ইঞ্জিন বিকল হয়ে আট দিন সাগরে ভেসে থাকা মাছ ধরার ট্রলার ‘নিশি পদ্মা’ থেকে ১৫ জেলেকে জীবিত উদ্ধার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165138">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/coxsbazar-20230105224051.jpg?width=330&amp;height=186" alt="গভীর সমুদ্রে ট্রলারের ইঞ্জিন বিকল, ৮ দিন পর ১৫ জেলে উদ্ধার " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="৩৬ ঘণ্টার যুদ্ধবিরতি ঘোষণা করলেন পুতিন" data-href="https://www.dhakapost.com/international/165137">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165137">
                                                ৩৬ ঘণ্টার যুদ্ধবিরতি ঘোষণা করলেন পুতিন
                                            </a>
                                            <time datetime="2023-01-05 22:38:16">০৫ জানুয়ারি ২০২৩, ১০:৩৮ পিএম</time>
                                            <p class="d-none d-sm-block">ইউক্রেনে ২ দিনের যুদ্ধবিরতি ঘোষণা করেছেন রাশিয়ার প্রেসিডেন্ট ভ্লাদিমির পুতিন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165137">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/putin-1-20230105223816.jpg?width=330&amp;height=186" alt="৩৬ ঘণ্টার যুদ্ধবিরতি ঘোষণা করলেন পুতিন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গ্রিন ইউনিভার্সিটিতে দুই দিনব্যাপী টেক্স ফেস্ট" data-href="https://www.dhakapost.com/campus/165136">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/campus/165136">
                                                গ্রিন ইউনিভার্সিটিতে দুই দিনব্যাপী টেক্স ফেস্ট
                                            </a>
                                            <time datetime="2023-01-05 22:37:12">০৫ জানুয়ারি ২০২৩, ১০:৩৭ পিএম</time>
                                            <p class="d-none d-sm-block">আলোচনা সভা, কুইজ প্রতিযোগিতা ও বর্ণাঢ্য সাংস্কৃতিক অনুষ্ঠানের মধ্য দিয়ে ‘টেক্স ফেস্ট-২০২২’ উদযাপন করেছে গ্রিন ইউনিভার্সিটি অব বাংলাদেশের টেক্সটাইল বিভাগের সাবেক</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/campus/165136">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/000-20230105223712.jpg?width=330&amp;height=186" alt="গ্রিন ইউনিভার্সিটিতে দুই দিনব্যাপী টেক্স ফেস্ট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="রাজধানীতে হঠাৎ ছাত্রদলের বিক্ষোভ" data-href="https://www.dhakapost.com/politics/165135">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165135">
                                                রাজধানীতে হঠাৎ ছাত্রদলের বিক্ষোভ
                                            </a>
                                            <time datetime="2023-01-05 22:17:10">০৫ জানুয়ারি ২০২৩, ১০:১৭ পিএম</time>
                                            <p class="d-none d-sm-block">দুদকের মামলায় বিএনপির ভারপ্রাপ্ত চেয়ারম্যান তারেক রহমান ও তার স্ত্রী ডা. জোবাইদা রহমানের সম্পদ ক্রোকের আদেশের প্রতিবাদে বিক্ষোভ মিছিল করেছে জাতীয়তাবাদী ছাত্র</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165135">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/asdas-20230105221710.jpg?width=330&amp;height=186" alt="রাজধানীতে হঠাৎ ছাত্রদলের বিক্ষোভ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দেশে ১৫ বছর ধরে অলিখিত বাকশাল চলছে : মঈন খান" data-href="https://www.dhakapost.com/country/165134">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165134">
                                                দেশে ১৫ বছর ধরে অলিখিত বাকশাল চলছে : মঈন খান
                                            </a>
                                            <time datetime="2023-01-05 22:04:22">০৫ জানুয়ারি ২০২৩, ১০:০৪ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপির স্থায়ী কমিটির সদস্য ড. আবদুল মঈন খান বলেছেন, আওয়ামী লীগ ১৯৭২-৭৫ এ যা করেছিল, আজকে যেটা করেছে তার চেয়ে বেশি খারাপ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165134">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/manikgonj1-20230105220422.jpg?width=330&amp;height=186" alt="দেশে ১৫ বছর ধরে অলিখিত বাকশাল চলছে : মঈন খান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ফরিদপুরে বাবাকে হত্যার দায়ে ছেলের যাবজ্জীন কারাদণ্ড" data-href="https://www.dhakapost.com/country/165133">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165133">
                                                ফরিদপুরে বাবাকে হত্যার দায়ে ছেলের যাবজ্জীন কারাদণ্ড
                                            </a>
                                            <time datetime="2023-01-05 22:01:09">০৫ জানুয়ারি ২০২৩, ১০:০১ পিএম</time>
                                            <p class="d-none d-sm-block">ফরিদপুরে বাবা হারুন অর রশিদকে হত্যার দায়ে ছেলে মিলন চৌধুরীর (৩০) সশ্রম যাবজ্জীন কারাদণ্ড এবং ২০ হাজার টাকা জরিমানা করেছেন আদালত। জরিমানা অনাদায়ে তাকে আরও...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165133">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/faridpur-20230105220109.jpg?width=330&amp;height=186" alt="ফরিদপুরে বাবাকে হত্যার দায়ে ছেলের যাবজ্জীন কারাদণ্ড" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিপিএলের প্রথম দিনে লড়বে কুমিল্লা-রংপুর, সিলেট-চট্টগ্রাম" data-href="https://www.dhakapost.com/sports/cricket/165132">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165132">
                                                বিপিএলের প্রথম দিনে লড়বে কুমিল্লা-রংপুর, সিলেট-চট্টগ্রাম
                                            </a>
                                            <time datetime="2023-01-05 21:58:14">০৫ জানুয়ারি ২০২৩, ০৯:৫৮ পিএম</time>
                                            <p class="d-none d-sm-block">আগামীকাল (শুক্রবার) থেকে মাঠে গড়াতে যাচ্ছে বাংলাদেশ প্রিমিয়ার লিগ (বিপিএল) এবারের...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165132">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bpl-20230105215814.jpg?width=330&amp;height=186" alt="বিপিএলের প্রথম দিনে লড়বে কুমিল্লা-রংপুর, সিলেট-চট্টগ্রাম" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="তৃণমূলে খেলোয়াড় তৈরিতে পৃষ্টপোষকতা জরুরি : সাবিরুল ইসলাম" data-href="https://www.dhakapost.com/country/165131">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165131">
                                                তৃণমূলে খেলোয়াড় তৈরিতে পৃষ্টপোষকতা জরুরি : সাবিরুল ইসলাম
                                            </a>
                                            <time datetime="2023-01-05 21:51:50">০৫ জানুয়ারি ২০২৩, ০৯:৫১ পিএম</time>
                                            <p class="d-none d-sm-block">দেশের তৃণমূল পর্যায়ের ক্রীড়াঙ্গনের উন্নয়নসহ নতুন নতুন খেলোয়াড় তৈরিতে সরকারের পাশাপাশি বেসরকারি প্রতিষ্ঠান ও বৃত্তবানদের এগিয়ে আসা জরুরি বলে মন্তব্য করেছেন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165131">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rangpur-2-20230105215149.jpg?width=330&amp;height=186" alt="তৃণমূলে খেলোয়াড় তৈরিতে পৃষ্টপোষকতা জরুরি : সাবিরুল ইসলাম" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="প্রতিবছর অসংক্রামক রোগে ৬৭ শতাংশ মানুষের মৃত্যু" data-href="https://www.dhakapost.com/country/165130">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165130">
                                                প্রতিবছর অসংক্রামক রোগে ৬৭ শতাংশ মানুষের মৃত্যু
                                            </a>
                                            <time datetime="2023-01-05 21:43:11">০৫ জানুয়ারি ২০২৩, ০৯:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">দেশের ৬৭ শতাংশ মানুষ অসংক্রামক রোগে আক্রান্ত হয়ে মারা যাচ্ছেন। মৃত্যুকে দ্রুততর করা অথবা স্থবির করার মতো মানসিকতা থেকে বেরিয়ে আসতে হবে। দীর্ঘ সময় ধরে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165130">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rangpur-1-20230105214311.jpg?width=330&amp;height=186" alt="প্রতিবছর অসংক্রামক রোগে ৬৭ শতাংশ মানুষের মৃত্যু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ইমরানকে সরানোর প্রক্রিয়া আটকে দিল আদালত" data-href="https://www.dhakapost.com/international/165129">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165129">
                                                ইমরানকে সরানোর প্রক্রিয়া আটকে দিল আদালত
                                            </a>
                                            <time datetime="2023-01-05 21:36:00">০৫ জানুয়ারি ২০২৩, ০৯:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">তোশাখানা মামলার জেরে পাকিস্তানের বর্তমান বিরোধী নেতা ইমরান খানকে তার দল পাকিস্তান তেহরিক-ই ইনসাফের (পিটিআই) চেয়ারম্যানের পদ থেকে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165129">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/imran-khan-3-20230105213600.jpg?width=330&amp;height=186" alt="ইমরানকে সরানোর প্রক্রিয়া আটকে দিল আদালত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিএনপির ৬ আসনের উপ-নির্বাচনে ৫৩ জনের মনোনয়ন সংগ্রহ " data-href="https://www.dhakapost.com/politics/165128">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165128">
                                                বিএনপির ৬ আসনের উপ-নির্বাচনে ৫৩ জনের মনোনয়ন সংগ্রহ
                                            </a>
                                            <time datetime="2023-01-05 21:35:08">০৫ জানুয়ারি ২০২৩, ০৯:৩৫ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপির ছেড়ে দেওয়া ছয়টি (ঠাকুরগাঁও-৩, বগুড়া-৪, বগুড়া-৬, চাঁপাইনবাবগঞ্জ-২, ব্রাহ্মণবাড়িয়া-২ ও চাঁপাইনবাবগঞ্জ-৩)...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165128">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bnp-20230105213508.jpg?width=330&amp;height=186" alt="বিএনপির ৬ আসনের উপ-নির্বাচনে ৫৩ জনের মনোনয়ন সংগ্রহ " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গিয়াস উদ্দিনকে নিয়ে গণমাধ্যমে সংবাদ দেখে বাড়িতে হাজির ইউএনও" data-href="https://www.dhakapost.com/country/165127">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165127">
                                                গিয়াস উদ্দিনকে নিয়ে গণমাধ্যমে সংবাদ দেখে বাড়িতে হাজির ইউএনও
                                            </a>
                                            <time datetime="2023-01-05 21:29:55">০৫ জানুয়ারি ২০২৩, ০৯:২৯ পিএম</time>
                                            <p class="d-none d-sm-block">বাড়ি ও ফসলি জমিসহ এক একরেরও বেশি জায়গা থাকার পরও প্রভাবশালীরা তা দখল করে নেওয়ায় গত ২০ বছর ধরে বাড়ি ছাড়া রয়েছেন নেত্রকোনার কেন্দুয়া উপজেলার আশুজিয়া...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165127">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/netrokona-20230105212955.jpg?width=330&amp;height=186" alt="গিয়াস উদ্দিনকে নিয়ে গণমাধ্যমে সংবাদ দেখে বাড়িতে হাজির ইউএনও" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ইয়াবার মামলায় যাবজ্জীবন সাজা নিয়েই ইয়াবা ব্যবসা" data-href="https://www.dhakapost.com/national/165126">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165126">
                                                ইয়াবার মামলায় যাবজ্জীবন সাজা নিয়েই ইয়াবা ব্যবসা
                                            </a>
                                            <time datetime="2023-01-05 21:26:42">০৫ জানুয়ারি ২০২৩, ০৯:২৬ পিএম</time>
                                            <p class="d-none d-sm-block">মাদক মামলায় যাবজ্জীবন সাজাপ্রাপ্ত পলাতক ইয়াবা ব্যবসায়ী মো. উজ্জল ওরফে উত্তম শাহা (৫৩) ও তার সাবেক স্ত্রী রত্নাকে ইয়াবাসহ গ্রেপ্তার করেছে র‌্যাপিড অ্যাকশন</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165126">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rab-20230105212642.jpg?width=330&amp;height=186" alt="ইয়াবার মামলায় যাবজ্জীবন সাজা নিয়েই ইয়াবা ব্যবসা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শীতে কাবু দক্ষিণাঞ্চল, হাসপাতালে বাড়ছে রোগী" data-href="https://www.dhakapost.com/country/165125">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165125">
                                                শীতে কাবু দক্ষিণাঞ্চল, হাসপাতালে বাড়ছে রোগী
                                            </a>
                                            <time datetime="2023-01-05 21:19:55">০৫ জানুয়ারি ২০২৩, ০৯:১৯ পিএম</time>
                                            <p class="d-none d-sm-block">শীতের মাঝামাঝি সময়ে এসে দক্ষিণাঞ্চলের দুয়ারে কড়া নাড়ছে দুটি শৈত্যপ্রবাহ। এর মধ্যে একটি একেবারে নিকটে চলে এসেছে বলে জানিয়েছে বরিশাল...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165125">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/borishal2-20230105211955.jpg?width=330&amp;height=186" alt="শীতে কাবু দক্ষিণাঞ্চল, হাসপাতালে বাড়ছে রোগী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="১১ টাকা পারিশ্রমিকে গাইলেন অরিজিৎ!" data-href="https://www.dhakapost.com/entertainment/165124">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165124">
                                                ১১ টাকা পারিশ্রমিকে গাইলেন অরিজিৎ!
                                            </a>
                                            <time datetime="2023-01-05 21:09:17">০৫ জানুয়ারি ২০২৩, ০৯:০৯ পিএম</time>
                                            <p class="d-none d-sm-block">শ্রীজাতের পরিচালনায় প্রথম সিনেমা ‘মানবজমিন’-এর জন্য গেয়েছেন অরিজিৎ সিং। ‘মন রে কৃষিকাজ জানো না…’, ইতোমধ্যেই কলকাতা শ্রোতাদের মুখে মুখে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165124">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/arijit-singh-20230105210917.jpg?width=330&amp;height=186" alt="১১ টাকা পারিশ্রমিকে গাইলেন অরিজিৎ!" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ওমানে অনুশীলনে বাংলাদেশ" data-href="https://www.dhakapost.com/sports/hockey/165123">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/hockey/165123">
                                                ওমানে অনুশীলনে বাংলাদেশ
                                            </a>
                                            <time datetime="2023-01-05 21:07:40">০৫ জানুয়ারি ২০২৩, ০৯:০৭ পিএম</time>
                                            <p class="d-none d-sm-block">জুনিয়র এএইচএফ কাপ খেলতে গতকাল (বুধবার) মধ্যরাতে ওমান পৌঁছায় বাংলাদেশ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/hockey/165123">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/g-20230105210740.jpg?width=330&amp;height=186" alt="ওমানে অনুশীলনে বাংলাদেশ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জীবন সম্পর্কে মানুষের মধ্যে ইতিবাচক ভাবনা জরুরি" data-href="https://www.dhakapost.com/education/165122">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/education/165122">
                                                জীবন সম্পর্কে মানুষের মধ্যে ইতিবাচক ভাবনা জরুরি
                                            </a>
                                            <time datetime="2023-01-05 20:57:51">০৫ জানুয়ারি ২০২৩, ০৮:৫৭ পিএম</time>
                                            <p class="d-none d-sm-block">জাতীয় বিশ্ববিদ্যালয়ের উপাচার্য প্রফেসর ড. মো. মশিউর রহমান বলেছেন, জীবন সম্পর্কে মানুষের মধ্যে ইতিবাচক ভাবনা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/education/165122">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/f-20230105205751.jpg?width=330&amp;height=186" alt="জীবন সম্পর্কে মানুষের মধ্যে ইতিবাচক ভাবনা জরুরি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শুক্রবার জাতির উদ্দেশে ভাষণ দেবেন প্রধানমন্ত্রী" data-href="https://www.dhakapost.com/national/165121">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165121">
                                                শুক্রবার জাতির উদ্দেশে ভাষণ দেবেন প্রধানমন্ত্রী
                                            </a>
                                            <time datetime="2023-01-05 20:53:38">০৫ জানুয়ারি ২০২৩, ০৮:৫৩ পিএম</time>
                                            <p class="d-none d-sm-block"></p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165121">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sheikh-hasina3-202301050716401-20230105205338.jpg?width=330&amp;height=186" alt="শুক্রবার জাতির উদ্দেশে ভাষণ দেবেন প্রধানমন্ত্রী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বোদায় যাদুকরদের ‘পাতা খেলা’ দেখলো হাজারো দর্শক" data-href="https://www.dhakapost.com/country/165120">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165120">
                                                বোদায় যাদুকরদের ‘পাতা খেলা’ দেখলো হাজারো দর্শক
                                            </a>
                                            <time datetime="2023-01-05 20:53:06">০৫ জানুয়ারি ২০২৩, ০৮:৫৩ পিএম</time>
                                            <p class="d-none d-sm-block">পঞ্চগড়ের বোদায় অনুষ্ঠিত হয়েছে হারিয়ে যাওয়া গ্রামবাংলার ঐতিহ্যবাহী পাতা খেলা। বৃহস্পতিবার (৫ জানুয়ারি) বিকেলে বোদা উপজেলার পাঁচপীড় ইউপির দক্ষিণ কালিবাড়ী হারামজাদ</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165120">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/boda-20230105205306.jpg?width=330&amp;height=186" alt="বোদায় যাদুকরদের ‘পাতা খেলা’ দেখলো হাজারো দর্শক" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সৌদি পাঠানোর নামে টাকা আত্মসাৎ : চক্রের সদস্য গ্রেপ্তার" data-href="https://www.dhakapost.com/national/165119">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165119">
                                                সৌদি পাঠানোর নামে টাকা আত্মসাৎ : চক্রের সদস্য গ্রেপ্তার
                                            </a>
                                            <time datetime="2023-01-05 20:48:23">০৫ জানুয়ারি ২০২৩, ০৮:৪৮ পিএম</time>
                                            <p class="d-none d-sm-block">রাজধানীর ভাটারা থেকে সৌদি আরবে মানবপাচারকারী চক্রের সদস্য আসাদুল হককে (২৫) গ্রেপ্তার করেছে পুলিশের অপরাধ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165119">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cid-20230105204823.jpg?width=330&amp;height=186" alt="সৌদি পাঠানোর নামে টাকা আত্মসাৎ : চক্রের সদস্য গ্রেপ্তার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="কোনটা আসল হাজীর বিরিয়ানি?" data-href="https://www.dhakapost.com/national/165118">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165118">
                                                কোনটা আসল হাজীর বিরিয়ানি?
                                            </a>
                                            <time datetime="2023-01-05 20:45:39">০৫ জানুয়ারি ২০২৩, ০৮:৪৫ পিএম</time>
                                            <p class="d-none d-sm-block">সবাই দাবি করে থাকেন, তারটাই আসল পুরান ঢাকার হাজী বিরিয়ানি। কিন্তু এতোগুলো হাজীর বিরিয়ানির ভিড়ে আসল হাজীর বিরিয়ানি কে?</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165118">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cats-20230105205115.jpg?width=330&amp;height=186" alt="কোনটা আসল হাজীর বিরিয়ানি?" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ব্রাহ্মণবাড়িয়া-২ আসনে ১৩ প্রার্থীর মনোনয়নপত্র জমা" data-href="https://www.dhakapost.com/country/165117">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165117">
                                                ব্রাহ্মণবাড়িয়া-২ আসনে ১৩ প্রার্থীর মনোনয়নপত্র জমা
                                            </a>
                                            <time datetime="2023-01-05 20:43:20">০৫ জানুয়ারি ২০২৩, ০৮:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">ব্রাহ্মণবাড়িয়া-২ (সরাইল-আশুগঞ্জ) আসনের উপনির্বাচনে ১৩ জন প্রার্থী মনোনয়নপত্র জমা দিয়েছেন। বৃহস্পতিবার (৫ জানুয়ারি) মনোনয়নপত্র জমা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165117">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bbaria1-20230105204320.jpg?width=330&amp;height=186" alt="ব্রাহ্মণবাড়িয়া-২ আসনে ১৩ প্রার্থীর মনোনয়নপত্র জমা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দক্ষ জনশক্তি গড়তে কারিগরি-ভোকেশনালে জোর দেওয়ার আহ্বান" data-href="https://www.dhakapost.com/economy/165116">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165116">
                                                দক্ষ জনশক্তি গড়তে কারিগরি-ভোকেশনালে জোর দেওয়ার আহ্বান
                                            </a>
                                            <time datetime="2023-01-05 20:30:53">০৫ জানুয়ারি ২০২৩, ০৮:৩০ পিএম</time>
                                            <p class="d-none d-sm-block">সরকার ঘোষিত বিভিন্ন অর্থনৈতিক লক্ষ্যমাত্রা অর্জনে দক্ষ জনশক্তি গড়ে তোলার প্রতি জোর দেওয়ার আহ্বান জানিয়েছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165116">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/rt-20230105203053.jpg?width=330&amp;height=186" alt="দক্ষ জনশক্তি গড়তে কারিগরি-ভোকেশনালে জোর দেওয়ার আহ্বান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চিকিৎসক পরিচয়ে রোগী দেখতেন গাড়িচালক" data-href="https://www.dhakapost.com/country/165115">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165115">
                                                চিকিৎসক পরিচয়ে রোগী দেখতেন গাড়িচালক
                                            </a>
                                            <time datetime="2023-01-05 20:20:22">০৫ জানুয়ারি ২০২৩, ০৮:২০ পিএম</time>
                                            <p class="d-none d-sm-block">সাভারে ফিজিওথেরাপিস্ট পরিচয়ে চিকিৎসা দেওয়ায় সবুজ মাতুব্বর (৩২) নামে এক যুবককে গ্রেপ্তার করেছে পুলিশ। পঞ্চম শ্রেণি পাস সবুজ নিজেকে চিকিৎসক হিসেবে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165115">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sobuj1-20230105202022.jpg?width=330&amp;height=186" alt="চিকিৎসক পরিচয়ে রোগী দেখতেন গাড়িচালক" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিশ্বের তৃতীয় ধনী টেলর সুইফটের বিড়াল!" data-href="https://www.dhakapost.com/entertainment/hollywood/165114">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/hollywood/165114">
                                                বিশ্বের তৃতীয় ধনী টেলর সুইফটের বিড়াল!
                                            </a>
                                            <time datetime="2023-01-05 20:16:34">০৫ জানুয়ারি ২০২৩, ০৮:১৬ পিএম</time>
                                            <p class="d-none d-sm-block">আবারও সংবাদের শিরোনামে বিখ্যাত আমেরিকান গায়িকা টেলর সুইফট। না, এবার কোনো গান কিংবা ব্যক্তিগত অর্জনের কারণে নয় বরং তার বিড়ালের কারণে উঠে এসেছেন সংবাদমাধ্যমের...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/hollywood/165114">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/taylor-catjpg2-20230105202713.jpg?width=330&amp;height=186" alt="বিশ্বের তৃতীয় ধনী টেলর সুইফটের বিড়াল!" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিএনপি নেতা আসলাম ও তার স্ত্রীর বিরুদ্ধে চার্জশিট" data-href="https://www.dhakapost.com/law-courts/165113">
                                        <div class="topic-content-text">
                                            <p style="border-bottom: 1px solid #134b65;display: inline-block;color: #134b65;">অবৈধ সম্পদ অর্জন</p>
                                            <a href="https://www.dhakapost.com/law-courts/165113">
                                                বিএনপি নেতা আসলাম ও তার স্ত্রীর বিরুদ্ধে চার্জশিট
                                            </a>
                                            <time datetime="2023-01-05 20:15:11">০৫ জানুয়ারি ২০২৩, ০৮:১৫ পিএম</time>
                                            <p class="d-none d-sm-block">সম্পদ বিবরণী দাখিল না করায় বিএনপির যুগ্ম-মহাসচিব আসলাম চৌধুরী ও তার স্ত্রী জামিলা নাজনীল মাওলার বিরুদ্ধে চার্জশিট দিয়েছে দুর্নীতি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165113">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cdf-20230105201511.jpg?width=330&amp;height=186" alt="বিএনপি নেতা আসলাম ও তার স্ত্রীর বিরুদ্ধে চার্জশিট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিশ্ববিদ্যালয়ের প্রধান কাজ গবেষণা: জবি উপাচার্য" data-href="https://www.dhakapost.com/education/165112">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/education/165112">
                                                বিশ্ববিদ্যালয়ের প্রধান কাজ গবেষণা: জবি উপাচার্য
                                            </a>
                                            <time datetime="2023-01-05 20:14:10">০৫ জানুয়ারি ২০২৩, ০৮:১৪ পিএম</time>
                                            <p class="d-none d-sm-block">জগন্নাথ বিশ্ববিদ্যালয়ের উপাচার্য অধ্যাপক ড. ইমদাদুল হক বলেছেন, একটি বিশ্ববিদ্যালয়ের প্রধান কাজ হচ্ছে গবেষণা।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/education/165112">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/0-20230105201410.jpg?width=330&amp;height=186" alt="বিশ্ববিদ্যালয়ের প্রধান কাজ গবেষণা: জবি উপাচার্য" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="তারেক ও জোবায়দার সম্পত্তি বাজেয়াপ্তের নির্দেশ " data-href="https://www.dhakapost.com/law-courts/165111">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165111">
                                                তারেক ও জোবায়দার সম্পত্তি বাজেয়াপ্তের নির্দেশ
                                            </a>
                                            <time datetime="2023-01-05 20:12:42">০৫ জানুয়ারি ২০২৩, ০৮:১২ পিএম</time>
                                            <p class="d-none d-sm-block">দুর্নীতি দমন কমিশনের (দুদক) দায়ের করা মামলায় বিএনপির ভারপ্রাপ্ত চেয়ারম্যান তারেক রহমান ও তার স্ত্রী জোবায়দা রহমানের স্থাবর-অস্থাবর সম্পত্তি বাজেয়াপ্ত করার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165111">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/817-20230105201242.jpg?width=330&amp;height=186" alt="তারেক ও জোবায়দার সম্পত্তি বাজেয়াপ্তের নির্দেশ " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="খেলার বাইরে থাকলেও বিপিএলের জন্য মানসিকভাবে প্রস্তুত মাশরাফি" data-href="https://www.dhakapost.com/sports/165110">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/165110">
                                                খেলার বাইরে থাকলেও বিপিএলের জন্য মানসিকভাবে প্রস্তুত মাশরাফি
                                            </a>
                                            <time datetime="2023-01-05 20:04:26">০৫ জানুয়ারি ২০২৩, ০৮:০৪ পিএম</time>
                                            <p class="d-none d-sm-block">রাত পোহালেই মাঠে গড়াচ্ছে এবারের বাংলাদেশ প্রিমিয়ার লিগ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/165110">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/mash-20230105200426.jpg?width=330&amp;height=186" alt="খেলার বাইরে থাকলেও বিপিএলের জন্য মানসিকভাবে প্রস্তুত মাশরাফি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শার্লি হেবদোতে খামেনির কার্টুন, ইরানে বন্ধ ফ্রান্সের প্রতিষ্ঠান" data-href="https://www.dhakapost.com/international/165109">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165109">
                                                শার্লি হেবদোতে খামেনির কার্টুন, ইরানে বন্ধ ফ্রান্সের প্রতিষ্ঠান
                                            </a>
                                            <time datetime="2023-01-05 19:50:32">০৫ জানুয়ারি ২০২৩, ০৭:৫০ পিএম</time>
                                            <p class="d-none d-sm-block">ফ্রান্সের ব্যাঙ্গবিদ্রুপ সাময়িকী শার্লি হেবদোতে ইরানের ক্ষমতাসীন শাসকগোষ্ঠীর শীর্ষ নেতা আয়াতুল্লাহ আলি খামেনির ব্যঙ্গচিত্র প্রকাশ করায়...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165109">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/khameni-2-20230105195031.jpg?width=330&amp;height=186" alt="শার্লি হেবদোতে খামেনির কার্টুন, ইরানে বন্ধ ফ্রান্সের প্রতিষ্ঠান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দ্বিপাক্ষিক সম্পর্ক জোরদারে একমত বাংলাদেশ-ফ্রান্স" data-href="https://www.dhakapost.com/national/165108">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165108">
                                                দ্বিপাক্ষিক সম্পর্ক জোরদারে একমত বাংলাদেশ-ফ্রান্স
                                            </a>
                                            <time datetime="2023-01-05 19:45:34">০৫ জানুয়ারি ২০২৩, ০৭:৪৫ পিএম</time>
                                            <p class="d-none d-sm-block">পররাষ্ট্রমন্ত্রী ড. এ কে আব্দুল মোমেনের সঙ্গে সৌজন্য সাক্ষাৎ করেছেন বাংলাদেশে নিযুক্ত ফ্রান্সের নতুন রাষ্ট্রদূত ম্যারি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165108">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/momen-20230105194534.jpg?width=330&amp;height=186" alt="দ্বিপাক্ষিক সম্পর্ক জোরদারে একমত বাংলাদেশ-ফ্রান্স" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গজারিয়ায় ৮ কিলোমিটার এলাকার অবৈধ গ্যাস সংযোগ বিচ্ছিন্ন" data-href="https://www.dhakapost.com/country/165107">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165107">
                                                গজারিয়ায় ৮ কিলোমিটার এলাকার অবৈধ গ্যাস সংযোগ বিচ্ছিন্ন
                                            </a>
                                            <time datetime="2023-01-05 19:44:26">০৫ জানুয়ারি ২০২৩, ০৭:৪৪ পিএম</time>
                                            <p class="d-none d-sm-block">মুন্সীগঞ্জের গজারিয়া উপজেলার পৃথক দুটি এলাকায় অভিযান চালিয়ে ৮ কিলোমিটার এলাকার অবৈধ গ্যাস সংযোগ বিচ্ছিন্ন করেছে তিতাস গ্যাস কর্তৃপক্ষ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165107">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gajaria-20230105194426.jpg?width=330&amp;height=186" alt="গজারিয়ায় ৮ কিলোমিটার এলাকার অবৈধ গ্যাস সংযোগ বিচ্ছিন্ন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গার্মেন্টসের মতোই প্রসার হতে পারে দেশের অটোমোবাইল শিল্প " data-href="https://www.dhakapost.com/economy/165106">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165106">
                                                গার্মেন্টসের মতোই প্রসার হতে পারে দেশের অটোমোবাইল শিল্প
                                            </a>
                                            <time datetime="2023-01-05 19:40:52">০৫ জানুয়ারি ২০২৩, ০৭:৪০ পিএম</time>
                                            <p class="d-none d-sm-block">রানার অটোমোবাইলস লিমিটেডের চেয়ারম্যান মো. হাফিজুর রহমান খান বলেছেন, বর্তমানে বিশ্বে অটোমোবাইলে প্রায় ৩ ট্রিলিয়ন মার্কিন ডলারের বাজার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165106">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/runner-20230105194051.jpg?width=330&amp;height=186" alt="গার্মেন্টসের মতোই প্রসার হতে পারে দেশের অটোমোবাইল শিল্প " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আমরাও স্মার্ট বাংলাদেশ গড়তে চাই : হাইকোর্ট" data-href="https://www.dhakapost.com/law-courts/165105">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165105">
                                                আমরাও স্মার্ট বাংলাদেশ গড়তে চাই : হাইকোর্ট
                                            </a>
                                            <time datetime="2023-01-05 19:39:53">০৫ জানুয়ারি ২০২৩, ০৭:৩৯ পিএম</time>
                                            <p class="d-none d-sm-block">স্মার্ট বাংলাদেশ গড়ার সরকারের ঘোষণাকে স্বাগত জানিয়েছেন হাইকোর্ট। আদালত বলেছেন, সরকার স্মার্ট বাংলাদেশ গড়ার ঘোষণা দিয়েছেন। এই ঘোষণাকে আমরা স্বাগত জানাই।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165105">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/01-highcourt-20220912153347-20230105193953.jpg?width=330&amp;height=186" alt="আমরাও স্মার্ট বাংলাদেশ গড়তে চাই : হাইকোর্ট" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সংসদে সাংবাদিকদের সঙ্গে রাষ্ট্রপতির শুভেচ্ছা বিনিময়" data-href="https://www.dhakapost.com/national/165104">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165104">
                                                সংসদে সাংবাদিকদের সঙ্গে রাষ্ট্রপতির শুভেচ্ছা বিনিময়
                                            </a>
                                            <time datetime="2023-01-05 19:28:01">০৫ জানুয়ারি ২০২৩, ০৭:২৮ পিএম</time>
                                            <p class="d-none d-sm-block">জাতীয় সংসদে কর্মরত সাংবাদিকদের সঙ্গে শুভেচ্ছা ও মতবিনিময় করেছেন রাষ্ট্রপতি মো. আবদুল...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165104">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/abdul-hamid-20230105192800.jpg?width=330&amp;height=186" alt="সংসদে সাংবাদিকদের সঙ্গে রাষ্ট্রপতির শুভেচ্ছা বিনিময়" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাকার সন্তানেরাই হবে জাতীয় পর্যায়ের সেরা খেলোয়াড়: মেয়র তাপস" data-href="https://www.dhakapost.com/national/165103">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165103">
                                                ঢাকার সন্তানেরাই হবে জাতীয় পর্যায়ের সেরা খেলোয়াড়: মেয়র তাপস
                                            </a>
                                            <time datetime="2023-01-05 19:21:33">০৫ জানুয়ারি ২০২৩, ০৭:২১ পিএম</time>
                                            <p class="d-none d-sm-block">ঢাকা দক্ষিণ সিটি করপোরেশনের (ডিএসসিসি) মেয়র ব্যারিস্টার শেখ ফজলে নূর তাপস বলেছেন, জাতীয় পর্যায়ের সবচেয়ে উত্তম খেলোয়াড় হবেন ঢাকার সন্তানেরাই। সেই লক্ষ্য নিয়ে আমর</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165103">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/0-20230105192133.jpg?width=330&amp;height=186" alt="ঢাকার সন্তানেরাই হবে জাতীয় পর্যায়ের সেরা খেলোয়াড়: মেয়র তাপস" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="চাঁপাইনবাবগঞ্জের দুই আসনে ১২ প্রার্থীর মনোনয়নপত্র জমা" data-href="https://www.dhakapost.com/country/165102">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165102">
                                                চাঁপাইনবাবগঞ্জের দুই আসনে ১২ প্রার্থীর মনোনয়নপত্র জমা
                                            </a>
                                            <time datetime="2023-01-05 19:07:33">০৫ জানুয়ারি ২০২৩, ০৭:০৭ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপির দুই সংসদ সদস্য হারুনুর রশিদ ও আমিনুল ইসলামের পদত্যাগে শূন্য হওয়া চাঁপাইনবাবগঞ্জ-২ (গোমস্তাপুর, নাচোল, ভোলাহাট)...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165102">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chapai-1-20230105190733.jpg?width=330&amp;height=186" alt="চাঁপাইনবাবগঞ্জের দুই আসনে ১২ প্রার্থীর মনোনয়নপত্র জমা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দুদকের মামলায় মির্জা আব্বাসকে আদালতে হাজির করার নির্দেশ" data-href="https://www.dhakapost.com/law-courts/165101">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165101">
                                                দুদকের মামলায় মির্জা আব্বাসকে আদালতে হাজির করার নির্দেশ
                                            </a>
                                            <time datetime="2023-01-05 19:06:49">০৫ জানুয়ারি ২০২৩, ০৭:০৬ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপি নেতা মির্জা আব্বাসের বিরুদ্ধে দুদকের করা ২০ কোটি ৭৪ লাখ ৪৭ হাজার টাকা অবৈধ সম্পদ অর্জনের মামলায় তাকে আগামী ১৬ জানুয়ারি আদালতে হাজির করতে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165101">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/abbas-20230105190649.jpg?width=330&amp;height=186" alt="দুদকের মামলায় মির্জা আব্বাসকে আদালতে হাজির করার নির্দেশ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আগ্নেয়াস্ত্র-চোরাই মাল উদ্ধারে সেরা চট্টগ্রাম, মাদকে কুমিল্লা" data-href="https://www.dhakapost.com/national/165100">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165100">
                                                আগ্নেয়াস্ত্র-চোরাই মাল উদ্ধারে সেরা চট্টগ্রাম, মাদকে কুমিল্লা
                                            </a>
                                            <time datetime="2023-01-05 19:05:14">০৫ জানুয়ারি ২০২৩, ০৭:০৫ পিএম</time>
                                            <p class="d-none d-sm-block">২০২২ সালে দেশজুড়ে অবৈধ আগ্নেয়াস্ত্র, মাদক ও চোরাচালান উদ্ধারে পুলিশের সেরা ইউনিটকে পুরস্কৃত করা হয়েছে। এর মধ্যে আগ্নেয়াস্ত্র-চোরাই মাল উদ্ধারে সেরা চট্টগ্রাম, ম</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165100">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/pooooooooo-20230105190514.jpg?width=330&amp;height=186" alt="আগ্নেয়াস্ত্র-চোরাই মাল উদ্ধারে সেরা চট্টগ্রাম, মাদকে কুমিল্লা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সন্তান হত্যার বিচার চেয়ে ছয় বছর আদালতের বারান্দায় মা" data-href="https://www.dhakapost.com/law-courts/165099">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165099">
                                                সন্তান হত্যার বিচার চেয়ে ছয় বছর আদালতের বারান্দায় মা
                                            </a>
                                            <time datetime="2023-01-05 19:04:16">০৫ জানুয়ারি ২০২৩, ০৭:০৪ পিএম</time>
                                            <p class="d-none d-sm-block">আয়েশা আক্তার, পেশায় গৃহপরিচারিকা। জীবিকার তাগিদে সাত বছর আগে স্বামী মোস্তফা আর দুই সন্তান আব্দুল্লাহ ও আবিরকে নিয়ে বরিশাল থেকে পাড়ি জমান ঢাকার কেরানীগঞ্জে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165099">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/amena-dhakapost-20230105190416.jpg?width=330&amp;height=186" alt="সন্তান হত্যার বিচার চেয়ে ছয় বছর আদালতের বারান্দায় মা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ইমরুলেই আস্থা কুমিল্লার" data-href="https://www.dhakapost.com/sports/cricket/165098">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165098">
                                                ইমরুলেই আস্থা কুমিল্লার
                                            </a>
                                            <time datetime="2023-01-05 19:02:06">০৫ জানুয়ারি ২০২৩, ০৭:০২ পিএম</time>
                                            <p class="d-none d-sm-block">বাংলাদেশ প্রিমিয়ার লিগের (বিপিএল) নবম আসর মাঠে গড়াচ্ছে শুক্রবার। ইতোমধ্যে অংশগ্রহণকারী কয়েক দলের অধিনায়কের নাম প্রকাশ হয়েছে।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165098">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/imrul-kayes-20230105190206.jpg?width=330&amp;height=186" alt="ইমরুলেই আস্থা কুমিল্লার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সংসদ অধিবেশন চলবে ৯ ফেব্রুয়ারি পর্যন্ত" data-href="https://www.dhakapost.com/national/165097">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165097">
                                                সংসদ অধিবেশন চলবে ৯ ফেব্রুয়ারি পর্যন্ত
                                            </a>
                                            <time datetime="2023-01-05 18:56:31">০৫ জানুয়ারি ২০২৩, ০৬:৫৬ পিএম</time>
                                            <p class="d-none d-sm-block">জাতীয় সংসদের নতুন বছরে প্রথম অধিবেশন ৯ ফেব্রুয়ারি পর্যন্ত চলবে। বৃহস্পতিবার (৫ জানুয়ারি) বিকেল ৪টা ১০ মিনিটে স্পিকার শিরীন শারমিন চৌধুরীর সভাপতিত্বে এ অধিবেশন..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165097">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/455-202301051649581-20230105185630.jpg?width=330&amp;height=186" alt="সংসদ অধিবেশন চলবে ৯ ফেব্রুয়ারি পর্যন্ত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="‘প্রথম প্রেমের গান’ গাইলেন সোহান" data-href="https://www.dhakapost.com/entertainment/165096">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165096">
                                                ‘প্রথম প্রেমের গান’ গাইলেন সোহান
                                            </a>
                                            <time datetime="2023-01-05 18:49:09">০৫ জানুয়ারি ২০২৩, ০৬:৪৯ পিএম</time>
                                            <p class="d-none d-sm-block">এ প্রজন্মের মেধাবী সংগীতশিল্পী সোহান আলী। গান লেখা, সুর করা, মিউজিক কম্পোজিশন এবং গাওয়া, সব নিজেই করেন। এরইমধ্যে নিজ উদ্যোগে কয়েকটি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165096">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sohan-cover-20230105184909.jpg?width=330&amp;height=186" alt="‘প্রথম প্রেমের গান’ গাইলেন সোহান" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ডেঙ্গু আক্রান্ত আরও ৩১ রোগী হাসপাতালে" data-href="https://www.dhakapost.com/health/165095">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/health/165095">
                                                ডেঙ্গু আক্রান্ত আরও ৩১ রোগী হাসপাতালে
                                            </a>
                                            <time datetime="2023-01-05 18:48:01">০৫ জানুয়ারি ২০২৩, ০৬:৪৮ পিএম</time>
                                            <p class="d-none d-sm-block">গত ২৪ ঘণ্টায় ঢাকাসহ দেশের বিভিন্ন স্থানে ডেঙ্গু আক্রান্ত হয়ে হাসপাতালে ভর্তি হয়েছেন ৩১ জন। এর মধ্যে ঢাকায় ২৫ ও ঢাকার বাইরে বিভিন্ন হাসপাতালে ৬ জন ভর্তি হয়েছেন..</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/health/165095">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/0501-dengue-202210281646231-20230105184801.jpg?width=330&amp;height=186" alt="ডেঙ্গু আক্রান্ত আরও ৩১ রোগী হাসপাতালে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল : মোশাররফ " data-href="https://www.dhakapost.com/politics/165094">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/politics/165094">
                                                বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল : মোশাররফ
                                            </a>
                                            <time datetime="2023-01-05 18:38:33">০৫ জানুয়ারি ২০২৩, ০৬:৩৮ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল বলে মন্তব্য করেছেন দলটির স্থায়ী কমিটির সদস্য ড. খন্দকার মোশাররফ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/politics/165094">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bnp-20230105183833.jpg?width=330&amp;height=186" alt="বিএনপি সব ধর্মের প্রতি শ্রদ্ধাশীল : মোশাররফ " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ভোলায় ২২ কোটি টাকার ভারতীয় মালামাল জব্দ" data-href="https://www.dhakapost.com/country/165093">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165093">
                                                ভোলায় ২২ কোটি টাকার ভারতীয় মালামাল জব্দ
                                            </a>
                                            <time datetime="2023-01-05 18:36:54">০৫ জানুয়ারি ২০২৩, ০৬:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">শুল্ক ফাঁকি দিয়ে ভারত থেকে বাংলাদেশে আসা প্রায় ২২ কোটি টাকার ভারতীয় শাড়ি, থ্রি-পিস, ওষুধসহ অন্যান্য মালামাল জব্দ করেছে কোস্টগার্ড...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165093">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bhola1-20230105183654.jpg?width=330&amp;height=186" alt="ভোলায় ২২ কোটি টাকার ভারতীয় মালামাল জব্দ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিনামূল্যে বিপিএল ম্যাচ দেখাবে দারাজ" data-href="https://www.dhakapost.com/sports/165092">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/165092">
                                                বিনামূল্যে বিপিএল ম্যাচ দেখাবে দারাজ
                                            </a>
                                            <time datetime="2023-01-05 18:36:06">০৫ জানুয়ারি ২০২৩, ০৬:৩৬ পিএম</time>
                                            <p class="d-none d-sm-block">বাংলাদেশ প্রিমিয়ার লিগ টি-২০ ম্যাচগুলো সরাসরি দেখা যাবে দারাজ অ্যাপে। বিনামূল্যে দেশের যেকোনো স্থান থেকে সহজেই বিপিএল ম্যাচগুলো অ্যাক্সেস এবং উপভোগ করতে পার</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/165092">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/daraz-20230105183606.jpg?width=330&amp;height=186" alt="বিনামূল্যে বিপিএল ম্যাচ দেখাবে দারাজ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="যুক্তরাষ্ট্রে নিজ ঘরে পাঁচ শিশুসহ পরিবারের ৮ জনের গুলিবিদ্ধ লাশ" data-href="https://www.dhakapost.com/international/165091">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165091">
                                                যুক্তরাষ্ট্রে নিজ ঘরে পাঁচ শিশুসহ পরিবারের ৮ জনের গুলিবিদ্ধ লাশ
                                            </a>
                                            <time datetime="2023-01-05 18:34:52">০৫ জানুয়ারি ২০২৩, ০৬:৩৪ পিএম</time>
                                            <p class="d-none d-sm-block">যুক্তরাষ্ট্রের উটাহ রাজ্যের সল্টলেক সিটির ২৪৫ মাইল দক্ষিণে অবস্থিত ছোট শহর ইনোচের একটি বাড়ি থেকে পাঁচ অপ্রাপ্তবয়স্ক শিশুসহ এক পরিবারের ৮ সদস্যের গুলিবিদ্ধ লাশ উ</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165091">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/cats-20230105183452.jpg?width=330&amp;height=186" alt="যুক্তরাষ্ট্রে নিজ ঘরে পাঁচ শিশুসহ পরিবারের ৮ জনের গুলিবিদ্ধ লাশ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="‘পাঠান’র ১০ দৃশ্যে কাঁচি চালালো সেন্সর বোর্ড" data-href="https://www.dhakapost.com/entertainment/bollywood/165090">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165090">
                                                ‘পাঠান’র ১০ দৃশ্যে কাঁচি চালালো সেন্সর বোর্ড
                                            </a>
                                            <time datetime="2023-01-05 18:34:35">০৫ জানুয়ারি ২০২৩, ০৬:৩৪ পিএম</time>
                                            <p class="d-none d-sm-block">‘পাঠান’ নিয়ে ভক্ত-দর্শকের আগ্রহ তুঙ্গে। আর মাত্র অল্প কয়েকদিন বাকি। বক্স অফিসে ঝড় তুলতে আসছেন শাহরুখ-দীপিকা। অপরদিকে বসে নেই উগ্রবাদীরাও।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/bollywood/165090">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gerua-20230105183434.jpg?width=330&amp;height=186" alt="‘পাঠান’র ১০ দৃশ্যে কাঁচি চালালো সেন্সর বোর্ড" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ভিএফএক্সে নির্মাণ করা হয়েছে তারকাবহুল ধারাবাহিকটি" data-href="https://www.dhakapost.com/entertainment/165089">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165089">
                                                ভিএফএক্সে নির্মাণ করা হয়েছে তারকাবহুল ধারাবাহিকটি
                                            </a>
                                            <time datetime="2023-01-05 18:30:51">০৫ জানুয়ারি ২০২৩, ০৬:৩০ পিএম</time>
                                            <p class="d-none d-sm-block">আগামী ৭ জানুয়ারি থেকে দীপ্ত টিভিতে দেখানো হবে ময়মনসিংহ গীতিকা অবলম্বনে ধারাবাহিক নাটক ‘কাজল রেখা’।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165089">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/kajal-rekha-cover-20230105183051.jpg?width=330&amp;height=186" alt="ভিএফএক্সে নির্মাণ করা হয়েছে তারকাবহুল ধারাবাহিকটি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="আইজিপি ব্যাজ পেলেন ডিএমপির ৮৭ পুলিশ" data-href="https://www.dhakapost.com/national/165088">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165088">
                                                আইজিপি ব্যাজ পেলেন ডিএমপির ৮৭ পুলিশ
                                            </a>
                                            <time datetime="2023-01-05 18:24:36">০৫ জানুয়ারি ২০২৩, ০৬:২৪ পিএম</time>
                                            <p class="d-none d-sm-block">গুরুত্বপূর্ণ কাজে অবদানের স্বীকৃতি স্বরূপ প্রতিবছর পুলিশ সদস্যদের আইজিপি ব্যাজ পরিয়ে সম্মানিত করেন পুলিশ প্রধান...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165088">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230105182436.jpg?width=330&amp;height=186" alt="আইজিপি ব্যাজ পেলেন ডিএমপির ৮৭ পুলিশ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="তালিবানের অভিযানে আইএসের ৮ যোদ্ধা নিহত" data-href="https://www.dhakapost.com/international/165087">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165087">
                                                তালিবানের অভিযানে আইএসের ৮ যোদ্ধা নিহত
                                            </a>
                                            <time datetime="2023-01-05 18:22:45">০৫ জানুয়ারি ২০২৩, ০৬:২২ পিএম</time>
                                            <p class="d-none d-sm-block">আফগানিস্তানের ক্ষমতাসীন তালেবান কাবুলে সিরিজ হামলার ঘটনায় দেশটির সশস্ত্র আরেক গোষ্ঠী ইসলামিক স্টেটের (আইএস) ৮ যোদ্ধাকে হত্যা করেছে। এছাড়া অভিযানে আইএসে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165087">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/taliban-20230105182245.jpg?width=330&amp;height=186" alt="তালিবানের অভিযানে আইএসের ৮ যোদ্ধা নিহত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এসএসসি-এইচএসসির ভুয়া সার্টিফিকেটসহ গ্রেপ্তার ১" data-href="https://www.dhakapost.com/national/165086">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165086">
                                                এসএসসি-এইচএসসির ভুয়া সার্টিফিকেটসহ গ্রেপ্তার ১
                                            </a>
                                            <time datetime="2023-01-05 18:16:10">০৫ জানুয়ারি ২০২৩, ০৬:১৬ পিএম</time>
                                            <p class="d-none d-sm-block">জাল সনদ ও জাল সনদ তৈরির সরঞ্জামাদিসহ জালিয়াতি চক্রের এক সদস্যকে আটক করেছে র‌্যাপিড অ্যাকশন ব্যাটালিয়ন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165086">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230105181610.jpg?width=330&amp;height=186" alt="এসএসসি-এইচএসসির ভুয়া সার্টিফিকেটসহ গ্রেপ্তার ১" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="জাতীয় জীবনের গুরুত্বপূর্ণ সন্ধিক্ষণ আমরা অতিবাহিত করছি " data-href="https://www.dhakapost.com/national/165085">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165085">
                                                জাতীয় জীবনের গুরুত্বপূর্ণ সন্ধিক্ষণ আমরা অতিবাহিত করছি
                                            </a>
                                            <time datetime="2023-01-05 18:14:46">০৫ জানুয়ারি ২০২৩, ০৬:১৪ পিএম</time>
                                            <p class="d-none d-sm-block"></p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165085">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/1101-20230105225903.jpg?width=330&amp;height=186" alt="জাতীয় জীবনের গুরুত্বপূর্ণ সন্ধিক্ষণ আমরা অতিবাহিত করছি " class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="গাইবান্ধা-৫ আসনের উপনির্বাচনে ৩ প্রার্থীর জামানত বাজেয়াপ্ত" data-href="https://www.dhakapost.com/country/165084">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165084">
                                                গাইবান্ধা-৫ আসনের উপনির্বাচনে ৩ প্রার্থীর জামানত বাজেয়াপ্ত
                                            </a>
                                            <time datetime="2023-01-05 18:14:31">০৫ জানুয়ারি ২০২৩, ০৬:১৪ পিএম</time>
                                            <p class="d-none d-sm-block">গাইবান্ধা-৫ (সাঘাটা-ফুলছড়ি) আসনের উপনির্বাচনে তিন প্রার্থীর জামানত বাজেয়াপ্ত করা হয়েছে। বৈধ ভোটের আট ভাগের এক ভাগ অর্থাৎ ১৬ হাজার ২০১ দশমিক ৫০...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165084">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/gaibandha1-20230105181431.jpg?width=330&amp;height=186" alt="গাইবান্ধা-৫ আসনের উপনির্বাচনে ৩ প্রার্থীর জামানত বাজেয়াপ্ত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বাংলাদেশ অ্যাথলেটিক্সে কোটি টাকার স্পন্সর" data-href="https://www.dhakapost.com/sports/others/165083">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/others/165083">
                                                বাংলাদেশ অ্যাথলেটিক্সে কোটি টাকার স্পন্সর
                                            </a>
                                            <time datetime="2023-01-05 18:06:49">০৫ জানুয়ারি ২০২৩, ০৬:০৬ পিএম</time>
                                            <p class="d-none d-sm-block">অ্যাথলেটিক্স মাদার অফ অল ডিসিপ্লিন হিসেবে খ্যাত। সেই অ্যাথলেটিক্সে এক সময় বাংলাদেশের সোনালী অতীত ছিল।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/others/165083">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bangladesh-athletics-20230105180649.jpg?width=330&amp;height=186" alt="বাংলাদেশ অ্যাথলেটিক্সে কোটি টাকার স্পন্সর" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ফারদিন হত্যা মামলা : বুশরার জামিন আদেশ রোববার" data-href="https://www.dhakapost.com/law-courts/165082">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165082">
                                                ফারদিন হত্যা মামলা : বুশরার জামিন আদেশ রোববার
                                            </a>
                                            <time datetime="2023-01-05 18:04:26">০৫ জানুয়ারি ২০২৩, ০৬:০৪ পিএম</time>
                                            <p class="d-none d-sm-block">বাংলাদেশ প্রকৌশল বিশ্ববিদ্যালয়ের (বুয়েট) শিক্ষার্থী ফারদিন নূর পরশের (২৪) মৃত্যুর ঘটনায় দায়ের হওয়া মামলায় গ্রেপ্তার...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165082">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/fardin-20230105142905-20230105180426.jpg?width=330&amp;height=186" alt="ফারদিন হত্যা মামলা : বুশরার জামিন আদেশ রোববার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাবিতে টেকসই অর্থনৈতিক উন্নয়ন বিষয়ক কর্মশালা অনুষ্ঠিত" data-href="https://www.dhakapost.com/campus/165081">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/campus/165081">
                                                ঢাবিতে টেকসই অর্থনৈতিক উন্নয়ন বিষয়ক কর্মশালা অনুষ্ঠিত
                                            </a>
                                            <time datetime="2023-01-05 17:56:55">০৫ জানুয়ারি ২০২৩, ০৫:৫৬ পিএম</time>
                                            <p class="d-none d-sm-block">ঢাবিতে সেন্টিনিয়াল রিসার্চ গ্রান্টস প্রকল্পের আওতায় পরিচালিত একটি গবেষণার অংশ হিসেবে টেকসই অর্থনৈতিক উন্নয়ন বিষয়ক এক কর্মশালা অনুষ্ঠিত হয়েছে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/campus/165081">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/untitled-1-20230105175654.jpg?width=330&amp;height=186" alt="ঢাবিতে টেকসই অর্থনৈতিক উন্নয়ন বিষয়ক কর্মশালা অনুষ্ঠিত" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="প্রথমবারের মতো পালিত হতে যাচ্ছে টোটাল ফিটনেস ডে" data-href="https://www.dhakapost.com/health/165080">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/health/165080">
                                                প্রথমবারের মতো পালিত হতে যাচ্ছে টোটাল ফিটনেস ডে
                                            </a>
                                            <time datetime="2023-01-05 17:52:34">০৫ জানুয়ারি ২০২৩, ০৫:৫২ পিএম</time>
                                            <p class="d-none d-sm-block">শারীরিক, মানসিক, সামাজিক ও আত্মিক সব দিক থেকে ফিটনেস অর্জনের আহ্বান নিয়ে দেশব্যাপী প্রথমবারের মতো পালিত হতে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/health/165080">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jogging-20230105175234.jpg?width=330&amp;height=186" alt="প্রথমবারের মতো পালিত হতে যাচ্ছে টোটাল ফিটনেস ডে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বগুড়ার দুই আসনে হিরো আলমসহ ২০ প্রার্থীর মনোনয়নপত্র জমা" data-href="https://www.dhakapost.com/country/165079">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165079">
                                                বগুড়ার দুই আসনে হিরো আলমসহ ২০ প্রার্থীর মনোনয়নপত্র জমা
                                            </a>
                                            <time datetime="2023-01-05 17:51:24">০৫ জানুয়ারি ২০২৩, ০৫:৫১ পিএম</time>
                                            <p class="d-none d-sm-block">বিএনপি দলীয় সংসদ সদস্যদের পদত্যাগের কারণে শূন্য হওয়া বগুড়ার দুটি আসনে হিরো আলমসহ ২০ জন প্রার্থী মনোনয়নপত্র জমা দিয়েছেন...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165079">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bogura1-20230105175124.jpg?width=330&amp;height=186" alt="বগুড়ার দুই আসনে হিরো আলমসহ ২০ প্রার্থীর মনোনয়নপত্র জমা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সাংবাদিক আবু আজাদকে মারধর, জড়িতদের বিচার দাবি সিপিজের" data-href="https://www.dhakapost.com/mass-media/165078">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/mass-media/165078">
                                                সাংবাদিক আবু আজাদকে মারধর, জড়িতদের বিচার দাবি সিপিজের
                                            </a>
                                            <time datetime="2023-01-05 17:50:59">০৫ জানুয়ারি ২০২৩, ০৫:৫০ পিএম</time>
                                            <p class="d-none d-sm-block">চট্টগ্রামের রাঙ্গুনিয়ায় পেশাগত দায়িত্ব পালনের সময় সাংবাদিক আবু আজাদের ওপর হামলার ঘটনায় জড়িতদের বিচার দাবি করেছে কমিটি টু প্রোটেক্ট জার্নালিস্টস (সিপিজে)।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/mass-media/165078">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jour-20221225221816-20230105175058.jpg?width=330&amp;height=186" alt="সাংবাদিক আবু আজাদকে মারধর, জড়িতদের বিচার দাবি সিপিজের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শ্রোতাদের জন্য লিজার উপহার" data-href="https://www.dhakapost.com/entertainment/165077">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165077">
                                                শ্রোতাদের জন্য লিজার উপহার
                                            </a>
                                            <time datetime="2023-01-05 17:40:23">০৫ জানুয়ারি ২০২৩, ০৫:৪০ পিএম</time>
                                            <p class="d-none d-sm-block">দারুণ গায়কীর জন্য বরাবরই ভক্ত-সমালোচকদের প্রশংসায় ভাসেন গায়িকা সানিয়া সুলতানা লিজা। এবার নতুন বছরের শুরুতেই শ্রোতাদের নতুন গান উপহার দিলেন ‘পাগলী সুরাইয়া’...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165077">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/liza-cover-20230105174023.jpg?width=330&amp;height=186" alt="শ্রোতাদের জন্য লিজার উপহার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ইন্টারনেট সংযোগ দিতে গিয়ে বিদ্যুৎস্পৃষ্টে তরুণের মৃত্যু" data-href="https://www.dhakapost.com/national/165076">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165076">
                                                ইন্টারনেট সংযোগ দিতে গিয়ে বিদ্যুৎস্পৃষ্টে তরুণের মৃত্যু
                                            </a>
                                            <time datetime="2023-01-05 17:38:09">০৫ জানুয়ারি ২০২৩, ০৫:৩৮ পিএম</time>
                                            <p class="d-none d-sm-block">চট্টগ্রামে ইন্টারনেটের সংযোগের কাজ করার সময় বিদ্যুৎস্পৃষ্টে শিমুল (২০) নামে এক তরুণের মৃত্যু...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165076">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/chomek-20230105173809.jpg?width=330&amp;height=186" alt="ইন্টারনেট সংযোগ দিতে গিয়ে বিদ্যুৎস্পৃষ্টে তরুণের মৃত্যু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ওয়ালটন স্মার্টফোন কিনে লাখপতি হওয়ার সুযোগ" data-href="https://www.dhakapost.com/technology/165075">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/technology/165075">
                                                ওয়ালটন স্মার্টফোন কিনে লাখপতি হওয়ার সুযোগ
                                            </a>
                                            <time datetime="2023-01-05 17:31:57">০৫ জানুয়ারি ২০২৩, ০৫:৩১ পিএম</time>
                                            <p class="d-none d-sm-block">মোবাইল ক্রেতাদের জন্য ওয়ালটন নিয়ে এলো লাখপতি হওয়ার সুবর্ণ সুযোগ। এখন নির্দিষ্ট মডেলের ওয়ালটন স্মার্টফোন কিনেই পেতে পারেন সর্বোচ্চ ১ লাখ টাকা পর্যন্ত নিশ্চিত-</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/technology/165075">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/walton-20230105173156.jpg?width=330&amp;height=186" alt="ওয়ালটন স্মার্টফোন কিনে লাখপতি হওয়ার সুযোগ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="উইলিয়ামের মারধরের শিকার হয়েছিলেন, নতুন বইয়ে বললেন প্রিন্স হ্যারি" data-href="https://www.dhakapost.com/international/165074">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165074">
                                                উইলিয়ামের মারধরের শিকার হয়েছিলেন, নতুন বইয়ে বললেন প্রিন্স হ্যারি
                                            </a>
                                            <time datetime="2023-01-05 17:29:49">০৫ জানুয়ারি ২০২৩, ০৫:২৯ পিএম</time>
                                            <p class="d-none d-sm-block">ব্রিটেনের প্রিন্স হ্যারির আত্মজীবনীমূলক বই ‘স্পেয়ার’ আনুষ্ঠানিকভাবে প্রকাশের অপেক্ষায় রয়েছে। এই বইয়ে ব্রিটিশ রাজপরিবার ছেড়ে আসা প্রিন্স হ্যারি তার ভাই প্রি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165074">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/prince-harry-accuses-prince-william-of-physical-attack-20230105172949.jpg?width=330&amp;height=186" alt="উইলিয়ামের মারধরের শিকার হয়েছিলেন, নতুন বইয়ে বললেন প্রিন্স হ্যারি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সংসদে যাদের নামে শোক প্রস্তাব আনা হলো" data-href="https://www.dhakapost.com/national/165073">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165073">
                                                সংসদে যাদের নামে শোক প্রস্তাব আনা হলো
                                            </a>
                                            <time datetime="2023-01-05 17:23:51">০৫ জানুয়ারি ২০২৩, ০৫:২৩ পিএম</time>
                                            <p class="d-none d-sm-block">বছরের প্রথম ও শীতকালীন অধিবেশন শুরুর পর স্পিকার ড. শিরীন শারমিন চৌধুরী তাদের নামে শোক প্রস্তাব...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165073">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/sangsad-20230105172351.jpg?width=330&amp;height=186" alt="সংসদে যাদের নামে শোক প্রস্তাব আনা হলো" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এলসি ছাড়াই পণ্য আমদানির সুযোগ দেবে বাণিজ্য মন্ত্রণালয়" data-href="https://www.dhakapost.com/economy/165072">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165072">
                                                এলসি ছাড়াই পণ্য আমদানির সুযোগ দেবে বাণিজ্য মন্ত্রণালয়
                                            </a>
                                            <time datetime="2023-01-05 17:18:13">০৫ জানুয়ারি ২০২৩, ০৫:১৮ পিএম</time>
                                            <p class="d-none d-sm-block">আমদানি ঋণপত্র (এলসি) না খুলেই অত্যাবশ্যকীয় পণ্য আমদানির সুযোগ দিচ্ছে সরকার।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165072">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/816-20221116081352-20230105171813.jpg?width=330&amp;height=186" alt="এলসি ছাড়াই পণ্য আমদানির সুযোগ দেবে বাণিজ্য মন্ত্রণালয়" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="২২ জনের করোনা শনাক্ত, মৃত্যু নেই" data-href="https://www.dhakapost.com/national/165071">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165071">
                                                ২২ জনের করোনা শনাক্ত, মৃত্যু নেই
                                            </a>
                                            <time datetime="2023-01-05 17:15:42">০৫ জানুয়ারি ২০২৩, ০৫:১৫ পিএম</time>
                                            <p class="d-none d-sm-block">দেশে ২৪ ঘণ্টায় ২২ জনের দেহে করোনাভাইরাস শনাক্ত হয়েছে। মোট শনাক্ত রোগীর সংখ্যা দাঁড়িয়েছে ২০ লাখ ৩৭ হাজার ২৩০ জনে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165071">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/vc-with-nil-dol-202212251604251-20230105171542.jpg?width=330&amp;height=186" alt="২২ জনের করোনা শনাক্ত, মৃত্যু নেই" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ঢাবিতে শেখ কামাল-সুলতানা কামাল ট্রাস্ট ফান্ড গঠন" data-href="https://www.dhakapost.com/campus/165070">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/campus/165070">
                                                ঢাবিতে শেখ কামাল-সুলতানা কামাল ট্রাস্ট ফান্ড গঠন
                                            </a>
                                            <time datetime="2023-01-05 17:14:29">০৫ জানুয়ারি ২০২৩, ০৫:১৪ পিএম</time>
                                            <p class="d-none d-sm-block">ঢাকা বিশ্ববিদ্যালয়ে (ঢাবি) শেখ কামাল ও সুলতানা কামাল ট্রাস্ট ফান্ড গঠন করেছে বিশ্ববিদ্যালয়ের সামাজিক বিজ্ঞান...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/campus/165070">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/du-20230105171429.jpg?width=330&amp;height=186" alt="ঢাবিতে শেখ কামাল-সুলতানা কামাল ট্রাস্ট ফান্ড গঠন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="প্রতি মাসে ৩০ হাজারেরও বেশি অভিবাসী নেবে যুক্তরাষ্ট্র" data-href="https://www.dhakapost.com/international/165069">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/international/165069">
                                                প্রতি মাসে ৩০ হাজারেরও বেশি অভিবাসী নেবে যুক্তরাষ্ট্র
                                            </a>
                                            <time datetime="2023-01-05 17:14:22">০৫ জানুয়ারি ২০২৩, ০৫:১৪ পিএম</time>
                                            <p class="d-none d-sm-block">চলতি বছরের শুরু থেকে প্রতি মাসে কিউবা, নিকারাগুয়া, হাইতি ও ভেনেজুয়েলা থেকে ৩০ হাজারেরও বেশি অভিবাসীকে নেবে যুক্তরাষ্ট্র...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/international/165069">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/migrants-2-20230105171422.jpg?width=330&amp;height=186" alt="প্রতি মাসে ৩০ হাজারেরও বেশি অভিবাসী নেবে যুক্তরাষ্ট্র" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="বিপিএলের ট্রফি উন্মোচন, দেখা নেই সাকিবের" data-href="https://www.dhakapost.com/sports/cricket/165068">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/cricket/165068">
                                                বিপিএলের ট্রফি উন্মোচন, দেখা নেই সাকিবের
                                            </a>
                                            <time datetime="2023-01-05 17:10:13">০৫ জানুয়ারি ২০২৩, ০৫:১০ পিএম</time>
                                            <p class="d-none d-sm-block">শুক্রবার থেকে মাঠে গড়াচ্ছে বাংলাদেশ প্রিমিয়ার লিগ (বিপিএল) এবারের আসর। বিপিএল শুরুর একদিন আগে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/cricket/165068">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/bpl-lead-20230105171013.jpg?width=330&amp;height=186" alt="বিপিএলের ট্রফি উন্মোচন, দেখা নেই সাকিবের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পরিপূর্ণ পুঁজিবাজার গড়ে তুলবো: শিবলী" data-href="https://www.dhakapost.com/economy/stock-market/165067">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/stock-market/165067">
                                                পরিপূর্ণ পুঁজিবাজার গড়ে তুলবো: শিবলী
                                            </a>
                                            <time datetime="2023-01-05 17:02:42">০৫ জানুয়ারি ২০২৩, ০৫:০২ পিএম</time>
                                            <p class="d-none d-sm-block">দেশের পুঁজিবাজারকে একটি পরিপূর্ণ বাজার হিসেবে গড়ে তুলতে কাজ করছেন বলে জানিয়েছেন বাংলাদেশ সিকিউরিটিজ অ্যান্ড এক্সচেঞ্জ কমিশনের (বিএসইসি) চেয়ারম্যান অধ্যাপক শিবলী</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/stock-market/165067">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/shibliiiiiiiiiiiiiiiiiii-20230105170242.png?width=330&amp;height=186" alt="পরিপূর্ণ পুঁজিবাজার গড়ে তুলবো: শিবলী" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="তেলবা‌হী ট্রাকচাপায় প্রাণ গেল মা-মে‌য়ের" data-href="https://www.dhakapost.com/country/165066">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165066">
                                                তেলবা‌হী ট্রাকচাপায় প্রাণ গেল মা-মে‌য়ের
                                            </a>
                                            <time datetime="2023-01-05 17:02:31">০৫ জানুয়ারি ২০২৩, ০৫:০২ পিএম</time>
                                            <p class="d-none d-sm-block">টাঙ্গাইলের ভূঞাপু‌রে অটোভ‌্যা‌নের সঙ্গে তেলবাহী ট্রাকের মুখোমুখি সংঘর্ষে মা ও মে‌য়ে নিহত হয়েছেন। বৃহস্প‌তিবার (৫ জানুয়া‌রি) বি‌কে‌লে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165066">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/tangail1-20230105170231.jpg?width=330&amp;height=186" alt="তেলবা‌হী ট্রাকচাপায় প্রাণ গেল মা-মে‌য়ের" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="টিভিতে সরাসরি গাইবেন অদিতি মহসিন" data-href="https://www.dhakapost.com/entertainment/165065">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/165065">
                                                টিভিতে সরাসরি গাইবেন অদিতি মহসিন
                                            </a>
                                            <time datetime="2023-01-05 16:58:25">০৫ জানুয়ারি ২০২৩, ০৪:৫৮ পিএম</time>
                                            <p class="d-none d-sm-block">আগামীকাল (শুক্রবার) রাত ১১টা ৩০ মিনিটে মাছরাঙা টেলিভিশনে প্রচার হবে সাপ্তাহিক সরাসরি গানের অনুষ্ঠান ‘তোমায় গান শোনাবো’।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/165065">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/aditi-cover-20230105165825.jpg?width=330&amp;height=186" alt="টিভিতে সরাসরি গাইবেন অদিতি মহসিন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="এসপি নাইমার মামলায় জামিন পাননি বাবুল আক্তার" data-href="https://www.dhakapost.com/law-courts/165064">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/law-courts/165064">
                                                এসপি নাইমার মামলায় জামিন পাননি বাবুল আক্তার
                                            </a>
                                            <time datetime="2023-01-05 16:55:45">০৫ জানুয়ারি ২০২৩, ০৪:৫৫ পিএম</time>
                                            <p class="d-none d-sm-block">চট্টগ্রামের খুলশী থানায় ডিজিটাল নিরাপত্তা আইনে দায়ের হওয়া মামলায় সাবেক পুলিশ সুপার (এসপি) বাবুল আক্তারের জামিন আবেদন নামঞ্জুর করেছেন আদালত...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/law-courts/165064">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20230105165545.jpg?width=330&amp;height=186" alt="এসপি নাইমার মামলায় জামিন পাননি বাবুল আক্তার" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সংসদ অধিবেশন শুরু" data-href="https://www.dhakapost.com/national/165063">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165063">
                                                সংসদ অধিবেশন শুরু
                                            </a>
                                            <time datetime="2023-01-05 16:47:17">০৫ জানুয়ারি ২০২৩, ০৪:৪৭ পিএম</time>
                                            <p class="d-none d-sm-block">একাদশ জাতীয় সংসদের ২১তম অধিবেশন ও বছরের প্রথম অধিবেশন শুরু হয়েছে। স্পিকার ড. শিরীন শারমিন চৌধুরীর সভাপতিত্বে আজ বিকেল ৪টায় এ অধিবেশন শুরু হয়। অধিবেশনে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165063">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/455-20230105164958.jpg?width=330&amp;height=186" alt="সংসদ অধিবেশন শুরু" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সর্বনিম্ন তাপমাত্রায় কাঁপছে খুলনা বিভাগ" data-href="https://www.dhakapost.com/country/165062">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/country/165062">
                                                সর্বনিম্ন তাপমাত্রায় কাঁপছে খুলনা বিভাগ
                                            </a>
                                            <time datetime="2023-01-05 16:39:43">০৫ জানুয়ারি ২০২৩, ০৪:৩৯ পিএম</time>
                                            <p class="d-none d-sm-block">খুলনা বিভাগ দিয়ে মৃদু শৈত্যপ্রবাহ বয়ে যাচ্ছে। বিভাগের যশোর ও চুয়াডাঙ্গায় দেশের সর্বনিম্ন তাপমাত্রা বিরাজ করছে। গত দুদিন কিছু জায়গায় সূর্যের দেখা মেলেনি...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/country/165062">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/khulna1-20230105163943.jpg?width=330&amp;height=186" alt="সর্বনিম্ন তাপমাত্রায় কাঁপছে খুলনা বিভাগ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="শীতের প্রভাবে দর্শনার্থী কমেছে বাণিজ্য মেলায়" data-href="https://www.dhakapost.com/national/165061">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/national/165061">
                                                শীতের প্রভাবে দর্শনার্থী কমেছে বাণিজ্য মেলায়
                                            </a>
                                            <time datetime="2023-01-05 16:37:09">০৫ জানুয়ারি ২০২৩, ০৪:৩৭ পিএম</time>
                                            <p class="d-none d-sm-block">তীব্র শীতের কবলে সারা দেশ। রাজধানী ঢাকাও এর বাইরে নয়। হিমেল হাওয়ায় অনেকটাই নিচে নেমে গেছে ঢাকার তাপমাত্রা। এর প্রভাব পড়েছে বাণিজ্য মেলায়।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/national/165061">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/0-20230105163709.jpg?width=330&amp;height=186" alt="শীতের প্রভাবে দর্শনার্থী কমেছে বাণিজ্য মেলায়" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="দেশে এখন দাঁতহীন মানুষ দেখা যায় না : বিএসএমএমইউ ভিসি" data-href="https://www.dhakapost.com/health/165060">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/health/165060">
                                                দেশে এখন দাঁতহীন মানুষ দেখা যায় না : বিএসএমএমইউ ভিসি
                                            </a>
                                            <time datetime="2023-01-05 16:37:02">০৫ জানুয়ারি ২০২৩, ০৪:৩৭ পিএম</time>
                                            <p class="d-none d-sm-block">বাংলাদেশে দাঁতের সর্বাধুনিক চিকিৎসা রয়েছে বলে জানিয়েছেন বঙ্গবন্ধু শেখ মুজিব মেডিকেল...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/health/165060">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/tu-20230105163702.jpg?width=330&amp;height=186" alt="দেশে এখন দাঁতহীন মানুষ দেখা যায় না : বিএসএমএমইউ ভিসি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="উন্নয়নের গতিকে বাধাগ্রস্ত করতে চায় স্বাধীনতাবিরোধীরা" data-href="https://www.dhakapost.com/economy/165059">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/economy/165059">
                                                উন্নয়নের গতিকে বাধাগ্রস্ত করতে চায় স্বাধীনতাবিরোধীরা
                                            </a>
                                            <time datetime="2023-01-05 16:28:05">০৫ জানুয়ারি ২০২৩, ০৪:২৮ পিএম</time>
                                            <p class="d-none d-sm-block">বর্তমান সরকার উন্নয়নের যে গতিতে দেশকে এগিয়ে নিয়ে যাচ্ছে, স্বাধীনতাবিরোধীরা তা বাধাগ্রস্ত করতে চায় বলে মন্তব্য করেছেন শিল্পমন্ত্রী নূরুল মজিদ...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/economy/165059">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/tyty-20230105162805.jpg?width=330&amp;height=186" alt="উন্নয়নের গতিকে বাধাগ্রস্ত করতে চায় স্বাধীনতাবিরোধীরা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="w-100 text-center py-2">
                                        <a href="https://www.dhakapost.com/archive" rel="nofollow" class="btn bg-primary px-4 load-more text-white">আর্কাইভ
                                            দেখুন
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-selected">
                                <div class="article-box pt-3">
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="২৫ হাজার বেতনে অভিজ্ঞতা ছাড়াই এনজিওতে চাকরি, নেবে ২০০ জন" data-href="https://www.dhakapost.com/jobs-career/164317">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/164317">
                                                ২৫ হাজার বেতনে অভিজ্ঞতা ছাড়াই এনজিওতে চাকরি, নেবে ২০০ জন
                                            </a>
                                            <time datetime="2023-01-02 13:28:10">০২ জানুয়ারি ২০২৩, ০১:২৮ পিএম</time>
                                            <p class="d-none d-sm-block">ইকো সোশ্যাল ডেভেলপমেন্ট অর্গানাইজেশন (ইএসডিও) সম্প্রতি নিয়োগ বিজ্ঞপ্তি দিয়েছে। প্রতিষ্ঠানটি তাদের মাঠ পর্যায়ে লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন করতে পার</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/164317">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jobs-20230102132810.jpg?width=330&amp;height=186" alt="২৫ হাজার বেতনে অভিজ্ঞতা ছাড়াই এনজিওতে চাকরি, নেবে ২০০ জন" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="২৫ হাজার মাসিক বেতনে জেলা পর্যায়ে চাকরির সুযোগ" data-href="https://www.dhakapost.com/jobs-career/163867">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/163867">
                                                ২৫ হাজার মাসিক বেতনে জেলা পর্যায়ে চাকরির সুযোগ
                                            </a>
                                            <time datetime="2022-12-31 15:19:20">৩১ ডিসেম্বর ২০২২, ০৩:১৯ পিএম</time>
                                            <p class="d-none d-sm-block">পিপলস ওরিয়েন্টেড প্রোগ্রাম ইমপ্লিমেন্টেশন (পপি) সম্প্রতি নিয়োগ বিজ্ঞপ্তি দিয়েছে। প্রতিষ্ঠানটি মাঠ পর্যায়ে লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন করতে পারবেন।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/163867">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/jobsss-20221220130822-20221231151920.jpg?width=330&amp;height=186" alt="২৫ হাজার মাসিক বেতনে জেলা পর্যায়ে চাকরির সুযোগ" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="৩৪ হাজার বেতনে চাকরি, সঙ্গে সপ্তাহে ২ দিন ছুটি" data-href="https://www.dhakapost.com/jobs-career/164024">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/164024">
                                                ৩৪ হাজার বেতনে চাকরি, সঙ্গে সপ্তাহে ২ দিন ছুটি
                                            </a>
                                            <time datetime="2023-01-01 10:54:29">০১ জানুয়ারি ২০২৩, ১০:৫৪ এএম</time>
                                            <p class="d-none d-sm-block">রিফিউজি অ্যান্ড মাইগ্রেটরি মুভমেন্ট রিসোর্স ইউনিট সম্প্রতি নিয়োগ বিজ্ঞপ্তি দিয়েছে। প্রতিষ্ঠানটি তাদের চলমান প্রজেক্টে লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন .</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/164024">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/jobsss-20230101105428.jpg?width=330&amp;height=186" alt="৩৪ হাজার বেতনে চাকরি, সঙ্গে সপ্তাহে ২ দিন ছুটি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="মেসি ফেরার আগেই পিএসজি থেকে উধাও এমবাপে" data-href="https://www.dhakapost.com/sports/football/164539">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/sports/football/164539">
                                                মেসি ফেরার আগেই পিএসজি থেকে উধাও এমবাপে
                                            </a>
                                            <time datetime="2023-01-03 12:06:14">০৩ জানুয়ারি ২০২৩, ১২:০৬ পিএম</time>
                                            <p class="d-none d-sm-block">দিনদুয়েক আগে মৌসুমের প্রথম হারের কবলে পড়েছে পিএসজি। তার ঠিক পরেই কিলিয়ান এমবাপে...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/sports/football/164539">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/messi-mbappe-20230103120614.jpg?width=330&amp;height=186" alt="মেসি ফেরার আগেই পিএসজি থেকে উধাও এমবাপে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ব্র্যাকে পার্ট-টাইম চাকরির সুযোগ, আবেদন করুন আজই" data-href="https://www.dhakapost.com/jobs-career/164556">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/164556">
                                                ব্র্যাকে পার্ট-টাইম চাকরির সুযোগ, আবেদন করুন আজই
                                            </a>
                                            <time datetime="2023-01-03 13:09:25">০৩ জানুয়ারি ২০২৩, ০১:০৯ পিএম</time>
                                            <p class="d-none d-sm-block">ব্র্যাক সম্প্রতি নিয়োগ বিজ্ঞপ্তি দিয়েছে। প্রতিষ্ঠানটি তাদের হিউম্যান রিসোর্স ডিভিশনে পার্ট-টাইম লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন করতে পারবেন।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/164556">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/brac-20221207135048-20221231111046-20230103130925.jpg?width=330&amp;height=186" alt="ব্র্যাকে পার্ট-টাইম চাকরির সুযোগ, আবেদন করুন আজই" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ভুল বোঝাবুঝির অবসান ঘটিয়ে রাজের ঘরে পরীমণি!" data-href="https://www.dhakapost.com/entertainment/164919">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/164919">
                                                ভুল বোঝাবুঝির অবসান ঘটিয়ে রাজের ঘরে পরীমণি!
                                            </a>
                                            <time datetime="2023-01-05 00:34:09">০৫ জানুয়ারি ২০২৩, ১২:৩৪ এএম</time>
                                            <p class="d-none d-sm-block">স্বামী শরিফুল রাজের ঘরে ফিরে গেছেন আলোচিত অভিনেত্রী পরীমণি। বিষয়টি জানিয়েছেন আরেক অভিনেত্রী শিরিন শিলা...</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/164919">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/raj-pori-20230105003409.jpg?width=330&amp;height=186" alt="ভুল বোঝাবুঝির অবসান ঘটিয়ে রাজের ঘরে পরীমণি!" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="সম্পর্ক ছিন্ন করে রাজের বাসা থেকে বেরিয়ে এসেছি: পরীমণি" data-href="https://www.dhakapost.com/entertainment/dhallywood/163805">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/163805">
                                                সম্পর্ক ছিন্ন করে রাজের বাসা থেকে বেরিয়ে এসেছি: পরীমণি
                                            </a>
                                            <time datetime="2022-12-31 11:06:35">৩১ ডিসেম্বর ২০২২, ১১:০৬ এএম</time>
                                            <p class="d-none d-sm-block">ঢাকাই সিনেমার আলোচিত নায়িকা পরীমণি ও নায়ক শরিফুল রাজের সম্পর্কের সমাপ্তি ঘটতে যাচ্ছে। শুক্রবার রাতে ফেসবুকে এক পোস্টে পরীমণি নিজেই এই ইঙ্গিত দেন।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/163805">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/porimonijpg-brazil-20221214114711-20221231110635.jpg?width=330&amp;height=186" alt="সম্পর্ক ছিন্ন করে রাজের বাসা থেকে বেরিয়ে এসেছি: পরীমণি" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ক্ষুদ্রঋণ কার্যক্রমে ব্র্যাকে চাকরি, নিয়োগ হেড অফিসে" data-href="https://www.dhakapost.com/jobs-career/163807">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/163807">
                                                ক্ষুদ্রঋণ কার্যক্রমে ব্র্যাকে চাকরি, নিয়োগ হেড অফিসে
                                            </a>
                                            <time datetime="2022-12-31 11:10:46">৩১ ডিসেম্বর ২০২২, ১১:১০ এএম</time>
                                            <p class="d-none d-sm-block">ক্ষুদ্রঋণ কার্যক্রমে লোকবল নিচ্ছে ব্র্যাক। প্রতিষ্ঠানটি তাদের প্রধান অফিসে লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন করতে পারবেন। </p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/163807">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2022December/brac-20221207135048-20221231111046.jpg?width=330&amp;height=186" alt="ক্ষুদ্রঋণ কার্যক্রমে ব্র্যাকে চাকরি, নিয়োগ হেড অফিসে" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="ইউএস-বাংলা এয়ারলাইন্সে চাকরি, বছরে পাবেন একাধিক উৎসব ভাতা" data-href="https://www.dhakapost.com/jobs-career/164799">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/jobs-career/164799">
                                                ইউএস-বাংলা এয়ারলাইন্সে চাকরি, বছরে পাবেন একাধিক উৎসব ভাতা
                                            </a>
                                            <time datetime="2023-01-04 13:43:32">০৪ জানুয়ারি ২০২৩, ০১:৪৩ পিএম</time>
                                            <p class="d-none d-sm-block">ইউএস-বাংলা এয়ারলাইন্স সম্প্রতি নিয়োগ বিজ্ঞপ্তি দিয়েছে। প্রতিষ্ঠানটি তাদের রেভিনিউ ম্যানেজমেন্ট বিভাগে লোকবল নিয়োগ দেবে। আগ্রহীরা অনলাইনে আবেদন করতে পারবেন।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/jobs-career/164799">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/dhakapost-20220721171824-20230104134332.jpg?width=330&amp;height=186" alt="ইউএস-বাংলা এয়ারলাইন্সে চাকরি, বছরে পাবেন একাধিক উৎসব ভাতা" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="topic-content topic-border-bottom pb-3 mb-3" data-title="পরীমণির বিছানায় রক্তের কারণ জানা গেল" data-href="https://www.dhakapost.com/entertainment/dhallywood/164837">
                                        <div class="topic-content-text">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/164837">
                                                পরীমণির বিছানায় রক্তের কারণ জানা গেল
                                            </a>
                                            <time datetime="2023-01-04 16:23:47">০৪ জানুয়ারি ২০২৩, ০৪:২৩ পিএম</time>
                                            <p class="d-none d-sm-block">নায়িকা পরীমণি ও অভিনেতা শরিফুল রাজ এক বছরের সংসার জীবনের ইতি টেনে আলাদা হয়ে গেছেন। দুজনের মধ্যে বিভিন্ন বিষয়ে বনিবনা না হওয়াতেই এত দ্রুত অবনতি ঘটে সম্পর্কের।</p>
                                        </div>
                                        <div class="topic-content-img">
                                            <a href="https://www.dhakapost.com/entertainment/dhallywood/164837">
                                                <img src="assets/forAll/img/placeholder.png" data-src="https://assets.dhakapost.com/media/imgAll/BG/2023January/raz-pori-cover-2022-20230104162347.jpg?width=330&amp;height=186" alt="পরীমণির বিছানায় রক্তের কারণ জানা গেল" class="lazyload img-loader">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end fix-order-1 m-justify-content-center m-my-2">

                            <div id='div-gpt-ad-1620297441942-0' style='max-width: 100%; width: 300px; height: 250px;'>
                                <script type="f06bb2af6b94c87471f8f77a-text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display('div-gpt-ad-1620297441942-0');
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php';?>