<?php
function check_triangle($a, $b, $c) {
    if($a != '' && $b != '' && $c != '') {
        if($a + $b > $c && $b + $c > $a && $c + $a > $b) {
            return true;
		}
    }
    return false;
}

function validate($a, $b, $c) {
    $errors = [
        "a" => '',
        "b" => '',
        "c" => '',
    ];
    if($a == '') {
        $errors['a'] = "Cần nhập số a";
    }
    if($b == '') {
        $errors['b'] = "Cần nhập số b";
    }
    if($c == '') {
        $errors['c'] = "Cần nhập số c";
    }
    return $errors;
}
// toán tử ?? để xác định là nếu có $_POST['a'] thì biến $a sẽ được gán bằng $_POST['a'], còn không thì gán là ''
$a = $_POST['a'] ?? '';  
// toán tử ?? để xác định là nếu có $_POST['b'] thì biến $a sẽ được gán bằng $_POST['b'], còn không thì gán là ''
$b = $_POST['b'] ?? '';
// toán tử ?? để xác định là nếu có $_POST['c'] thì biến $a sẽ được gán bằng $_POST['c'], còn không thì gán là ''
$c = $_POST['c'] ?? '';
if(count($_POST) > 0) {
    $errors = validate($a, $b, $c);
    $check = check_triangle($a, $b, $c);
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