<?php
header ( 'Content-Type: text/html; charset=utf-8' ); // 网页编码
error_reporting ( 0 );
$flag = "myCTF{GWOEsdfefwE23242}";
//echo $_POST['num'];
if (isset ( $_POST ['num'] )) {
	if (@ereg ( "^[1-9]+$", $_POST['num'] ) === FALSE)
		echo '说好的数字呢？';
	else if (strpos ( $_POST['num'], '#testaasafd' ) !== FALSE)
		die ( 'Flag: ' . $flag );
	else
		echo '你的数字不太符合我的心意哦！';
}
?>
<html>
<head>
<title>猜密码</title>
</head>
<body style="text-align: center">
<center>
<img src="num.png"/>
	<form action="index.php" method="post">
		<input type="text" name="num" /> <input type="submit" value="提交" />
	</form>
</center>
	<!-- index.php.txt  -->
</body>
</html>