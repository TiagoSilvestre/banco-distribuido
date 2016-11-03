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
			<p style="text-align: center;font-size: 23px;"><u></u></p>

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
							<?php
								$logr = executaQuery('SELECT * FROM logradouros');
								foreach ($logr as $l){
									echo '<option>' . $l['nome'] . '</option>';
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
							$logr = executaQuery('SELECT * FROM bairros');
							foreach ($logr as $l){
								echo '<option>' . $l['nome'] . '</option>';
							}
							?>
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
	<!-- Button trigger modal
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		+
	</button>-->

	<!-- Modal -->
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
						<button type="button" class="btn btn-primary cadastrar" data-dismiss="modal">Cadastrar</button>
						<!--<button type="button" class="btn btn-primary">Cadastrar</button>-->
					</div>
				</div>
			</div>
		</div>


	<script>
		function addCampo(tit){
			$( "#myModalLabel" ).text(tit);
		}

		$('.cadastrar').click(function(){
			var campo = $('#myModalLabel').text();
			var valor = $('.novoCadastro').val();

			$.ajax({
				type: 'POST',
				data: {campo : campo, valor : valor},
				url:'processa.php',
			}).done(function( msg ) {

				alert( msg );

			}).fail(function() {
				alert( "Ocorreram erros ao salvar" );
			});
		});

	</script>
	</body>
</html>
















<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(!empty($_POST['codigo']) && !empty($_POST['nomePessoa'])){
	echo "tem";
}

?>