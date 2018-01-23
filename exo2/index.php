<!DOCTYPE html>
<html>
<head>
<title>Exo 2</title>
</head>
<body>

<p>Exercice 2
Écrire un programme qui écrit 500 fois « Je ne dois pas oublier de signer la feuille
de présence. »</p>

<?php
    $nCompte = 0;
    while($nCompte <= 500) {
        echo "« Je ne dois pas oublier de signer la feuille de présence. »".$nCompte."<br>";
        $nCompte++;
    }
?>

</body>
</html>
