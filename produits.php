<?php

class Produit {
	
	public $nom;
	public $produitUnite;
	public $produitKilo;
	
	public function __construct(){
		$nom = "Pomme";
		$produitUnite = 2;
		$produitKilo = 1.5;
		
		$this->nom=$nom;
		$this->produitUnite=$produitUnite;
		$this->produitKilo=$produitKilo;
	}
	
	public function modifierNom($a){
		$this->nom=$a;
	}

	public function modifierProduitUnitaire($b){
		$this->produitUnite=$b;
	}
	
	public function modifierProduitKilo($c){
		$this->produitKilo=$c;
	}	
		
}


