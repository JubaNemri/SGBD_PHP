<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Films</title>
    <link rel='stylesheet' href='styl.css'>
  </head>
  <body>
  <header>
        <div class="wrap">
            <ul class="navigation">
                <li><a href="listepalmes.php"> Palmes d'or </a></li>
                <li><a href="listeprix.php"> Prix</a></li>
                <li><a href="listelaureats.php"> Lauréats </a></li>
            </ul>
        </div>
      </div>
    </header>

  <section class="coucou">
   <?php 
   include("fonct.php");
   $col = getAllFilms(); 
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
    <a href="insererfilm.html"> Insérer un nouveau film </a>
  </footer>

  </body>
</html>