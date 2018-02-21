<!DOCTYPE html>
<html>
<head>
	<title>grade</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div>
		   <h3>Student details</h3>
		   <form method="GET" class="form-group">
		math
		<input type="number" name="mark1">
		hist
		<input type="number" name="mark2">
		music
		<input type="number" name="mark3">
		fr
		<input type="number" name="mark4">
		eng
		<input type="number" name="mark5"><br>
		<br>
		geo
		<input type="number" name="mark6">
		flm
		<input type="number" name="mark7"><br>
		<?php
		$m=$_GET['mark1'];
		$n=$_GET['mark2'];
		$p=$_GET['mark3'];
		$q=$_GET['mark4'];
		$r=$_GET['mark5'];
		$s=$_GET['mark6'];
		$t=$_GET['mark7'];
		$sum=$m+$n+$p+$q+$r+$s+$t;
		echo "Total" . $sum;
		 echo "<br>";
		 $mean=$sum/7;
		 echo "Mean Score" . $mean;

		if ($mean<=40) {
			# code...
			echo "Grade E";
		}elseif ($mean<=60) {
			# code...
			echo "Grade D";
		}elseif ($mean<=70) {
			# code...
			echo "Grade C";
		}elseif ($mean<=80) {
			# code...
			echo "Grade B";
		}
		else {
			# code...
			echo "Grade A";
		}
		




		 ?>

		 </form>
			

		</div>

		



	</div>

</body>
</html>