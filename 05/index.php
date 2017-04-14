<?php
header("Content-type:text/html;charset=utf-8");
$php_Self = substr($_SERVER['PHP_SELF'],strripos($_SERVER['PHP_SELF'],"/")+1);//获取当前执行脚本名

if(isset($_GET['file'])&&($_GET['file']!=null)&&($_GET['file']!=$php_Self)){
	$dirName = str_replace("\\", "/", dirname(__FILE__));
	$file_name = $_GET['file'];     //下载文件名
	$file_dir = $dirName."/";        //下载文件存放目录
	//检查文件是否存在
	if (!file_exists ( $file_dir . $file_name )) {
		echo "文件找不到";
		exit ();
	} else {
		//打开文件
		$file = fopen ( $file_dir . $file_name, "r" );
		//输入文件标签
		Header ( "Content-type: application/octet-stream" );
		Header ( "Accept-Ranges: bytes" );
		Header ( "Accept-Length: " . filesize ( $file_dir . $file_name ) );
		Header ( "Content-Disposition: attachment; filename=" . $file_name );
		//输出文件内容
		//读取文件内容并直接输出到浏览器
		echo fread ( $file, filesize ( $file_dir.$file_name ) );
		fclose ( $file );
		exit ();
	}
}
?>

<html>
<head>
<title>下载下载</title>
</head>
<body>
<a href="?file=flag.txt">下载flag文件</a>
<!-- 
<a href="flag.php">flag</a>
-->
</body>
</html>