<?php
$employees = [
	[
		"name" => "Nguyễn Ngọc Chung",
		"dep" => "Tech",
		"leader_score" => 4.3,
		"solving_prob_score" => 4.5,
		"productivity_score" => 3.9
	],
	[
		"name" => "Nguyễn Thị Phương Anh",
		"dep" => "Tech",
		"leader_score" => 4.1,
		"solving_prob_score" => 4.8,
		"productivity_score" => 4.5
	],
	[
		"name" => "Nguyễn Vang Danh",
		"dep" => "Tech",
		"leader_score" => 3,
		"solving_prob_score" => 3,
		"productivity_score" => 4
	]
]
?>
<html>
	<head>
		<title>Bài 13</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Bảng nhân viên</h2>
		<table border="1" cellspacing="0" cellpadding="0">
			<tr>
				<td>STT</td>
				<td>Tên</td>
				<td>Phòng ban</td>
				<td>Điểm lãnh đạo</td>
				<td>Điểm giải quyết vấn đề</td>
				<td>Điểm năng suất</td>
				<td>Trung bình</td>
			</tr>
			<?php 
				$i = 1;
				foreach($employees as $employee) { 
					$avg = ($employee['leader_score'] 
							+ $employee['solving_prob_score'] 
							+ $employee['productivity_score'])/3;
				?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo $employee['name'];?></td>
					<td><?php echo $employee['dep'];?></td>
					<td><?php echo $employee['leader_score']; ?></td>
					<td><?php echo $employee['solving_prob_score']; ?></td>
					<td><?php echo $employee['productivity_score']; ?></td>
					<td><?php echo $avg; ?></td>
				</tr>
				<?php }?>
		</table>
	</body>
</html>
