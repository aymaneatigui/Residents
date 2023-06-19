<?php
	if(!isset($_POST["save"])){
		header("location:../index.php");
		die();
	}

	$nom=$_POST["txtNom"];
	$prenom=$_POST["txtPrenom"];
	$number=$_POST["txtnumber"];
	$apa=$_POST["apa"];
	$profession=$_POST["prof"];
	$comm=$_POST["comm"];
	$photo=$_FILES["photo"]["tmp_name"];
	$dest="../NUM/images/photos/".$number.".jpg";
	move_uploaded_file($photo,$dest);
	include("workers.php");
	$e=new Etudiant($nom,$prenom,$number,$profession,$comm,$apa,$dest);
	$e->save();
	header("location:../index.php");
?>