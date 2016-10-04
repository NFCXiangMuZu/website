<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="JS代码,相册代码,JS广告代码,JS特效代码" />
<title>热搜榜</title>
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

//连接数据库
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
$q_filename="select filename,search_time from filename order by search_time desc";
$r=@mysql_query($q_filename);
$t_num=0;
$filename_row=array();
$searchtime_row=array();
while($num=mysql_fetch_array($r)){
	$filename_row[]=$num['filename'];
	$searchtime_row[]=$num['search_time'];
	$t_num++;
}
echo $t_num;
//echo $num['photonum'];
if($r)
{
	//print_r($row);  
	//print_r($filename_row);
	//print_r($searchtime_row);
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
<div style="width:1100px; height:600px; position:absolute; top:100px; left:70px; border:10px; border-style:solid; border-color:rgb(255,255,255);" id="onetoeight">
<h1 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF;">热搜榜</h1>
</div>

        <a href="index.php" style="position:absolute; top:70px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">回到主页>></a>
      
<script>
$('#gallery2').rebox({ selector: 'a' });
//获取要显示的文件名列表数组

var filename_row=eval('<?php echo json_encode($filename_row);?>');
var searchtime_row=eval('<?php echo json_encode($searchtime_row);?>');
//循环显示图片
var click_time=searchtime_row[0];
//alert(click_time);
var html='';
for(var i=0;i<8;i++){
	html+="<img src='"+filename_row[i]+".jpg' title='点击率为："+searchtime_row[i]+"' />";
	}
 $("#onetoeight").append(html);

</script>
</body>
</html>