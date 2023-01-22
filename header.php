<?php
include('DBhandelar.php');

?>
<!DOCTYPE html>
<html lang="bn">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>News Depend : Bangla News Portal</title>
   <meta property="fb:app_id" content="3102640556528237" />
   <meta property="fb:pages" content="100523345143327" />
   <meta name="theme-color" content="#124B65">

   <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
   <link rel="dns-prefetch" href="//connect.facebook.net">
   <link rel="dns-prefetch" href="//adservice.google.com">
   <link rel="dns-prefetch" href="https://www.newsdepend.com">

   <meta name="mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="apple-mobile-web-app-status-bar-style" content="#124B65">
   <meta name="apple-mobile-web-app-title" content="News Depend">
   <link rel="icon" type="image/png" href="assets/img/ND.png">

   <meta name="description" content="News Depend is a newly started online Bangla news portal to provide latest stories in several sections including Bangladesh, International, Sports, Entertainment, Features, Opinion, Tech & more.">
   <meta property="og:type" content="website" />
   <meta property="og:url" content="https://www.newsdepend.com" />
   <meta property="og:title" content="News Depend: Bangla News Portal" />
   <meta property="og:image" content="assets/img/nd_og_img.jpg" />
   <meta property="og:description" content="News Depend is a newly started online Bangla news portal to provide latest stories in several sections including Bangladesh, International, Sports, Entertainment, Features, Opinion, Tech & more.">
   <!-- <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@DPostOnline"> -->
   <meta name="twitter:title" content="News Depend: Bangla News Portal">
   <meta name="twitter:description" content="News Depend is a newly started online Bangla news portal to provide latest stories in several sections including Bangladesh, International, Sports, Entertainment, Features, Opinion, Tech & more.">
   <meta name="twitter:image" content="https://cdn.dhakapost.com/media/common/dhakapost-og-image.jpg">
   <!-- <meta content="300" http-equiv="refresh"> -->
   <!-- <meta name="robots" content="index,follow"> -->
   <link rel="canonical" href="https://www.newsdepend.com">
   <meta name="keywords" content="Bangaldesh News, Bangla News, Bangla News Online, Online Bangla News, News Depend, ND, Bangladeshi News, Bangladeshi News Online, Bengali News, Bengali Online News, Dhaka Bangladesh News, Breaking News, World News, BD News">

   <!-- <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "Organization",
         "url": "https://www.dhakapost.com/",
         "logo": "https://cdn.dhakapost.com/media/common/dhaka-post-logo.svg",
         "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+8809613678678, +8801313767742",
            "email": "info@dhakapost.com",
            "contactType": "customer service"
         }],
         "sameAs": [
            "https://www.facebook.com/DPostOnline",
            "https://twitter.com/dpostonline",
            "https://www.youtube.com/c/DhakaPostOfficial"
         ]
      }
   </script>
   <script type="application/ld+json">
      {
         "@context": "https://schema.org",
         "@type": "WebSite",
         "url": "https://www.dhakapost.com/",
         "description": "Dhaka Post is a newly started online Bangla news portal to provide latest stories in several sections including Bangladesh, International, Sports, Entertainment, Features, Opinion, Tech & more.",
         "publisher": "Dhaka Post: Bangla News Portal",
         "creator": [],
         "keywords": ["Bangaldesh News", "Bangla News", "Bangla News Online", "Online Bangla News", "Bangladeshi News", "Bangladeshi News Online", "Bengali News", "Bengali Online News", "Dhaka Bangladesh News", "Breaking News", "World News", "BD News"],
         "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.dhakapost.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
         }
      }
   </script> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/custom.css">
   <style>
      body,
      .advertisement {
         background: #f9f9f9;
      }

      nav,
      .navbar,
      .sticky-top {
         z-index: 9999 !important;
      }

      .genecy-floater-ad {
         z-index: 2147483647 !important;
      }

      /* @media  screen and (max-width: 1299px) and (min-width: 1200px) {
         .container {
         max-width: 100%;
         }
         } */
   </style>
</head>

<body>
   <noscript>
      <!-- <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PMJ5N5H" height="0" width="0" style="display:none;visibility:hidden"></iframe> -->
   </noscript>
   <div class="body-items" style="background: #f9f9f9">
      <div class="container d-none d-lg-flex py-2 navbar-root" id="section-down">
         <div class="d-flex justify-content-between align-items-center w-100">
            <a class="brand-logo-top" title="News Depend" href="/">
               <img style="max-width: 150px;" src="assets/img/NDepend.png" alt="News Depend" />
            </a>
            <p class="d-flex align-items-center">
               <span class="d-flex align-items-center mr-3">
                  <svg class="mr-2" fill="black" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                     <path d="M0 0h24v24H0z" fill="none" />
                     <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                  </svg>
                  <span>ঢাকা</span>
               </span>
               <span class="d-flex align-items-center">
                  <svg class="mr-2" fill="black" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                     <path d="M0 0h24v24H0z" fill="none" />
                     <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
                  </svg>

                  <span><?php
                        $date = date('D Y-m-d H:i:s');

                        echo  BanglaConverter::en2bn((date("D d F Y h:i", strtotime($date)))); ?> মিনিট</span>
               </span>
            </p>
            <div class="d-flex align-items-center social-media-icons">
               <a href="https://www.facebook.com/" aria-label="Facebook" target="_blank" class="pl-2" rel="nofollow noopener">
                  <div class="social-icon facebook"><i class="fa fa-facebook"></i></div>
               </a>
               <a href="https://www.youtube.com/c/" aria-label="Youtube" target="_blank" class="pl-2" rel="nofollow noopener">
                  <div class="social-icon youtube"><i class="fa fa-youtube-play"></i></div>
               </a>
               <a href="https://twitter.com/" aria-label="Twitter" target="_blank" class="pl-2" rel="nofollow noopener">
                  <div class="social-icon twitter"><i class="fa fa-twitter"></i></div>
               </a>
               <a href="https://www.instagram.com/" aria-label="Instagram" target="_blank" class="pl-2" rel="nofollow noopener">
                  <div class="social-icon instagram"><i class="fa fa-instagram"></i></div>
               </a>
               <!-- <a href="https://www.linkedin.com/company/dpostonline/" aria-label="Linkedin" target="_blank" class="pl-2" rel="nofollow noopener">
                     <div class="social-icon linkedin"><i class="fa fa-linkedin"></i></div>
                  </a>
                  <a href="https://play.google.com/store/apps/details?id=com.dhakapost" aria-label="google play" target="_blank" class="pl-2" rel="nofollow noopener">
                     <div class="social-icon googleplay" style="background: #00698e;">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" class="svg-inline--fa fa-google-play fa-w-16" role="img" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                           <path fill="white" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path>
                        </svg>
                     </div>
                  </a>
                  <a href="https://pod.link/1562553969" aria-label="Dhaka Post Podcast" target="_blank" class="pl-2" rel="nofollow noopener">
                     <div class="social-icon" style="background: #695296;"><i class="fa fa-podcast"></i></div>
                  </a> -->
            </div>
         </div>
      </div>
      <nav class="navbar navbar-expand-lg sticky-top shadow-sm navigator-extra">
         <div class="container">
            <button class="navbar-toggler collapsed m-margin-reducer-left-14" type="button" data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1" aria-expanded="false" aria-label="Toggle navigation">
               <span class="icon-bar top-bar"></span>
               <span class="icon-bar middle-bar"></span>
               <span class="icon-bar bottom-bar"></span>
               <span class="sr-only">ND</span>
            </button>
            <div class="navbar-brand align-items-center d-flex d-lg-none mr-0">
               <a title="News Depend" href="/">
                  <img src="assets/img/NDepend.png" alt="News Depend" width="1345" height="192" />
               </a>
            </div>
            <button type="button" class="btn btn-link d-flex d-lg-none" data-target="slide-down-m" aria-label="Search" style="margin-right: -14px;">
               <i class="fa fa-search" style="font-size: 20px;"></i>
            </button>
            <div class="navbar-collapse collapse" id="main-nav-1">
               <div style="width: 99%">
               <!-- Large Screen Menu Start  -->
                  <ul class="navbar-nav m-auto d-none d-lg-flex d-menu-items justify-content-center">
                     <li class="nav-item">
                        <a title="" href="index.php" class="nav-link">প্রচ্ছদ</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Latest" class="nav-link">সর্বশেষ</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=জাতীয়" class="nav-link">জাতীয়</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=রাজনীতি" class="nav-link">রাজনীতি</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=অর্থনীতি" class="nav-link">অর্থনীতি</a>
                     </li>
                     <li class="nav-item dropdown dropdown-toggle" style="display: flex; color: #FFF; align-items: center;">
                        <a title="" href="?menu=HoleCountry" class="nav-link">সারাদেশ</a>
                        <div class="dropdown-menu single-dropdown s-dr-menu m-0" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="?menu=DistNews" style="padding: 5px 0;">জেলার খবর</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=আন্তর্জাতিক" class="nav-link">আন্তর্জাতিক</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=খেলা" class="nav-link">খেলা</a>
                     </li>
                     <li class="nav-item">
                        <a title="" href="?menu=Category&menuName=বিনোদন" class="nav-link">বিনোদন</a>
                     </li>
                     <li class="nav-item ">
                        <a title="" href="?menu=Category&menuName=স্বাস্থ্য" class="nav-link">স্বাস্থ্য</a>
                     </li>
                     <li class="nav-item dropdown dropdown-toggle" style="display: flex; color: #FFF; align-items: center;">
                        <a title="" href="#" class="nav-link">ফিচার</a>
                        <div class="dropdown-menu single-dropdown s-dr-menu m-0" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="?menu=Category&menuName=লাইফস্টাইল" style="padding: 5px 0;">লাইফস্টাইল</a>
                           <a class="dropdown-item" href="?menu=Category&menuName=তথ্যপ্রযুক্তি" style="padding: 5px 0;">তথ্যপ্রযুক্তি</a>
                           <a class="dropdown-item" href="?menu=Category&menuName=ভ্রমন" style="padding: 5px 0;">ভ্রমন</a>
                           <a class="dropdown-item" href="?menu=Category&menuName=সাহিত্য ও সংস্কৃতি" style="padding: 5px 0;">সাহিত্য ও সংস্কৃতি</a>
                        </div>
                     </li>
                     <li class="nav-item hidden-item-lowerend">
                        <a title="" href="?menu=Category&menuName=শিক্ষা" class="nav-link">শিক্ষা</a>
                     </li>
                     <li class="nav-item hidden-item-lowerend">
                        <a title="" href="?menu=Category&menuName=চাকরি" class="nav-link">চাকরি</a>
                     </li>
                     <li class="nav-item position-static d-flex">
                        <button class="navbar-toggler collapsed nav-link d-flex align-items-center" aria-expanded="false" type="button" data-toggle="collapse" data-target="#nav-items-2">
                           <div class="button-bars">
                              <span class="icon-bar top-bar"></span>
                              <span class="icon-bar middle-bar"></span>
                              <span class="icon-bar bottom-bar"></span>
                           </div>
                           <span class="button-label">অন্যান্য</span>
                        </button>
                        <div class="dropdown-menu w-100 top-auto shadow border-0 rounded-0 nav-collapse collapse m-0" id="nav-items-2">
                           <div class="container">
                              <div class="row w-100 menu-items-others">
                                 <div class="col-sm-1">
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=প্রবাস">প্রবাস</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=মতামত">মতামত</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=ধর্ম">ধর্ম</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=ছোটদের পোস্ট">ছোটদের পোস্ট</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=আইন-আদালত">আইন-আদালত</a>
                                 </div>
                                 <div class="col-sm-1">
                                 </div>

                                 <div class="col-sm-1">
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=আবহাওয়া">আবহাওয়া</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=ক্যাম্পাস">ক্যাম্পাস</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Latest">এক্সক্লুসিভ</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=গণমাধ্যম">গণমাধ্যম</a>
                                 </div>
                                 <div class="col-sm-2">
                                    <a href="?menu=Category&menuName=কৃষি ও প্রকৃতি">কৃষি ও প্রকৃতি</a>
                                 </div>
                                 <div class="col-sm-1">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="nav-item position-static d-flex">
                        <button id="myBtn" type="button" class="btn btn-link" data-target="slide-down" aria-label="Search"><i class="fa fa-search" id="searchmenubacground"></i>
                        </button>
                     </li>
                  </ul>
               <!-- Large Screen Menu End  -->
               </div>
               <div class="d-flex d-lg-none" style="position: fixed; padding: 1rem; background: #f5f5f5; width: 100%; color: #FFF; justify-content:space-between">
                  <button class="navbar-toggler m-margin-reducer-left-14 text-white" type="button" data-toggle="collapse" data-target="#main-nav-1" aria-controls="main-nav-1" aria-expanded="true" aria-label="Toggle navigation">
                     <span class="icon-bar top-bar"></span>
                     <span class="icon-bar middle-bar"></span>
                     <span class="icon-bar bottom-bar"></span>
                     <span class="sr-only">DP</span>
                  </button>
               </div>
               <!-- This is Mobile Menu Section Start -->
               <ul class="navbar-nav d-flex d-lg-none mobile-menu" style="justify-content: space-between;flex-flow: wrap;padding: 3.8rem 0;">
                  <li class="nav-item">
                     <a title="" href="index.php" class="nav-link">প্রচ্ছদ</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Latest" class="nav-link">সর্বশেষ</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=জাতীয়" class="nav-link">জাতীয়</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=রাজনীতি" class="nav-link">রাজনীতি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=অর্থনীতি" class="nav-link">অর্থনীতি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=HoleCountry" class="nav-link">সারাদেশ</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=আন্তর্জাতিক" class="nav-link">আন্তর্জাতিক</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=খেলা" class="nav-link">খেলা</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=বিনোদন" class="nav-link">বিনোদন</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=স্বাস্থ্য" class="nav-link">স্বাস্থ্য</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=শিক্ষা" class="nav-link">শিক্ষা</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=DistNews" class="nav-link">জেলার খবর</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=লাইফস্টাইল" class="nav-link">লাইফস্টাইল</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=গণমাধ্যম" class="nav-link">গণমাধ্যম</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=আইন-আদালত" class="nav-link">আইন-আদালত</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=কৃষি ও প্রকৃতি" class="nav-link">কৃষি ও প্রকৃতি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=তথ্যপ্রযুক্তি" class="nav-link">তথ্যপ্রযুক্তি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=আবহাওয়া" class="nav-link">আবহাওয়া</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=ভ্রমন" class="nav-link">ভ্রমন</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=ধর্ম" class="nav-link">ধর্ম</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=চাকরি" class="nav-link">চাকরি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=মতামত" class="nav-link">মতামত</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Latest" class="nav-link">এক্সক্লুসিভ</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=প্রবাস" class="nav-link">প্রবাস</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=ছোটদের পোস্ট" class="nav-link">ছোটদের পোস্ট</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=সাহিত্য ও সংস্কৃতি" class="nav-link">সাহিত্য ও সংস্কৃতি</a>
                  </li>
                  <li class="nav-item">
                     <a title="" href="?menu=Category&menuName=ক্যাম্পাস" class="nav-link">ক্যাম্পাস</a>
                  </li>
               </ul>
               <!-- This is Mobile Menu Section End  -->
            </div>
         </div>
         <!-- <form class="search-wrapper needs-validation" style="display: none;" method="post" action="?menu=NewsSearch&menuName=সংবাদ" accept-charset="UTF-8"  enctype="multipart/form-data">
               <div class="container m-pl-0 m-pr-0">
                  <div class="d-flex align-items-center justify-content-between w-100">
                     <div class="input-group">
                        <input type="text" name="searchdata" id="searchdata" class="form-control" autocomplete="off" placeholder="অনুসন্ধান করুন" required />
                        <div class="input-group-append search-action">
                           <button name="Search" id="Search" type="submit" class="btn btn-dark"><i style="color: white !important;" class="fa fa-search"></i></button>
                           <button type="button" class="btn btn-light m-margin-reducer-right-14" data-target="slide-up">
                           <i class="fa fa-times"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </form> -->
      </nav>
      
      <div id="myModal" class="modal">
         <!-- Modal content -->
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLongTitle">অনুসন্ধান</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span style="color:#000;" aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">

               <form method="POST" action="?menu=NewsSearch&menuName=সংবাদ" accept-charset="UTF-8" class="form" enctype="multipart/form-data">
                  <div class="row">
                     <div class=" col-md-2 " style="margin-bottom:10px;"></div>
                     <div class="SrcInBox col-md-6 " style="margin-bottom:10px;">
                        <input class="form-control" placeholder="এখানে লিখুন..." name="searchdata" id="searchdata" type="text" required="required">
                     </div>
                     <div class="HomeSrcBtn col-md-2 " style="margin-bottom:10px;">
                        <input class="form-control btn btn-success" name="Search" id="Search" type="submit" value="অনুসন্ধান">
                     </div>
                  </div>
               </form>

            </div>
            <div class="modal-footer">

            </div>
         </div>
      </div>