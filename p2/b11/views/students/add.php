<html>
	<head>
		<title>P2 - B11</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h3>Đăng ký học</h3>
        <a href="index.php">Về trang danh sách</a> <br /><br />
        <form action="index.php?a=save" method="post">
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td>
                        <input type="text" name="name" value="" />
                        <?php
                        if(isset($errors['err_name'])) {
                            echo show_message($errors['err_name']);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Các môn đăng ký: </td>
                    <td>
                        <input type="checkbox" value="PHP" name="subjects[]" /> PHP <br />
                        <input type="checkbox" value="NodeJS" name="subjects[]" /> NodeJS <br />
                        <input type="checkbox" value="Java" name="subjects[]" /> Java 
                        <?php
                        if(isset($errors['err_subjects'])) {
                            echo show_message($errors['err_subjects']);
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Đăng ký" /></td>
                </tr>
        </form>
	</body>
</html>