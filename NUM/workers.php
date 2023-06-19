<?php
class etudiant{
	var $nom;
	var $prenom;
	var $number;
	var $profession;
	var $apa;
	var $comm;
	var $photo;
	function __construct($n,$p,$e,$pro,$co,$apa,$ph){
		$this->nom=$n;
		$this->prenom=$p;
		$this->number=$e;
		$this->profession=$pro;
		$this->apa=$apa;
		$this->comm=$co;
		$this->photo=$ph;
	}
	public function save(){
		include("DAO.php");
		$dao=new DAO();
		$dao->addworker($this->nom,$this->prenom,$this->number,$this->profession,$this->comm,$this->apa,$this->photo);
	}
}
?>
