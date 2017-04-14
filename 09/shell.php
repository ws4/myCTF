<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>WebShell</title>
</head>
<body style="background: #AAAAAA;">
	<br>
	<center>
		<form method="POST">
			<div
				style="width: 351px; height: 201px; margin-top: 100px; background: threedface; border-color: #FFFFFF #999999 #999999 #FFFFFF; border-style: solid; border-width: 1px;">
				<div
					style="width: 350px; height: 22px; padding-top: 2px; color: #FFFFFF; background: #293F5F; clear: both;">
					<b>WebShell</b>
				</div>
				<div
					style="width: 350px; height: 80px; margin-top: 50px; color: #000000; clear: both;">
					PASS:<input type="password" name="pass" style="width: 270px;">
				</div>
				<div style="width: 350px; height: 80px; clear: both;">
					<input type="submit" value="登录" style="width: 80px;">
				</div>
				<center>
					<span style="color: red;">
					<?php 
					  if(isset($_POST['pass'])&&$_POST['pass']!=null){
							if($_POST['pass']=="hack"){
								echo "Flag:myCTF{AEWWFWFWWS!@@DFDFs}";
							}else{
								echo "*不是自己的马不要乱骑！*";
							}
					  }
					?>
					</span>
				</center>
			</div>
		</form>
	</center>

</body>
</html>