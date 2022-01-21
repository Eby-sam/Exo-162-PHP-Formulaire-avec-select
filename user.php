<?php

$prenom1 = strip_tags(trim($_GET["prenom1"]));
$nom1 = strip_tags(trim($_GET["nom1"]));
echo $prenom1." ".$nom1."<br><br>";

$prenom2 = strip_tags(trim($_POST["prenom2"]));
$nom2 = strip_tags(trim($_POST["nom2"]));
echo $prenom2." ".$nom2;