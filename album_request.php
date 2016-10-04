<?php
  if (!empty($_GET['Gid'])){     //如果 Gid 不为空
  $Gid = $_GET['Gid'];
  setcookie("albumtype",$Gid,time()+600);
  //echo $Gid;
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>相册申请</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="css/album_request.css">

        
    </head>

    <body style="background-color:rgb(0,0,0); text-align:center;font-family:微软雅黑,华文细黑;">
    
      <div style="text-align:center; margin: 120px auto 0 auto;">
        <h1 style="color:rgb(255,255,255);">相册申请</h1>
        <form action="album_request_check.php" method="post" style="color:rgb(255,255,255); float:none;">
           用户名：<input type="text" class="input_text"  placeholder="user name" name="username"/><br />
           相册名：<input type="text"  class="input_text" placeholder="album name" name="albumname"/><br />
           <input type="submit" title="确认提交" />
        </form>
      
      </div>
    
    </body>

</html>

