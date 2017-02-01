<!DOCTYPE html>
<html>
<head>
	<title>Submit Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta http-equiv="refresh" content="2;URL='contact.html'">
	<style>
        body {
            background-image: url("images/macro.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>

	<?php
		$host="localhost";
		$database="mydb";
		$username="root";
		$password="kimik123";

		$conn = new mysqli($host, $username, $password, $database);
		if ($conn->connect_error) {
			die("database connect problem");
		}
		$name=$_POST['name'];
		$msg=$_POST['message'];

		$sql= "INSERT INTO users(name,message) VALUES('$name' ,'$msg')";

		if ($conn->query($sql)===TRUE) {
			echo "success";
		}

		$conn->close();


	?>

	<div class="container">
		<div class="jumbotron">
		<p>Thanks for sending message!</p>
		</div>
	</div>



</body>
</html>









