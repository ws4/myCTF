<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);
include 'flag.php';   
$b='ssAEDsssss';   
extract($_GET);     
if(isset($a)){        
    $c=trim(file_get_contents($b));
    if($a==$c){ 
       echo $myFlag;     
    }else{       
       echo'继续努力，相信flag离你不远了';
    }   
} 
?>
<html>
<head>
<title>对方不想和你说话，并向你扔了一段代码</title>
</head>
<body>
<center>
<img src="code.png"/>
</center>
</body>
</html>
