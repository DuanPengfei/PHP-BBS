<?php
	include("conn.php");
	
	if(isset($_POST['login'])) {
		header("location:login.php");
	}
?>

<html>
<head>
	<meta charset="utf8" />
</head>
<body>
<?php 
	if($_COOKIE['log'] != "login") {
?>
	<form name="login" action="" method="post">
		<input type="submit" name="login" value="登录" />
	</form>
<?php
	}
?>
	<table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
	<?php
		$sql = "select * from message";
		$query = mysql_query($sql);
		while($arr = mysql_fetch_array($query)) {
	?>
		<tr bgcolor="#eff3ff">
		<td>标题：</td><td><?php echo Formate($arr['title']); ?></td><td>用户：</td><td><?php echo Formate($arr['user']); ?></td>
		</tr>
		<tr>
		<td>内容：</td><td><?php echo Formate($arr['content']); ?></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</html>