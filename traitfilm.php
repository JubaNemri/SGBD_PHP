<?php
  $bdd = connexion(); 
  $query = "SELECT idLaureat FROM p09_laureat WHERE nomlaureat ='".$_GET['realisateur'] . "';";

  $resul = mysqli_query($bdd, $query); 
  if(mysqli_num_rows($resul) == 0){
      $sql = "INSERT INTO p09_film(titreFilm, paysFilm) VALUES ('" . $_GET['titre'] ."', '" . $_GET['pays'] ."');"; } 
  else{
      $sql = "INSERT INTO p09_film(titreFilm, paysFilm, idRealisateur) VALUES ('" . $_GET['titre'] ."', '" . $_GET['pays'] ."', ".mysqli_fetch_assoc($resul)['idLaureat'].");"; 
  }
  if(mysqli_query($bdd, $sql)){
    include("insererfilm.html"); 
  }else{
    echo"Impossible d'inserer le film demandé veuillez réessayer"; 
    include("insererfilm.html"); 
  }
  mysqli_free_result($resul); 
  mysqli_close($bdd); 
  ?>