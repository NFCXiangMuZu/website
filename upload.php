<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$s = new SaeStorage();
//数据库操作
$str2=$_COOKIE["albumtype"];
echo $str2;
$str3=$_COOKIE["user"];
echo $str3;
$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if(!$con){ die('could not connect:'.mysql_error()); }
mysql_select_db(SAE_MYSQL_DB,$con);
$url=urldecode($s->getUrl("photo", ''));
echo $url;

		//echo $_COOKIE["albumtype"];

	//echo $_COOKIE["user"];
	if($_COOKIE["user"]==null){
		echo "<script type='text/javascript'>";  
        echo "location.replace('login_2.php');";   
        echo "</script>";
	}else{
	$filename=$_FILES["myfile"]["name"];
	$address="$url$str3/$str2$filename";
    echo $address;
    $q="insert into filename values ('0','$address','$str2','getdate()','0','$str3')";
    $r=@mysql_query($q);
	if ($_FILES["myfile"]["error"] > 0){
	    echo "Error: " . $_FILES["myfile"]["error"] . "<br />";
	}else{
		$str="/{$_COOKIE['user']}/{$_COOKIE["albumtype"]}{$filename}.jpg";
		$url=$s->upload("photo",$str,$_FILES["myfile"]["tmp_name"]);
	    if( $url ){ //4wp是sae里面的bucket,test.jpg是最后保存的文件名
	        //echo "上传成功";
			//echo $url;
			echo "<script type='text/javascript'>";  
            echo "window.alert('上传成功');";   
            echo "</script>";
			//更新数据库中图片总数量
$q_photonum="select photonum from photonum where sitename = '$str2'";
$r_photonum=@mysql_query($q_photonum);
$num_photonum=mysql_fetch_array($r_photonum);
$photonum=$num_photonum['photonum'];
echo $photonum;
$photonum++;
echo $photonum;
$q_update="update photonum set photonum = '$photonum' where sitename = '$str2'";
$r_update=@mysql_query($q_update);
       echo "<script type='text/javascript'>";  
       echo "location.replace('index.php');";   
       echo "</script>";

	    }else{
	        //echo "上传失败";
			echo "<script type='text/javascript'>";  
            echo "window.alert('上传失败');";   
            echo "</script>";
			echo "<script type='text/javascript'>";  
            echo "location.replace('index.php');";   
            echo "</script>";
	    }
	}
	}
	?>
</body>
</html>