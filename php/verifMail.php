<?php 

extract($_POST);
$email = htmlspecialchars(trim($email));
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "Ceci n'est pas une adresse mail<br />";
		exit();
	}else{
		echo 'success';
	}
 ?>