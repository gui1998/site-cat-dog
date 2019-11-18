<!--GUILHERME MOSSI BENTO 201711316008
   GABRIEL SALLA GALVAO DIAS 201711316009 !-->
<?php
	
	session_start();
?>
<?php
	if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
?>
   
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" >
		<title>Prova WEB1</title>
		<meta name="author" content="Gabriel Salla, Guilherme Mossi">
		<link rel="stylesheet" href="Css/paginaCSS.css" >
	</head>

	<body>
	<!--CABEÇALHO-->
	<div class="header">
		<div id="tituloPrincipal">
			<span>CatDog</span>
			<img src="imagens/catdog.png" align="center" width="150px" height="50px">

			<a alt="logoff" href="login.php?act=logoff" > <img src="imagens/logout.png" align="right" width="50px" height="50px"></a>
		</div>
	</div>

	<div class="container">
		<div class="col-main">
			<div class="container-main>">

				<!--AREA SUPERIOR-->
				<div class="main-container-top">

					<!--MENU-->
					<div class="menu-container">
						<div class="menu-box">MENU</div>
						<div class="menu">
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Reserva</a></li>
								<li><a href="">Localização</a></li>
								<li><a href="">Contato</a></li>
							</ul>
						</div>
					</div>

					<!--AREA DO QUADRO DE TEXTO-->
					<div class="texto-principal-container">
						<div class="titulo-texto-principal">
							Sua melhor escolha está aqui!!!
							<a href="" alt="pets"><img src="imagens/pets.png" width="30px" height="30px"></a>
						</div>
						<article class="texto-principal"> 
							<p id="animacao">

								<a href="https://goo.gl/maps/CKPek7FDQbSkNp9v7" alt="localizacao"><img src="imagens/mapa.png" width="200px" height="150px"><a/>
									<span>Estamos localizados aqui →</span><br> 
									<span>Venha nos visitar! </span>
									<br> <span>Café na faixa.
										<span style="font-size: 6px"> (de 5 reais)</span></span>
									</p> 
								</article>

							</div>

							<!--EFEITO TELEFONE-->
							<div id="telefone">
								<div style="display: table-cell; vertical-align: middle;">
									<a href="" alt="wpp"><img src="imagens/wpp.png" width="50px" height="50px"></a>
								</div>
								<div style="display: table-cell; vertical-align: middle;">
									(65)99999-9999
								</div>
							</div>
						</div>

						<!--TITULO CENTRAL-->
						<div class="titulo">
							PRODUTOS MAIS VENDIDOS

						</div>

						<!--AREA DOS CARDS-->
						<div class="main-container-down">

							<div id="main-cards">

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 1
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 2
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 3
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 4
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 5
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 6
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 7
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

								<a href="">
									<div class="card">
										<h4 style="font-size:10px; text-align: center;">Produto 8
										</h4>
										<img src="imagens/vermifugo.jpg"  alt="Avatar" >
										<h4 style="font-size:10px; text-align: center;">Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
											Pele e pelagem saudáveis
											Controle das bolas de pelo
											Contêm fibras conhecidas por facilitarem a eliminação das bolas de pelo através das fezes.
										</h4>
									</div>
								</a>

							</div>

						</div>

						<!--FORMULARIO DE RESERVA-->
						<form action="create.php" method="post">>
							<h2 >Faça sua Reserva!</h2>
							<label for="txt-nomecompleto">Nome Completo</label>
							<input 	type="text" name="txt-nomecompleto" placeholder="Nome Completo" required/>
							<br />
							<br />
							<label for="txt-nomepet">Nome do <span style="font-family: Chalkduster, fantasy">PET</span></label>
							<input 	type="text" name="txt-nomepet" placeholder="Nome do seu PET" required/>
							<br />
							<br />

							<label for="data">Data da Reserva</label>
							<input 	type="date" name="datareserva"  required/>
							<br />
							<br />

							<span style="font-size: 20px;">Animal</span>
							<br />
							<input type="radio" name="animal" value="gato" />&nbsp;
							<label for="gato">Gato</label>
							<br />
							<input type="radio" name="animal" value="rato" />&nbsp;
							<label for="rato">Rato</label>
							<br />
							<input type="radio" name="animal" value="cachorro" />&nbsp;
							<label for="cachorro">Cachorro</label>
							<br />
							<br />

							<span style="font-size: 20px;">Comportamento</span>
							<br />
							<input type="radio" name="comportamento" value="quieto" />&nbsp;
							<label for="quieto">Quieto</label>
							<br />
							<input type="radio" name="comportamento" value="agressivo" />&nbsp;
							<label for="agressivo">Agressivo</label>
							<br />
							<input type="radio" name="comportamento" value="brincalhão" />&nbsp;
							<label for="brincalhão">Brincalhão</label>
							<br />
							<br />

							<span style="font-size: 20px;">Serviços</span>
							<br/>
							<label for="banho">Banho:</label>
							<input type="checkbox" name="servicos[]" value="banho"/>

							<label for="tosa">Tosa:</label>
							<input type="checkbox" name="servicos[]" value="tosa"/>

							<label for="acupuntura">Acupuntura:</label>
							<input type="checkbox" name="servicos[]" value="acupuntura "/>

							<label for="fotos">Fotos:</label>
							<input type="checkbox" name="servicos[]" value="fotos"/>

							<label for="perfume">Perfume:</label>
							<input type="checkbox" name="servicos[]" value="perfume"/>

							<label for="unha">Unha:</label>
							<input type="checkbox" name="servicos[]" value="unha"/>
							<br />
							<br />

							<span style="font-size: 20px;">Sexo</span>
							<br />
							<input type="radio"  name="sexo" value="Fêmea" />&nbsp;
							<label for="feminino">Fêmea</label>
							<br />
							<input type="radio"  name="sexo" value="Macho" />&nbsp;
							<label for="masculino">Macho</label>
							<br />
							<br>

							<label >Qual o porte do seu <span style="font-family: Chalkduster, fantasy">PET</span>?</span></label>
							<br>

							<!--OPÇÕES DO SELECT VEM DAS CADASTRADAS DO BANCO!-->
							<select style="font-size: 20px"size="1" name="porte">
								<?php 
									include 'connection.php';

									$conn =getConnection();

									$stmt=$conn->prepare("SELECT * FROM porte");
									$stmt->execute();
									?>
									<?php

									while($row=$stmt->fetch(PDO::FETCH_ASSOC))
									{
										extract($row);
										?>
										<?php echo "<option value=\" $id_porte\"> $descricao </option>";?> 
										
										<?php
									}
									?>
								
							</select>
							
							<br>
							<br>

							<label for="txt-observacao">Observação:</label>
							<br>
							<textarea name="txt-observacao" style="width:400px; height:100px;"></textarea>
							<br />

							<button type="submit">Cadastrar</button> 
							<button type="button"><a alt="reservasList" href="telaReservasList.php"><span style="color:white;">Lista de Reservas</span></button></a>
						</form>
					</div>
				</div>

				<!--COLUNA LATERAL DIREITA-->
				<div class="col-right">
					<div class="main-col-right"> 

						<div id="card-right-titulo">
							<div id="titulo-right">#doguinhos CatDog</div>
						</div>

						<div id="card-right1">

							<img src="imagens\cachorro-chorro.jpg" >
						</div>
						<div id="card-right2">

							<img src="imagens\cachorro-chorro.jpg">
						</div>

						<div id="card-right3">

							<img src="imagens\cachorro-chorro.jpg" >
						</div>
						<div id="card-right4">

							<img src="imagens\cachorro-chorro.jpg" >
						</div>
						<div id="card-right5">

							<img src="imagens\cachorro-chorro.jpg">
						</div>
						<div id="card-right6">

							<img src="imagens\cachorro-chorro.jpg" >
						</div>

					</div>
				</div>
			</div>

			<!--RODAPÉ-->
			<div class="footer"></div>
	</body>

</html>

<?php
	}
	else {
?>
	<strong>Para acessar essa parte do sistema
	é necessário estar autenticado!</strong>

<?php
echo "<br /><a style=\"text-decoration:none;\" alt=\"login\" href=\"telaLogin.php\"><button style=\"font-size: 20px;
	color:black;
	height: 30px;
	width: 400px;
	border-radius: 30px;
	margin:5px 0px 5px 0px;
  	padding: 5px 5px;
	background-color:  rgba(32, 124, 67, 0.5);
	justify-content: left;
	text-align: center;\" type=\"button\">
 	<span >Login</span></button></a>";	
	}
?>