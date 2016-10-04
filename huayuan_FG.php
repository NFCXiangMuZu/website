<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>华园风光</title>
<script src="js/sHover.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-rebox.js"></script>
<link rel="stylesheet" href="css/jquery-rebox.css">
<link rel="stylesheet" href="css/demo.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<?php

$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
if (!empty($_GET['Gid'])){     //如果 Gid 不为空
  $Gid = $_GET['Gid'];         //设置变量$Gid 的值为传过来的Gid值
  echo $Gid;
}
$q_sitename="select sitename,photonum from photonum where album_type like '%$Gid%' order by total_clicktime desc";
$r=@mysql_query($q_sitename);
$length=0;
$s_name=array();
$s_photonum=array();
$s_filename=array();
while($num=mysql_fetch_array($r)){
	
		$s_name[]=$num['sitename'];
		$sitename=$num['sitename'];
		$q_filename="select filename,upload_name from filename where sitename = '$sitename'";
        $r_filename=@mysql_query($q_filename);
		$num3=mysql_fetch_array($r_filename);
		$s_filename[]=$num3['filename'];
        $s_photonum[]=$num['photonum'];
	$length++;
}
echo $length;
//print_r($s_filename);
$totalnum=array();
for($i=0;$i<$length;$i++)
{
	$str=$s_name["$i"];
	$q_total="select total_clicktime from photonum where sitename = '$str'";
	$r_total=@mysql_query($q_total);
	$num2=mysql_fetch_array($r_total);
	$totalnum[]=$num2['total_clicktime'];
}
//print_r($totalnum);
//print_r($s_name);




//关闭数据库
mysql_close();

?>
</head>

<body id="body" style="background-color:rgb(0,0,0);">
<div style=" position:absolute; left:70px; top:100px;" id="album">
		</div><!-- /container -->
        
        <h1 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; position:absolute; left:100px; top:15px;"><?php echo $Gid; ?></h1>
        <a href="index.php" style="position:absolute; top:70px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">回到主页>></a>
        <a href="album_request.php?Gid=<?php echo $Gid; ?>" style="position:absolute; top:20px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">申请相册</a>
        <script>
		var totalnum=eval('<?php echo json_encode($totalnum);?>');
		var obj=eval('<?php echo json_encode($s_name);?>');
		var obj_filename=eval('<?php echo json_encode($s_filename);?>');
		var photonum=eval('<?php echo json_encode($s_photonum);?>');
		var len=<?php echo $length; ?>;
		//alert(len);
		for(var i=0;i<len;i++){
		var html='';
		 html+="<div class='sHoverItem'>";
		 if(photonum[i]==0){
			 html+="<img src='images/暂无图片1.jpg'>";
		 }else{
			 html+="<img src='"+obj_filename[i]+".jpg'>";
		 }
		 html+="<span class='sIntro'>";
		 html+="<a href='photo_show.php?Gid="+obj[i]+"'><h2>"+obj[i]+"</h2></a>";	
		 html+="<p>相册点击量："+totalnum[i]+"次</p>";	
		 html+="</span>";
		 html+="</div>";
         $("#album").append(html);
		}
		 var a=new sHover("sHoverItem","sIntro");
		 a.set({
		 	slideSpeed:5,
		 	opacityChange:true,
		 	opacity:100
		 });

		 
</script>
</body>
</html>