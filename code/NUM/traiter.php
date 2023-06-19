<?php
	if(!isset($_POST["save"])){
		header("location:Add.php");
		die();
	}
	$cne=$_POST["txtCne"];
	$nom=$_POST["txtNom"];
	$prenom=$_POST["txtPrenom"];
	$number=$_POST["txtnumber"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	$bat=$_POST["bat"];
	$apa=$_POST["apa"];
	include("user.php");
	$e=new Etudiant($cne,$nom,$prenom,$number,$bat,$apa,$login,$password);
	$e->save();
	header("location:../index.php");
?>