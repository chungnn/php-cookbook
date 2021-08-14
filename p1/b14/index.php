<?php
var_dump($_GET);
if(count($_GET)>0) {
	$number = rand(0, 100); // tạo ra số ngẫu nhiên
	if($number > 50) {
		echo "Open the door - " . $number;
	}
}
?>
<html>
	<head>
		<title>Bài 14</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<form action="" method="get">
			<input type="hidden" name="play" value="1" />
			<input type="submit" value="Chơi" />
		</form>
	</body>
</html>