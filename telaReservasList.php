<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" >
		<title>CRUD</title>
		<meta name="author" content="Gabriel Salla, Guilherme Mossi">
		<link rel="stylesheet" href="Css/reservasList.css" >
	</head>

	<body>
		
		<?php 
		include 'connection.php';

		$conn =getConnection();

		$stmt=$conn->prepare("SELECT * FROM reservas, porte where reservas.id_porte=porte.id_porte");
		$stmt->execute();
		?>
		<div class="voltarFormulario"><a alt="reservasList" href="paginaHTML.php"> <button>Voltar para Formulário</button></a>
		<br><br>
		<table class="tabelaLista">
			<tr class="cabecalhoTable">
				<td style=" width: 200px;">Nome Dono</td>
				<td style="width: 200px;">Nome PET</td>
				<td style="width: 150px;">Data Reserva</td>
				<td style="width: 150px;">Porte Animal</td>
				<td style="width: 100px;">Animal</td>
				<td style="width: 300px;">Serviços</td>
				<td style="width: 50px;">Sexo</td>
				<td style="width: 500px;">Observação</td>
				<td id="deleteCabecalho">DELETAR</td>

			</tr>
		<?php

		/*PEGAR OS DADOS DO BANCO*/
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
			
			<tr class="linhasDados">
			<td><?php echo $nome_dono;?> </td>
			<td><?php echo $nome_pet;?> </td>
			<td ><?php echo $data_reserva;?> </td>
			<td ><?php echo $descricao;?> </td>
			<td ><?php echo $tipo_animal;?> </td>
			<td ><?php echo $servicos;?> </td>
			<td ><?php echo  $sexo = ('F') ? 'Fêminino' : 'Masculino'; ;?> </td>
			<td ><?php echo $observacao;?> </td>
			<td id="deleteRow"> <a href="delete.php?id_reserva=<?php echo $id_reserva; ?>">Delete</a></td>
			<tr>
			<?php
		}
		?>
		</table>
	</body>
</html>
