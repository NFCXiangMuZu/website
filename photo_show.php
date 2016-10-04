<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$errors=array();
$sitename=trim($_POST['sitename']);
} 
if (!empty($_GET['Gid'])){     //如果 Gid 不为空
  $Gid = $_GET['Gid'];         //设置变量$Gid 的值为传过来的Gid值
  //echo $Gid; 
  $sitename=$Gid; 
  //echo $sitename;
  setcookie("albumtype",$sitename,time()+3600);                 //如果赋值成功，会有值输出
  echo $_COOKIE["albumtype"];
}
//连接数据库
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
$q_filename="select filename,search_time from filename where sitename = '$sitename'";
$r=@mysql_query($q_filename);
$q_photonum="select photonum from photonum where sitename like '%$sitename%'";
$r2=@mysql_query($q_photonum);
$t_num=0;
while($num=mysql_fetch_array($r2)){
	$t_num+=$num['photonum'];
	//echo $t_num;
}
//echo $num['photonum'];
  
$update_num=0;
$q_updatenum="select filename from filename where sitename = '$sitename'";
$r_updatenum=@mysql_query($q_updatenum);
while($num2=mysql_fetch_array($r_updatenum,MYSQL_NUM)){
	$update_num++;
}
echo $update_num;
$row=array();
$row_search_time=array();
$row_upload_name=array();
for ($i = 0; $i <$update_num; $i++) {
	$str=mysql_fetch_array($r);
	//echo $str[0];
	$q="select search_time from filename where filename = '$str[0]' order by search_time desc";
	$r3=@mysql_query($q);
	$str2=mysql_fetch_array($r3,MYSQL_NUM);
	//echo $str2[0];
	$str3=$str2[0];
	$str3++;
	$q_update="update filename set search_time = '$str3' where filename = '$str[0]'";
    $r4=@mysql_query($q_update);
	$q_upload_name="select upload_name from filename where filename = '$str[0]'";
	$r_upload_name=@mysql_query($q_upload_name);
	$str_upload_name=mysql_fetch_array($r_upload_name);
	$row_upload_name[]=$str_upload_name['upload_name'];
	$row_search_time[]=$str['search_time'];
	$row[]=$str['filename'];
}
//print_r($row_upload_name);
$q_update2="update photonum set photonum = '$update_num' where sitename = '$sitename'";
$r5=@mysql_query($q_update2);
if($r)
{
	//print_r($row);  
}else{
	   echo "<script type='text/javascript'>";  
       echo "window.alert('失败');";   
       echo "</script>";
}

//关闭数据库
mysql_close();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="JS代码,相册代码,JS广告代码,JS特效代码" />
<title>Rebox lightbox相册代码</title>
<link rel="stylesheet" href="css/jquery-rebox.css">
<link rel="stylesheet" href="css/photo_show.css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-rebox.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color:rgb(0,0,0); text-align:center;">
<!-- 代码 开始 -->
<div style="position:absolute; top:20px; left:900px;">
         <form class="upload" enctype="multipart/form-data" action="upload.php" method="post">  
           <input class="upload_file" name='myfile' type='file'/>  
           <input class="upload_submit" type="submit" value="上传"/>  
         </form>
         <!--
         <img src="http://hqupictureshow-photo.stor.sinaapp.com/<?php echo $_COOKIE["user"];?>/<?php echo $sitename; ?>.jpg" width="1000px" height="300px" />-->
</div>
<div id="gallery2" class="gallery container" style=" position:absolute; left:80px; top:100px;">
</div>
<h1 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; position:absolute; left:100px; top:15px;">"<?php  echo $sitename ?>"相关图片</h1>
<!--
<a href="huayuan_FG.php?Gid=<?php echo $Gid; ?>" style="position:absolute; top:70px; right:160px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">相册>></a>
-->
        <a href="index.php" style="position:absolute; top:70px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">主页>></a>
<script>
var obj=eval('<?php echo json_encode($row);?>');
var obj_num=eval('<?php echo json_encode($row_search_time);?>');
var obj_upload_name=eval('<?php echo json_encode($row_upload_name);?>');

//循环显示图片
for(var i=0;i<<?php echo $update_num; ?>;i++){
var html='';
html+="<a href='"+obj[i]+".jpg' title='被浏览次数："+obj_num[i]+",上传者为："+obj_upload_name[i]+"'><img src='"+obj[i]+".jpg'></a>";
   $("#gallery2").append(html);
}
$('#gallery2').rebox({ selector: 'a' });

</script>

</body>
</html>