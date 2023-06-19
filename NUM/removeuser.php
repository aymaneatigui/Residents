<?php
	$cne=$_GET['cne'];
	include("DAO.php");
	$dao=new DAO();
	$dao->removeuser($cne);
	header("location:liste.php");
?>
