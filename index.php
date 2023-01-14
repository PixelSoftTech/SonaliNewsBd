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
                  background: #136254;
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