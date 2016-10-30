<!DOCTYPE html>
<meta charset="UTF-8"> 

<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
	<?php require "backend.php";?>
		<div class="container">
			<p style="text-align: center;font-size: 23px;"><u>Cadastro de Pessoas</u></p>

			<form method="POST" action="">
				<div class="contint">
					<div class="flr">
						<p>Codigo:</p>
					</div>

					<div>
						<input type="text" name="codigo" />
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Nome:</p>
					</div>

					<div>
						<input type="text" name="nomePessoa" />
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Logradouro:</p>
					</div>

					<div>
						<select name="Logradouros_idLogradouro">
							<option>Milk</option>
							<option>Coffee</option>
							<option>Tea</option>
						</select>
						<a href="#" class="btn brn-sm btn-info">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Bairro:</p>
					</div>

					<div>
						<select name="Bairros_idBairro">
							<option>Milk</option>
							<option>Coffee</option>
							<option>Tea</option>
						</select>
						<a href="#" class="btn brn-sm btn-info">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Cidade:</p>
					</div>

					<div>
						<select name="Cidades_idCidade">
							<option>Milk</option>
							<option>Coffee</option>
							<option>Tea</option>
						</select>

						<a href="#" class="btn brn-sm btn-info">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Estado:</p>
					</div>

					<div>
						<select name="Estados_idEstado">
							<option>Milk</option>
							<option>Coffee</option>
							<option>Tea</option>
						</select>
						<a href="#" class="btn brn-sm btn-info">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Paises:</p>
					</div>

					<div>
						<!--<input type="text" name="Paises_idPais" />-->
						<select name="Paises_idPais">
							<option>Milk</option>
							<option>Coffee</option>
							<option>Tea</option>
						</select>
						<a href="#" class="btn brn-sm btn-info">+</a>
						<br><br>
					</div>
				</div>

				<input type="Submit" class="btn brn-sm btn-primary" name="operacao" value="Inclusão">
				<input type="Submit" class="btn brn-sm btn-primary" name="operacao" value="Alteração">
				<input type="Submit" class="btn brn-sm btn-primary" name="operacao" value="Consultar">

			</form>
		</div>



	<?php
	$a = executaQuery('SELECT * FROM logradouros');
	print_r($a);
	?>
	</body>
</html>