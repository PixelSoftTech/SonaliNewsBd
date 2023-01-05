<?php
session_start();
$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'';
date_default_timezone_set("Asia/Dhaka");
$week=date("W");
$current_date=date('Y-m-d');
$current_time=date("Y-m-d h:i:sa");

$current_date_bd_format=date("d-m-Y");
$visaexpirtydate= date("Y-m-d", strtotime("+5 days"));
$last_sever_days= date("Y-m-d", strtotime("-7 days"));
$last_one_month= date("Y-m-d", strtotime("-30 days"));

$yourdate =date("Y-m-d h:iA");
$stamp = strtotime($yourdate); // get unix timestamp
$time_in_ms = $stamp;
$news_publish_time=number_format($time_in_ms, 0, '.', '');



/*$db   = 'magiclan_polash';
$user = 'magiclan_polash';
$pass = 'polash@#102030'; dawatulislam24_@#102030*/
$host = 'localhost';
$db   = 'dawatulislam24_polash';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
	 
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


// English Number to Bangla Converter Start
class BanglaConverter {
    public static $bnnumber = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০",'জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার',' বুধবার','বৃহস্পতিবার','শুক্রবার');
    public static $ennumber = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0",'January', 'February', 'March','April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    
    public static function bn2en($number) {
        return str_replace(self::$bnnumber, self::$ennumber, $number);
    }
    
    public static function en2bn($number) {
        return str_replace(self::$ennumber, self::$bnnumber, $number);
    }
}

include("class.banglaDate.php");
$bn = new BanglaDate(time());
$bangla_date=$bn->get_date();
$bangla_date_name=$bangla_date[0]." ".$bangla_date[1]." ".$bangla_date[2] ;
//print_r($bn->get_date());
//echo BanglaConverter::en2bn($publish_date);
// English Number to Bangla Converter End


if(!empty($_GET['menu'])){
	$page_title=$_GET['menu'];
	}else{
		$page_title="Home";
		}

if(!empty($_GET['menuName'])){
	$menuName=$_GET['menuName'];
	}

	
$page_title_data=$page_title.".doel.php";


if(isset($_POST["web_version_send"])){
$web_version=$_POST["web_version"];
$_SESSION['web_version']=$web_version;	
	}
	
if(!empty($_SESSION['web_version'])){
 	$web_header_session=$_SESSION['web_version'];
	}else{
	$web_header_session="bn";	
		}

if(isset($_GET["Detail"])){
	
$Detail_id=$_GET["Detail"];
	
$informationlastoneshare = $pdo->query("select  * from  news where id='$Detail_id'");
        $rowdatatop_newsshare = $informationlastoneshare->fetch();
	
	
	 $detail_datatopshare=strip_tags($rowdatatop_newsshare["detail_bn"]);
		$text_string_lengthshare=strlen($detail_datatopshare);
		
		if($text_string_lengthshare>=350){
		$news_text_datashare=substr($detail_datatopshare, 0, strpos($detail_datatopshare, ' ', 340) );		
			
		}else{
		$news_text_datashare= $detail_datatopshare;	
		}
	
	
}



 ?>
