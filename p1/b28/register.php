<?php
session_start(); // chú ý tác dụng của lệnh start_session nhé :D
define('DS', DIRECTORY_SEPARATOR);
define('DOC_ROOT', dirname(__FILE__));

require_once DOC_ROOT . DS . 'student.php';
require_once DOC_ROOT . DS . 'validator.php';
require_once DOC_ROOT . DS . 'util.php';

if(count($_POST) > 0) {
    $data = [
        'name' => $_POST["name"] ?? '',
        'subjects' => $_POST["subjects"] ?? [],
    ];
    $errors = do_validation($data);
    if($errors['err_name'] == '' && $errors['err_subjects']== '') {
        add_student($data['name'], $data['subjects']);
        $_SESSION['flash_message'] = "Thực hiện đăng ký thành công";   // thiết lập nội dung message
        header("Location: index.php");
        exit();
    }
}
?>
<html>
	<head>
		<title>Bài 24</title>
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
                        <?php
                        if(count($_POST) > 0) {
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
                        if(count($_POST) > 0) {
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