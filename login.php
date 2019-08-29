<?php
include("db.php");
?>
<!Doctype html>
<html>
	<head>
		<title> Admin </title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
				<link rel="stylesheet" type="text/css" href="style.css">
				<script src="admin/jquery.min.js"></script>
	</head>
	<body>
			<center>
<h1 style ="font_waight:bold"><span style="color:#d083cf">  ADMIN LOG IN PANEL</span></h1>
			
			<br>
			<BR>
			<form action="" method="POST">
			<input type ="text" name ="user" class="form-control" id= a style="width:500px;box-shadow:black" placeholder ="Enter User Name">
			<br>
			<input type ="password" name ="pass" class="form-control" id=b style="width:500px" placeholder ="Enter Password">
			<br><button name=sub class="btn btn-blue"> LOGIN</button>
			</form>
			
			</center>
			
	</body>
	</html>