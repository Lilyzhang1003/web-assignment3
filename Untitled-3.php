<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">

body {
	background-image: url(flower.jpg);
	margin-left: 20px;
	margin-top: 20px;
	margin-right: 20px;
	margin-bottom: 20px;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>

</head>


<body>
<?php

?>
<div class="logon">
<form action="logon.php" method="Lget">
    用户名
    : 
    <input type="text" name="Lname" />
    密码
    : 
    <input type="text" name="password" />
<input type="submit"value="登录" />没有账户请先注册
</form>
</div>
<div class="signin">
<form action="logon.php" method="Sget">
    用户名
    : 
    <input type="text" name="Sname" />
    密码
    : 
    <input type="text" name="password" />
<input type="submit"value="注册" />
</form>

</div>

 
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
//-->
</script>
</body>
</html>
