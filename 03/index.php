<?php 
// 定义一个函数getIP()
function getIP(){
	global $ip;
	if (getenv("HTTP_CLIENT_IP"))
		$ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
		$ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
		$ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
	return $ip;
}
header('Content-Type: text/html; charset=utf-8'); //网页编码
if(getIP()=='127.0.0.1'){
	echo "myCTF{sgwxsSesSD232se14sdSVSsx}";
}else{
	echo "只有本地管理员才能访问本页面！";
}

?>