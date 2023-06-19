<?php

class etudiant{
	var $cne;
	var $nom;
	var $prenom;
	var $number;
	var $bat;
	var $apa;
	var $login;
	var $password;

	function __construct($c,$n,$p,$e,$ba,$ap,$lo,$pas){
		$this->nom=$n;
		$this->cne=$c;
		$this->prenom=$p;
		$this->number=$e;
		$this->bat=$ba;
		$this->apa=$ap;
		$this->login=$lo;
		$this->password=$pas;
	}
	public function save(){
		include("DAO.php");
		$dao=new DAO();
		$dao->Add($this->cne,$this->nom,$this->prenom,$this->number,$this->bat,$this->apa,$this->login,$this->password);
	}
}
?>
