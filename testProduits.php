<?php

	require_once('produits.php');
	
	$banane = new Produit();
	$poire = new Produit();
	$raisin = new Produit();

	$banane->modifierNom("Banane");
	$banane->modifierProduitKilo(1.5);
	$banane->modifierProduitUnitaire(2);

	$poire->modifierNom("Poire");
	$poire->modifierProduitKilo(2);
	$poire->modifierProduitUnitaire(3);

	$raisin->modifierNom("Raisin");
	$raisin->modifierProduitKilo(1);
	$raisin->modifierProduitUnitaire(1.5);

	echo gettype($banane);
	echo get_class($banane);
	var_dump($banane);

	echo gettype($poire);
	echo get_class($poire);
	var_dump($poire);

	echo gettype($raisin);
	echo get_class($raisin);
	var_dump($raisin);
?>