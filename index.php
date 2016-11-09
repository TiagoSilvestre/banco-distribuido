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
			<div class="processando" style="background-color: yellow;display: none"><img src="loading.gif" style="width: 36px;">Processando...</div>
			<p style="text-align: center;font-size: 23px;"><u></u></p>

			<form method="POST" action="cadastra.php">
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
							<?php
								$logr = executaQuery('SELECT * FROM logradouros');
								foreach ($logr as $l){
									echo "<option value='". $l['idLogradouro'] ."'>" . $l['nome'] . '</option>';
								}
							?>
						</select>
						<a href="#" class="btn brn-sm btn-info" data-toggle="modal" data-target="#myModal" onclick="addCampo('Adicionar Logradouros')">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Bairro:</p>
					</div>

					<div>
						<select name="Bairros_idBairro">
							<?php
							$bai = executaQuery('SELECT * FROM bairros');
							foreach ($bai as $l){
								echo "<option value='". $l['idBairro'] ."'>" . $l['nome'] . '</option>';
							}
							?>
						</select>
						<a href="#" class="btn brn-sm btn-info" data-toggle="modal" data-target="#myModal" onclick="addCampo('Adicionar Bairro')">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Cidade:</p>
					</div>

					<div>
						<select name="Cidades_idCidade">
							<?php
							$logr = executaQuery('SELECT * FROM cidades');
							foreach ($logr as $l){
								echo "<option value='". $l['idCidade'] ."'>" . $l['nome'] . '</option>';
							}
							?>
						</select>

						<a href="#" class="btn brn-sm btn-info" data-toggle="modal" data-target="#myModal" onclick="addCampo('Adicionar Cidade')">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Estado:</p>
					</div>

					<div>
						<select name="Estados_idEstado">
							<?php
							$est = executaQuery('SELECT * FROM estados');
							foreach ($est as $l){
								echo "<option value='". $l['idEstado'] ."'>" . $l['nome'] . '</option>';
							}
							?>
						</select>
						<a href="#" class="btn brn-sm btn-info" data-toggle="modal" data-target="#myModal" onclick="addCampo('Adicionar Estado')">+</a>
						<br><br>
					</div>
				</div>

				<div class="contint">
					<div class="flr">
						<p>Paises:</p>
					</div>

					<div>
						<select name="Paises_idPais">
							<?php
							$paises = executaQuery('SELECT * FROM paises');
							foreach ($paises as $l){
								echo "<option value='". $l['idPais'] ."'>" . $l['nome'] . '</option>';
							}
							?>
						</select>
						<a href="#" class="btn brn-sm btn-info"  data-toggle="modal" data-target="#myModal" onclick="addCampo('Adicionar Pais')">+</a>
						<br><br>
					</div>
				</div>

				<input type="Submit" class="btn brn-sm btn-primary" name="operacao" value="Inclusão">
				<input type="Submit" class="btn brn-sm btn-primary" name="operacao" value="Alteração">
				<input type="button" class="btn brn-sm btn-primary" name="operacao" value="Consultar" onclick="consultaPessoa();">
			</form>
		</div>

	<!--***********************  MODAL  ***********************-->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel"></h4>
					</div>
					<div class="modal-body">
						<input type="text" name="novoCadastro" class="novoCadastro"/>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary cadastrar" data-dismiss="modal" onclick="$('#myModalLabel').text()">Cadastrar</button>
						<!--<button type="button" class="btn btn-primary">Cadastrar</button>-->
					</div>
				</div>
			</div>
		</div>


	<script src="js/script.js"></script>
	</body>
</html>