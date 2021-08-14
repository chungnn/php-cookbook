<?php
$errors = [
    "name" => '',
    "dep" => ''
];
if(count($_POST) > 0) {
    if($_POST['name'] == '') {
        $errors['name'] = "Cần nhập họ tên";
    }
    if($_POST['dep'] == '-1') {
        $errors['dep'] = "Cần chọn phòng ban";
    }
    if($_POST['name'] != '' && $_POST['dep'] != '-1') {
        echo "Tạo nhân viên thành công";
    }
}
?>
<html>
    <head>
        <title>Bài 16</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <h3>Tạo mới nhân viên</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên</td>
                    <td>
                        <input type="text" name="name" value="" />
                        <?php
                        if($errors['name'] != '') {
                        ?>
                            <br />
                            <i style="color:red;">
                                <?php echo $errors['name']; ?>
                            </i>
                        <?php 
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Phòng ban</td>
                    <td>
                        <select name="dep">
                            <option value="-1">Chọn phòng ban</option>
                            <option value="1">Tech</option>
                            <option value="2">Sale</option>
                        </select>
                        <?php
                        if($errors['dep'] != '') {
                        ?>
                            <br />
                            <i style="color:red;">
                                <?php echo $errors['dep']; ?>
                            </i>
                        <?php 
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Lưu" /></td>
                </tr>
            
        </form>
    </body>
</html>