<?php

include("fonct.php");

$tab = ['titre', 'pays', 'realisateur'];

if(!valide($_GET, $tab)){
    echo"ya pas tout"; }else{
        include "traitfilm.php"; 
    }
    ?>