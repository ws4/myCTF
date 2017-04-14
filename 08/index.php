<?php
header ( 'Content-Type: text/html; charset=utf-8' ); // 网页编码
error_reporting ( 0 );
session_start();
$n=time()-$_SESSION['time'];
if($n>3){
	$_SESSION['n1']=rand(1, 1000);
	$_SESSION['n2']=rand(1, 1000000);
	$_SESSION['n3']=rand(1, 1000);
	$_SESSION['n4']=rand(1, 10000);
	$_SESSION['n5']=rand(1, 10000);
	$_SESSION['result']=$_SESSION['n1']*$_SESSION['n2']+$_SESSION['n3']*($_SESSION['n4']+$_SESSION['n5']);
	$_SESSION['time']=time();
}

//echo $_SESSION['result'];
//echo "<br/>";
if(isset($_POST['result'])&&$_POST['result']!=null){
	if($_POST['result']==$_SESSION['result']){
		die("<p>Flag:myCTF{wewWEWFEWFs123sdfWE}</p>");
	}else{
		echo "<p><span style='color:red;'>计算错误</span></p>";
	}
}


?>
<html>
<head>
<title></title>
</head>
<body>
<p>
请在三秒之内计算出以下式子，计算正确就的到flag哦！<br/>
<?php 
echo $_SESSION['n1']."*".$_SESSION['n2']."+".$_SESSION['n3']."*"."(".$_SESSION['n4']."+".$_SESSION['n5'].")";
?>
</p>
<form action="" method="post">
计算结果:<input type="text" name="result"/>
<input type="submit" value="提交"/>
</form>
</body>
</html>