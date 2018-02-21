<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
	<div class="container-fluid" style="background-color: #F2F5A9;">
		<div style="background-color: #088A29">
			<div><h1><i><img src="index.jpeg">Green Alley School</i></h1></div>

		</div>
		<div style="column-count: 3" style="border: double;">
			<div style="border: double; ">
				<h2>Our Motto</h2>
				<p>Education and virtue to the core...</p>	
			</div>
			<div style="border: double; ">
				<h2>Our Vision</h2>
				<p>To be the leading international learning institute in the continent</p>	
			</div>
			<div style="border: double;"> 
				<h2>Our Mission</h2>
				<p>To bring up intellectually,physically,socially and spiritually upright persons to serve the global village.</p>
			</div>
		</div>
		<br>
		<div style="margin-left: 25%;margin-right: 10%;background-color: #088A29; ">
			<h3><b><i>To log in...</i></b></h3>
			<form method="POST" action="grading.php">
			Students Name:
			<input type="text" name="First name" value="First Name" required=""> 
			<input type="text" name="Last name" value="Last Name"><br>
			<br>
			Admission Number:
			<input type="text" name="admission number" required=""><br>
			<br>
			Password:
			<input type="password" name="password" required=""><br>
			<br>
			<input type="submit" name="submit" class="btn btn-success">
			<input type="reset" name="reset" class="btn btn-danger">
			</form>
			<br>
			<br>
			




		</div>


		



	</div>

</body>
</html>