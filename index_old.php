
<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>魅力华园</title>

<script type="text/javascript" src="js/avgrund.js"></script>
<link rel="stylesheet" href="css/avgrund.css">

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<script src="js/bootstrap.min.js"></script>-->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!----webfonts---->
<link href='http://fonts.useso.com/css?family=Lato:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----//requred-js-files---->

<script src="js/easing.js"></script>
	<script type="text/javascript" 	src="js/jquery.smint.js"></script>
		<script type="text/javascript">
			$(document).ready( function() {
			    $('.subMenu').smint({
			    	'scrollSpeed' : 1000
			    });
			});
		</script>
        <!--
        <script language="javascript">
			function openDialog() {
				Avgrund.show( "#default-popup" );
			}
			function closeDialog() {
				Avgrund.hide();
			}
		</script>
        -->
       

        	
</head>
<body>

       <!--
        <div id="default-popup" class="avgrund-popup">
			<h2>That's all, folks</h2>
			<p>
				You can hit ESC or click outside to close the modal. Give it a go to see the reverse transition.
			</p>
			<p>
				If you like this you would probably enjoy 
               
                <a href="javascript:;">Meny</a>, 
                <a href="javascript:;">reveal.js</a> and 
                <a href="javascript:;">stroll.js</a>.
			</p>
			<button onClick="javascript:closeDialog();">Close</button>
		</div>
        -->
	<div class="header">
      <div class="slider_container sTop">
		<div class="logo">
           <!--
			<img src="images/logo.png" alt=""/>
            -->
            
		</div>
	  </div> 
        	<nav class="subMenu navbar-custom">
	        <div>
                <div class="navbar-header">
 
                  <!--<img src="images/title.png" /> -->
                  <h6 style="
                   font-weight:700;
                   font-size:40px; 
                   font-family:微软雅黑,宋体; 
                   position:relative; 
                   top:15px;
                   left:10px;
                   color:#000000;">魅力华园</h6>
                     
                </div>
                <!--
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <img src="images/nav-icon.png" title="drop-down-menu"> 
	                </button>
	            </div>
                -->
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="navbar-collapse navbar-left navbar-main-collapse collapse" style="height: 1px;">
	                <ul class="nav navbar-nav">
	                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
	                    <li class="active">
	                        <a id="sTop" class="subNavBtn active" href="#" style="font-family:微软雅黑,宋体;">首页</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s1" class="subNavBtn" href="#"  style="font-family:微软雅黑,宋体;">相册</a>
	                    </li>
                        <!--
	                    <li class="page-scroll">
	                        <a id="s2" class="subNavBtn" href="#"  style="font-family:微软雅黑,宋体;">服务</a>
	                    </li>
	                   <li class="page-scroll">
	                        <a id="s4" class="subNavBtn" href="#"  style="font-family:微软雅黑,宋体;">关于</a>
	                    </li>
	                    <li class="page-scroll">
	                        <a id="s5" class="subNavBtn" href="#"  style="font-family:微软雅黑,宋体;">反馈</a>
	                    </li>
                        -->
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
                <div class="right-msg" id="login">
                    <a id="login_button" href="login_2.php">登陆 </a>
                      <a id="login_button" href="register.php">注册</a>    
                      <a href="index2.php">新页面</a>               
                </div>
                <div class="right-msg" id="user" style="display:none">
                    <h4><?php echo $_COOKIE["user"]; ?>您好！</h4>                   
                </div>  
                <div style="position:absolute; top:50px; right:26px;">  
                   <form action="search_show.php" method="post">
                      <input type="text" name="sitename" placeholder="Site Name" style="border:hidden"/>
                      <input type="submit"  value="搜索" style="border:hidden; font-family:微软雅黑,宋体; font-weight:100;"/>
                   </form>
	            </div>  	
             
	                <div class="clearfix"> </div>
	        </div>
	        <!-- /.container -->
   	  </nav>
      
      
      
      <!--相片滚动-->
      
  		<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <p align="center"><img class="top_desc" src="images/2.jpg"></p>
						 </div>
					 </div>
					</article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <p align="center"><img src="images/3.jpg" width="1000" height="800"></p>
						 </div>
					 </div>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						   <p align="center"><img src="images/4.jpg" width="1000" height="800"></p>
						 </div>
					 </div>
				   </article>
				</div>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="">2</a></li>
                </ul>
              </div>
              <script src="js/jquery.wmuSlider.js"></script> 
				 <script>
       			   $('.example1').wmuSlider();         
   			     </script> 	           	     
   	     </div>    
	</div>  
    
    
    <!--相册缩略图-->
      <div class="portfolio s1" id="portfolio">
	  <div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p1.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p2.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p3.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p4.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p5.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p6.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p7.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p8.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="portfolio_box">
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p9.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p10.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	    <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p11.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="col_1_of_4 span_1_of_4">
	 	   <a href="#" class="b-link-stripe b-animate-go  thickbox">
			<img src="images/p12.jpg" class="img-responsive" alt=""/>
			    <div class="b-wrapper">
				   <h2 class="b-animate b-from-left    b-delay03 ">
					 <img src="images/p_logo.png" class="img-responsive" alt=""/>
					 <span>Shutter Project title</span>
					 <button>View photo</button>
					 <label> <i class="heart"> </i>21</label>
					</h2>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>
   <div class="portfolio_bottom">
   	 <a class="btn3" href="#"><span>Loadmore</span></a>
   </div>
   
   <!--
   
   <div class="services s2" id="services">
   	  <div class="container">
   	  	<h2 class="service_head">Our Services</h2>
   	   <div class="row text-center">
   	    <div class="col-md-3 service_grid">
   		  <i class="icon1"> </i>
   		  <h3 class="m_1"><a href="#">One Page Layout</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3 service_grid">
   		  <i class="icon2"> </i>
   		 <h3 class="m_1"><a href="#">Flat Design</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3 service_grid">
   		  <i class="icon3"> </i>
   		  <h3 class="m_1"><a href="#">Photo portfolio</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   		<div class="col-md-3">
   		  <i class="icon4"> </i>
   		  <h3 class="m_1"><a href="#">Easy to edit</a></h3>
   		  <p class="m_2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
   		</div>
   	  </div>
   	  </div>
   	</div>
    <div class="photograph">
   	  <div class="container">
   		<div class="slider-left">
		  <h1>Never Stop Photographing</h1>
		  <p class="top_desc">It Is very likely that your best photograph has not yet been captured</p>
		  <p class="bottom_desc">- imperdiet doming</p>
		</div>
   	  </div>
   	</div>
    <!--
   	<div class="signup s3" id="signup">
       <div class="container">
   			<h3 class="m_3">Are you Interested ? <br> Sign up now</h3>
   			<div class="contact-form">
			   <form method="post" action="login.php">
				 <input type="text" class="textbox" name="Name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'First Name';}">
				 <input type="password" class="textbox" name="Password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email address';}">
				 <input type="submit" value="Sign Up">
			   </form>
			</div>
   		</div>
   	</div>
    -->
    
    <!--
    
    <div class="about s4" id="about">
   		<div class="container">
   			<h3 class="m_4">About Us</h3>
   			<p class="m_5">nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
   			<div class="row text-center">
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic1.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic3.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic2.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   				<div class="col-md-3 about-grid text-center">
   				  <img src="images/pic4.png" class="img-responsive" alt=""/>
   				  <h3><a href="#">John Doe<br>General Manager</a></h3>
   				  <p>diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation </p>
   				</div>
   			</div>
   		</div>
   	</div>
    
    
    
   	<div class="contact s5" id="contact">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<h3>We Want to hear from you</h3>
   					<ul class="contact_info">
			  	<li><i class="pin"> </i><span>Lorem ipsum dolor sit amet, consectetuer <br>adipiscing elit, sed diam nonummy nibh euismod</span></li>
			  	<li><i class="mobile"> </i><span>Tell: +1-900-235-2456<br>Fax: +1-900-235-2456</span></li>
			  	<li><i class="message"> </i><span class="msg">info(at)shutter.com</span></li>
			  </ul>
   				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
   				<div class="contact-form_grid">
				   <form method="post" action="index.php">
					 <input type="text" class="textbox" value="Your name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your name';}">
					 <input type="text" class="textbox" value="Your email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your email';}">
					 <input type="text" class="textbox" value="Subject" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Subject';}">
					 <textarea value="Message:" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					 <input type="submit" value="Send">
				   </form>
			      </div>
   			     </div>
   				</div>
   			</div>
   		</div>
   	</div>
    
    -->
    
   	<div class="footer">
   		<div class="container">
   			<div class="copy">
		       <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
		    </div>
		    <div class="social">	
		      <ul>	
			   <li class="facebook"><a href="#"><span> </span></a></li>
			   <li class="twitter"><a href="#"><span> </span></a></li>
			   <li class="rss"><a href="#"><span> </span></a></li>	
			   <li class="google"><a href="#"><span> </span></a></li>			
		     </ul>
			</div>
			<div class="clearfix"></div>
   		</div>
   	</div>
   	<script src="js/bootstrap.min.js"></script>

</body>
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
</html>

