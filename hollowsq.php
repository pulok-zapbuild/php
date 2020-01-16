<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		enter length of side of sq.<input type="text" name="side">
	</form>

</body>
</html>
<?php
	$text=$_POST['side'];
	if($text>=2)
	{
		for($i=1;$i<=$text;$i++)
		{
			for($j=1;$j<=$text;$j++)
			{
				echo "*";
			}
			echo "<br/>";
		}
	}
	else
	{
		echo "worng input";
	}
?>