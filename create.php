<?php
    
    session_start();


if (isset($_SESSION['login_success']) ||$_SESSION['login_success'] == true) {
    

		require 'connection.php'; 
		$conn =getConnection();

		$sql = 'INSERT INTO Reservas(nome_dono,nome_pet,tipo_animal,data_reserva,servicos,sexo,id_porte,comportamento,observacao) values (:nome_dono,:nome_pet,:tipo_animal,:data_reserva,:servicos,:sexo,:id_porte,:comportamento,:observacao)';
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nome_dono",$_REQUEST['txt-nomecompleto']);
		$stmt->bindValue(":nome_pet",$_REQUEST['txt-nomepet']);
		$stmt->bindValue(":tipo_animal",$_REQUEST['animal']);
		$stmt->bindValue(":data_reserva",$_REQUEST['datareserva']);
		$stmt->bindValue(":id_porte",$_REQUEST['porte']);
		$stmt->bindValue(":sexo",$_REQUEST['sexo']);

		$servicos= implode($_POST["servicos"],", ");

		$stmt->bindValue(":servicos",$servicos);
		$stmt->bindValue(":comportamento",$_REQUEST['comportamento']);
		$stmt->bindValue(":observacao",$_REQUEST['txt-observacao']);

		 if ($stmt->execute()) {

		 	echo "<br /> <div style='font-size:30px; text-align:left;'>Salvo com sucesso! </div>";
		 	echo "<br /><a style=\"text-decoration:none;\" alt=\"adm\" href=\"admin.php\"><button style=\"font-size: 20px;
			color:black;
			height: 30px;
			width: 400px;
			border-radius: 30px;
			margin:5px 0px 5px 0px;
		  	padding: 5px 5px;
			background-color:  rgba(32, 124, 67, 0.5);
			align-content: center;\" type=\"button\">
		 	<span >Seção administrativa</span></button></a>";

		 	echo "<br /><a style=\"text-decoration:none;\" alt=\"reservasList\" href=\"telaReservasList.php\">
		 	<button style=\"font-size: 20px;
			color:black;
			height: 30px;
			width: 400px;
			border-radius: 30px;
			margin:5px 0px 5px 0px;
		  	padding: 5px 5px;
			background-color:  rgba(32, 124, 67, 0.5);
			justify-content: left;
			text-align: center;\" type=\"button\">
		 	<span >Lista de Reservas</span></button></a>";

	 }else{
	 	echo 'Erro ao salvar!';
	 }
}
	else {

		echo '<strong>Para acessar essa parte do sistema
		é necessário estar autenticado!</strong>';


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

