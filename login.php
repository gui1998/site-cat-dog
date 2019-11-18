

<?php
	
	session_start();

?>
<head>
	<meta charset="utf-8" />
</head>
<?php

	if (isset($_GET['act']) && $_GET['act']=="logoff") {
		unset($_SESSION['login_success']);
		unset($_SESSION['login_username']);
		header('Location: telaLogin.php');
	}

	if (isset($_REQUEST['email'])
	    && isset($_REQUEST['senha'])) {
	
		include('connection.php');

		$conn =getConnection();

		$senha=MD5($_POST['senha']);
		$email=$_POST['email'];
		
		$stmt = $conn->prepare( "Select * from usuarios where email=:email and senha=:senha ");
		$stmt->bindValue(":email",$email);
		$stmt->bindValue(":senha",$senha);
		$stmt->execute();

		if ($stmt->rowCount()>0) {
			
			$dados=$stmt->fetch();
			
			//$_SESSION['login']['success'] = true;
			//$_SESSION['login']['username'] = $dados_user['nome'];
			
			$_SESSION['login_success'] = true;
			$_SESSION['login_username'] = $dados['email'];	
			header('Location: logado.php');	
			
		}
		else {
			echo "<br /><div style='font-size:30px;'>Erro ao efetuar login, verifique login e senha por favor!</div>";
			 echo "<br /><a style=\"text-decoration:none;\" alt=\"adm\" href=\"telaLogin.php\"><button style=\"font-size: 20px;
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
	}
	
?>
