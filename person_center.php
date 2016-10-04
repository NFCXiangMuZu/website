<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人中心</title>

<?php
  use sinacloud\sae\Storage as Storage;
  $s = new Storage();
  echo $_COOKIE["user"];
  $url=urldecode($s->getUrl("photo", ''));
  echo $url;
?>

</head>

<body>
        <div style="position:fixed; top:100px;">
         <form enctype="multipart/form-data" action="upload.php" method="post">  
           <input name='myfile' type='file'/>  
           <input type="submit" value="上传"/>  
         </form>
         </div>
         <img src="<?php echo $url; ?><?php echo $_COOKIE["user"]; ?>/校徽2.jpg" />
</body>
</html>