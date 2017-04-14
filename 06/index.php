<?php
header('Content-Type: text/html; charset=utf-8'); //网页编码
$flag="myCTF{sdwegwsd1231333GGF}";
session_start();
if (isset ($_POST['pwd'])){
	if ($_POST['pwd'] == $_SESSION['pwd'])
		die('Flag:'.$flag);
	else{
		print '<p>猜测错误.</p>';
		$_SESSION['pwd']=time().time();
	}
}

?>
<html>
<head>
<title>猜密码</title>
</head>
<body>
<!-- 
session_start();
$_SESSION['pwd']=time();
if (isset ($_POST['password'])) {
	if ($_POST['pwd'] == $_SESSION['pwd'])
		die('Flag:'.$flag);
	else{
		print '<p>猜测错误.</p>';
		$_SESSION['pwd']=time().time();
	}
}
-->
<form action="index.php" method="post">
密码：<input type="text" name="pwd"/>
<input type="submit" value="猜密码"/>
</form>
</body>
</html>


