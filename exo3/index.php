<!DOCTYPE html>
<html>
<head>
<title>Exo 3</title>
</head>
<body>

<p>Écrire un programme qui calcule la factorielle de 10.
Factorielle de 10 : 1 * 2 * 3 * 4 * 5 * 6 * 7 * 8 * 9 * 10
</p>

<?php
        $n = 1;
        for ($i=1; $i <= 10; $i++) {
          $n*=$i;
        }
        echo number_format($n, 0, ',', ',');;
?>

</body>
</html>
