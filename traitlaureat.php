<?php
include_once("fonct.php"); 
$nom = $_GET['nom']; 
$sexe = $_GET['sexe']; 
$pays = $_GET['pays']; 
$metier = $_GET['metier'];

  $bdd = connexion(); 
    $query = "INSERT INTO p09_laureat (nomLaureat, sexe, pays, metier) VALUES ('".$nom."', '".$sexe ."', '".$pays ."', '".$metier ."'); "; 
  if(mysqli_query($bdd, $query)){
    echo "g"; 
    include("inserelaureat.html"); 
  }else{
    echo"Impossible d'inserer le laureat demandé veuillez réessayer".mysqli_error($phpconnect); 
    include("inserelaureat.html"); 
  }

  mysqli_close($bdd); 
  ?>