
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

<!---Top Section Start-->
<?php 
if(empty($_POST["Division"] && empty($_POST["District"])  && empty($_POST["Upozila"]))){
        $Divis='NULL';
        $Dist='NULL';
        $Upo='NULL';
   
	#$query="Division = $Divis or District = $Dist or Upozila = $Upo" ;
}
if(isset($_POST["Division"]) && isset($_POST["District"]) && isset($_POST["Upozila"])){
    $Divis=$_POST["Division"];
    $Dist=$_POST["District"];
    $Upo=$_POST["Upozila"]; 
}
?>
<h6><?php echo $Upo; ?></h6>
<h6><?php echo $Dist; ?></h6>
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

                    <?php
                                            $informationtopnews = $pdo->query("select  * from  tbl_news where Division = $Divis or District = $Dist or Upozila = $Upo order by id DESC limit 0,1");
                                            
                                            while ($rowdatatopnews = $informationtopnews->fetch()) {
                                            $detail_data = strip_tags($rowdatatopnews["detail_bn"]);
                                            $text_string_length = strlen($detail_data);

                                            if ($text_string_length >= 3000) {
                                                $news_text_data = substr($detail_data, 0, strpos($detail_data, ' ', 2999));
                                            } else {
                                                $news_text_data = $detail_data;
                                            }
                                            ?>
                        <div class="topic-content topic-border-bottom pb-3 mb-3">
                            <div class="topic-content-text">
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>">
                                <?php echo $rowdatatopnews["title_bn"]; ?>
                                </a>
                                <time datetime="2023-01-05 18:36:54"><?php echo  BanglaConverter::en2bn(date("d F Y h:i ", strtotime($rowdatatop_news['publish_date'] . " " . $rowdatatop_news['publish_time']))); ?> </time>
                                <p class="d-none d-sm-block"><?php echo $rowdatatop_news["detail_bn"]; ?>...</p>
                            </div>
                            <div class="topic-content-img">
                                <a href="?menu=NewsDetail&menuName=<?php echo $rowdatatop_news['categoryid']; ?>&Detail=<?php echo $rowdatatop_news['id']; ?>">
                                    <img src="assets/forAll/img/placeholder.png"
                                        data-src="NewsImage/<?php echo $rowdatatopnews['image']; ?>?width=330&amp;height=186"
                                        alt="<?php echo $rowdatatopnews["title_bn"]; ?>" width="330" height="175"
                                        class="lazyload img-loader">
                                </a>
                            </div>
                            
                        </div>
                        <?php } ?>
                        
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
