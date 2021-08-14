<?php
define('DS', DIRECTORY_SEPARATOR);
define('DOC_ROOT', dirname(__FILE__));

require_once DOC_ROOT . DS . 'triangle.php';
$a = '';
$b = '';
$c = '';
$errors = ['a' => '', 'b' => '', 'c' => ''];
if(count($_POST) > 0) {
    $triangle = new Triangle($_POST['a'], $_POST['b'], $_POST['c']);
    $errors = $triangle->validate();
}
?>
<html>
	<head>
		<title>Bài 17</title>
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
                        if($errors['a'] != '') {
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
                        if($errors['b'] != '') {
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
                        if($errors['c'] != '') {
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
        <?php 
            if(count($_POST) > 0) {
                if($triangle->check() === true) {
                    echo "Thỏa mãn là 3 cạnh của tam giác";
                }
                elseif($triangle->check() === false) {
                    echo "KHÔNG Thỏa mãn là 3 cạnh của tam giác";
                }
            }
        ?>

	</body>
</html>