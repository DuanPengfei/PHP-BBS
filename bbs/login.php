<?php
	include("conn.php");
	
	$sql = "select * from admin";
	$query = mysql_query($sql);
	$id = "";
	$pw = "";
	while($arr = mysql_fetch_array($query)) {
		$id = $arr['id'];
		$pw = $arr['pw'];
	}
	
	if($_POST['logout'] == "logout") {
		setcookie("log", "logout");
		echo "<script language=\"javascript\">location.href='login.php';</script>";
	}
	if($_POST['id'] == $id && md5($_POST['pw']) == $pw) {
		setcookie("log", "login");
		echo "<script language=\"javascript\">location.href='login.php';</script>";
	}
	
	if($_COOKIE['log'] != "login") {
?>

<html>
<head>
	<meta charset="utf8" />
	<SCRIPT language="javascript">
		function CheckPost() {
			if(myform.id.value == "") {
				alert("请填写用户名");
				myform.id.focus();
				return false;
			}
			if(myform.pw.value == "") {
				alert("密码不能为空");
				myform.pw.focus();
				return false;
			}
		}
	</SCRIPT>
</head>
<body>
	<form name="myform" action="" method="post" onsubmit="return CheckPost();">
	用户名：<input type="text" size="10" name="id" /><br />
	密码：<input type="password" name="pw" /><br />
	<input type="submit" name="submit" value="登录" />
	</form>
	
<?php
	}
	else {
		header("location: admin.php");
	}
?>
</body>
</html>