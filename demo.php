<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>测试文档</title>
</head>

<body>

  <div style="width:200px; height:200px; background-color:rgb(0,0,0); float:left; position:absolute; margin:-100px 0 0 -100px; left:50%; top:50%;">
    
  </div>

</body>

<script>

  //实现函数如下所示  
function getBrowser(n) {  
  var ua = navigator.userAgent.toLowerCase(),  
      s,  
      name = '',  
      ver = 0;  
  //探测浏览器  
  (s = ua.match(/msie ([\d.]+)/)) ? _set("ie", _toFixedVersion(s[1])):  
  (s = ua.match(/firefox\/([\d.]+)/)) ? _set("firefox", _toFixedVersion(s[1])) :  
  (s = ua.match(/chrome\/([\d.]+)/)) ? _set("chrome", _toFixedVersion(s[1])) :  
  (s = ua.match(/opera.([\d.]+)/)) ? _set("opera", _toFixedVersion(s[1])) :  
  (s = ua.match(/version\/([\d.]+).*safari/)) ? _set("safari", _toFixedVersion(s[1])) : 0;  
  
  function _toFixedVersion(ver, floatLength) {  
    ver = ('' + ver).replace(/_/g, '.');  
    floatLength = floatLength || 1;  
    ver = String(ver).split('.');  
    ver = ver[0] + '.' + (ver[1] || '0');  
    ver = Number(ver).toFixed(floatLength);  
    return ver;  
  }  
  function _set(bname, bver) {  
    name = bname;  
    ver = bver;  
  }  
  return (n == 'n' ? name : (n == 'v' ? ver : name + ver));  
}; 

var version = getBrowser();
window.alert("浏览器版本为："+version);
  
</script>

</html>