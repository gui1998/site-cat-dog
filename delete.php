<?php 

/*OBJETO PARA DELETAR*/
include 'connection.php';

$conn =getConnection();

$id_reserva=$_GET['id_reserva'];

$stmt=$conn->prepare("DELETE FROM reservas WHERE ID_RESERVA=:id_reserva");
$stmt->bindValue(":id_reserva",$id_reserva);
$stmt->execute();
header('Location: telaReservasList.php');
?>