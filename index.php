<!DOCTYPE html>
<html
	<head>
		<title>Test Form</title>
		<meta name="description" content="Test site creation with a form" />
	</head>
	<body bgcolor="Green" text="Blue" >
		<h1 style="font-size: 3rem;color: #Blue;text-align: center;font-family: URW Chancery L, cursive;">Register</h1>
	<form name="Form" action="/script.php" method="post"  style="font-size: 1rem;font-family: URW Chancery L, cursive;">
		<table>
			<dir>
			 <tr><td>
				<label for="Name">Name:</label><br></td>
				<td><input type="text" id="Name" name="Name" required />*
			 </td></tr>
			</dir>
			<dir>
			 <tr><td>
				<label for="Age">Age:</label></td>
				<td><input type="text" id="Age" name="Age" required  />*
			 </td></tr>
			</dir>
			<dir>
				<tr><td>
				  <label for="Gender">Gender:</label></td>
				  <td><input type="radio" id="Gender" name="Gender" value="Male" required > Male
					<input type="radio" id="Gender" name="Gender" value="Female" required > Female *
				</td> </tr>
			</dir>
			<dir>
			 <tr><td>
				<label for="Address">Address:</label></td>
				<td><input type="text" id="Address" name="Address" required />*
			 </td></tr>
			</dir>
			<dir>
				<tr><td>
					<label for="City">City:</label></td>
					<td><input type="text" id="City" name="City" required />*
				</td></tr>
			</dir>
			<dir>
					<tr><td>
						<label for="State">State:</label></td>
						<td><select class="State" name="State" id="State" required />
							<option>Selecione...</option>
			        <option value="ac">AC</option>
			        <option value="al">AL</option>
			        <option value="ap">AP</option>
			        <option value="am">AM</option>
			        <option value="ba">BA</option>
			        <option value="ce">CE</option>
			        <option value="es">ES</option>
			        <option value="df">DF</option>
			        <option value="ma">MA</option>
			        <option value="mt">MT</option>
			        <option value="ms">MS</option>
			        <option value="mg">MG</option>
			        <option value="pa">PA</option>
			        <option value="pb">PB</option>
			        <option value="pr">PR</option>
			        <option value="pe">PE</option>
			        <option value="pi">PI</option>
			        <option value="rj">RJ</option>
			        <option value="rn">RN</option>
			        <option value="rs">RS</option>
			        <option value="ro">RO</option>
			        <option value="rr">RR</option>
			        <option value="sc">SC</option>
			        <option value="sp">SP</option>
			        <option value="se">SE</option>
			        <option value="to">TO</option>
						</select>*
					</td></tr>
			</dir>
			<dir>
				<tr><td>
					<label for="District">District:</label></td>
					<td><input type="text" name="District" id="District" required/>*
				</td></tr>
			</dir>
			<dir>
					<tr><td>
						<label for="Country">Country:</label></td>
						<td><input type="text" name="Country" id="Country" required />*
					</td></tr>
			</dir>
			<dir>
				<tr><td>
					<label for="E-mail">E-mail:</label></td>
					<td><input type="email" id="E-mail" name="E-mail" />
				</td></tr>
			</dir>
			<dir>
					<tr><td>
						<label for="Login">Login:</label></td>
						<td><input type="text" name="Login" id="Login" maxlength="10" required />*
					</td></tr>
			</dir>
			<dir>
					<tr><td>
							<label for="Password">Password:</label></td>
							<td><input type="password" name="Password" id="Password" maxlength="10" required />*
					</td></tr>
			</dir>
			<dir>
				<tr><td>
				<label for="op">Civil Status</label></td>
				<td><input type="radio" name="op" value="Married"> Married
				<input type="radio" name="op" value="Single"> Single
				<input type="radio" name="op" value="Widower"> Widower
				<input type="radio" name="op" value="Divorced"> Divorced
        </td></tr>
			</div>
			<div>
				<tr><td>
					<label for="Comments">Comments:</label></td>
					<td><textarea name="Comments" id="Comments" rows="8" cols="80"></textarea>
				</td></tr>
			</div>
			<div>
				<tr><td>
				<input type="submit" name="Register" id="Register" value="Submit" /></td>
				<td><input type="reset" name="Reset" id="Reset" value="Reset" />
			  </td></tr>
			</div>
		</table>
		</form>
	</body>
</html>
