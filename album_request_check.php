<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<?php
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
if($_SERVER['REQUEST_METHOD']=='POST'){
$errors=array();
$username=trim($_POST['username']);
$albumname=trim($_POST['albumname']);
}
//echo $username;
//$q_ueser_limit="select limit from users where name = '$username'";
//$r_limit=@mysql_query($q_ueser_limit);
//$num=mysql_fetch_array($r_limit);
//$limit=$num['limit'];
$album_type=$_COOKIE["albumtype"];
$q="insert into photonum values ('0','0','$albumname','$album_type','0')";
$r=@mysql_query($q);
echo "<script type='text/javascript'>";  
echo "window.alert('申请成功');";   
echo "</script>";
echo "<script type='text/javascript'>";  
echo "location.replace('index.php');";   
echo "</script>";



?>
</head>

<body>
</body>
</html>