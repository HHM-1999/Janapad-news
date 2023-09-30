<?php
$sInitialBN="জনপথ খবর";
$sInitialEN="Jonopad News";
$sSiteName="Jonopad News";
$sSiteTitle="জনপথ খবর";
$sAuthor="Jonopad News";
$sDeveloper="eMythMakers.com";
$sEmail="news@dainikgaibandha.com";
$sMobile="+88-017549761";


//Local
$sSiteURL="http://localhost/jonopad-news/";
$sCurrURL="http://localhost/jonopad-news/".$_SERVER["REQUEST_URI"];

//Web
// $sSiteURL="https://www.ghorashalpourashava.gov.bd/";
// $sCurrURL="https://www.ghorashalpourashava.gov.bd".$_SERVER["REQUEST_URI"];


$dtTimeDifference=6*60*60;
$dtDate=gmdate("Y-m-d", time()+$dtTimeDifference);
$dtDate2=gmdate("d-m-Y", time()+$dtTimeDifference);
$dtDateTime=gmdate("l", time()+$dtTimeDifference)." &nbsp; ".gmdate("d F Y", time()+$dtTimeDifference);
$dtDateTimeF=gmdate("d F, Y H:i:s", time()+$dtTimeDifference);


//Local
// $sCSSBootStrap='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/bootstrap-5.0.1-dist/css/bootstrap.min.css">';
// $sCSSAnimate='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">';
// $sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/fontawesome-free-5.15.3-web/css/all.css">';
// $sCSSSlick='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/slick-1.8.1/slick/slick.min.css">';
// $sCSSSlickTheme='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/slick-1.8.1/slick/slick-theme.css">';

// $sJSjQuery='<script type="text/javascript" src="'.$sSiteURL.'common/jQuery-3.0.0/jquery.min.js"></script>';
// $sJSBootStrap='<script type="text/javascript" src="'.$sSiteURL.'common/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>';
// $sJSPopper='<script type="text/javascript" src="'.$sSiteURL.'common/js/popper.min.js"></script>';
// $sJSSlick='<script type="text/javascript" src="'.$sSiteURL.'common/slick-1.8.1/slick/slick.min.js"></script>';
// $sJSAnimate='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>';

// $sJShtml5shiv='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/html5shiv.min.js"></script>';
// $sJSrespond='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/respond.min.js"></script>';

//Web
$sCSSBootStrap='<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">';
$sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">';
$sCSSSlick='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">';
$sCSSSlickTheme='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">';

$sJSjQuery='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>';
$sJSPopper='<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>';
$sJSBootStrap='<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>';
$sJSSlick='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>';

$sJShtml5shiv='<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';

//Common
$sCSSEMM='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/css/eMythMakers.css?'.$dtDateTimeF.'">';
$sJSEMM='<script type="text/javascript" src="'.$sSiteURL.'common/js/eMythMakers.js"></script>';
$sCSSSolaimanLipi='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/css/SolaimanLipi.css">';


$sFbRoot='';
$sFbPage='';
$sBackUpTop='<div id="back_to_top" class="back_to_top on"><span class="go_up"><i style="" class="fa fa-arrow-up"></i></span></div>';

$sFbMeta='<meta name="facebook-domain-verification" content="">';
$sFbPixelHead="";
$sFbPixelBody="";
$sFBAppId="414872615285564";
$sFBPageId="";
$sAddSense='';
$sGAnalytics="";
$sGTagManagerHead="";
$sGTagManagerBody="";
$sDomainVerification='<meta name="p:domain_verify" content="">';
$sMSClarity='';

$sLogoURL=$sSiteURL."media/common/logo.png";
$sLogoURLFooter=$sSiteURL."media/common/logo.png";
$sLogoURLfb=$sSiteURL."media/common/logo-fb.png";
$sFavicon=$sSiteURL."media/common/favicon.ico";
$sThumb=$sSiteURL."media/common/thumb.jpg";
$sSign=$sSiteURL."media/common/Sign.png";


function fFormatString($s){
	global $connEMM;
	/*Ommits HTML Code from the texts*/
	if (function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
		$sStr=str_replace("'", "`", $sStr);
	} else {
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatStringHeading($s){
	global $connEMM;
	/*Passes HTML Code in the texts*/
	if (function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=htmlspecialchars($sStr);
		$sStr=str_replace("'", "&#39;", $sStr);
		$sStr=str_replace("'", "`", $sStr);
	} else {
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=htmlspecialchars($sStr);
		$sStr=str_replace("'", "&#39;", $sStr);
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatStringHTML($s){
	global $connEMM;
	/*Passes HTML Code in the texts*/
	if (function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=str_replace("'", "`", $sStr);
	} else {
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatURL($s){
	global $connEMM;
	/*Excludes HTML tags from a text*/
	$sStr=trim($s);
	$arrWords=array(":", "‘", "’", "/", "'", "`", "?", "“", '"', ",", "  ", "<", ">", "~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "[", "]", "{", "}", "+", "॥", "ঃ", "।", "&#39;", ".", "..", "...", "....", ";", "#", "lsquo", "rsquo");
	$sStr=str_replace($arrWords, "", $sStr);
	$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
	$sStr=html_entity_decode($sStr);
	$sStr=str_replace("   ", " ", $sStr);
	$sStr=str_replace("  ", " ", $sStr);
	$sStr=str_replace(" ", "-", $sStr);
	return $sStr;
}
function fFormatHead($s){
	global $connEMM;
	/*Excludes HTML tags from a text*/
	$arrWords=array("&ldquo;", "&rdquo;", "&acute;", "<br>", "<br />", "<p>", "</p>", "</font>", "<blink>", "</blink>", "<font size=5>", "<font size=+5>", "<font size=4>", "<font size=+4>", "<font size=3>", "<font size=+3>", "<font color=black size=2>", "<strong>", "</strong>", "\r", "\n", "\r\n", "&nbsp;", "&rsquo;", "&lsquo;", "<iframe src=", "http:/*www.youtube.com/embed/", "</iframe>", "frameborder=", "width=", "height=", "color: #ff0000;", "<ul>", "</ul>", "<li>", "</li>", "<a href=", "</a>", "<span style=", "</span>", "color: #888888;", "<em>", "</em>", '0', '429', '276', ">", '\">', '\"', "&#39;");
	$sStr=trim($s);
	$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
	$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
	$sStr=str_replace("'", "`", $sStr);
	$sStr=str_replace($arrWords, " ", $sStr);
	$sStr=html_entity_decode($sStr);
	return $sStr;
}
function fEn2Bn($BDDate){
	/*Convert a English date to Bangla date*/
	$en=array("AM", "PM", "am", "pm", "Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
	$bn=array("এএম", "পিএম", "এএম", "পিএম", "শনিবার", "রোববার", "সোমবার", "মঙ্গলবার", "বুধবার", "বৃহস্পতিবার", "শুক্রবার", "শনি", "রোব", "সোম", "মঙ্গল", "বুধ", "বৃহস্পতি", "শুক্র", "জানুয়ারি", "ফেব্রুয়ারি", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগস্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", "০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯");
	$BDDate=str_replace($en, $bn, $BDDate);
	return $BDDate;
}
function fGetWordsCount($sBrief, $iWordsNo){
	/*Get first 10 words from a lot of words*/
	$sBrief=implode(' ', array_slice(explode(' ', $sBrief), 0, $iWordsNo));
	return $sBrief;
}
function fGetCharCount($sBrief, $iCharNo){
	/*Get first 10 words from a lot of words*/
	$sBrief=substr($sBrief, 0, $iCharNo);
	return $sBrief;
}
?>