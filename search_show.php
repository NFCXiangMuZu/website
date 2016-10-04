<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索页</title>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$errors=array();
$sitename=trim($_POST['sitename']);
} 
if (!empty($_GET['Gid'])){     //如果 Gid 不为空
  $Gid = $_GET['Gid'];         //设置变量$Gid 的值为传过来的Gid值
  //echo $Gid; 
  $sitename=$Gid;                  //如果赋值成功，会有值输出
}
$photonum=4;



?>

<link rel="stylesheet" href="css/zzsc.css" />
<script src="js/jquery.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/scripts.js"></script>

</head>
<body>
<!-- 代码 开始 -->
  <div id="gallery-container" style="top:120px;">
    
    <ul class="items--small" id="item_small">
      <li class="item"><a href="#"><img src="images/<?php  echo $sitename ?>1.jpg" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/<?php  echo $sitename ?>3.jpg" alt="" /></a></li>
      <!--
      <li class="item"><a href="#"><img src="images/small-3.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-4.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-5.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-6.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-7.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-8.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-9.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-10.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-11.png" alt="" /></a></li>
      <li class="item"><a href="#"><img src="images/small-12.png" alt="" /></a></li>
      -->
    </ul>
    <ul class="items--big" id="item_big">
      <!--
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="images/big-1.jpg" alt="" />
            <figcaption class="img-caption">
              Caption
            </figcaption>
          </figure>
          </a>
      
      -->
    </ul>
    <div class="controls">
      <span class="control icon-arrow-left" data-direction="previous"></span> 
      <span class="control icon-arrow-right" data-direction="next"></span> 
      <span class="grid icon-grid"></span>
      <span class="fs-toggle icon-fullscreen"></span>
    </div>
    
  </div>
  <h1 style="font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; position:absolute; left:100px; top:15px;">魅力华园</h1>
        <a href="index.php" style="position:absolute; top:70px; right:100px; font-family:微软雅黑,宋体; font-weight:700; color:#FFFFFF; font-size:18px;">回到主页>></a>
  <!--
  <div id="title" style="position:absolute; top:0px; width:100%;; margin:0 auto; height:82px; background-color:#FFB500;">
 
                  
                  <h6 style="
                   font-weight:700;
                   font-size:40px; 
                   font-family:微软雅黑,宋体; 
                   position:absolute; 
                   top:7px;
                   left:10px;
                   color:#000000;">魅力华园</h6>
                  <a href="index2.php" style="
                    position:absolute; 
                    right:27px; 
                    color:#000000; 
                    font-family:微软雅黑,宋体; 
                    font-weight:700;
                    top:50px;">点击回到首页>></a>
  </div>
  -->
  

<script>
    $(document).ready(function(){
     $('#gallery-container').sGallery({
        fullScreenEnabled: true
      });
    });
	var photonum=<?php echo $photonum ?>;
	for(var i=1;i<=photonum;i++){
	    var img='<img src="images/<?php  echo $sitename ?>1.jpg" />';
		$("#item_small").append("<li class='item'><a href='#'><figure>"+img+"<figcaption class='img-caption'><?php  echo $sitename ?></figcaption></figure></a></li>");
	    var html='';
	    html+="<li class='item--big'><a href='#'><figure>"+img+"<figcaption class='img-caption'><?php  echo $sitename ?></figcaption></figure></a></li>";
	    $("#item_big").append(html);
	}
</script>

</body>
</html>