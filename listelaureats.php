<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lauréats</title>
    <link rel='stylesheet' href='styl.css'>
  </head>
  <body>
  <header>
        <div class="wrap">
            <ul class="navigation">
                <li><a href="listepalmes.php"> Palmes d'or </a></li>
                <li><a href="listeprix.php"> Prix</a></li>
                <li><a href="listefilms.php"> Films récompensés </a></li>
            </ul>
        </div>
      </div>
    </header>

  <section>
   <?php 
   include_once("fonct.php");
   $col = getAllLaureats(); 
echo "<ul>"; 
foreach($col as $c){
    echo"<li> <ul>";
    foreach($c as $x => $v){
        echo"<li>"; 
    echo  $x ." : ". $v ."</li><br>";}
    echo "</ul> </li>";
    echo "<br> <br> <br> <br>";
}
echo "</ul>"; ?>

  </section>

  <footer>
    <a href="inserelaureat.html"> Insérer un nouveau laureat </a>
  </footer>

  </body>
</html>