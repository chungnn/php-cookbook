<?php
$employee = [
	"name" => "Nguyễn Ngọc Chung",
	"dep" => "Tech",
	"leader_score" => 4.3,
	"solving_prob_score" => 4.5,
	"productivity_score" => 3.9
]
?>
<html>
	<head>
		<title>Bài 12</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Bảng xếp hạng nhân viên <?php echo $employee['name'] . " - ". $employee['dep']; ?></h2>
		<table border="1" cellspacing="0" cellpadding="0">
			<tr><td>Điểm lãnh đạo</td><td><?php echo $employee['leader_score']; ?></td></tr>
			<tr><td>Điểm giải quyết vấn đề</td><td><?php echo $employee['solving_prob_score']; ?></td></tr>
			<tr><td>Điểm năng suất</td><td><?php echo $employee['productivity_score']; ?></td></tr>
			<tr>
				<td>Trung bình</td>
				<td>
				<?php echo ($employee['leader_score'] + $employee['solving_prob_score'] + $employee['productivity_score'])/3; ?>
				</td>
			</tr>
		</table>
	</body>
</html>
