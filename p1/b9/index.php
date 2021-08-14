<html>
	<head>
		<title>Bài 9</title>
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
				for ($i = 1; $i <= 10; $i++) {
					?>
					<tr>
						<td><?php echo $i;?></td>
						<td></td>
					</tr>
					<?php
				}
			?>
		</table>
	</body>
</html>