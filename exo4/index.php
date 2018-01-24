<!DOCTYPE html>
<html>
<head>
<title>Exo 4</title>
</head>
<body>

<p>Ecrire un programme qui calcule la factorielle de n.</p>
<br>
<form action="" method="post">
    Nombre de Tour: <input type="text" name="nombre"><br>
    <input type="submit">
</form>


<?php
if (!empty($_POST['nombre']) && $_POST['nombre'] >= 0)
{
    $zt_nombre = $_POST['nombre'];
    $Resultat = 1;

    For ($i="1" ; $i<=$zt_nombre ; $i++)
    {
        $Resultat = $Resultat * $i;
        echo "<br>".$Resultat;
    }


}
?>


</body>
</html>
