<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
?>
<html>
	<head>
		<title>Bài 8</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<p>a = <?php echo $a; ?></p>
		<p>b = <?php echo $b; ?></p>
		<p>c = <?php echo $c; ?></p>
		<?php
		if($a + $b > $c && $b + $c > $a && $c + $a > $b) {
			echo "Thỏa mãn là 3 cạnh của tam giác";
		}
		?>
	</body>
</html>