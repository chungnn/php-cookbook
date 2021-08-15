<html>
	<head>
		<title>P2 - B11</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h3>Đăng ký học</h3>
        <a href="index.php">Về trang danh sách</a> <br /><br />
        <form action="" method="post">
            <table>
                <tr>
                    <td>Họ tên: </td>
                    <td>
                        <input type="text" name="name" value="" />
                    </td>
                </tr>
                <tr>
                    <td>Các môn đăng ký: </td>
                    <td>
                        <input type="checkbox" value="PHP" name="subjects[]" /> PHP <br />
                        <input type="checkbox" value="NodeJS" name="subjects[]" /> NodeJS <br />
                        <input type="checkbox" value="Java" name="subjects[]" /> Java 
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Đăng ký" /></td>
                </tr>
        </form>
	</body>
</html>