<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="JS代码,相册代码,JS广告代码,JS特效代码" />
<title>搜索结果</title>
<link rel="stylesheet" href="css/jquery-rebox.css">
<link rel="stylesheet" href="css/photo_show.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-rebox.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$errors=array();
$sitename=trim($_POST['sitename']);
}

if($sitename){}else{
	   echo "<script type='text/javascript'>";  
       echo "window.alert('输入不能为空');";   
       echo "</script>";
	   echo "<script type='text/javascript'>";  
       echo "location.replace('index.php');";   
       echo "</script>";
}

//连接数据库
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
$q_filename="select filename,search_time from filename where filename like '%$sitename%' order by search_time desc";
$r=@mysql_query($q_filename);
$q_photonum="select photonum from photonum where sitename like '%$sitename%'";
$r2=@mysql_query($q_photonum);
$t_num=0;
while($num=mysql_fetch_array($r2)){
	$t_num+=$num['photonum'];
	//echo $t_num;
}
//echo $num['photonum'];
echo $t_num;
  

$row=array();
$row_num=array();
for ($i = 0; $i < $t_num; $i++) {
	$str=mysql_fetch_array($r,MYSQL_NUM);
	//echo $str[0];
	$q="select search_time from filename where filename = '$str[0]'";
	$r3=@mysql_query($q);
	$str2=mysql_fetch_array($r3,MYSQL_NUM);
	//echo $str2[0];
	$str3=$str2[0];
	$str3++;
	$q_update="update filename set search_time = '$str3' where filename = '$str[0]'";
    $r4=@mysql_query($q_update);
	$row_num[]=$str[1];
	$row[]=$str[0];
}
if($r)
{
	//print_r($row); 
	//print_r($row_num); 
}else{
	   echo "<script type='text/javascript'>";  
       echo "window.alert('失败');";   
       echo "</script>";
}

//关闭数据库
mysql_close();


?>
</head>
<body style="background-color:rgb(0,0,0); text-align:center;">
<!-- 代码 开始 -->
<div id="gallery2" class="gallery container" style=" position:absolute; left:80px; top:130px;">
</div>
<h1 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; position:absolute; left:100px; top:15px;">"<?php  echo $sitename ?>"相关图片</h1>
<h4 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; position:absolute; left:100px; top:90px;">搜索结果共<?php  echo $t_num; ?>张图片</h4>
        <a href="index.php" style="position:absolute; top:70px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">回到主页>></a>
<script>
$('#gallery2').rebox({ selector: 'a' });
//获取要显示的文件名列表数组
var obj=eval('<?php echo json_encode($row);?>');
var obj_num=eval('<?php echo json_encode($row_num);?>');
//循环显示图片
for(var i=0;i<<?php echo $t_num; ?>;i++){
var html='';
html+="<a href='"+obj[i]+".jpg' title='被浏览次数："+obj_num[i]+"'><img src='"+obj[i]+".jpg'></a>";
   $("#gallery2").append(html);
}
</script>
</body>
</html>