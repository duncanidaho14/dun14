<?php
session_start();
require('connect.php');

$d = array();

if(!isset($_SESSION['pseudo']) || empty($_SESSION['pseudo']) || !isset($_POST['action'])){
	$d["erreur"] = "Vous devez être connecté pour utiliser le tchat";
}
else{
	extract($_POST);
	$pseudo = mysql_escape_string($_SESSION['pseudo']);
	/*
	 Action : addMessage
	 Permet l'ajout d'un message
	*/
	 if($_POST['action'] == "addMessage"){
	 	$message = mysql_escape_string($message);
	 	$req = "INSERT INTO messages(pseudo, message, date) VALUES('$pseudo','$message',".time().")";
		mysql_query($req) or die(mysql_error());
		$d['erreur'] = "ok";
	 }
}


echo json_encode($d);
?>