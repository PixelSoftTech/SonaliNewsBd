

<?php /*?><div class="row">

<?php
function generateRandomString($length = 6) {
    $characters = '0123456789abcde';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


 ?>

 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background-color: #<?php echo generateRandomString(); ?> !important;">
            <div class="inner">
            <h3>
			<?php
			$bookcount_information = $pdo->query("SELECT count(id) AS book_count_id  FROM `book_information` where deleted_at is NULL");
			$rowdatabookcount_info = $bookcount_information->fetch();
			 echo $rowdatabookcount_info["book_count_id"]; ?></h3>
              <h2>Total Book</h2>
      
   
             
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="?menu=Book Information&page_title=BookInformation" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background-color: #<?php echo generateRandomString(); ?> !important;">
            <div class="inner">
            <h3>
			<?php
			$publishercount_information = $pdo->query("SELECT count(id) AS publisher_count_id  FROM `publisher` where deleted_at is NULL");
			$rowdatapublishercount_info = $publishercount_information->fetch();
			 echo $rowdatapublishercount_info["publisher_count_id"]; ?></h3>
              <h2>Total Publisher</h2>
      
   
             
            </div>
            <div class="icon">
              <i class="fa fa-newspaper-o"></i>
            </div>
            <a href="?menu=Publisher&page_title=Publisher" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background-color: #<?php echo generateRandomString(); ?> !important;">
            <div class="inner">
            <h3>
			<?php
			$authorcount_information = $pdo->query("SELECT count(id) AS author_count_id  FROM `author` where deleted_at is NULL");
			$rowdataauthorcount_info = $authorcount_information->fetch();
			 echo $rowdataauthorcount_info["author_count_id"]; ?></h3>
              <h2>Total Author</h2>
      
   
             
            </div>
            <div class="icon">
              <i class="fa fa-plus-square"></i>
            </div>
            <a href="?menu=Author&page_title=Author" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua" style="background-color: #<?php echo generateRandomString(); ?> !important;">
            <div class="inner">
            <h3>
			<?php
			$downloadcount_information = $pdo->query("SELECT count(id) AS download_count_id  FROM `download_information` where deleted_at is NULL");
			$rowdatadownloadcount_info = $downloadcount_information->fetch();
			 echo $rowdatadownloadcount_info["download_count_id"]; ?></h3>
              <h2>Total Download</h2>
      
   
             
            </div>
            <div class="icon">
              <i class="fa fa-download"></i>
            </div>
            <a href="?menu=Download Information&page_title=DownloadInformation" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
        <!-- ./col -->
        
        <!-- ./col -->
        
        <!-- ./col -->
      </div><?php */?>
