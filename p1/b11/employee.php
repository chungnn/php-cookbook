<?php 
$employee = [
	'Nguyễn Ngọc Chung',
	'Nguyễn Minh Khôi',
	'Nguyễn Minh Khang'
];
?>
<html>
	<head>
		<title>Bài 11</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Danh sách nhân viên</h2>
		<table border="1" cellspacing="0" cellpadding="0">
			<tr>
				<td>STT</td>
				<td>Họ Tên</td>
			</tr>			
			<?php
				for ($i = 0; $i < count($employee); $i++) {
					?>
					<tr>
						<td><?php echo $i+1;?></td>
						<td><?php echo $employee[$i];?></td>
					</tr>
					<?php
				}
			?>
		</table>
	</body>
</html>