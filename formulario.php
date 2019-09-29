<!DOCTYPE html>
<html
	<head>
		<title>Formulário-teste</title>
		<meta name="description" content="Criação se site-teste com um formulário" />
	</head>
	<body bgcolor="Red" text="Blue">
	<form name="Formulario" action="/Cofre.php" method="post">
		<table>
			<caption>CADASTRO</caption>
			<dir>
			<tr><td>
				<label for="Nome">Nome:</label></td>
				<td><input type="text" id="Nome" name="Nome" /> </td></tr>
			</dir>
			<dir>
			<tr><td>
				<label for="Idade">Idade:</label></td>
				<td><input type="text" id="Idade" name="Idade" /> </td></tr>
			</dir>
			<dir>
				<tr><td>
				<label for="Sexo">Sexo:</label></td>
				<td><input type="radio" name="sexo" value="Masculino"> Masculino
					<input type="radio" name="sexo" value="Feminino"> Feminino </td></tr>
				</dir>
			<dir>
			<tr><td>
				<label for="Endereço">Endereço:</label></td>
				<td><input type="text" id="Endereço" name="Endereço" /></td></tr>
			</dir>
			<dir>
				<tr><td>
					<label for="Cidade">Cidade:</label></td>
					<td><input type="text" id="Cidade" name="Cidade" /></td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="Estado">Estado:</label></td>
						<td><select class="" name="Estado" id="Estado">
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
						</select></td></tr>
					</dir>
			<dir>
				<tr><td>
					<label for="Bairro">Bairro:</label></td>
					<td><input type="text" name="Bairro" id="Bairro" /></td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="País">País</label></td>
						<td><input type="text" name="País" id="País"></td></tr>
					</dir>
			<dir>
				<tr><td>
					<label for="E-mail">E-mail:</label></td>
					<td><input type="email" id="E-mail" name="E-mail" /> </td></tr>
				</dir>
				<dir>
					<tr><td>
						<label for="Login">Login:</label></td>
						<td><input type="text" name="Login" maxlength="10" /> </td></tr>
					</dir>
					<dir>
						<tr><td>
							<label for="Senha">Senha:</label></td>
							<td><input type="password" name="Senha" maxlength="10" /> </td></tr>
						</dir>
			<dir>
				<tr><td>
				<label for="Estado Civil">Estado Civil</label></td>
				<td><input type="radio" name="op" value="Casado(a)"> Casado(a)
				<input type="radio" name="op" value="Solteiro(a)"> Solteiro(a)
				<input type="radio" name="op" value="Viúvo(a)"> Viúvo(a)
				<input type="radio" name="op" value="Divorciado(a)"> Divorciado(a)
			</td></tr>
			</div>
			<div>
				<tr><td>
					<label for="Observações">Observações:</label></td>
					<td><textarea name="observações" rows="8" cols="80"></textarea></td></tr>
				</div> 
			<div>
				<tr><td>
				<input type="submit" name="cadastrar" id="cadastrar" value="Concluir cadastro" /></td>
				<td><input type="reset" name="limpar" id="limpar" value="Limpar campos preenchidos!" /></td></tr>
			</div>
		</table>
		</form>
	</body>
</html>
