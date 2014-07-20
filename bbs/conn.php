<?php
	$conn = mysql_connect("localhost", "root", "") or die("Can't connect database 'bbs'");
	mysql_select_db("bbs", $conn);
	mysql_query("SET NAMES 'utf8'");
	
	function Formate($content) {
		$content = str_replace("\n", "<br>", str_replace(" ", "&nbsp;", $content));
		return $content;
	}
?>