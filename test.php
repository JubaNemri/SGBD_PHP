<?php

 include_once("fonct.php");
  $bdd = connexion(); 
  $query = "INSERT INTO p09_laureat (nomLaureat, sexe, pays, metier) VALUES ('manny', 'masculin', 'dz', 'acteur')"; 

  if (mysqli_query($bdd, $query)) {
    echo "reussi"; 
      include "listelaureats.php"; 
  }else{
  echo "echec"; 
  }
  ?>



