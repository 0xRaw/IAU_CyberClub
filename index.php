<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ByPassMe</title>
</head>
<body>
<?php 
if ($_SERVER['HTTP_USER_AGENT']!="Sup3rS3cr3tUserAgent"){
echo "Sorry, it seems that your user agent is not correct , in order to access this website.";
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
}
?>
<!-- Sup3rS3cr3tUserAgent -->


<?php 
if ($_SERVER['HTTP_USER_AGENT']==="Sup3rS3cr3tUserAgent" && $_SERVER['HTTP_REFERER']!="s3cr3tsite.com") {
	echo "So, Your Trying to hackme after all :) ";
	echo "<br>";
	echo "But Don't worry i have an extra layer of protection i only accept who is comes from my s3cr3tsite.com (no need for http:// or https://)";
	echo "<br>";
	echo "Hint : This Might be helpful i don't know : https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referer";
} 

if ($_SERVER['HTTP_USER_AGENT']==="Sup3rS3cr3tUserAgent" && $_SERVER['HTTP_REFERER']==="s3cr3tsite.com"){
	echo "<br>";
	echo "Here is your flag CSCFlag{1ts_N0T_S3CR3T_Aft3r_ALL!}";
    echo "<br>";
    echo "By : @0xRaw";
    echo "<br>";
    echo "https://twitter.com/0xRaw";
}
?>
</body>
</html>


