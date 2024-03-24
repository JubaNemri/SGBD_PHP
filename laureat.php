<?php
include_once("fonct.php"); 

$tab = ['nom', 'pays', 'metier', 'sexe'];

if(valide($_GET, $tab)){
    include("laureat.php"); 
}else{
    include("inserelaureat.html"); 
    echo"veuilez donnez les informations nécessaires svp"; 
}
    ?>