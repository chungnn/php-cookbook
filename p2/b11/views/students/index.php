<html>
	<head>
		<title>P2 - B11</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Danh sách đăng kí học</h2>
        <a href="index.php?a=register">Đăng ký tại đây</a> <br /><br />
        <?php 
            if($flashMsg != "") {
                echo "<h3 style='color:red;'>".$flashMsg."</h3>"; // hiển thị
            }
        ?>
		<table border="1" cellspacing="0" cellpadding="0">
			<tr>
				<td>STT</td>
				<td>Tên</td>
				<td>Các môn đăng ký</td>
			</tr>
			<?php 
                if(count($students) == 0) {
                ?>
                    <tr>
                        <td colspan=3>Chưa có dữ liệu</td>
                    </tr>
                <?php 
                } else {
                    $i = 1;
                    foreach($students as $student) { 
                    ?>
                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $student->getName();?></td>
                        <td><?php echo $student->getSubjects();?></td>
                    </tr>
                    <?php }
                }
			?>
		</table>
	</body>
</html>