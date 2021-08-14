<?php
$employee = "Nguyễn Ngọc Chung";
$department = "Tech";
$leader_score = 4.3;
$solving_prob_score = 4.5;
$productivity_score = 3.9;
$final_score = ($leader_score + $solving_prob_score + $productivity_score) / 3;
?>
<html>
	<head>
		<title>Bài 5</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Bảng xếp hạng nhân viên <?php echo $employee . " - ". $department; ?></h2>
		<table border="1" cellspacing="0" cellpadding="0">
			<tr><td>Điểm lãnh đạo</td><td><?php echo $leader_score; ?></td></tr>
			<tr><td>Điểm giải quyết vấn đề</td><td><?php echo $solving_prob_score; ?></td></tr>
			<tr><td>Điểm năng suất</td><td><?php echo $productivity_score; ?></td></tr>
			<tr><td>Trung bình</td><td><?php echo $final_score; ?></td></tr>
		</table>
	</body>
</html>
