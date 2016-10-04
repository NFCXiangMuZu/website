<!DOCTYPE html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>魅力华园</title>
<link rel="stylesheet" id="fusion-style-css" href="css/style_photo.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<?php
//连接数据库
include "mysql-connect.php";
if(!$con){ die('could not connect:'.mysql_error()); }
//选择数据库
@mysql_select_db("website",$con);
$q_filename="select sitename from photonum";
$r=@mysql_query($q_filename);
$sitename_num=0;
$sitename_row=array();
while($num=@mysql_fetch_array($r)){
	$sitename_row[]=$num['sitename'];
	$sitename_num++;
}
for($i=0;$i<$sitename_num;$i++){
	$str=$sitename_row["$i"];
	//echo $str;
	$q_totalnum="select search_time from filename where sitename = '$str'";
	$r_totalnum=@mysql_query($q_totalnum);
	$number=0;
	while($num2=@mysql_fetch_array($r_totalnum)){
		$number+=$num2['search_time'];
	}
	$q_update="update photonum set total_clicktime = '$number' where sitename = '$str'";
	$r_update=@mysql_query($q_update);
	//echo $number;
}

//关闭数据库
mysql_close();


?>
<div id="et-slider-wrapper" class=" et_slider_auto et_slider_speed_7000" style="height:100%;">
  
	<div id="et-slides">
		<div class="et-slide" style="background-image:url(images/%E5%8D%8E%E5%A4%A7%E5%A4%9C%E6%99%AF1.jpg);">
			<div class="container clearfix">
				<div class="description">
                    <h2 style=" font-weight:700; font-family:微软雅黑,宋体">-华大黑夜-</h2>
					<p class="subtitle" >[华侨大学厦门校区的黑夜]</p>
                    <p class="subtitle" >[绚丽的灯光]</p>
                    <p class="subtitle" >[和完美的弧形校门交相辉映]</p>
                    <p class="subtitle" >[美不胜收]</p>
                    <!--
					<a href="#" class="more">
					了解更多 </a>
                    -->
                    </div>
				<!-- .description -->
				<!-- .featured-image --></div>
			<!-- .container --></div>
		<!-- .et-slide -->
		<div class="et-slide" style="background-image:url(images/%E6%B3%89%E5%B7%9E%E6%A0%A1%E5%8C%BA%E8%B5%B0%E5%BB%8A1.jpg);">
			<div class="container clearfix">
				<div class="description">
					<h2 style=" font-weight:700; font-family:微软雅黑,宋体">-泉州校区长廊-</h2>
					<p class="subtitle" >[华侨大学泉州校区的幽静长廊]</p>
                    <p class="subtitle" >[悠扬的阳光]</p>
                    <p class="subtitle" >[和古老的长廊相互映衬]</p>
                    <p class="subtitle" >[美不胜收]</p>
                    </div>
				<!-- .description -->
				
				<!-- .featured-image --></div>
			<!-- .container --></div>
		<!-- .et-slide -->
		<div class="et-slide" style="background-image:url(images/%E6%B3%89%E5%B7%9E%E6%A0%A1%E5%8C%BA%E5%B9%BD%E9%9D%99%E6%A0%91%E6%9E%971.jpg);">
			<div class="container clearfix">
				<div class="description">
					<h2 style=" font-weight:700; font-family:微软雅黑,宋体">-幽静树林-</h2>
					<p class="subtitle" >[华侨大学泉州校区的幽静树林]</p>
                    <p class="subtitle" >[多喜欢这灵动的淡绿]</p>
                    <p class="subtitle" >[这充满活力的绿色长河]</p>
                    <p class="subtitle" >[何为尽头]</p>
                    </div>
				<!-- .description -->
				
				<!-- .featured-image --></div>
			<!-- .container --></div>
		<!-- .et-slide --></div>
	<!-- #et-slides --></div>
<!-- #et-slider-wrapper -->
		</header>
        
        <div class="social">	
		      <ul>	
			   <li class="facebook"><a href="#"><span> </span></a></li>
			   <li class="twitter"><a href="#"><span> </span></a></li>
			   <li class="rss"><a href="#"><span> </span></a></li>	
			   <li class="google"><a href="#"><span> </span></a></li>			
		     </ul>
			</div>
          
        <div style="position:fixed; height:60px; width:100%; top:0px; background-color:#666666; opacity:0.5;"> </div>
        
        
        <h2 style="font-size:30px; color:#FFFFFF; font-weight:600; font-family:微软雅黑,宋体; position:fixed; top:10px; left:30px;">魅力华园</h2>
        <div class="container_title">
          
           <div id="search">
           <form action="search_result.php" method="post">
            <input type="text" name="sitename" placeholder="Site Name">
            <input class="button" type="submit" value="Search">
            </form>
           </div>
         </div>
         <a href="huayuan_FG.php?Gid=华园风光" style="position:fixed; top:23px; left:170px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">华园风光</a>
         <a href="huayuan_FG.php?Gid=华园美食" style="position:fixed; top:23px; left:270px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">华园美食</a>
         <a href="huayuan_FG.php?Gid=华园社团" style="position:fixed; top:23px; left:370px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">华园社团</a>
         <a href="huayuan_FG.php?Gid=华园之最" style="position:fixed; top:23px; left:470px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">华园之最</a>
         <a href="huayuan_FG.php?Gid=华园记忆" style="position:fixed; top:23px; left:570px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">华园记忆</a>
         <a href="huayuan_FG.php?Gid=境外交流" style="position:fixed; top:23px; left:670px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:#FFFFFF">境外交流</a>
         <a href="click_list.php?Gid=点击排行榜" style="position:fixed; top:0px; left:965px; font-size:12px; font-family:微软雅黑,宋体; font-weight:400; color:rgb(255,0,0)">热搜榜</a>
         <div id="login">
           <a href="login_2.php" style="position:fixed; top:20px; right:40px; font-size:12px; color:#FFFFFF; border-right:groove;">登陆</a>
           <a href="register.php" style="position:fixed; top:20px; right:15px; font-size:12px; color:#FFFFFF">注册</a>
         </div>
         <div id="user" style="display:none">
           <a href="logout.php" style="position:fixed; top:20px; right:15px; font-size:12px; color:#FFFFFF">点此退出登录</a>
         </div>
         
         <div style="position:fixed; float:left; height:60px; width:100%; bottom:0; background-color:#666666; opacity:0.5;"> </div>
         
         <p style="position:fixed; bottom:0px; left:500px; font-size:12px; color:#FFFFFF">版权所有 ©1996-2016 华侨大学闽ICP备05005476</p>
        
           
		
	</div>
    
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<?php
  if(isset($_COOKIE["user"])){
	   echo "<script type='text/javascript'>";  
	   //echo "window.alert('登录成功咯');";
       echo "document.getElementById('login').style.display='none';"; 
	   echo "document.getElementById('user').style.display='block';"; 
       echo "</script>";
  }else{
	   echo "<script type='text/javascript'>";  
       //echo "window.alert('登录失败咯');";   
       echo "</script>";
  }
?>
</body>

</html>
