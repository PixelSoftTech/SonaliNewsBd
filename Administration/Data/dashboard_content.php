<?php date_default_timezone_set("Asia/Dhaka");
$date_new=date('l, d F Y'); $currentDate =$date_new;
$engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
 $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);

 ?>
<section class="content-header">
      <h1>
      News Depend
        <small>Decision Support System</small>
          
      </h1>
      <ol class="breadcrumb">
     <span style="font-family:"Source Sans Pro","Helvetica Neue",Helvetica,Arial,sans-serif;"> <?php echo $date_new; ?>&nbsp;&nbsp;&nbsp;</span>
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo $menu; ?></li>
        
      </ol>
    </section>