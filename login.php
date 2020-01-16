<?php
error_reporting(1);
$text=$_POST['user'];
$text1=$_POST['pass'];
if($text=="pulok"&&$text1=="puki123")
{
	echo "access granted";
}
else
{
	echo "not granted";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="login.php">
		<table>
			<tr>
				<td>enter user name</td>
				<td><input type="text" name="user"/></td>
			</tr>
			<tr>
				<td>enter password</td>
				<td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="check"></td>
			</tr>
		</table>
	</form>

</body>
</html>