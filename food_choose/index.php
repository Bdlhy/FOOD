<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>美食首页</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div class="header container">

	<div class="nav" style="display:block">
	
		<h2 class="name">电子科大关爱食堂小组</h2>

		<a href="javascript:;" class="a1" title="登录"><i class="plus icon"></i></a>

      	<a href="javascript:;" title="注册"><i class="off icon"></i></a>

	</div>

	<div class="nav" style="display:none">

		<h2 class="name">电子科大关爱食堂小组</h2>
		
		<!--这个地方需要后端返回用户信息-->
		<span class="user_welcome">欢迎你，         <a href="index.html" class="loginout">退出登录</a></span>

	</div>

	<div class="top">
		
		<div class="top_img"><img src="images/logo150x150.jpg" alt="标志" /></div>

		<input type="text" class="top_input" />

		<button class="top_button"></button>

	</div>

</div>

<div class="slider container">

	<div class="slider_slider">
		
		<div class="imgbox">

			<a href="javascript:;" target="_blank"><img src="images/body950x410.jpg" /></a>

        	<a href="javascript:;" target="_blank"><img src="images/body2（950x410）.jpg" /></a>

       		<a href="javascript:;" target="_blank"><img src="images/body3（950x410）.jpg" /></a>

        	<a href="javascript:;" target="_blank"><img src="images/index4.jpg" /></a>

		</div>

	</div>

	<div class="slider_right"></div>

	<div class="slider_img1"><img src="images/每日推荐230x150.jpg" alt="img1" class="slider_img" /></div>

	<div class="slider_img2"><img src="images/随便看看230x150.jpg" alt="img2" class="slider_img" /></div>

	<div class="slider_img3"><img src="images/选择食堂230x150.jpg" alt="img3" class="slider_img" /></div>

	<div class="slider_img4"><img src="images/选择种类230x150.jpg" alt="img4" class="slider_img" /></div>

</div>

<div class="footer container">
	
	<ul class="ul1">

		<li><a href="#">关于我们</a> | </li>

		<li><a href="#">About Us</a> | </li>

		<li><a href="#">服务协议</a> | </li>

		<li><a href="#">隐私权保护</a> | </li>

		<li><a href="#">开放平台</a> | </li>

		<li><a href="#">广告服务</a>| </li></a>

		<li><a href="#">版权所有</a></li>
		

	</ul>
	
	<ul class="ul2"> 

		<li><a href="#">有害短信息举报</a> | </li>

		<li><a href="#">版权保护投诉指引</a>| </li>

		<li><a href="#">互联网出版许可证</a></li>

	</ul>

	<p>Copyright © 1998 - 2014 FENGO. All Rights Reserved</p>
</div>

<div class="modal fade" style="display:none">

	<div class="modal-header">
		
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

		<h2 class="modal-header-welcome">欢迎光临</h2>

	</div>
	<form action="index.php" method="post">
		<div class="modal-body">
			
			<div class="modal-control">
				
				<p class="modal-name">帐号:	<input type="text" id="name" name="UserName" class="modal-name-input" /></p>
				
				

			</div>

			<div class="modal-control">

				<p class="modal-password">密码:	<input type="text" id="passward" name="PWD" class="modal-password-input" /></p>

			</div>

			<div class="modal-control">

				<p class="modal-validate">验证:	<input type="text" class="modal-validate-input" /></p>

			</div>

		</div>

		<div class="modal-footer">
			
			<input type="button" value="登录" class="modal-footer-login" />


		</div>
	</form>

</div>
<div class="modal-backdrop fade"></div>


<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script language="php">
session_start();
$Errmsg="";
$con = mysql_connect("localhost","root","root");
mysql_query('SET NAMES gb2312');
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("order_system", $con);

$sql="SELECT * FROM user_info where UserName='$_POST[UserName]' AND PWD='$_POST[PWD]'";
$result=mysql_query($sql,$con);
if(!mysql_num_rows($result))
{
	$Errmsg="用户名或密码错误";
}

$sql="SELECT * FROM user_info where UserName='$_POST[UserName]'";
$result=mysql_query($sql,$con);
if(!mysql_num_rows($result))
{
	$Errmsg="该用户名不存在";
}

if($Errmsg)
{
	echo "$Errmsg";
}
else
{
	echo "success!";
}
</script>


</body>
</html>
