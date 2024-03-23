<?php


function valide($method, $tab){
    foreach($tab as $t){
        if(!isset($method[$t])){
            return false;
        }
    }
    return true;
}



function connexion() {
    /** TODO renseigner $strConnex à l'aide de $_ENV configuré dans monEnv.php */
    $bdd = mysqli_connect("localhost", "la223499", "20223499", "la223499");
    return $bdd; 
}

function getAllLaureats(){
    $bdd = connexion();
    $query = "SELECT nomLaureat, sexe, pays, metier, EditionPrixL, nomPrix FROM (p09_laureat NATURAL JOIN p09_recompenserlaureat NATURAL JOIN p09_prix);";
    $resultat = mysqli_query($bdd, $query);
    $resu = array();
    while($donnees = mysqli_fetch_assoc($resultat)){
            $resu[] = array(
                "Nom Laureat" => $donnees["nomLaureat"], 
                "Sexe" => $donnees["sexe"],
                "Pays" => $donnees["pays"],
                "Métier" => $donnees["metier"],
                "Edition du prix" => $donnees["EditionPrixL"],
                "Nom du Prix" => $donnees["nomPrix"]
            );
    }
    mysqli_free_result($resultat); 
    mysqli_close($bdd); 
    return $resu; 

}

/*$col = getAllLaureats();
echo "<ul>"; 
foreach($col as $c){
    echo"<li> <ul>";
    foreach($c as $x => $v){
        echo"<li>"; 
    echo  $x ." : ". $v ."</li><br>";}
    echo "</ul> </li>";
    echo "<br> <br> <br> <br>";
}
echo "</ul>";

echo " H<br />";*/


function getAllPrix(){
    $bdd = connexion(); 
    $query = "SELECT * FROM p09_prix";
    $resultat = mysqli_query($bdd, $query); 
    $resu = array(); 
    while($donnees = mysqli_fetch_assoc($resultat)){
        $resu[] = array(
            "Nom du prix" => $donnees["nomPriX"], 
            "Type de prix" => $donnees["typePrix"]
        );
    }
    mysqli_free_result($resultat); 
    mysqli_close($bdd); 
    return $resu; 
}


function getAllFilms(){
    $bdd = connexion();
    $query = "SELECT titreFilm, paysFilm, nomLaureat AS realisateur, EditionPrixF, nomPrix FROM (p09_film NATURAL JOIN p09_recompenserfilm NATURAL JOIN p09_prix INNER JOIN p09_laureat ON idRealisateur = p09_laureat.idLaureat);";
    $resultat = mysqli_query($bdd, $query);
    $resu = array();
    while($donnees = mysqli_fetch_assoc($resultat)){
            $resu[] = array(
                "Titre du film" => $donnees["titreFilm"], 
                "Pays" => $donnees["paysFilm"],
                "Realisateur" => $donnees["realisateur"],
                "Edition du prix" => $donnees["EditionPrixF"],
                "Nom du Prix" => $donnees["nomPrix"]
            );
    }
    mysqli_free_result($resultat); 
    mysqli_close($bdd); 
    return $resu; 

}

/*$col = getAllFilms(); 
echo "<ul>"; 
foreach($col as $c){
    echo"<li> <ul>";
    foreach($c as $x => $v){
        echo"<li>"; 
    echo  $x ." : ". $v ."</li><br>";}
    echo "</ul> </li>";
    echo "<br> <br> <br> <br>";
}
echo "</ul>";*/

function getAllPalmes(){
    $bdd = connexion();
    $query = "SELECT titreFilm, paysFilm, nomLaureat AS realisateur, EditionPrixF, nomPrix FROM (p09_film NATURAL JOIN p09_recompenserfilm NATURAL JOIN p09_prix INNER JOIN p09_laureat ON idRealisateur = p09_laureat.idLaureat) WHERE nomPrix LIKE 'Palme%';";
    $resultat = mysqli_query($bdd, $query);
    $resu = array();
    while($donnees = mysqli_fetch_assoc($resultat)){
            $resu[] = array(
                "Titre du film" => $donnees["titreFilm"], 
                "Pays" => $donnees["paysFilm"],
                "Realisateur" => $donnees["realisateur"],
                "Edition du prix" => $donnees["EditionPrixF"],
                "Nom du Prix" => $donnees["nomPrix"]
            );
    }
    mysqli_free_result($resultat); 
    mysqli_close($bdd); 
    return $resu; 

}

/*$col = getAllPalmes(); 
echo "<ul>"; 
foreach($col as $c){
    echo"<li> <ul>";
    foreach($c as $x => $v){
        echo"<li>"; 
    echo  $x ." : ". $v ."</li><br>";}
    echo "</ul> </li>";
    echo "<br> <br> <br> <br>";
}
echo "</ul>";*/

