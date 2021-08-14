<?php
define('DS', DIRECTORY_SEPARATOR);
define('DOC_ROOT', dirname(__FILE__));

require_once DOC_ROOT . DS . 'student.php';
$students = get_students();
?>
<html>
	<head>
		<title>Bài 24</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h2>Danh sách đăng kí học</h2>
        <a href="register.php">Đăng ký tại đây</a> <br /><br />
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
                        <td><?php echo $student['name'];?></td>
                        <td><?php echo $student['subjects'];?></td>
                    </tr>
                    <?php }
                }
                ?>
		</table>
	</body>
</html>