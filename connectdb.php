<?php
 try{
	@$con=mysqli_connect('localhost','root','','users');
	if(!$con) throw new Exception('Erreur de Connexion : '.mysqli_connect_error(),1);
}
catch(Exception $e){
	die($e->getMessage());
}
?>