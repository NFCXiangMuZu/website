<?php
//连接数据库
/*$link=@mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_POST,SAE_MYSQL_USER,SAE_MYSQL_PASS,SAE_MYSQL_DB)
OR die('could not connect to Mysql'.mysqli_connect_error());
*/
$sign=0;
include "mysql-connect.php";
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db("website",$con);
//echo "连接数据库成功";
//查询数据库
//$q="insert into users (id,name,age) values ('4','joon','0000')";
if($_SERVER['REQUEST_METHOD']=='POST'){
$errors=array();
$name=trim($_POST['username']);
$password=trim($_POST['password']);

}
//$q="select * from users";
// $q="insert into user (uid,uname,upassword) values ('0','$name','$password')";
//$q="insert into users (id,name,password) values ('0','$name','$password')";
//$r=@mysql_query($q);
$sql = "select name,password from users where name = '$_POST[username]' and password = '$_POST[password]'";  
$result = mysql_query($sql);
$num = mysql_num_rows($result);
//header("location:='index.php'");
//if($r)
//{
   //echo "查询成功";
   
   if($num){
	   setcookie("user",$name,time()+600);
	   echo "<script type='text/javascript'>";  
       echo "window.alert('登录成功');";   
       echo "</script>";
	   echo "<script type='text/javascript'>";  
       echo "location.replace('index.php');";   
       echo "</script>";
   }
   else{
	   echo "<script type='text/javascript'>";  
       echo "window.alert('登录失败');";   
       echo "</script>";
       echo "<script type='text/javascript'>";  
       echo "location.replace('login_2.php');";   
       echo "</script>";
   }
//关闭数据库
mysql_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

</head>

<body>
</body>
</html>