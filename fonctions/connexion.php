<?php
	try{
		$bdd = new PDO ('mysql:host=localhost; dbname=pharmacovigilance','root','');
	}
	catch(Exception $e){
		die('Erreur: '.$e->getMessage());
    }
?>