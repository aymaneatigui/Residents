<?php
class DAO{
	function __construct(){}
	function connexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');
		return $pdo;
	}
	function estAuthentifie($login,$password){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select * from users where login= ? and password = ?");
   		$reponse->execute([$login,$password]);
   		if ($ligne=$reponse->fetch()) return true;
   		else return false;
	}
	function Add($cne,$nom,$prenom,$number,$bat,$apa,$login,$password){
		$bdd=$this->connexion();
		$dao=new DAO();
		$reponse=$bdd->prepare("insert into etudiant (cne, nom, prenom, number, bat, apa) values(?,?,?,?,?,?)");
   		$reponse->execute([$cne,$nom,$prenom,$number,$bat,$apa]);
		$lastid = $bdd->lastInsertId();
   		$reponse->closeCursor();  
		$dao->addtouser($login,$password,$lastid);

	}
	function addtouser($login,$password,$lastid){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("insert into users (login, password , custid ) values(?,?,?)");
   		$reponse->execute([$login,$password,$lastid]);
   		$reponse->closeCursor();  
	}
	function liste(){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select * from etudiant");
   		$reponse->execute();
   		$lst=[];
   		while($ligne=$reponse->fetch()){
  	  		$lst[]=[$ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[5],$ligne[6]];
  		}
   		$reponse->closeCursor();  
   		return $lst;
	}
	function removeuser($cne){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("delete from etudiant where cne= ?");
   		$reponse->execute([$cne]);
	}
	function scne($login){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("SELECT nom, prenom, number, apa FROM etudiant WHERE bat = (SELECT bat FROM etudiant WHERE custid= (select custid from users where login = ?))");
   		$reponse->execute([$login]);
		   $lst=[];
   		while($ligne=$reponse->fetch()){
  	  		$lst[]=[$ligne[0],$ligne[1],$ligne[2],$ligne[3]];
  		}
   		$reponse->closeCursor();  
   		return $lst;
	}

	function addworker($nom,$prenom,$number,$profession,$comm,$apa,$photo){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("insert into worker (nom, prenom, number, profession, comm ,apa , photo ) values(?,?,?,?,?,?,?)");
   		$reponse->execute([$nom, $prenom, $number, $profession, $comm, $apa, $photo]);
   		$reponse->closeCursor();  
	}
	function listeworkers(){
		$bdd=$this->connexion();
		$reponse=$bdd->prepare("select nom, prenom, number, profession, comm ,apa , photo  from worker");
   		$reponse->execute();
   		$lst=[];
   		while($ligne=$reponse->fetch()){
  	  		$lst[]=[$ligne[0],$ligne[1],$ligne[2],$ligne[3],$ligne[4],$ligne[5],$ligne[6]];
  		}
   		$reponse->closeCursor();  
   		return $lst;
	}
}
?>