<?php include 'header.php';?>

         <main role="main">
            <div data-nosnippet>
               <style>
                  .category-header .read-more {
                  background: none;
                  }
                  .sct-items.active {
                  background: #dfdfdf;
                  }
                  .et-items.active {
                  background: #dfdfdf;
                  }
                  .ect-items.active {
                  background: #dfdfdf;
                  }
               </style>
               <style>
                  .trending-tag {
                  display: flex;
                  }
                  .trending-tag span {
                  color: #124B65;
                  font-size: 14px;
                  line-height: 1.5;
                  font-weight: 700;
                  margin-right: 10px;
                  }
                  .trending-tag a {
                  color: #fff;
                  font-size: 15px;
                  line-height: 1.5;
                  margin: 0 7px;
                  padding: 3px 10px;
                  background: #1589bd;
                  }
                  /* Tablet desktop :768px. */
                  @media (min-width: 768px) and (max-width: 991px) {
                  .trending-tag {
                  overflow-x: auto;
                  white-space: nowrap;
                  }
                  }
                  /* small mobile :320px. */
                  @media (max-width: 767px) {
                  .trending-tag {
                  overflow-x: auto;
                  white-space: nowrap;
                  }
                  }
                  /* Large Mobile :480px. */
                  @media  only screen and (min-width: 480px) and (max-width: 767px) {
                  .container {
                  width: 450px
                  }
                  .trending-tag {
                  overflow-x: auto;
                  white-space: nowrap;
                  }
                  }
               </style>
               <div class="container">
                  <div class="trending-tag d-flex align-items-center mt-3">
                     <span>ট্রেন্ডিং : </span>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%AC%E0%A6%BF%E0%A6%8F%E0%A6%A8%E0%A6%AA%E0%A6%BF" target="_blank">বিএনপির সমাবেশ</a>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%AB%E0%A6%BF%E0%A6%AB%E0%A6%BE-%E0%A6%AC%E0%A6%BF%E0%A6%B6%E0%A7%8D%E0%A6%AC%E0%A6%95%E0%A6%BE%E0%A6%AA-%E0%A6%95%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A6%B0-%E0%A7%A8%E0%A7%A6%E0%A7%A8%E0%A7%A8" target="_blank">বিশ্বকাপ ফুটবল</a>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6-%E0%A6%AD%E0%A6%BE%E0%A6%B0%E0%A6%A4-%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A7%87%E0%A6%9F-%E0%A6%B8%E0%A6%BF%E0%A6%B0%E0%A6%BF%E0%A6%9C" target="_blank">বাংলাদেশ-ভারত ক্রিকেট সিরিজ</a>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%86%E0%A6%B0%E0%A7%8D%E0%A6%9C%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%A8%E0%A6%BE-%E0%A6%AB%E0%A7%81%E0%A6%9F%E0%A6%AC%E0%A6%B2-%E0%A6%A6%E0%A6%B2" target="_blank">আর্জেন্টিনা</a>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%AC%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%9C%E0%A6%BF%E0%A6%B2-%E0%A6%AB%E0%A7%81%E0%A6%9F%E0%A6%AC%E0%A6%B2-%E0%A6%A6%E0%A6%B2" target="_blank">ব্রাজিল</a>
                     <a href="https://www.dhakapost.com/topic/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0-%E0%A6%96%E0%A6%AC%E0%A6%B0" target="_blank">চাকরির-খবর</a>
                     <a href="https://www.dhakapost.com/namaz-sehri-iftar-time" target="_blank">নামাজের সময়সূচি</a>
                  </div>
               </div>
               <style>
                  .sports-section-contents .news-item img {
                  height: 75px;
                  }
               </style>
              	<?php
	
   $file_check=file_exists("$page_title_data");
      if($file_check==1){
       include("$page_title_data");
      }else{
         include("Error.php");
         }
   
   ?>
            </div>
         </main>


<?php include 'footer.php';?>