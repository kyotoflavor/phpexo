<!DOCTYPE html>
<html>
<head>
<title>Exo 1</title>
</head>
<body>

<p>Exercice 1
Écrire un programme PHP qui affiche tous les nombres impairs entre 0 et 1000, par
ordre croissant : « 1 3 5 7 ... 995 997 999 ».</p>

<?php
  $chiffre=1;
  echo $chiffre;
  while ($chiffre <= 1000){
    $chiffre+=2;
    echo "<br>".$chiffre;
  }

?>

</body>
</html>
