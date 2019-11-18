<?php
	
	session_start();
?>
<?php
	if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
		header('Location: paginaHTML.php');
?>
<br />

<?php
	}
	else {
?>
	<strong>Para acessar essa parte do sistema
	é necessário estar autenticado!</strong>
<?php
	}
?>