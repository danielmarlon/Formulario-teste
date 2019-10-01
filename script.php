<?php
$name = $_POST['Name'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$address = $_POST['Address'];
$city = $_POST['City'];
$state = $_POST['State'];
$district = $_POST['District'];
$country = $_POST['Country'];
$email = $_POST['E-mail'];
$login = $_POST['Login'];
$password = $_POST['Password'];
$civilstatus = $_POST['op'];
$comments = $_POST['Comments'];
 ?>



 <html
	<head>
		<title>Test Form</title>
		<meta name="description" content="Test site creation with a form" />
	</head>
	<body bgcolor="black" text="Red">
	<form name="Form" action="/script.php" method="post">
		<table border="2">
			<caption>INFORMATION</caption>
			<dir>
			<tr><td>
				<label for="Name">Name:</label></td>
				<td> <?= $name ?>  </td></tr>
			</dir>
			<dir>
			<tr><td>
				<label for="Age">Age:</label></td>
				<td> <?= $age ?> </td></tr>
			</dir>
			<dir>
				<tr><td>
				<label for="Gender">Gender:</label></td>
				<td> <?= $gender ?> </td></tr>
				</dir>
			<dir>
			<tr><td>
				<label for="Address">Address:</label></td>
				<td> <?= $address ?> </td></tr>
			</dir>
			<dir>
				<tr><td>
					<label for="City">City:</label></td>
					<td> <?= $city ?> </td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="State">State:</label></td>
						<td> <?= $state ?> </td></tr>
					</dir>
			<dir>
				<tr><td>
					<label for="District">District:</label></td>
					<td> <?= $district ?> </td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="Country">Country:</label></td>
						<td> <?= $country ?> </td></tr>
					</dir>
			<dir>
				<tr><td>
					<label for="E-mail">E-mail:</label></td>
					<td> <?= $email ?> </td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="Login">Login:</label></td>
						<td> <?= $login ?> </td></tr>
					</dir>
					<dir>
						<tr><td>
							<label for="Password">Senha:</label></td>
							<td> <?= $password ?> </td></tr>
						</dir>
			<dir>
				<tr><td>
				<label for="op">Civil Status:</label></td>
				<td> <?= $civilstatus ?> </td></tr>
			</div>
			<div>
				<tr><td>
					<label for="Comments">Comments:</label></td>
					<td> <?= $comments ?> </td></tr>
				</div>
			
		</table>
		</form>
	</body>
</html>
