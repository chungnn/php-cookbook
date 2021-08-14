<?php
function check_triangle($a, $b, $c) {
    if($a != '' && $b != '' && $c != '') {
        if($a + $b > $c && $b + $c > $a && $c + $a > $b) {
			echo "Thỏa mãn là 3 cạnh của tam giác";
		} else {
            echo "KHÔNG Thỏa mãn là 3 cạnh của tam giác";
        }
    }
}
$a = '';
$b = '';
$c = '';
$errors = [
    "a" => '',
    "b" => '',
    "c" => '',
];
if(count($_POST) > 0) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if($a == '') {
        $errors['a'] = "Cần nhập số a";
    }
    if($b == '') {
        $errors['b'] = "Cần nhập số b";
    }
    if($c == '') {
        $errors['c'] = "Cần nhập số c";
    }
    check_triangle($a, $b, $c);
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
	</body>
</html>