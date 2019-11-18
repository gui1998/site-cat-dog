<?php

function getConnection(){
$dsn='mysql:host=localhost;dbname=petshop';
$user='root';
$pass='';

try 
{

$pdo= new pdo($dsn,$user,$pass,
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ));
return $pdo;

}catch(PDOException $ex){
	echo 'Erro: '.$ex->getMessage();
}
}
?>