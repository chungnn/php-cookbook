<?php
define('DS', DIRECTORY_SEPARATOR);
define('DOC_ROOT', dirname(__FILE__));

require_once DOC_ROOT . DS . 'employee.php';


?>
<html>
	<head>
		<title>Bài 20</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<h3>Kiểm tra 3 cạnh của tam giác</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>a: </td>
                    <td>
                        <input type="text" name="a" value="<?php echo $a;?>" />
                        <?php
                        if(count($_POST) > 0 && $errors['a'] != '') {
                        ?>
                            <br />
                            <i style="color:red;">
                                <?php echo $errors['a']; ?>
                            </i>
                        <?php 
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>b: </td>
                    <td>
                        <input type="text" name="b" value="<?php echo $b;?>" />
                        <?php
                        if(count($_POST) > 0 && $errors['b'] != '') {
                        ?>
                            <br />
                            <i style="color:red;">
                                <?php echo $errors['b']; ?>
                            </i>
                        <?php 
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>c: </td>
                    <td>
                        <input type="text" name="c" value="<?php echo $c;?>" />
                        <?php
                        if(count($_POST) > 0 && $errors['c'] != '') {
                        ?>
                            <br />
                            <i style="color:red;">
                                <?php echo $errors['c']; ?>
                            </i>
                        <?php 
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Kiểm tra" /></td>
                </tr>
        </form>
        <h3>
        <?php 
            if(count($_POST) > 0 && $check) {
                echo "Thỏa mãn là 3 cạnh của tam giác";
            }
            if(count($_POST) > 0 && !$check) {
                echo "KHÔNG Thỏa mãn là 3 cạnh của tam giác";
            }
        ?>
        </h3>
	</body>
</html>