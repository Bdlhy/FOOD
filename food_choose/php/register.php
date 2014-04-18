<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册</title>
<link href="css/index_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
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

$sql="SELECT * FROM user_info where Email='$_POST[Email]'";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result))
{
	$Errmsg="该邮箱已被注册";
}

if($_POST[PWD]!==$_POST[PWD_confirm])
{
	$Errmsg="两次密码输入不同，请重新输入";
}

$sql="SELECT * FROM user_info where UserName='$_POST[UserName]'";
$result=mysql_query($sql,$con);
if(mysql_num_rows($result))
{
	$Errmsg="该用户名已被占用";
}

if(!($_POST[UserName] && $_POST[PWD] && $_POST[PWD_confirm] && $_POST[Email]))
{
	$Errmsg="有项目没有填哦";
}

if(!$Errmsg)
{
	$sql="INSERT INTO user_info (UserName,PWD,Email) VALUES ('$_POST[UserName]','$_POST[PWD]','$_POST[Email]')";
	if (!mysql_query($sql,$con))
	{
		die('Error: ' . mysql_error());  
	}
}
$_SESSION[Errmsg]=$Errmsg;
if($Errmsg)
{
	echo "$Errmsg";
}
else
{
	echo "注册成功";
}

mysql_close($con);
</script>
</body>
</html>
